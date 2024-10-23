const traitsAbsentKeywords = [
    "ausente", "no se encontró", "baja", "húmedo", "sin variaciones",
    "no detectada", "riesgo bajo", "bajo", "no se observan diferencias",
    "ausencia", "Capacidad de percibir", "húmedo", "menor", "Capacidad", "Baja probabilidad de ser pelirrojo",
    "disminuida", "capacidad de detectar", "Agilidad mental alta", "baja probabilidad", "No tienes",
    "cognitiva alta", "Habilidad cognitiva alta", "lóbulo pegado", "Capacidad de percibir el aroma floral", "percibir", "Niveles de melanina cutánea altos", "normal", "No tienes"
];

const traitsPresentKeywords = [
    "Mayor", "mayor presencia", "largo", "corto", "seco", "Presencia", "Intervalo largo", "bajos", "Niveles bajos", "copias", "Alta",
    "sueño corta", "ligera", "se observan diferencias", "alto",
    "presenta", "diferente", "se recomienda", "Alta probabilidad de ser pelirrojo", "sin capacidad", "seco",
    "menor capacidad", "corta", "larga", "sueño corta", "menor capacidad de detectar",
    "mayor persistencia", "secretor", "aumentada", "tardía", "temprana",
    "Presencia de dos copias", "cognitiva baja", "niveles altos", "pobre", "Tienes la variante", "Tienes", "mental baja", "rápido", "lento",
];

const traitsMediumKeywords = [
    "pegado", "Baja probabilidad de tener el lóbulo pegado", "medio", "dependencia media", "pala",
    "rizado u ondulado", "probabilidad media de ser zurdo", "zurdo", "baja probabilidad de ser zurdo",
    "liso", "lateralidad izquierda", "rubio", "oscuros", "claros", "liso", "ondulado", "oscuro",
    "no prominente", "menos pronunciados", "pronunciados", "prominente", "media", "cognitiva media", "Estatura media",
    "Factor Rh", "similar", "igual", "estatura alta", "Menor probabilidad de ser zurdo",
    "Baja probabilidad de tener el lóbulo pegado", "Baja probabilidad", "lóbulo", "Niveles medios", "intermedio", "medios",
];

const resultadosBeneficiosos = [ "Agilidad mental alta", "Habilidad cognitiva alta", "Alta probabilidad de un ritmo circadiano"];
const resultadosPerjudiciales = [ "Agilidad mental baja", "Habilidad cognitiva baja"];

// Posibilidades de grupo sanguíneo
const bloodGroupPatterns = [
    "A, Rh+", "A, Rh-", "B, Rh+", "B, Rh-", "AB, Rh+", "AB, Rh-", "O, Rh+", "O, Rh-"
];

document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');

    fetch('obtener_rasgos.php?t=' + new Date().getTime())
         .then(response => response.json())
         .then(data => {
            enfermedades.rasgos = data
            fetch(`obtener_traits_pdf.php?id=${id}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        console.error('Error del servidor:', data.error);
                        return;
                    }

                    const traitsPdf = data.traitsPdf;
                    if (traitsPdf) {
                        processTraitsPdf(traitsPdf);
                    } else {
                        console.error('PDF de rasgos no encontrado');
                    }
                })
                .catch(error => console.error('Error al obtener el PDF:', error));
        })
        .catch(error => console.log('Error:', error));
});

async function processTraitsPdf(pdfUrl) {
    const loadingTask = pdfjsLib.getDocument(pdfUrl);
    const pdf = await loadingTask.promise;
    let traitsResults = [];
    let specialTrait = "";
    let hairTrait = "";

    let permite_escribir = false;
    let espacio = false;
    let finItem = false;
    let currentTrait = "";
    let currentKeyword = "";

    //Este array contiene las "siguientes lineas" de los resultados que se deben incluir en el resultado y no se deben contar como otro ítem
    resultadosComplementos = ["MC1R"]

    for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
        const page = await pdf.getPage(pageNum);
        const textContent = await page.getTextContent();
        const textItems = textContent.items;
        const datePattern = /^Resultado/;

        for (let [i, item] of textItems.entries()) {
            let text = item.str.trim().replace(/\s+/g, ' ');
            let nextText = textItems[i + 1] ? textItems[i + 1].str : "";

            if (datePattern.test(text)) {   // Si encontramos una linea que inicie con la palabra Resultado
                permite_escribir = true;    // Seteamos la variable que nos indica que permite escribir las siguientes lineas
                continue;
            }

            if (!permite_escribir)  // Si no está permitido todavía, continuamos con la siguiente linea
                continue;

            if (item.str == " ")
                espacio = true;
            if (item.str == "" && espacio && !resultadosComplementos.includes(nextText))
                finItem = true;

            if (!espacio && !finItem) {
                currentTrait += " " + text;
                continue;
            }

            if (espacio && !finItem) {
                currentKeyword += " " + text;
                continue;
            }

            if (currentTrait && currentKeyword) {
                currentTrait = currentTrait.trim();
                currentKeyword = currentKeyword.trim();
                currentStatus = "Especial";
                if (traitsPresentKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(currentKeyword))) {
                    currentStatus = "Perjudicial";
                } else if (traitsAbsentKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(currentKeyword))) {
                    currentStatus = "Beneficioso";
                } else if (traitsMediumKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(currentKeyword))) {
                    currentStatus = "Medio";
                }
                
                //Casos especiales
                if (resultadosBeneficiosos.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(currentKeyword)))
                    currentStatus = "Beneficioso";
                if (resultadosPerjudiciales.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(currentKeyword)))
                    currentStatus = "Perjudicial";

                traitsResults.push({ trait: currentTrait, status: currentStatus, keyword: currentKeyword });
                currentTrait = "";
                currentKeyword = "";
                espacio = false;
                finItem = false;
            }
        }
        if (currentTrait && currentKeyword) {
            currentTrait = currentTrait.trim();
            currentKeyword = currentKeyword.trim();
            currentStatus = "Especial";
            if (traitsPresentKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(currentKeyword))) {
                currentStatus = "Perjudicial";
            } else if (traitsAbsentKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(currentKeyword))) {
                currentStatus = "Beneficioso";
            } else if (traitsMediumKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(currentKeyword))) {
                currentStatus = "Medio";
            }
            
            //Casos especiales
            if (resultadosBeneficiosos.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(currentKeyword)))
                currentStatus = "Beneficioso";
            if (resultadosPerjudiciales.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(currentKeyword)))
                currentStatus = "Perjudicial";

            traitsResults.push({ trait: currentTrait, status: currentStatus, keyword: currentKeyword });
            currentTrait = "";
            currentKeyword = "";
            espacio = false;
            finItem = false;
        }
    }

    //INCLUYE LOS ÍTEMS QUE QUIERE MOSTRAR CON RESULTADO
    let traitsShow = [
        "Caries dental y periodontitis",
        "Duración del sueño",
        "Envejecimiento facial",
        "Estado secretor y antígenos ABH (gen FUT2)",
        "Función tiroidea (Niveles TSH)",
        "Gen MTHFR",
        "Habilidad cognitiva",
        "Intervalo QT",
        "Menarquia",
        "Neuroticismo",
        "Niveles de melanina cutánea",
        "Persistencia de la hemoglobina fetal",
        "Peso al nacer",
        "Probabilidad de roncar",
        "Probabilidad de ser pelirrojo",
        "Recuento de eosinófilos", 
        "Recuento de glóbulos blancos", 
        "Recuento de glóbulos rojos", 
        "Recuento de linfocitos", 
        "Recuento de monocitos", 
        "Recuento de neutrófilos", 
        "Volumen del bazo",       
        "Regulación de hormonas sexuales (SHBG)",
        "Tasa metabólica basal",
        "Zurdera (lateralidad izquierda)",
        "Úlceras bucales",
        "Agilidad mental",
        "Anillos de pigmentación del iris",
        "Niveles de bilirrubina",	
        "Niveles de catepsina D",	
        "Niveles de estradiol",	
        "Niveles de fosfatasa alcalina",	
        "Niveles de gamma glutamil transferasa",	
        "Niveles de hierro en el hígado",	
        "Niveles de proteína C reactiva: Niveles bajos",	
        "Niveles de proteína total en suero",	
        "Niveles de resistina",
        "Claridad de los ojos",
        "Erupción de dientes permanentes",
        "Estatura",
        "Forma del pelo",
        "Grupo sanguíneo ABO/Rh",
        "Insomnio",
        "Menopausia precoz",
        "Morfología de los dientes",
        "Niveles de proteína C reactiva",
        "Prominencia del nasión",
        "Ritmo circadiano matutino (persona madrugadora)",
        "Tendencia al riesgo",
        "Tipo de lóbulo de la oreja",
        "Tonalidad del pelo",
        "Acné vulgar",
        "Alcohol reacción flush",
        "Antígeno Duffy, resistencia a la malaria",
        "Antígeno HLA-B27",
        "Coagulación sanguínea, factor V Leiden y 20210G-A",
        "Dependencia de alcohol tras consumo prolongado",
        "Dependencia de nicotina tras consumo prolongado",
        "Detección del olor a espárragos",
        "Envejecimiento epigenético",
        "Olfato",
        "Reflejo del estornudo fótico",
        "Tipo de cerumen / Olor axilar",
        "Calvicie masculina",
        "Gen COMT",
        "Gen MTR",
        "Gen MTRR",
        "Perfil metabolizador CYP3A5",
        "Perfil metabolizador CYP2C19",	
        "Perfil metabolizador CYP2D6",
        "Perfil metabolizador CYP2C9",
        "Producción de calor en respuesta al frío",
        "Curvatura corneal",
        "Ritmo de marcha habitual",
        "Frecuencia de deposiciones",
        "Longitud de los telómeros",	
        "Menarquia: Menarquia temprana",	
        "Niveles de alanina aminotransferasa",	
        "Niveles de albúmina sérica",	
        "Niveles de aspartato aminotransferasa",
        "Histéresis corneal",
        "Frecuencia cardiaca en reposo",
        "Niveles de selectina E",
    ];
    traitsResults.forEach(trait => { trait.show = traitsShow.includes(trait.trait.trim()); });

    
    //DEFINIR COLOR DE ÍTEMS ESPECÍFICOS
    let traitsAmarillo = [
        "Estatura", "Forma del pelo", "Grupo sanguíneo ABO/Rh", "Tipo de lóbulo de la oreja", "Zurdera (lateralidad izquierda)"
    ];
    traitsResults.forEach(trait => { trait.status = traitsAmarillo.includes(trait.trait.trim()) ? "Medio" : trait.status; });

    let traitsRojo = [ "" ];
    traitsResults.forEach(trait => { trait.status = traitsRojo.includes(trait.trait.trim()) ? "Perjudicial" : trait.status; });

    let traitsVerde = [ "" ];
    traitsResults.forEach(trait => { trait.status = traitsVerde.includes(trait.trait.trim()) ? "Beneficioso" : trait.status; });
    
    

    // Ordenar los resultados por el grado de riesgo: alto, medio, bajo
    traitsResults.sort((a, b) => {
        const riskOrder = { "Perjudicial": 1, "Medio": 2, "Beneficioso": 3 };
        return riskOrder[a.status] - riskOrder[b.status];
    });

    updateTraitsTable(traitsResults, specialTrait);
    generateSummary(traitsResults); // Generar resumen basado en los resultados de traits
}

function updateTraitsTable(traitsResults, specialTrait) {
    const traitsRows = document.getElementById('traits-rows');
    const highRiskTraits = document.getElementById('high-risk-traits');
    const mediumRiskTraits = document.getElementById('medium-risk-traits');
    const lowRiskTraits = document.getElementById('low-risk-traits');
    const specialTraitSection = document.getElementById('special-trait');

    // Limpiar contenido previo
    traitsRows.innerHTML = '';
    highRiskTraits.innerHTML = '';
    mediumRiskTraits.innerHTML = '';
    lowRiskTraits.innerHTML = '';
    specialTraitSection.innerHTML = '';

    traitsResults.forEach(result => {
        const row = document.createElement('tr');

        const cellTrait = document.createElement('td');
        cellTrait.innerHTML = result.trait + (result.show ? `: <small>${result.keyword}</small>` : "");
        row.appendChild(cellTrait);

        const cellStatus = document.createElement('td');
        if (result.status === "Perjudicial") {
            cellStatus.innerHTML = '<i class="fas fa-times-circle" style="color: red;"></i>';
            highRiskTraits.innerHTML += `${result.trait}, `;
        } else if (result.status === "Beneficioso") {
            cellStatus.innerHTML = '<i class="fas fa-check-circle" style="color: green;"></i>';
            lowRiskTraits.innerHTML += `${result.trait}, `;
        } else if (result.status === "Medio") {
            cellStatus.innerHTML = '<i class="fas fa-exclamation-circle" style="color: orange;"></i>';
            mediumRiskTraits.innerHTML += `${result.trait}, `;
        } else if (result.status === "Especial") {
            cellStatus.innerHTML = '<i class="fas fa-star" style="color: blue;"></i>';
        }
        row.appendChild(cellStatus);

        traitsRows.appendChild(row);
    });

    if (specialTrait) {
        specialTraitSection.textContent = specialTrait;
    }

    highRiskTraits.innerHTML = highRiskTraits.innerHTML.slice(0, -2);
    mediumRiskTraits.innerHTML = mediumRiskTraits.innerHTML.slice(0, -2);
    lowRiskTraits.innerHTML = lowRiskTraits.innerHTML.slice(0, -2);
}

function generateSummary(traitsResults) {
    const resumenSection = document.getElementById('resumen-texto');
    const sexoPaciente = document.getElementById('sexo').textContent;

    let summaryText =
    `<span class="fijo">Se presenta un documento resumen, resultante del análisis de polimorfismo genético que consta de 32 mil páginas con las peculiaridades de los genes y las letras. 
El examen permitió determinar el riesgo de padecer, o no, algunas de las 150 enfermedades, alrededor de 1084 síndromes y alteraciones, y la tendencia que presenta el paciente para envejecer, entre otros aspectos relevantes para la salud y prolongación de la vida. 
En este caso en específico, de acuerdo con su polimorfismo genético particular se trata de un paciente de sexo <span id="sexo-paciente"><strong>${sexoPaciente}</strong></span> que, de acuerdo con su polimorfismo genético, debe presentar rasgos distintivos que lo hacen una persona única. A continuación, se describen dichos rasgos: </span>`;

    enfermedades.rasgos.forEach(item => {
        const riskItemDB = item.risk_level;
        let coincide = traitsResults.find(r => r.trait.toLowerCase().includes(item.trait_name.toLowerCase()));
        if (coincide) {
            let riskItemTab = coincide.status;
            if (riskItemDB.toLowerCase() == riskItemTab.toLowerCase()) {
                detail = item.detail.replace('{{resultado}}', coincide.keyword);
                summaryText += `${detail}. `;
            }
        }
    });

    traitsResults.forEach(t => {
        let detail = null;
        // if (t.trait.toLowerCase() === "forma del pelo")
        //     detail = t.detail.replace('(palabra clave detectada)', `<div id='forma-pelo' style='display: inline;'>${t.keyword}</div>`);
        // if (detail) {
        //     console.log(detail)
        //     summaryText += `${detail}. `;
        // }
    })

    // orderedTraits.forEach(traitName => {
    //     const trait = traitsResults.find(t => t.trait.toLowerCase().includes(traitName.toLowerCase()));
    //     if (trait) {
    //         const riskLevel = trait.status;
    //         if (riskLevel === "Especial")
    //             return;
    //         const fullName = Object.keys(riskDetails[riskLevel]).find(key => key.toLowerCase().includes(traitName.toLowerCase()));
    //         let detail = riskDetails[riskLevel][fullName];

    //         const detalle = enfermedades.rasgos.find(rasgo => rasgo.trait_name.toLowerCase().includes(traitName.toLowerCase()));


            
            
    //         if (detail) {
    //             // Añadir la palabra clave detectada en "Función tiroidea (Niveles TSH)" para el nivel "Perjudicial"
    //             if (riskLevel === "Perjudicial" && traitName.toLowerCase() === "tiroidea") {
    //                 detail = detail.replace('niveles bajos', `<span>${trait.keyword}</span>`);
    //             }
    //             // Añadir la palabra clave detectada en "Intervalo QT"
    //             if (riskLevel === "Perjudicial" && traitName.toLowerCase() === "intervalo") {
    //                 detail = detail.replace('(largo)', `<span id='intervalo-qt-keyword'>${trait.keyword}</span>`);
    //             }
    //             // Añadir la palabra clave detectada en "Regulación de hormonas sexuales (SHBG)"
    //             if (riskLevel === "Perjudicial" && traitName.toLowerCase() === "regulación") {
    //                 detail = detail.replace('(perjudiciales)', `<div id='shbg-nivel' style='display: inline;'>${trait.keyword}</div>`);
    //             }
    //             // Añadir la palabra clave detectada en "Estatura" para superior e inferior
    //             if (riskLevel === "Perjudicial" && traitName.toLowerCase() === "estatura") {
    //                 detail = detail.replace('superior', `<span id='estatura-clave-superior'>${trait.keyword}</span>`);
    //                 detail = detail.replace('inferior', `<span id='estatura-clave-inferior'>${trait.keyword}</span>`);
    //             }
    //             
    //             summaryText += `${detail}. `;
    //         }
    //     }
    // });



    resumenSection.innerHTML = summaryText;

    // Asignar la palabra clave de Intervalo QT si existe
    const intervaloQtKeywordSpan = document.getElementById('intervalo-qt-keyword');
    const intervaloQtTrait = traitsResults.find(t => t.trait.toLowerCase().includes("intervalo"));
    if (intervaloQtKeywordSpan && intervaloQtTrait) {
        intervaloQtKeywordSpan.textContent = intervaloQtTrait.keyword;
    }

    // Asignar la palabra clave de Regulación de hormonas sexuales (SHBG) si existe
    const shbgNivelDiv = document.getElementById('shbg-nivel');
    const shbgTrait = traitsResults.find(t => t.trait.toLowerCase().includes("regulación"));
    if (shbgNivelDiv && shbgTrait) {
        shbgNivelDiv.textContent = shbgTrait.keyword;
    }

    // Asignar la palabra clave de Estatura si existe
    const estaturaClaveSuperiorSpan = document.getElementById('estatura-clave-superior');
    const estaturaClaveInferiorSpan = document.getElementById('estatura-clave-inferior');
    const estaturaTrait = traitsResults.find(t => t.trait.toLowerCase().includes("estatura"));
    if (estaturaClaveSuperiorSpan && estaturaTrait) {
        estaturaClaveSuperiorSpan.textContent = estaturaTrait.keyword;
    }
    if (estaturaClaveInferiorSpan && estaturaTrait) {
        estaturaClaveInferiorSpan.textContent = estaturaTrait.keyword;
    }

    // Asignar la palabra clave de Claridad de los ojos si existe
    const claridadOjosSpan = document.getElementById('claridad-ojos');
    const claridadOjosMedioSpan = document.getElementById('claridad-ojos-medio');
    const claridadOjosTrait = traitsResults.find(t => t.trait.toLowerCase().includes("claridad"));
    if (claridadOjosSpan && claridadOjosTrait) {
        claridadOjosSpan.textContent = claridadOjosTrait.keyword;
    }
    if (claridadOjosMedioSpan && claridadOjosTrait) {
        claridadOjosMedioSpan.textContent = claridadOjosTrait.keyword;
    }

    // Asignar la palabra clave de Forma del pelo si existe
    const formaPeloDiv = document.getElementById('forma-pelo');
    const formaPeloTrait = traitsResults.find(t => t.trait.toLowerCase().includes("forma del pelo"));
    if (formaPeloDiv && formaPeloTrait) {
        formaPeloDiv.textContent = formaPeloTrait.keyword;
    }
}