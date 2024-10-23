//ENFERMEDADES COMPLEJAS
document.addEventListener('DOMContentLoaded', function () {
    fetch('obtener_enfermedades_complejas.php?t=' + new Date().getTime())
        .then(response => response.json())
        .then(data => {
            const tbody = document.getElementById('complex-disease-rows');
            const highRiskDiseases = document.getElementById('complex-high-risk-diseases');
            const mediumRiskDiseases = document.getElementById('complex-medium-risk-diseases');
            const lowRiskDiseases = document.getElementById('complex-low-risk-diseases');

            enfermedades.complex = data;

            data.forEach(disease => {
                const row = document.createElement('tr');

                const cellEnfermedad = document.createElement('td');
                cellEnfermedad.textContent = disease.enfermedad;
                row.appendChild(cellEnfermedad);

                const cellGradoRiesgo = document.createElement('td');
                cellGradoRiesgo.textContent = 'Ausente'; // Grado de Riesgo inicial
                row.appendChild(cellGradoRiesgo);

                const cellEstado = document.createElement('td');
                cellEstado.innerHTML = '<i class="fas fa-check-circle" style="color: green;"></i>'; // Estado inicial Ausente
                row.appendChild(cellEstado);

                // Add to low-risk diseases summary
                lowRiskDiseases.innerHTML += `${disease.enfermedad}, `;

                tbody.appendChild(row);
            });

            highRiskDiseases.innerHTML = highRiskDiseases.innerHTML.slice(0, -2);
            mediumRiskDiseases.innerHTML = mediumRiskDiseases.innerHTML.slice(0, -2);
            lowRiskDiseases.innerHTML = lowRiskDiseases.innerHTML.slice(0, -2);

            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id');

            fetch(`obtener_enfermedades_complejas2.php?id=${id}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        console.error('Error del servidor:', data.error);
                        return;
                    }
                    const complexPdf = data.complexPdf;
                    if (complexPdf) {
                        processComplexPdf(complexPdf);
                    } else {
                        console.error('PDF de enfermedades complejas no encontrado');
                    }
                })
            .catch(error => console.error('Error al obtener el PDF:', error));
        })
        .catch(error => console.error('Error:', error));
});

async function processComplexPdf(pdfUrl) {
    const loadingTask = pdfjsLib.getDocument(pdfUrl);
    const pdf = await loadingTask.promise;
    const resultPattern = /^Resultado/;
    let diseaseResults = [];
    let permite_escribir = false;

    for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
        const page = await pdf.getPage(pageNum);
        const textContent = await page.getTextContent();
        const textItems = textContent.items;
        let currentDisease = "";
        let currentStatus = "";
        let currentKeyword = "";
        let skipLine = false;

        textItems.forEach(item => {
            let text = item.str.trim();

            if (resultPattern.test(text)) {   //Si encontramos una linea que inicie con la palabra Resultado
                permite_escribir = true;    //Seteamos la variable que nos indica que permite escribir las siguientes lineas
                return;
            }
            if (!permite_escribir)  //Si no está permitido todavía, continuamos con la siguiente linea
                return;

            if (text.match(/alto/i) || text.match(/medio/i) || text.match(/bajo/i)) {
                currentKeyword = text;
                if (text.match(/alto/i)) {
                    currentStatus = "Alto";
                } else if (text.match(/medio/i)) {
                    currentStatus = "Medio";
                } else if (text.match(/bajo/i)) {
                    currentStatus = "Bajo";
                }
                if (currentDisease) {
                    currentDisease = currentDisease.replace(/\t/g, ' ').trim();
                    diseaseResults.push({ disease: currentDisease, status: currentStatus, keyword: currentKeyword });
                    currentDisease = "";
                }
            } else {
                if (currentDisease) {
                    currentDisease += " " + text;
                } else {
                    currentDisease = text;
                }
            }
        });

        if (currentDisease) {
            currentDisease = currentDisease.replace(/\t/g, ' ').trim();
            diseaseResults.push({ disease: currentDisease, status: currentStatus, keyword: currentKeyword });
        }
    }

    // Ordenar los resultados por el grado de riesgo: alto, medio, bajo
    diseaseResults.sort((a, b) => {
        const riskOrder = { "Alto": 1, "Medio": 2, "Bajo": 3 };
        return riskOrder[a.status] - riskOrder[b.status];
    });

    updateComplexDiseaseTable(diseaseResults);
    setTimeout(() => { 
        generateComplexIndications(diseaseResults);
        generateComplexDiseases(diseaseResults);
    }, 1000);
}

function updateComplexDiseaseTable(diseaseResults) {
    const complexDiseaseRows = document.getElementById('complex-disease-rows');
    const highRiskDiseases = document.getElementById('complex-high-risk-diseases');
    const mediumRiskDiseases = document.getElementById('complex-medium-risk-diseases');
    const lowRiskDiseases = document.getElementById('complex-low-risk-diseases');

    // Limpiar contenido previo
    complexDiseaseRows.innerHTML = '';
    highRiskDiseases.innerHTML = '';
    mediumRiskDiseases.innerHTML = '';
    lowRiskDiseases.innerHTML = '';

    diseaseResults.forEach(result => {
        const row = document.createElement('tr');

        const cellDisease = document.createElement('td');
        cellDisease.textContent = result.disease;
        row.appendChild(cellDisease);

        // Comentado para ocultar la palabra clave
        /*
        const cellRisk = document.createElement('td');
        cellRisk.textContent = result.keyword; // Mostrar la palabra clave
        row.appendChild(cellRisk);
        */

        const cellStatus = document.createElement('td');
        if (result.status === "Alto") {
            cellStatus.innerHTML = '<i class="fas fa-times-circle" style="color: red;"></i>';
            highRiskDiseases.innerHTML += `${result.disease}, `;
        } else if (result.status === "Medio") {
            cellStatus.innerHTML = '<i class="fas fa-exclamation-circle" style="color: orange;"></i>';
            mediumRiskDiseases.innerHTML += `${result.disease}, `;
        } else if (result.status === "Bajo") {
            cellStatus.innerHTML = '<i class="fas fa-check-circle" style="color: green;"></i>';
            lowRiskDiseases.innerHTML += `${result.disease}, `;
        }
        row.appendChild(cellStatus);

        complexDiseaseRows.appendChild(row);
    });

    highRiskDiseases.innerHTML = highRiskDiseases.innerHTML.slice(0, -2);
    mediumRiskDiseases.innerHTML = mediumRiskDiseases.innerHTML.slice(0, -2);
    lowRiskDiseases.innerHTML = lowRiskDiseases.innerHTML.slice(0, -2);
}