 // Palabras clave para enfermedades monogénicas
 const monoAbsentKeywords = ["Sin variaciones", "Ausente"];
 const monoPresentKeywords = ["Presente"];

 //ENFERMEDADES MONOGENICAS
 document.addEventListener('DOMContentLoaded', function () {
     const urlParams = new URLSearchParams(window.location.search);
     const id = urlParams.get('id');

     fetch('obtener_enfermedades.php?t=' + new Date().getTime())
         .then(response => response.json())
         .then(data => {
             enfermedades.monogenic = data;
             fetch(`obtenerPdfMonogenic.php?id=${id}`)
                 .then(response => response.json())
                 .then(data => {
                     if (data.error) {
                         console.error('Error del servidor:', data.error);
                         return;
                     }

                     const monogenicPdf = data.monogenicPdf;
                     if (monogenicPdf) {
                         processMonogenicPdf(monogenicPdf);
                     } else {
                         console.error('PDF de monogénico no encontrado');
                     }
                 })
                 .catch(error => console.error('Error al obtener el PDF:', error));
         })
         .catch(error => console.log('Error:', error));
 });

 async function processMonogenicPdf(pdfUrl) {
     const loadingTask = pdfjsLib.getDocument(pdfUrl);
     const pdf = await loadingTask.promise;
     const datePattern = /^Resultado/;
     monoResults = [];
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

             if (datePattern.test(text)) {
                 permite_escribir = true;
                 return;
             }
             if (!permite_escribir)
                 return;

             if (monoPresentKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(text.replace(/\s+/g, ' ')))) {
                 currentKeyword = text;
                 currentStatus = "Presente";
                 if (currentDisease) {
                     currentDisease = currentDisease.replace(/\t/g, ' ').trim();
                     monoResults.push({ disease: currentDisease, status: currentStatus, keyword: currentKeyword });
                 }
                 currentDisease = ""; // Resetear para la siguiente enfermedad
             } else if (monoAbsentKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(text.replace(/\s+/g, ' ')))) {
                 currentKeyword = text;
                 currentStatus = "Ausente";
                 if (currentDisease) {
                     currentDisease = currentDisease.replace(/\t/g, ' ').trim();
                     monoResults.push({ disease: currentDisease, status: currentStatus, keyword: currentKeyword });
                 }
                 currentDisease = ""; // Resetear para la siguiente enfermedad
             } else {
                 if (currentDisease) {
                     currentDisease += " " + text;
                 } else {
                     currentDisease = text;
                 }
             }
         });

         // Si hay una enfermedad al final de la página que no se procesó, agregarla
         if (currentDisease) {
             currentDisease = currentDisease.replace(/\t/g, ' ').trim();
             monoResults.push({ disease: currentDisease, status: currentStatus, keyword: currentKeyword });
         }
     }

     // Ordenar los resultados por el grado de riesgo: presente, ausente
     monoResults.sort((a, b) => {
         const riskOrder = { "Presente": 1, "Ausente": 2 };
         return riskOrder[a.status] - riskOrder[b.status];
     });

     updateMonoTable(monoResults);
     setTimeout(() => {
         generateMonogenicIndications(monoResults);
         generateMonogenicDiseases(monoResults);
     }, 1000);
 }

 function updateMonoTable(monoResults) {
     const monoRows = document.getElementById('monogenic-disease-rows');
     const highRiskMono = document.getElementById('monogenic-high-risk-diseases');
     const mediumRiskMono = document.getElementById('monogenic-medium-risk-diseases');
     const lowRiskMono = document.getElementById('monogenic-low-risk-diseases');

     // Limpiar contenido previo
     monoRows.innerHTML = '';
     highRiskMono.innerHTML = '';
     mediumRiskMono.innerHTML = '';
     lowRiskMono.innerHTML = '';

     monoResults.forEach(result => {
         const row = document.createElement('tr');

         const cellDisease = document.createElement('td');
         cellDisease.textContent = result.disease;
         row.appendChild(cellDisease);

         const cellStatus = document.createElement('td');
         if (result.status === "Presente") {
             cellStatus.innerHTML = '<i class="fas fa-times-circle" style="color: red;"></i>';
             highRiskMono.innerHTML += `${result.disease}, `;
         } else if (result.status === "Ausente") {
             cellStatus.innerHTML = '<i class="fas fa-check-circle" style="color: green;"></i>';
             lowRiskMono.innerHTML += `${result.disease}, `;
         }
         row.appendChild(cellStatus);

         monoRows.appendChild(row);
     });

     // Eliminar la coma y el espacio final
     if (highRiskMono.innerHTML.length > 0) {
         highRiskMono.innerHTML = highRiskMono.innerHTML.slice(0, -2);
     }
     if (lowRiskMono.innerHTML.length > 0) {
         lowRiskMono.innerHTML = lowRiskMono.innerHTML.slice(0, -2);
     }
 }