const EXCLUDE = "exclude";
const ABUNDANT = "abundant";
const MODERATE = "moderate";

const MEDIUMRISK = "medio";
const HIGHRISK = "alto";
const PRESENTRISK = "presente";

const COMPLEX_URL = "obtener_enfermedades_complejas2.php";
const MONOGENIC_URL = "obtenerPdfMonogenic.php";
const DISEASE_FOOD_CONSUMPTION_TABLE_URL = "getDiseaseFoodConsumptionTable.php"

//Always start with "exclude" property before checking the other foods
categories = [EXCLUDE,ABUNDANT,MODERATE];

document.addEventListener('DOMContentLoaded', function () {
    __getMedicalReportFoodRelationship();
});

/**
 * Populates the consumption food section in a medical report by processing
 * each disease and its level of consumption allowed.
 */
async function __getMedicalReportFoodRelationship() {
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    complexDiseases = await __getClientDiseasesPdf(COMPLEX_URL +`?id=${id}`);
    monogenicDiseases = await __getClientDiseasesPdf(MONOGENIC_URL +`?id=${id}`);
    diseaseRels = await __getDiseaseFoodConsumptionRelationship(DISEASE_FOOD_CONSUMPTION_TABLE_URL);
    processedUniqueValues = __getFoodByConsumptionLevel([...complexDiseases, ...monogenicDiseases], diseaseRels);
    for (category of categories) {
        const paragraph = document.getElementById(`${category}-consume-food`);
        const sortedValues = processedUniqueValues[category].sort().join(", ")
        paragraph.textContent =  sortedValues.length > 0 ? processedUniqueValues[category].sort().join(", ") + "." : "-";
    }
}

/**
 * 
 * @param {string} url - The location where the disease and food consumption information
 * will be obtained from.
 * @returns {{string: {string: [string]}}} - The final object that has each disease with each food consumption
 * level related.
 */
async function __getDiseaseFoodConsumptionRelationship(url) {
    try  {
        const response  = await fetch(url);
        const data = await response.json();
        diseaseRels = {};
        delimeters = /[(),]/;
        for (const d of data) {
            diseaseRels[d["disease"]] = {
                "abundant": d.hasOwnProperty(ABUNDANT) ? d[ABUNDANT].split(delimeters) : [],
                "moderate": d.hasOwnProperty(MODERATE) ? d[MODERATE].split(delimeters) : [],
                "exclude": d.hasOwnProperty(EXCLUDE) ? d[EXCLUDE].split(delimeters) : [],
            };
        }
        return diseaseRels;
    } catch (error) {
        console.error("There was an error with the request:", error);
    }
    
}


/**
 * Given a url it obtains the pdfUrl and calls {ProcessPdf} to get all disease 
 * information.
 * 
 * @param {string} url - The url where the disease information is located.
 * @return {[string]} - The list of all diseases found
 */
async function __getClientDiseasesPdf(url) {
    try {
        const response = await fetch(url);
        data = await response.json();
        if (data.error) {
            throw data.error;
        }
        const pdfUrl =  Object.keys(data).find((k) => k.includes("Pdf"));
        if (pdfUrl) {
            return __getProcessedPdfDiseases(data[pdfUrl],__recordDisease);
        } 
        throw Error('Disease PDF not found');
    } catch (error) {
        console.error('There was an error with the request:', error)
    }
}

/**
 * Reads from a number medical records and offsets the beginning of storing information
 * until the stop pattern is found. Only stores diseases that may present a risk to the patient.
 * 
 * @param {number} pageNum - The page number currently being checked for records.
 * @param {[object]} textItems - The text items contained in the records.
 * @param {[object]} results - The array that will store the information selected.
 * @param {RegExp} stopPattern - The stop pattern that offsets the beginning of storing information
 * for the first page of records.
 */
function __recordDisease(pageNum, textItems, results, stopPattern) {
    i = 0
    if (pageNum == 1) {
        //Makes sure the first page skips all headers and column titles of PDF.
        while (!stopPattern.test(textItems[i].str)) {
            //Advance the pointer in textItems until a matching text with "Resultado" in it is found.
            i++;
        }
        //Advance the pointer again to pass the matching text with "Resultado" in it.
        i++;  
    } 
    //Offset the starting value in first page 1 to i+1 to skip any "eol or whise space" in the pdf.
    offset = pageNum == 1 ? i+1 : 0;
    j = offset
    riskKeywords = [MEDIUMRISK, HIGHRISK, PRESENTRISK];
    while (j < textItems.length) {
        disease =  __processWord(textItems[j].str);
        //Increase by 2 to detect results in medical record.
        j += 2;
        result = __processWord(textItems[j].str);
        if (riskKeywords.some((keyword) => result.includes(keyword))) {
            results.push(disease);
        }
        //Increase by 2 to go to next disease in medical record.
        j+=2;
    }
}

/**
 * Loads a pdf file and returns an array with all the information required by calling the callback.
 * 
 * @param {string} pdfUrl - The pdfUrl to find and load the Pdf file.
 * @param {function(any)} callback - The function that executes the storage of information, must pass the
 * diseaseResults as an argument to it.
 * @returns {[object]} - The information returned after executing the callback function.
 */
async function __getProcessedPdfDiseases(pdfUrl, callback) {
    const loadingTask = pdfjsLib.getDocument(pdfUrl);
    const pdf = await loadingTask.promise;
    const resultPattern = /^Resultado/;
    let diseaseResults = [];
    for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
        const page = await pdf.getPage(pageNum);
        const textContent = await page.getTextContent();
        const textItems = textContent.items;
        callback(pageNum, textItems,diseaseResults,resultPattern);
    }
    return diseaseResults;
}

/**
 * Removes any leading, trailing and "." char and also converts the first valid
 * char to uppercase.
 * 
 * @param {string} word - The word to process.
 * @returns {string} The new processed word.
 */
function __processWord(word) {
    if (typeof word !== "string" || word.length == 0) {
        return "";
    }
    delimeters = /[^a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\s]/g;
    trimmed = word.trim();
    processed = trimmed.replace(delimeters,"");
    first = processed.charAt(0);
    return first.toUpperCase() + processed.substring(1);
};

/**
 * Process all words by calling {processWord}.
 * 
 * @param {[string]} words - The words to be processed.
 * @returns {[string]} A new list of processed words.
 */
function __processWords(words) {
    if (!Array.isArray(words) || words.length == 0) {
        return [];
    }
    processed = words.map(__processWord).filter((word) => word.length > 0);
    return processed;
}

/**
 * For each disease adds the new food if the food does not already exist in the category
 * and the food is not an excluded food.
 * 
 * @param {{string: [string]}} disease - The object with the foods to be processed.
 * @param {string} category - The category of foods to process.
 * @param {{string: [string]}} uniqueValues - The object that will be updated.
 * @returns 
 */
function __processUniqueFood(disease, category, uniqueValues) {
    if (typeof category !== "string") {
        return;
    }
    foods = disease[category]
    processed = __processWords(foods);
    processed.forEach((food, idx) => {
        //Only adds a food that has not been added in the category and is not excluded.
        if (!uniqueValues[category].hasOwnProperty(food) && !uniqueValues[EXCLUDE].hasOwnProperty(food)) {
            uniqueValues[category][food] = idx;
        }
    });
    return;
}

/**
 * Given a list of diseases call {__processUniqueFood} for each disease to update the unique values.
 * 
 * @param {[string]} diseasesToProcess - The list of diseases to be processed.
 * @param {{string: [string]}} uniqueValues - The object to be updated.
 * @param {{string: {string: [string]}}} diseaseRels - All the diseases available.
 * @returns {{string: [string]}} - The updated object.
 */
function __processDiseaseFood(diseasesToProcess, uniqueValues, diseaseRels) {
    for (const category of categories) {
        diseasesToProcess.forEach((disease) => {
            if (!diseaseRels.hasOwnProperty(disease) || !Array.isArray(diseaseRels[disease][category]) || diseaseRels[disease][category].length == 0) {
                //If the disease is not in the list of diseases or if the disease has no foods in the category consumption level
                //then the default food consumption level is used.
                __processUniqueFood(diseaseRels["Sin Diagnostico"], category, uniqueValues);
            } else {
                __processUniqueFood(diseaseRels[disease], category, uniqueValues);
            }
        });
    }
    return uniqueValues;
}

/**
 * Prepares a list of unique foods categorized by consumption level.
 * 
 * @param {[string]} diseases - The list of diseases where each food will be looked up.
 * @param {{string: {string: [string]}}} - The food level consumption relationship for each disease found in 
 * the medical records.
 * @returns {{string: [string]}} - The complete categorized list of unique foods based on the diseases entered.
 */
function __getFoodByConsumptionLevel(diseases, diseaseRels) {
    processedUniqueValues = {
        "abundant": [],
        "moderate": [],
        "exclude": [],
    };
    if (!Array.isArray(diseases)) {
        return processedUniqueValues;
    }
    uniqueValues = {
        "abundant": {},
        "moderate": {},
        "exclude": {},
    };
    __processDiseaseFood(diseases,uniqueValues,diseaseRels);
    
    for (const category of categories) {
        values = Object.keys(uniqueValues[category]).map((val) => val);
        processedUniqueValues[category] = values;
    }
    return processedUniqueValues;
}
