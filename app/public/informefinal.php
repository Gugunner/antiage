<?php
  session_start();  //Inicializar la sesión
  if (!isset($_SESSION['user_id'])) //Si no se h establecido la variable user_id en la sesión
    header("Location: index.php"); //redireccionar a index.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="dc3.png" type="image/png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Desactivar el caché -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    
    <title>Reporte Final</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap">
    <!-- Estilos para dispositivos móviles -->
    <link rel="stylesheet" href="estilo_informeM.css?v=1.9&_=${new Date().getTime()}"
        media="only screen and (max-width: 768px)">
    <!-- Estilos para pantallas de PC -->
    <link rel="stylesheet" href="estilo_informeM.css?v=1.9&_=${new Date().getTime()}"
        media="only screen and (min-width: 769px)">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <title>Informe Final</title>
    <!-- Metadatos Open Graph -->
    <meta property="og:title" content="YOU TOMORROW">
    <meta property="og:description"
        content="Ofrecemos un estudio en profundidad de las propiedades genéticas de nuestros participantes.">
    <meta property="og:image"
        content="https://drive.google.com/file/d/1ZZI3G6Fit_kovvVZolrvchtXQQDrnWYI/view?usp=sharing">
    <meta property="og:url" content="https://ytomorrow.com/">
    <meta property="og:type" content="website">
    <!-- Otros metadatos -->
    <meta name="description"
        content="ofrecemos un estudio en profundidad de las propiedades genéticas de nuestros participantes.">
    <meta name="keywords" content="you, YOU TOMORROW, TOMORROW, TOMORR, TOM, web">
</head>

<body>
    <div class="orientation-message" id="orientationMessage">
        <i class="fa-solid fa-mobile-screen-button"></i>
        <p>Por favor, gire su dispositivo a modo horizontal.</p>
    </div>  
    <div class="container" style="max-width: 80%; overflow: hidden;">
        <div id="google_translate_element"></div>
        <header
            style="background: url('fondoma3.jpeg') no-repeat center center; height: 140px; background-size: cover; padding: 10px; border-radius: 10px;">
            <div style="display: flex; align-items: center;">
                <img src="dc3.png" alt="Logo de la empresa" style="height: 110px; padding: 35px;">
                <div style="margin-left: 5px;">
                    <h1 style="font-size: 26px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">YOU
                        TOMORROW</h1>
                    <p style="font-size: 18px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
                        <i class="fa-solid fa-heart-pulse fa-beat" style="font-size: 30px; color: red;"></i>
                        "Diagnóstico de precisión de una realidad invisible." "Con nosotros, eliges vivir más."
                    </p>
                </div>
                <div style="display: flex; align-items: center; margin-left: auto;">
                    <button id="downloadBtn" class="download-btn">
                        <i class="fas fa-download"></i>
                    </button>
                </div>
            </div>
        </header>
        <div class="card">
            <h1><i class="fas fa-clipboard-list" style="margin-right: 5px; color: #1e6fdd;"></i>REPORTE RESULTADOS Y
                SUGERENCIAS</h1>
            <h2><i class="fas fa-user"></i>Información del Paciente</h2>
            <p id="currentDate"></p>
            <div class="info-grid">
                <div class="info-box">
                    <h3>Nombre</h3>
                    <p id="nombre"></p>
                </div>
                <div class="info-box">
                    <h3>Edad</h3>
                    <p><span class="badge age" id="edad"></span></p>
                </div>
                <div class="info-box">
                    <h3>Tipo de muestra</h3>
                    <p><span class="badge sample" id="tipo_muestra"></span></p>
                </div>
                <div class="info-box">
                    <h3>Sexo</h3>
                    <p><span class="badge gender" id="sexo"></span></p>
                </div>
                <div class="info-box">
                    <h3>Fecha de nacimiento</h3>
                    <p><span class="badge dob" id="fecha_nacimiento"></span></p>
                </div>
                <div class="info-box">
                    <h3>Código</h3>
                    <p><span class="badge code" id="codigo_kit"></span></p>
                </div>
            </div>

            <!--INFORMACION RELEVANTE-->
            <div class="report-info" style="font-size: 13px; line-height: 1.4; padding: 15px;">
                <h2 style="font-size: 18px; color: #06040a; margin-bottom: 10px;"><i class="fas fa-info-circle"
                        style="margin-right: 10px; color: #1b5e20;"></i>Información Relevante para Pacientes, Médicos y
                    Público en General</h2>
                <div class="info-section"
                    style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #e8f5e9;">
                    <h3 style="font-size: 16px; color: #1b5e20; margin-bottom: 5px;">Conoce el Alcance de un Diagnóstico
                        de Alta Precisión.</h3>
                    <p style="margin: 0;">A partir de una muestra de cualquier tejido, en esta ocasión “saliva”, es
                        posible diagnosticar anticipadamente, con un alto grado de precisión desde el mismo momento en
                        que nacemos, las alteraciones, síndromes y las enfermedades que más muertes y deterioro de la
                        vida causan en la actualidad en todo el mundo. Más allá de ello, también es posible entender
                        cómo influye la predisposición genética en el proceso de envejecimiento, y cuál es la
                        correlación entre la edad biológica y cronológica que se considera un aspecto extrema
                        importancia para comprender el desarrollo de las cercas 1250 alteraciones, síndromes o
                        enfermedades que genéticamente estamos predispuestos a padecer todas las personas.</p>
                </div>
                <div class="info-section"
                    style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #e8f5e9;">
                    <h3 style="font-size: 16px; color: #1b5e20; margin-bottom: 5px;">Conoce la Trascendencia los
                        Análisis de Polimorfismo Genético.</h3>
                    <p style="margin: 0;">Todo esto es posible mediante el análisis del polimorfismo genético,
                        particular de cada individuo, que devela las razones que dan origen, progreso, establecimiento y
                        consolidación de alteraciones, síndromes y las enfermedades “ocultas” que al ser detectadas
                        precozmente pueden ser prevenibles, controladas, tratadas y curadas.</p>
                </div>
                <div class="info-section"
                    style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #e8f5e9;">
                    <h3 style="font-size: 16px; color: #1b5e20; margin-bottom: 5px;">Polimorfismo Genético en la
                        Selección de Sistemas Terapéuticos Inteligentes.</h3>
                    <p style="margin: 0;">El análisis de polimorfismo genético particular de cada individuo es una
                        herramienta única e indivisa para que en aquellos casos en que, en aquellos casos en que las
                        enfermedades ya estén en progreso; los médicos puedan seleccionar los terapéuticos epigenéticos,
                        fármacos específicos, alimentos “inteligentes”, nutrientes y otros procedimientos que garantizan
                        que, en cada paciente, en forma individual, se detenga el progreso del padecimiento, síndrome o
                        alteración con lo que logramos una prolongación de la vida con calidad. También es factible
                        aplicar protocolos preventivos para evitar que las enfermedades, síndromes o alteraciones se
                        desarrollen, y en la misma medida retardar o revertir el proceso de envejecimiento.</p>
                </div>
                <div class="info-section"
                    style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #e8f5e9;">
                    <h3 style="font-size: 16px; color: #1b5e20; margin-bottom: 5px;">Polimorfismo Genético en la
                        Selección y Uso de Medicamentos.</h3>
                    <p style="margin: 0;">Los estudios de Polimorfismo Genético son esenciales para salvar millones de
                        vidas porque nos posibilitan seleccionar en forma personalizada los medicamentos en las dosis,
                        las frecuencias y las combinaciones adecuadas para tratar diferentes alteraciones, síndromes y
                        enfermedades como son los casos de cada uno de los tipos de cáncer, en específico, mediante el
                        uso de la quimio y radioterapéuticos que cada individuo amerita en forma personalizada.</p>
                </div>
                <div class="info-section"
                    style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #e8f5e9;">
                    <h3 style="font-size: 16px; color: #1b5e20; margin-bottom: 5px;">Polimorfismo Genético Aplicado a la
                        Práctica de Deportes y Longevidad de Atletas.</h3>
                    <p style="margin: 0;">Los estudios de Polimorfismo genético son de gran utilidad para entender como
                        cada persona “utiliza” las proteínas, grasas, carbohidratos, minerales, vitaminas y los
                        alimentos para reparar, restaurar, renovar y reforzar las estructuras musculares, cartílagos y
                        tendones. También permiten entender el cómo el entrenador maneja los ciclos de entrenamientos,
                        cargas y otros en cada persona o atleta de acuerdo a sus capacidad cardio respiratoria, tipos de
                        colágenos, tendencia a la retención de ácido láctico, entre otros que en su conjunto permiten
                        mejorar, hasta en un 30%, las condiciones físicas de los atletas; sugerir el deporte que se
                        adecua a cada persona de acuerdo con su constitución orgánica; indicar ciclos de entrenamientos
                        personalizados; y prevenir lesiones mediante la indicación de productos naturales que mejoren la
                        condición física sin que estos sean prohibidos para su uso en la práctica del deporte.</p>
                </div>
                <div class="info-section"
                    style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #e8f5e9;">
                    <h3 style="font-size: 16px; color: #1b5e20; margin-bottom: 5px;">Conoce los fundamentos de la
                        Nutrición “Inteligente”</h3>
                    <p style="margin: 0;">La genética particular de cada individuo es esencial para entender cuáles son
                        los alimentos que debe consumirse abundante, moderadamente y con mucho cuidado para que no
                        existan influencias de los alimentos sobre los genes, ni de los genes sobre los alimentos. La
                        nutrición inteligente es una herramienta que define la longevidad y calidad de vida de la
                        persona.</p>
                </div>
                <div class="info-section"
                    style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #e8f5e9;">
                    <h3 style="font-size: 16px; color: #1b5e20; margin-bottom: 5px;">Conoce tus Orígenes Ancestrales
                    </h3>
                    <p style="margin: 0;">Con este estudio cada persona que se realice la prueba recibirá como premio el
                        conocimiento sobre sus orígenes ancestrales. Aspecto este que tiene relevancia para la nutrición
                        y la salud.</p>
                </div>
            </div>

            <!-- RESUMEN DEL PACIENTE -->
            <div class="results" style="font-size: 13px; line-height: 1.4; padding: 15px;">
                <h2 style="font-size: 18px; color: #06040a; margin-bottom: 10px;">
                    <i class="fas fa-info-circle" style="margin-right: 10px; color: #1b5e20;"></i>Resumen
                </h2>
                <div class="info-section"
                style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #e8f5e9;">
                    <p id="resumen-texto"></p>
                </div>



                <!--SECCIÓN ROJA-->
                <div class="info-section"
                    style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #ffebee;">
                    <h3 style="font-size: 16px; color: #c62828; margin-bottom: 5px;">Enfermedades de Alto Riesgo</h3>
                    <p style="margin: 0;" id="red-diseases"></p>
                </div>

                <!--SECCIÓN NARANJA-->
                <div class="info-section"
                    style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #fff3e0;">
                    <h3 style="font-size: 16px; color: #ef6c00; margin-bottom: 5px;">Metabolismo de Medicamentos,
                        Vitaminas, Minerales, Capacidad Física y otros.</h3>
                    <p style="margin: 0;">
                        En el informe se muestra cómo el paciente metaboliza (procesa) los medicamentos en diferentes
                        formas (ultrarrápido, rápido, moderado, lento o no lo transforma), lo cual es un dato
                        extremadamente importante para que los médicos del paciente puedan seleccionar los medicamentos
                        en las dosis y frecuencias que amerita este paciente en particular. También, conociendo el
                        metabolismo de cada uno de los medicamentos usados por el paciente, es posible que el médico
                        pueda entender cómo las variables genéticas pueden acelerar el desarrollo de enfermedades
                        autoinmunes, metabólicas, proliferativas y los diferentes tipos de cáncer asociados al uso de
                        medicamentos de uso prolongado; para de esta forma indicar los adyuvantes que contrarresten los
                        efectos de estos medicamentos y mejoren las acciones farmacológicas.
                        En la misma medida, la genética del paciente determina las sustancias a las que puede hacer
                        adicción, tolerancia, alergias, intolerancias, o ser altamente tolerante, lo cual también es
                        dañino para la salud.
                        De acuerdo a la genética particular, el paciente tiene restricciones de practicar ciertos
                        deportes porque tiene riesgo de lesionarse o simplemente no rendir en la disciplina deportiva
                        seleccionada; esto sucede porque, de acuerdo al tipo de fibras musculares, tipos de colágenos,
                        propensión a la inflamación muscular, capacidad de recuperación de los músculos después del
                        entrenamiento, capacidad cardiorrespiratoria, capacidad cardiovascular, propensión a acumular y
                        eliminar ácido láctico, capacidad para producir ATP por las mitocondrias en fibras musculares,
                        capacidad para utilizar eficientemente azúcares y grasas, etc., son las que le definen al
                        paciente la forma de hacer actividad física diaria, o la práctica deportiva profesional
                        recomendado por un profesional que tenga en cuenta los resultados, mostrado en este documento,
                        relativos a los resultados de polimorfismo genético.
                        En la misma medida, la genética del paciente determina los alimentos que puede o no consumir,
                        incluyendo las vitaminas, minerales y sustancias a las que puede hacer adicción, tolerancia,
                        alergias, intolerancias, etc., las que a la postre pueden dañar la salud.
                    </p>
                </div>

                <!-- SECCIÓN VERDE -->
                <div class="info-section"
                    style="margin-bottom: 10px; padding: 10px; border-radius: 8px; background-color: #e8f5e9;">
                    <h3 style="font-size: 16px; color: #1b5e20; margin-bottom: 5px;">Medidas Preventivas y
                        Recomendaciones</h3>
                    <p style="margin: 0;">
                        En general, los resultados en los hallazgos positivos en un polimorfismo genético, encontrados
                        en el paciente, más allá de preocupaciones por la condición de salud; deben constituir un
                        acicate para ser usados como una herramienta única e indivisa para que los médicos y el propio
                        paciente puedan tomar decisiones informadas sobre cómo proceder con su salud mediante el uso de
                        protocolos personalizados para prevenir, controlar, tratar, curar alteraciones, síndromes,
                        enfermedades y revertir el proceso de envejecimiento.
                    </p>
                </div>
            </div>

            <!-- COMIENZAN LAS ENFERMEDADES-->
            <section class="diseases">
                <h2><i class="fas fa-virus" style="margin-right: 10px; color: #6b36a6; font-size: 24px;"></i> Informe
                    Diagnóstico sobre las Alteraciones, Síndromes y Enfermedades Monogénicas</h2>
                <section class="monogenic-diseases-explanation">
                    <p>El análisis de las disímiles variantes genéticas obtenidas, a partir de la investigación de
                        muestras ADN presentes en la saliva, son correlacionadas mediante algoritmos que procesan
                        potentes herramientas informáticas. Las correlaciones permiten definir el riesgo de contraer las
                        alteraciones, síndromes y enfermedades que aparecen a continuación. Posteriormente, se utilizan
                        estos mismos algoritmos para recomendar medidas preventivas que eviten el desarrollo, progresión
                        e instauración de los hallazgos mediante el uso de terapias epigenéticas, medicina
                        ortomolecular, nutrición “inteligente”, otros productos terapéuticos específicos y cambios de
                        estilos de vida. Estas recomendaciones se indicarán de forma personalizada en consulta con su
                        médico especialista, aplicando los conocimientos genómicos y proteómicos en la práctica clínica
                        para prolongar la vida con calidad.</p>
                </section>

                <table class="symbol-table">
                    <tr>
                        <th>Bajo</th>
                        <th>Medio</th>
                        <th>Alto</th>
                    </tr>
                    <tr>
                        <td><i class="fas fa-check-circle" style="color: green;"></i></td>
                        <td><i class="fas fa-exclamation-circle" style="color: orange;"></i></td>
                        <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                    </tr>
                </table>

                <table class="risk-table">
                    <thead>
                        <tr>
                            <th>Enfermedad</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody id="monogenic-disease-rows">
                        <!-- Filas dinámicas -->
                    </tbody>
                </table>

                <section class="monogenics-summary">
                    <h3 style="color: red;"><i class="fas fa-times-circle"
                            style="color: red; margin-right: 10px;"></i>Enfermedades con Alto Riesgo</h3>
                    <p id="monogenic-high-risk-diseases" style="color: red;">
                        <!-- Enfermedades con Alto Riesgo -->
                    </p>
                    <h3 style="color: orange;"><i class="fas fa-exclamation-circle"
                            style="color: orange; margin-right: 10px;"></i>Enfermedades con Riesgo Medio</h3>
                    <p id="monogenic-medium-risk-diseases" style="color: orange;">
                        <!-- Enfermedades con Riesgo Medio -->
                    </p>
                    <h3 style="color: green;"><i class="fas fa-check-circle"
                            style="color: green; margin-right: 10px;"></i>Enfermedades con Bajo Riesgo</h3>
                    <p id="monogenic-low-risk-diseases" style="color: green;">
                        <!-- Enfermedades con Bajo Riesgo -->
                    </p>
                </section>

            </section>

            <div class="container">
                <!-- Contenido del informe omitido para brevedad -->
                <section class="complex-diseases">
                    <h2><i class="fas fa-virus" style="margin-right: 10px; color: #6b36a6; font-size: 24px;"></i>Informe
                        Diagnóstico sobre las Alteraciones, Síndromes y Enfermedades Complejas</h2>
                    <section class="complex-diseases-explanation">
                        <p>El análisis de las disímiles variantes genéticas obtenidas, a partir de la investigación de
                            muestras ADN presentes en la saliva, son correlacionadas mediante algoritmos que procesan
                            potentes herramientas informáticas. Las correlaciones permiten definir el riesgo de contraer
                            las alteraciones, síndromes y enfermedades que aparecen a continuación. Posteriormente, se
                            utilizan estos mismos algoritmos para recomendar medidas preventivas que eviten el
                            desarrollo, progresión e instauración de los hallazgos mediante el uso de terapias
                            epigenéticas, medicina ortomolecular, nutrición “inteligente”, otros productos terapéuticos
                            específicos y cambios de estilos de vida. Estas recomendaciones se indicarán de forma
                            personalizada en consulta con su médico especialista, aplicando los conocimientos genómicos
                            y proteómicos en la práctica clínica para prolongar la vida con calidad.</p>
                    </section>
                    <table class="symbol-table">
                        <tr>
                            <th>Bajo</th>
                            <th>Medio</th>
                            <th>Alto</th>
                        </tr>
                        <tr>
                            <td><i class="fas fa-check-circle" style="color: green;"></i></td>
                            <td><i class="fas fa-exclamation-circle" style="color: orange;"></i></td>
                            <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                        </tr>
                    </table>
                    <table class="risk-table">
                        <thead>
                            <tr>
                                <th>Enfermedad</th>
                                <!--<th>Grado de Riesgo</th> -->
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody id="complex-disease-rows">
                            <!-- Filas dinámicas -->
                        </tbody>
                    </table>
                </section>

                <section class="disease-summary">
                    <h3 style="color: red;"><i class="fas fa-times-circle"
                            style="color: red; margin-right: 10px;"></i>Enfermedades con Alto Riesgo</h3>
                    <p id="complex-high-risk-diseases" style="color: red;">
                        <!-- Enfermedades con Alto Riesgo -->
                    </p>
                    <h3 style="color: orange;"><i class="fas fa-exclamation-circle"
                            style="color: orange; margin-right: 10px;"></i>Enfermedades con Riesgo Medio</h3>
                    <p id="complex-medium-risk-diseases" style="color: orange;">
                        <!-- Enfermedades con Riesgo Medio -->
                    </p>
                    <h3 style="color: green;"><i class="fas fa-check-circle"
                            style="color: green; margin-right: 10px;"></i>Enfermedades con Bajo Riesgo</h3>
                    <p id="complex-low-risk-diseases" style="color: green;">
                        <!-- Enfermedades con Bajo Riesgo -->
                    </p>
                </section>


                
                   <!-- Farmacogenética div-->
<section class="pharmacogenetics">
    <h2><i class="fas fa-pills" style="margin-right: 10px; color: #6b36a6; font-size: 24px;"></i>Informe
        sobre Sensibilidad de Fármacos (Farmacogenética)</h2>

    <section class="pharmacogenetics-explanation">
        <p>El polimorfismo genético de cada persona define la forma en que cada individuo metaboliza o no los
            medicamentos, así como las posibles acciones farmacológicas y las reacciones tóxicas de los fármacos sobre
            los diferentes órganos y tejidos del individuo como se muestra a continuación.</p>
    </section>

    <table class="symbol-table">
        <tr>
            <th>Bajo</th>
            <th>Medio</th>
            <th>Alto</th>
        </tr>
        <tr>
            <td><i class="fas fa-check-circle" style="color: green;"></i></td>
            <td><i class="fas fa-exclamation-circle" style="color: orange;"></i></td>
            <td><i class="fas fa-times-circle" style="color: red;"></i></td>
        </tr>
    </table>

    <table class="risk-table">
        <thead>
            <tr>
                <th>Medicamento</th>
                <th>Acción Farmacológica</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody id="pharmacogenetics-rows">
            <!-- Filas dinámicas -->
        </tbody>
    </table>
</section>

<section class="pharmacogenetics-summary">
    <h3 style="color: red;"><i class="fas fa-times-circle" style="color: red; margin-right: 10px;"></i>Medicamentos con Alto Riesgo</h3>
    <p id="high-risk-pharmacogenetics" style="color: red;">
        <!-- Medicamentos con Alto Riesgo -->
    </p>

    <h3 style="color: orange;"><i class="fas fa-exclamation-circle" style="color: orange; margin-right: 10px;"></i>Medicamentos con Riesgo Medio</h3>
    <p id="medium-risk-pharmacogenetics" style="color: orange;">
        <!-- Medicamentos con Riesgo Medio -->
    </p>

    <h3 style="color: green;"><i class="fas fa-check-circle" style="color: green; margin-right: 10px;"></i>Medicamentos con Bajo Riesgo</h3>
    <p id="low-risk-pharmacogenetics" style="color: green;">
        <!-- Medicamentos con Bajo Riesgo -->
    </p>
</section>





                <section class="traits">
                    <h2><i class="fas fa-dna" style="margin-right: 10px; color: #6b36a6; font-size: 24px;"></i>Rasgos,
                        Tolerancia a Sustancias y Relación con el Desarrollo de Enfermedades</h2>

                    <section class="traits-explanation">
                        <p>Las variantes genéticas de cada individuo, en particular, definen su capacidad para “tolerar”
                            diferentes cuantías de ciertas sustancias que suelen ser dañinos para la salud, porque se
                            relacionan con el desarrollo o potenciación de ciertas enfermedades. El consumo moderado y
                            racional de estas sustancias evita la aparición de enfermedades, o simplemente contribuye
                            con el mejoramiento de la salud o la cura de estos padecimientos cuando ya están
                            instauradas. En este caso en específico el paciente responderá de la siguiente forma:</p>
                    </section>

                    <table class="symbol-table">
                        <tr>
                            <th>Beneficioso</th>
                            <th>Normal</th>
                            <th>Perjudicial</th>
                        </tr>
                        <tr>
                            <td><i class="fas fa-check-circle" style="color: green;"></i></td>
                            <td><i class="fas fa-exclamation-circle" style="color: orange;"></i></td>
                            <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                        </tr>
                    </table>
                    <table class="risk-table">
                        <thead>
                            <tr>
                                <th>Cualidad/Capacidad</th>
                                <!--<th>Resultado</th>-->
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody id="traits-rows">
                            <!-- Filas dinámicas -->
                        </tbody>
                    </table>
                </section>

                <div>
                    <h2></h2>
                    <p id="special-trait"></p>
                </div>

                <section class="traits-summary">
                    <h3 style="color: red;"><i class="fas fa-times-circle"
                            style="color: red; margin-right: 10px;"></i>Perjudiciales</h3>
                    <p id="high-risk-traits" style="color: red;">
                        <!-- Perjudiciales -->
                    </p>

                    <h3 style="color: green;"><i class="fas fa-check-circle"
                            style="color: green; margin-right: 10px;"></i>Beneficioso</h3>
                    <p id="low-risk-traits" style="color: green;">
                        <!-- Beneficiosos  -->
                    </p>

                    <h3 style="color: orange;"><i class="fas fa-exclamation-circle"
                            style="color: orange; margin-right: 10px;"></i>Enfermedades con Riesgo Medio y Rasgos
                        Distintivos</h3>
                    <p id="medium-risk-traits" style="color: orange;">
                        <!-- Medio -->
                    </p>
                </section>

                <section class="athletic-performance">
                    <h2><i class="fas fa-running"
                            style="margin-right: 10px; color: #6b36a6; font-size: 24px;"></i>Rendimiento Atlético e
                        Influencia sobre el Metabolismo</h2>
                    <p>Las variaciones genéticas, de cada persona en particular, definen las características y
                        propiedades intrínsecas de los tejidos y órganos relacionados con la práctica del deporte, el
                        metabolismo y las capacidades de cada individuo para alcanzar el máximo rendimiento y su
                        capacidad para la práctica de un deporte en particular. Al conocer la biología, de la persona en
                        particular, podemos diseñar las sesiones de entrenamientos y las cargas de trabajo sin dañar los
                        músculos, tendones y ligamentos. También es posible indicar productos “inteligentes” específicos
                        que en la práctica se “igualen” las capacidades físicas de los atletas, aun cuando algunos
                        presenten una mejor predisposición genética para la práctica y el rendimiento deportivo. Se
                        puede mejorar, igualmente, el estado físico, disminuir de peso, aumentar masa muscular, entre
                        otros parámetros. En este caso, en específico, se sugiere proceder con este atleta de siguiente
                        forma:</p>

                    <table class="symbol-table">
                        <tr>
                            <th>Beneficioso</th>
                            <th>Normal</th>
                            <th>Perjudicial</th>
                        </tr>
                        <tr>
                            <td><i class="fas fa-check-circle" style="color: green;"></i></td>
                            <td><i class="fas fa-exclamation-circle" style="color: orange;"></i></td>
                            <td><i class="fas fa-times-circle" style="color: red;"></i></td>
                        </tr>
                    </table>

                    <table class="risk-table">
                        <thead>
                            <tr>
                                <th>Cualidad</th>
                                <!--<th>Resultado</th>-->
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody id="wellness-rows">
                            <!-- Filas dinámicas -->
                        </tbody>
                    </table>
                </section>

                <section class="athletic-summary">
                    <h3 style="color: red;"><i class="fas fa-times-circle"
                            style="color: red; margin-right: 10px;"></i>Perjudicial</h3>
                    <p id="high-risk-wellness" style="color: red;">
                        <!-- Perjudicial -->
                    </p>

                    <h3 style="color: green;"><i class="fas fa-check-circle"
                            style="color: green; margin-right: 10px;"></i>Beneficioso</h3>
                    <p id="low-risk-wellness" style="color: green;">
                        <!-- Beneficioso -->
                    </p>

                    <h3 style="color: orange;"><i class="fas fa-exclamation-circle"
                            style="color: orange; margin-right: 10px;"></i>Medio</h3>
                    <p id="medium-risk-wellness" style="color: orange;">
                        <!-- Medio -->
                    </p>
                </section>

                <section class="ancestry">
                    <h2>
                        <img src="monkey.png" alt="Monkey Icon" class="icon">Ancestralidad
                    </h2>
                    <div id="ancestry-content" class="ancestry-content">
                        <!-- Contenido dinámico del PDF -->
                    </div>
                </section>

                <section class="indications card-style">
                    <h2><i class="fas fa-user-md" style="color: #16a085; margin-right: 10px;"></i>Indicaciones Generales
                    </h2>
                    Los médicos primarios y especialistas que atienden al paciente, en lo adelante deberán tomar en
                    consideración que los síndromes, enfermedades y alteraciones identificadas, deben ser objeto de
                    seguimiento de acuerdo con los métodos de diagnósticos que se describen a continuación para cada
                    hallazgo, y en la misma medida tomar las medidas de prevención recomendadas según el
                    polimorfismo genético particular del paciente. Estos son los casos con trastornos en el
                    metabolismo del hierro que pudiera ocasionar daños como cirrosis hepática, cáncer de hígado,
                    diabetes, hipertensión, enfermedades cardíacas y enfermedades neurológicas, endocrinas, piel y
                    de las articulaciones por lo que en lo adelante el paciente debe saber que el tratamiento suele
                    involucrar la restricción de la ingesta de hierro en la dieta. Por otro lado, para prevenir o
                    controlar el desarrollo de las enfermedades de alto riesgo de acuerdo con los resultados de los
                    análisis de polimorfismo genético, y la condición del paciente, se sugiere que sus familiares
                    con ayuda de los médicos primarios y especialistas procedan a establecer protocolos para el
                    diagnóstico precoz y la prevención de:
                    <ol id="general-indications"></ol>
                </section>




                <section class="specific-indications">
                    <h2>Específicos</h2>
                    <p>De acuerdo con los hallazgos encontrados debe procederse de la siguiente forma:</p>
                    <h3>Cambios de estilos de vida</h3>
                    <p>Controlar factores de riesgo modificables como el tabaquismo, la obesidad, la exposición a
                        carcinógenos ambientales. Hacer ejercicios sistemáticos. Suplementación de antioxidante, control
                        sobre las cantidades de alcohol que pudieran dar sensibilidad; no consumir alimentos que causan
                        sensibilidad y síntomas detectados en su análisis genético; mantener niveles adecuados de
                        vitaminas indicadas en las composiciones epigenéticas con énfasis en el consumo de la vitaminas
                        y minerales indicadas. Tener cuidado con el uso de medicamentos cuando sean indicados, en ese
                        caso debe acudir a reportes de farmacogenéticas que obran en su poder y con apoyo de su médico
                        proceder a ajustes de dosis, posología o supresión el medicamento. Valorar los intervalos de
                        ejercicios de fuerza o extrema resistencia, para determinar el tiempo de recuperación, debido a
                        la propensión a la inflamación asociada a la alteración del colágeno; se recomienda ejercicios
                        intensos o extrema fuerza en combinaciones de grupos musculares en días alternos. </p>
                </section>

                <section class="nutrition-guidelines">
                    <h2><i class="fas fa-drumstick-bite" style="color: #2e7d32; margin-right: 10px;"></i> Nutrición para
                        seguir durante toda la vida</h2>
                    <h3 style="color: green;"><i class="fas fa-check-circle" style="color: green;"></i> Alimentos para
                        consumir abundantemente</h3>
                        <p id="abundant-consume-food" style="color: green;">Aceite de algas, calamar, fideos de quelpo, fideos de shirakati, Truchas.,
                        Aceite de aguacate, Aceite de coco, Aceite de hígado de bacalao Aceite de yacón, Aceite de nuez
                        de macadamia, Aceite de palma roja, Aceite de salvado de arroz, Aceite de sésamo, Aceite
                        derivados de la caña sin centrifugar, Aceite extra virgen de oliva, Aceitunas, acelga,
                        achicoria, ajo, alcachofas, Anchoas, apio, Atún, banana verde, Berro, Berza, Boniato, Brócoli,
                        brócolis, canela, Caqui, castaño, cebollas, cebolleta, cebollina, chirivas, chuflas, cilantro,
                        Col blanca cruda, col rizada, coles de Bruselas, coliflor, colinado, colinado, Collard greens,
                        crema de coco, endivias, escaroja, fletan, fruto de baobat, fruto del monje, gambas, harinas de
                        boniato, harinas de coco, harinas de mandioca, harinas de plátano verde, harinas de semilla de
                        uvas, hiervas y condimentos, hinojo, Jarabe de arce, jimaca, Jugo de lima, Jugo de limón,
                        Kinchi, leche de coso, Mago verde, masa de coco, mijo, Nabos, napa, nopales, nueces de
                        macadamia, nueces de pecana, nuez, ñame, ocra, ostras, papaya verde, pasta Slim, perca
                        americana, perejil, perillas, pescado salvaje, pescados blancos, pistachos, plátanos verdes,
                        puerros, rábanos, raíz de apio, remolacha, Rúcula, Salmon Alaska, sardinas, huevos, champiñón,
                        otras cetas.</p>

                    <h3 style="color: orange;"><i class="fas fa-exclamation-circle" style="color: orange;"></i>
                        Alimentos para consumir moderadamente</h3>
                    <p id="moderate-consume-food" style="color: orange;">Arroz no integral, aves de corral salvajes (pollo, avestruz, bisonte,
                        carne de vaca, casa, cerdo cordero, codorniz, confituras de harinas refinadas, embutidos,
                        galletas no integrales, galletas saladas no integrales, ganso, harinas refinadas, jabalí, jamón,
                        Levadura de panadería, Limón., paloma, panes de harinas refinadas, pastas de harinas refinadas,
                        pastelería no integral, patatas, pato, perdiz, tortillas de marca siete elaboradas con harina de
                        mandioca y coco, venado.</p>

                    <h3 style="color: red;"><i class="fas fa-times-circle" style="color: red;"></i> Alimentos que nunca
                        debe comer</h3>
                    <p id="exclude-consume-food" style="color: red;">Aceite maíz, arroz integral, frijoles pintos, miel abejas, aceite cacahuete,
                        aceite cártamo, aceite de corza, aceite de soja, aceite girasol, agave, Levadura de cerveza,
                        cervezas, Alimentos en escabeche chucrut, anacardo, aspartame, avenas, bayas de goji, cacahuete,
                        calabacín, calabaza, calabaza dulce, cebada, centeno, cereales, Cerveza, Chía, Chorizo, espelta,
                        esplenda, estevia, frijoles blancos, frijoles negros, frijoles rojos, garbanzos, girasol,
                        guisantes, harinas integrales, helados, hígados, kéfir, leche de origen animal y derivados,
                        legumbres, maíz y derivados, maltodextrina, maní, mantequilla de maní, mariscos como ostras,
                        mejillones, cangrejos y langostas, almendras, nueces, semillas de girasol, semillas de sésamo,
                        piñones, garbanzos, lentejas, frijoles, chocolate, cebada, la quinua, la avena, arroz integral,
                        espinacas, acelgas, kale, ciruelas pasas, las pasas, los aguacates y las papaya, y aves criados
                        con cereales y granos, melones, pepino, Pepperoni, pescado, Pescado ahumado, pescado enlatado,
                        Pescado seco, pimientos con cascaras y semillas, proteínas que contengan caseína, queso, Queso
                        cheddar, Queso mozzarella, Queso suizo, requesón, sacarina, Salami, Salsa (embotellada), soja,
                        tirabeques, todo tipo de alubias, todo tipo de lentejas, tofu, tomates con cascaras y semillas,
                        yogurt.</p>
                </section>


                <section class="therapeutic-suggestions">
                    <h2><i class="fas fa-band-aid" style="color: #16a085; margin-right: 10px;"></i>Sugerencias
                        Terapéuticas Personalizadas para Modular la Actividad de los Genes</h2>
                    <p>Desde 2005 hasta el presente se han logrados avances “increíbles”, impensables hasta solo hace
                        unos meses, en materia de diagnósticos a partir del conocimiento de la genética particular de
                        cada individuo. Sin embargo, la mayoría de los resultados no son explotados con todo el
                        potencial que amerita un descubrimiento de tal envergadura. Favorablemente, nuestro equipo de
                        científicos ha logrado desarrollar herramientas informáticas que correlacionan los hallazgos
                        genómicos con los proteómicos; para a partir de esta armonización poder brindar soluciones
                        terapéuticas epigenéticas que se aplican para la prevención, control, tratamiento y cura de
                        enfermedades e incluso para retardar y revertir el proceso de envejecimiento. A tenor con ello,
                        el paciente deberá recibir terapias epigenéticas, ya diseñadas por nuestros sistemas de medicina
                        inteligentes que se corresponden con los números 1938, 2209, 3631 y 4884 que serán elaboradas
                        cuando el paciente y su medico lo decidan.</p>
                    <p>Nota: Los ingredientes activos, oligoelementos, vitaminas, aminoácidos, lípidos, otros compuestos
                        e incluso medicamentos de etiqueta indicados en las diferentes combinaciones que conforman las
                        composiciones; están aprobados para su uso por la FDA en las concentraciones y frecuencia que se
                        indicarán. Sin embargo, estas composiciones, aun cuando tienen fundamentos científicos
                        irrefutables y están en algunos casos patentadas, no están aprobadas por la FDA. Es
                        responsabilidad de cada persona consultar a su médico para proceder a usar cada una de las
                        composiciones y que el facultativo le indique el protocolo de tratamiento.</p>
                </section>


                <section class="recommendations">
                    <h2>Recomendaciones e Instrucciones Generales</h2>
                    <div class="recommendation-content">
                        <p>La información contenida en este documento es el resultado del análisis e interpretación de
                            los marcadores del polimorfismo genético particular del paciente referenciado.</p>
                        <p>Es competencia de los médicos familiares o especialistas, que indicaron el estudio, informar
                            al paciente los resultados y los protocolos y procedimientos a seguir de acuerdo con el
                            interés o deseos del paciente.</p>
                        <p>Aunque la apariencia de la información contenida en el documento puede impresionar que es de
                            fácil interpretación; en realidad no lo es.</p>
                        <p>Razón por la cual, no nos hacemos responsables de las decisiones que tome el paciente,
                            relacionadas con el informe, sin la asesoría de sus médicos.</p>
                    </div>
                </section>

                <section class="references">
                    <h2>Referencias</h2>
                    <div class="references-content">
                        <p>1. Ayuso P, Garcia-Martin E, Martinez C, Agundez JA. Polymorphisms in the
                            catechol-O-methyltransferase (COMT) gene influence plasma total homocysteine levels. 13.
                            Genetic variability of human diamine oxidase: occurrence of three nonsynonymous
                            polymorphisms and study of their effect on serum enzyme activity. Pharmacogenet Genomics.
                            2007 Sep;17(9):687-93.</p>
                        <p>2. Campbell H, Rudan I. Interpretation of genetic association studies in complex disease.
                            Pharmacogenomics J. 2002;2(6):349–60.</p>
                        <p>3. Carr DF, Chaponda M, Jorgensen AL, Castro EC, van Oosterhout JJ, Khoo SH, et al.
                            Association of human leukocyte antigen alleles and nevirapine hypersensitivity in a Malawian
                            HIV-infected population. Clin Infect Dis. 2013;56(9):1330–9.</p>
                        <p>4. Chen P, Lin JJ, Lu CS, Ong CT, Hsieh PF, Yang CC, et al. Carbamazepine-induced toxic
                            effects and HLA-B*1502 screening in Taiwan. N Engl J Med. 2011;364(12):1126–33.</p>
                        <p>5. Ciccacci C, Rufini S, Politi C, Novelli G, Forte V, Borgiani P. Could MicroRNA
                            polymorphisms influence warfarin dosing? A pharmacogenetics study on mir133 genes. Thromb
                            Res. 2015; 136(2):367–70.</p>
                        <p>6. Dear JW, Antoine DJ, Starkey-Lewis P, Goldring CE, Park BK. Early detection of paracetamol
                            toxicity using circulating liver microRNA and markers of cell necrosis. Br J Clin Pharmacol.
                            2014;77(5):904–5.</p>
                        <p>7. Delaneau O, Marchini J, Zagury JF. A linear complexity phasing method for thousands of
                            genomes. Nat Methods. 2012;9(2): 179–81.</p>
                        <p>8. Dilthey A, Leslie S, Moutsianas L, Shen J, Cox C, Nelson MR, et al. Multi-population
                            classical HLA type imputation. PLo SComput Biol. 2013;9(2):e1002877.</p>
                        <p>9. Elena Garcia-Martin, Pedro Ayuso, Carmen Martinez, Miguel Blanca, and Jose AG Agundez.
                            Histamine pharmacogenomics. Pharmacogenomics, May 2009, Vol. 10, No. 5 , Pages 867-883.</p>
                        <p>10. Feng Q, Wilke RA, Baye TM. Individualized risk for statininduced myopathy: current
                            knowledge, emerging challenges and potential solutions. Pharmacogenomics. 2012;13(5):579–94.
                        </p>
                        <p>11. Fredriksen A et al. Influence of 699C-->T and 1080C-->T polymorphisms of the
                            cystathionine beta-synthase gene on plasma homocysteine levels. Clin Genet. 2000
                            Dec;58(6):455-9.</p>
                        <p>12. Gaughan DJ et al. The methionine synthase reductase (MTRR) A66G polymorphism is a novel
                            genetic determinant of plasma homocysteine concentrations. Atherosclerosis. 2001
                            Aug;157(2):451-6.</p>
                        <p>13. Group SC, Link E, Parish S, Armitage J, Bowman L, Heath S, et al. SLCO1B1 variants and
                            statin-induced myopathy—a genomewide study. N Engl J Med. 2008;359(8):789–99.</p>
                        <p>14. Guzey C, Spigset O. Genotyping of drug targets: a method to predict adverse drug
                            reactions? Drug Saf. 2002;25(8):553–60.</p>
                        <p>15. Hoggart CJ, Whittaker JC, De Iorio M, Balding DJ. Simultaneous analysis of all SNPs in
                            genome-wide and re-sequencing association studies. PLoS Genet. 2008;4(7):e1000130.</p>
                        <p>16. Howey R, Cordell HJ. Imputation without doing imputation: a new method for the detection
                            of non-genotyped causal variants. Genet Epidemiol. 2014;38(3):173–90.</p>
                        <p>17. Howie B, Fuchsberger C, Stephens M, Marchini J, Abecasis GR. Fast and accurate genotype
                            imputation in genome-wide association studies through pre-phasing. Nat Genet.
                            2012;44(8):955–9.</p>
                        <p>18. Ichihara A, Wang Z, Jinnin M, Izuno Y, Shimozono N, Yamane K, et al. Upregulation of
                            miR-18a-5p contributes to epidermal necrolysis in severe drug eruptions. J Allergy Clin
                            Immunol. 2014;133(4):1065–74.</p>
                        <p>19. Jiao S, Hsu L, Hutter CM, Peters U. The use of imputed values in the meta-analysis of
                            genome-wide association studies. Genet Epidemiol. 2011;35(7):597–605.</p>
                        <p>20. Kimmel SE, French B, Kasner SE, Johnson JA, Anderson JL, Gage BF, et al. A
                            pharmacogenetic versus a clinical algorithm for warfarin dosing. N Engl J Med.
                            2013;369(24):2283–93.</p>
                        <p>21. Koren G, Cairns J, Chitayat D, Gaedigk A, Leeder SJ. Pharmacogenetics of morphine
                            poisoning in a breastfed neonate of a codeine-prescribed mother. Lancet. 2006;368(9536):704.
                        </p>
                        <p>22. Kulkarni S, Savan R, Qi Y, Gao X, Yuki Y, Bass SE, et al. Differential microRNA
                            regulation of HLA-C expression and its association with HIV control. Nature.
                            2011;472(7344):495–8.</p>
                        <p>23. Ladero V et al. Toxicological Effects of Dietary Biogenic Amines. Current Nutrition &
                            Food Science, 2010, 6, 145-156 145.</p>
                        <p>24. Lea RA et al. The role of the MTHFR gene in migraine. Headache. 2012 Mar;52(3):515-20.
                            Bjelland IMD et al. Genetic variants of angiotensin converting enzyme and
                            methylenetetrahydrofolate reductase may act in combination to increase migraine
                            susceptibility. Brain Res Mol Brain Res. 2005 May 20; 136(1 -2):112-7.</p>
                        <p>25. Lee S, Abecasis GR, Boehnke M, Lin X. Rare-variant association analysis: study designs
                            and statistical tests. Am J Hum Genet. 2014;95(1):5–23.</p>
                        <p>26. Levin AM, Adrianto I, Datta I, Iannuzzi MC, Trudeau S, McKeigue P, et al. Performance of
                            HLA allele prediction methods in African Americans for class II genes HLA-DRB1, DQB1, and
                            -DPB1. BMC Genet. 2014;15:72.</p>
                        <p>27. Maintz L et al. Evidence for a reduced histamine degradation capacity in a subgroup of
                            patients with atopic eczema. J Allergy Clin Immunol. 2006 May;117(5):1106-12.</p>
                        <p>28. Maintz L et al. Histamine and histamine intolerance. Am J Clin Nutr. 2007
                            May;85(5):1185-96.</p>
                        <p>29. Maintz L et al. Association of single nucleotide polymorphisms in the diamine oxidase
                            gene with diamine oxidase serum activities. Allergy. 2011 Jul;66(7):893-902.</p>
                        <p>30. Marchini J, Howie B. Genotype imputation for genome-wide association studies. Nat Rev
                            Genetics. 2010;11(7):499–511.</p>
                        <p>31. Mega JL, Walker JR, Ruff CT, Vandell AG, Nordio F, Deenadayalu N, et al. Genetics and the
                            clinical response to warfarin and edoxaban: findings from the randomised, double- blind
                            ENGAGE AF-TIMI 48 trial. Lancet. 2015;385(9984):2280–7.</p>
                        <p>32. Mizzi C, Peters B, Mitropoulou C, Mitropoulos K, Katsila T, Agarwal MR, et al.
                            Personalized pharmacogenomics profiling using whole-genome sequencing. Pharmacogenomics.
                            2014;15(9):1223–34.</p>
                        <p>33. Morita HMD et al. Genetic Polymorphism of 5,10-Methylenetetrahydrofolate Reductase
                            (MTHFR) as a Risk Factor for Coronary Artery Disease. Circulation. 1997 Apr 15;95(8):2032-6.
                        </p>
                        <p>34. Motsinger-Reif AA, Jorgenson E, Relling MV, Kroetz DL, Weinshilboum R, Cox NJ, et al.
                            Genome-wide association studies in pharmacogenomics: successes and lessons. Pharmacogenet
                            Genomics. 2013;23(8):383–94.</p>
                        <p>35. Niwa T et al. Human Liver Enzymes Responsible for Metabolic Elimination of Tyramine; a
                            Vasopressor Agent from Daily Food. Drug Metab Lett. 2011 Aug;5(3):216-9.</p>
                        <p>36. Pirmohamed M, Kamali F, Daly AK, Wadelius M. Oral anticoagulation: a critique of recent
                            advances and controversies. Trends Pharmacol Sci. 2015;36(3):153–63.</p>
                        <p>37. Pirmohamed M, Ostrov DA, Park BK. New genetic findings lead the way to a better
                            understanding of fundamental mechanisms of drug hypersensitivity. J Allergy Clin Immunol.
                            2015;136(2):236–44.</p>
                        <p>38. Pogribna M et al. Homocysteine metabolism in children with Down syndrome: in vitro
                            modulation. Am J Hum Genet. 2001 Jul;69(1):88-95. Epub 2001 Jun 5.</p>
                        <p>39. Potamias G, Lakiotaki K, Katsila T, Lee MT, Topouzis S, Cooper DN, et al. Deciphering
                            next-generation pharmacogenomics: an information technology perspective. Open Biol.
                            2014;4(7):pii: 140071.</p>
                        <p>40. Sato S, Ichihara A, Jinnin M, Izuno Y, Fukushima S, Ihn H. Serum miR-124 up-regulation as
                            a disease marker of toxic epidermal necrolysis. Eur J Dermatol. 2015.</p>
                        <p>41. Shuldiner AR, O’Connell JR, Bliden KP, Gandhi A, Ryan K, Horenstein RB, et al.
                            Association of cytochrome P450 2C19 genotype with the antiplatelet effect and clinical
                            efficacy of clopidogrel therapy. JAMA. 2009;302(8):849–57.</p>
                        <p>42. Siu H, Zhu Y, Jin L, Xiong M. Implication of next-generation sequencing on association
                            studies. BMC Genomics. 2011;12:322.</p>
                        <p>43. Sousa-Pinto B, Pinto-Ramos J, Correia C, Goncalves-Costa G, Gomes L, Gil-Mata S, et al.
                            Pharmacogenetics of abacavir hypersensitivity: a systematic review and meta-analysis of the
                            association with HLA-B*57:01. J Allergy Clin Immunol. 2015;136(4):1092–1094.e3.</p>
                        <p>44. Spencer CC, Su Z, Donnelly P, Marchini J. Designing genomewide association studies:
                            sample size, power, imputation, and the choice of genotyping chip. PLoS Genet.
                            2009;5(5):e1000477.</p>
                        <p>45. Starkey Lewis PJ, Dear J, Platt V, Simpson KJ, Craig DG, Antoine DJ, et al. Circulating
                            microRNAs as potential markers of human drug-induced liver injury. Hepatology.
                            2011;54(5):1767–76.</p>
                        <p>46. Stranger BE, Stahl EA, Raj T. Progress and promise of genomewide association studies for
                            human complex trait genetics. Genetics. 2011;187(2):367–83.</p>
                        <p>47. Tunbridge EM et al. Folate, Vitamin B12, Homocysteine, and the MTHFR 677C—T Polymorphism
                            in Anxiety and Depression. The Hordaland Homocysteine Study. Arch Gen Psychiatry.
                            2003;60(6):618-626.</p>
                        <p>48. Vaughan TR. The Role of Food in the Pathogenesis of Migraine Headache. Clin Rev Allergy.
                            1994;12:167-180.</p>
                        <p>49. Wantke F et al. Histamine-free diet: treatment of choice for histamine-induced food
                            intolerance and supporting treatment for chronic headaches. Clin Exp Allergy. 1993
                            Dec;23(12):982-5.</p>
                        <p>50. Xu H, Robinson GW, Huang J, Lim JY, Zhang H, Bass JK, et al. Common variants in ACYP2
                            influence susceptibility to cisplatin-induced hearing loss. Nat Genet. 2015;47(3):263–6.</p>
                        <p>51. Zheng X, Shen J, Cox C, Wakefield JC, Ehm MG, Nelson MR, et al. HIBAG–HLA genotype
                            imputation with attribute bagging. Pharmacogenomics J. 2014;14(2):192–200.</p>
                    </div>

                    <div class="references-methodology">
                        <h3>Metodología</h3>
                        <p>Array based assays detect listed alleles, including all common and most rare variants with
                            known clinical significance at analytical sensitivity and specificity >99%.</p>
                    </div>
                    <div class="references-limitations">
                        <h3>Limitaciones</h3>
                        <p>This test will not detect all known alleles that result in altered or inactive tested genes.
                            This test does not take into account all individual variations in the tested individual. The
                            absence of a detectable genetic mutation does not rule out the possibility that a patient
                            has different phenotypes due to the presence of an undetected polymorphism or due to other
                            factors such as drug interactions, comorbidities, and lifestyle habits.</p>
                    </div>
                    <div class="references-disclaimer">
                        <h3>Disclaimer</h3>
                        <p>According to the current state of the requirements, we note that the information contained in
                            this document has not been authorized or approved by the United States Food and Drug
                            Administration, despite the fact that there are hundreds of thousands of publications and
                            scientific research endorsed by renowned medical institutions in the United States, Europe
                            and Japan that demonstrate the relevance and viability of these studies for the purposes
                            proposed in this case.

                            The information contained is not intended to be a substitute for the advice, diagnosis or
                            treatment indicated by a doctor or professional. Only a physician, pharmacist, or other
                            healthcare professional should advise a patient on the use of prescribed medications,
                            indicated nutrients, or suggested foods.
                            The software and the report generated by the software are not intended to diagnose, treat,
                            cure, or prevent any disease. A designated qualified person within the laboratory uses the
                            translation software to generate and subsequently review the report. The pharmacogenetic
                            report is one of the many pieces of information that doctors must take into account when
                            guiding the therapeutic choice of each patient. It remains the responsibility of the health
                            care provider to determine the best course of treatment for a patient. Despite all the
                            scientific evidence, in the case of medications, compliance with dosage guidelines does not
                            necessarily guarantee a successful medical outcome.</p>
                    </div>
                </section>
            </div>

            //TODO: Add security to file so it does not load if the user entering is not an administrator or the user owner of the file
            <script type="text/javascript">

                // let monoResults = [];
                let enfermedades = {
                    rasgos : [],
                    monogenic : [],
                    complex : []
                }

                function isEmpty(str) {
                    return (!str || str.trim() == "");
                }

                //RECOMENDACIONES
                function generateMonogenicDiseases(monoResults) {
                    const redSection = document.getElementById('red-diseases');
                    const recomendaciones = [];
                    monoResults.filter(d => d.status === "Presente").forEach(d => {
                        recomendacion = enfermedades.monogenic.find(e => e.enfermedad.toLowerCase() == d.disease.toLowerCase())?.recomendaciones_presentes;
                        if (isEmpty(recomendacion))
                            recomendacion = `<font color=red>REVISAR RECOMENDACIONES ${d.disease}</font>`;
                        recomendaciones.push(`<li style='margin-bottom:10px;'>${recomendacion}</li>`);
                    });

                    if (recomendaciones.length === 0)
                        redSection.innerHTML += `Felicitaciones, el paciente tiene la suerte de haber nacido sin ninguna enfermedad de etiología monogénica.<br /><br /><br />`;
                    else
                        redSection.innerHTML += `En relación con las enfermedades, el paciente nació con ${recomendaciones.length} enfermedades de etiología monogénica. Estos son los casos de:
                            <ol>${recomendaciones.join("")}</ol>`;
                }

                function generateComplexDiseases(results) {
                    const redSection = document.getElementById('red-diseases');
                    const recomendaciones = [];
                    results.filter(d => d.status === "Alto").forEach(d => {
                        recomendacion = enfermedades.complex.find(e => e.enfermedad.toLowerCase() == d.disease.toLowerCase())?.recomendaciones_presentes;
                        if (isEmpty(recomendacion))
                            recomendacion = `<font color=red>REVISAR RECOMENDACIONES ${d.disease}</font>`;
                        recomendaciones.push(`<li style='margin-bottom:10px;'>${recomendacion}</li>`);
                    });

                    if (recomendaciones.length === 0)
                        redSection.innerHTML += `Felicitaciones, el paciente tiene la suerte de haber nacido sin ninguna enfermedad de etiología multigénica.<br /><br /><br />`;
                    else
                        redSection.innerHTML += `Por otro lado, el paciente tiene alto riesgo de padecer varias enfermedades multigénicas como son:
                            <ol>${recomendaciones.join("")}</ol>`;
                }

                //INDICACIONES GENERALES
                function generateMonogenicIndications() {
                    const redSection = document.getElementById('general-indications');
                    const diagnosticos = [];
                    monoResults.filter(d => d.status === "Presente").forEach(d => {
                        diagnostico = enfermedades.monogenic.find(e => e.enfermedad.toLowerCase() == d.disease.toLowerCase())?.diagnostico;
                        if (isEmpty(diagnostico))
                            diagnostico = `<font color=red>REVISAR INDICACIONES ${d.disease}</font>`;
                        diagnosticos.push(`<li style='margin-bottom:10px;'>${diagnostico}</li>`);
                    });

                    if (diagnosticos.length > 0)
                        redSection.innerHTML += `${diagnosticos.join("")}`;
                }

                function generateComplexIndications(results) {
                    const redSection = document.getElementById('general-indications');
                    const diagnosticos = [];
                    results.filter(d => d.status === "Alto").forEach(d => {
                        diagnostico = enfermedades.complex.find(e => e.enfermedad.toLowerCase() == d.disease.toLowerCase())?.diagnostico;
                        if (isEmpty(diagnostico))
                            diagnostico = `<li style='margin-bottom:10px;'><font color=red>REVISAR INDICACIONES ${d.disease}</font></li>`;
                        diagnosticos.push(`<li style='margin-bottom:10px;'>${diagnostico}</li>`);
                    });

                    if (diagnosticos.length > 0)
                        redSection.innerHTML += `${diagnosticos.join("")}`;
                }



                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'es',
                        includedLanguages: 'en,pt',
                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                    }, 'google_translate_element');
                }

                document.addEventListener('DOMContentLoaded', function () {
                    setTimeout(function () {
                        var translateSelect = document.querySelector('.goog-te-combo');
                        if (translateSelect) {
                            translateSelect.value = 'en'; // 'en' es el código de idioma para inglés
                            var event = new Event('change');
                            translateSelect.dispatchEvent(event);

                            // No ocultar el contenedor de Google Translate
                        }
                    }, 3000); // Ajusta el tiempo según sea necesario
                });




                document.addEventListener('DOMContentLoaded', function () {
                    var link = document.querySelector('link[rel="stylesheet"][href*="estilo_informe.css"]');
                    if (!link) {
                        link = document.createElement('link');
                        link.rel = 'stylesheet';
                        link.href = 'estilo_informe.css';
                        document.head.appendChild(link);
                    }
                });

                // JavaScript para actualizar la fecha en tiempo real
                function updateDate() {
                    const dateElement = document.getElementById('currentDate');
                    const now = new Date();
                    const options = { year: 'numeric', month: '2-digit', day: '2-digit' };
                    dateElement.innerText = now.toLocaleDateString('es-ES', options);
                }

                // Actualizar la fecha inmediatamente al cargar la página
                updateDate();

                // Opcional: Actualizar la fecha cada día
                setInterval(updateDate, 86400000); // 86400000 ms = 1 día


                document.getElementById('downloadBtn').addEventListener('click', function () {
                    Swal.fire({
                        title: 'Descarga en progreso...',
                        text: 'Por favor espere mientras se genera el PDF.',
                        allowOutsideClick: false,
                        onBeforeOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    const element = document.querySelector('.container');
                    const downloadBtn = document.getElementById('downloadBtn');

                    // Ocultar el botón de descarga
                    downloadBtn.style.display = 'none';

                    const opt = {
                        margin: [0, 0, 0, 0],
                        filename: 'reporte_final.pdf',
                        image: { type: 'jpeg', quality: 0.3 }, // Reducir calidad de la imagen
                        html2canvas: {
                            scale: 1.5, // Reducir el escalado
                            useCORS: true,
                            backgroundColor: null,
                            logging: true,
                            windowWidth: element.scrollWidth,
                            windowHeight: element.scrollHeight
                        },
                        jsPDF: {
                            unit: 'pt',
                            format: [element.scrollWidth + 40, element.scrollHeight + 40],
                            orientation: 'portrait',
                            compress: true // Habilitar la compresión
                        },
                        pagebreak: { mode: ['avoid-all', 'css', 'legacy'] }
                    };

                    html2pdf().set(opt).from(element).save().then(() => {
                        Swal.close();
                        // Mostrar el botón de descarga después de la descarga
                        downloadBtn.style.display = 'block';
                    }).catch(err => {
                        console.log(err);
                        Swal.close();
                        // Mostrar el botón de descarga si hay un error
                        downloadBtn.style.display = 'block';
                    });
                });


                document.addEventListener('DOMContentLoaded', function () {
                    // Fetch and display wellness data
                    fetch('obtener_wellness.php')
                        .then(response => response.json())
                        .then(data => {
                            //console.log("Datos recibidos:", data);
                            const tbody = document.getElementById('wellness-rows');
                            const highRiskWellness = document.getElementById('high-risk-wellness');
                            const mediumRiskWellness = document.getElementById('medium-risk-wellness');
                            const lowRiskWellness = document.getElementById('low-risk-wellness');

                            if (data.error) {
                                console.error("Error desde el servidor:", data.error);
                            } else if (data.length === 0) {
                                console.log("No data found.");
                            } else {
                                data.forEach(disease => {
                                    const row = document.createElement('tr');

                                    const cellCualidad = document.createElement('td');
                                    cellCualidad.textContent = disease.enfermedad;
                                    row.appendChild(cellCualidad);

                                    const cellGradoRiesgo = document.createElement('td');
                                    cellGradoRiesgo.textContent = 'Ausente'; // Grado de Riesgo inicial
                                    row.appendChild(cellGradoRiesgo);

                                    const cellEstado = document.createElement('td');

                                    // Organizar en secciones de resumen
                                    if (disease.grado_riesgo === 'Alto') {
                                        cellEstado.innerHTML = '<i class="fas fa-times-circle" style="color: red;"></i>';
                                        highRiskWellness.innerHTML += `${disease.enfermedad}, `;
                                    } else if (disease.grado_riesgo === 'Medio') {
                                        cellEstado.innerHTML = '<i class="fas fa-exclamation-circle" style="color: orange;"></i>';
                                        mediumRiskWellness.innerHTML += `${disease.enfermedad}, `;
                                    } else {
                                        cellEstado.innerHTML = '<i class="fas fa-check-circle" style="color: green;"></i>';
                                        lowRiskWellness.innerHTML += `${disease.enfermedad}, `;
                                    }

                                    row.appendChild(cellEstado);
                                    tbody.appendChild(row);
                                });

                                // Remove trailing commas
                                highRiskWellness.innerHTML = highRiskWellness.innerHTML.slice(0, -2);
                                mediumRiskWellness.innerHTML = mediumRiskWellness.innerHTML.slice(0, -2);
                                lowRiskWellness.innerHTML = lowRiskWellness.innerHTML.slice(0, -2);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });



                // Configurar la ruta del worker
                pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js';

                document.addEventListener('DOMContentLoaded', function () {
                    const urlParams = new URLSearchParams(window.location.search);
                    const id = urlParams.get('id');

                    fetch(`obtenerPdfAncestry.php?id=${id}`)
                        .then(response => response.json())
                        .then(data => {
                            const ancestryPdf = data.ancestryPdf;
                            if (ancestryPdf) {
                                const loadingTask = pdfjsLib.getDocument(ancestryPdf);
                                loadingTask.promise.then(pdf => {
                                    pdf.getPage(1).then(page => {
                                        page.getTextContent().then(textContent => {
                                            const textItems = textContent.items;
                                            let formattedText = "";
                                            let currentLabel = "";
                                            textItems.forEach(item => {
                                                const text = item.str.trim();
                                                if (text === "Ancestralidad") {
                                                    // Omite la palabra "Ancestralidad"
                                                    return;
                                                }
                                                if (text.match(/(\d+(\.\d+)?%|Detectado|No Detectado)/)) {
                                                    formattedText += `<div class="row"><div class="label">${currentLabel}</div><div class="value">${text}</div></div>`;
                                                    currentLabel = "";
                                                } else {
                                                    if (currentLabel) {
                                                        formattedText += `<div class="row"><div class="label">${currentLabel}</div><div class="value"></div></div>`;
                                                    }
                                                    currentLabel = text;
                                                }
                                            });
                                            if (currentLabel) {
                                                formattedText += `<div class="row"><div class="label">${currentLabel}</div><div class="value"></div></div>`;
                                            }
                                            //console.log(formattedText); // Muestra el texto extraído del PDF en la consola para depuración

                                            // Pegar el texto directamente en la sección de ancestralidad
                                            document.getElementById('ancestry-content').innerHTML = formattedText;

                                            // Actualizar linaje y ADN Neandertal
                                            updateLineageAndNeanderthal(formattedText);
                                        });
                                    });
                                }).catch(function (error) {
                                    console.error('Error al cargar el PDF:', error);
                                });
                            } else {
                                console.error('PDF de ancestry no encontrado');
                            }
                        })
                        .catch(error => console.error('Error al obtener el PDF:', error));
                });

                function updateLineageAndNeanderthal(text) {
                    const lines = text.split('<div class="row">');
                    lines.forEach(line => {
                        if (line.includes('Haplogrupo Paterno')) {
                            const haploPaterno = line.split('</div><div class="value">')[1]?.trim().split('</div>')[0];
                            if (haploPaterno) {
                                document.getElementById('linaje-paterno').innerHTML = `<strong>Haplogrupo Paterno</strong>: ${haploPaterno}`;
                            }
                        }
                        if (line.includes('Haplogrupo Materno')) {
                            const haploMaterno = line.split('</div><div class="value">')[1]?.trim().split('</div>')[0];
                            if (haploMaterno) {
                                document.getElementById('linaje-materno').innerHTML = `<strong>Haplogrupo Materno</strong>: ${haploMaterno}`;
                            }
                        }
                        if (line.includes('ADN Neandertal')) {
                            const adnNeandertal = line.split('</div><div class="value">')[1]?.trim().split('</div>')[0];
                            if (adnNeandertal) {
                                document.getElementById('neandertal-adn').innerHTML = `<strong>ADN Neandertal</strong>: ${adnNeandertal}`;
                            }
                        }
                    });
                }

                // Palabras clave para farmacogenética




                //WELLNESS

                // Palabras clave para enfermedades de wellness
                const wellnessAbsentKeywords = [
                    "baja", "alta", "sin variaciones", "no observadas", "no se encontró", "riesgo bajo", "disminuída",
                    "Bajos", "mayor", "Bajo", "rápida", "Intolerante", "altos", "Percibir", "Ausencia"
                ];

                const wellnessPresentKeywords = [
                    "ligeramente menor", "tolerante", "Alta probabilidad de ser tolerante", "intolerancia a la histamina", "Densidad baja", "baja",
                    "deficiencia de DAO", "no se observan diferencias", "considerable", "elevado", "muy alto", "muy bajo", "exeso", "Predisposición a desarrollarla", "no precibir", "lenta", "deficiencia", "menor provavilidad", "Niveles altos", "Niveles bajos", "comer bajo", "Niveles bajos", "Niveles altos",
                    "altos", "Menor", "alto", "exceso", "bajos", "Niveles bajos", "Temprana", "Tardía", "Alta", "no percibir", "presencia", "aumento", "desarrollarla"
                ];

                const wellnessMediumKeywords = [
                    "medio", "medios", "igual", "media", "Media", "habitual"
                ];



                document.addEventListener('DOMContentLoaded', function () {
                    const urlParams = new URLSearchParams(window.location.search);
                    const id = urlParams.get('id');

                    fetch(`obtener_wellness_pdf.php?id=${id}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.error) {
                                console.error('Error del servidor:', data.error);
                                return;
                            }

                            const wellnessPdf = data.wellnessPdf;
                            if (wellnessPdf) {
                                processWellnessPdf(wellnessPdf);
                            } else {
                                console.error('PDF de wellness no encontrado');
                            }
                        })
                        .catch(error => console.error('Error al obtener el PDF:', error));
                });

                async function processWellnessPdf(pdfUrl) {
                    const loadingTask = pdfjsLib.getDocument(pdfUrl);
                    const pdf = await loadingTask.promise;
                    let wellnessResults = [];

                    let permite_escribir = false;
                    let datePattern = /^Resultado/;


                    for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                        const page = await pdf.getPage(pageNum);
                        const textContent = await page.getTextContent();
                        const textItems = textContent.items;
                        let currentWellness = "";
                        let currentStatus = "";
                        let currentKeyword = "";
                        let skipLine = false;

                        textItems.forEach(item => {
                            let text = item.str.trim();

                            if (datePattern.test(text)) {   //Si encontramos una linea que inicie con la palabra Resultado
                                permite_escribir = true;    //Seteamos la variable que nos indica que permite escribir las siguientes lineas
                                return;
                            }
                            if (!permite_escribir)  //Si no está permitido todavía, continuamos con la siguiente linea
                                return;

                            if (wellnessPresentKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(text.replace(/\s+/g, ' ')))) {
                                currentKeyword = text;
                                currentStatus = "Perjudicial";
                                if (currentWellness) {
                                    wellnessResults.push({ wellness: currentWellness, status: currentStatus, keyword: currentKeyword });
                                    currentWellness = "";
                                }
                            } else if (wellnessAbsentKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(text.replace(/\s+/g, ' ')))) {
                                currentKeyword = text;
                                currentStatus = "Beneficioso";
                                if (currentWellness) {
                                    wellnessResults.push({ wellness: currentWellness, status: currentStatus, keyword: currentKeyword });
                                    currentWellness = "";
                                }
                            } else if (wellnessMediumKeywords.some(keyword => new RegExp(`\\b${keyword}\\b`, 'i').test(text.replace(/\s+/g, ' ')))) {
                                currentKeyword = text;
                                currentStatus = "Medio";
                                if (currentWellness) {
                                    wellnessResults.push({ wellness: currentWellness, status: currentStatus, keyword: currentKeyword });
                                    currentWellness = "";
                                }
                            } else {
                                if (currentWellness) {
                                    currentWellness += " " + text;
                                } else {
                                    currentWellness = text;
                                }
                            }
                        });

                        if (currentWellness) {
                            wellnessResults.push({ wellness: currentWellness, status: currentStatus, keyword: currentKeyword });
                        }
                    }

                    // Ordenar los resultados por el grado de riesgo: alto, medio, bajo
                    wellnessResults.sort((a, b) => {
                        const riskOrder = { "Perjudicial": 1, "Medio": 2, "Beneficioso": 3 };
                        return riskOrder[a.status] - riskOrder[b.status];
                    });

                    updateWellnessTable(wellnessResults);
                }

                function updateWellnessTable(wellnessResults) {
                    const wellnessRows = document.getElementById('wellness-rows');
                    const highRiskWellness = document.getElementById('high-risk-wellness');
                    const mediumRiskWellness = document.getElementById('medium-risk-wellness');
                    const lowRiskWellness = document.getElementById('low-risk-wellness');

                    // Limpiar contenido previo
                    wellnessRows.innerHTML = '';
                    highRiskWellness.innerHTML = '';
                    mediumRiskWellness.innerHTML = '';
                    lowRiskWellness.innerHTML = '';

                    wellnessResults.forEach(result => {
                        const row = document.createElement('tr');

                        const cellWellness = document.createElement('td');
                        cellWellness.textContent = result.wellness;
                        row.appendChild(cellWellness);

                        // Comentado para ocultar la palabra clave
                        /*
                        const cellKeyword = document.createElement('td');
                        cellKeyword.textContent = result.keyword; // Mostrar la palabra clave
                        row.appendChild(cellKeyword);
                        */

                        const cellStatus = document.createElement('td');
                        if (result.status === "Perjudicial") {
                            cellStatus.innerHTML = '<i class="fas fa-times-circle" style="color: red;"></i>';
                            highRiskWellness.innerHTML += `${result.wellness}, `;
                        } else if (result.status === "Beneficioso") {
                            cellStatus.innerHTML = '<i class="fas fa-check-circle" style="color: green;"></i>';
                            lowRiskWellness.innerHTML += `${result.wellness}, `;
                        } else if (result.status === "Medio") {
                            cellStatus.innerHTML = '<i class="fas fa-exclamation-circle" style="color: orange;"></i>';
                            mediumRiskWellness.innerHTML += `${result.wellness}, `;
                        }
                        row.appendChild(cellStatus);

                        wellnessRows.appendChild(row);
                    });

                    highRiskWellness.innerHTML = highRiskWellness.innerHTML.slice(0, -2);
                    mediumRiskWellness.innerHTML = mediumRiskWellness.innerHTML.slice(0, -2);
                    lowRiskWellness.innerHTML = lowRiskWellness.innerHTML.slice(0, -2);
                }

                // Rellenar datos del cliente al inicio
                document.addEventListener('DOMContentLoaded', function () {
                    const urlParams = new URLSearchParams(window.location.search);
                    const id = urlParams.get('id');
                    if (!id) {
                        console.error("ID del cliente no proporcionado.");
                        return;
                    }

                    fetch(`obtener_cliente2.php?id=${id}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.error) {
                                console.error("Error desde el servidor:", data.error);
                                if (data.error_debug) {
                                    console.error("Debug:", data.error_debug);
                                }
                                return;
                            }

                            document.getElementById('nombre').textContent = data.nombre;
                            document.getElementById('edad').textContent = calcularEdad(data.fecha_nacimiento);
                            document.getElementById('tipo_muestra').textContent = data.tipo_muestra;
                            document.getElementById('sexo').textContent = data.sexo;
                            document.getElementById('fecha_nacimiento').textContent = data.fecha_nacimiento;
                            if (data.codigo_kit) {
                                document.getElementById('codigo_kit').textContent = data.codigo_kit;
                            } else {
                                console.warn("Campo codigo_kit no encontrado en los datos del cliente.");
                            }
                        })
                        .catch(error => console.error("Error al obtener los datos del cliente:", error));
                });

                function calcularEdad(fechaNacimiento) {
                    const hoy = new Date();
                    const fechaNac = new Date(fechaNacimiento);
                    let edad = hoy.getFullYear() - fechaNac.getFullYear();
                    const mes = hoy.getMonth() - fechaNac.getMonth();
                    if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNac.getDate())) {
                        edad--;
                    }
                    return `${edad} años`;
                }

                function checkOrientation() {
                    if (window.innerHeight > window.innerWidth) {
                        document.getElementById('orientationMessage').style.display = 'flex';
                    } else {
                        document.getElementById('orientationMessage').style.display = 'none';
                    }
                }

                window.addEventListener('resize', checkOrientation);
                window.addEventListener('load', checkOrientation);

                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({ pageLanguage: 'es', includedLanguages: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
                }

            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            <script type="text/javascript" src="js/rasgos.js?t=2"></script>
            <script type="text/javascript" src="js/monogenicas.js?t=2"></script>
            <script type="text/javascript" src="js/complejas.js?t=2"></script>
            <script type="text/javascript" src="js/farmacogenetica.js?t=3"></script>
            <script type="text/javascript" src="js/medical_report_functions.js?t=2"></script>
</body>
</html>