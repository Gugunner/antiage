const pharmaAbsentKeywords = [
    "Sín variaciones", "Eficaz", "Normal", "habitual", "No supone un aumento", "Menor riesgo", "Dosis estándar", "No asociado", "intermedio", "Riesgo de recaída disminuido"
];

const pharmaPresentKeywords = [
    "disminuída", "disminuído", "pobre", "ultrarrápido", "no recomendado", "asociado a resistencia",  "No sería la terapia de elección", "sensibilidad incrementada", "aumentado", "prolongado", "mayor", "aumentada", "aumentar el riesgo", "toxicidad", "aumento de riesgo"
];

// Palabras clave para riesgo medio
const pharmaMediumKeywords = [
    "ajuste", "seguimiento", "reducir la dosis inicial"
];

// Palabras clave para acción farmacológica
const pharmacologicalActionKeywords = [
    "Antidepresivos", "Antitrombóticos", "Antipsicóticos", "Analgésicos", "Hipolipemiantes", "Antineoplásicos", "Antivirales", "Inmunosupresores", "Antibióticos", "Ansiolíticos"
];


const items_sinparentesis = [
    "Tratamiento\thipertensión\tarterial con\tfármacos\tcomunes",
    "Deficiencia\tde\tG6PD\ty reacciones\tadversas\ta medicamentos"];

let farmacogenetica = [];

document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');

    fetch('obtener_farmacogenetica.php?t=' + new Date().getTime())
        .then(response => response.json())
        .then(data => {
            farmacogenetica = data;
            fetch(`obtener_pharma_pdf.php?id=${id}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        console.error('Error del servidor:', data.error);
                        return;
                    }

                    const pharmaPdf = data.pharmaPdf;
                    if (pharmaPdf) {
                        processPharmaPdf(pharmaPdf);
                    } else {
                        console.error('PDF de farmacogenética no encontrado');
                    }
                })
                .catch(error => console.error('Error al obtener el PDF:', error));
        })
        .catch(error => console.log('Error:', error));
});

function startsWithUpperCase(word) {
    let palabras = word.split("\t");
    if (palabras[0] && (palabras[0]).trim().length == 1) {
        return false;
    }
    return /^[A-ZÁÉÍÓÚÑÜ]/.test(word);
}

function incompleteWord(word) {
    if (word.length === 0) return false;
    const lastChar = word.slice(-1); 
    const punctuationMarks = [',', ';', '.'];
    parentesis_abierto = word.includes("(") && !word.includes(")");
    return punctuationMarks.includes(lastChar) || parentesis_abierto;
}

async function processPharmaPdf(pdfUrl) {
    const loadingTask = pdfjsLib.getDocument(pdfUrl);
    const pdf = await loadingTask.promise;
    let pharmaResults = [];
    let permite_escribir = false;
    let datePattern = /^Resultados/;

    let cols = [];
    let texto_completo = "";
    let cambio_pagina = false;
    let cols2 = [];
    for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
        const page = await pdf.getPage(pageNum);
        const textContent = await page.getTextContent();
        const textItems = textContent.items;

        textItems.forEach(item => {
            let texto = item.str.trim();
            if (texto == "") return;
            if (!permite_escribir && datePattern.test(texto)) {
                permite_escribir = true;
                return;
            }
            if (!permite_escribir) return;


            if ((cambio_pagina && !startsWithUpperCase(texto)) || texto == "periférica") 
                cols2.push(texto);
            else 
                cambio_pagina = false;

            if (!cambio_pagina) {

                if (cols.length === 3) {
                    if (cols2.length == 3) {
                        cols[0] = cols[0] + " " + cols2[0];
                        cols[1] = cols[1] + " " + cols2[1];
                        cols[2] = cols[2] + " " + cols2[2];
                        cols2 = []
                    }

                    let status = "Alto";
                    if (pharmaPresentKeywords.some(keyword => cols[2].toLowerCase().includes(keyword.toLowerCase()))) {
                        status = "Alto";
                    } else if (pharmaMediumKeywords.some(keyword => cols[2].toLowerCase().includes(keyword.toLowerCase()))) {
                        status = "Medio";
                    } else if (pharmaAbsentKeywords.some(keyword => cols[2].toLowerCase().includes(keyword.toLowerCase()))) {
                        status = "Bajo";
                    } 

                   pharmaResults.push({ drug: cols[0], action: cols[1], result : cols[2], status, keyword: "" });
                    cols = [];
                }

                if (startsWithUpperCase(texto) && !incompleteWord(texto_completo)) {
                    if (cols.length == 1 && !cols[0].includes(")")) {
                        cols[0] = cols[0] + " " + texto_completo;
                        texto_completo = texto;
                    }
                    else {
                        if (texto_completo.length > 0) {
                            cols.push(texto_completo);
                            
                            if (items_sinparentesis.includes(texto_completo)) {
                                cols.push(texto);
                                texto_completo = "";
                            }
                            else
                                texto_completo = texto;
                        }
                        else 
                            texto_completo = texto;
                    }
                }
                else {
                    if (texto_completo.length > 0)
                        texto_completo = texto_completo + " " + texto;
                    else
                        texto_completo = texto;
                }
            }
        });
        cambio_pagina = true;
    }
    if (cols.length === 2)
        pharmaResults.push({ drug: cols[0], action: cols[1], result : texto_completo, status: "Alto", keyword: "" });

    pharmaResults.sort((a, b) => {
        const riskOrder = { "Alto": 1, "Medio": 2, "Bajo": 3 };
        return riskOrder[a.status] - riskOrder[b.status];
    });

    updatePharmaTable(pharmaResults);
}

function updatePharmaTable(pharmaResults) {
    const pharmaRows = document.getElementById('pharmacogenetics-rows');
    const highRiskPharma = document.getElementById('high-risk-pharmacogenetics');
    const mediumRiskPharma = document.getElementById('medium-risk-pharmacogenetics');
    const lowRiskPharma = document.getElementById('low-risk-pharmacogenetics');

    // Limpiar contenido previo
    pharmaRows.innerHTML = '';
    highRiskPharma.innerHTML = '';
    mediumRiskPharma.innerHTML = '';
    lowRiskPharma.innerHTML = '';

    pharmaResults.forEach(result => {
        const row = document.createElement('tr');

        const cellDrug = document.createElement('td');
        cellDrug.innerHTML = result.drug; + "<br /><font size=1>" + result.result + "</font>";
        row.appendChild(cellDrug);

        const cellAction = document.createElement('td');
        cellAction.textContent = result.action;
        row.appendChild(cellAction);

        const cellStatus = document.createElement('td');
        if (result.status === "Alto") {
            cellStatus.innerHTML = '<i class="fas fa-times-circle" style="color: red;"></i>';
            highRiskPharma.innerHTML += `${result.drug}, `;
        } else if (result.status === "Medio") {
            cellStatus.innerHTML = '<i class="fas fa-exclamation-circle" style="color: orange;"></i>';
            mediumRiskPharma.innerHTML += `${result.drug}, `;
        } else if (result.status === "Bajo") {
            cellStatus.innerHTML = '<i class="fas fa-check-circle" style="color: green;"></i>';
            lowRiskPharma.innerHTML += `${result.drug}, `;
        }
        cellStatus.innerHTML = ` ${result.result}`;
        row.appendChild(cellStatus);

        pharmaRows.appendChild(row);
    });

    highRiskPharma.innerHTML = highRiskPharma.innerHTML.slice(0, -2);
    mediumRiskPharma.innerHTML = mediumRiskPharma.innerHTML.slice(0, -2);
    lowRiskPharma.innerHTML = lowRiskPharma.innerHTML.slice(0, -2);
}
