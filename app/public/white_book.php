
<?php
  session_start();  //Inicializar la sesión
  if (!isset($_SESSION['user_id'])) //Si no se h establecido la variable user_id en la sesión
    header("Location: index.php"); //redireccionar a index.php
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">  
    <link rel="icon" href="dc3.png" type="image/png">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>White Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap">
    <!-- Estilos para dispositivos móviles -->
    <link rel="stylesheet" href="estilo_informeM.css?v=1.9&_=${new Date().getTime()}" media="only screen and (max-width: 768px)">
    <!-- Estilos para pantallas de PC -->
    <link rel="stylesheet" href="estilo_informeM.css?v=1.9&_=${new Date().getTime()}" media="only screen and (min-width: 769px)">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    

    <!-- Metadatos Open Graph -->
    <meta property="og:title" content="YOU TOMORROW">
    <meta property="og:description" content="Ofrecemos un estudio en profundidad de las propiedades genéticas de nuestros participantes.">
    <meta property="og:image" content="https://drive.google.com/file/d/1ZZI3G6Fit_kovvVZolrvchtXQQDrnWYI/view?usp=sharing">
    <meta property="og:url" content="https://ytomorrow.com/">
    <meta property="og:type" content="website">

    <!-- Otros metadatos -->
    <meta name="description" content="Ofrecemos un estudio en profundidad de las propiedades genéticas de nuestros participantes.">
    <meta name="keywords" content="you, YOU TOMORROW, TOMORROW, TOMORR, TOM, web">

    <style>

      

   body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 17px;
    line-height: 1.4;
    margin: 20px;
    font-weight: 500; /* Grosor medio de la negrita */
    color: #4a4a4a; /* Gris oscuro elegante */
}


body {
    font-family: 'Roboto', sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f5f5f5;
    margin: 0;
    padding: 20px;
}


#botonIndice {
    position: fixed;
    top: 20px;
    right: 20px;
    color: #37853d;
    font-size: 2rem;
    cursor: pointer;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 0.3s ease, transform 0.3s ease; /* Agrega la transición para el zoom */
    user-select: none; /* Desactiva la selección de texto */
}

#botonIndice:hover {
    color: #37853d;
    transform: scale(1.1); /* Aplica un ligero zoom */
}


/* Estilo para el índice */
#indice {
    display: none; /* Oculto por defecto */
    position: fixed;
    top: 80px; /* Debajo del botón */
    right: 20px;
    background-color: #ffffff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 240px;
    max-height: 850px;
    overflow-y: auto;
    font-size: 0.95rem;
    z-index: 999;
    user-select: none; /* Desactiva la selección de texto */
}

#indice h3 {
    margin-top: 0;
    font-size: 1.2rem;
    color: #0073e6;
    border-bottom: 2px solid #0073e6;
    padding-bottom: 8px;
    user-select: none; /* Desactiva la selección de texto */
}

#indice ul {
    list-style-type: none;
    padding-left: 0;
    user-select: none; /* Desactiva la selección de texto */
}

#indice ul li {
    margin-bottom: 8px;
    position: relative;
    padding-left: 15px; /* Espacio para el punto decorativo */
    user-select: none; /* Desactiva la selección de texto */
}

#indice ul li::before {
    content: "•"; /* Punto decorativo */
    position: absolute;
    left: 0;
    top: 0;
    font-size: 1.2rem;
    color: #0073e6;
    line-height: 1;
    user-select: none; /* Desactiva la selección de texto */
}

#indice ul li a {
    text-decoration: none;
    color: #0073e6;
    font-weight: 500;
    transition: color 0.3s ease;
    user-select: none; /* Desactiva la selección de texto */
}

#indice ul li a:hover {
    color: #005bb5;
    
}

h1, h2, h3 {
    margin-top: 50px;
    color: #444;
    user-select: none; /* Desactiva la selección de texto */
}

h1 {
    font-size: 2rem;
    border-bottom: 2px solid #ddd;
    padding-bottom: 10px;
    margin-bottom: 30px;
    user-select: none; /* Desactiva la selección de texto */
}

h2 {
    font-size: 1.6rem;
    border-bottom: 1px solid #ddd;
    padding-bottom: 8px;
    margin-bottom: 20px;
    user-select: none; /* Desactiva la selección de texto */
}

h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
    user-select: none; /* Desactiva la selección de texto */
}










h1, h2, h3 {
    color: #4a4a4a; /* Gris oscuro elegante */
}


ul {
    user-select: none; /* Desactiva la selección de texto */
}


h1 {
    font-size: 24px;
    user-select: none; /* Desactiva la selección de texto */
}

h2 {
    font-size: 20px;
    user-select: none; /* Desactiva la selección de texto */
}

h3 {
    font-size: 18px;
    user-select: none; /* Desactiva la selección de texto */
}

p {
    margin-bottom: 12px;
    font-size: 18px;
    color: #4a4a4a; /* Gris oscuro elegante */
    user-select: none; /* Desactiva la selección de texto */
}

.section {
    margin-bottom: 30px;
    color: #4a4a4a; /* Gris oscuro elegante */
    user-select: none; /* Desactiva la selección de texto */
}

.chart-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    width: 100%;
    user-select: none; /* Desactiva la selección de texto */
    
}

.chart-row {
    display: flex;
    justify-content: center;
    margin: 10px 0;
    width: 50%; /* Ajusta el ancho para que se adapte al contenido */
    user-select: none; /* Desactiva la selección de texto */
}

.chart-box {
    background: linear-gradient(135deg, #42a5f5, #1e88e5);
    padding: 10px 20px;
    margin: 0 5px;
    border-radius: 12px;
    text-align: center;
    font-size: 18px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
    position: relative;
    overflow: hidden;
    min-width: 150px; /* Asegura que las tarjetas tengan un ancho mínimo */
    max-width: 300px; /* Limita el ancho máximo para tarjetas largas */
    word-wrap: break-word; /* Permite que el texto se ajuste dentro de la tarjeta */
    flex: 1; /* Permite que las tarjetas se expandan uniformemente */
    user-select: none; /* Desactiva la selección de texto */
}

.chart-box:hover {
    transform: scale(1.05);
    user-select: none; /* Desactiva la selección de texto */
}

.chart-box.ceo {
    background: linear-gradient(135deg, #ff6f61, #e53935);
    font-weight: bold;
    font-size: 22px;
    user-select: none; /* Desactiva la selección de texto */
}

.chart-box::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: rgba(255, 255, 255, 0.1);
    opacity: 0;
    transition: opacity 0.3s ease;
    transform: rotate(45deg);
    user-select: none; /* Desactiva la selección de texto */
}

.chart-box:hover::before {
    opacity: 1;

}

.chart-box.ceo::before {
    background: rgba(255, 255, 255, 0.2);
}

.connector {
    width: 2px;
    height: 20px;
    background-color: #1b3a7a;
    margin: 0 auto;
    user-select: none; /* Desactiva la selección de texto */
}

.horizontal-connector {
    height: 2px;
    width: 100%;
    background-color: #1b3a7a;
}

.horizontal-connector.long {
    width: 50%;
}

.chart-box i {
    margin-right: 8px;
    font-size: 20px;
    color: rgba(255, 255, 255, 0.8);
    user-select: none; /* Desactiva la selección de texto */
}


table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    user-select: none; /* Desactiva la selección de texto */
  }
  
  table, th, td {
    border: 1px solid #ddd;
    user-select: none; /* Desactiva la selección de texto */
  }

  th, td {
    padding: 12px;
    text-align: center;
    user-select: none; /* Desactiva la selección de texto */
  }

  th {
    background-color: #1b5e20;
    color: #1b5e20;
    font-weight: bold;
    user-select: none; /* Desactiva la selección de texto */
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
    user-select: none; /* Desactiva la selección de texto */
  }

  tr:hover {
    background-color: #ddd;
    user-select: none; /* Desactiva la selección de texto */
  }

  caption {
    caption-side: top;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    user-select: none; /* Desactiva la selección de texto */
  }

    </style>

</head>
<body>

  
  
  
<div class="container">
            
            
             


  <div id="botonIndice"><i class="fas fa-book"></i></div> <!-- Icono de libreta de notas -->
    <div id="indice">
        <h3>Índice</h3>
        <ul id="listaIndice"></ul>
    </div>



<div id="google_translate_element"></div>
                <div style="display: flex; align-items: center; margin-left: auto;">
                    </button>    
            </div>  

  <!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/PPG.png" alt="Imagen representativa" style="width: 100%; height: auto; border-radius: 8px;">
  </div>

    
    <div class="results" style="font-size: 16px; line-height: 1.8; padding: 30px; background-color: #ffffff; border-radius: 15px; box-shadow: 0 6px 12px rgba(0,0,0,0.2);">

    <h2 style="font-size: 42px; color: #1b5e20; text-align: center; border-bottom: 3px solid #1b5e20; padding-bottom: 15px; margin-bottom: 30px;">
        <i class="fas fa-book-open" style="margin-right: 12px; color: #1b5e20;"></i> WHITE BOOK
    </h2>
      
    <!-- Resumen Ejecutivo -->
    <h2 style="font-size: 26px; color: #1b5e20; border-bottom: 2px solid #1b5e20; padding-bottom: 10px; margin-bottom: 25px;">
        <i class="fas fa-briefcase" style="margin-right: 12px; color: #1b5e20;"></i> 1. Resumen Ejecutivo
    </h2>

    <p style="margin-bottom: 20px; text-align: justify;">
        “PPG NUTRITIONAL” opera como una entidad global con una estructura corporativa estratégica diseñada para optimizar nuestra presencia en mercados clave. Hemos establecido cuatro empresas en los Estados Unidos, dos de las cuales operan bajo la marca PPG. Estas empresas con sede en los Estados Unidos son fundamentales para nuestras operaciones, aprovechando el fuerte potencial de mercado y la base de consumidores dentro del país.
Además, estas entidades estadounidenses están estructuradas bajo el paraguas de nuestra empresa “offshore”, “PPG PANAMÁ”, que sirve como centro neurálgico para nuestras operaciones internacionales. La decisión de establecer “PPG PANAMÁ”como nuestra sociedad holding “offshore” fue impulsada por consideraciones estratégicas, que incluyen la eficiencia fiscal, los beneficios regulatorios y la facilitación de actividades comerciales transfronterizas. Esta estructura “offshore” nos permite administrar de manera efectiva nuestros activos globales, propiedad intelectual y recursos financieros, al mismo tiempo que mantenemos el cumplimiento de las regulaciones internacionales.
Nuestra entidad “offshore” en Panamá no solo respalda nuestras operaciones en los Estados Unidos, sino que también mejora nuestra capacidad de expandirnos a nuevos mercados y capitalizar las oportunidades emergentes en el panorama global. Al centralizar nuestras actividades internacionales a través de “PPG PANAMÁ”, garantizamos que nuestro negocio siga siendo ágil, competitivo y bien posicionado para un crecimiento sostenido. 
En el caso de “PPG NUTRITIONAL” (<a href="http://www.ppgnutritional.com" target="_blank" style="color: #1b5e20; text-decoration: none;">www.ppgnutritional.com</a>) es una compañía con sede en Miami, Florida, USA, especializada en la gestión e innovación de medicamentos de patentes, nuevos productos terapéuticos y nutricionales inteligentes. Nuestros productos están diseñados para prevenir, controlar, tratar y curar enfermedades, síndromes y trastornos, así como para revertir el proceso de envejecimiento, al mismo tiempo que mejoran el rendimiento físico y mental de las personas mientras se aumenta la expectativa de vida con calidad con calidad hasta límites impredecibles.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Contamos con un equipo de más de 50 doctores en ciencias con 35 años de experiencia en la gestión, innovación tecnológica y el desarrollo de sistemas de inteligencia medicinal, nuevas tecnologías, procedimientos, procesos y flujos de procesos, diseños de laboratorios, diseño de protocolos de ensayos biológicos, diseños, optimización, certificación y registros de productos terapéuticos y alimenticios, entre otros soportados en marcas y patentes que garantizan un fuerte posicionamiento de estas marcas y patentes fundamentadas en las investigaciones de alto rendimiento basadas en los principios de genómica, proteómica, biología evolutiva, química espacial e inteligencia artificial, entre otros campos.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        A través de estos esfuerzos, hemos identificado y desarrollado estrategias para aplicar procedimientos y gamas de productos inteligentes con efectos antienvejecimiento, reguladores del metabolismo, antiinflamatorios y antimicrobianos, reparación del sistema nervioso, propiedades anticancerígenas, acciones nutricionales inteligentes, efectos analgésicos, moduladores del sistema inmune, restauradores del microbioma, moduladores de la estabilidad genómica y restauradores de cartílagos, músculos y huesos, entre otros que son la garantía de la longevidad y bienestar.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Contamos con gamas de productos alimenticios, nutricionales y terapéuticos en nuestro catálogo que son el resultado de ingeniosas combinaciones de ingredientes activos naturales, vitaminas, minerales, aminoácidos, ácidos grasos, células troncales de plantas, y otros compuestos que, usando tecnologías patentadas exclusivas, tienen la capacidad de distribuir estos ingredientes a tejidos y órganos específicos para en estos sitios modular mecanismos biológicos, rutas metabólicas y procesos biológicos cruciales para estabilizar el genoma, alargar los telómeros, mejorar la señalización intracelular, promover la síntesis de células madre y mejorar el microbioma; que son factores claves para aplicar y consolidar la "Medicina Integrativa de Precisión Personalizada," orientada a encontrar soluciones innovadoras para prevenir, controlar, tratar y curar enfermedades, síndromes, alteraciones y mejorar la calidad de vida de las personas con la reversión o retardo del proceso de envejecimiento.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Actualmente, nuestra compañía cuenta con una cartera de alrededor de cerca de 450 productos en las categorías de suplementos nutricionales, nutracéuticos, adyuvantes de medicamentos, cosméticos, cosmecéuticos y otros que están listos para producción y comercialización utilizando un diseño eficiente para generar una estrategia de marketing que consolide la venta de los productos terapéuticos y nutricionales “inteligentes”, hasta que pasemos a la fase de desarrollo y registro de medicamentos para el tratamiento del cáncer, enfermedades degenerativas y autoinmunes, muy a pesar de que nuestros suplementos nutricionales, adyuvantes y otros son altamente eficaces y de baja toxicidad demostrado en ensayos preclínicos y clínicos.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Nuestra presencia comercial abarca Estados Unidos y México, donde ya tenemos contratos firmados con socios que nos permiten producir, almacenar y distribuir en cientos de miles de puntos de venta, incluidos farmacias, supermercados, tiendas de autoservicio, tiendas "online" como Amazon y Mercado Libre. En el futuro inmediato, planeamos expandirnos a Argentina, Paraguay, Uruguay, Chile, Brasil, República Dominicana y Colombia, donde ya estamos en negociaciones tanto con el sector privado como con gobiernos. También tenemos contratos firmados con Mercado Libre para abrir una tienda electrónica con nuestros productos en esa plataforma que es la más importante para ventas en América Latina.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Nuestra estrategia de innovación tecnológica se centra en transformar la industria alimentaria y farmacéutica hacia la generación de gamas de productos “inteligentes” que se diferencia de lo convencional. Nos enfocamos en mejorar las cualidades nutricionales de los 10 alimentos procesados más vendidos, con un valor de mercado actual de $798 mil millones. Con nuestras tecnologías, podemos reimaginar estos productos para hacerlos verdaderamente nutritivos y saludables.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Proyectamos que, en los próximos tres a cinco años, "PPG NUTRITIONAL" con un financiamiento adecuado, junto a nuestros socios, podríamos ocupar un segmento de mercado valorado en aproximadamente $190 mil millones, incluso en un escenario pesimista. Esta proyección incluye nuestra estrategia (ya en marcha) de inserción en redes de supermercados, farmacias, ventas multinivel y plataformas "online" con una gama de cerca de 350 productos adyuvantes, cosmecéuticos y complementos nutricionales. La combinación de un extenso portafolio de productos, una red de distribución sólida, un equipo científico de primer nivel y una inversión sustancial en tecnología avanzada durante más de 30 años, nos coloca en una posición privilegiada para liderar el mercado de suplementos nutricionales inteligentes y alimentos inteligentes.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Estos productos están diseñados para transformar la salud y el bienestar de los consumidores a nivel global, abriendo nuevas oportunidades de mercado y asegurando un crecimiento sostenible. Hemos llegado a este punto a través de un proceso largo que involucra el desarrollo de capital humano, tecnologías, investigación, desarrollo, formulación, certificación de calidad, y evaluación preclínica y clínica, entre otros, que a lo largo de las décadas, estas inversiones superan los $2.275 mil millones al valor actual.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        PPG NUTRITIONAL se afana en encontrar financiamiento adecuado para incrementar la inversión en producción, mercadeo, ventas y en Investigación y Desarrollo (I+D). Este aumento en la inversión permitirá expandir nuestras capacidades de investigación, contratar talento científico de alto nivel, y mejorar nuestras instalaciones y tecnologías, asegurando que cada nuevo producto cumpla con los más altos estándares de calidad y eficacia.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Justamente, en este contexto y basados en estos argumentos invitamos a posibles socios a considerar esta oportunidad de inversión en una empresa que ha demostrado consistentemente su éxito y que está posicionada para pasar en breve a liderar el futuro de los suplementos nutricionales y alimentos inteligentes a nivel mundial, que sin duda reemplazarán a los medicamentos y otros productos sintéticos.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        En otras palabras, nuestro enfoque en Áreas de Investigaciones claves no solo representa las fortalezas actuales de PPG NUTRITIONAL, sino también nuestra visión para el futuro. Al integrar biotecnología vegetal, genómica, medicina regenerativa, nutrición personalizada, inteligencia artificial, y tecnologías avanzadas de producción de suplementos nutricionales inteligentes, alimentos inteligentes, adyuvantes inteligentes y otros productos terapéuticos estamos posicionados para liderar la próxima generación de innovaciones en salud y longevidad.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Invertir en “PPG NUTRITIONAL” es invertir en el futuro de la salud y nutrición global, en soluciones que prolongan la vida y mejoran su calidad de manera tangible y significativa.
    </p>



    <!-- Misión -->
    <h2 style="font-size: 24px; color: #333; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
        <i class="fas fa-bullseye" style="margin-right: 10px; color: #c62828;"></i>2. Misión
    </h2>
    <p style="margin-bottom: 20px; text-align: justify;">
        "Elaboramos productos terapéuticos y alimentos inteligentes para prevenir, controlar, tratar y revertir enfermedades, síndromes, alteraciones y el proceso de envejecimiento, prolongando la vida con calidad de las personas hasta límites insospechados. Esta revelación singular nos mantiene jóvenes, genera emociones y alimenta la leyenda de la fuente de la juventud eterna, amor, bienestar y paz, hasta convertirnos en líderes mundiales en desarrollo, producción y ventas de estas gamas de productos."
    </p>

    <!-- Visión -->
    <h2 style="font-size: 24px; color: #333;  border-bottom: 2px solid #ef6c00; padding-bottom: 10px;">
        <i class="fas fa-eye" style="margin-right: 10px; color: #ef6c00;"></i>3. Visión
    </h2>
    <p style="margin-bottom: 20px; text-align: justify;">
        "Perfeccionamos la elaboración de gamas de formulados saludables, inteligentes y antienvejecimiento que nos enaltecen con sus acciones para prevenir, controlar, tratar y revertir enfermedades, síndromes y alteraciones, con la intención de ser líderes mundiales en este sector."
    </p>

    <!-- Resumen de la Propuesta de Valor -->
    <h2 style="font-size: 24px; color: #333;  border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
        <i class="fas fa-gem" style="margin-right: 10px; color: #1b5e20;"></i>4. Resumen de la Propuesta de Valor
    </h2>
    <p style="margin-bottom: 20px; text-align: justify;">
        "Nuestra compañía ofrece suplementos nutricionales “inteligentes” y alimentos procesados “inteligentes” patentados que están respaldados por décadas de investigación científica, diseñados para prevenir, controlar, tratar o revertir síndromes, alteraciones o enfermedades que mejoran la salud y el bienestar con una prolongación de la vida de todas las personas con fórmulas personalizadas que superan en eficacia y seguridad a las alternativas genéricas disponibles en el mercado." Este resumen de propuesta de valor destaca la ventaja competitiva de nuestra gama de productos elaborados basados ​​en sustentos científicos fundamentados en los principios de genómica, proteómica, biología evolutiva, química espacial e inteligencia artificial, entre otros.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Las gamas de productos de “PPG NUTRITIONAL” tienen la premisa fundamental de un soporte científico histórico durante la realización de investigaciones, desarrollo de patentes, tecnologías, procedimientos, ensayos preclínicos con modelos biológicos respetando el bienestar de los animales, ensayos clínicos y otras pruebas especiales con soporte en:
    </p>



    <!-- Diagnóstico de Precisión -->
    <h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
        4.1. Diagnóstico de Precisión Basado en Polimorfismo Genético
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Nuestro diagnóstico de precisión permite:
    </p>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20;">
        <li>Realizar un diagnóstico preciso y precoz de alrededor de 150 enfermedades y 1084 síndromes y trastornos.</li>
        <li>Seleccionar medicamentos en las dosis y frecuencias que cada persona individual merece.</li>
        <li>Distinguir qué alimentos, vitaminas, minerales, principios activos naturales y otras sustancias que cada persona puede consumir de forma personalizada sin causar daño.</li>
        <li>Seleccionar desde la infancia los deportes que cada uno podría practicar y la mejor forma de entrenar sin lesiones, mejorando las capacidades físicas hasta un 30% más.</li>
        <li>Utilizar terapias epigenéticas personalizadas para revertir el proceso de envejecimiento y prevenir enfermedades, síndromes y alteraciones.</li>
    </ul>

    <!-- Investigación y Desarrollo -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    4.2. Investigación y Desarrollo
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Las investigaciones y el desarrollo de productos terapéuticos se basan en un riguroso proceso que inicia con ensayos preclínicos en modelos biológicos para evaluar la seguridad y eficacia de los compuestos antes de su uso en humanos. Una vez que los ensayos preclínicos hayan sido satisfactorios, se procede a los ensayos clínicos, donde se evalúa la eficacia y seguridad en humanos. Además, utilizamos tecnologías avanzadas como biotecnología e inteligencia artificial para optimizar la investigación y personalizar los tratamientos según las características genéticas de los pacientes.
</p>

<!-- Uso de la Biotecnología -->
<h3 style="font-size: 22px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;">
    4.4. Uso de la Biotecnología para la Obtención de Principios Activos Orgánicos
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Hemos desarrollado una tecnología para la obtención de biomasa rica en células troncales vegetales, que permite aumentar 10 veces la producción en biomasa en solo 3 semanas. Esta tecnología supera la capacidad natural de producción, proporcionando biomasas de alto valor nutricional y terapéutico en un espacio reducido y en tiempos cortos.
</p>

<!-- Estrategia de Uso de Células Troncales -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    4.5. Estrategia de Uso de Células Troncales en la Medicina Regenerativa
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Nuestra estrategia en medicina regenerativa se centra en el uso de células troncales de plantas para estimular la producción de células madre y mejorar la salud. Nuestras investigaciones están enfocadas en la restauración, renovación y revitalización de órganos y tejidos, incluyendo vasos sanguíneos, huesos, ligamentos, articulaciones y tejido neuronal. Implementamos terapias de reemplazo de microbiomas para ofrecer soluciones integrales que no solo previenen y tratan enfermedades, sino que también promueven una vida más saludable y longeva.
</p>

<!-- Estrategia de Uso de Células Troncales -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    4.6. Profesionales:
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
 El proyecto ha sido concebido desde hace casi 40 años por un grupo de científicos (50 Doctores en Ciencias) y médicos especialistas de todas las ramas de las ciencias médicas que cuentan con la experiencia y competencia profesional necesaria para hacerlo viable, sostenible y perdurables estas acciones. A tenor con lo anterior se tienen posibilidades y potencialidades para obtener variedades de células troncales de plantas específicas con las que es viable obtener una amplia variedad de cosmecéuticos y nutraceúticos que superan los 450 productos. Definitivamente, como resultado de lo antes expuesto, las gamas de productos de “PPG NUTRITIONAL” mejoran la calidad de vida de pacientes, consumidores y población en general porque obtienen beneficios directos como en los casos de:
</p>

 <!-- Estrategia de Uso de Células Troncales -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    4.6.1 Nueva gama de productos “PPG PLUS”
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
Esta línea de productos es una innovación en la forma de prevenir y controlar los trastornos del colesterol, acorde con la condición de salud que padece cada persona en particular. Las 14 composiciones farmacéuticas presentadas bajo la marca registrada “PPG PLUS” tienen sus antecedentes en el producto terapéutico “PPG” que se comercializa en más de 50 países, desde hace casi 40 años, con ventas anuales de más de mil 500 millones de dólares. Nuestra empresa “PPG NUTRITIONAL” visualizó esta oportunidad y registró la marca “PPG PLUS” en Estados Unidos, patentando una línea de 14 composiciones farmacéuticas con muy altos niveles de ventas estimados; porque está científicamente comprobado que los trastornos del colesterol y los triglicéridos deben tratarse de manera diferente en cada paciente. No es lo mismo controlar y tratar el colesterol en un paciente hipertenso que en otro con insuficiencia cardiaca, diabetes, etc. Los principales fármacos competidores de la línea “PPG PLUS” son las estatinas, de las que se han vendido 100 mil millones de dólares desde 1997 hasta la fecha. Pero lo más importante es que la gama de productos “PPG PLUS” no contradice el uso de estatinas. Más allá de eso, se ha demostrado que complementa las acciones de esta familia de medicamentos. Tomando como referencia estas cifras, podemos augurar para la línea “PPG PLUS” niveles de ventas importantes debido a que se trata de productos muy eficaces para el control del colesterol, antiagregantes plaquetarios, potenciadores sexuales masculinos y femeninos, antiinflamatorios y antienvejecimiento, entre otros. otros, con el plus de ser formulaciones naturales de baja toxicidad y alta efectividad demostrada durante más de 35 años, lo que los hace preferidos por pacientes hispanos, latinos, asiáticos y europeos, por lo que estamos dispuestos a insertarla con éxito en el mercado de estados unidos.
</p>

 <!-- Estrategia de Uso de Células Troncales -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    4.6.2 “Adyuvantes”, un nuevo concepto de producto terapéutico.
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
Esta línea de productos es una “nueva manera” de eliminar efectos adversos y el desarrollo de enfermedades, síndromes y alteraciones asociadas al uso de medicamentos de largo plazo para el control de enfermedades crónicas, mientras aumenta la eficacia de estos medicamentos. El sustento de esta gama de productos está en que, los efectos secundarios y reacciones tóxicas de los fármacos son la causa del 15% de las muertes prematuras en episodios agudos, provocando millones de muertes anualmente. Sin embargo, nadie se da cuenta de que años de uso continuo de medicamentos utilizados para controlar y tratar la presión arterial alta, la diabetes, la artritis, la osteoartritis, la obesidad, las enfermedades cardiovasculares y cerebrovasculares, la demencia, el Alzheimer y cientos de otras enfermedades, trastornos y síndromes en el corto plazo, a mediano y largo plazo causan más daño que bien a los pacientes que están manejando sus condiciones de salud. El uso constante de medicamentos para el control y tratamiento de enfermedades, síndromes y trastornos desarrolla otros trastornos, síndromes y enfermedades que suelen ser más mortales y reducen la calidad de vida que la propia enfermedad para la que el medicamento ha sido indicado por el médico. Afortunadamente, los científicos de “ PPG Nutritional”  han utilizado métodos empáticos de inteligencia artificial, genómica y proteómica para investigar cómo contrarrestar los efectos adversos y tóxicos de los medicamentos y fármacos utilizados para controlar y tratar estas afecciones, potenciando al mismo tiempo sus acciones farmacológicas y terapéuticas. La línea de adyuvantes desarrollada por PPG está enfocada a reducir y eliminar los efectos secundarios de cada uno de los medicamentos utilizados por los pacientes para controlar o tratar enfermedades crónicas como artritis, artrosis, Alzheimer, Cáncer, Diabetes, Hipertensión. , Esclerosis Múltiple, Obesidad, Demencia, Enfermedades Cardio y Cerebrovasculares, Parkinson, Leucemias, Linfomas, Lupus, Ansiedad, Migraña, entre otras como se muestra en estos ejemplos a continuación, en los cuales solo se ilustrarán dos (3) de los 350 adyuvantes que ofrecemos. para contrarrestar los efectos adversos y el desarrollo de enfermedades se han desarrollado igual número (350) de medicamentos utilizados para el control y prevención de enfermedades crónicas no transmisibles; y también para mejorar las acciones farmacológicas y terapéuticas de estos mismos fármacos.
</p>

 <!-- Estrategia de Uso de Células Troncales -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    4.6.3 DEEP BLOCK
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
Este es un producto innovador con la capacidad de controlar de alergias, amigdalitis e infecciones de garganta y vías respiratorias ocasionadas por virus y bacterias que penetran por las vías oral, nasal y oftálmica. Un análisis de mercado de productos con acciones y finalidades similares, a “DEEP BLOCK” , reveló que no existen presentaciones en forma de "SPRAY BUCAL", ni en cualquier otra presentación, en los anaqueles de las farmacias de EE.UU. y América Latina, respaldado por ensayos preclínicos y clínicos. La mezcla de ingredientes completamente naturales que componen “DEEP BLOCK” han demostrado gran efectividad para controlar el ingreso de bacterias y virus como la influenza, rinovirus, los virus que causan el Covid-19 y otros que tienen puntos de entrada por la nariz, ojos, y boca para controlar infecciones pulmonares, infecciones de garganta, amigdalitis, gingivitis, alergias por ácaros y procesos gripales, entre otras infecciones. Estas acciones y propiedades beneficiosas auguran que este producto permanecerá en el mercado al menos 25 años con altos niveles de ventas durante todo el año con picos de aumento de ventas en invierno, otoño y en épocas de epidemias o pandemias provocadas por virus o bacterias que pueden aparecer. Todos los efectos, previamente descritos para “DEEP BLOCK” han sido demostrados en la práctica clínica diaria durante la pandemia de Covid-19 y en el control de los efectos postpandemia en pruebas preclínicas en animales y en ensayos clínicos en humanos que hemos publicado. “DEEP BLOCK” se comercializa con éxito desde mediados de 2020 como un producto eficaz para el control de la pandemia Covid-19, y con eficacia demostrada en el control del desarrollo, progresión y minimización de las muertes provocadas por la infección en todas sus variantes y mutaciones. del virus covid-19, así como el control de los síndromes inflamatorios postpandémicos que tan alta incidencia están mostrando, aún hoy. Los principales competidores de “DEEP BLOCK” son Taylenol Cold+Flu Severe, NyQuil &Flu, Mucinex Fast-Max Cold, Alka-Seltezer Cold, Ginger Tea, Honey y Advil Multi-Symptom Cold &Flu con un valor de mercado de 6,4 mil millones de dólares al año. Sin embargo, estos productos tienen limitaciones al compararlos con “DEEP BLOCK”, que lo convirtió durante 5 meses en el producto más vendido en la cadena de farmacias más importante de México entre todos los medicamentos y suplementos. Actualmente cuenta con importantes valores de ventas en “AMAZON”, “MERCADO LIBRE”, “tiendas online”, redes multinivel y otros nichos de mercado que demuestran la viabilidad de introducir este producto en farmacias estadounidenses, México, Brasil, Europa y otros países.
</p>

<!-- Estrategia de Uso de Células Troncales -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
   <i class="fas fa-bullseye" style="color: #c62828; margin-right: 8px;"></i>5. OBJETIVOS ESTRATÉGICOS
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
Los objetivos estratégicos y metas a largo plazo de “PPG NUTRITIONAL” están enfocados a concretar nuestra visión de ser líderes en el sector de la nutrición y suplementación personalizada saludable, sino que también están diseñados para responder a las necesidades cambiantes de nuestros consumidores y del mercado. Al enfocarnos en la innovación, gestión de tecnologías, establecimiento de nuevos procesos, desarrollo, formulación, certificación y producciones sostenibles, nos proponemos desarrollar productos terapéuticos y alimentos inteligentes que mejoren la salud y la calidad de vida de las personas, basados en estos sólidos soportes científicos y en tecnológicos  avanzadas. A través de la implementación de nuestros objetivos estratégicos, buscamos fomentar un enfoque integral que combine el conocimiento científico, la experiencia en el desarrollo de productos y la colaboración con instituciones de investigación, productores, distribuidores y el cliente final. Esto nos permitirá no solo cumplir con nuestras metas comerciales, sino también contribuir al avance de la medicina personalizada y al bienestar de la sociedad en su conjunto hasta prolongar la vida con calidad de todas las personas. En un mundo donde la salud y la nutrición son cada vez más relevantes, PPG NUTRITIONAL se compromete a liderar el camino hacia un futuro más saludable y sostenible, alineando nuestros esfuerzos con las expectativas y demandas de nuestros clientes y socios estratégicos.
</p>

<!-- Desarrollo de Productos -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  A). Desarrollo de Productos en “PPG NUTRITIONAL”
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Meta:</strong> “PPG NUTRITIONAL” se ha propuesto desarrollar y lanzar al mercado cerca de 450 nuevos suplementos nutricionales y alimentos, en ambos casos enmarcados en la categoría de “inteligentes” bajo patentes en los próximos años. Esta meta refleja nuestro compromiso con la innovación constante y nuestra visión de proporcionar soluciones nutricionales y terapéuticas avanzadas que respondan a las necesidades emergentes de nuestros consumidores.
</p>

<!-- Estrategia de Desarrollo -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Estrategia de Desarrollo
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Para alcanzar esta ambiciosa meta, implementaremos un enfoque multidisciplinario que combine la investigación científica de vanguardia, la biotecnología vegetal, y el análisis de polimorfismos genéticos. Estos se articularán con la aplicación de los adelantos más relevantes en genómica, proteómica, química especial, biología evolutiva e inteligencia artificial.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  El desarrollo de estos nuevos productos se basará en el uso de “carryxomas”, una tecnología patentada que forma parte de las últimas investigaciones en nutrición y terapéutica personalizada. Esto nos permitirá formular suplementos nutricionales y alimentos inteligentes que optimicen la salud de manera específica y efectiva.
</p>

<!-- Objetivo -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Objetivo
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <span style="color: #000; font-weight: bold;">“PPG NUTRITIONAL”</span> busca acelerar el desarrollo de productos innovadores, asegurando que estos nuevos suplementos y alimentos inteligentes lleguen al mercado de manera oportuna. Para lograrlo, nos enfocaremos en incrementar la inversión en producción, mercadeo, ventas y en Investigación y Desarrollo (I+D) en un 4% anual.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Este aumento en la inversión permitirá expandir nuestras capacidades de investigación, contratar talento científico de alto nivel, mejorar nuestras instalaciones y superar las tecnologías y expectativas de producción de nuevas gamas de productos. Así, garantizaremos que cada nuevo producto cumpla con los más altos estándares de calidad y eficacia.
</p>

<!-- Plan de Acción -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Plan de Acción
</h3>
<ul style="margin-bottom: 18px; text-align: justify; list-style-type: disc; padding-left: 20px;">
  <li><strong>Ampliación de Infraestructura I+D:</strong> Modernizaremos las tecnologías de desarrollo y expandiremos nuestros contratos de producción. Accederemos a instalaciones de investigación y equipamiento con tecnología de última generación para optimizar cada etapa del desarrollo de productos, desde la formulación hasta la producción en masa.</li>
  <li><strong>Colaboraciones Estratégicas:</strong> Estableceremos y fortaleceremos alianzas con universidades, centros de investigación y otras empresas del sector. Esto nos permitirá acceder a nuevos conocimientos, técnicas avanzadas y recursos adicionales que acelerarán el proceso de innovación.</li>
  <li><strong>Aumento de Capacidades y Competencia Científicas:</strong> Invertiremos en la formación y el desarrollo profesional continuo de nuestro equipo científico, asegurando que estén a la vanguardia en biotecnología, genética y nutrición.</li>
</ul>

<!-- Impacto Esperado -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Impacto Esperado
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Con la implementación de este plan estratégico, <span style="color: #000; font-weight: bold;">PPG NUTRITIONAL</span> no solo aumentará su portafolio de productos, sino que también fortalecerá su posición como líder en el mercado de suplementos nutricionales innovadores.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  El resultado será una gama de productos que no solo cumplen, sino que superan las expectativas de nuestros clientes, ofreciendo soluciones personalizadas que mejoran la salud y el bienestar de manera tangible.
</p>

<!-- Expansión de la Propiedad Intelectual -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  B). Expansión de la Propiedad Intelectual
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Meta:</strong> Aumentar el portafolio de patentes en un 20% en los próximos 3 años.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Objetivo:</strong> Identificar y proteger al menos 10 nuevas tecnologías con potencial de comercialización en mercados clave.
</p>

<!-- Crecimiento de Mercado y Alcance Global -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  C). Crecimiento de Mercado y Alcance Global
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Meta:</strong> Expandir la presencia en mercados internacionales clave, alcanzando una participación de mercado del 15% en América Latina y Asia en 5 años.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Objetivo:</strong> Establecer alianzas estratégicas con distribuidores y socios locales en al menos 5 nuevos países.
</p>

<!-- Excelencia Operacional -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  D). Excelencia Operacional
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Meta:</strong> Mejorar la eficiencia en la cadena de suministro y la producción para reducir los costos operativos en un 10% en los próximos 2 años.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Objetivo:</strong> Implementar tecnologías de automatización en las plantas de producción y mejorar la gestión de inventarios.
</p>

<!-- Fortalecimiento de la Relación con Socios y Clientes -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  E). Fortalecimiento de la Relación con Socios y Clientes
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Meta:</strong> Incrementar la satisfacción del cliente en un 25% en 3 años, medido a través de encuestas y KPI específicos.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Objetivo:</strong> Desarrollar programas de fidelización y soporte técnico avanzado para socios comerciales y clientes.
</p>

<!-- Sostenibilidad y Responsabilidad Social -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  F). Sostenibilidad y Responsabilidad Social
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Meta:</strong> Lograr la certificación de sostenibilidad para todas las operaciones de la empresa dentro de 4 años.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Objetivo:</strong> Implementar prácticas sostenibles en la cadena de suministro y desarrollar productos ecológicos que reduzcan el impacto ambiental.
</p>

<!-- Fortalecimiento del Capital Humano -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  G). Fortalecimiento del Capital Humano
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Meta:</strong> Atraer y retener talento de clase mundial en investigación y desarrollo, aumentando la retención de empleados clave en un 30% en 3 años.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Objetivo:</strong> Establecer programas de formación continua y desarrollo profesional para todos los niveles de la empresa.
</p>

<!-- Monetización y Comercialización de Tecnologías -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  H). Monetización y Comercialización de Tecnologías
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Meta:</strong> Licenciar al menos 50% de las nuevas patentes en los próximos 5 años.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Objetivo:</strong> Crear un equipo especializado en la comercialización de propiedad intelectual y establecer acuerdos con empresas multinacionales del sector.
</p>




<!-- Historia -->
<h3 style="font-size: 24px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;" >
  <i class="fas fa-book" style="color: #ef6c00; margin-right: 8px;"></i>Historia:
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <span style="color: #000;">“PPG NUTRITIONAL”</span> tiene una historia singular porque, aunque fue fundada, hace apenas cuatro (4) años en Miami, Florida, USA, con el nombre actual, ya hace 11 años existe como compañía con el nombre base en el Estado de Colorado, USA. Pero, más allá de ello, la realidad es que fue fundada en el año 1995, en otro país, con la visión de transformar e impactar en el campo del desarrollo de medicamentos, nutraceúticos, cosmecéuticos, suplementos nutricionales y alimentos <span style="color: #000;">“inteligentes”</span> para que en su conjunto se tenga un alto impacto sobre la salud y la nutrición a través de la ciencia y la innovación.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  En sus inicios, la compañía se centró en la investigación en la selección, identificación, caracterización y evaluación de ingredientes activos con propiedades farmacológicas, y luego nos ampliamos a la estimación de las propiedades nutricionales de los ingredientes naturales, buscando alternativas más saludables y efectivas a los suplementos nutricionales convencionales.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  A lo largo de los años, <span style="color: #000;">“PPG NUTRITIONAL”</span> ha evolucionado para convertirse en un referente en la industria que necesita productos de <span style="color: #000;">“confianza”</span>, siendo pionera en la aplicación de la biotecnología vegetal (obtención de células troncales de plantas) y el análisis de polimorfismos genéticos para el desarrollo de productos personalizados. A lo largo de su historia, la compañía ha logrado numerosos hitos, desde el lanzamiento de su primer suplemento hasta su expansión internacional en 2009. Hoy en día, <span style="color: #000;">“PPG NUTRITIONAL”</span> cuenta con un portafolio de más de 450 productos terapéuticos, que abarcan alimentos inteligentes, adyuvantes, otros productos terapéuticos, suplementos nutricionales hasta cosmecéuticos avanzados, todos ellos diseñados para mejorar la salud y el bienestar de sus clientes en todo el mundo.
</p>

<!-- Fundadores -->
<h3 style="font-size: 24px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;" >
 <i class="fas fa-user-tie" style="color: #ef6c00; margin-right: 8px;"></i>Fundadores:
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Desde sus inicios <span style="color: #000;">“PPG NUTRITIONAL”</span> fue fundada por el Dr. Remigio R Cortes Rodríguez y Dr. Ervelio Olazábal Manso, dos científicos visionarios con una profunda pasión por el desarrollo de medicamentos y la salud humana e inmediatamente se unieron otros renombrados científicos como lo son el Dr. Iván Pérez Gálvez, Dr. Víctor H Cortes Rodríguez, Dr. Héctor Serrano Pérez, Dr. Daniel Agramonte Peñalver, Dr. Antonio Pérez Donato, Dr. Ramon Vázquez Perdomo, Dr. Idalberto Becerra Sablón, Dr. Osmany Marrero Chang, Dra. Synai Camacho Bordón, Dr. Miguel A Cabrera Pérez, MSc. Rene Cupul, Dr. Mario Reinoso Pérez, entre otros hasta llegar a una cifra superior a los 50 doctores en ciencias con más de 30 años de experiencia en investigación, los que aportan su vasto conocimiento en el desarrollo de patentes, tecnologías, procedimientos, procesos, nuevos formulados y nuevas presentaciones farmacéuticas a base de ingredientes activos derivados de plantas convenientemente mezclados con vitaminas, aminoácidos, minerales y otros. Contamos también con la colaboración de doctores y especialistas en Genética Molecular, que son claves en la incorporación del análisis de polimorfismos genéticos en el diseño de productos, lo que permitió a la compañía personalizar los tratamientos nutricionales y epigenéticos de acuerdo con las características genéticas de cada individuo.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Desde sus modestos comienzos en un pequeño laboratorio, el liderazgo de los fundadores, y los que se han incorporado, junto con su compromiso inquebrantable con la excelencia científica, ha guiado a <span style="color: #000;">“PPG NUTRITIONAL”</span> hacia su posición actual en busca de convertirse en líder mundial en el campo de la nutrición y suplementación personalizada.
</p>

<!-- Estructura Organizacional con Icono -->
<h3 style="font-size: 24px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
  <i class="fas fa-sitemap" style="color: #c62828; margin-right: 8px;"></i>6.3 Estructura Organizacional:
</h3>

<p style="margin-bottom: 18px; text-align: justify;">
  <!-- Información sobre la estructura organizacional se puede agregar aquí -->

<h3 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left;" >
  6.3.1. Organigrama.
</h3>


<!-- primera tabla -->
<div class="chart-container">
    <!-- CEO -->
    <div class="chart-row">
        <div class="chart-box ceo">
            <i class="fas fa-user-tie"></i>CEO
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector"></div>
    <div class="horizontal-connector long"></div>

    <!-- Next row -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-gavel"></i>Asesoría Jurídica
        </div>
        <div class="chart-box">
            <i class="fas fa-bullhorn"></i>Relaciones Públicas
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector"></div>
    <div class="horizontal-connector long"></div>

    <!-- Next row -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-chart-line"></i>Asesoría Económica
        </div>
        <div class="chart-box">
            <i class="fas fa-users-cog"></i>Consejo Directivo
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector"></div>
    <div class="horizontal-connector long"></div>

    <!-- Final row -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-shopping-cart"></i>Mercadeo & Ventas
        </div>
        <div class="chart-box">
            <i class="fas fa-cogs"></i>Operaciones
        </div>
        <div class="chart-box">
            <i class="fas fa-users"></i>RRHH
        </div>
        <div class="chart-box">
            <i class="fas fa-money-check-alt"></i>Administración & Finanzas
        </div>
        <div class="chart-box">
            <i class="fas fa-flask"></i>Investigación y Desarrollo
        </div>
 </div>

 
</div>
 <!-- Encabezado de la tabla de departamentos de mercadeo y ventas -->
<h3 style="font-size: 24px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
  <i class="fas fa-project-diagram" style="color: #c62828; margin-right: 8px;"></i>6.3.2 Departamentos de Mercadeo y Ventas:
</h3>

<!-- 6.3.2. Departamentos de Mercadeo y Ventas -->
<div class="chart-container">
    <!-- Mercadeo & Ventas -->
    <div class="chart-row">
        <div class="chart-box ceo">
            <i class="fas fa-shopping-cart"></i> Mercadeo & Ventas
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector vertical"></div>
    <div class="horizontal-connector long"></div>

    <!-- Next row -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-bullhorn"></i> Marketing
        </div>
        <div class="chart-box">
            <i class="fas fa-dollar-sign"></i> Ventas
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="connector horizontal"></div>
        <div class="horizontal-connector long"></div>
        <div class="connector horizontal"></div>
    </div>

    <!-- Next row - Marketing -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-tv"></i> Medios ATL y BTL
        </div>
        <div class="chart-box">
            <i class="fas fa-share-alt"></i> Inbound Marketing
        </div>
        <div class="chart-box">
            <i class="fas fa-broadcast-tower"></i> Outbound Marketing
        </div>
        <div class="chart-box">
            <i class="fas fa-chart-line"></i> Métricas y Análisis
        </div>
        <div class="chart-box">
            <i class="fas fa-search-dollar"></i> Nuevos Nichos de Mercado
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="connector horizontal"></div>
        <div class="connector horizontal"></div>
        <div class="connector horizontal"></div>
        <div class="connector horizontal"></div>
        <div class="connector horizontal"></div>
    </div>

    <!-- Next row - Subdivisions under Medios ATL y BTL -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-hashtag"></i> RRSS
        </div>
        <div class="chart-box">
            <i class="fas fa-newspaper"></i> Prensa, TV, entre otros
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Subdivisions under Inbound Marketing -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-globe"></i> Mercadeo Online
        </div>
        <div class="chart-box">
            <i class="fas fa-store"></i> Mercadeo Offline
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Ventas -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-clipboard-list"></i> Pre-venta
        </div>
        <div class="chart-box">
            <i class="fas fa-shopping-basket"></i> Ventas
        </div>
        <div class="chart-box">
            <i class="fas fa-people-carry"></i> Post-Venta
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="connector horizontal"></div>
        <div class="horizontal-connector long"></div>
        <div class="connector horizontal"></div>
    </div>

    <!-- Next row - Subdivisions under Pre-venta -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-handshake"></i> Políticas Comerciales
        </div>
        <div class="chart-box">
            <i class="fas fa-user-plus"></i> Captación de Clientes
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Subdivisions under Ventas -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-file-signature"></i> Elaboración de Contratos Comerciales
        </div>
        <div class="chart-box">
            <i class="fas fa-signature"></i> Cierre y Firma de Contratos
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Subdivisions under Post-Venta -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-headset"></i> Atención Cliente
        </div>
        <div class="chart-box">
            <i class="fas fa-user-lock"></i> Retención del Cliente
        </div>
    </div>

    <!-- Final Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>


</div>
   <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
   <i class="fas fa-industry"></i> 6.3.3. Departamentos de Operaciones:
</h3>

<!-- Organigrama de Operaciones -->
<div class="chart-container">
    <!-- Operaciones -->
    <div class="chart-row">
        <div class="chart-box ceo">
            <i class="fas fa-industry"></i> Operaciones
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector"></div>
    <div class="horizontal-connector long"></div>

    <!-- Next row -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-shipping-fast"></i> Logística
        </div>
        <div class="chart-box">
            <i class="fas fa-shield-alt"></i> Seguridad
        </div>
        <div class="chart-box">
            <i class="fas fa-cogs"></i> Producción
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="connector"></div>
        <div class="horizontal-connector long"></div>
        <div class="connector"></div>
    </div>

    <!-- Next row - Logística -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-box"></i> Suministros
        </div>
        <div class="chart-box">
            <i class="fas fa-truck"></i> Distribución
        </div>
        <div class="chart-box">
            <i class="fas fa-warehouse"></i> Inventario
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="connector"></div>
        <div class="connector"></div>
        <div class="connector"></div>
    </div>

    <!-- Subdivisions under Suministros -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-cart-arrow-down"></i> Adquisición
        </div>
        <div class="chart-box">
            <i class="fas fa-file-invoice"></i> Entrega y Facturación
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Subdivisions under Adquisición -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-calculator"></i> Cotización de Insumos
        </div>
        <div class="chart-box">
            <i class="fas fa-money-bill"></i> Compra de Materia Prima
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Subdivisions under Distribución -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-boxes"></i> Almacenamiento
        </div>
        <div class="chart-box">
            <i class="fas fa-shipping-fast"></i> Transporte
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Subdivisions under Transporte -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-dolly"></i> Carga, descarga y trazabilidad
        </div>
        <div class="chart-box">
            <i class="fas fa-truck-loading"></i> Control de Última Milla
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Subdivisions under Inventario -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-box-open"></i> Gestión de Inventarios
        </div>
        <div class="chart-box">
            <i class="fas fa-clipboard-check"></i> Consolidación de Inventarios
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Seguridad -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-exclamation-triangle"></i> Control y Gestión de Riesgo
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector"></div>
    <div class="horizontal-connector long"></div>

    <!-- Next row - Producción -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-tags"></i> Productos y Servicios
        </div>
        <div class="chart-box">
            <i class="fas fa-check-circle"></i> Control de Calidad
        </div>
        <div class="chart-box">
            <i class="fas fa-boxes"></i> Control de Inventarios
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="connector"></div>
        <div class="horizontal-connector long"></div>
        <div class="connector"></div>
    </div>

    <!-- Next row - Subdivisions under Productos y Servicios -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-clock"></i> Tiempos de Ejecución y Entrega
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector"></div>
    <div class="horizontal-connector long"></div>

    <!-- Next row - Subdivisions under Control de Calidad -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-chart-bar"></i> Gestión y Medición de KPIs
        </div>
  
</div>


</div>
<h3 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
  6.3.5. Recursos Humanos:
</h3>

<!-- Organigrama de Recursos Humanos -->
<div class="chart-container">
    <!-- RRHH -->
    <div class="chart-row">
        <div class="chart-box ceo">
            <i class="fas fa-users"></i> RRHH
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector"></div>
    <div class="horizontal-connector long"></div>

    <!-- Next row -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-user-check"></i> Reclutamiento y Selección
        </div>
        <div class="chart-box">
            <i class="fas fa-book"></i> Políticas y Normas de Talento RRHH
        </div>
        <div class="chart-box">
            <i class="fas fa-money-check-alt"></i> Nómina
        </div>
        <div class="chart-box">
            <i class="fas fa-shield-alt"></i> Higiene & Seguridad
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="connector"></div>
        <div class="horizontal-connector long"></div>
        <div class="connector"></div>
        <div class="horizontal-connector long"></div>
        <div class="connector"></div>
    </div>

    <!-- Next row - Reclutamiento y Selección -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-tasks"></i> Cargos
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector"></div>
    <div class="horizontal-connector long"></div>

    <!-- Next row - Subdivisions under Cargos -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-chart-line"></i> Evaluación de Desempeño
        </div>
        <div class="chart-box">
            <i class="fas fa-handshake"></i> Relaciones Laborales
        </div>
        <div class="chart-box">
            <i class="fas fa-cogs"></i> Desarrollo Organizacional
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Nómina -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-wallet"></i> Compensación
        </div>
        <div class="chart-box">
            <i class="fas fa-gift"></i> Beneficios Sociales
        </div>
    </div>

    <!-- Final Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>
</div>


</div>

<h3 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
  6.3.6. Administración & Finanzas:
</h3>

<!-- Organigrama de Administración & Finanzas -->
<div class="chart-container">
    <!-- Administración & Finanzas -->
    <div class="chart-row">
        <div class="chart-box ceo">
            <i class="fas fa-money-check-alt"></i> Administración & Finanzas
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector"></div>
    <div class="horizontal-connector long"></div>

    <!-- Next row -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-wallet"></i> Tesorería
        </div>
        <div class="chart-box">
            <i class="fas fa-chart-pie"></i> Políticas Financieras
        </div>
        <div class="chart-box">
            <i class="fas fa-balance-scale"></i> Legal
        </div>
        <div class="chart-box">
            <i class="fas fa-calculator"></i> Contabilidad
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="connector"></div>
        <div class="horizontal-connector long"></div>
        <div class="connector"></div>
        <div class="horizontal-connector long"></div>
        <div class="connector"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Tesorería -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-university"></i> Bancos
        </div>
        <div class="chart-box">
            <i class="fas fa-cash-register"></i> Caja
        </div>
        <div class="chart-box">
            <i class="fas fa-piggy-bank"></i> Inversiones
        </div>
        <div class="chart-box">
            <i class="fas fa-dollar-sign"></i> Ingresos
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="connector"></div>
        <div class="horizontal-connector long"></div>
        <div class="connector"></div>
        <div class="horizontal-connector long"></div>
        <div class="connector"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Legal -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-file-contract"></i> Control de Patentes
        </div>
        <div class="chart-box">
            <i class="fas fa-shield-alt"></i> Registro de Marcas y Propiedad Intelectual
        </div>
    </div>

    <!-- Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>

    <!-- Next row - Contabilidad -->
    <div class="chart-row">
        <div class="chart-box">
            <i class="fas fa-file-invoice-dollar"></i> CxC
        </div>
        <div class="chart-box">
            <i class="fas fa-file-invoice-dollar"></i> CxP
        </div>
        <div class="chart-box">
            <i class="fas fa-book"></i> Gestión y Conciliación de Libros
        </div>
    </div>

    <!-- Final Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>
</div>

<!-- Encabezado del diagrama de Investigación y Desarrollo -->
<h3 style="font-size: 24px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
  <i class="fas fa-flask" style="color: #c62828; margin-right: 8px;"></i>6.3.7 Investigación y Desarrollo:
</h3>

<!-- Diagrama de Investigación y Desarrollo -->
<div class="chart-container">
    <!-- Investigación y Desarrollo -->
    <div class="chart-row">
        <div class="chart-box ceo">
            <i class="fas fa-flask"></i>Investigación y Desarrollo
        </div>
    </div>

    <!-- Connectors -->
    <div class="connector"></div>
    <div class="horizontal-connector long"></div>

    <!-- Next row -->
    <div class="chart-row">
        <div class="chart-box">
            Investigación Científica
        </div>
        <div class="chart-box">
            Análisis de histórico y tendencias actuales
        </div>
        <div class="chart-box">
            Desarrollo de Productos y Procesos
        </div>
    </div>

    <!-- Final Connectors -->
    <div class="chart-row">
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
        <div class="horizontal-connector long"></div>
    </div>
</div>






<!-- 6.4 Materias primas, insumos e ingredientes -->
<h3 style="font-size: 24px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;">
  <i class="fas fa-flask" style="color: #ef6c00; margin-right: 8px;"></i>6.4. Materias primas, insumos e ingredientes:
</h3>

<!-- Insumos requeridos -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Insumos requeridos:
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Frascos</li>
  <li>Tapas</li>
  <li>Bombas</li>
  <li>Dispensadores</li>
  <li>Etiquetas</li>
  <li>Envase primario</li>
  <li>Envase secundario</li>
  <li>Policane</li>
  <li>Células madres de apio</li>
  <li>Semillas de calabaza</li>
  <li>Cáscara de melón</li>
  <li>Aceite de soja</li>
  <li>Agua</li>
  <li>Conservantes naturales</li>
  <li>Reguladores de Ph</li>
  <li>Saborizantes</li>
  <li>Entre otros</li>
</ul>

<!-- Lista de ingredientes -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Lista de ingredientes:
</h3>
<ol style="margin-bottom: 18px; text-align: justify;">
  <li>GLYCOL STEARATE</li>
  <li>ISOPROPIL MYRISTATE</li>
  <li>GLYCERIN</li>
  <li>CETILIC ALCOHOL</li>
  <li>STEARIC ACID</li>
  <li>ETHYL ALCHOHOL</li>
  <li>BUTYROSPERMUM PARKII BUTTER</li>
  <li>RETINYL PALMITATE</li>
  <li>XYLITYLGLUCOSIDE</li>
  <li>ANHYDROXYLITOL</li>
  <li>XYLITOL</li>
  <li>MAGNESIUM GLUCONATE</li>
  <li>PHENOXYETHANOL</li>
  <li>ETHYLHEXYLGLYCERIN</li>
  <li>SODIUM HYALURONATE</li>
  <li>ETHYLENODIAMINE</li>
  <li>TETRAHYDROXYPROPIL</li>
  <li>PHENYLPROPANOL</li>
  <li>PROPANODIOL</li>
  <li>CAPRYLYL GLYCOL</li>
  <li>TOCOPHEROL</li>
  <li>LAVENDER OIL</li>
  <li>SQUALANE</li>
  <li>UREA</li>
  <li>PANTHENOL</li>
  <li>CARBOMER</li>
  <li>POLYGLYCERCULO-10 OLEATE</li>
  <li>GLUCOSYL CERAMIDE</li>
  <li>ALANTOIN</li>
  <li>SODIUM PCA</li>
  <li>DESODIUM EDTA</li>
  <li>PROPYLENE GLYCOL</li>
  <li>SODIUM ASCORBYL PHOSPHATE</li>
  <li>TOCOPHERYL ACETATE</li>
  <li>ASCORBYL PALMITATE</li>
  <li>SODIUM CARBOXIMETHYL BETA-GLUCAN</li>
  <li>SOYBEAN WAX</li>
  <li>BEE WAX</li>
  <li>CAROXIMEIL CELLULOSE</li>
  <li>METHYL CELLULOSE</li>
  <li>TRAGACANRO RUBBER</li>
  <li>TOCTIC ACID</li>
  <li>BETACAROTENE</li>
  <li>CARBAPOL</li>
  <li>TRIETHANOL AMINE</li>
  <li>METHYL PARABEN</li>
  <li>PROPILE PARABENE</li>
  <li>QUERCETINE</li>
  <li>VITAMIN C</li>
  <li>VITAMIN E</li>
  <li>ZN</li>
  <li>SE</li>
  <li>CU</li>
  <li>MG</li>
  <li>ALKYL ACRYLATE</li>
  <li>TRIETHANOLAMINE</li>
  <li>LAURYL GLUCOSIDE</li>
  <li>COCAMIDOPROPIL BETAINE</li>
  <li>AMBER POWDER</li>
  <li>METHYLCLOROISOTHIAZOLINONE</li>
  <li>METHYLTHIAZOLINONE</li>
</ol>

<!-- Esencias mezcladas -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Esencias mezcladas:
</h3>
<ol style="margin-bottom: 18px; text-align: justify;">
  <li>Essential oil of calendula, jasmine, lavender, tangerine, chamomile</li>
  <li>Essential oil of basil, cypress, rosemary, geranium, carrot</li>
  <li>Bergamot oil, coriander, cypress, lime, tangerine</li>
  <li>Essential oils of chamomile, lemon, grape, sandalwood, ginger</li>
  <li>Essential oils of angelica, cinnamon, mint, orange, rosemary, mint, orange, grape</li>
  <li>Essential oil of aloe, tea tree, calendula, nail, lavender</li>
  <li>Essential oil of aloe, coriander, lavender, orange, rosemary</li>
  <li>Essential oil of anise, laurel, jasmine, angelica</li>
  <li>Essential oil of bergamot, jasmine, lavender, lime, grape</li>
  <li>Essential oil of aloe, coriander, jasmine, rosemary, salvia, vanilla, patchouli oils</li>
  <li>Oils of aloe, citronela, laurel pomelo, oregano</li>
  <li>Essential oil of aloe, arnica, cypress oils, incense, lemon, patchouli, pine, salvia, sandalwood oils</li>
  <li>Essential oil of sesame oils, thyme, aloe</li>
  <li>Essential oil of oils of a pachulí, grape, laurel, thyme</li>
  <li>Essential oil of aloe, jasmine, patchouli, citronela oils</li>
  <li>Essential oil of patchouli, pine, salvia, sandalwood oils</li>
  <li>Essential oil of tea tree oils, lemon, salvia</li>
  <li>Essential oil of eucalyptus oils, gaulteria, ginger, laurel, lima, chamomile, parsley</li>
</ol>


<!-- Ubicación y Presencia Global -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  7. Ubicación y Presencia Global
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <span style="color: #000;">“PPG NUTRITIONAL”</span>, con su sede principal en los Estados Unidos, ha expandido su presencia de manera estratégica en mercados clave a nivel global. Actualmente, la compañía tiene una sólida presencia en México donde cuenta con socios que poseen facilidades productivas, logísticas de almacenamiento y distribución en cerca de 36 mil puestos de ventas en redes de farmacias, supermercados, tiendas de autoservicios y otros canales de distribución. También en República Dominicana, donde nuestros productos, al igual que en México, han sido bien recibidos por consumidores y profesionales de la salud con gran aceptación, contamos con socios con las mismas condiciones de México.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  En nuestro esfuerzo continuo por llevar nuestras soluciones de salud innovadoras a más personas, <span style="color: #000;">“PPG NUTRITIONAL”</span> ha comenzado a establecerse en toda América Latina a través de la plataforma de comercio electrónico “MERCADO LIBRE”, lo que nos permite llegar a millones de clientes en la región con nuestras gamas de productos de confianza que han llamado la atención e interés del propio dueño de esta plataforma, lo que sin dudas nos facilitará la entrada a casi todos los otros segmentos de mercados con puestos de ventas físicos en América Latina. En particular, estamos dando pasos importantes en Argentina, Uruguay, Paraguay, Chile, y Brasil, donde estamos trabajando para consolidar nuestras operaciones y expandir nuestro alcance.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Además, nuestros planes de expansión futura incluyen la entrada en mercados de Europa y Medio Oriente, donde vemos una gran oportunidad para introducir nuestros productos terapéuticos basados en tecnologías de avanzada para una terapéutica y nutrición personalizada. Este enfoque global refuerza nuestro compromiso de mejorar la salud y el bienestar a nivel mundial, llevando los beneficios de nuestros productos a nuevas fronteras.
</p>

<!-- Principales Áreas de Investigación, Desarrollo y Producción -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  7.1. Principales Áreas de Investigación, Desarrollo y Producción
</h3>



<!-- Nueva Generación de Productos Terapéuticos Inteligentes -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  7.1.1. “PPG NUTRITIONAL” y la Nueva Generación de Productos Terapéuticos Inteligentes
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  En un contexto global caracterizado por avances científicos y tecnológicos sin precedentes, <span style="color: #000;">“PPG NUTRITIONAL”</span> se posiciona como un líder innovador en el campo de la nutrición y la salud. Nuestra misión va más allá de satisfacer las necesidades actuales del mercado; nos proponemos anticipar y abordar los retos del futuro en la salud y el bienestar. A través de una sólida base de investigación, gestión estratégica, y desarrollo tecnológico, hemos creado un enfoque integral para diseñar, formular, producir y comercializar productos que no solo son terapéuticos, sino también inteligentes.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  La nueva generación de productos terapéuticos inteligentes de <span style="color: #000;">PPG NUTRITIONAL</span> está fundamentada en una comprensión profunda de los procesos biológicos y moleculares que afectan la salud humana. Aprovechamos tecnologías avanzadas de formulación que nos permiten mejorar la biodisponibilidad y la efectividad de nuestros ingredientes activos. Estos productos están específicamente diseñados para prevenir y controlar enfermedades crónicas, así como para tratar y curar las afecciones asociadas con el envejecimiento. Nuestro enfoque proactivo no solo se centra en aliviar síntomas, sino en revertir los efectos del tiempo y proporcionar una solución sostenible para una vida más larga y saludable.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Un elemento clave en nuestra estrategia es la integración de la biotecnología vegetal y la medicina regenerativa. Utilizamos células troncales vegetales para desarrollar formulaciones que estimulan la producción de células madre pluripotenciales y dendríticas. Esto nos permite crear productos que no solo actúan en la superficie, sino que también abordan las causas subyacentes de las enfermedades, facilitando la restauración y revitalización de órganos y tejidos. Esta innovación en medicina regenerativa es fundamental para la creación de terapéuticos que ofrecen un enfoque holístico hacia la salud y el bienestar, ayudando a las personas a recuperar y mantener su calidad de vida.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Además, nuestra dedicación a la investigación en genómica y nutrición personalizada nos permite adaptar nuestros productos a las características únicas de cada individuo. A través del análisis del polimorfismo genético, podemos ofrecer soluciones nutricionales personalizadas que optimizan la salud y previenen enfermedades de manera efectiva. Este enfoque no solo es innovador, sino que también responde a una creciente demanda del mercado por productos que sean tanto efectivos como seguros, garantizando que cada persona reciba la atención nutricional que necesita.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Con la visión de un futuro donde la longevidad esté acompañada de bienestar, <span style="color: #000;">“PPG NUTRITIONAL”</span> se compromete a ser un pionero en la creación de productos que realmente transformen la manera en que las personas previenen, tratan y reviven su salud. Nuestra capacidad para innovar en cada etapa de la cadena de valor es un testimonio de nuestro compromiso con la excelencia y la mejora continua. Al invertir en nuestras investigaciones y desarrollos, no solo estamos construyendo un portafolio de productos efectivos, sino también un legado de salud y bienestar para las generaciones futuras.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  En resumen, <span style="color: #000;">“PPG NUTRITIONAL”</span> se erige como un faro de innovación en la intersección de la ciencia y la salud, desarrollando productos terapéuticos inteligentes que abordan las necesidades del presente y los desafíos del futuro. A través de nuestras investigaciones y el desarrollo de soluciones personalizadas, estamos dedicados a prolongar la vida y mejorar su calidad, impactando positivamente en la salud de las personas en todo el mundo.
</p>



<!-- Investigación a la Comercialización -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  7.2.4. De la Investigación a la Comercialización: Un Proceso Integral
</h3>


<p style="margin-bottom: 18px; text-align: justify;">
  1. El camino que sigue <span style="color: #000;">“PPG NUTRITIONAL”</span> desde la investigación hasta la comercialización es un proceso integral, meticulosamente estructurado para asegurar que cada producto no solo cumpla con los más altos estándares de calidad y eficacia, sino que también responda a las necesidades específicas de los consumidores. Desde el inicio de la fase de investigación hasta la entrega del producto final al mercado, cada etapa del proceso está diseñada para garantizar que los productos que ofrecemos tengan un impacto significativo en la salud y el bienestar de las personas.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  2. Nuestra inversión continua en Investigación y Desarrollo (I+D) es la piedra angular de nuestra estrategia. A través de un enfoque multidisciplinario, exploramos nuevas áreas de la ciencia, incluyendo la biotecnología, la genómica y la medicina regenerativa. Este compromiso con la investigación nos permite identificar tendencias emergentes y oportunidades en el mercado de la salud, asegurando que nuestros productos no solo sean innovadores, sino también relevantes y efectivos. La colaboración con instituciones académicas y centros de investigación también enriquece nuestra capacidad para generar conocimiento y aplicar nuevas tecnologías en el desarrollo de productos.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  3. Una vez que una idea de producto ha sido validada a través de investigaciones iniciales, entramos en la fase de desarrollo de formulaciones. Aquí, utilizamos tecnologías avanzadas para optimizar la biodisponibilidad y la eficacia de los ingredientes activos, asegurando que nuestros productos no solo sean seguros, sino también altamente efectivos. Las pruebas preclínicas y clínicas se llevan a cabo para evaluar la seguridad y la eficacia de los productos, y todos los hallazgos son analizados rigurosamente. Este enfoque basado en evidencia asegura que solo los productos que cumplen con nuestros estrictos criterios de calidad sean avanzados a la siguiente fase.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  4. Una vez que un producto ha sido aprobado para la comercialización, se implementa una estrategia de lanzamiento cuidadosa y planificada. Esto incluye la creación de campañas de marketing centradas en la educación del consumidor y la promoción de los beneficios de nuestros productos. Trabajamos para construir relaciones sólidas con distribuidores y minoristas para asegurar que nuestros productos lleguen efectivamente a los consumidores. También establecemos canales de retroalimentación que nos permiten escuchar a nuestros clientes y adaptar nuestras ofertas según sus necesidades y preferencias.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  5. La sostenibilidad también es un pilar fundamental de nuestro proceso. Nos aseguramos de que cada fase del desarrollo del producto, desde la investigación hasta la comercialización, se realice de manera responsable y sostenible, minimizando el impacto ambiental y promoviendo prácticas éticas en todas nuestras operaciones.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  6. En resumen, el proceso integral que sigue <span style="color: #000;">“PPG NUTRITIONAL”</span> desde la investigación hasta la comercialización es un testimonio de nuestro compromiso con la calidad, la innovación y la salud. Al integrar la investigación de vanguardia con un enfoque metódico en el desarrollo y la comercialización, estamos dedicados a crear productos que realmente marquen una diferencia tangible en la vida de las personas, mejorando su salud y bienestar a largo plazo.
</p>



<!-- Investigación y Diseño de Formulaciones -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  7.3.1. Investigación y Diseño de Formulaciones
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  En la fase de investigación, nuestros equipos científicos trabajan en colaboración con universidades e instituciones de investigación para modelar por sistemas de cribado de alto rendimiento utilizando los adelantos científicos en genómica, proteómica, biología evolutiva e inteligencia artificial hasta  identificar y corroborar los nuevos ingredientes activos que han mostrado tener acciones específicas usados como terapéuticos o nutricionales que puedan ser aplicados en el desarrollo de nuestros productos suplementos nutricionales o alimentos inteligentes. Cumplida esta fase, pasamos a la etapa de ensayos preclínicos con modelos biológicos que nos permiten determinar si, en efecto, las predicciones y modelaciones son correspondientes con los efectos en la vida real en microorganismos, insectos, parásitos o animales superiores. Esta fase es crucial para pasar al diseño de nuevos formulados altamente efectivos de baja toxicidad, para  asegurar que nuestras formulaciones estén basadas en la última evidencia científica y sean capaces de ofrecer resultados comprobados en la prevención, control, tratamiento o cura de enfermedades síndromes, alteraciones y para revertir el proceso de envejecimiento.
</p>

<!-- Producción y Escalado -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  7.3.2. Producción y Escalado
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Una vez que las formulaciones han sido desarrolladas y probadas, pasamos a la producción. Utilizamos tecnologías de última generación para asegurar que cada producto sea producido con la máxima calidad y consistencia. Nuestra capacidad de escalado que ya están estructuradas en facilidades que cumplen con las normas de FDA, nos permite llevar estos productos al mercado de manera eficiente, asegurando que estén disponibles para un público amplio y diverso.
</p>

<!-- Comercialización y Expansión Global -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  7.3.3. Comercialización y Expansión Global
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <span style="color: #000;">“PPG NUTRITIONAL”</span> no solo se centra en la calidad del producto, sino también en su accesibilidad. Con una presencia consolidada en los Estados Unidos, México y la República Dominicana, y nuestra expansión en toda América Latina a través de Mercado Libre, estamos comprometidos en llevar nuestros productos a un mercado global. Además, estamos dando pasos importantes para establecer nuestra presencia en Europa y Medio Oriente, donde vemos un gran potencial para nuestros productos innovadores.
</p>



<p style="margin-bottom: 18px; text-align: justify;">
  Nuestra compañía cuenta con una planta de producción de alimentos procesados, que en breve se enfocará en producir una variada gama de azúcares de caña, bajo patentes, que se consideran por la “OMS” como los azúcares adecuados para la salud al ser consumidos directamente o en alimentos procesados, todo el proceso de comercialización se llevará a cabo bajo una marca registrada de trascendental valor histórico, cultural y social.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  La planta se ha consolidado como uno de los líderes de maquila en México, impulsada por inversiones recientes y un crecimiento constante. Destacamos por nuestras certificaciones en inocuidad alimentaria, lo que nos convierte en la primera opción para socios y clientes comerciales que buscan calidad y eficiencia en servicios de maquila de empaque alimentos. Nuestras instalaciones ofrecen un amplio espacio de trabajo, diseñado específicamente para maximizar la colaboración, el bienestar y la eficiencia. Cada rincón, desde las áreas comunes hasta los espacios de trabajo, está pensado para facilitar el desarrollo de actividades diarias en un ambiente confortable y productivo. Estamos ubicados estratégicamente en el centro de México, en el municipio de Lerma, Estado de México, muy cerca de la ciudad de Toluca y a pocos kilómetros de la Ciudad de México.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  La planta tiene una sólida posición financiera, dedicada hace más de 15 años a la industria de la co-manufactura para empresas de clase mundial. Contamos con profesionales de la industria alimentaria, con sólida experiencia en Producción, Calidad, Investigación y Desarrollo (I+D), Ventas y Marketing, conocemos las necesidades del mercado objetivo. Nuestro foco está en co-manufactura de productos en polvo, granulados, cereales, frutos secos y algunas líneas de producción de productos líquidos, pero exclusivamente en sachets porcionados. Contamos con una planta de producción de 4.000 m², diseñada estratégicamente para optimizar la eficiencia en la fabricación. Nuestro enfoque se centra en garantizar la calidad de nuestros productos, cumpliendo con los más altos estándares de la industria. Nuestra planta asegura procesos de producción ágiles y un control de calidad riguroso. Nos comprometemos a mantener y superar las expectativas de la industria.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Contamos con tecnología de punta para lograr buenas eficiencias y así poder ofrecer costos competitivos en una industria altamente demandante:
</p>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>30 líneas de producción activas</li>
  <li>6 mezcladores</li>
  <li>450 empleados</li>
  <li>Equipo de Calidad e Higiene</li>
  <li>Ingeniería</li>
</ul>
<p style="margin-bottom: 18px; text-align: justify;">
  Nuestra capacidad de maquila se encuentra aproximadamente en el 55%, teniendo una gran oportunidad de crecimiento.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Capacidades por línea de producción y mezcla.
</p>



<!-- Asegúrate de incluir el enlace de Font Awesome en tu archivo HTML -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px; color: #004d40; text-align: center;">
    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
        <span style="font-weight: bold;">Mezclado</span>
        <span style="margin: 0 10px; font-size: 20px; color: #1e88e5;"><i class="fas fa-long-arrow-alt-right"></i></span>
        <span>1500 Tons x Month</span>
    </div>
    
    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
        <span style="font-weight: bold;">Stick Packs</span>
        <span style="margin: 0 10px; font-size: 20px; color: #1e88e5;"><i class="fas fa-long-arrow-alt-right"></i></span>
        <span>6 Million Sticks x Month</span>
    </div>
    
    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
        <span style="font-weight: bold;">Sachets hi speed</span>
        <span style="margin: 0 10px; font-size: 20px; color: #1e88e5;"><i class="fas fa-long-arrow-alt-right"></i></span>
        <span>400 Million Packs x Month</span>
    </div>
    
    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
        <span style="font-weight: bold;">Formatos horizontales</span>
        <span style="margin: 0 10px; font-size: 20px; color: #1e88e5;"><i class="fas fa-long-arrow-alt-right"></i></span>
        <span>7 Million Sachets per Month</span>
    </div>
    
    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
        <span style="font-weight: bold;">Formatos Verticales</span>
        <span style="margin: 0 10px; font-size: 20px; color: #1e88e5;"><i class="fas fa-long-arrow-alt-right"></i></span>
        <span>8 Million Sachets per Month</span>
    </div>
    
    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
        <span style="font-weight: bold;">Vertical Formats 10 drops</span>
        <span style="margin: 0 10px; font-size: 20px; color: #1e88e5;"><i class="fas fa-long-arrow-alt-right"></i></span>
        <span>4.2 Million Sachets x Month</span>
    </div>

    <div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px; color: #004d40; text-align: justify; margin-top: 20px;">
    La planta cuenta con mucha versatilidad a los efectos productivos, se pueden realizar modificaciones en el diseño rápidamente para agregar nuevas líneas de producción sin afectar al resto de los procesos, las inversiones en este tipo de industria no son tan significativas como otras. Las líneas de empacado son accesibles y el know how está enfocado más en las formulaciones y los productos de valor agregado.
    </div>



<!-- Información Comercial -->
<h3 style="font-size: 24px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Información Comercial
</h3>

 <!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture8.png" alt="Imagen representativa" style="width: 100%; height: auto; border-radius: 8px;">
  </div>

<div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px; color: #004d40; text-align: justify; margin-bottom: 20px;">
  <p>
    La compañía cuenta con una rica historia en la industria de co-fabricación en México, que le permite tener las credenciales sumadas a las certificaciones tanto en inocuidad como en responsabilidad social, que hacen que los clientes confíen en nuestros procesos para la fabricación de sus productos con la más alta calidad.
  </p>

  <p>
    Las ventas se encuentran a cargo de la Dirección General así como por parte del equipo de desarrollo. Cuenta con clientes tanto nacionales como internacionales, un 35% de las ventas son exportación a otros países, nuestro principal socio comercial se encuentra en USA y el resto son países emergentes como VENEZUELA y PANAMÁ.
  </p>
  <p>
    Contamos con certificaciones IMMEX e IVA IEPS que nos ayudan a aterrizar negocios muy atractivos, ofreciendo una zona franca en nuestra planta para nuestros clientes agregando valor a producto y luego exportando el producto final fuera de México, esto ayuda el nearshoring actualmente en boca de todo el mercado mexicano. Nos consideramos expertos en varias categorías dentro de la industria alimentaria como Bebidas en Polvo y Gelatinas, así como Leche en Polvo, suplementos alimenticios y el empacado de Cereales y productos saludables como granolas y avena entre otros.
  </p>

</div>

   <!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture9.png" alt="Imagen representativa" style="width: 60%; height: auto; border-radius: 8px;">
  </div>

  
<!-- Información de Mercado -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Información de Mercado
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  La industria de alimentos en México continúa creciendo sostenidamente, las empresas de Co-manufactura especializadas son pocas y la infraestructura de estas es rudimentaria y sin certificaciones, lo que nos coloca en una posición de ventaja frente a nuestros competidores. Al mismo tiempo, durante la pandemia cerraron muchas plantas maquiladoras fortaleciendo nuestro posicionamiento. En el caso nuestro, nos diversificábamos y agregamos nuevas unidades de negocio como la elaboración de sabores para la industria alimentaria, así como potenciadores de sabor, bases lácteas y otros productos, nuestro cliente en este mercado específico son Givaudan, IFF, Firmenich, Kerry entre otros saboristas de la industria.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Hoy somos uno de los maquiladores más importantes en México y estamos esperando comenzar en breve la producción de una línea de varios azúcares con marca relevante para ampliar a tres turnos de trabajo la producción de la planta, con lo que aumentarían las utilidades. Hoy la industria busca socios comerciales que estén a la altura de sus necesidades, tanto en inocuidad alimentaria como en responsabilidad social.
</p>

<!-- Planta de producción -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Planta de Producción
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Contamos con más de 2000 m² de área productiva, con diversas líneas de producción y mezclado. Contamos con cuartos de lavado, almacén de 4000 m², áreas de recepción y embarques, lavandería, comedor, área de mantenimiento y laboratorio.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  A continuación, nuestras tecnologías y tipos de empaque que ofrecemos:
</p>

<!-- Mezclado -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Mezclado
</h3>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture10.png" alt="Imagen representativa" style="width: 90%; height: auto; border-radius: 8px;">
  </div>


<!-- Mezclado -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Envasado.
</h3>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture11.png" alt="Imagen representativa" style="width: 90%; height: auto; border-radius: 8px;">
  </div>

  <!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture12.png" alt="Imagen representativa" style="width: 90%; height: auto; border-radius: 8px;">
  </div>

  <!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture13.png" alt="Imagen representativa" style="width: 90%; height: auto; border-radius: 8px;">
  </div>

  <!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture14.png" alt="Imagen representativa" style="width: 90%; height: auto; border-radius: 8px;">
  </div>

  <!-- Mezclado -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Depósito (almacenes).
</h3>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture15.png" alt="Imagen representativa" style="width: 90%; height: auto; border-radius: 8px;">
  </div>


  <!-- Aseguramiento de la Calidad y Responsabilidad Social -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Aseguramiento de la Calidad y Responsabilidad Social
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Trabajamos bajo los más altos estándares de calidad del mercado, estamos certificados por la IS0 FSSC 22000 en su versión más actualizada. También contamos con certificaciones de Cofepris y FDA y SAGARPA.
</p>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture16.png" alt="Imagen representativa" style="width: 70%; height: auto; border-radius: 8px;">
  </div>


  <!-- Responsabilidad Social -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Responsabilidad Social
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  En cuanto a Responsabilidad Social, nuestro compromiso está al 100% para cuidar tanto al medio ambiente como a nuestros trabajadores, es por eso que estamos certificados en 4 pilares:
</p>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture17.png" alt="Imagen representativa" style="width: 50%; height: auto; border-radius: 8px;">
  </div>

<!-- Valor del Negocio -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Valor del Negocio
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  El valor de la empresa por la calidad de sus clientes, ventas y rentabilidad es de 14.4 millones de dólares americanos, que representa hoy en día un ingreso de la empresa. <span style="color: #000;">“PPG NUTRITIONAL”</span> puede comercializar desde la planta, al empacar los diferentes tipos de azúcares con la marca registrada, lo que en los próximos años podría generar más de 200 M de dólares y, en conjunto, ayudar a millones de consumidores a mejorar su calidad de vida.
</p>

<!-- Contribuyendo a la Longevidad con Calidad -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  7.5. Contribuyendo a la Longevidad con Calidad
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  El envejecimiento es un proceso natural e inevitable, pero en <span style="color: #000;">“PPG NUTRITIONAL”</span> sostenemos firmemente que no tiene por qué implicar una reducción de la calidad de vida. A medida que la población mundial envejece, surge la necesidad de adoptar un enfoque más proactivo y holístico hacia la salud y el bienestar. A través de nuestros productos terapéuticos inteligentes y alimentos procesados inteligentes, estamos liderando una revolución en este ámbito, proporcionando a las personas la oportunidad de prolongar sus vidas con calidad y vitalidad.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Nuestros productos están diseñados no solo para tratar enfermedades, sino también para prevenirlas y, en muchos casos, revertir los daños ya causados por el envejecimiento y el estilo de vida moderno. Utilizando tecnologías de vanguardia y un enfoque basado en la investigación científica, hemos desarrollado formulaciones que abordan de manera efectiva las necesidades de salud de cada individuo. Esto significa que nuestros clientes pueden esperar no solo vivir más años, sino disfrutar de una vida plena y saludable, con una mejor funcionalidad física y mental.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  En el núcleo de nuestra filosofía está la convicción de que la longevidad debe ir acompañada de bienestar. Por ello, nos dedicamos a crear productos que promuevan la salud integral, apoyando no solo la salud física, sino también el bienestar emocional y mental. Desde suplementos que mejoran la salud cardiovascular hasta alimentos que refuerzan el sistema inmunológico, nuestra línea de productos es un testimonio de nuestro compromiso con la calidad de vida en cada etapa del envejecimiento.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  En conclusión, <span style="color: #000;">“PPG NUTRITIONAL”</span> se dedica a transformar la salud global a través de la innovación y el uso de tecnologías avanzadas. Nuestra misión es clara: desarrollar productos que mejoren la vida de las personas, extendiendo no solo su longevidad, sino asegurando que esas vidas se vivan con la mayor calidad posible. Estamos en el camino de cambiar la narrativa del envejecimiento, convirtiéndolo en una etapa de oportunidades y crecimiento, y no en un periodo de declive. Creemos que todos merecen la oportunidad de disfrutar de una vida activa, plena y saludable, y estamos aquí para hacer de esa creencia una realidad.
</p>




<!-- Investigación y Desarrollo (I+D) -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  8. INVESTIGACIÓN Y DESARROLLO (I+D)
</h3>

<!-- Innovación y Liderazgo en Salud Global -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  8.1. Innovación y Liderazgo en Salud Global: Áreas de Investigación Clave de “PPG NUTRITIONAL”
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <span style="color: #000;">“PPG NUTRITIONAL”</span> se ha consolidado como un referente global en el campo de la salud mediante una combinación única de gestión estratégica e innovación tecnológica. Nuestra misión es transformar la forma en que las personas previenen, tratan y revierten los efectos del envejecimiento y las enfermedades relacionadas, liderando la intersección entre la biotecnología vegetal y la nutrición personalizada. Con un enfoque claro en la creación de productos terapéuticos y alimentos inteligentes, estamos redefiniendo los estándares de la salud global al integrar la ciencia más avanzada en cada etapa de nuestro proceso de investigación y desarrollo.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Nuestro compromiso con la excelencia se refleja en una estrategia de crecimiento a largo plazo que coloca la Investigación y Desarrollo (I+D) en el núcleo de nuestras operaciones. Este enfoque no solo impulsa la innovación continua, sino que también garantiza nuestra capacidad para mantenernos a la vanguardia en un mercado altamente competitivo y en constante evolución. Al combinar disciplinas como la genómica, la biotecnología vegetal, y la inteligencia artificial, <span style="color: #000;">PPG NUTRITIONAL</span> no solo se adapta a las tendencias actuales del mercado, sino que las lidera, asegurando que nuestros productos no solo cumplan con las expectativas de nuestros consumidores, sino que las superen, ofreciendo soluciones de salud que realmente marcan la diferencia.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Las Áreas de Investigación Clave que sustentan nuestro trabajo son fundamentales para nuestra visión de un futuro donde la longevidad se acompañe de bienestar y calidad de vida. Estas áreas incluyen desde la investigación en biotecnología vegetal y la utilización de células troncales para regenerar tejidos, hasta el análisis de polimorfismos genéticos para personalizar las recomendaciones de salud. En <span style="color: #000;">PPG NUTRITIONAL</span>, cada uno de estos campos de investigación se entrelaza para crear una nueva generación de productos terapéuticos y alimentos procesados inteligentes, diseñados no solo para tratar síntomas, sino para abordar las causas profundas del envejecimiento y las enfermedades. Al explorar estas áreas, estamos construyendo las bases para una salud global más robusta, personalizada y accesible para todos.
</p>




<!-- Biotecnología Vegetal -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  8.1.1. Biotecnología Vegetal: Innovación Natural para la Salud
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  En <span style="color: #000;">PPG NUTRITIONAL</span>, estamos comprometidos con el aprovechamiento del poder de la naturaleza a través de la biotecnología vegetal, un campo en el que hemos realizado importantes avances. Nuestra investigación se centra en la clonación de células vegetales para obtener tejidos y órganos de plantas mediante el uso de bioreactores, una tecnología que no solo optimiza los procesos de producción, sino que también permite la obtención de grandes cantidades de metabolitos presentes en las células troncales vegetales. Estos metabolitos son compuestos bioactivos de gran valor que desempeñan un papel crucial en nuestras formulaciones, diseñadas para producir productos terapéuticos y alimentos inteligentes que benefician la salud de manera significativa.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  La clonación de células vegetales en bioreactores nos ofrece un control preciso sobre el crecimiento y la producción de estos tejidos, lo que resulta en una mayor eficiencia y calidad en la obtención de los ingredientes activos. Este enfoque nos permite cultivar células troncales vegetales que contienen metabolitos con propiedades únicas, los cuales son fundamentales para la estabilización del genoma y la protección contra el deterioro de órganos y tejidos. Al utilizar bioreactores, no solo podemos replicar de manera exacta las condiciones naturales en las que estas plantas producirían estos compuestos, sino que también podemos aumentar la producción a niveles industriales, asegurando un suministro constante y sostenible de estos valiosos metabolitos.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Los metabolitos obtenidos a través de esta tecnología son integrados en nuestras formulaciones para mejorar la integridad molecular del ADN, ARN, proteínas, lípidos y telómeros. Estos componentes son esenciales para mantener la salud celular y prevenir el envejecimiento prematuro, al ofrecer una defensa robusta contra los daños causados por el estrés oxidativo y otros factores que aceleran el deterioro de los tejidos. Al incorporar estos ingredientes activos en nuestros productos terapéuticos y alimentos inteligentes, estamos desarrollando soluciones que no solo tratan los síntomas del envejecimiento, sino que también abordan sus causas fundamentales, contribuyendo a una vida más larga y saludable.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  En resumen, la biotecnología vegetal en <span style="color: #000;">PPG NUTRITIONAL</span> nos permite aprovechar los avances en clonación y cultivo de células vegetales para crear productos innovadores que ofrecen beneficios de salud sin precedentes. Al combinar la ciencia de vanguardia con el poder de la naturaleza, estamos liderando un enfoque integral para la prevención del envejecimiento y la promoción de la longevidad con calidad, ofreciendo a nuestros consumidores soluciones que mejoran su bienestar y calidad de vida.
</p>



<!-- Genómica y Polimorfismos Genéticos -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  8.1.2. Genómica y Polimorfismos Genéticos: Personalización y Precisión en la Salud
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Una de las características más distintivas de <span style="color: #000;">PPG NUTRITIONAL</span> es nuestro enfoque pionero en la genómica y el análisis de polimorfismos genéticos, que se sitúa en el corazón de nuestra estrategia de investigación y desarrollo. Esta área de investigación avanzada nos brinda la capacidad de crear productos de salud y nutrición que no solo son eficaces, sino que están finamente sintonizados con las necesidades individuales de cada persona, según sus características genéticas específicas. A medida que comprendemos mejor cómo los factores genéticos influyen en la respuesta de cada individuo a los nutrientes y productos terapéuticos, podemos diseñar soluciones altamente personalizadas que optimizan la eficacia de nuestros productos.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  El análisis de polimorfismos genéticos nos permite identificar variaciones en el ADN que afectan cómo el cuerpo de una persona metaboliza ciertos nutrientes, reacciona a determinados tratamientos, y se predispone a ciertas enfermedades. Con esta información, podemos ajustar nuestras formulaciones para maximizar los beneficios y minimizar los riesgos, asegurando que cada producto que desarrollamos tenga un impacto positivo y tangible en la salud del consumidor. Esta capacidad para adaptar productos a la genética individual no solo mejora los resultados de salud, sino que también representa un avance significativo en la medicina personalizada, una tendencia creciente en la atención médica moderna.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Además, esta personalización basada en la genética responde directamente a una demanda cada vez mayor del mercado por soluciones de salud que sean más precisas y efectivas. Los consumidores de hoy buscan productos que no solo aborden problemas de salud de manera general, sino que lo hagan de manera específica y eficaz, tomando en cuenta sus necesidades individuales. Al integrar la genómica y el análisis de polimorfismos en nuestro proceso de desarrollo, <span style="color: #000;">PPG NUTRITIONAL</span> se posiciona como un líder en la creación de productos que no solo cumplen con estas expectativas, sino que también están en la vanguardia de la innovación en salud. Este enfoque no solo refuerza nuestra posición en el mercado, sino que también garantiza que estemos a la altura de las futuras demandas y desafíos en el campo de la salud personalizada.
</p>

<!-- Medicina Regenerativa -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  8.1.3. Medicina Regenerativa: Restauración y Renovación de la Salud
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  La medicina regenerativa está revolucionando nuestra comprensión del tratamiento de enfermedades y del envejecimiento, y en <span style="color: #000;">PPG NUTRITIONAL</span> estamos a la vanguardia de esta emocionante frontera. Nuestra investigación se centra en el uso de células troncales de plantas, que poseen una capacidad única para estimular la producción de células madre pluripotentes y dendríticas autólogas en el cuerpo humano. Estas células madre son fundamentales para la regeneración y reparación de tejidos y órganos, y su aplicación abre nuevas posibilidades en la medicina regenerativa, permitiendo no solo tratar, sino revertir el daño causado por enfermedades crónicas y los efectos del envejecimiento.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Las células troncales de plantas, al estar constituidas por activos botánicos específicos, tienen la capacidad de interactuar con los sistemas biológicos del cuerpo, desencadenando procesos de regeneración natural. Estas células vegetales actúan como catalizadores que promueven la producción de células madre pluripotentes, que son células con la capacidad de convertirse en cualquier tipo de célula en el cuerpo. Este proceso es esencial para la restauración de tejidos dañados, ya que las células madre pluripotentes pueden regenerar células específicas de un órgano o tejido, contribuyendo a la reparación efectiva de las áreas afectadas.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Además, la estimulación de células dendríticas autólogas, que juegan un papel crucial en la respuesta inmune, permite al cuerpo no solo regenerarse, sino también fortalecer sus defensas contra enfermedades. Esta doble acción de regeneración y fortalecimiento inmunológico es particularmente valiosa en el tratamiento de enfermedades crónicas, donde el cuerpo a menudo sufre de una capacidad reducida para repararse a sí mismo. Al fomentar la producción de estas células a través de ingredientes activos derivados de plantas, estamos desarrollando terapéuticos que no solo ralentizan el deterioro causado por el envejecimiento, sino que también tienen el potencial de revertirlo, revitalizando órganos y tejidos.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  La aplicación de células troncales de plantas en la medicina regenerativa es, por tanto, una de las áreas de investigación más prometedoras en <span style="color: #000;">PPG NUTRITIONAL</span>. Esta tecnología no solo impulsa el desarrollo de productos que promueven una recuperación más rápida, sino que también asegura que las personas puedan disfrutar de una vida más saludable y longeva. Nuestra dedicación a explorar y aprovechar el potencial de las células troncales de plantas subraya nuestro compromiso con la innovación y la excelencia en el campo de la salud, garantizando que nuestros productos no solo cumplan con las necesidades actuales, sino que también anticipen las demandas futuras en la medicina regenerativa.
</p>


<!-- Nutrición Personalizada -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  8.1.4. Nutrición Personalizada: Alimentos Inteligentes para un Futuro Saludable
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  En <span style="color: #000;">PPG NUTRITIONAL</span>, el análisis de polimorfismos genéticos desempeña un papel crucial en nuestra misión de liderar la nutrición personalizada. Este enfoque innovador nos permite desarrollar alimentos procesados inteligentes que no solo satisfacen las necesidades nutricionales generales, sino que se ajustan específicamente a la genética única de cada individuo, considerando también factores étnicos y de grupo poblacional. La capacidad de personalizar la nutrición en función del perfil genético abre nuevas posibilidades para optimizar la salud, prevenir enfermedades y mejorar el bienestar general de manera más efectiva que nunca.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  La importancia del análisis de polimorfismos genéticos radica en su capacidad para identificar variaciones en el ADN que pueden influir en cómo una persona metaboliza ciertos nutrientes, responde a dietas específicas o es susceptible a desarrollar ciertas enfermedades. Al comprender estas variaciones genéticas, podemos diseñar alimentos que no solo satisfagan las necesidades básicas de nutrientes, sino que también aborden de manera proactiva riesgos específicos de salud y maximicen los beneficios de cada componente alimenticio.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Nuestra estrategia actual y futura se centra en la creación de gamas de alimentos procesados inteligentes que se adapten a la diversidad genética de las poblaciones. Al integrar datos genómicos con nuestras capacidades de I+D, somos capaces de producir alimentos que, por ejemplo, contengan niveles específicos de micronutrientes que beneficien a personas con predisposición genética a deficiencias específicas, o que incluyan ingredientes que mejoren la salud cardiovascular en aquellos con un mayor riesgo genético de enfermedades del corazón. Esta personalización va más allá de una dieta equilibrada; es una intervención dirigida que optimiza la salud individual y previene enfermedades antes de que se manifiesten.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  En un mercado donde la personalización es cada vez más demandada, nuestra capacidad para ofrecer productos adaptados a las necesidades genéticas específicas de nuestros consumidores nos posiciona como un líder en la industria. Este diferenciador clave no solo nos permite satisfacer las expectativas actuales de los consumidores en cuanto a salud y bienestar, sino que también nos prepara para responder a las tendencias futuras en la personalización de la alimentación. <span style="color: #000;">PPG NUTRITIONAL</span> está, por tanto, no solo ofreciendo productos, sino soluciones nutricionales innovadoras que empoderan a las personas para vivir una vida más saludable y prolongada, alineada con su genética única.
</p>

<!-- Inteligencia Artificial y Análisis de Datos -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  8.1.5. Inteligencia Artificial y Análisis de Datos: Eficacia y Eficiencia en I+D
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  En <span style="color: #000;">PPG NUTRITIONAL</span>, estamos a la vanguardia de la innovación tecnológica al integrar herramientas avanzadas como la genómica, proteómica, química espacial y datos de la evolución biológica con la inteligencia artificial (IA) y el análisis de grandes volúmenes de datos en nuestros procesos de investigación y desarrollo (I+D). Esta integración permite a nuestra compañía abordar los desafíos de la salud con una precisión y eficacia sin precedentes, transformando la forma en que concebimos, desarrollamos y optimizamos nuestros productos terapéuticos y nutricionales.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  La genómica y la proteómica son disciplinas clave que nos permiten comprender los fundamentos biológicos y moleculares del cuerpo humano. Al analizar secuencias genéticas y patrones de expresión de proteínas, podemos identificar los mecanismos que subyacen a diversas enfermedades y condiciones relacionadas con el envejecimiento. Estos conocimientos se convierten en la base para el diseño de productos que no solo abordan los síntomas, sino que también actúan a nivel molecular para prevenir y revertir los efectos del envejecimiento y otros procesos patológicos.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Por su parte, la química espacial y los datos de la evolución biológica nos proporcionan una visión profunda de cómo los compuestos químicos interactúan con los sistemas biológicos en tres dimensiones y a lo largo del tiempo. Estos datos son fundamentales para desarrollar formulaciones que se dirigen con precisión a órganos y tejidos específicos, maximizando su eficacia terapéutica. Al integrar estas disciplinas con la IA, somos capaces de analizar y correlacionar grandes volúmenes de datos genéticos, proteómicos, químicos y biológicos con datos preclínicos y clínicos, optimizando así el diseño de nuestros productos.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  La IA desempeña un papel crucial en nuestro enfoque de I+D, permitiéndonos identificar patrones y tendencias que de otro modo pasarían desapercibidos. Esta capacidad para detectar correlaciones complejas nos guía en la toma de decisiones, ayudándonos a priorizar las líneas de investigación más prometedoras y a personalizar las recomendaciones de salud de acuerdo con las necesidades individuales de cada persona. Al reducir significativamente el tiempo y los costos asociados con el desarrollo de productos, la IA también aumenta la probabilidad de éxito en el mercado, permitiéndonos lanzar productos innovadores que responden a las necesidades de salud emergentes con mayor rapidez y eficacia.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  En resumen, la combinación de estas herramientas avanzadas nos permite no solo desarrollar productos más efectivos, sino también personalizar las soluciones de salud de manera que cada persona reciba el tratamiento o suplemento más adecuado para su perfil genético y biológico. Esta precisión en el diseño y recomendación de productos es lo que diferencia a <span style="color: #000;">PPG NUTRITIONAL</span> en un mercado global cada vez más competitivo, asegurando que nuestras innovaciones no solo mejoren la calidad de vida de las personas, sino que también estén respaldadas por la ciencia más avanzada disponible.
</p>




<!-- Tecnología de Formulación y Producción -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  8.1.6. Tecnología de Formulación y Producción: Innovación en la Cadena de Valor
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  En <span style="color: #000;">“PPG NUTRITIONAL”</span>, hemos establecido una sólida base en el desarrollo de tecnologías avanzadas de formulación y producción, un pilar esencial de nuestra estrategia global. Nuestro enfoque en la innovación nos ha permitido obtener patentes de alto impacto que marcan una diferencia significativa en la formulación de nuestros productos terapéuticos y nutricionales. Estas patentes nos han capacitado para mejorar la biodisponibilidad, un aspecto crítico que determina la cantidad de un ingrediente activo que realmente llega al torrente sanguíneo y, en última instancia, a las células donde ejerce su efecto beneficioso.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Uno de los avances más notables en nuestros procesos es la capacidad para dirigir las formulaciones de manera precisa a tejidos y órganos específicos. Esta capacidad es clave en la maximización de la eficacia terapéutica de nuestros productos, ya que permite que los ingredientes activos lleguen directamente a las áreas donde se necesitan, minimizando los efectos secundarios y aumentando el impacto positivo en la salud del paciente. Esta estrategia de direccionamiento de nutrientes y compuestos bioactivos no solo mejora la respuesta del organismo, sino que también incrementa el valor terapéutico de nuestros suplementos nutricionales y alimentos procesados.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Además, <span style="color: #000;">“PPG NUTRITIONAL”</span> se ha comprometido a desarrollar métodos y sistemas de transporte de sustancias que revolucionan la manera en que nuestros ingredientes activos son entregados dentro del cuerpo. Al integrar estos sistemas en nuestras líneas de producción, logramos no solo mejorar la estabilidad de los ingredientes —lo que garantiza que permanezcan efectivos durante toda su vida útil— sino también aumentar su biodisponibilidad y eficacia. Esta combinación de estabilidad y eficiencia permite que nuestros productos mantengan su potencia desde el momento de su fabricación hasta su consumo, ofreciendo a los usuarios finales un nivel de calidad y resultados incomparable.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Nuestro enfoque en la innovación no se detiene en la investigación y desarrollo; se extiende a cada etapa de la cadena de valor, asegurando que nuestras mejoras tecnológicas se traduzcan en procesos de producción más eficientes y sostenibles. Esta capacidad para innovar continuamente nos permite no solo satisfacer la demanda actual, sino también anticipar las necesidades del mercado global en crecimiento. En <span style="color: #000;">“PPG NUTRITIONAL”</span>, cada avance tecnológico se convierte en un testimonio de nuestro compromiso con la excelencia, impulsando nuestra misión de ofrecer productos que realmente marcan una diferencia en la vida de las personas.
</p>

<!-- Salud y Envejecimiento -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  8.1.7. Salud y Envejecimiento: Prolongando la Vida con Calidad
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  El envejecimiento es un proceso biológico complejo que afecta a todos los seres humanos, presentando uno de los mayores desafíos para la salud global en el siglo XXI. A medida que la población mundial envejece, el número de personas que enfrentan enfermedades relacionadas con la edad, como enfermedades cardiovasculares, neurodegenerativas y trastornos metabólicos, aumenta de manera exponencial. Sin embargo, en <span style="color: #000;">"PPG NUTRITIONAL"</span> hemos adoptado un enfoque pionero para abordar este desafío, centrándonos no solo en tratar las enfermedades asociadas con la edad, sino también en prevenir y, lo que es aún más revolucionario, revertir los efectos del envejecimiento para prolongar la vida con calidad.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Nuestro enfoque en el estudio de los procesos biológicos y moleculares del envejecimiento nos ha permitido identificar los mecanismos subyacentes que contribuyen al deterioro de los órganos y tejidos a lo largo del tiempo. Mediante la investigación avanzada en áreas como la genómica, la biotecnología vegetal, y la medicina regenerativa, hemos desarrollado una línea de productos que actúan a nivel celular y molecular para mantener la integridad del ADN, ARN, proteínas, lípidos y telómeros. Estas estructuras son fundamentales para el mantenimiento de la juventud celular y la prevención del daño oxidativo y la inflamación, dos factores clave en el envejecimiento.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Una de nuestras áreas más innovadoras es la utilización de células troncales vegetales en la formulación de suplementos nutricionales y terapias regenerativas. Estas células, derivadas de plantas seleccionadas por su capacidad para resistir condiciones extremas, contienen metabolitos únicos que favorecen la reparación y regeneración celular en el cuerpo humano. Al incorporar estos ingredientes en nuestros productos, no solo tratamos los síntomas del envejecimiento, sino que también estimulamos los procesos naturales de renovación y restauración celular, contribuyendo a una salud óptima durante más tiempo.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Además, en <span style="color: #000;">"PPG NUTRITIONAL"</span> integramos la inteligencia artificial y el análisis de grandes volúmenes de datos para personalizar las intervenciones antienvejecimiento. La IA nos permite analizar patrones genéticos y fisiológicos individuales, optimizando así las recomendaciones de productos y tratamientos para cada persona. Esto no solo mejora la eficacia de nuestros productos, sino que también ofrece a nuestros clientes una experiencia de salud verdaderamente personalizada.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  En resumen, nuestro compromiso con la investigación del envejecimiento y el desarrollo de soluciones que previenen y revierten sus efectos es un reflejo de nuestra visión para el futuro: un mundo donde la longevidad no solo se prolongue, sino que esté acompañada de una alta calidad de vida. Con nuestros productos, <span style="color: #000;">"PPG NUTRITIONAL"</span> está redefiniendo lo que significa envejecer, ofreciendo a las personas la oportunidad de vivir más tiempo, y con mayor bienestar, en un cuerpo saludable y rejuvenecido.
</p>




<!-- Conclusión: Inversión en el Futuro de la Salud Global -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  8.1.8. Conclusión: Inversión en el Futuro de la Salud Global
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Las Áreas de Investigación Clave de <span style="color: #000;">PPG NUTRITIONAL</span> no solo son un reflejo de nuestras fortalezas actuales, sino que también encapsulan nuestra ambiciosa visión de un futuro donde la salud global esté al alcance de todos. Al combinar disciplinas avanzadas como la biotecnología vegetal, la genómica, la medicina regenerativa, la nutrición personalizada, la inteligencia artificial y tecnologías de producción de vanguardia, hemos creado una sinergia que nos posiciona para liderar la próxima generación de innovaciones en el campo de la salud. Nuestra capacidad para integrar estas tecnologías de manera cohesiva nos permite desarrollar productos que no solo tratan y previenen enfermedades, sino que también abordan los desafíos más profundos del envejecimiento, promoviendo una vida más larga y de mayor calidad.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <span style="color: #000;">PPG NUTRITIONAL</span> está en la cúspide de una revolución en la salud, donde los tratamientos y la nutrición se personalizan de acuerdo con las necesidades individuales, optimizando los resultados de manera que era inimaginable hace solo unos años. Invertir en <span style="color: #000;">PPG NUTRITIONAL</span> es apostar por un futuro donde la longevidad se acompaña de bienestar, donde las enfermedades crónicas pueden ser gestionadas de manera proactiva y donde la calidad de vida no se sacrifica en el camino hacia una mayor esperanza de vida. Estamos comprometidos en transformar la salud global con soluciones que no solo impactan de manera tangible y significativa en la vida de las personas, sino que también redefinen lo que es posible en la ciencia y la medicina. <span style="color: #000;">PPG NUTRITIONAL</span> no es solo una inversión en una empresa, es una inversión en el futuro de la humanidad.
</p>

<!-- Proyectos de Investigaciones, Desarrollo y Evaluaciones -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  9. PROYECTOS DE INVESTIGACIONES, DESARROLLO Y EVALUACIONES DE PRODUCTOS ACTUALMENTE EN EL MERCADO
</h3>

<!-- Cribados de alto rendimiento -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  9.1. Cribados de alto rendimiento como método científico de predicción precisa
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Las investigaciones en las fases de desarrollo comenzaron hace más de 30 años en que han pasado por diferentes fases y etapas de evaluaciones científicas, como se muestra en anexo en la Figura 1, con cribados de alto rendimiento que involucran las etapas de diseño de las estructuras químicas (moléculas) de los diferentes ingredientes activos en 3D; determinaciones de las propiedades químicas-físicas; y cálculos de los grados de libertad, o rotación, que presentan cada uno de los átomos de los diferentes compuestos químicos que conforman las moléculas, como entes independientes, y como parte de una estructura química completa.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  Los diseños de las moléculas en 3D, determinaciones de las propiedades químicas-físicas y los cálculos de los grados de libertad se efectúan con el auxilio de herramientas informáticas reconocidas por las agencias regulatorias (FDA y otras) como válidas para usar con estos fines experimentales. A partir de la determinación de estas aproximaciones entonces pasamos a ensayar, analizar y comparar las propiedades intrínsecas de cada una de estas moléculas, con el auxilio de modelos matemáticos, con el propósito de generar patrones y modelos a partir de series de compuestos o estructuras químicas usadas como entrenamientos y ajustes de los patrones o modelos.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  En este caso en específico el modelo utiliza moléculas de las que previamente conocemos sus acciones terapéuticas y nutricionales porque ya han sido demostradas y comprobadas en estudios experimentales preclínicos y clínicos. Al culminar los ajustes de los modelos o patrones de las estructuras moleculares de las series de entrenamientos, entonces empleando las mismas herramientas se continúa con la evaluación de las estructuras químicas de los ingredientes activos que serán objeto del estudio definitivo; es decir, se utilizan los patrones y modelos desarrollados con las moléculas de las series de entrenamiento para encontrar nuevas acciones nutricionales y terapéuticas a moléculas de interés que hemos seleccionado porque hasta el presente no han sido estudiadas.
</p>

<!-- Referencias -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Referencias
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Yovani Marrero-Poncea, & Juan A. Castillo-Garita: 3D-chiral atom, atom-type, and total non-stochastic and stochastic molecular linear indices and their applications to central chirality codification. Journal of Computer-Aided Molecular Design (2005) 19: 369–383 DOI 10.1007/s10822-005-7575-8.</li>
  <li>Oscar Martínez-Santiago, O.; Marrero-Ponce, Y.; Vivas-Reyes, R.; Orozco Ugarriza, M.E.; Hurtado-Rodríguez, E.; Martínez-López, Y.; Torres, F.J.; Zambrano, C.; Pham-The, H. Higher Order and Mixed Discrete Derivatives Like a Novel Graph-Theoretical Invariant for Generating New Molecular Descriptors. Curr. Topics Med. Chem. 2019, 19, 1-13. DOI: 10.2174/1568026619666190510093651. ISSN: 1568-0266 and IF: 3.862.</li>
  <li>Yovani Marrero-Ponce, Eugenio R. Martínez-Albelo, Gerardo M. Casañola, Martín, et alt: Bond-based linear indices of the non-stochastic and stochastic edge-adjacency matrix. 1. Theory and modeling of ChemPhys properties of organic molecules. Mol Divers (2010) 14:731–753 DOI 10.1007/s11030-009-9201-5.</li>
  <li>Garcia-Jacas, C. R.; Cabrera-Leyva, L.; Marrero-Ponce, Y.; Suarez-Lezcano, J.; Cortes-Guzman, F.; Pupo-Merino, M.; Vivas-Reyes, V. Choquet integral-based fuzzy molecular characterizations: when global definitions are computed from the dependency among atom/bond contributions (LOVIs/LOEIs). J. Cheminform. 2018, 10:51, DOI: https://doi.org/10.1186/s13321-018-0306-7. ISSN: 1758-2946 and IF: 4.547.</li>
  <li>Yovani Marrero Ponce and Francisco Torrens: Novel 2D TOMOCOMD-CARDD molecular descriptors: atom-based stochastic and non-stochastic bilinear indices and their QSPR applications: Journal of mathematical chemistry, volume 44, pages: 650–673 (2008).</li>
</ul>



<p style="margin-bottom: 18px; text-align: justify;">
  Al culminar los análisis discriminantes de las series de entrenamientos y definitivas; entonces se efectúa la optimización de los modelos que son consistentes con las correlaciones de los patrones obtenidos entre las series de entrenamientos con las series definitivas. Es decir, aquellas estructuras químicas o ingredientes activos que el modelo asume poseen una alta probabilidad para ser usados como ingredientes nutricionales y terapéuticos; son seleccionadas para pasar a estudiar las interacciones de estas moléculas o estructuras químicas de los ingredientes activos con las proteínas que conforman el proteoma humano.
</p>

<p style="margin-bottom: 18px; text-align: justify;">
  En la práctica, estos resultados posibilitan dar un salto hacia niveles superiores del conocimiento científico que permiten alcanzar precisiones, cuantitativas y cualitativas, que hasta el presente eran imposible de lograr en este campo de las ciencias debido a las limitaciones tecnológicas. Una de las limitaciones tecnológicas superadas está directamente relacionada con la creación de una herramienta computacional que sirve de interfase para conectar, transferir e intercambiar la información íntegra de las moléculas, previamente seleccionadas y diseñadas en 3D, con bases de datos que contienen el proteoma humano en 3D con certificados internacionales que avalan la validez del uso de estas datas.
</p>

<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Referencias
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Barigye, S. J. and Marrero-Ponce, Y. Digital Communication and Chemical Structure Codification. In Encyclopedia of Complexity and Systems Science. 2016, R.A. Meyers (ed.), (Section: Complexity in Computational Chemistry, Chapter 10). Springer Science+Business Media New York. DOI: 10.1007/978-3-642-27737-5_625-2, ISBN: 978-3-642-27737-5.</li>
  <li>García-Jacas, C.; Marrero-Ponce, Y.; Acevedo-Martínez, L.; Barigye, S. J.; Valdes Martinez, J. R.; Contreras-Torres, E. QuBiLS-MIDAS: A Parallel Free-Software for Molecular Descriptors Computation Based on Multilinear Algebraic Maps. J. Comput. Chem. 2014, 35, 1395–1409. DOI: 10.1002/jcc.23640, ISSN: 1096-987X and IF: 3.601.</li>
  <li>Barigye, S. J. and Marrero-Ponce, Y. Digital Communication and Chemical Structure Codification. In Encyclopedia of Complexity and Systems Science. 2016, R.A. Meyers (ed.), (Section: Complexity in Computational Chemistry, Chapter 10). Springer Science+Business Media New York. DOI: 10.1007/978-3-642-27737-5_625-2, ISBN: 978-3-642-27737-5.</li>
  <li>Marrero-Ponce, Y.; Castillo-Garit, J.A.; Olazabal, E.; Serrano, H. S.; Morales, A.; Castañedo, N.; Ibarra-Velarde, F.; Huesca-Guillen, A.; Jorge, E.; Sánchez, A. M.; Torrens, F.; Castro, E. A. Atom, Atom-Type and Total Molecular Linear Indices as a Promising Approach for Bioorganic & Medicinal Chemistry: Theoretical and Experimental Assessment of a Novel Method 10 for Virtual Screening and Rational Design of New Lead Anthelmintic. Bioorg. Med. Chem. 2005, 13, 1005-1020. DOI: 10.1016/j.bmc.2004.11.040, ISSN: 0968-0896 and IF: 3.205.</li>
  <li>Marrero-Ponce, Y.; Huesca-Guillen, A.; Ibarra-Velarde, F. Quadratic Indices of the “Molecular Pseudograph’s Atom Adjacency Matrix” and Their Stochastic Forms: A Novel Approach for Virtual Screening and in silico Discovery of New Lead Paramphistomicide Drugs-like Compounds. J. Theor. Chem. (THEOCHEM). 2005, 717, 67-79. (Currently known as Computational and Theoretical Chemistry) DOI: 10.1016/j.theochem.2004.11.027, ISSN: 2210-271X and IF: 1.369.</li>
  <li>Marrero-Ponce, Y.; Medina-Marrero, R.; Castillo-Garit, J.A.; Romero-Zaldivar, V.; Torrens, F.; Castro, E. A. Protein Linear Indices of the “Macromolecular Pseudograph’s -Carbon Atom Adjacency Matrix” in Bioinformatics. Part 1. Prediction of Protein Stability Effects of a Complete Set of Alanine Substitutions in Arc Repressor. Bioorg. Med. Chem. 2005, 13, 3003-3015. DOI: 10.1016/j.bmc.2005.01.062, ISSN: 0968-0896 and IF: 3.205.</li>
</ul>

<p style="margin-bottom: 18px; text-align: justify;">
  Superada esta limitación tecnológica; entonces es posible ejecutar interacciones entre la interfase y la base de datos del proteoma humano en 3D que permite ejecutar estudios de Docking inverso y Docking prospectivo ciego con el propósito de evaluar o comprobar cuáles de las potenciales moléculas son potencialmente útiles para usos nutricionales o terapéuticos. El Docking inverso se basa en el manejo de referencias de todas las proteínas humanas, reportadas con estructura 3D, en banco del proteoma humano con el propósito de corroborar las posibles actividades mediadas por las vías bioquímicas que explican las acciones previamente reportadas en estudios experimentales (in vitro/in vivo preclínicos y clínicos) y al mismo tiempo que nos permiten determinar y efectuar propuestas de nuevos mecanismos moleculares que justifican dichas acciones fenotípicas.
</p>

<p style="margin-bottom: 18px; text-align: justify;">
  El uso del Docking inverso también permite determinar nuevas acciones nutricionales, terapéuticas o tóxicas que no han sido demostradas experimentalmente. En este caso en específico, de esta patente, los estudios de Docking inverso son utilizados para descubrir nuevas acciones y, consecuentemente, asignar nuevos usos, además de los ya descubiertos, a partir del estudio del interactoma de policosanoles, sus congéneres y el resto de los ingredientes activos porque es posible conocer cómo y en qué forma se generan modificaciones estructurales y funcionales de las proteínas a partir de las uniones, formaciones de complejos químico-biológicos e interacción de estos compuestos con los receptores de las diferentes vías de señalización con cada una de las proteínas que conforman el proteoma humano.
</p>

<p style="margin-bottom: 18px; text-align: justify;">
  Es importante destacar que, debido a la variedad en la composición cualitativa y cuantitativa de los policosanoles, dependiendo de las fuentes de obtención, con los estudios de Docking inverso es posible determinar cuáles policosanoles son los que realmente presentan actividad biológica con la posibilidad y capacidad de prevenir, controlar, tratar y curar síndromes, alteraciones y enfermedades.
</p>

<p style="margin-bottom: 18px; text-align: justify;">
  El Docking prospectivo ciego va dirigido a estudiar cavidades específicas de las principales proteínas targets descubiertas en la etapa del estudio de Docking inverso con el propósito de confirmar y corroborar las vías bioquímicas de actividad/toxicidad y la calibración de funciones de puntuación y generación de estructura 3D de las dianas que no tengan reportado acciones al interactuar con el proteoma humano para los compuestos estudiados.
</p>

<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Referencias
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Cubillán, N.; Marrero-Ponce, Y.; Ariza-Rico, H.; Barigye, S. J.; García-Jacas, C. R.; Valdes-Martini, J. R.; Alvarado, Y. Novel global and local 3D atom-based linear descriptors of the Minkowski distance matrix: theory, diversity–variability analysis and QSPR applications. J Math Chem. 2015, 53, 2028-2064. DOI 10.1007/s10910-015-0533-3, ISSN: 0259-9791 and IF: 1.27.</li>
  <li>Ruiz-Blanco, Y. B.; Paz, W.; Green, J.; Marrero-Ponce, Y. PROTDCAL: A Free Software for Computing Numerical Descriptors for Sequences and 3D-Structures of Proteins. BMC Bioinformtics. 2015, 16, 162 DOI: 10.1186/s12859-015-0586-0, ISSN: 1471-2105 and IF: 2.67.</li>
  <li>Le-Thi-Thu, H.; Casañola-Martín, G. M.; Marrero-Ponce, Y.; Rescigno, A.; Abad, C.; Tareq Hassan Khan, M. A Rational Workflow for Sequential Virtual Screening of Chemical Libraries on Searching for New Tyrosinase Inhibitors. Curr. Top. Med. Chem. 2014, 14, 1473 – 1485. DOI: 10.2174/1568026614666140523120336, ISSN: 1568-0266 and IF: 3.862.</li>
  <li>Yovani Marrero-Ponce, Y.; García-Jacas, C. R.; Barigye, S. J.; Valdés-Martiní, J. R.; Rivera-Borroto, O. M.; Pino-Urias, R. W.; Cubillán, N.; Alvarado, Y. J. Le-Thi-Thu, H. Optimum Search Strategies or Novel 3D Molecular Descriptors: Is there a Stalemate? Curr. Bioinform, 2015, 10, 533-564. DOI 10.2174/1574893610666151008011457, ISSN: 1574-8936 and IF: 1.045.</li>
  <li>García-Jacas, C. R.; Aguilera-Mendoza, L.; Gonzalez-Pérez, R.; Marrero-Ponce, Y.; Acevedo-Martínez, L.; Barigye, S. J.; Avdeenko, T. Multi-Server Approach for High-Throughput Molecular Descriptors Calculation based on Multi-Linear Algebraic Maps. Mol. Inf. 2015, 34, 60 – 69. DOI: 10.1002/minf.201400086, 1868-1751 and IF: 2.013.</li>
  <li>Marrero-Ponce, Y.; Castillo-Garit, J.A.; Olazabal, E.; Serrano, H. S.; Morales, A.; Castañedo, N.; Ibarra-Velarde, F.; Huesca-Guillen, A.; Jorge, E.; del Valle, A.; Torrens, F.; Castro, E. A. TOMOCOMD-CARDD, a Novel Approach for Computer-Aided “Rational” Drug Design: I. Theoretical and Experimental Assessment of a Promising Method for Computational Screening and in silico Design of New Anthelmintic Compounds. J. Comput. Aided Mol. Des. 2004, 18, 615-634. DOI: 10.1007/s10822-004-5171-y, ISSN: 0920-654X and IF: 2.782.</li>
  <li>Yoan Martínez-López, Yaile Caballero, Stephen J. Barigye, Marrero-Ponce, Y.; Reisel Millán-Cabrera, Julio Madera, Francisco Torrens, Juan A. Castillo-Garit. State of the Art Review and Report of New Tool for Drug Discovery. Curr. Top. Med. Chem. 2017, 17, 2957-2976. DOI: 10.2174/1568026617666170821123856, ISSN: 1568-0266 and IF: 3.862.</li>
</ul>



<p style="margin-bottom: 18px; text-align: justify;">
  Sobrepasada esta etapa, continuamos con las evaluaciones preclínicas en diferentes modelos biológicos en las que, previamente a la ejecución de estas nos auxiliamos de modelos teóricos que estudian la Relación que tiene la Estructura Química con la Actividad Biológica (QSAR) de las moléculas a ensayar. Los QSAR son herramientas validadas para predecir y determinar el punto final de perfiles prospectivos toxicológicos y farmacocinéticos (ejemplo: DL50, hepatotoxicidad); las disrupciones endocrinas y metabólicas; y otros efectos tóxicos que en su conjunto son ocasionados por interacciones físicas y biológicas en los complejos ligando-proteínas que al ser analizadas en detalles se puedan determinar con un alto nivel de certeza el perfil de seguridad de los productos para definir su uso como compuestos nutricionales o terapéuticos en forma segura.
</p>

<p style="margin-bottom: 18px; text-align: justify;">
  Los resultados de los ensayos preclínicos de seguridad toxicológica, efectividad terapéutica y los nutricionales son corroborados mediante protocolos de estudios clínicos y al mismo tiempo comprobados a partir de la correlación que existe entre los resultados de los estudios realizados en el Docking prospectivo ciego con aquellos que son coincidentes con reportes documentados y comprobados con cientos de ensayos clínicos que demuestran las acciones de los compuestos estudiados. Todo lo cual, a la postre minimizan el tiempo de evaluación de los ingredientes activos con un sustancial ahorro de recursos financieros.
</p>

<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Referencias
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>García-Jacas, C. R.; Marrero-Ponce, Y.; Cortes-Guzman, F.; Suarez-Lezcano, J.; Martinez Rios, F.; García-Gonzalez, L:A; Pupo-Merino, M.; Martinez-Mayorga, K. Enhancing Acute Oral Toxicity Predictions by using Consensus Modeling and Algebraic Form-Based 0D-to-2D Molecular Encodes. Chem. Res. Toxicol. 2019, 32, 1178-1192. DOI: <a href="https://doi.org/10.1021/acs.chemrestox.9b00011" target="_blank">https://doi.org/10.1021/acs.chemrestox.9b00011</a>. ISSN: 0893-228X, IF: 4.190, City: Washington, DC, Country: USA and URL: <a href="http://pubs.acs.org/journal/crtoec" target="_blank">http://pubs.acs.org/journal/crtoec</a></li>
  <li>Marrero-Ponce, Y. Total and Local (Atom and Atom-Type) Molecular Quadratic Indices: Significance-Interpretation, Comparison to Other Molecular Descriptors and QSPR/QSAR Applications. Bioorg. Med. Chem. 2004, 12, 6351-6369. DOI: 10.1016/j.bmc.2004.09.034, ISSN: 0968-0896 and IF: 3.205.</li>
  <li>Marrero-Ponce, Y. Linear Indices of the “Molecular Pseudograph’s Atom Adjacency Matrix”: Definition, Significance-Interpretation and Application to QSAR Analysis of Flavone Derivatives as HIV-1 Integrase Inhibitors. J. Chem. Inf. Comput. Sci. 2004, 44, 2010-2026. DOI: 10.1021/ci049950k, ISSN: 1549-9596 and IF: 4.068.</li>
  <li>Marrero-Ponce, Y.; Contreras-Torres, E.; García-Jacas, C. R.; Barigye, S. J.; Cubillán, N.; Alvarado, Y. J. Novel 3D Bio-Macromolecular Bilinear Descriptors for Protein Science: Predicting Protein Structural Classes. J. Theoret. Biol. 2015, 374, 125–137. DOI: <a href="http://dx.doi.org/10.1016/j.jtbi.2015.03.026" target="_blank">http://dx.doi.org/10.1016/j.jtbi.2015.03.026</a>, ISSN: 0022-5193 and IF: 2.394.</li>
</ul>

<p style="margin-bottom: 18px; text-align: justify;">
  Al finalizar los estudios enmarcados en la ruta crítica; entonces es posible seleccionar un importante los ingredientes activos vegetales, vitaminas, minerales, lípidos y aminoácidos y policosanoles puros y sus congéneres que al combinarse con los diferentes azúcares no centrifugados y otros ingredientes activos, han demostrado tener la capacidad de complementar, corregir o modular los fallos de los procesos biológicos que están implicados en el desarrollo, progresión y establecimiento de síndromes, alteraciones y enfermedades en animales y humanos.
</p>

<p style="margin-bottom: 18px; text-align: justify;">
  El resultado final se traduce en la factibilidad y posibilidades de desarrollar gamas de formulaciones terapéuticas, nutracéuticos, alimentos procesados y cosmecéuticos que tienen la función de prevenir, controlar, tratar y curar síndromes, alteraciones y enfermedades asociadas a las disrupciones nutricionales que ocasionan el consumo de azúcares centrifugados, refinados y artificiales que actualmente se comercializan y son responsables de un incremento sostenido del deterioro y disminución de la expectativa de vida con calidad en proporciones cada vez más elevadas.
</p>

<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Referencias
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Marrero-Ponce, Y.; Medina-Marrero, R.; Torrens, F.; Martinez, Y.; Romero-Zaldivar, V.; Castro, E. A. Atom, Atom-type, and Total Non-Stochastic and Stochastic Quadratic Fingerprints: A promising approach for modeling of antibacterial activity. Bioorg. Med. Chem. 2005, 13, 2881-2899. DOI: 10.1016/j.bmc.2005.02.015, ISSN: 0968-0896 and IF: 3.205.</li>
  <li>Marrero-Ponce, Y.; Iyarreta, M.; Montero, A.; Romero, C.; Brandt, C. A.; Ávila, P. E.; Kirchgatter, K. A.; Machado, Y. Ligand-Based Virtual Screening and in silico Design of New Antimalarial Compounds Using Non-Stochastic and Stochastic Total and Atom-type Quadratic Maps. J. Chem. Inf. Comput. Sci. 2005, 45, 1082-1100. DOI: 10.1021/ci050085t, ISSN: 1549-9596 and IF: 4.068.</li>
  <li>Casañola-Martin, G. M.; Le-Thi-Thu, H.; Pérez-Giménez, F.; Marrero-Ponce, Y.; Merino Sanjuán, M.; Abad, A.; González-Díaz, H. Multi-output model with Box–Jenkins operators of linear indices to predict multi-target inhibitors of ubiquitin–proteasome pathway. Mol Divers, 2015, 19, 347-356. DOI: 10.1007/s11030-015-9571-9, ISSN: 1381-1991 and IF: 2.544.</li>
  <li>Marrero-Ponce, Y.; Casañola-Martín, G. M.; Tareq Hassan Khan, M.; Torrens, F.; Rescigno, A.; Abad, C. Ligand-Based Computer-Aided Discovery of Tyrosinase Inhibitors. Applications of the TOMOCOMD-CARDD Method to the Elucidation of New Compounds. Curr. Pharm. Des. 2010,16, 2601-2624. DOI: 10.2174/138161210792389216, ISSN: 1381-6128 and IF: 3.555.</li>
  <li>Castillo-Garit, C. G.; Abad, C.; Rodríguez-Borges, J. E.; Marrero-Ponce, Y.; Torrens, F. A Review of QSAR studies to Discover New Drug-like Compounds Actives against Leishmaniasis and Trypanosomiasis. Curr. Top. Med. Chem. 2012, 12, 852-865. DOI: 10.2174/156802612800166756, ISSN: 1568-0266 and IF: 3.862.</li>
</ul>

<p style="margin-bottom: 18px; text-align: justify;">
  TOXICOLOGÍA AGUDA EN RATAS DE LAS FORMULACIONES EL método que se utiliza permite clasificar la toxicidad aguda de la sustancia evaluada al tiempo que se emplea un reducido número de animales (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Por tanto, el objetivo fue evaluar la toxicidad oral por dosis únicas de las formulaciones descritas para desarrollar los productos a base de azúcar no centrifugada combinado con vitaminas, minerales e ingredientes activos, en ratas utilizando el método de las Clases (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method).
</p>



<!-- MATERIALES Y MÉTODOS -->
<h2 style="font-size: 24px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  MATERIALES Y MÉTODOS
</h2>

<!-- Animales -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Animales
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Se emplearon ratas Sprague Dawley, suministradas por el bioterio de la Facultad de Medicina de la UNAM, México, adultos jóvenes de 6-8 semanas, de ambos sexos, cuyo peso corporal oscilaba entre 200-250 g al inicio del estudio. Se utilizó esta especie roedora por ser la más empleada en los estudios agudos que fueron mantenidos en instalaciones habilitadas en el Laboraorio LACHE de Irapuato, Guanajuato, México. Los animales se adaptaron durante siete días a las condiciones del laboratorio: temperatura 20-25 ºC, humedad entre 50-70 % y ciclos de luz- oscuridad de 12 horas. El alimento que se les administró durante toda la experiencia fue pienso estándar para esta especie suministrado por el Bioterio de la Universidad de Medicina de la UNAM, México. El acceso al agua y al alimento fue ad libitum. Toda la manipulación de los animales se realizó de acuerdo con los principios éticos para el uso de los animales de Laboratorio recomendados en los lineamientos internacionales y en la República Mexicana, plasmados en los Procedimientos Normalizados de Trabajo establecidos en el Centro de Investigación. El protocolo de aprobación por el Comité de ética para el trabajo con animales de experimentación fue el 025/2017.
</p>

<!-- Sustancias de ensayo -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Sustancias de ensayo
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Las sustancias de ensayo fueron las 13 formulaciones de tabletas descritas en el ejemplo la línea PPG PLUS Se realizó una administración única mediante intubación gástrica, en ayunas, en el horario de la mañana. Se empleó la vía oral por ser la que coincide con la utilizada en la terapéutica. Además, esta vía es la recomendable en el caso de productos a administrar por vía oral en que no se conozcan todos los aspectos de su farmacocinética.
</p>

<!-- Grupos experimentales -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Grupos experimentales
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Teniendo en cuenta evaluaciones toxicológicas que se han realizado a cada uno de los productos naturales utilizados en estas formulaciones en las cuales se han utilizado determinados niveles de dosis sin que se haya manifestado ningún cuadro clínico indicativo de daño inducido por la sustancia, y las características propias de este método experimental se inició el estudio por la mayor dosis recomendada para este ensayo (ensayo límite). Este método parte del concepto de un uso escalonado de dosis a partir de una dosis de partida, que en este caso fue de 2000 mg/kg en machos y en hembras (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Se distribuyeron los animales en dos grupos experimentales/sexo de tres animales cada uno. Un grupo recibió cada formulado (2000 mg/kg) y el otro, volúmenes equivalentes del vehículo: disolución de NaCl (0,9 %).
</p>

<!-- Variables -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Variables
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Al realizar la administración de la sustancia de ensayo se observaron los animales cada una hora las primeras cuatro horas, luego cada cuatro horas hasta las 12 horas de la administración (primer día). A partir de las 24 h de la administración las observaciones se realizaron dos veces al día hasta completar los 14 días. Se registró la mortalidad y la presencia de los siguientes signos clínicos: alopecia, ataxia, nivel de actividad general, catalepsia, aspecto general, convulsiones, aspecto de la cola, apnea, aspecto de los ojos, disnea, aspecto de los genitales, edema en las patas, aspecto de las heces, epistaxis, aspecto de la orina, piloerección, características de la marcha, lesiones en la piel, nódulos o abscesos, reflejos, ptosis palpebral, taquipnea, lagrimeo, salivación, sangrado ocular, temblores. El peso corporal se controló al inicio, a los siete días y al final de la experiencia. Los animales fueron pesados en una balanza CP3202P (Sartorius, Alemania). El consumo de alimentos se controló durante toda la experiencia. Fue calculado diariamente por diferencia de pesada entre alimento suministrado y alimento remanente.
</p>

<!-- Necropsia y examen histopatológico -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Necropsia y examen histopatológico
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Luego de 14 días de administración, se realizó la necropsia de todos los animales, para lo que fueron anestesiados con tiopental sódico (30 mg/kg) y desangrados hasta morir. Se realizó el análisis macroscópico de órganos y cavidades y se examinó el contenido de las cavidades abdominal, torácica y craneana.
</p>

<!-- Análisis estadístico -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Análisis estadístico
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  El análisis del peso corporal y el consumo de alimento se realizó de manera independiente para cada sexo mediante análisis de varianza (ANOVA). El nivel de significación establecido fue de p< 0,05. Todos los análisis se realizaron empleando el Statsoft for windows. StatSoft, Inc. (2003). STATISTICA (data analysis software system), versión 6.
</p>

<!-- Resultados -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
  Resultados
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  La administración de dosis orales únicas (2000 mg/kg) de las 13 formulaciones a ratas SD se comportó como sigue: Formulación 1.1. No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (TABLA 2.1.1). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.2). Estos resultados permiten definir que la Formulación 1.1 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y no tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio determinó que no se tomaran muestras para estudio histopatológico, tal como fue La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.1 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica.
</p>

<p style="margin-bottom: 18px; text-align: justify;">
  Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados.
</p>

<p style="margin-bottom: 18px; text-align: justify;">
  Los efectos de dosis orales únicas de Formulación 1.1 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1 y TABLA 2.2. Cada valor representa la media ± DE.
</p>



<table>
  <caption>TABLA 2.1.1. Efectos de dosis orales únicas de Formulación 1.1 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <tr>
    <th rowspan="2">Dosis (mg/kg)</th>
    <th colspan="4">Machos</th>
    <th colspan="4">Hembras</th>
  </tr>
  <tr>
    <th>Inicio</th>
    <th></th>
    <th>Final</th>
    <th></th>
    <th>Inicio</th>
    <th></th>
    <th>Final</th>
    <th></th>
  </tr>
  <tr>
    <td>No tratados</td>
    <td>240,05</td>
    <td>±</td>
    <td>288,05</td>
    <td>±</td>
    <td>200,05</td>
    <td>±</td>
    <td>210,05</td>
    <td>±</td>
  </tr>
  <tr>
    <td>2000</td>
    <td>240,05</td>
    <td>±</td>
    <td>291,05</td>
    <td>±</td>
    <td>201,05</td>
    <td>±</td>
    <td>212,72</td>
    <td>±</td>
  </tr>
</table>



<table>
  <caption>TABLA 2.1.2. Ingesta de alimentos para ratas con 1 dosis de composiciones Formulación 1.1</caption>
  <tr>
    <th>Dosis (mg/kg)</th>
    <th>Sexo</th>
    <th>Unidades (N)</th>
    <th>Ingesta de alimentos 14 días (g/día)</th>
  </tr>
  <tr>
    <td>2000 mg/kg</td>
    <td>Machos</td>
    <td>3</td>
    <td>25,69 ± 2,01</td>
  </tr>
  <tr>
    <td>No tratados</td>
    <td>Machos</td>
    <td>3</td>
    <td>25,77 ± 2,45</td>
  </tr>
  <tr>
    <td>2000 mg/kg</td>
    <td>Hembras</td>
    <td>3</td>
    <td>18,61 ± 2,02</td>
  </tr>
  <tr>
    <td>No tratados</td>
    <td>Hembras</td>
    <td>3</td>
    <td>19,69 ± 2,73</td>
  </tr>
</table>


<div style="margin-bottom: 20px; text-align: justify;">
  <p>
    <strong>Formulación 1.2.</strong> No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (<a href="#tabla213">TABLA 2.1.3</a>). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (<a href="#tabla214">TABLA 2.1.4</a>). Estos resultados permiten definir que la Formulación 1.2 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. 
  </p>
  <p>
    El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y no tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo.
  </p>
  <p>
    La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.2 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. 
  </p>
  <p>
    Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (<a href="https://www.oecd.org">OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method</a>). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (<a href="https://www.oecd.org">OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method</a>), la cual no reveló lesiones macroscópicas en los animales evaluados.
  </p>
  <p>
    Los efectos de dosis orales únicas de Formulación 1.2 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la <a href="#tabla213">TABLA 2.1.3</a> y <a href="#tabla214">TABLA 2.1.4</a>. Cada valor representa la media ± DE.
  </p>
</div>


<div style="margin-bottom: 20px;">
  <h3 style="text-align: center;">TABLA 2.1.3</h3>
  <h4 style="text-align: center;">Efectos de dosis orales únicas de Formulación 1.2 sobre el peso corporal (g) (X ± DE) de ratas SD.</h4>
  <table style="width: 100%; border-collapse: collapse; margin: auto; font-family: Arial, sans-serif; border: 1px solid #dddddd;">
    <thead style="background-color: #f2f2f2;">
      <tr>
        <th style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Dosis (mg/kg)</th>
        <th colspan="2" style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Machos</th>
        <th colspan="2" style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Hembras</th>
      </tr>
      <tr>
        <th></th>
        <th style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Inicio</th>
        <th style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Final</th>
        <th style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Inicio</th>
        <th style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Final</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">No tratados</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">239,60 ± 4,96</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">290,60 ± 6,39</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">199,60 ± 4,59</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">209,60 ± 4,59</td>
      </tr>
      <tr>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">2000</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">239,60 ± 6,32</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">287,60 ± 7,57</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">200,60 ± 3,55</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">212,27 ± 3,55</td>
      </tr>
    </tbody>
  </table>
</div>


<div style="margin-bottom: 20px;">
  <h3 style="text-align: center;">TABLA 2.1.4</h3>
  <h4 style="text-align: center;">Body weight and food intake for rats with 1 doses of compositions Formulation 1.2</h4>
  <table style="width: 100%; border-collapse: collapse; margin: auto; font-family: Arial, sans-serif; border: 1px solid #dddddd;">
    <thead style="background-color: #f2f2f2;">
      <tr>
        <th style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Dosis (mg/kg)</th>
        <th style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Sex</th>
        <th style="padding: 8px; text-align: center; border: 1px solid #dddddd;">N units</th>
        <th style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Food intake 14 days (g/day)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">2000 mg/kg</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Machos</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">3</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">24,26 ± 2,85</td>
      </tr>
      <tr>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">No tratados</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Machos</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">3</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">23,26 ± 2,48</td>
      </tr>
      <tr>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">2000 mg/kg</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Hembras</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">3</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">19,08 ± 2,29</td>
      </tr>
      <tr>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">No tratados</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Hembras</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">3</td>
        <td style="padding: 8px; text-align: center; border: 1px solid #dddddd;">17,62 ± 2,15</td>
      </tr>
    </tbody>
  </table>
</div>

<div style="margin-bottom: 20px; font-family: Arial, sans-serif;">
    <p>
        <strong>Formulación 1.3.</strong> No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (<a href="#tabla-2-1-5">TABLA 2.1.5</a>). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (<a href="#tabla-2-1-6">TABLA 2.1.6</a>). Estos resultados permiten definir que la Formulación 1.3 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada su toxicidad es no clasificable.
    </p>
    <p>
        El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y no tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo.
    </p>
    <p>
        La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.3 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method).
    </p>
    <p>
        Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.3 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la <a href="#tabla-2-1-5">TABLA 2.1.5</a> y <a href="#tabla-2-1-6">TABLA 2.1.6</a>. Cada valor representa la media ± DE.
    </p>
</div>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Efectos de dosis orales únicas de Formulación 1.3 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">240,00 ± 5,49</td>
      <td style="border: 1px solid #ddd; padding: 8px;">291,00 ± 6,92</td>
      <td style="border: 1px solid #ddd; padding: 8px;">200,00 ± 5,12</td>
      <td style="border: 1px solid #ddd; padding: 8px;">210,00 ± 5,12</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">240,00 ± 6,85</td>
      <td style="border: 1px solid #ddd; padding: 8px;">288,00 ± 8,10</td>
      <td style="border: 1px solid #ddd; padding: 8px;">201,00 ± 4,08</td>
      <td style="border: 1px solid #ddd; padding: 8px;">212,67 ± 4,08</td>
    </tr>
  </tbody>
</table>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Body weight and food intake for rats with 1 doses of compositions Formulation 1.3</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,20 ± 2,71</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">21,26 ± 2,85</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">17,49 ± 2,58</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,08 ± 2,31</td>
    </tr>
  </tbody>
</table>

<p>
  <strong>Formulación 1.4.</strong> No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (TABLA 2.1.7). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.8). Estos resultados permiten definir que la Formulación 1.4 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y No tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio determinó que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.4 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.4 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.7 y TABLA 2.1.8. Cada valor representa la media ± DE.
</p>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Efectos de dosis orales únicas de Formulación 1.4 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,44 ± 5,50</td>
      <td style="border: 1px solid #ddd; padding: 8px;">290,44 ± 6,93</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,44 ± 5,13</td>
      <td style="border: 1px solid #ddd; padding: 8px;">209,44 ± 5,13</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,44 ± 6,86</td>
      <td style="border: 1px solid #ddd; padding: 8px;">287,44 ± 8,11</td>
      <td style="border: 1px solid #ddd; padding: 8px;">200,44 ± 4,09</td>
      <td style="border: 1px solid #ddd; padding: 8px;">212,11 ± 4,09</td>
    </tr>
  </tbody>
</table>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Body weight and food intake for rats with 1 doses of compositions Formulation 1.4</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">20,15 ± 2,10</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Sin tratamiento</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">21,32 ± 2,66</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">15,49 ± 2,51</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Sin tratamiento</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">17,49 ± 2,38</td>
    </tr>
  </tbody>
</table>


<p>
  <strong>Formulación 1.5.</strong> No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (TABLA 2.1.9). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.10). Estos resultados permiten definir que la Formulación 1.5 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y No tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinó que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.5 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.5 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.9 y TABLA 2.1.10. Cada valor representa la media ± DE.
</p>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Efectos de dosis orales únicas de Formulación 1.5 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,00 ± 4,67</td>
      <td style="border: 1px solid #ddd; padding: 8px;">290,00 ± 6,10</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,00 ± 4,30</td>
      <td style="border: 1px solid #ddd; padding: 8px;">209,00 ± 4,30</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,00 ± 6,03</td>
      <td style="border: 1px solid #ddd; padding: 8px;">287,00 ± 7,28</td>
      <td style="border: 1px solid #ddd; padding: 8px;">200,00 ± 3,26</td>
      <td style="border: 1px solid #ddd; padding: 8px;">211,67 ± 3,26</td>
    </tr>
  </tbody>
</table>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Body weight and food intake for rats with 1 doses of compositions Formulation 1.5</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">22,08 ± 2,31</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">21,70 ± 2,08</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,34 ± 2,67</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">15,49 ± 2,62</td>
    </tr>
  </tbody>
</table>

<p>
  <strong>Formulación 1.6.</strong> No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (TABLA 2.1.11). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.12). Estos resultados permiten definir que la Formulación 1.6 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y No tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.6 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.6 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.11 y TABLA 2.1.12. Cada valor representa la media ± DE.
</p>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Efectos de dosis orales únicas de Formulación 1.6 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,90 ± 4,82</td>
      <td style="border: 1px solid #ddd; padding: 8px;">289,90 ± 6,25</td>
      <td style="border: 1px solid #ddd; padding: 8px;">198,90 ± 4,45</td>
      <td style="border: 1px solid #ddd; padding: 8px;">208,90 ± 4,45</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,90 ± 6,18</td>
      <td style="border: 1px solid #ddd; padding: 8px;">286,90 ± 7,43</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,90 ± 3,41</td>
      <td style="border: 1px solid #ddd; padding: 8px;">211,57 ± 3,41</td>
    </tr>
  </tbody>
</table>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Body weight and food intake for rats with 1 doses of compositions Formulation 1.6</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,90 ± 2,36</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">24,60 ± 2,33</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">18,24 ± 2,07</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,36 ± 2,70</td>
    </tr>
  </tbody>
</table>

<p>
  <strong>Formulación 1.6.</strong> No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (TABLA 2.1.11). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.12). Estos resultados permiten definir que la Formulación 1.6 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y No tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.6. a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.6 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.11 y TABLA 2.1.12. Cada valor representa la media ± DE.
</p>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Efectos de dosis orales únicas de Formulación 1.6 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,90 ± 4,82</td>
      <td style="border: 1px solid #ddd; padding: 8px;">289,90 ± 6,25</td>
      <td style="border: 1px solid #ddd; padding: 8px;">198,90 ± 4,45</td>
      <td style="border: 1px solid #ddd; padding: 8px;">208,90 ± 4,45</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,90 ± 6,18</td>
      <td style="border: 1px solid #ddd; padding: 8px;">286,90 ± 7,43</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,90 ± 3,41</td>
      <td style="border: 1px solid #ddd; padding: 8px;">211,57 ± 3,41</td>
    </tr>
  </tbody>
</table>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Body weight and food intake for rats with 1 doses of compositions Formulation 1.6</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,90 ± 2,36</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">24,60 ± 2,33</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">18,24 ± 2,07</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,36 ± 2,70</td>
    </tr>
  </tbody>
</table>


<p>
  <strong>Formulación 1.7.</strong> No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (TABLA 2.1.13). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.14). Estos resultados permiten definir que la Formulación 1.7 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y No tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.7 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.7 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.13 y TABLA 2.1.14. Cada valor representa la media ± DE.
</p>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Efectos de dosis orales únicas de Formulación 1.7 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,00 ± 4,97</td>
      <td style="border: 1px solid #ddd; padding: 8px;">289,00 ± 6,40</td>
      <td style="border: 1px solid #ddd; padding: 8px;">198,00 ± 4,60</td>
      <td style="border: 1px solid #ddd; padding: 8px;">208,00 ± 4,60</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,00 ± 6,33</td>
      <td style="border: 1px solid #ddd; padding: 8px;">286,00 ± 7,58</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,00 ± 3,56</td>
      <td style="border: 1px solid #ddd; padding: 8px;">210,67 ± 3,56</td>
    </tr>
  </tbody>
</table>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Body weight and food intake for rats with 1 doses of compositions Formulation 1.7</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">24,20 ± 2,58</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,10 ± 2,51</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,08 ± 2,36</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">18,32 ± 2,06</td>
    </tr>
  </tbody>
</table>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Efectos de dosis orales únicas de Formulación 1.8 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,00 ± 4,97</td>
      <td style="border: 1px solid #ddd; padding: 8px;">289,00 ± 6,40</td>
      <td style="border: 1px solid #ddd; padding: 8px;">198,00 ± 4,60</td>
      <td style="border: 1px solid #ddd; padding: 8px;">208,00 ± 4,60</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,00 ± 6,33</td>
      <td style="border: 1px solid #ddd; padding: 8px;">286,00 ± 7,58</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,00 ± 3,56</td>
      <td style="border: 1px solid #ddd; padding: 8px;">210,67 ± 3,56</td>
    </tr>
  </tbody>
</table>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Body weight and food intake for rats with 1 doses of compositions Formulation 1.8</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">24,20 ± 2,58</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,10 ± 2,51</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,08 ± 2,36</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">18,32 ± 2,06</td>
    </tr>
  </tbody>
</table>


<p>
  <strong>Formulación 1.8.</strong> No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (TABLA 2.1.15). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.16). Estos resultados permiten definir que la Formulación 1.8 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y No tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.8 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method 002). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.8 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.15 y TABLA 2.1.16. Cada valor representa la media ± DE.
</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Efectos de dosis orales únicas de Formulación 1.8 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,80 ± 4,92</td>
      <td style="border: 1px solid #ddd; padding: 8px;">289,80 ± 6,35</td>
      <td style="border: 1px solid #ddd; padding: 8px;">198,80 ± 4,55</td>
      <td style="border: 1px solid #ddd; padding: 8px;">208,80 ± 4,55</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,80 ± 6,28</td>
      <td style="border: 1px solid #ddd; padding: 8px;">286,80 ± 7,53</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,80 ± 3,51</td>
      <td style="border: 1px solid #ddd; padding: 8px;">211,47 ± 3,51</td>
    </tr>
  </tbody>
</table>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Body weight and food intake for rats with 1 doses of compositions Formulation 1.8</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,60 ± 2,76</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,80 ± 2,53</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">17,49 ± 2,46</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,08 ± 2,38</td>
    </tr>
  </tbody>
</table>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Efectos de dosis orales únicas de Formulación 1.9 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,80 ± 4,92</td>
      <td style="border: 1px solid #ddd; padding: 8px;">289,80 ± 6,35</td>
      <td style="border: 1px solid #ddd; padding: 8px;">198,80 ± 4,55</td>
      <td style="border: 1px solid #ddd; padding: 8px;">208,80 ± 4,55</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,80 ± 6,28</td>
      <td style="border: 1px solid #ddd; padding: 8px;">286,80 ± 7,53</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,80 ± 3,51</td>
      <td style="border: 1px solid #ddd; padding: 8px;">211,47 ± 3,51</td>
    </tr>
  </tbody>
</table>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Body weight and food intake for rats with 1 doses of compositions Formulation 1.9</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,60 ± 2,76</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,80 ± 2,53</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">17,49 ± 2,46</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,08 ± 2,38</td>
    </tr>
  </tbody>
</table>

<p>
  <strong>Formulación 1.9.</strong> No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y No tratados (TABLA 2.1.17). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.18). Estos resultados permiten definir que la Formulación 1.9 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y No tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.9 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Los efectos de dosis orales únicas de Formulación 1.9 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.17 y TABLA 2.1.18. Cada valor representa la media ± DE.
</p>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Efectos de dosis orales únicas de Formulación 1.9 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio (X ± DE)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final (X ± DE)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio (X ± DE)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final (X ± DE)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,50 ± 5,22</td>
      <td style="border: 1px solid #ddd; padding: 8px;">290,50 ± 6,65</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,50 ± 4,85</td>
      <td style="border: 1px solid #ddd; padding: 8px;">209,50 ± 4,85</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,50 ± 6,58</td>
      <td style="border: 1px solid #ddd; padding: 8px;">287,50 ± 7,83</td>
      <td style="border: 1px solid #ddd; padding: 8px;">200,50 ± 3,81</td>
      <td style="border: 1px solid #ddd; padding: 8px;">212,17 ± 3,81</td>
    </tr>
  </tbody>
</table>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Body weight and food intake for rats with 1 dose of compositions Formulation 1.9</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sexo</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">25,20 ± 2,12</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">24,10 ± 2,25</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">15,49 ± 2,54</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">17,49 ± 2,42</td>
    </tr>
  </tbody>
</table>


<p>
    <strong>Formulación 1.10</strong> no produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (ver <strong>TABLA 2.1.19</strong>). En cuanto al consumo de alimento, tampoco mostró diferencias significativas en ninguno de los grupos estudiados (ver <strong>TABLA 2.1.20</strong>). Estos resultados permiten definir que la Formulación 1.10 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y no tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.10 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral Toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral Toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.10 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la <strong>TABLA 2.1.19</strong> y <strong>TABLA 2.1.20</strong>. Cada valor representa la media ± DE.
</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.17. Efectos de dosis orales únicas de Formulación 1.9 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,50 ± 5,22</td>
      <td style="border: 1px solid #ddd; padding: 8px;">290,50 ± 6,65</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,50 ± 4,85</td>
      <td style="border: 1px solid #ddd; padding: 8px;">209,50 ± 4,85</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,50 ± 6,58</td>
      <td style="border: 1px solid #ddd; padding: 8px;">287,50 ± 7,83</td>
      <td style="border: 1px solid #ddd; padding: 8px;">200,50 ± 3,81</td>
      <td style="border: 1px solid #ddd; padding: 8px;">212,17 ± 3,81</td>
    </tr>
  </tbody>
</table>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.18. Body weight and food intake for rats with 1 doses of compositions Formulation 1.9</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">25,20 ± 2,12</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratado</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">24,10 ± 2,25</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">15,49 ± 2,54</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratado</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">17,49 ± 2,42</td>
    </tr>
  </tbody>
</table>

<p>Formulación 1.10. No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y no tratados (TABLA 2.1.19). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.20). Estos resultados permiten definir que la Formulación 1.10 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y no tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.10 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.10 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.19 y TABLA 2.1.20. Cada valor representa la media ± DE.</p>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.19. Efectos de dosis orales únicas de Formulación 1.10 sobre el peso corporal (g) (X ± DE) de ratas SD.</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">237,50 ± 5,02</td>
      <td style="border: 1px solid #ddd; padding: 8px;">288,50 ± 6,45</td>
      <td style="border: 1px solid #ddd; padding: 8px;">197,50 ± 4,65</td>
      <td style="border: 1px solid #ddd; padding: 8px;">207,50 ± 4,65</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">237,50 ± 6,38</td>
      <td style="border: 1px solid #ddd; padding: 8px;">285,50 ± 7,63</td>
      <td style="border: 1px solid #ddd; padding: 8px;">198,50 ± 3,61</td>
      <td style="border: 1px solid #ddd; padding: 8px;">210,17 ± 3,61</td>
    </tr>
  </tbody>
</table>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.20. Body weight and food intake for rats with 1 doses of compositions Formulation 1.10</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">22,80 ± 2,32</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">21,70 ± 2,14</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">18,52 ± 2,73</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">15,49 ± 2,48</td>
    </tr>
  </tbody>
</table>


<p>Formulación 1.11. No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y No tratados (TABLA 2.1.21). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.22). Estos resultados permiten definir que la Formulación 1.11 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y No tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.11 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral Toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral Toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.11 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.21 y TABLA 2.1.22. Cada valor representa la media ± DE.</p>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.21. Efectos de dosis orales únicas de Formulación 1.11 sobre el peso corporal (g) (X ± DE) de ratas SD</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">240,50 ± 5,09</td>
      <td style="border: 1px solid #ddd; padding: 8px;">291,50 ± 6,52</td>
      <td style="border: 1px solid #ddd; padding: 8px;">200,50 ± 4,72</td>
      <td style="border: 1px solid #ddd; padding: 8px;">210,50 ± 4,72</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">240,50 ± 6,45</td>
      <td style="border: 1px solid #ddd; padding: 8px;">288,50 ± 7,70</td>
      <td style="border: 1px solid #ddd; padding: 8px;">201,50 ± 3,68</td>
      <td style="border: 1px solid #ddd; padding: 8px;">213,17 ± 3,68</td>
    </tr>
  </tbody>
</table>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.22. Body weight and food intake for rats with 1 doses of compositions Formulation 1.11</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis mg/kg</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">24,50 ± 2,57</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,90 ± 2,34</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,78 ± 2,16</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">20,30 ± 2,13</td>
    </tr>
  </tbody>
</table>

<p>Formulación 1.12. No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y No tratados (TABLA 2.1.23). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.24). Estos resultados permiten definir que la Formulación 1.12 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y No tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.12 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral Toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral Toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.12 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.23 y TABLA 2.1.24. Cada valor representa la media ± DE.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.23. Efectos de dosis orales únicas de Formulación 1.12 sobre el peso corporal (g) (X ± DE) de ratas SD</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,40 ± 5,14</td>
      <td style="border: 1px solid #ddd; padding: 8px;">290,40 ± 6,57</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,40 ± 4,77</td>
      <td style="border: 1px solid #ddd; padding: 8px;">209,40 ± 4,77</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,40 ± 6,50</td>
      <td style="border: 1px solid #ddd; padding: 8px;">287,40 ± 7,75</td>
      <td style="border: 1px solid #ddd; padding: 8px;">200,40 ± 3,73</td>
      <td style="border: 1px solid #ddd; padding: 8px;">212,07 ± 3,73</td>
    </tr>
  </tbody>
</table>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.24. Body weight and food intake for rats with 1 doses of compositions Formulation 1.12</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis mg/kg</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">25,10 ± 2,57</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">17,49 ± 2,45</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,08 ± 2,36</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,92 ± 2,18</td>
    </tr>
  </tbody>
</table>

<p>Formulación 1.13. No produjo muertes durante el transcurso de la experiencia, ni se manifestaron signos clínicos indicativos de toxicidad en ninguno de los animales. En el peso corporal no se encontraron diferencias significativas en ninguno de los intervalos estudiados entre animales tratados y No tratados (TABLA 2.1.25). En cuanto al consumo de alimento tampoco mostró diferencias significativas en ninguno de los grupos estudiados (TABLA 2.1.26). Estos resultados permiten definir que la Formulación 1.13 debe tener una toxicidad aguda superior a los 2000 mg/kg en ratas SD y, por tanto, según la metodología empleada, su toxicidad es no clasificable. El estudio macroscópico reveló que ningún animal presentaba lesiones en las cavidades y órganos examinados al momento de la necropsia, por lo cual no existieron diferencias entre animales tratados y No tratados. Los resultados anteriores, unidos a la no ocurrencia de muertes durante el estudio, determinaron que no se tomaran muestras para estudio histopatológico, tal como fue establecido en el protocolo. La administración de dosis orales únicas (2000 mg/kg) de Formulación 1.13 a ratas SD no produjo muertes ni signos de toxicidad, por lo cual este formulado puede clasificarse como una sustancia no tóxica. Este estudio siguió el método de Toxicidad Aguda de las Clases (ATC, siglas en inglés), que persigue brindar una aproximación sobre la toxicidad de la sustancia a investigar a partir de la administración única de un solo nivel de dosis previamente definido. Se consideró la naturaleza de la sustancia a evaluar y se realizó el ensayo con la dosis límite propuesta (2000 mg/kg) (OECD. 2002. Test No. 423: Acute Oral Toxicity - Acute Toxic Class Method). Este tipo de estudio, desarrollado preferiblemente en roedores, centra su atención en la detección de signos clínicos indicativos de toxicidad, ausentes en los animales tratados de ambos sexos, e incluye la realización de necropsia de los sobrevivientes a los 14 días de administrar la sustancia (OECD. 2002. Test No. 423: Acute Oral Toxicity - Acute Toxic Class Method), la cual no reveló lesiones macroscópicas en los animales evaluados. Los efectos de dosis orales únicas de Formulación 1.13 sobre el peso corporal y la ingestión de alimentos en ratas SD son representados en la TABLA 2.1.25 y TABLA 2.1.26. Cada valor representa la media ± DE.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.25. Efectos de dosis orales únicas de Formulación 1.13 sobre el peso corporal (g) (X ± DE) de ratas SD</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,40 ± 5,14</td>
      <td style="border: 1px solid #ddd; padding: 8px;">290,40 ± 6,57</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,40 ± 4,77</td>
      <td style="border: 1px solid #ddd; padding: 8px;">209,40 ± 4,77</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">239,40 ± 6,50</td>
      <td style="border: 1px solid #ddd; padding: 8px;">287,40 ± 7,75</td>
      <td style="border: 1px solid #ddd; padding: 8px;">200,40 ± 3,73</td>
      <td style="border: 1px solid #ddd; padding: 8px;">212,07 ± 3,73</td>
    </tr>
  </tbody>
</table>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.26. Body weight and food intake for rats with 1 doses of compositions Formulation 1.13</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis mg/kg</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">25,10 ± 2,57</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">17,49 ± 2,45</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,08 ± 2,36</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,92 ± 2,18</td>
    </tr>
  </tbody>
</table>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.25. Efectos de dosis orales únicas de Formulación 1.13 sobre el peso corporal (g) (X ± DE) de ratas SD</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Machos Final</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Inicio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Hembras Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,70 ± 4,95</td>
      <td style="border: 1px solid #ddd; padding: 8px;">289,70 ± 6,38</td>
      <td style="border: 1px solid #ddd; padding: 8px;">198,70 ± 4,58</td>
      <td style="border: 1px solid #ddd; padding: 8px;">208,70 ± 4,58</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
      <td style="border: 1px solid #ddd; padding: 8px;">238,70 ± 6,31</td>
      <td style="border: 1px solid #ddd; padding: 8px;">286,70 ± 7,56</td>
      <td style="border: 1px solid #ddd; padding: 8px;">199,70 ± 3,54</td>
      <td style="border: 1px solid #ddd; padding: 8px;">211,37 ± 3,54</td>
    </tr>
  </tbody>
</table>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLA 2.1.26. Body weight and food intake for rats with 1 doses of compositions Formulation 1.13</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosis mg/kg</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Sex</th>
      <th style="border: 1px solid #ddd; padding: 8px;">N units</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Food intake 14 days (g/day)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,70 ± 2,79</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratado</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Machos</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">22,90 ± 2,46</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2000 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">17,49 ± 2,63</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">No tratado</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Hembras</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">19,08 ± 2,28</td>
    </tr>
  </tbody>
</table>

<p>
<strong>IRRITABILIDAD OCULAR EN CONEJOS DE LAS FORMULACIONES DE SIROPE DE JUGO DE CAÑA Y/O GRANULADO DE JUGO DE CAÑA CON PRODUCTOS NATURALES.</strong>
<br><br>
La irritación ocular es la producción de cambios reversibles en el ojo provocados por la aplicación de una sustancia test en la superficie anterior del ojo. En las reacciones de irritación ocular, la córnea constituye un importante tejido del globo ocular, cuya estructura proteica muy organizada permite el paso libre de la luz a través de ella. Algunas sustancias químicas pueden alterar la estructura de la córnea hasta el punto de perder su transparencia, de modo que pueden provocar pérdida parcial de la visión o incluso ceguera. Alrededor del 80 % de la córnea está formada por estroma, una red organizada de macromoléculas, con un nivel de hidratación apropiado (Kupper. 1990. J Clin Invest. 86:1783-1789). La pérdida de la impermeabilidad transepitelial, debido a daños sobre las uniones estrechas y los desmosomas que unen las células del epitelio, es uno de los fenómenos iniciales en las lesiones inducidas por productos químicos (Bothan, P.A; et al. 1998. ATLA. 26:195-211), de modo que si el epitelio se lesiona puede aparecer opacidad corneal. Sin embargo, niveles de opacidad menos graves pueden revertirse dado que el epitelio tiene la capacidad de auto regenerarse a través del movimiento de las células contiguas hasta cubrir la herida o mediante reemplazo de las células dañadas por división celular. En cambio, el endotelio no es capaz de repararse. Por ese motivo, las lesiones sobre esas células pueden tener consecuencias graves como la ceguera permanente (Curren and Harbell. 1998. Environ Health. 106(2):485-492). La conjuntiva, estructura que queda expuesta al ambiente, está formada por epitelio escamoso no queratinizado y es muy sensible a las sustancias extrañas. Por tanto, cuando una sustancia irritante entra en contacto con la conjuntiva se inicia un proceso inflamatorio que provoca dilatación de la red vascular, confiriendo un aspecto enrojecido a la membrana. Asimismo, se pueden producir cambios en la permeabilidad de los capilares, provocando edema. Algunos productos pueden provocar conjuntivitis sin afectar la córnea. Los efectos de los productos químicos sobre la conjuntiva suelen ser reversibles (Curren and Harbell. 1998. Environ Health. 106(2):485-492).
<br><br>
El iris se sitúa por detrás de la córnea y se encuentra rodeada por el humor acuoso. Es una estructura vascular formada por el tejido conjuntivo laxo, fibras musculares y células pigmentadas. La irritación también puede provocar sobre esta estructura la dilatación de los vasos sanguíneos y la liberación de líquidos vasculares que provocan edema. Además, al producirse daños sobre el iris, la liberación de proteínas procedentes de la sangre del humo acuoso puede cambiar su índice de refracción provocando alteraciones de la visión. Los daños más graves pueden provocar la destrucción del tejido del iris que tiene como consecuencia la pérdida de su reactividad a la luz (Curren and Harbell. 1998. Environ Health. 106(2):485-492).
<br><br>
Las formulaciones a base de policosanoles obtenidos de la caña de azúcar, como son los casos de la patente US 10493121, utilizada en la presente invención como base para combinar con productos naturales contienen octacosanol como componente mayoritario y productos naturales. El policosanol, mezcla de alcoholes alifáticos primarios superiores obtenida de la cera de caña (Saccharum officinarum L.), cuyo componente mayoritario es el octacosanol (Mas. 2000. Drugs of the Future. 25(6):569-586.), presenta efectos inhibitorios sobre la actividad de la COX-1 in vitro (Pérez, Y; et al. 2013. Int. J. Pharm. Sci. Rev. Res. 19(2):18-23), lo que sustenta su acción como antiagregante plaquetario (Carbajal et al, 1998) y moderadamente anti-inflamatorio (Carbajal, D; et al. 1998. Prostaglandins Leukot Essent Fatty Acids. 59(4):235-238), los cuales unidos a sus propiedades antioxidantes (Oyarzábal, A; et al. 2010. Rev Cubana Farm. 45(1):87-96), constituyen un conjunto de efectos pleiotrópicos que contribuyen a su actividad antiaterosclerótica integral (Castaño, G; et al. 2006. Cur Therapeutic Res. 67(3):174-192). Por otra parte, ha sido reportado que el octacosanol presenta un efecto antinociceptivo periférico, probablemente mediado por los receptores alfa 2-adrenérgicos, y que inhibe tanto el flujo de leucocitos como los niveles de TNF en el modelo de pleuresía por carragenina (Marques, A.O; et al. 2012. Int. J. Mol. Sci. 13:1598-1611). Por otra parte los productos naturales utilizados en las formulaciones del PPG Plus se utilizaron en concentraciones que no sobrepasaron las sugeridas como no tóxicas en la literatura, por lo que no se espera que esta formulación sea un irritante ocular. Para el desarrollo del ensayo se tuvo en cuenta lo señalado por la EPA y OECD (EPA. 1998. OPPTS 870.2400. Acute irritation eye; OECD, 2012. Acute eye irritation /corrosion. Methods 405).
</p>

<p>
<strong>MATERIALES Y METODOS</strong>
<br><br>
<strong>Sustancia de estudio</strong>
<br>
Se evaluó la irritabilidad dérmica por dosis únicas de las formulaciones del ejemplo 1 (1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9, 1.10, 1.11, 1.12, 1.13) elaboradas por PPG Nutritional Company.
</p>

<p>
<strong>Animales</strong>
<br>
Se emplearon conejos albinos Nueva Zelanda Blanco, machos adultos jóvenes, de 1,8 a 2,2 kg de peso corporal suministrados por el bioterio de la Facultad de Medicina de la UNAM, México. Los conejos son la especie de elección en los ensayos de irritabilidad oftálmica según establece la EPA (OPPTS 870.2400) que fue el método de elección dada las características de las sustancias a evaluar que no tienen evidencias de irritabilidad oftálmica en estudios previos. A su llegada, los animales fueron alojados en condiciones ambientales requeridas de temperatura y humedad y con un ciclo de luz-oscuridad de 12 h, que se mantuvieron durante todo el estudio. El periodo de adaptación fue de 14 días. El alimento que se les proporcionó durante todo el estudio fue pienso estándar para esta especie preparado y suministrado por el bioterio de la Facultad de Medicina de la UNAM, México. Los animales tuvieron durante todo el estudio libre acceso al alimento y al agua. Los animales se colocaron individualmente en cada jaula y se identificaron con una chapilla en la que se recogió el código del estudio, sustancia de ensayo, especie, grupo experimental y número del animal.
</p>

<p>
<strong>Mediciones</strong>
<br>
No más de 24 h antes del inicio del ensayo todos los conejos fueron sometidos a un riguroso estudio de sus estructuras oculares (córnea, iris y conjuntiva). El daño corneal fue observado con el empleo de una solución de fluoresceína sódica al 2 %, además se utilizó una lámpara con filtro de luz violeta. Previa selección de los animales para el ensayo, se les aplicó en el saco conjuntival del ojo derecho, después de haber sido proyectado ligeramente el párpado inferior hacia afuera, la cantidad de 0,1 g de las sustancias en ensayo. Luego, los párpados fueron mantenidos juntos durante un segundo para evitar la pérdida de la sustancia. Transcurrida una hora de aplicada las sustancias, al no eliminarse los polvos totalmente por mecanismos fisiológicos, se procedió a enjuagar el ojo con solución salina. El ojo contralateral (izquierdo) fue tomado como control y no recibió tratamiento alguno. Se examinaron los ojos de cada animal aproximadamente a la 1, 24, 48 y 72 h de la administración con el fin de detectar daños en las estructuras antes mencionadas (córnea, iris y conjuntiva) y se registraron las reacciones observadas de acuerdo con la escala para graduar las lesiones oculares EPA (EPA. 1998. OPPTS 870.2400. Acute irritation eye) (Tabla 2.2.1).
</p>


<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLE 2.2.1. Clasificación de las lesiones oculares</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Estructura</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Descripción</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Puntuación</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td rowspan="5" style="border: 1px solid #ddd; padding: 8px;">Córnea</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Sin ulceración ni opacidad</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Zonas de opacidad dispersas o difusas (con excepción del ligero mate del brillo normal); detalles del iris claramente visibles</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Zona traslúcida fácilmente perceptible; detalles del iris ligeramente oscurecido</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Zona nacarada; no se observan los detalles del iris; tamaño de la pupila apenas perceptible</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Córnea opaca; no se distingue el iris por la opacidad</td>
      <td style="border: 1px solid #ddd; padding: 8px;">4</td>
    </tr>
    <tr>
      <td rowspan="3" style="border: 1px solid #ddd; padding: 8px;">Iris</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Normal</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Pliegue marcadamente profundizado, congestión, hinchazón, hiperemia circuncorneal moderada; o inyección; iris reactivo a la luz (una reacción lenta se considera un efecto)</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Hemorragia, destrucción visible o ausencia de reacción a la luz</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td rowspan="4" style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Normal</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Algunos vasos sanguíneos hiperémicos (inyectados)</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Difusa, color carmesí; vasos individuales no fácilmente discernibles</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Rojo carne difuso</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
    </tr>
    <tr>
      <td rowspan="5" style="border: 1px solid #ddd; padding: 8px;">Quemosis</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Normal</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Alguna inflamación por encima de lo normal</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Inflamación evidente, con eversión parcial de los párpados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Inflamación con los párpados medio cerrados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Inflamación, con párpados más de la mitad cerrados</td>
      <td style="border: 1px solid #ddd; padding: 8px;">4</td>
    </tr>
  </tbody>
</table>

<p>
Para el cálculo del Índice de Irritación Ocular (IIO) se determinó la suma de todas las observaciones en las tres estructuras analizadas y este valor fue dividido entre 12 (3 estructuras, 4 tiempos de evaluación) según lo descrito por ECETOC (1988) La obtención del valor final de IIO, se realizó según lo descrito por Draize et al, 1944 (Citado por Kay and Calandra.1962. J. Soc. Cos. Chem. 13:281–289)) Tabla IOb.
</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">TABLE 2.2.2. Classification of eye irritation scores from the Draize eye irritation test</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">MMTS</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Irritation classification</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">0.0–0.5</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Non-irritative</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">0.6–2.5</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Practically non-irritative</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2.6–15.0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Minimally irritative</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">15.1–25.0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Mildly irritative</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">25.1–50.0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Moderately irritative</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">50.1–80.0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Severely irritative</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">80.1–100.0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Extremely irritative</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">100.1–110</td>
      <td style="border: 1px solid #ddd; padding: 8px;">Maximally irritative</td>
    </tr>
  </tbody>
</table>

<p>
<strong>Formulación 1.1.</strong> En la Tabla 2.2.3. se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.1. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 2 animales, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,17 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.1.
</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.3. Resultados del índice de irritación oftálmica de la Formulación 1.1</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,17</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.2.</strong> En la Tabla 2.2.4 se muestran los resultados del ensayo de irritación oftálmica de la Formulación 1.2. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 2 animales, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,17 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.2.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.4. Resultados del índice de irritación oftálmica de la Formulación 1.2</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,17</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.3.</strong> En la Tabla 2.2.5 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.3. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 2 animales, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,17 para la formulación clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.3.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.5. Resultados del índice de irritación oftálmica de la Formulación 1.3</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,17</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.4.</strong> En la Tabla 2.2.6 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.4. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 1 un animal, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,08 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.4.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.6. Resultados del índice de irritación oftálmica de la Formulación 1.4</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,08</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.5.</strong> En la Tabla 2.2.7 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.5. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 1 animal, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,08 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.5.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.7. Resultados del índice de irritación oftálmica de la Formulación 1.5</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,08</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.6.</strong> En la Tabla 2.2.8 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.6. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 1 animal, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,08 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.6.</p>



<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.8. Resultados del índice de irritación oftálmica de la Formulación 1.6</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,08</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.7.</strong> En la Tabla 2.2.9 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.7. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 2 animales, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,17 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.7.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.9. Resultados del índice de irritación oftálmica de la Formulación 1.7</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,17</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.8.</strong> En la Tabla 2.2.10 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.8. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 2 animales, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,17 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.8.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.10. Resultados del índice de irritación oftálmica de la Formulación 1.8</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,17</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.9.</strong> En la Tabla 2.2.11 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.9. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 2 animales, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,17 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.9.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.11. Resultados del índice de irritación oftálmica de la Formulación 1.9</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,17</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.10.</strong> En la Tabla 2.2.12 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.10. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 2 animales, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,17 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.10.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.12. Resultados del índice de irritación oftálmica de la Formulación 1.10</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,17</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.11.</strong> En la Tabla 2.2.13 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.11. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 1 animal, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,08 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.11.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.13. Resultados del índice de irritación oftálmica de la Formulación 1.11</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,08</td>
    </tr>
  </tbody>
</table>

<p><strong>Formulación 1.12.</strong> En la Tabla 2.2.14 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.12. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 2 animales, reacción clasificada como grado 1. En el iris al igual que en la córnea no se observaron cambios. Los cálculos de los índices de irritación oftálmico fueron de 0,17 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.12.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.14. Resultados del índice de irritación oftálmica de la Formulación 1.12</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,17</td>
    </tr>
  </tbody>
</table>


<p><strong>Formulación 1.13.</strong> En la Tabla 2.2.15 se muestran los resultados del ensayo de irritación oftálmica de la formulación Formulación 1.13. Una hora después de la aplicación en los animales ensayados, se presentó una ligera inyección de los vasos sanguíneos en 2 animales, reacción clasificada como grado 1. En el iris, al igual que en la córnea, no se observaron cambios. Los cálculos de los índices de irritación oftálmica fueron de 0,17 para la formulación, clasificándose como no irritante. Los resultados obtenidos en este estudio evidencian la seguridad de la formulación Formulación 1.13.</p>

<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.2.15. Resultados del índice de irritación oftálmica de la Formulación 1.13</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Conjuntiva</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Iris</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Córnea</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">3</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
    </tr>
    <tr>
      <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Total</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2</td>
    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritación = 0,17</td>
    </tr>
  </tbody>
</table>


<!-- Irritabilidad Dérmica en Conejos -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Irritabilidad Dérmica en Conejos Albinos de las Formulaciones de Jugo de Caña y/o Granulado de Jugo de Caña con Productos Naturales
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La irritación dérmica se define como una reacción inflamatoria local de efectos reversibles. Se caracteriza por la aparición de eritema (enrojecimiento) y edema (acumulación de líquido en el intersticio celular) tras la aplicación de un compuesto químico en una zona determinada de la piel. En los procesos agudos de irritación aparece principalmente inflamación, mientras que la irritación crónica se caracteriza fundamentalmente por una hiperproliferación y una hiperqueratosis transitoria (Berardesca and Distante. 1994. Contact Dermatitis. 31:281-287). Los mecanismos bioquímicos implicados en la irritación dérmica son muy complejos y aún no se conocen en detalle. Un producto químico puede provocar irritación no solo mediante la destrucción directa del tejido, sino que puede alterar distintas funciones celulares provocando la formación, liberación y activación de autacoides. En la piel, los autacoides inician una cascada de reacciones que acaba provocando inflamación. Entre los autacoides encontramos la histamina, los metabolitos del ácido araquidónico, las cininas, el sistema del complemento, algunas especies reactivas del oxígeno y las citocinas (Berardesca and Distante. 1994. Contact Dermatitis. 31:281-287).
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En el caso de las células epidérmicas, el mecanismo principal que utilizan para participar en las reacciones inflamatorias de la piel es la producción y liberación de citocinas. Los queratinocitos, que constituyen aproximadamente un 90 o 95 % de las células de la epidermis, son una fuente muy importante de citocinas y, por tanto, desempeñan un papel decisivo en el inicio y el mantenimiento de las reacciones inflamatorias (Mckenzie and Sauer. 1990. J of Investigative Dermatology. 95:1055-1075). En condiciones normales, los queratinocitos producen algunas citocinas constitutivamente, como las interleucinas (IL) 1- alfa (Dinarello. 1998. Intern Rev Immunol. 6:457-499), pero también son capaces de producir otras citocinas como el Factor de necrosis tumoral (TNF)-α, IL-8 e IL-6 en respuesta a estímulos externos (Sims, J.E; et al. 1990. Proc Nat Acad Sci USA. 6155-6159). Sin embargo, entre todas las citocinas que son capaces de producir y liberar, únicamente la IL1-alfa, la IL1-beta y el TNF-α activan un número suficiente de efectores para desencadenar por sí misma un proceso inflamatorio (Kupper. 1990. J Clin Invest. 86:1783-1789). La demostración de la capacidad no irritante en la piel de una formulación constituye un paso importante para su uso terapéutico y su manipulación durante su procesamiento.
</p>

<!-- Materiales y Métodos -->
<h3 style="font-size: 22px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;">
    Materiales y Métodos
</h3>

<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Sustancia de estudio:</strong> Se evaluó la irritabilidad dérmica por dosis únicas de las formulaciones del ejemplo 1 (1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9, 1.10, 1.11, 1.12, 1.13) elaboradas por PPG Nutritional Company.
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Animales:</strong> Se emplearon conejos albinos Nueva Zelanda Blanco, machos adultos jóvenes, de 1,8 a 2,2 kg de peso corporal suministrados por el bioterio de la Facultad de Medicina de la UNAM, México. Los conejos son la especie de elección en los ensayos de irritabilidad según establece la Organización para la Cooperación y el Desarrollo Económicos (OECD) (OECD, 2012. Methods 405. OECD Guidelines for testing of chemicals; OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). A su llegada, los animales fueron alojados en condiciones ambientales requeridas de temperatura y humedad y con un ciclo de luz-oscuridad de 12 h, que se mantuvieron durante todo el estudio. El periodo de adaptación fue de 14 días. El alimento que se les proporcionó durante todo el estudio fue pienso estándar para esta especie preparado y suministrado por el bioterio de la Facultad de Medicina de la UNAM, México. Los animales tuvieron durante todo el estudio libre acceso al alimento y al agua. Los animales se colocaron individualmente en cada jaula y se identificaron con una chapilla en la que se recogió el código del estudio, sustancia de ensayo, especie, grupo experimental y número del animal.
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Administración y dosificación:</strong> Las sustancias en ensayo se aplicaron por vía tópica directamente en la piel, previo rasurado de la zona de aplicación, en dosis única, en el horario de la mañana. Se formaron dos grupos para el ensayo de tres animales cada uno. Para este ensayo se procedió 24 horas antes con el rasurado de los animales. El rasurado se realizó con una máquina eléctrica (Oster turbo A5, USA), se rasuró un área de 6 cm a ambos lados dorsales (derecho e izquierdo), el lado derecho se seleccionó como tratado y el izquierdo como control. Solamente los animales con la piel intacta fueron utilizados, a los cuales se les aplicó 0,5 g de las sustancias a evaluar. (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Luego, los sitios de aplicación se cubrieron con un parche de gasa y fueron adheridos a la piel con la ayuda de una cinta adhesiva hipoalergénica, por cuatro horas, etapa en que los animales permanecieron en el cepo. Al final de este periodo se removieron los parches y se marcó la posición de los sitios.
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Mediciones:</strong> Transcurrida la primera hora después de retirado el parche se realizó la primera observación. La zona de aplicación se lavó con solución salina fisiológica, sin provocar alteraciones en la superficie de la piel. Se observaron los sitios de aplicación luego de 1, 24, 48 y 72 horas de la remoción del parche y se graduaron las reacciones en la piel (eritema y edema) según lo descrito en (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Transcurrida la primera hora después de retirado el parche se realizó la primera observación. La zona de aplicación se lavó con solución salina fisiológica, sin provocar alteraciones en la superficie de la piel. Se observaron los sitios de aplicación luego de 1, 24, 48 y 72 h de la remoción del parche y se graduaron las reacciones en la piel (eritema y edema) según lo descrito en la Tabla IDXa (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals).
</p>


<!-- Clasificación de Reacciones en la Piel -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Clasificación de Reacciones en la Piel
</h3>

<!-- Tabla 2.3.1 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.1: Clasificación de reacciones en la piel</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Reacción</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Puntuación</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Ausencia de eritema</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Eritema muy ligero (apenas perceptible)</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Eritema bien definido</td>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Eritema moderado a severo</td>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Eritema severo a formación de escara impidiendo su clasificación</td>
            <td style="border: 1px solid #ddd; padding: 8px;">4</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Ausencia de edema</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Edema muy leve (apenas perceptible)</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Edema leve (bordes del área bien definidos por elevación definida)</td>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Edema moderado (elevación de aproximadamente 1 mm)</td>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Edema severo (elevación mayor de 1 mm y extendiéndose más allá del área de exposición)</td>
            <td style="border: 1px solid #ddd; padding: 8px;">4</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    Se registraron los resultados para cada sitio de aplicación en cada intervalo de tiempo. Se determinó el índice de irritación dérmico primario (IIP). Para su cálculo solo se utilizaron las observaciones de las 24, 48 y 72 horas después de la remoción del parche. La puntuación de irritación primaria para un animal se calculó dividiendo la suma de todas las puntuaciones por tres (número de observaciones). Para obtener el IIP para la sustancia de ensayo se sumaron todas las puntuaciones de irritación primaria de los animales individuales y se dividieron por tres (número de animales) y observaciones. Luego se siguió el criterio de clasificación de Draize, J.H; et al; 1944. Journal of Pharmacology and Experimental Therapeutics. 82(3):377-390, según UNE EN ISO 10993-10:2013, descrito en la siguiente tabla.
</p>

<!-- Tabla 2.3.2 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.2: Categorías del índice de irritación dérmica primaria o acumulativa en un conejo</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Puntuación media</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Categoría de la respuesta</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">0 a 0,4</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Insignificante</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">0,5 a 1,9</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Leve</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2 a 4,9</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Moderada</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">5 a 8</td>
            <td style="border: 1px solid #ddd; padding: 8px;">Grave</td>
        </tr>
    </tbody>
</table>

<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Resultados
</h3>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.3 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.1, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals. Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que la Formulación 1.1 provocó en el animal 1 y 2 a las 24 horas un eritema de grado 1 que a las 48 horas se mantuvo y a las 72 horas el grado de eritema se redujo a 0. El animal número 3 no mostró signos de eritema en los tiempos tomados en cuenta para los cálculos. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,44, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.3 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.3: Resultados del índice de irritación dérmica primaria de la Formulación 1.1</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,44</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.4 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.2, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals. Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que la Formulación 1.2 provocó un eritema grado 1 en los animales 1, 2 y 3, que desaparece a las 48 y 72 horas de observación. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,33, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.4 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.4: Resultados del índice de irritación dérmica primaria de la Formulación 1.2</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,33</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.5 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.3, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals. Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que la tableta con Formulación 1.3 provocó en los animales 1 y 2 un eritema grado 1 que desapareció a las 48 y 72 horas de observación. El animal número 3 no mostró signos de eritema en los tiempos tomados en cuenta para los cálculos. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,22, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.5 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.5: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.3</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,22</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.6 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.4, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals. Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que la tableta con Formulación 1.4 provocó en el animal 1 un eritema grado 1, el cual se mantiene durante todo el tiempo de observación hasta los 72 h. Los animales 2 y 3 no mostraron signos de eritema en los tiempos tomados en cuenta para los cálculos. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,33, por tanto, se clasificó la composición como insignificante.
</p>


<!-- Tabla 2.3.6 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.6: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.4</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,33</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.7 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.5, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que el formulado de la tableta Formulación 1.5 en los animales 1 y 3, no mostraron signos de eritema en los tiempos tomados en cuenta para los cálculos. En el animal 2 provocó un eritema grado 1, el cual se mantiene durante todo el tiempo de observación hasta los 72 h. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,33, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.7 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.7: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.5</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,33</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.8 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.6, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que la tableta con Formulación 1.6, provocó en los animales 1 y 2 un eritema grado 1 que desapareció a las 48 y 72 horas de observación. El animal número 3 no mostró signos de eritema en los tiempos tomados en cuenta para los cálculos. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,22, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.8 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.8: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.6</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,22</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.9 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.7, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que la tableta Formulación 1.7, provocó en el animal número 2 signos de eritema a las 24 horas de observación y no se observó eritema a las 48 y 72 horas de observación. Los animales 1 y 3 no mostraron signos de eritema en los tiempos tomados en cuenta para los cálculos. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,11, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.9 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.9: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.7</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,11</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.10 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.8, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que la tableta con Formulación 1.8 en los animales 1 y 3 no tenían signos de eritema en los tiempos tomados en cuenta para los cálculos. El animal número 2 mostró signos de eritema a las 24 y 48 horas de observación y no se observó eritema a las 72 horas de observación. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,22, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.10 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.10: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.8</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,22</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.11 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.9, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que la tableta con Formulación 1.9 en los animales 1 y 2 no tuvieron signos de eritema en los tiempos tomados en cuenta para los cálculos. El animal número 3 mostró signos de eritema grado 1 solamente a las 24 horas de observación, no observándose el edema a las 24 y 48 horas de observación. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,11, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.11 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.11: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.9</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,11</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.12 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.10, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que la tableta con Formulación 1.10 en los animales 1, 2 y 3 no tuvieron signos de eritema en los tiempos tomados en cuenta para los cálculos. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,00, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.12 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.12: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.10</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,00</td>
        </tr>
    </tbody>
</table>


<!-- Tabla 2.3.12 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.12: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.10</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,00</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.13 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.11, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que la tableta con Formulación 1.11 en los animales 1 y 2 no mostraron signos de eritema en los tiempos tomados en cuenta para los cálculos. El animal número 3 mostró signos de eritema grado 1 solamente a las 24 horas de observación, no observándose el edema a las 24 y 48 horas de observación. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,11, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.13 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.13: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.11</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,11</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.14 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la formulación de la tableta con Formulación 1.12, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que el formulado de la tableta con Formulación 1.12, provocó en el animal 1 un eritema grado 1, el cual se mantiene hasta las 48 horas de observación. Los animales 2 y 3 no mostraron signos de eritema en los tiempos tomados en cuenta para los cálculos. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,22, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.14 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.14: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.12</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,22</td>
        </tr>
    </tbody>
</table>

<p style="margin-bottom: 20px; text-align: justify;">
    En la Tabla 2.3.15 se describen los resultados del índice de irritación dérmica primaria en la piel de conejos para la tableta con Formulación 1.13, también se muestran las observaciones registradas de los sitios de aplicación en los diferentes tiempos después de la remoción del parche, según lo descrito en (OECD, 2015. Methods 404. OECD Guidelines for testing of chemicals). Después de retirado el parche de la zona de aplicación de las sustancias, se observó a las 24 h que el formulado de la tableta con Formulación 1.13, provocó en los animales 1 y 2 signos de eritema grado 1 solamente a las 24 horas de observación, no observándose el edema a las 48 y 72 horas de observación. El animal número 3, no mostró signos de eritema en los tiempos tomados en cuenta para los cálculos. Dichos resultados permitieron realizar el cálculo de índice de irritación dérmico primario (IIP) para las sustancias de la composición de la tableta que fue de 0,22, por tanto, se clasificó la composición como insignificante.
</p>

<!-- Tabla 2.3.15 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 2.3.15: Resultados del índice de irritación dérmica primaria de la tableta con Formulación 1.13</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Conejos</th>
            <th style="border: 1px solid #ddd; padding: 8px;">24 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">48 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">72 horas</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">3</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid #ddd; padding: 8px; text-align: right;">Índice de irritabilidad dérmica primaria =</td>
            <td style="border: 1px solid #ddd; padding: 8px;">0,22</td>
        </tr>
    </tbody>
</table>

<!-- EXAMPLE 3 -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    EXAMPLE 3: ANTIINFLAMATORY ACTIVITY OF CANE JUICE SYRUP AND/OR CANE JUICE GRANULES WITH NATURAL PRODUCTS
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Pain and inflammation are implicated in virtually all human and animal diseases, and they are usually produced by physical, chemical, and biological stimuli, or some combination of these (Nathan. 2002. Nature. 420(6917):846–852). The typical characteristics of inflammation are redness, swelling, heat, pain, and dysfunction. Therefore, there are always interactions between pain and inflammation. Analgesics are a kind of medicines in general which can relieve the feeling of pain. Conventional analgesics play an important role in pain therapy, but they always cause kinds of adverse effects during clinic use (Deciga-Campos and Gonzalez-Trujano. 2005. Proceedings of the Western Pharmacology Society. 48:70–72). The same as the analgesics, nonsteroidal anti-inflammatory drugs (NSAIDs) are the primary therapy for diseases with a chronic inflammatory response, but long-term use often causes severe side effects, including cardiovascular and gastrointestinal complications that limit their development (Orlando, R.A; et al. 2010. Journal of Medicinal Food. 13(4):888–895; Burke, A; et al. 2006. Goodman and Gilman’s the Pharmacological Basis of Therapeutics. 671–716, McGrawHill, New York, NY, USA). Therefore, the research for new analgesic and anti-inflammation agents are critically.
</p>

<h3 style="font-size: 22px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;">
    MATERIALS AND METHODS
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Formulation 1.12 was obtained from PPG Nutritional Company. All the reagents used were of high purity. They were bought from the Sigma Company (USA); Carrageen, nitrogen monoxide (NO), malondialdehyde (MDA), superoxide dismutase (SOD).
</p>


<!-- Animals -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Animals
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Young adult males (average weight 18 ± 2 g) and females (average weight 18 ± 2 g) SPF mice and Males Bald/C (average weight 180–220 g) and Sprague-Dawley (SD) rats were bought from the Medicine Faculty UNAM, México, and were housed in environmentally controlled rooms (25 ± 2°C, 12 h light/12 h dark cycle) with free access to standard chow obtained from the Medicine Faculty UNAM, México, and tap water. The animals were distributed randomly in different experimental groups. Both of them were kept in well-ventilated sterile polypropylene cages. Each cage contained an equal number of mice or rats of the same sex. Based on the Guidelines of the International Committee on Laboratory Animals, they were maintained at a controlled temperature of 25 ± 3°C and relative humidity of 55 ± 5%, with a 12 h light/dark cycle and the lights off at 7 p.m. They had access to sterilized water and food ad libitum. Experiments were started after the animals acclimated for a week.
</p>

<!-- Xylene-Evoked Ear Oedema Test -->
<h3 style="font-size: 22px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;">
    Xylene-Evoked Ear Oedema Test
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Fifty mice were randomly divided into five groups of 5 males and 5 females each. Different groups of animals were treated with physiological saline, DMZ (2 mg/kg), and RSV (30, 10, and 3 mg/kg), respectively. The mice were orally administered once a day for 7 consecutive days. On the 7th day, after 1 hour of administration, the mice in each group were daubed with 0.03 mL xylene on both sides of the right ear, with the left ear used as control (Ibrahim, B; et al. 2012. Journal of Ethnopharmacology. 141(1):282–289). After the application of xylene for 1 hour, all mice were euthanized under ether anesthesia, and both ears were cut down along the auricle baseline. Round pieces of ears were taken by a punch (diameter, 8 mm) and weighed using an electronic balance.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    The ear oedema degree (A) was calculated as the weight of the right piece minus the weight of the left piece. The inhibition rate (%) was calculated using the formula:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Inhibition rate% = (Difference in weight of ear (control) – Difference in weight of ear (treated) / Difference in weight of ear (control)) x 100
</p>

<!-- Acetic Acid-Induced Acute Pleurisy Test -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Acetic Acid-Induced Acute Pleurisy Test
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Forty-eight male rats were randomly divided into the following six groups: control group (physiological saline), negative control group (physiological saline), Dexamethasone DMZ (2 mg/kg), and high, medium, and low doses of Formulation 1.12 product-treated groups (40, 20, and 5 mg/kg). All rats were orally treated once a day for 7 consecutive days. On the 7th day, after 30 minutes of administration, the rats in each group were anesthetized with ether and then disinfected with ethanol on the right side of the chest. All rats were injected with 0.2 mL of 2% acetic acid (AC) except the control group (physiological saline). After 2 hours of inflammation, the rats were treated with corresponding drugs or physiological saline again. After 6 hours, all animals were euthanized under ether anesthesia. Blood was collected from the abdominal aorta, and serum was separated for the measurement of SOD and NO (SOD was tested by WST-1; NO was measured by nitrate reductive enzymatic method). The pleural cavity exudate was collected, and its volume was measured. The exudate (100 μL) was used for WBC count by a cell counting chamber (Shanghai Chemical Equipment Co., Ltd.).
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    Application of xylene on both sides of the right ear resulted in significant swelling, as shown in Table 4.1. Compared with the control group, the ear oedema degree of rats in the DMZ-treated and Formulation 1.12-treated groups was significantly inhibited (𝑃 < 0.01), with the inhibition rate in the DMZ-treated group being 39.62% and in the high, medium, and low doses of Formulation 1.12-treated groups being 16.26%, 23.56%, and 31.22%, respectively. This suggested that Formulation 1.12 and DMZ possessed anti-inflammatory activity, with DMZ showing better activity than Formulation 1.12. However, this may not be effective in anti-acute inflammatory disorders but rather in acute inflammatory disorders. This result was relevant to the existing finding that Formulation 1.12 could inhibit inflammation.
</p>


<!-- TABLA 3.1 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Anti-inflammatory effects of Formulation 1.12 on ear oedema test induced by xylene n=10 (x ± S)</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Groups</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosage</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Ear oedema degree (mg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Inhibition rate %</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Control</td>
      <td style="border: 1px solid #ddd; padding: 8px;">-</td>
      <td style="border: 1px solid #ddd; padding: 8px;">8,350 ± 0,821</td>
      <td style="border: 1px solid #ddd; padding: 8px;">-</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">DMZ</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">4,865 ± 0,742b</td>
      <td style="border: 1px solid #ddd; padding: 8px;">39,62</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulación 1.12</td>
      <td style="border: 1px solid #ddd; padding: 8px;">40 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">6,854 ± 0,313b</td>
      <td style="border: 1px solid #ddd; padding: 8px;">16,26</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulación 1.12</td>
      <td style="border: 1px solid #ddd; padding: 8px;">20 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">6,345 ± 0,724b</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,56</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulación 1.12</td>
      <td style="border: 1px solid #ddd; padding: 8px;">10 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">5,234 ± 1,225b</td>
      <td style="border: 1px solid #ddd; padding: 8px;">31,22</td>
    </tr>
  </tbody>
</table>
<p style="margin-bottom: 20px; text-align: justify;">In each line, different digits indicate significant statistical difference. b P < 0,01 versus blank control.</p>

<!-- TABLA 3.2 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Anti-inflammatory effects of Formulation 1.12 on the number of WBC and the volume of exudate of acute pleurisy test induced by acetic acid n=8 (x ± S)</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Groups</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Dosage</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Volume of exudate (mL)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">WBC (x10<sup>9</sup>/L)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Control</td>
      <td style="border: 1px solid #ddd; padding: 8px;">-</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2,335 ± 0,422</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3,135 ± 01324</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Negative Control</td>
      <td style="border: 1px solid #ddd; padding: 8px;">-</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3,868 ± 0,136b</td>
      <td style="border: 1px solid #ddd; padding: 8px;">11,340 ± 2,363b</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">DMZ</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2,424 ± 0,310d</td>
      <td style="border: 1px solid #ddd; padding: 8px;">5,335 ± 1,524d</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulación 1.12</td>
      <td style="border: 1px solid #ddd; padding: 8px;">40 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2,274 ± 0,236d</td>
      <td style="border: 1px solid #ddd; padding: 8px;">5,426 ± 1,125d</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulación 1.12</td>
      <td style="border: 1px solid #ddd; padding: 8px;">20 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2,445 ± 0,524d</td>
      <td style="border: 1px solid #ddd; padding: 8px;">6,335 ± 0,628d</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulación 1.12</td>
      <td style="border: 1px solid #ddd; padding: 8px;">10 mg/kg</td>
      <td style="border: 1px solid #ddd; padding: 8px;">2,134 ± 0,388d</td>
      <td style="border: 1px solid #ddd; padding: 8px;">5,335 ± 0,927d</td>
    </tr>
  </tbody>
</table>
<p style="margin-bottom: 20px; text-align: justify;">In each line, different digits indicate significant statistical difference. b P < 0,01 versus blank control. d P < 𝑃0, 01 versus negative control.</p>

<!-- EXAMPLE 4 -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    EXAMPLE 4: PLATELET AGGREGATION IN RATS (FORMULATION 1.1)
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    The propensity of platelets to clump together at sites of vascular injury was first recognized more than 100 years ago. This phenomenon, most accurately described as platelet cohesion although more commonly referred to as platelet aggregation, was quickly identified as important for hemostatic plug formation. It was also recognized at the time that platelets played a key role in the development of thrombosis, but, it was not until almost a century later that it became widely accepted that platelets played a pivotal role in the development of cardiovascular disease (Bhatt and Topol. 2003. Nat Rev Drug Discov. 2:15-28). As a consequence, inhibitors of platelet aggregation have become increasingly important parts of the armamentarium for the prevention and treatment of many atherothrombotic disorders (Jackson and Schoenwaelder. 2003. Nat Rev Drug Discov. 2:775-789; Ruggeri. 2002. Nat Med. 8:1227-1234).
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Coronary artery disease (CAD) constitutes a major cause of morbidity and mortality worldwide. Since platelets are involved in the development of atherosclerosis and superimposed thrombosis (Jenning. 2009. Thromb Haemost. 102(2):248-257). The use of anti-platelet agents reduces the incidence and severity of CAD (Patrono, L.K; et al. 2009. CHEST. 102(2):248-257; Lievre and Cucherat. 2010. Fundam Clin Pharmacol. 24(3):385-391).
</p>

<!-- TABLE 4.1 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Effect of Formulation 1.1 on platelet aggregation induced ex vivo by ADP in rats</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Groups</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Doses (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Aggregation (%) ADP (1,3*10<sup>-5</sup> mol/L)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Inhibition (%)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Control</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">41,8 ± 2,6</td>
      <td style="border: 1px solid #ddd; padding: 8px;">-</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulation 1.1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">20</td>
      <td style="border: 1px solid #ddd; padding: 8px;">36,6 ± 2,7</td>
      <td style="border: 1px solid #ddd; padding: 8px;">11,2</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulation 1.1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">40</td>
      <td style="border: 1px solid #ddd; padding: 8px;">31,5 ± 2,8**</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,6</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulation 1.1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">80</td>
      <td style="border: 1px solid #ddd; padding: 8px;">32,4 ± 2,5**</td>
      <td style="border: 1px solid #ddd; padding: 8px;">21,5</td>
    </tr>
  </tbody>
</table>
<p style="margin-bottom: 20px; text-align: justify;">**p < 0,001 Comparison with control group.</p>

<!-- TABLE 4.2 -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <caption style="caption-side: bottom; font-weight: bold;">Effect of Formulation 1.1 on platelet aggregation induced ex vivo by collagen in rats</caption>
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Groups</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Doses (mg/kg)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Aggregation (%) (collagen 16 µ/mL)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Inhibition (%)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Control</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">34,8 ± 6,5</td>
      <td style="border: 1px solid #ddd; padding: 8px;">-</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulation 1.1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">20</td>
      <td style="border: 1px solid #ddd; padding: 8px;">14,6 ± 6,2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">55,1</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulation 1.1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">40</td>
      <td style="border: 1px solid #ddd; padding: 8px;">11,8 ± 4,6**</td>
      <td style="border: 1px solid #ddd; padding: 8px;">62,4</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Formulation 1.1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">80</td>
      <td style="border: 1px solid #ddd; padding: 8px;">6,9 ± 4,5**</td>
      <td style="border: 1px solid #ddd; padding: 8px;">77,5</td>
    </tr>
  </tbody>
</table>
<p style="margin-bottom: 20px; text-align: justify;">**p < 0,001 Comparison with control group.</p>

<p style="margin-bottom: 20px; text-align: justify;">
    This study demonstrates that single oral doses of Formulation 1.1 (20-80 mg/kg) significantly inhibited platelet aggregation induced ex vivo by ADP and collagen in rats. This substance was more effective in collagen than in ADP-induced aggregation as indicated by the effect achieved with the highest dose used (77,5%). Despite these inhibitions being marked, we can't affirm that they correspond to the maximal effects since no plateau effect was obtained and no higher doses were assayed, a fact that remarks the high efficacy of Formulation 1.1 for lowering collagen-induced platelet aggregation. Thus, Formulation 1.1 was more effective for inhibiting collagen than ADP induced platelet aggregation. Dose dependence was observed with Formulation 1.1 for inhibiting collagen-induced platelet aggregation.
</p>

<!-- EXAMPLE 5 -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    EXAMPLE 5: CLINICS
</h3>

<!-- Example 5.1 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Example 5.1
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Male, 60 years old, type 2 diabetic and insulin-dependent with elevated levels of uric acid was treated with 20 mg of Formulation 1.1. At 4 weeks, the uric acid had returned to normal levels.
</p>
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Uric Acid (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Baseline (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 4</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 52</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">14,0</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0,2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3,3</td>
    </tr>
  </tbody>
</table>

<!-- Example 5.2 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Example 5.2
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Male, 59 years old; Diabetic, Type 2 insulin-dependent with mildly elevated uric acid levels treated with 20 mg Formulation 1.1 per day for 24 weeks.
</p>
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Uric Acid (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Baseline (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 24</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">8,7</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3,7</td>
    </tr>
  </tbody>
</table>

<!-- Example 5.3 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Example 5.3
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Male, 66 years old, hypertensive patient with elevated potassium levels treated with Formulation 1.1 at 40 mg for 4 weeks.
</p>
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Potassium (mmol/l)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Baseline (mmol/l)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">8,7</td>
      <td style="border: 1px solid #ddd; padding: 8px;">3,7</td>
    </tr>
  </tbody>
</table>

<!-- Example 5.4 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Example 5.4
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Male, 63 years old, insulin-dependent diabetic treated with 20 mg of Formulation 1.1 per day for 52 weeks.
</p>
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Lp(a) (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Baseline (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 4</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 24</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 52</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">90</td>
      <td style="border: 1px solid #ddd; padding: 8px;">55,2</td>
      <td style="border: 1px solid #ddd; padding: 8px;">40,1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">24,9</td>
    </tr>
  </tbody>
</table>

<!-- Example 5.5 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Example 5.5
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Female, 59 years old, insulin-dependent diabetic with elevated Lp(a) levels treated with 20 mg Formulation 1.1 for 24 weeks.
</p>
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Lp(a) (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Baseline (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 4</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 24</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">92</td>
      <td style="border: 1px solid #ddd; padding: 8px;">60,8</td>
      <td style="border: 1px solid #ddd; padding: 8px;">27,1</td>
    </tr>
  </tbody>
</table>

<!-- Example 5.6 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Example 5.6
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Male, 54 years old, insulin-dependent type 2 diabetic treated with 40 mg per day of Formulation 1.1 for 24 weeks.
</p>
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Lp(a) (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Baseline (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">65</td>
      <td style="border: 1px solid #ddd; padding: 8px;">25,2</td>
    </tr>
  </tbody>
</table>

<!-- Example 5.7 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Example 5.7
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Female, 44 years old, insulin-dependent type 2 diabetic with elevated Lp(a) levels treated with 20 mg per day of Formulation 1.1 for 4 weeks.
</p>
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Lp(a) (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Baseline (mg/dl)</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">70</td>
      <td style="border: 1px solid #ddd; padding: 8px;">23,7</td>
    </tr>
  </tbody>
</table>

<!-- Example 5.8 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Example 5.8
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Patients were type 2 diabetic and insulin-dependent, treated with Formulation 1.1 at 20 mg for 24 weeks.
</p>
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
  <thead>
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px;">Patient</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Baseline Ratio</th>
      <th style="border: 1px solid #ddd; padding: 8px;">Week 24</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Female 62 years old</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0,6</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Male 53 years old</td>
      <td style="border: 1px solid #ddd; padding: 8px;">1,6</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0,8</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Female 59 years old</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0,9</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0,3</td>
    </tr>
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px;">Male 57 years old</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0,8</td>
      <td style="border: 1px solid #ddd; padding: 8px;">0,4</td>
    </tr>
  </tbody>
</table>

<!-- Section 9.3 -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    9.3. Otros ensayos que justifican las diferentes formulaciones (Anexos)
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Aquí se incluyen los ensayos complementarios que sustentan la elección y eficacia de las formulaciones propuestas. Estos anexos proveen datos adicionales que corroboran los resultados principales, asegurando la robustez y validez científica de las conclusiones obtenidas.
</p>

<!-- Section 10 -->
<h2 style="font-size: 24px; color: #c62828; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    10. INNOVACIONES TECNOLÓGICAS RECIENTES
</h2>

<!-- Section 10.1 -->
<h3 style="font-size: 22px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;">
    10.1. Liderando la Innovación y la Gestión Tecnológica en PPG NUTRITIONAL
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    En un mundo donde la ciencia y la tecnología evolucionan a un ritmo vertiginoso, “PPG NUTRITIONAL” se posiciona para convertirse en un líder indiscutible en la integración de innovaciones tecnológicas avanzadas con soluciones de terapéutica y nutrición inteligente de vanguardia. Nuestra compañía ha desarrollado un enfoque estratégico que combina investigación de alto impacto con una gestión tecnológica eficiente, lo que nos permite no solo responder a las demandas actuales del mercado, sino también anticipar y preparar el terreno para las necesidades del futuro. Desde la adopción de tecnologías disruptivas como la inteligencia artificial, la biotecnología vegetal, proteómica, genómica, química espacial y el análisis de grandes volúmenes de datos genéticos, hasta la implementación de avanzados sistemas de producción y distribución, junto a nuestros socios, “PPG NUTRITIONAL” da pasos firmes para establecer un nuevo estándar en la industria. Estos adelantos nos han permitido optimizar la formulación, producción, y personalización de nuestras gamas de productos, garantizando su eficacia y calidad en cada etapa del proceso. En este apartado, destacaremos los avances más recientes en nuestras gestiones e innovaciones tecnológicas, mostrando cómo “PPG NUTRITIONAL” se perfila para mejorar la gama de productos que ya comercializa, a la vez que proyecta el liderazgo en la producción de terapéuticos y alimentos inteligentes, transformando la forma en que se concibe el bienestar a nivel global con productos de alta tecnología, eficacia y altos estándares de calidad que proporcionan confianza a clientes y pacientes. Estos desarrollos no solo reafirman nuestro compromiso con la excelencia, sino que también demuestran nuestra capacidad para seguir innovando y creciendo en un mercado altamente competitivo.
</p>

<!-- Section 10.2 -->
<h3 style="font-size: 22px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;">
    10.2. Macroproyecto para obtener materias primas y productos terminados
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    PPG NUTRITIONAL está liderando un ambicioso macroproyecto que tiene como objetivo innovar en tecnologías, productos y servicios que, al ser implementados, se convertirán en referentes en calidad y beneficios para la salud a través de la obtención de gamas de productos terapéuticos y alimentos inteligentes que, además de mejorar la calidad de vida local, también crearán soluciones que puedan ser adoptadas a gran escala en otras partes del mundo. El macroproyecto contará con una infraestructura integral que incluye:
</p>

<!-- Section 10.2.1 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    10.2.1. Obtención de aceite de cannabis y elaboración de productos terapéuticos
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    A pesar de que las ventas de cannabis a nivel internacional actualmente superan los $20 mil millones de dólares, y se prevé que alcancen los $50 mil millones para el año 2025, la realidad es que pocos productores a nivel mundial poseen la capacidad y competencia para abastecer la creciente demanda internacional. Si bien es cierto que empresas canadienses, europeas, israelíes y australianas se han involucrado en acuerdos de comercio internacional, estos solo logran pequeños volúmenes de formulados o productos finales, lo que dificulta establecer un precio de mercado justo para el comercio internacional al por mayor. Además, la legalización por parte de naciones, e incluso gobiernos estatales y federales, para la venta de estos productos sigue siendo una barrera.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Relacionado con lo anterior, científicos e inversionistas de “PPG NUTRITIONAL” han desarrollado una novedosa tecnología que, a partir de la clonación de varias especies de cannabis en condiciones controladas, permite obtener aceites mediante procesos de destilación con adecuados rendimientos, pureza y concentraciones de CBD y otros activos que son indispensables para la elaboración, a gran escala, de medicamentos, suplementos y otros productos de interés exclusivo en la medicina.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Como parte de la estrategia para poder producir los productos terapéuticos, además de la Biofábrica, es necesario construir casas de cultivos con capacidad para laborar en aproximadamente 25 millones de plántulas anuales; una planta de destilación de los aceites a partir del cannabis cosechado; y un laboratorio para la producción de medicamentos con equipamiento especializado en cápsulas blandas y duras, semisólidos y soluciones. Para esto contamos con la anuencia del premier de una Isla, y todo su gabinete, para cultivar las diferentes especies del cannabis, destilar los aceites y producir los medicamentos y otros productos de uso exclusivo medicinal; por lo que contamos con los permisos, terrenos, infraestructuras y otras garantías que hacen de este un proyecto viable para inversores y el país en cuestión.
</p>

<!-- Section: Cost Breakdown -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Inversión en una biofábrica de 10 millones de plántulas al año
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    COSTO TOTAL ESTIMADO: US $4 millones 750,000 que se desglosan de la forma siguiente:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Proyecto civil y ejecutivo: 5 % presupuesto</li>
    <li>Movimiento de tierra y obra civil: 50 % presupuesto</li>
    <li>Ingeniería: 14.51 % presupuesto</li>
    <li>Equipamiento: 20.49 % presupuesto</li>
    <li>Puesta en marcha y logística de inicio: 5 % presupuesto</li>
    <li>Supervisión y asesoría: 5 % presupuesto</li>
</ul>

<!-- Section: Project Phases -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    ETAPAS DEL PROYECTO
</h4>

<!-- Phase 1 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 1. Diseño de la instalación
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Elaboración y aprobación del proyecto ejecutivo que incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Presupuesto inicial sobre el valor total de la inversión.</li>
    <li>Documento con la memoria o tarea técnica del proyecto.</li>
    <li>Listado de equipamiento, muebles e insumos con los principales suministradores.</li>
    <li>Requisitos para la selección de las especies de cannabis y el personal.</li>
    <li>Proyecto ejecutivo aprobado.</li>
</ul>

<!-- Phase 2 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 2. Ejecución y control de obras
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta etapa tiene como objetivo el control de obras, verificando el cumplimiento del proyecto aprobado y el montaje del equipamiento tecnológico y de laboratorio. Comprende desde la terminación de la construcción civil hasta el montaje de equipos, dejando la instalación lista para el inicio de las operaciones. Incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Verificación del cumplimiento del proyecto aprobado.</li>
    <li>Verificación de la instalación del equipamiento tecnológico.</li>
</ul>

<!-- Phase 3 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 3. Instalación del equipamiento y puesta en marcha de la instalación
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La asesoría para la puesta en marcha de la instalación es una etapa importante que permite iniciar las labores de cultivo in vitro. Incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Supervisión de la instalación del equipamiento de laboratorio.</li>
    <li>Montaje de los biorreactores (SETIS).</li>
    <li>Montaje de los biorreactores para obtener células troncales de plantas.</li>
    <li>Adiestramiento de personal en las tecnologías de cultivo in vitro y manejo del equipamiento.</li>
</ul>

<!-- Phase 4 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 4. Producción a escala masiva y consolidación de la instalación según capacidad proyectada
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta etapa comprende la estancia por ocho (8) meses de un consultor, prorrogables según necesidades, con el objetivo de consolidar los procesos productivos para que la instalación pueda lograr la capacidad técnica proyectada.
</p>

<!-- Inversión en invernaderos -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Inversión en invernaderos
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    COSTO TOTAL ESTIMADO: US $2 millones 100,000 que se desglosan en:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Proyecto civil y ejecutivo: 5 % presupuesto.</li>
    <li>Movimiento de tierra y obra civil: 17 % presupuesto.</li>
    <li>Ingeniería: 13 % presupuesto.</li>
    <li>Equipamiento y accesorios: 57 % presupuesto.</li>
    <li>Puesta en marcha y logística de inicio: 5 % presupuesto.</li>
    <li>Supervisión y asesoría: 3 % presupuesto.</li>
</ul>

<!-- Etapas del proyecto -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Etapas del proyecto
</h4>

<!-- Etapa 1 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 1. Diseño de las casas de cultivos
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Elaboración y aprobación del proyecto ejecutivo que incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Presupuesto inicial sobre el valor total de la inversión.</li>
    <li>Documento con la memoria o tarea técnica del proyecto.</li>
    <li>Listado de equipamiento, materiales e insumos con los principales suministradores.</li>
    <li>Requisitos para la selección del personal.</li>
    <li>Proyecto ejecutivo aprobado.</li>
</ul>

<!-- Etapa 2 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 2. Ejecución y control de obras
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta etapa tiene como objetivo el control de obras, verificando el cumplimiento del proyecto aprobado y el montaje del equipamiento tecnológico y materiales. Comprende desde la terminación de la construcción civil hasta el montaje de los techos de las casas de cultivos y equipos para el control de la temperatura, humedad relativa, y otros factores que posibilitan el crecimiento adecuado de las plantas. Incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Verificación del cumplimiento del proyecto aprobado.</li>
    <li>Verificación de la instalación de las casas de cultivos y los equipos y accesorios auxiliares.</li>
</ul>

<!-- Etapa 3 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 3. Instalación de los equipos y accesorios auxiliares y puesta en marcha de la instalación
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La asesoría para la puesta en marcha de la instalación es una etapa importante que permite establecer todos los parámetros que garantizarán el crecimiento y el proceso de atenciones culturales de forma adecuada para obtener los rendimientos deseados y, consecuentemente, la calidad del aceite esperada. Esta etapa incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Supervisión de la instalación de las casas de cultivo y los medios de control auxiliares.</li>
    <li>Adiestramiento del personal en el manejo adecuado de las atenciones culturales de las diferentes especies de cannabis.</li>
    <li>Establecimiento de los sistemas de gestión de calidad total (mandato ambiental, manejo de residuos químicos y biológicos, entre otros).</li>
</ul>

<!-- Etapa 4 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 4. Producción a escala de campos de cannabis según capacidad proyectada
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta etapa comprende la estancia por seis (6) meses de un consultor, prorrogables según necesidades, con el objetivo de consolidar los procesos productivos para que la instalación pueda lograr la capacidad técnica proyectada.
</p>

<!-- Inversión en planta de destilación de aceites -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Inversión en planta de destilación de aceites
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    COSTO TOTAL ESTIMADO: US $3 millones 700,000 que se desglosan en:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Proyecto civil y ejecutivo: 5 % presupuesto.</li>
    <li>Movimiento de tierra y obra civil: 25 % presupuesto.</li>
    <li>Ingeniería: 15 % presupuesto.</li>
    <li>Equipamiento: 47 % presupuesto.</li>
    <li>Puesta en marcha y logística de inicio: 5 % presupuesto.</li>
    <li>Supervisión y asesoría: 3 % presupuesto.</li>
</ul>

<!-- Etapas del proyecto para la planta de destilación -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    ETAPAS DEL PROYECTO
</h4>

<!-- Etapa 1 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 1. Diseño de la instalación
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Elaboración y aprobación del proyecto ejecutivo que incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Presupuesto inicial sobre el valor total de la inversión.</li>
    <li>Documento con la memoria o tarea técnica del proyecto.</li>
    <li>Listado de equipamiento, muebles e insumos con los principales suministradores.</li>
    <li>Requisitos para la selección del personal.</li>
    <li>Proyecto ejecutivo aprobado.</li>
</ul>

<!-- Etapa 2 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 2. Ejecución y control de obras
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta etapa tiene como objetivo el control de obras, verificando el cumplimiento del proyecto aprobado y el montaje del equipamiento tecnológico y de laboratorio. Comprende desde la terminación de la construcción civil hasta el montaje de equipos, dejando la instalación lista para el inicio de las operaciones. Incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Verificación del cumplimiento del proyecto aprobado.</li>
    <li>Verificación de la instalación del equipamiento tecnológico.</li>
</ul>

<!-- Etapa 3 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 3. Instalación del equipamiento y puesta en marcha de la instalación
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La asesoría para la puesta en marcha de la instalación es una etapa importante que permite establecer el equipamiento analítico y las técnicas que garantizarán la calidad del aceite obtenido. Esta etapa incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Supervisión de la instalación del equipamiento analítico y otros utensilios de laboratorio.</li>
    <li>Montaje del equipo de destilación.</li>
    <li>Desarrollo, validación e implementación de las técnicas analíticas.</li>
    <li>Adiestramiento del personal en el manejo de las técnicas analíticas.</li>
    <li>Adiestramiento del personal en el manejo del equipo de destilación de aceite que posee una bomba de CO2 supercrítica, una bomba modificadora de transferencia de solvente, un recipiente de extracción, un baño termostático y una válvula automática de control de presión, todos conectados en línea con parámetros de extracción que incluyen presión, temperatura y codisolvente/volumen, que se pueden cambiar para establecer condiciones óptimas de destilación con altos volúmenes de rendimiento.</li>
    <li>Establecimiento de los sistemas de gestión de calidad total (buenas prácticas de manufactura, mandato ambiental, manejo de residuos químicos y biológicos, entre otros).</li>
</ul>

<!-- Etapa 4 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 4. Producción a escala industrial de aceites de cannabis según capacidad proyectada
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta etapa comprende la estancia por cinco (5) meses de un consultor, prorrogables según necesidades, con el objetivo de consolidar los procesos productivos para que la instalación pueda lograr la capacidad técnica proyectada.
</p>

<!-- Inversión en planta de producción de medicamentos -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Inversión en planta de producción de medicamentos
</h4>

<p style="margin-bottom: 20px; text-align: justify;">
    El mercado de medicamentos, cosmecéuticos y suplementos nutricionales actualmente es de $23 mil 500 millones de dólares en 2023, y se prevé que crecerá en los próximos años a un ritmo del 21 %. La mayoría de estos productos son de origen químico, y son causantes de aproximadamente el 10 % de todas las muertes ocurridas anualmente a nivel mundial, solo superada por las defunciones relacionadas con las enfermedades cardiovasculares.
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    En contraposición con este concepto de desarrollo de medicamentos, los científicos y especialistas de “PPG NUTRITIONAL” han desarrollado una estrategia para la producción de medicamentos, cosmecéuticos y otros productos terapéuticos completamente veganos, que serán evaluados sin el uso de animales de laboratorio, durante las etapas de estudios de la efectividad y la seguridad.
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    Para esto contamos con una tecnología que nos posibilita obtener activos naturales a partir de células troncales de plantas, que usados en singular y/o en combinaciones nos da la posibilidad de obtener más de 250 productos de gran demanda y efectividad en la prevención y el tratamiento de más de 120 enfermedades y 1804 síndromes y alteraciones. Dentro de las novedades se incluyen las 5 especies de cannabis que se producirán en condiciones controladas para obtener aceites con la pureza y concentraciones de CBD y otros activos indispensables para la elaboración, a gran escala, de medicamentos, suplementos y otros productos de interés exclusivo en la medicina.
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    La producción de estos y otros productos justifica la construcción y puesta en marcha de una planta de producción de medicamentos en la que se elaborarán cápsulas blandas y duras, semisólidos, tabletas y soluciones orales.
</p>

<!-- Planta de producción de medicamentos -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Planta de producción de medicamentos
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    COSTO TOTAL ESTIMADO: US $17 millones 650,000 que se desglosan en:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Proyecto civil y ejecutivo: 5 % presupuesto.</li>
    <li>Movimiento de tierra y obra civil: 25.45 % presupuesto.</li>
    <li>Ingeniería: 15 % presupuesto.</li>
    <li>Equipamiento: 46.55 % presupuesto.</li>
    <li>Puesta en marcha y logística de inicio: 5 % presupuesto.</li>
    <li>Supervisión y asesoría: 3 % presupuesto.</li>
</ul>

<!-- Etapas del proyecto -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Etapas del proyecto
</h4>

<!-- Etapa 1 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 1. Diseño de la instalación
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Elaboración y aprobación del proyecto ejecutivo que incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Presupuesto inicial sobre el valor total de la inversión.</li>
    <li>Documento con la memoria o tarea técnica del proyecto.</li>
    <li>Listado de equipamiento tecnológico y para control de calidad química y microbiológica, equipos auxiliares de procesos, reactivos, materiales, muebles e insumos con los principales suministradores.</li>
    <li>Requisitos para la selección del personal.</li>
    <li>Proyecto ejecutivo aprobado.</li>
</ul>

<!-- Etapa 2 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 2. Ejecución y control de obras
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta etapa tiene como objetivo el control de obras, verificando el cumplimiento del proyecto aprobado y el montaje del equipamiento tecnológico, control analítico y microbiológico, y los equipos auxiliares de los procesos de producción de la planta. Comprende desde la terminación de la construcción civil hasta el montaje de todos los equipos y accesorios, dejando la instalación lista para el inicio de las operaciones. En esta etapa se incluyen las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Verificación del cumplimiento del proyecto aprobado.</li>
    <li>Verificación de la instalación del equipamiento tecnológico, control analítico y microbiológico, y los auxiliares a los procesos de producción de la planta.</li>
</ul>

<!-- Etapa 3 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 3. Instalación del equipamiento y puesta en marcha de la instalación
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La asesoría para la puesta en marcha de la instalación es una etapa importante que permite establecer el equipamiento tecnológico, control analítico y microbiológico, así como el equipamiento auxiliar que garantizarán la calidad y aceptación de las diferentes formas farmacéuticas. Esta etapa incluye las siguientes tareas:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Supervisión de la instalación del equipamiento tecnológico, control analítico y microbiológico, equipos auxiliares de procesos y otros utensilios de laboratorio.</li>
    <li>Montaje de las encapsuladoras, tableteadoras, biorreactores para elaborar semisólidos, y equipamiento para producir soluciones.</li>
    <li>Desarrollo, validación e implementación de las técnicas para el control de calidad químico y microbiológico.</li>
    <li>Adiestramiento del personal en el manejo de las técnicas para el control de calidad químico y microbiológico.</li>
    <li>Adiestramiento del personal en el manejo de los equipos para la producción de cápsulas, tabletas, semisólidos, soluciones, y los equipos auxiliares de estos procesos.</li>
    <li>Establecimiento de los sistemas de gestión de calidad total (buenas prácticas de manufactura, mandato ambiental, manejo de residuos químicos y biológicos, entre otros).</li>
</ul>

<!-- Etapa 4 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    Etapa 4. Producción a escala industrial de cápsulas, tabletas, cremas, pomadas, ungüentos, jarabes, soluciones, etc.
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta etapa comprende la estancia por seis (6) meses de consultores, prorrogables según necesidades, con el objetivo de consolidar los procesos productivos para que la instalación pueda lograr la capacidad técnica proyectada.
</p>

<!-- Proyección y retorno de la inversión 2025-2030 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #ef6c00; padding-bottom: 5px;">
    Proyección y retorno de la inversión 2025-2030
</h4>

<!-- Desglose de la inversión total -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    2025-2030. Desglose de la Inversión total en construcción y equipamiento de instalaciones:
</h5>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Biofábrica: 4 750 000 US $</li>
    <li>Invernaderos: 2 100 000 US $</li>
    <li>Planta destiladora de aceites: 3 700 000 US $</li>
    <li>Laboratorio de producción de medicamentos: 17 650 000 US $</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    Retorno: 0%
</p>

<!-- Inversión estimada para la primera producción de aceites -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    2025. Inversión estimada para la primera producción de aceites que incluye:
</h5>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Producción de plántulas de las especies de cannabis seleccionadas:</li>
    <ul style="margin-bottom: 20px; text-align: justify; padding-left: 40px;">
        <li>Total: 70 000 plántulas</li>
        <li>Costo de producción por plántula: 0.35 US $</li>
        <li>Costo de producción total: 24 500 US $ (incluye electricidad, agua, reactivos, insumos, mano de obra, y otros gastos)</li>
    </ul>
    <li>Obtención de biomasa (materia prima) para obtener el aceite:</li>
    <ul style="margin-bottom: 20px; text-align: justify; padding-left: 40px;">
        <li>Producción: 70 000 plantas</li>
        <li>Número de plantas/hectárea: 7000</li>
        <li>Número de hectáreas necesarias: 10 ha</li>
        <li>Rendimiento estimado de biomasa/planta: 0.450 g</li>
        <li>Rendimiento estimado de biomasa/hectárea: 3150 kg</li>
        <li>Total de biomasa: 31 500 kg</li>
        <li>Costo de producción por hectárea: 7 000 US $</li>
        <li>Costo de producción para 10 hectáreas: 70 000 US $ (incluye electricidad, agua, fertilizantes orgánicos, insumos, mano de obra, y otros gastos)</li>
    </ul>
    <li>Obtención de aceite:</li>
    <ul style="margin-bottom: 20px; text-align: justify; padding-left: 40px;">
        <li>Biomasa por destilar: 31 500 kg</li>
        <li>Rendimiento estimado de biomasa en aceite: 10 g biomasa/1 ml aceite</li>
        <li>Litros de aceite estimados: 3150 litros</li>
        <li>Costo de producción estimado para destilar un litro: 870 US $</li>
        <li>Costo de producción estimado para destilar 3150 litros: 2 740 500 US $ (incluye electricidad, agua, fertilizantes orgánicos, insumos, mano de embalaje, y otros gastos)</li>
    </ul>
    <li>Ventas netas de 3150 litros: 37 800 000 US $</li>
    <li>Rentabilidad sobre ventas totales: 31 025 200 US $</li>
    <li>Beneficios netos estimados al descontar inversión inicial: 6 765 000 US $</li>
</ul>

<!-- Inversión 2026 -->
<h5 style="font-size: 18px; color: #ef6c00; margin-bottom: 15px; text-align: left;">
    2026 - Inversión = 0 US $
</h5>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li>Producción de plántulas de las especies de cannabis seleccionadas:</li>
    <ul style="margin-bottom: 20px; text-align: justify; padding-left: 40px;">
        <li>Total: 175 000 plántulas</li>
        <li>Costo de producción por plántula: 0.35 US $</li>
        <li>Costo de producción total: 61 250 US $ (incluye electricidad, agua, reactivos, insumos, mano de obra, y otros gastos)</li>
    </ul>
    <li>Obtención de biomasa (materia prima) para obtener el aceite:</li>
    <ul style="margin-bottom: 20px; text-align: justify; padding-left: 40px;">
        <li>Producción: 175 000 plantas</li>
        <li>Número de plantas/hectárea: 7000</li>
        <li>Número de hectáreas necesarias: 25 ha</li>
        <li>Rendimiento estimado de biomasa/planta: 0.450 g</li>
        <li>Rendimiento estimado de biomasa/hectárea: 3150 kg</li>
        <li>Total de biomasa: 78 750 kg</li>
        <li>Costo de producción por hectárea: 7 000 US $</li>
        <li>Costo de producción para 25 hectáreas: 175 000 US $ (incluye electricidad, agua, fertilizantes orgánicos, insumos, mano de obra, y otros gastos)</li>
    </ul>
    <li>Obtención de aceite:</li>
    <ul style="margin-bottom: 20px; text-align: justify; padding-left: 40px;">
        <li>Biomasa por destilar: 78 750 kg</li>
        <li>Rendimiento estimado de biomasa en aceite: 10 g biomasa/1 ml aceite</li>
        <li>Litros de aceite estimados: 7875 litros</li>
        <li>Costo de producción estimado para destilar un litro: 870 US $</li>
        <li>Costo de producción estimado para destilar 7875 litros: 6 851 250 US $ (incluye electricidad, agua, fertilizantes orgánicos, insumos, mano de embalaje, y otros gastos)</li>
    </ul>
    <li>Ventas totales / 60% aceite obtenido (4725 litros): 56 700 000 US $</li>
    <li>Ventas totales/ productos elaborados en planta de medicamentos: 98 450 000 US $</li>
    <li>Ventas Netas totales: 155 150 000 US $</li>
    <li>Beneficios netos estimados: 148 062 500 US $</li>
</ul>


<!-- 2027 Inversión -->
<h4 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left;">
    2027 - Inversión = US $1,700,000 para instalar nuevos equipos de destilación y mantenimiento
</h4>
<div style="margin-bottom: 20px;">
    <p style="margin-bottom: 10px; text-align: justify;">
        <strong>Producción de plántulas de las especies de cannabis seleccionadas:</strong>
    </p>
    <ul style="margin-bottom: 10px; padding-left: 20px;">
        <li>Total: 350,000 plántulas</li>
        <li>Costo de producción por plántula: US $0.35</li>
        <li>Costo de producción total: US $122,500 (incluye electricidad, agua, reactivos, insumos, mano de obra y otros gastos)</li>
    </ul>

    <p style="margin-bottom: 10px; text-align: justify;">
        <strong>Obtención de biomasa (materia prima) para obtener el aceite:</strong>
    </p>
    <ul style="margin-bottom: 10px; padding-left: 20px;">
        <li>Producción: 350,000 plantas</li>
        <li>Número de plantas/hectárea: 7,000</li>
        <li>Número de hectáreas necesarias: 50 ha</li>
        <li>Rendimiento estimado de biomasa/planta: 0.450 g</li>
        <li>Rendimiento estimado de biomasa/hectárea: 3,150 kg</li>
        <li>Total de biomasa: 157,500 kg</li>
        <li>Costo de producción por hectárea: US $7,000</li>
        <li>Costo de producción para 50 hectáreas: US $350,000 (incluye electricidad, agua, fertilizantes orgánicos, insumos, mano de obra y otros gastos)</li>
    </ul>

    <p style="margin-bottom: 10px; text-align: justify;">
        <strong>Obtención de aceite:</strong>
    </p>
    <ul style="margin-bottom: 10px; padding-left: 20px;">
        <li>Biomasa por destilar: 157,500 kg</li>
        <li>Rendimiento estimado de biomasa en aceite: 10 g biomasa/1 ml aceite</li>
        <li>Litros de aceite estimados: 15,750 litros</li>
        <li>Costo de producción estimado para destilar un litro: US $870</li>
        <li>Costo de producción estimado para destilar 15,750 litros: US $13,702,500 (incluye electricidad, agua, fertilizantes orgánicos, insumos, mano de embalaje, y otros gastos)</li>
    </ul>

    <p style="margin-bottom: 10px; text-align: justify;">
        Ventas netas del 40% del aceite obtenido (6,300 litros): US $756,000,000<br>
        Ventas netas de productos elaborados en la planta de medicamentos: US $249,650,000<br>
        <strong>Beneficios netos estimados:</strong> US $866,475,000
    </p>
</div>

<!-- 2028 Inversión -->
<h4 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left;">
    2028 - Inversión = US $0
</h4>
<div style="margin-bottom: 20px;">
    <p style="margin-bottom: 10px; text-align: justify;">
        <strong>Producción de plántulas de las especies de cannabis seleccionadas:</strong>
    </p>
    <ul style="margin-bottom: 10px; padding-left: 20px;">
        <li>Total: 350,000 plántulas</li>
        <li>Costo de producción por plántula: US $0.35</li>
        <li>Costo de producción total: US $122,500 (incluye electricidad, agua, reactivos, insumos, mano de obra y otros gastos)</li>
    </ul>

    <p style="margin-bottom: 10px; text-align: justify;">
        <strong>Obtención de biomasa (materia prima) para obtener el aceite:</strong>
    </p>
    <ul style="margin-bottom: 10px; padding-left: 20px;">
        <li>Producción: 350,000 plantas</li>
        <li>Número de plantas/hectárea: 7,000</li>
        <li>Número de hectáreas necesarias: 50 ha</li>
        <li>Rendimiento estimado de biomasa/planta: 0.450 g</li>
        <li>Rendimiento estimado de biomasa/hectárea: 3,150 kg</li>
        <li>Total de biomasa: 157,500 kg</li>
        <li>Costo de producción por hectárea: US $7,000</li>
        <li>Costo de producción para 50 hectáreas: US $350,000 (incluye electricidad, agua, fertilizantes orgánicos, insumos, mano de obra y otros gastos)</li>
    </ul>

    <p style="margin-bottom: 10px; text-align: justify;">
        <strong>Obtención de aceite:</strong>
    </p>
    <ul style="margin-bottom: 10px; padding-left: 20px;">
        <li>Biomasa por destilar: 157,500 kg</li>
        <li>Rendimiento estimado de biomasa en aceite: 10 g biomasa/1 ml aceite</li>
        <li>Litros de aceite estimados: 15,750 litros</li>
        <li>Costo de producción estimado para destilar un litro: US $870</li>
        <li>Costo de producción estimado para destilar 15,750 litros: US $13,702,500 (incluye electricidad, agua, fertilizantes orgánicos, insumos, mano de embalaje, y otros gastos)</li>
    </ul>

    <p style="margin-bottom: 10px; text-align: justify;">
        Ventas del 20% del aceite obtenido (3,150 litros): US $3,780,000<br>
        Ventas en productos elaborados en la planta de medicamentos: US $49,930,000<br>
        <strong>Beneficios netos estimados:</strong> US $139,535,000
    </p>
</div>

<!-- 2029 Inversión -->
<h4 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left;">
    2029 - Inversión = US $0
</h4>
<div style="margin-bottom: 20px;">
    <p style="margin-bottom: 10px; text-align: justify;">
        <strong>Producción de plántulas de las especies de cannabis seleccionadas:</strong>
    </p>
    <ul style="margin-bottom: 10px; padding-left: 20px;">
        <li>Total: 350,000 plántulas</li>
        <li>Costo de producción por plántula: US $0.35</li>
        <li>Costo de producción total: US $122,500 (incluye electricidad, agua, reactivos, insumos, mano de obra y otros gastos)</li>
    </ul>

    <p style="margin-bottom: 10px; text-align: justify;">
        <strong>Obtención de biomasa (materia prima) para obtener el aceite:</strong>
    </p>
    <ul style="margin-bottom: 10px; padding-left: 20px;">
        <li>Producción: 350,000 plantas</li>
        <li>Número de plantas/hectárea: 7,000</li>
        <li>Número de hectáreas necesarias: 50 ha</li>
        <li>Rendimiento estimado de biomasa/planta: 0.450 g</li>
        <li>Rendimiento estimado de biomasa/hectárea: 3,150 kg</li>
        <li>Total de biomasa: 157,500 kg</li>
        <li>Costo de producción por hectárea: US $7,000</li>
        <li>Costo de producción para 50 hectáreas: US $350,000 (incluye electricidad, agua, fertilizantes orgánicos, insumos, mano de obra y otros gastos)</li>
    </ul>

    <p style="margin-bottom: 10px; text-align: justify;">
        <strong>Obtención de aceite:</strong>
    </p>
    <ul style="margin-bottom: 10px; padding-left: 20px;">
        <li>Biomasa por destilar: 157,500 kg</li>
        <li>Rendimiento estimado de biomasa en aceite: 10 g biomasa/1 ml aceite</li>
        <li>Litros de aceite estimados: 15,750 litros</li>
        <li>Costo de producción estimado para destilar un litro: US $870</li>
        <li>Costo de producción estimado para destilar 15,750 litros: US $13,702,500 (incluye electricidad, agua, fertilizantes orgánicos, insumos, mano de embalaje, y otros gastos)</li>
    </ul>

    <p style="margin-bottom: 10px; text-align: justify;">
        Ventas del 10% del aceite obtenido (1,575 litros): US $18,900,000<br>
        Ventas en productos elaborados en la planta de medicamentos: US $49,930,000<br>
        <strong>Beneficios netos estimados:</strong> US $139,535,000
    </p>
</div>

<!-- Propiedad Intelectual -->
<h2 style="font-size: 24px; color: #c62828; margin-bottom: 20px; text-align: left; border-bottom: 3px solid #c62828; padding-bottom: 10px;">
    11. Propiedad Intelectual
</h2>

<!-- Patentes Registradas (1) -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left;">
    11.1. Patentes Registradas (1)
</h3>

<!-- Patente uso azúcar “inteligentes” -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 10px; text-align: left;">
    11.1.1. Patente uso azúcar “inteligentes” en gamas de Productos nutricionales y alimentos Inteligentes
</h4>

<!-- Descripción de la Invención -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.1.2. Descripción de la Invención
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La invención se centra en un tipo de azúcar natural que ha sido evaluado y demostrado poseer propiedades únicas, convirtiéndolo en la opción ideal tanto para el consumo directo como para la producción de una amplia gama de alimentos procesados, productos terapéuticos, medicamentos, cosméticos y cosmecéuticos. Este azúcar es adecuado para el consumo directo, ya que está complementado con células troncales de plantas específicas, vitaminas, minerales y otros ingredientes activos vegetales, lo que potencia sus cualidades nutricionales y favorece el metabolismo y otros procesos biológicos vitales. Representa una alternativa saludable como endulzante en procesos industriales, especialmente en la producción de alimentos y productos terapéuticos altamente demandados, que no solo promueven la salud y el bienestar, sino que también contribuyen a prolongar la vida con calidad.
</p>

<!-- Derechos de Autor y Protección Legal -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.1.3. Derechos de Autor y Protección Legal
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La empresa “PPG NUTRITIONAL” ha solicitado una patente de uso de estos azucares en gamas de productos terapéuticos y nutricionales asegurando así los derechos de uso exclusivo de esta innovación. Esto significa que ninguna otra empresa podrá replicar nuestro método sin nuestra autorización, lo que nos otorga una ventaja competitiva significativa en el mercado de los alimentos procesados que usan azucares como parte indispensable para agradar y acentuar los sabores de estos alimentos, medicamentos, suplementos nutricionales, etc.
</p>

<!-- Valor Agregado -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.1.4. Valor Agregado
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La inclusión de este azúcar en nuestros productos terapéuticos inteligentes y alimentos procesados inteligentes no solo mejorará el sabor, sino que también fortalecerá la propuesta de valor de nuestros productos al ofrecer beneficios saludables adicionales con una prolongación de la vida con calidad. Esto puede resultar en una mayor aceptación del consumidor y un aumento en las demandas de consumo y ventas porque estamos proponiendo una nueva forma de producir gamas de alimentos y terapéuticos “inteligentes” verdaderamente compatibles con la biología humana.
</p>

<!-- Estrategia de Protección -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.1.5. Estrategia de Protección
</h5>
<ul style="margin-bottom: 20px; padding-left: 20px;">
    <li>Registro de la patente en las principales jurisdicciones para garantizar la protección en mercados clave.</li>
    <li>Acuerdos de confidencialidad con empleados y socios para salvaguardar la información sobre el proceso de producción y la composición del endulzante.</li>
    <li>Monitoreo del mercado para detectar posibles infracciones de la patente.</li>
</ul>

<!-- Impacto en la Competitividad -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.1.6. Impacto en la Competitividad
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente nos posiciona como líderes en la industria de los alimentos procesados, suplementos nutricionales, terapéuticos y cosmecéuticos al ofrecer el uso de un azúcar único que no solo es saludable, sino que también se adapta a la creciente demanda de consumidores por productos naturales y funcionales. Esto nos permite diferenciarnos de competidores que utilizan endulzantes artificiales y azucares simples refinados, aun cuando son naturales.
</p>

<!-- Potencial de Monetización -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.1.7. Potencial de Monetización
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Además de su uso en nuestros propios productos, el uso de la patente puede ser licenciado a otras empresas en la industria alimentaria, farmacéutica y cosmética. Esto representa una fuente adicional de ingresos a través de regalías, aumentando así el valor para los inversionistas.
</p>

<!-- Cumplimiento Normativo -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.1.8. Cumplimiento Normativo
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La investigación y el desarrollo del uso de este endulzante han cumplido con todas las regulaciones de seguridad y salud pertinentes, lo que minimiza el riesgo de problemas legales que podrían afectar nuestra operación y reputación.
</p>

<!-- Plan a Futuro -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.1.9. Plan a Futuro
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Con el éxito de esta patente de uso, planeamos expandir la investigación para desarrollar más aplicaciones del azúcar en diferentes formulaciones, incluyendo productos específicos para poblaciones con necesidades dietéticas especiales, como diabéticos y personas con intolerancias alimentarias. Esto abrirá nuevas oportunidades en el mercado y diversificará nuestra línea de productos.
</p>

<!-- Conclusión -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.1.10. Conclusión
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La protección de nuestra invención a través de patentes no solo garantiza la exclusividad del uso de este endulzante en el mercado, sino que también fortalece nuestra posición competitiva y potencial de ingresos. Al invertir en “PPG NUTRITIONAL”, los inversionistas no solo están respaldando un producto innovador, sino también una estrategia sólida de protección de la propiedad intelectual que promete un crecimiento sostenible a largo plazo.
</p>

<!-- Patentes Registradas (2) -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left;">
    11.2. Patentes Registradas (2)
</h3>

<!-- Vacuna RNA-péptido contra Sars-2 cov-2 -->
<h4 style="font-size: 20px; color: #ef6c00; margin-bottom: 10px; text-align: left;">
    11.2.1. Vacuna RNA-péptido contra SARS-2 CoV-2 con exosomas endógenos como portador
</h4>

<!-- Descripción de la Invención -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.2.2. Descripción de la Invención
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La invención "Vaccine RNA-Peptide Against SARS-2 CoV-2 With Endogenous Exosomes As Carrier" es una innovadora vacuna que combina la tecnología de ARN y péptidos para combatir el SARS-CoV-2, el virus causante del COVID-19. Esta vacuna se distingue por su uso de exosomas endógenos como vehículos de transporte para los componentes activos, lo que mejora significativamente la entrega del ARN y los péptidos al interior de las células.
</p>

<!-- Derechos de Autor y Protección Legal -->
<h5 style="font-size: 18px; color: #424242; margin-bottom: 5px; text-align: left;">
    11.2.3. Derechos de Autor y Protección Legal
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-Peptide Against SARS-2 CoV-2 With Endogenous Exosomes As Carrier" está protegida bajo las leyes de propiedad intelectual de los Estados Unidos, como lo establece la patente número 17/245,535. Este tipo de protección legal otorga al inventor, Luis Cruz Rodríguez, y a la entidad asignataria, Elidan America, LLC, derechos exclusivos sobre la fabricación, uso, y comercialización de la tecnología descrita en la patente durante un período específico de tiempo, de conjunto con PPG NUTRITIONAL.
</p>


<!-- Valor Agregado -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.2.4. Valor Agregado
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El valor agregado de la patente "Vaccine RNA-Peptide Against SARS-2 CoV-2 With Endogenous Exosomes As Carrier" radica en varios aspectos innovadores y únicos:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Uso de Exosomas Endógenos como Vehículos:</strong> A diferencia de las vacunas convencionales, esta invención utiliza exosomas endógenos como portadores para la entrega del ARN y péptidos. Los exosomas son vesículas naturales producidas por las células, capaces de fusionarse fácilmente con otras células, lo que mejora la eficacia de la vacuna al garantizar que los componentes activos se entreguen directamente dentro de las células objetivo. Esto no solo aumenta la eficiencia de la respuesta inmune, sino que también puede reducir los efectos secundarios al aprovechar mecanismos biológicos ya presentes en el organismo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Combinación de ARN y Péptidos:</strong> La patente combina la tecnología de ARN, que codifica proteínas virales específicas, con péptidos que pueden activar una respuesta inmunológica. Esta combinación es potencialmente más efectiva para generar inmunidad tanto celular como humoral contra el SARS-CoV-2, ofreciendo una protección más completa y duradera en comparación con las vacunas basadas únicamente en ARN o péptidos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección Integral de la Invención:</strong> La patente proporciona un marco de protección legal que asegura que los titulares tengan derechos exclusivos sobre la explotación de esta tecnología, lo que les permite controlar su desarrollo y comercialización. Esto puede atraer a inversores y socios estratégicos interesados en llevar al mercado una solución innovadora y efectiva contra el COVID-19 y potencialmente otras enfermedades virales.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Estos factores combinados no solo hacen que esta patente sea valiosa desde una perspectiva científica y tecnológica, sino que también le otorgan un importante potencial comercial en el competitivo campo de las vacunas antivirales.
</p>

<!-- Estrategia de Protección -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.2.5. Estrategia de Protección
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Hemos implementado una estrategia integral de protección que incluye:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Registro de la patente:</strong> La patente ha sido registrada en las principales jurisdicciones para garantizar la protección en mercados clave.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Acuerdos de confidencialidad:</strong> Se han establecido acuerdos de confidencialidad con empleados y socios para salvaguardar la información sobre el proceso de producción y la composición del endulzante.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Monitoreo del mercado:</strong> Se realiza un monitoreo continuo del mercado para detectar posibles infracciones de la patente.
</p>

<!-- Impacto en la Competitividad -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.2.6. Impacto en la Competitividad
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El impacto en la competitividad de la patente "Vaccine RNA-Peptide Against SARS-2 CoV-2 With Endogenous Exosomes As Carrier" es significativo en varios niveles:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Innovación Disruptiva:</strong> Al utilizar exosomas endógenos como vehículo de entrega para una vacuna RNA-péptido, esta tecnología se distingue de otras vacunas en el mercado que utilizan nanopartículas sintéticas u otros métodos de entrega. Esto no solo mejora la eficiencia de la entrega de la vacuna sino que también puede ser percibido como un enfoque más seguro y natural, lo que aumenta su atractivo tanto para los consumidores como para las autoridades sanitarias. Esta innovación disruptiva puede posicionar a los titulares de la patente como líderes en el desarrollo de vacunas de próxima generación.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Eficiencia en la Producción y Distribución:</strong> La capacidad de esta vacuna para utilizar mecanismos biológicos naturales, como los exosomas endógenos, puede traducirse en una producción más eficiente y menos costosa. Además, al ser potencialmente más efectiva y con menos efectos secundarios, esta tecnología puede reducir los costos asociados con el manejo de eventos adversos, lo que mejora su competitividad en términos de costos frente a otras vacunas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Potencial de Expansión a Otras Enfermedades:</strong> El enfoque utilizado en esta patente no solo es aplicable al SARS-CoV-2, sino que podría adaptarse a otras enfermedades virales, lo que aumenta su valor estratégico. Esta versatilidad permite a la empresa expandir su portafolio de productos, ofreciendo soluciones innovadoras para una variedad de desafíos de salud globales.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Atracción de Inversiones y Socios Estratégicos:</strong> La exclusividad otorgada por la patente puede atraer a inversionistas y socios estratégicos interesados en tecnologías avanzadas para el desarrollo de vacunas. La ventaja competitiva proporcionada por esta patente podría facilitar asociaciones con instituciones de investigación, gobiernos y compañías farmacéuticas, incrementando las oportunidades de financiamiento y expansión comercial.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, esta patente no solo fortalece la posición competitiva de sus titulares en el mercado de vacunas, sino que también abre la puerta a nuevas oportunidades en la biotecnología y la medicina personalizada.
</p>

<!-- Potencial de Monetización -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.2.7. Potencial de Monetización
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El potencial de monetización de la patente "Vaccine RNA-Peptide Against SARS-2 CoV-2 With Endogenous Exosomes As Carrier" es significativo, considerando varios factores clave:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Licencias y Regalías:</strong> Los titulares de la patente pueden licenciar la tecnología a otras compañías farmacéuticas o biotecnológicas, obteniendo ingresos a través de regalías. Dado el carácter innovador de la vacuna, la demanda de licencias puede ser alta, especialmente entre empresas que buscan integrar soluciones avanzadas y diferenciadas en sus portafolios de productos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Desarrollo y Comercialización Directa:</strong> Si la entidad titular de la patente opta por desarrollar y comercializar directamente la vacuna, podría obtener ingresos sustanciales de las ventas, especialmente si logra acuerdos con gobiernos o instituciones sanitarias que busquen asegurar un suministro efectivo y seguro de vacunas. La pandemia ha demostrado la disposición de los gobiernos para invertir considerablemente en vacunas efectivas, lo que podría traducirse en contratos lucrativos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Expansión de Aplicaciones:</strong> La tecnología subyacente a esta patente podría adaptarse para otras enfermedades virales, lo que expandiría su mercado potencial y, por lo tanto, las fuentes de ingresos. Este enfoque modular permite capitalizar en nuevos mercados sin la necesidad de desarrollar tecnologías completamente nuevas desde cero.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Valoración de la Empresa:</strong> La posesión de una patente con un potencial de mercado tan alto puede incrementar significativamente la valoración de la empresa titular, lo que es beneficioso en el contexto de rondas de financiamiento, fusiones, adquisiciones, o incluso en una oferta pública inicial (IPO).
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Socios y Alianzas Estratégicas:</strong> La exclusividad de esta tecnología puede facilitar alianzas estratégicas con grandes farmacéuticas, instituciones de investigación y organizaciones internacionales. Estos socios pueden aportar capital, conocimientos y recursos adicionales, lo que facilita el desarrollo y la distribución a gran escala, y al mismo tiempo, genera ingresos por acuerdos de colaboración.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En conjunto, la patente tiene un alto potencial de monetización a través de una combinación de licencias, desarrollo directo, expansiones de aplicación, y alianzas estratégicas.
</p>

<!-- Cumplimiento Normativo -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.2.8. Cumplimiento Normativo
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El cumplimiento normativo para la patente "Vaccine RNA-Peptide Against SARS-2 CoV-2 With Endogenous Exosomes As Carrier" implica asegurar que el desarrollo, producción, y comercialización de la vacuna cumpla con todas las regulaciones y leyes aplicables en las jurisdicciones relevantes. Esto incluye:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Aprobaciones Regulatorias:</strong> La vacuna debe obtener la aprobación de organismos regulatorios como la FDA en los Estados Unidos, la EMA en Europa, y otras agencias equivalentes en diferentes países. Esto implica cumplir con estrictos estándares de seguridad, eficacia y calidad, que se validan a través de ensayos clínicos en varias fases.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cumplimiento de Buenas Prácticas de Manufactura (GMP):</strong> Durante la producción, es fundamental adherirse a las Buenas Prácticas de Manufactura (GMP) para garantizar que la vacuna se fabrique bajo condiciones controladas y consistentes, minimizando riesgos de contaminación, errores de producción y garantizando la calidad del producto final.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección de Datos y Privacidad:</strong> En el manejo de datos clínicos y de pacientes, es crucial cumplir con leyes de protección de datos como el GDPR en Europa y la HIPAA en los Estados Unidos, asegurando que la información personal de los participantes en los ensayos clínicos se maneje de manera segura y ética.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Propiedad Intelectual y Cumplimiento de Patentes:</strong> Es necesario asegurar que la patente y sus derechos asociados sean respetados y que no haya infracción de otras patentes o derechos de propiedad intelectual existentes. Esto también incluye la vigilancia de posibles infracciones por parte de terceros para proteger la exclusividad del producto.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cumplimiento Ambiental y de Seguridad:</strong> En la producción y distribución de la vacuna, es necesario cumplir con regulaciones ambientales y de seguridad, que aseguren que no se produzcan daños al medio ambiente y que se garantice la seguridad de los trabajadores y los consumidores.
</p>

<!-- Transparencia y Reportes -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.2.8.1. Transparencia y Reportes
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Mantener transparencia en todas las fases del desarrollo y comercialización, proporcionando informes precisos a las autoridades regulatorias, inversionistas y al público, según lo requieran las leyes aplicables. Cumplir con estos estándares y regulaciones no solo es crucial para evitar sanciones legales y financieras, sino también para asegurar la confianza del público y el éxito comercial de la vacuna.
</p>

<!-- Plan a Futuro -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.2.9. Plan a Futuro
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El plan futuro para la patente "Vaccine RNA-Peptide Against SARS-2 CoV-2 With Endogenous Exosomes As Carrier" podría enfocarse en varias áreas estratégicas para maximizar su impacto y monetización:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Ampliación de Ensayos Clínicos:</strong> Continuar con la realización de ensayos clínicos avanzados para demostrar la eficacia y seguridad de la vacuna en una variedad de poblaciones y entornos. Esto incluiría fases posteriores de ensayos clínicos y estudios de largo plazo para evaluar la durabilidad de la inmunidad conferida por la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Desarrollo de Nuevas Aplicaciones:</strong> Explorar la adaptación de esta tecnología para otras enfermedades virales o incluso bacterianas. La capacidad de los exosomas para transportar diferentes tipos de material biológico podría permitir el desarrollo de nuevas vacunas o terapias genéticas, expandiendo así el uso de la patente a diferentes áreas de la medicina.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Colaboraciones y Alianzas Estratégicas:</strong> Establecer asociaciones con instituciones académicas, centros de investigación, y empresas farmacéuticas para acelerar el desarrollo y la comercialización de la vacuna. Estas alianzas podrían proporcionar acceso a recursos adicionales, como infraestructura de investigación y canales de distribución global.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Expansión a Mercados Internacionales:</strong> Trabajar en la obtención de aprobaciones regulatorias en mercados internacionales clave, como Europa, Asia, y América Latina, para ampliar la disponibilidad de la vacuna y su impacto global. Este proceso también implicaría adaptar la producción y distribución a las normativas y necesidades específicas de cada región.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Optimización de la Producción y Distribución:</strong> Invertir en tecnologías de producción avanzadas y en la expansión de las capacidades de manufactura para satisfacer la demanda global. Además, establecer cadenas de suministro robustas y eficientes que permitan la distribución rápida y efectiva de la vacuna a nivel mundial.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección y Gestión de la Propiedad Intelectual:</strong> Fortalecer la vigilancia y protección de los derechos de propiedad intelectual asociados con la patente para evitar infracciones y proteger la exclusividad de la tecnología. Esto también podría incluir la exploración de nuevas patentes derivadas para proteger mejoras y nuevas aplicaciones de la tecnología.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Monetización a través de Licencias y Ventas:</strong> Explorar opciones de licenciamiento a terceros para generar ingresos adicionales, al mismo tiempo que se consideran las ventas directas en mercados estratégicos. El objetivo sería maximizar el retorno de la inversión en la investigación y desarrollo de la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Este plan futuro busca no solo asegurar el éxito comercial de la vacuna, sino también expandir su impacto en la salud pública global y posicionar a los titulares de la patente como líderes en innovación en el campo de las vacunas y terapias basadas en ARN y exosomas.
</p>

<!-- Conclusión -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.2.10. Conclusión
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente presenta una innovadora estrategia de vacunación que utiliza una combinación de ARN mensajero (ARNm) y péptidos específicos contra el SARS-CoV-2, el virus responsable de la pandemia de COVID-19. Esta vacuna se distingue por su uso de exosomas endógenos como portadores, lo que potencialmente mejora la eficacia y la seguridad del transporte de los antígenos inmunogénicos. Al aprovechar la capacidad natural de los exosomas para facilitar la entrega de moléculas biológicas y estimular respuestas inmunitarias, esta tecnología podría ofrecer una solución eficaz en la lucha contra el COVID-19, contribuyendo a la salud pública y a la prevención de futuras infecciones. Pero también, la tecnología puede emplearse en algunos desarrollos presentes y futuros en las gamas de alimentos inteligentes y productos terapéuticos inteligentes de la compañía PPG NUTRITIONAL.
</p>

<!-- Patentes Registradas -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3. Patentes Registradas (3)
</h3>

<!-- Patente 1 -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    11.3.1. "Vaccine RNA-peptide against Lung cancer with exogenous exosomes as Carrier" (US Q08012204)
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-peptide against Lung cancer with exogenous exosomes as Carrier" (US Q08012204) propone una innovadora estrategia terapéutica para el tratamiento del cáncer de pulmón.
</p>

<!-- Descripción de la Invención -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.2. Descripción de la Invención
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-peptide against Lung cancer with exogenous exosomes as Carrier" (US Q08012204) propone una innovadora estrategia terapéutica para el tratamiento del cáncer de pulmón. Esta vacuna combina tecnología de ARN mensajero (ARNm) y péptidos específicos dirigidos a antígenos asociados con células tumorales de pulmón, lo que permite una respuesta inmune adaptativa más efectiva contra el cáncer. Un aspecto clave de esta patente es el uso de exosomas exógenos como vehículos de entrega para el ARN y los péptidos. Los exosomas son vesículas nanosomáticas que facilitan la comunicación celular y tienen la capacidad de transportar biomoléculas de manera eficiente. Al utilizar exosomas como portadores, se busca mejorar la estabilidad, la biodisponibilidad y la entrega específica de los antígenos en el entorno tumoral, aumentando así la eficacia de la respuesta inmunitaria. Esta combinación de tecnología de ARNm, péptidos y exosomas tiene el potencial de ofrecer un enfoque novedoso para la inmunoterapia del cáncer de pulmón, proporcionando una alternativa prometedora en el desarrollo de tratamientos personalizados y eficaces contra esta enfermedad. La patente refleja el avance en la investigación sobre la aplicación de plataformas de entrega de biomoléculas en la lucha contra el cáncer y resalta el potencial de mejorar las tasas de respuesta y la supervivencia de los pacientes.
</p>

<!-- Derechos de Autor y Protección Legal -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.3. Derechos de Autor y Protección Legal
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-Peptide Against Lung Cancer with Exogenous Exosomes as Carrier" (US Q08012204) está protegida por las leyes de propiedad intelectual, específicamente bajo la legislación de patentes. A continuación, se detallan los aspectos relevantes sobre los derechos de autor y la protección legal asociados a esta patente:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección por Patente:</strong> La patente protege la invención relacionada con la vacuna que combina ARN mensajero y péptidos con exosomas como transportadores. Esto otorga al titular de la patente derechos exclusivos para fabricar, utilizar y comercializar la invención durante un período determinado (generalmente 20 años desde la fecha de presentación de la solicitud).
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Prevención de Infracciones:</strong> La patente permite al titular tomar acciones legales contra cualquier persona o entidad que intente fabricar, utilizar o vender la invención sin autorización, lo que protege la inversión y el desarrollo de la tecnología.
</p>

<!-- Derechos de Autor -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.4. Derechos de Autor
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Aunque los derechos de autor no protegen las ideas o conceptos detrás de la patente, sí pueden aplicarse a la documentación, gráficos, publicaciones y otros materiales relacionados con la invención. Esto significa que cualquier documento que explique la vacuna, como informes de investigación, presentaciones o artículos, puede estar protegido por derechos de autor.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    El titular de la patente puede registrar los derechos de autor de estos materiales para obtener una protección adicional contra la reproducción no autorizada.
</p>

<!-- Protección Legal -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.5. Protección Legal
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Registro y Vigilancia:</strong> El titular de la patente debe asegurarse de que la patente esté debidamente registrada en la oficina de patentes correspondiente y de que se realice un seguimiento de posibles infracciones. La vigilancia del mercado y la investigación sobre el uso de la tecnología por parte de terceros son esenciales.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Acciones Legales:</strong> En caso de que se detecte una infracción de la patente, el titular tiene el derecho de emprender acciones legales para proteger su invención, lo que puede incluir demandas por daños y perjuicios, así como medidas cautelares para detener el uso no autorizado.
</p>

<!-- Licencias y Transferencia de Tecnología -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.6. Licencias y Transferencia de Tecnología
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Licencias:</strong> El titular de la patente puede optar por licenciar la tecnología a terceros, permitiendo su uso a cambio de regalías o pagos. Esto puede facilitar la comercialización de la vacuna y aumentar su difusión en el mercado.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Transferencia de Tecnología:</strong> La transferencia de tecnología y la colaboración con otras instituciones pueden ser estrategias efectivas para maximizar el impacto de la invención.
</p>

<!-- Consideraciones Éticas y Regulatorias -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.7. Consideraciones Éticas y Regulatorias
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Dado que la patente se refiere a una estrategia terapéutica, es importante considerar las regulaciones éticas y de salud pública relacionadas con el desarrollo y la comercialización de tratamientos para el cáncer. Esto incluye cumplir con las normativas de ensayos clínicos y aprobación por parte de agencias regulatorias.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, la patente "Vaccine RNA-Peptide Against Lung Cancer with Exogenous Exosomes as Carrier" (US Q08012204) goza de una sólida protección legal que permite al titular controlar su invención y defender sus derechos frente a posibles infracciones, asegurando así la valorización de la innovación en el tratamiento del cáncer de pulmón.
</p>

<!-- Valor Agregado -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.4. Valor Agregado
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El valor agregado de la patente "Vaccine RNA-Peptide Against Lung Cancer with Exogenous Exosomes as Carrier" (US Q08012204) se puede desglosar en varios aspectos clave:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Innovación Terapéutica:</strong> La combinación de ARN mensajero y péptidos específicos dirigidos a antígenos asociados con el cáncer de pulmón representa un enfoque innovador en la inmunoterapia, lo que puede llevar a un tratamiento más efectivo y personalizado para los pacientes con esta enfermedad.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Uso de Exosomas como Portadores:</strong> La utilización de exosomas exógenos como vehículos de entrega ofrece ventajas significativas, incluyendo la mejora en la estabilidad y biodisponibilidad de los antígenos, así como una entrega más eficiente y específica en el microambiente tumoral. Esto puede traducirse en una mayor eficacia de la vacuna y una reducción en los efectos secundarios.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Potencial de Personalización:</strong> La tecnología de ARN mensajero permite la personalización de la vacuna según las características genéticas y moleculares del tumor de cada paciente, lo que puede aumentar las tasas de respuesta y mejorar los resultados clínicos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Impacto en la Salud Pública:</strong> La patente tiene el potencial de contribuir significativamente a la lucha contra el cáncer de pulmón, una de las principales causas de mortalidad a nivel mundial. El desarrollo de tratamientos más efectivos puede resultar en una reducción de la carga de esta enfermedad en la población.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Ventaja Competitiva:</strong> Al contar con una patente, el titular puede establecer una posición competitiva en el mercado de tratamientos contra el cáncer, protegiendo su tecnología de la competencia y maximizando su retorno de inversión en investigación y desarrollo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Oportunidades de Colaboración y Licencias:</strong> La patente abre puertas para colaboraciones con instituciones académicas, empresas farmacéuticas y biotecnológicas, lo que puede facilitar el desarrollo de la tecnología y su llegada al mercado. Además, el titular puede explorar acuerdos de licencia que generen ingresos adicionales.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Potencial para Nuevas Aplicaciones:</strong> La tecnología subyacente podría extenderse a otros tipos de cáncer o enfermedades, permitiendo la creación de una cartera más amplia de productos terapéuticos basados en la misma plataforma de ARN-péptido y exosomas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Avance en la Investigación Científica:</strong> La patente contribuye al avance del conocimiento científico en el campo de la oncología y la biotecnología, incentivando la investigación y el desarrollo de nuevas estrategias de tratamiento y prevención.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, la patente "Vaccine RNA-Peptide Against Lung Cancer with Exogenous Exosomes as Carrier" no solo representa un avance significativo en el tratamiento del cáncer de pulmón, sino que también ofrece un valor agregado en términos de innovación, personalización, impacto en la salud pública, y oportunidades económicas y de colaboración.
</p>

<!-- Estrategia de Protección -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.5. Estrategia de Protección
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Hemos implementado una estrategia integral de protección que incluye:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Registro de la Patente:</strong> Registro de la patente en las principales jurisdicciones para garantizar la protección en mercados clave.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Acuerdos de Confidencialidad:</strong> Acuerdos de confidencialidad con empleados y socios para salvaguardar la información sobre el proceso de producción y la composición del endulzante.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Monitoreo del Mercado:</strong> Monitoreo del mercado para detectar posibles infracciones de la patente.
</p>

<!-- Impacto en la Competitividad -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.6. Impacto en la Competitividad
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-Peptide Against Lung Cancer with Exogenous Exosomes as Carrier" tiene un impacto significativo en la competitividad dentro del sector biotecnológico y farmacéutico por varias razones:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Exclusividad en el Mercado:</strong> Al contar con una patente, el titular tiene derechos exclusivos sobre la tecnología, lo que le permite posicionarse como líder en un campo innovador. Esta exclusividad protege la invención de ser replicada por competidores, lo que puede resultar en una ventaja de mercado sustancial.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Diferenciación de Productos:</strong> La combinación de tecnología de ARN mensajero y exosomas exógenos proporciona un enfoque único para el tratamiento del cáncer de pulmón. Esta diferenciación puede atraer tanto a médicos como a pacientes que buscan opciones terapéuticas avanzadas, lo que fortalece la posición competitiva del producto.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Atracción de Inversiones:</strong> La innovación y el potencial de éxito comercial de la patente pueden atraer inversiones significativas de capital riesgo, empresas farmacéuticas y otras partes interesadas. Esto no solo proporciona financiamiento adicional para el desarrollo del producto, sino que también valida la propuesta de valor de la tecnología.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Oportunidades de Colaboración:</strong> La patente puede facilitar asociaciones estratégicas con otras empresas, instituciones académicas y centros de investigación. Estas colaboraciones pueden acelerar el desarrollo de la vacuna, mejorar la comercialización y aumentar el alcance en el mercado.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Mejoras en la Eficiencia Operativa:</strong> La tecnología innovadora puede llevar a métodos de producción más eficientes y menos costosos, lo que puede traducirse en márgenes de beneficio más altos. Esto permite al titular de la patente competir en precios sin sacrificar la calidad.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Expansión a Nuevos Mercados:</strong> Con una patente sólida, el titular puede explorar la entrada a mercados internacionales, donde la demanda de tratamientos contra el cáncer es alta. Esto no solo aumenta el alcance del producto, sino que también diversifica el riesgo empresarial.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Impulso a la Investigación y Desarrollo (I+D):</strong> La existencia de la patente fomenta la inversión en I+D, lo que puede llevar al desarrollo de nuevos productos y tecnologías complementarias. Esta cultura de innovación continua ayuda a mantener una ventaja competitiva a largo plazo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección Contra Infracciones:</strong> La patente proporciona un marco legal para tomar acciones contra la competencia desleal y las infracciones de propiedad intelectual, protegiendo así la inversión realizada en la investigación y el desarrollo de la tecnología.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Reputación y Credibilidad:</strong> Tener una patente reconocida puede mejorar la reputación de la empresa o institución detrás de la invención, posicionándola como un referente en innovación y desarrollo de tratamientos avanzados, lo que puede aumentar la confianza de médicos, pacientes e inversores.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En conclusión, la patente "Vaccine RNA-Peptide Against Lung Cancer with Exogenous Exosomes as Carrier" no solo representa un avance en la ciencia médica, sino que también tiene un impacto significativo en la competitividad del titular en el mercado farmacéutico y biotecnológico, ofreciendo ventajas en exclusividad, diferenciación, colaboración, y protección legal.
</p>

<!-- Potencial de Monetización -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.7. Potencial de Monetización
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El potencial de monetización de la patente está en:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Licencias y Regalías:</strong> Los titulares de la patente pueden licenciar la tecnología a otras compañías farmacéuticas o biotecnológicas, obteniendo ingresos a través de regalías. Dado el carácter innovador de la vacuna, la demanda de licencias puede ser alta, especialmente entre empresas que buscan integrar soluciones avanzadas y diferenciadas en sus portafolios de productos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Desarrollo y Comercialización Directa:</strong> Si la entidad titular de la patente opta por desarrollar y comercializar directamente la vacuna, podría obtener ingresos sustanciales de las ventas, especialmente si logra acuerdos con gobiernos o instituciones sanitarias que busquen asegurar un suministro efectivo y seguro de vacunas. La pandemia ha demostrado la disposición de los gobiernos para invertir considerablemente en vacunas efectivas, lo que podría traducirse en contratos lucrativos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Expansión de Aplicaciones:</strong> La tecnología subyacente a esta patente podría adaptarse para otras enfermedades virales, lo que expandiría su mercado potencial y, por lo tanto, las fuentes de ingresos. Este enfoque modular permite capitalizar en nuevos mercados sin la necesidad de desarrollar tecnologías completamente nuevas desde cero.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Valoración de la Empresa:</strong> La posesión de una patente con un potencial de mercado tan alto puede incrementar significativamente la valoración de la empresa titular, lo que es beneficioso en el contexto de rondas de financiamiento, fusiones, adquisiciones, o incluso en una oferta pública inicial (IPO).
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Socios y Alianzas Estratégicas:</strong> La exclusividad de esta tecnología puede facilitar alianzas estratégicas con grandes farmacéuticas, instituciones de investigación y organizaciones internacionales. Estos socios pueden aportar capital, conocimientos y recursos adicionales, lo que facilita el desarrollo y la distribución a gran escala, y al mismo tiempo, genera ingresos por acuerdos de colaboración.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En conjunto, la patente tiene un alto potencial de monetización a través de una combinación de licencias, desarrollo directo, expansiones de aplicación, y alianzas estratégicas.
</p>

<!-- Cumplimiento Normativo -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.8. Cumplimiento Normativo
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El cumplimiento normativo implica asegurar que el desarrollo, producción, y comercialización de la vacuna cumpla con todas las regulaciones y leyes aplicables en las jurisdicciones relevantes. Esto incluye:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Aprobaciones Regulatorias:</strong> La vacuna debe obtener la aprobación de organismos regulatorios como la FDA en los Estados Unidos, la EMA en Europa, y otras agencias equivalentes en diferentes países. Esto implica cumplir con estrictos estándares de seguridad, eficacia y calidad, que se validan a través de ensayos clínicos en varias fases.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cumplimiento de Buenas Prácticas de Manufactura (GMP):</strong> Durante la producción, es fundamental adherirse a las Buenas Prácticas de Manufactura (GMP) para garantizar que la vacuna se fabrique bajo condiciones controladas y consistentes, minimizando riesgos de contaminación, errores de producción y garantizando la calidad del producto final.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección de Datos y Privacidad:</strong> En el manejo de datos clínicos y de pacientes, es crucial cumplir con leyes de protección de datos como el GDPR en Europa y la HIPAA en los Estados Unidos, asegurando que la información personal de los participantes en los ensayos clínicos se maneje de manera segura y ética.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Propiedad Intelectual y Cumplimiento de Patentes:</strong> Es necesario asegurar que la patente y sus derechos asociados sean respetados y que no haya infracción de otras patentes o derechos de propiedad intelectual existentes. Esto también incluye la vigilancia de posibles infracciones por parte de terceros para proteger la exclusividad del producto.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cumplimiento Ambiental y de Seguridad:</strong> En la producción y distribución de la vacuna, es necesario cumplir con regulaciones ambientales y de seguridad, que aseguren que no se produzcan daños al medio ambiente y que se garantice la seguridad de los trabajadores y los consumidores.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Transparencia y Reportes:</strong> Mantener transparencia en todas las fases del desarrollo y comercialización, proporcionando informes precisos a las autoridades regulatorias, inversionistas y al público, según lo requieran las leyes aplicables. Cumplir con estos estándares y regulaciones no solo es crucial para evitar sanciones legales y financieras, sino también para asegurar la confianza del público y el éxito comercial de la vacuna.
</p>


<!-- Plan a Futuro -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.9. Plan a Futuro
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El plan futuro para la patente podría enfocarse en varias áreas estratégicas para maximizar su impacto y monetización:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Ampliación de Ensayos Clínicos:</strong> Continuar con la realización de ensayos clínicos avanzados para demostrar la eficacia y seguridad de la vacuna en una variedad de poblaciones y entornos. Esto incluiría fases posteriores de ensayos clínicos y estudios de largo plazo para evaluar la durabilidad de la inmunidad conferida por la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Desarrollo de Nuevas Aplicaciones:</strong> Explorar la adaptación de esta tecnología para otras enfermedades virales o incluso bacterianas. La capacidad de los exosomas para transportar diferentes tipos de material biológico podría permitir el desarrollo de nuevas vacunas o terapias genéticas, expandiendo así el uso de la patente a diferentes áreas de la medicina.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Colaboraciones y Alianzas Estratégicas:</strong> Establecer asociaciones con instituciones académicas, centros de investigación, y empresas farmacéuticas para acelerar el desarrollo y la comercialización de la vacuna. Estas alianzas podrían proporcionar acceso a recursos adicionales, como infraestructura de investigación y canales de distribución global.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Expansión a Mercados Internacionales:</strong> Trabajar en la obtención de aprobaciones regulatorias en mercados internacionales clave, como Europa, Asia, y América Latina, para ampliar la disponibilidad de la vacuna y su impacto global. Este proceso también implicaría adaptar la producción y distribución a las normativas y necesidades específicas de cada región.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Optimización de la Producción y Distribución:</strong> Invertir en tecnologías de producción avanzadas y en la expansión de las capacidades de manufactura para satisfacer la demanda global. Además, establecer cadenas de suministro robustas y eficientes que permitan la distribución rápida y efectiva de la vacuna a nivel mundial.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección y Gestión de la Propiedad Intelectual:</strong> Fortalecer la vigilancia y protección de los derechos de propiedad intelectual asociados con la patente para evitar infracciones y proteger la exclusividad de la tecnología. Esto también podría incluir la exploración de nuevas patentes derivadas para proteger mejoras y nuevas aplicaciones de la tecnología.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Monetización a través de Licencias y Ventas:</strong> Explorar opciones de licenciamiento a terceros para generar ingresos adicionales, al mismo tiempo que se consideran las ventas directas en mercados estratégicos. El objetivo sería maximizar el retorno de la inversión en la investigación y desarrollo de la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Este plan futuro busca no solo asegurar el éxito comercial de la vacuna, sino también expandir su impacto en la salud pública global y posicionar a los titulares de la patente como líderes en innovación en el campo de las vacunas y terapias basadas en esas tecnologías.
</p>

<!-- Conclusión -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.3.10. Conclusión
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-Peptide Against Lung Cancer with Exogenous Exosomes as Carrier" representa un avance significativo en la lucha contra el cáncer de pulmón, al ofrecer una estrategia terapéutica innovadora que combina la tecnología de ARN mensajero y péptidos específicos con el uso de exosomas como portadores. Esta combinación no solo tiene el potencial de mejorar la eficacia del tratamiento al dirigir la respuesta inmunitaria de manera más específica hacia las células tumorales, sino que también busca minimizar los efectos secundarios asociados con terapias tradicionales. La utilización de exosomas exógenos como vehículos de entrega para el ARN y los péptidos mejora la estabilidad y biodisponibilidad de los antígenos, lo que podría resultar en una respuesta inmune más robusta y duradera. Además, el enfoque personalizado que permite esta tecnología tiene el potencial de transformar el tratamiento del cáncer de pulmón, adaptándose a las características moleculares de cada paciente.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, esta patente no solo contribuye al desarrollo de nuevas terapias contra el cáncer, sino que también ofrece una oportunidad para mejorar los resultados clínicos y la calidad de vida de los pacientes. Su innovación, combinada con la protección legal que proporciona la patente, posiciona a esta tecnología como un avance prometedor en la oncología y un recurso valioso en la búsqueda de soluciones efectivas para una de las enfermedades más desafiantes de la actualidad.
</p>

<!-- Patentes Registradas -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.4. Patentes Registradas (4)
</h3>

<!-- Patente 1 -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    11.4.1. Vaccine RNA-peptide against Breast/ovarian cancer with exogenous exosomes as Carrier. Patent in Course: US Q08012205.
</h3>

<!-- Descripción de la Invención -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.4.2. Descripción de la Invención
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La invención "Vaccine RNA-Peptide Against Breast/Ovarian Cancer with Exogenous Exosomes as Carrier" (US Q08012205) se centra en el desarrollo de una vacuna innovadora diseñada para el tratamiento del cáncer de mama y ovario. Esta vacuna combina tecnología de ARN mensajero (ARNm) y péptidos específicos dirigidos a antígenos asociados con células tumorales en estos tipos de cáncer, con el objetivo de estimular una respuesta inmune efectiva que ataque y destruya las células malignas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Características Clave:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    1. <strong>Combinación de ARNm y Péptidos:</strong> La vacuna utiliza ARNm para codificar péptidos específicos que son relevantes para las células cancerosas de mama y ovario. Esta combinación busca inducir una respuesta inmune adaptativa más potente y específica.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    2. <strong>Uso de Exosomas Exógenos como Vehículos:</strong> Se emplean exosomas exógenos como portadores para facilitar la entrega del ARNm y los péptidos al sistema inmunológico. Los exosomas son vesículas naturales que tienen la capacidad de transportar biomoléculas de manera eficiente, mejorando la biodisponibilidad y la estabilidad de los antígenos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    3. <strong>Estrategia Terapéutica Personalizada:</strong> La tecnología permite la personalización de la vacuna en función de las características genéticas y moleculares del tumor de cada paciente, lo que puede aumentar la efectividad del tratamiento y minimizar efectos adversos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    4. <strong>Estimulación de la Respuesta Inmunitaria:</strong> La administración de la vacuna está diseñada para activar tanto la respuesta inmunitaria humoral como la celular, generando anticuerpos específicos y células T que reconocen y atacan las células tumorales.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    5. <strong>Potencial para la Prevención y Tratamiento:</strong> La invención tiene aplicaciones tanto en la prevención como en el tratamiento de cáncer de mama y ovario, lo que la convierte en una herramienta valiosa en la lucha contra estas enfermedades.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-Peptide Against Breast/Ovarian Cancer with Exogenous Exosomes as Carrier" representa un avance significativo en la inmunoterapia oncológica, ofreciendo una estrategia prometedora para mejorar la eficacia del tratamiento del cáncer de mama y ovario. Al combinar la tecnología de ARN y exosomas, esta invención busca ofrecer una solución más segura y efectiva, contribuyendo así a la mejora de la calidad de vida de los pacientes afectados por estas enfermedades.
</p>

<!-- Derechos de Autor y Protección Legal -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.4.3. Derechos de Autor y Protección Legal
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-Peptide Against Breast/Ovarian Cancer with Exogenous Exosomes as Carrier" (US Q08012205) está protegida por las leyes de propiedad intelectual, específicamente bajo la legislación de patentes. A continuación, se detallan los aspectos relevantes sobre los derechos de autor y la protección legal asociados a esta patente:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    1. <strong>Protección por Patente:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Exclusividad:</strong> La patente otorga derechos exclusivos al titular sobre la invención, lo que significa que tiene el derecho de fabricar, usar, vender y licenciar la vacuna durante un período específico, generalmente de 20 años desde la fecha de presentación de la solicitud. Esto evita que competidores reproduzcan la invención sin autorización.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Prevención de Infracciones:</strong> La protección de la patente permite al titular tomar acciones legales contra cualquier entidad que intente comercializar o usar la invención sin su consentimiento, protegiendo así la inversión realizada en investigación y desarrollo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    2. <strong>Derechos de Autor:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Aunque los derechos de autor no protegen las ideas o conceptos detrás de la invención, sí pueden aplicarse a los documentos, gráficos, presentaciones, artículos y otros materiales relacionados con la vacuna. Esto significa que cualquier contenido que explique o describa la invención puede estar protegido por derechos de autor.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    El registro de derechos de autor para estos materiales complementa la protección de la patente y ofrece una forma adicional de salvaguardar la propiedad intelectual.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    3. <strong>Protección Legal:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Registro y Vigilancia:</strong> Es esencial que el titular de la patente registre su invención en la oficina de patentes correspondiente y realice un seguimiento activo para detectar posibles infracciones. La vigilancia del mercado es clave para proteger la tecnología.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Acciones Legales:</strong> En caso de infracción, el titular de la patente tiene el derecho de emprender acciones legales, que pueden incluir demandas por daños y perjuicios y medidas cautelares para detener el uso no autorizado de la invención.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    4. <strong>Licencias y Transferencia de Tecnología:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    El titular de la patente puede optar por licenciar la tecnología a otras empresas o instituciones, permitiendo su uso a cambio de regalías. Esto no solo proporciona ingresos adicionales, sino que también facilita la comercialización de la vacuna en el mercado.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Las colaboraciones estratégicas con organizaciones de investigación, universidades o empresas farmacéuticas pueden potenciar el desarrollo y la implementación de la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    5. <strong>Consideraciones Éticas y Regulatorias:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Dado que la patente se refiere a una terapia para el cáncer, es importante considerar las regulaciones éticas y de salud pública que rigen el desarrollo y la comercialización de tratamientos oncológicos. Esto incluye cumplir con las normativas de ensayos clínicos y obtener aprobaciones de las autoridades regulatorias pertinentes.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-Peptide Against Breast/Ovarian Cancer with Exogenous Exosomes as Carrier" (US Q08012205) goza de una sólida protección legal que permite al titular controlar su invención y defender sus derechos frente a posibles infracciones. Esta protección es crucial para asegurar la valorización de la innovación en el tratamiento del cáncer de mama y ovario, así como para fomentar el desarrollo continuo de soluciones efectivas en el ámbito oncológico.
</p>

<!-- Valor Agregado -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.4.4. Valor Agregado
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-Peptide Against Breast/Ovarian Cancer with Exogenous Exosomes as Carrier" (US Q08012205) aporta un valor significativo en diversos aspectos, destacando su potencial en la lucha contra el cáncer de mama y ovario. A continuación, se detallan los elementos clave que constituyen su valor agregado:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    1. <strong>Innovación Terapéutica:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Enfoque Pionero:</strong> La combinación de tecnología de ARN mensajero y péptidos con el uso de exosomas como portadores representa un enfoque innovador en la inmunoterapia oncológica, ofreciendo una estrategia novedosa para atacar células tumorales específicas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    2. <strong>Personalización del Tratamiento:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Adaptación a Características del Paciente:</strong> La posibilidad de personalizar la vacuna según las características genéticas y moleculares del tumor de cada paciente aumenta la probabilidad de una respuesta efectiva, lo que podría resultar en mejores resultados clínicos y una menor toxicidad.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    3. <strong>Mejora en la Eficacia del Tratamiento:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Entrega Específica y Eficiente:</strong> Los exosomas como vehículos de entrega permiten una administración más eficaz de los antígenos, lo que puede mejorar la biodisponibilidad y la eficacia del tratamiento al facilitar la activación del sistema inmunológico.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    4. <strong>Impacto en la Salud Pública:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Reducción de la Carga del Cáncer:</strong> Al ofrecer una opción de tratamiento más efectiva, la patente tiene el potencial de reducir la carga del cáncer de mama y ovario en la población, mejorando así la calidad de vida de los pacientes y disminuyendo la mortalidad asociada con estas enfermedades.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    5. <strong>Ventaja Competitiva en el Mercado:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección Legal y Exclusividad:</strong> La patente proporciona una ventaja competitiva al otorgar derechos exclusivos sobre la invención, lo que impide que competidores imiten la tecnología. Esto permite al titular establecerse como líder en el desarrollo de terapias innovadoras contra el cáncer.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    6. <strong>Atracción de Inversión y Colaboraciones:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Oportunidades de Financiamiento:</strong> La innovación y el potencial comercial de la vacuna pueden atraer inversiones de capital riesgo, así como colaboraciones con empresas farmacéuticas y centros de investigación, facilitando el desarrollo y la comercialización de la tecnología.
</p>



<!-- Expansión de la Investigación -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    7. Expansión de la Investigación
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Generación de Nuevas Aplicaciones:</strong> La tecnología subyacente podría ser aplicable a otros tipos de cáncer o enfermedades, lo que abriría nuevas oportunidades de desarrollo de productos y expansión de la cartera de tratamientos.
</p>

<!-- Avance en la Ciencia y Tecnología -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    8. Avance en la Ciencia y Tecnología
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Contribución al Conocimiento Científico:</strong> La invención avanza el conocimiento en el campo de la oncología y la biotecnología, incentivando más investigaciones en áreas relacionadas y fomentando un ciclo continuo de innovación.
</p>

<!-- Reputación y Credibilidad -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    9. Reputación y Credibilidad
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Posicionamiento en el Mercado:</strong> Tener una patente reconocida refuerza la reputación del titular como líder en innovación médica, aumentando la confianza entre médicos, pacientes e inversores.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, la patente "Vaccine RNA-Peptide Against Breast/Ovarian Cancer with Exogenous Exosomes as Carrier" representa un valor agregado significativo en términos de innovación, personalización, eficacia, y oportunidades económicas. Su desarrollo y eventual comercialización no solo tienen el potencial de mejorar el tratamiento del cáncer de mama y ovario, sino que también pueden contribuir a avanzar en la investigación oncológica y mejorar la salud pública en general.
</p>

<!-- Estrategia de Protección -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.4.5. Estrategia de Protección
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Hemos implementado una estrategia integral de protección que incluye:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Registro de la Patente:</strong> Registro de la patente en las principales jurisdicciones para garantizar la protección en mercados clave.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Acuerdos de Confidencialidad:</strong> Acuerdos de confidencialidad con empleados y socios para salvaguardar la información sobre el proceso de producción y la composición del endulzante.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Monitoreo del Mercado:</strong> Monitoreo del mercado para detectar posibles infracciones de la patente.
</p>

<!-- Impacto en la Competitividad -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.4.6. Impacto en la Competitividad
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-Peptide Against Breast/Ovarian Cancer with Exogenous Exosomes as Carrier" (US Q08012205) tiene un impacto considerable en la competitividad dentro del sector biotecnológico y farmacéutico, destacándose en varios aspectos clave:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    1. <strong>Posicionamiento en el Mercado:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Liderazgo en Innovación:</strong> La patente otorga derechos exclusivos al titular sobre una tecnología innovadora en el tratamiento del cáncer, lo que permite posicionarse como líder en el desarrollo de nuevas terapias. Esto ayuda a diferenciarse de la competencia que ofrece tratamientos más tradicionales.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    2. <strong>Exclusividad y Protección Legal:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Derechos de Propiedad Intelectual:</strong> La protección patentada evita que competidores reproduzcan la tecnología sin autorización, permitiendo al titular establecer un monopolio temporal en el mercado. Esto no solo protege la inversión realizada en investigación y desarrollo, sino que también maximiza el retorno de la inversión.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    3. <strong>Oportunidades de Colaboración:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Alianzas Estratégicas:</strong> La patente puede facilitar colaboraciones con otras empresas, instituciones académicas y centros de investigación. Estas alianzas pueden acelerar el desarrollo del producto y su comercialización, ampliando el alcance y las oportunidades en el mercado.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    4. <strong>Atracción de Inversión:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Financiamiento de Capital Riesgo:</strong> La innovación y el potencial de éxito comercial asociados con la patente pueden atraer inversiones significativas de capital riesgo y otras entidades interesadas en financiar tratamientos innovadores, lo que proporciona recursos adicionales para la investigación y el desarrollo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    5. <strong>Expansión a Nuevos Mercados:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Oportunidad de Crecimiento Global:</strong> Con una patente sólida, el titular puede explorar la entrada a mercados internacionales, donde la demanda de tratamientos contra el cáncer es alta. Esto no solo diversifica el riesgo empresarial, sino que también aumenta el alcance del producto.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    6. <strong>Aumento de la Eficiencia Operativa:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Producción y Desarrollo Eficiente:</strong> La tecnología innovadora puede llevar a métodos de producción más eficientes, lo que puede traducirse en costos más bajos y márgenes de beneficio más altos. Esto permite competir en precios sin sacrificar la calidad.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    7. <strong>Fomento de la Investigación y Desarrollo (I+D):</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cultura de Innovación Continua:</strong> La existencia de la patente fomenta una cultura de innovación y permite que el titular continúe invirtiendo en I+D, lo que puede resultar en la creación de nuevos productos y tecnologías complementarias que refuercen aún más su posición competitiva.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    8. <strong>Protección Contra Infracciones:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Acciones Legales Efectivas:</strong> La patente proporciona un marco legal que permite al titular tomar medidas contra la competencia desleal y la infracción de propiedad intelectual, protegiendo su inversión y asegurando que los beneficios económicos de su innovación se mantengan.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    9. <strong>Reputación y Credibilidad en el Mercado:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Confianza de Partes Interesadas:</strong> Tener una patente reconocida mejora la reputación de la empresa o institución detrás de la invención, posicionándola como un referente en innovación y desarrollo de tratamientos avanzados, lo que puede aumentar la confianza de médicos, pacientes e inversores.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En conclusión, la patente "Vaccine RNA-Peptide Against Breast/Ovarian Cancer with Exogenous Exosomes as Carrier" tiene un impacto significativo en la competitividad del titular en el mercado farmacéutico y biotecnológico. Su innovación, exclusividad, y el potencial de colaboración y expansión contribuyen a establecer una posición sólida en un campo altamente competitivo, mientras que la protección legal y la reputación fortalecen aún más su capacidad para prosperar en el sector.
</p>

<!-- Potencial de Monetización -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.4.7. Potencial de Monetización
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El potencial de monetización de la patente está en:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Licencias y Regalías:</strong> Los titulares de la patente pueden licenciar la tecnología a otras compañías farmacéuticas o biotecnológicas, obteniendo ingresos a través de regalías. Dado el carácter innovador de la vacuna, la demanda de licencias puede ser alta, especialmente entre empresas que buscan integrar soluciones avanzadas y diferenciadas en sus portafolios de productos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Desarrollo y Comercialización Directa:</strong> Si la entidad titular de la patente opta por desarrollar y comercializar directamente la vacuna, podría obtener ingresos sustanciales de las ventas, especialmente si logra acuerdos con gobiernos o instituciones sanitarias que busquen asegurar un suministro efectivo y seguro de vacunas. La pandemia ha demostrado la disposición de los gobiernos para invertir considerablemente en vacunas efectivas, lo que podría traducirse en contratos lucrativos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Expansión de Aplicaciones:</strong> La tecnología subyacente a esta patente podría adaptarse para otras enfermedades virales, lo que expandiría su mercado potencial y, por lo tanto, las fuentes de ingresos. Este enfoque modular permite capitalizar en nuevos mercados sin la necesidad de desarrollar tecnologías completamente nuevas desde cero.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Valoración de la Empresa:</strong> La posesión de una patente con un potencial de mercado tan alto puede incrementar significativamente la valoración de la empresa titular, lo que es beneficioso en el contexto de rondas de financiamiento, fusiones, adquisiciones, o incluso en una oferta pública inicial (IPO).
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Socios y Alianzas Estratégicas:</strong> La exclusividad de esta tecnología puede facilitar alianzas estratégicas con grandes farmacéuticas, instituciones de investigación y organizaciones internacionales. Estos socios pueden aportar capital, conocimientos y recursos adicionales, lo que facilita el desarrollo y la distribución a gran escala, y al mismo tiempo, genera ingresos por acuerdos de colaboración.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En conjunto, la patente tiene un alto potencial de monetización a través de una combinación de licencias, desarrollo directo, expansiones de aplicación, y alianzas estratégicas.
</p>

<!-- Cumplimiento Normativo -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.4.8. Cumplimiento Normativo
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El cumplimiento normativo implica asegurar que el desarrollo, producción, y comercialización de la vacuna cumpla con todas las regulaciones y leyes aplicables en las jurisdicciones relevantes. Esto incluye:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Aprobaciones Regulatorias:</strong> La vacuna debe obtener la aprobación de organismos regulatorios como la FDA en los Estados Unidos, la EMA en Europa, y otras agencias equivalentes en diferentes países. Esto implica cumplir con estrictos estándares de seguridad, eficacia y calidad, que se validan a través de ensayos clínicos en varias fases.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cumplimiento de Buenas Prácticas de Manufactura (GMP):</strong> Durante la producción, es fundamental adherirse a las Buenas Prácticas de Manufactura (GMP) para garantizar que la vacuna se fabrique bajo condiciones controladas y consistentes, minimizando riesgos de contaminación, errores de producción y garantizando la calidad del producto final.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección de Datos y Privacidad:</strong> En el manejo de datos clínicos y de pacientes, es crucial cumplir con leyes de protección de datos como el GDPR en Europa y la HIPAA en los Estados Unidos, asegurando que la información personal de los participantes en los ensayos clínicos se maneje de manera segura y ética.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Propiedad Intelectual y Cumplimiento de Patentes:</strong> Es necesario asegurar que la patente y sus derechos asociados sean respetados y que no haya infracción de otras patentes o derechos de propiedad intelectual existentes. Esto también incluye la vigilancia de posibles infracciones por parte de terceros para proteger la exclusividad del producto.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cumplimiento Ambiental y de Seguridad:</strong> En la producción y distribución de la vacuna, es necesario cumplir con regulaciones ambientales y de seguridad, que aseguren que no se produzcan daños al medio ambiente y que se garantice la seguridad de los trabajadores y los consumidores.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Transparencia y Reportes:</strong> Mantener transparencia en todas las fases del desarrollo y comercialización, proporcionando informes precisos a las autoridades regulatorias, inversionistas y al público, según lo requieran las leyes aplicables.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Cumplir con estos estándares y regulaciones no solo es crucial para evitar sanciones legales y financieras, sino también para asegurar la confianza del público y el éxito comercial de la vacuna.
</p>

<!-- Plan a Futuro -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.4.9. Plan a Futuro
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El plan futuro para la patente podría enfocarse en varias áreas estratégicas para maximizar su impacto y monetización:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Ampliación de Ensayos Clínicos:</strong> Continuar con la realización de ensayos clínicos avanzados para demostrar la eficacia y seguridad de la vacuna en una variedad de poblaciones y entornos. Esto incluiría fases posteriores de ensayos clínicos y estudios de largo plazo para evaluar la durabilidad de la inmunidad conferida por la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Desarrollo de Nuevas Aplicaciones:</strong> Explorar la adaptación de esta tecnología para otras enfermedades virales o incluso bacterianas. La capacidad de los exosomas para transportar diferentes tipos de material biológico podría permitir el desarrollo de nuevas vacunas o terapias genéticas, expandiendo así el uso de la patente a diferentes áreas de la medicina.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Colaboraciones y Alianzas Estratégicas:</strong> Establecer asociaciones con instituciones académicas, centros de investigación, y empresas farmacéuticas para acelerar el desarrollo y la comercialización de la vacuna. Estas alianzas podrían proporcionar acceso a recursos adicionales, como infraestructura de investigación y canales de distribución global.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Expansión a Mercados Internacionales:</strong> Trabajar en la obtención de aprobaciones regulatorias en mercados internacionales clave, como Europa, Asia, y América Latina, para ampliar la disponibilidad de la vacuna y su impacto global. Este proceso también implicaría adaptar la producción y distribución a las normativas y necesidades específicas de cada región.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Optimización de la Producción y Distribución:</strong> Invertir en tecnologías de producción avanzadas y en la expansión de las capacidades de manufactura para satisfacer la demanda global. Además, establecer cadenas de suministro robustas y eficientes que permitan la distribución rápida y efectiva de la vacuna a nivel mundial.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección y Gestión de la Propiedad Intelectual:</strong> Fortalecer la vigilancia y protección de los derechos de propiedad intelectual asociados con la patente para evitar infracciones y proteger la exclusividad de la tecnología. Esto también podría incluir la exploración de nuevas patentes derivadas para proteger mejoras y nuevas aplicaciones de la tecnología.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Monetización a través de Licencias y Ventas:</strong> Explorar opciones de licenciamiento a terceros para generar ingresos adicionales, al mismo tiempo que se consideran las ventas directas en mercados estratégicos. El objetivo sería maximizar el retorno de la inversión en la investigación y desarrollo de la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Este plan futuro busca no solo asegurar el éxito comercial de la vacuna, sino también expandir su impacto en la salud pública global y posicionar a los titulares de la patente como líderes en innovación en el campo de las vacunas y terapias basadas en esas tecnologías.
</p>

<!-- Conclusión -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.4.10. Conclusión
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine RNA-Peptide Against Breast/Ovarian Cancer with Exogenous Exosomes as Carrier" representa un avance innovador en el tratamiento del cáncer de mama y ovario, utilizando una combinación de tecnologías de ARN mensajero y péptidos junto con exosomas como vehículos de entrega. Esta estrategia no solo tiene el potencial de mejorar la eficacia del tratamiento al dirigir la respuesta inmunitaria de manera específica hacia las células tumorales, sino que también busca personalizar la terapia según las características únicas de cada paciente. La protección legal proporcionada por la patente otorga derechos exclusivos al titular, permitiéndole establecer una posición de liderazgo en el mercado y proteger su inversión en investigación y desarrollo. Además, la invención ofrece una serie de beneficios competitivos, incluidos el potencial para atraer inversiones, fomentar colaboraciones estratégicas y expandir su alcance en mercados internacionales. En un contexto donde la lucha contra el cáncer es un desafío crítico de salud pública, esta patente no solo representa una oportunidad para ofrecer tratamientos más efectivos, sino que también contribuye a avanzar en la ciencia oncológica y mejorar la calidad de vida de los pacientes afectados. Su desarrollo y eventual comercialización tienen el potencial de marcar una diferencia significativa en la forma en que se aborda el cáncer de mama y ovario, posicionando a su titular como un referente en la innovación médica.
</p>

<!-- Patentes Registradas -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.5. Patentes Registradas (5)
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    11.5.1. Vaccine Alzhe-peptide against Alzheimer disease with exogenous exosomes as Carrier. Patent in Course: US Q08232201.
</p>

<!-- Descripción de la Invención -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.5.2. Descripción de la Invención
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Alzhe-Peptide Against Alzheimer Disease with Exogenous Exosomes as Carrier" (US Q08232201) se centra en el desarrollo de una vacuna innovadora diseñada para prevenir y tratar la enfermedad de Alzheimer. Esta vacuna utiliza una combinación de péptidos específicos relacionados con la enfermedad de Alzheimer y exosomas exógenos como vehículos de entrega, con el objetivo de modular la respuesta inmune y promover la salud cerebral.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Características Clave:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    1. <strong>Combinación de Péptidos Específicos:</strong> La vacuna incluye péptidos derivados de proteínas asociadas con la patología del Alzheimer, como las proteínas beta-amiloides y tau, que son responsables de la formación de placas y ovillos neurofibrilares en el cerebro. La inclusión de estos péptidos busca generar una respuesta inmune que ayude a neutralizar o eliminar estas proteínas dañinas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    2. <strong>Uso de Exosomas Exógenos:</strong> Se utilizan exosomas exógenos como vehículos para la entrega eficiente de los péptidos al sistema inmunológico. Los exosomas son vesículas naturales que facilitan la comunicación intercelular y tienen la capacidad de transportar biomoléculas, mejorando la biodisponibilidad y la eficacia de los antígenos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    3. <strong>Modulación de la Respuesta Inmunitaria:</strong> La vacuna está diseñada para inducir una respuesta inmune adaptativa que no solo produzca anticuerpos contra los péptidos asociados al Alzheimer, sino que también active células T que pueden atacar y eliminar células afectadas en el cerebro.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    4. <strong>Potencial para la Prevención y Tratamiento:</strong> Esta invención tiene aplicaciones tanto en la prevención de la enfermedad de Alzheimer en individuos en riesgo como en el tratamiento de pacientes ya diagnosticados, ofreciendo un enfoque integral para abordar esta compleja enfermedad neurodegenerativa.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    5. <strong>Investigación y Desarrollo Personalizado:</strong> La tecnología permite el desarrollo de enfoques personalizados basados en las características genéticas y moleculares de los pacientes, lo que puede resultar en tratamientos más efectivos y adaptados a las necesidades individuales.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Alzhe-Peptide Against Alzheimer Disease with Exogenous Exosomes as Carrier" (US Q08232201) representa un avance significativo en la investigación y desarrollo de terapias para la enfermedad de Alzheimer. Al combinar péptidos específicos con el uso de exosomas, esta vacuna tiene el potencial de mejorar la respuesta inmunitaria y ofrecer nuevas esperanzas para la prevención y tratamiento de una de las enfermedades neurodegenerativas más desafiantes del mundo. Su desarrollo y eventual implementación podrían contribuir a mejorar la calidad de vida de millones de personas afectadas por el Alzheimer y sus familias.
</p>

<!-- Derechos de Autor y Protección Legal -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.5.3. Derechos de Autor y Protección Legal
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Alzhe-Peptide Against Alzheimer Disease with Exogenous Exosomes as Carrier" (US Q08232201) está protegida bajo las leyes de propiedad intelectual, especialmente en el ámbito de las patentes y derechos de autor. A continuación se detallan los aspectos relevantes relacionados con su protección legal:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    1. <strong>Protección por Patente:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Exclusividad de Derechos:</strong> La patente confiere derechos exclusivos al titular sobre la invención, lo que significa que tiene el derecho de fabricar, usar, vender y licenciar la vacuna durante un periodo determinado, generalmente de 20 años desde la fecha de presentación. Esto evita que otros reproduzcan la invención sin el consentimiento del titular.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Prevención de Infracciones:</strong> La protección de la patente permite al titular tomar acciones legales contra cualquier entidad que intente comercializar o usar la invención sin autorización, lo que protege la inversión en investigación y desarrollo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    2. <strong>Derechos de Autor:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección de Materiales Relacionados:</strong> Aunque los derechos de autor no protegen las ideas o conceptos detrás de la invención, pueden aplicarse a documentos, presentaciones, gráficos y otros materiales que describan o expliquen la vacuna. Esto significa que cualquier contenido escrito o visual relacionado con la invención puede estar protegido.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Registro de Derechos de Autor:</strong> Registrar estos materiales puede proporcionar una capa adicional de protección, asegurando que el contenido original no sea utilizado sin permiso.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    3. <strong>Protección Legal:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Registro y Vigilancia:</strong> Es crucial que el titular de la patente registre la invención en la oficina de patentes correspondiente y mantenga una vigilancia activa del mercado para detectar posibles infracciones. La vigilancia permite actuar rápidamente contra competidores que podrían intentar explotar la tecnología sin autorización.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Acciones Legales:</strong> En caso de infracción, el titular de la patente tiene el derecho de iniciar acciones legales, lo que puede incluir demandas por daños y perjuicios y medidas cautelares para detener el uso no autorizado de la invención.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    4. <strong>Licencias y Transferencia de Tecnología:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Oportunidades de Licencia:</strong> El titular de la patente puede optar por licenciar la tecnología a otras empresas o instituciones, permitiendo su uso a cambio de regalías. Esto no solo genera ingresos adicionales, sino que también facilita la comercialización de la vacuna en el mercado.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Colaboraciones Estratégicas:</strong> La patente puede fomentar alianzas con instituciones de investigación y empresas farmacéuticas, facilitando el desarrollo conjunto y la comercialización de la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    5. <strong>Consideraciones Éticas y Regulatorias:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cumplimiento Normativo:</strong> Dado que la patente se refiere a un tratamiento para una enfermedad neurodegenerativa, es fundamental considerar las regulaciones éticas y de salud pública que rigen el desarrollo y la comercialización de terapias biológicas. Esto incluye la obtención de aprobaciones de las autoridades regulatorias pertinentes para ensayos clínicos y productos farmacéuticos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Conclusión:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Alzhe-Peptide Against Alzheimer Disease with Exogenous Exosomes as Carrier" (US Q08232201) goza de una sólida protección legal que permite al titular controlar su invención y defender sus derechos frente a posibles infracciones. Esta protección es esencial para asegurar la valorización de la innovación en el tratamiento de la enfermedad de Alzheimer y para fomentar el desarrollo continuo de soluciones efectivas en el ámbito de la neurociencia y la salud pública.
</p>

<!-- Valor Agregado -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.5.4. Valor Agregado
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Alzhe-Peptide Against Alzheimer Disease with Exogenous Exosomes as Carrier" (US Q08232201) aporta un valor significativo en varios aspectos, destacando su potencial en la prevención y tratamiento de la enfermedad de Alzheimer. A continuación, se detallan los elementos clave que constituyen su valor agregado:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    1. <strong>Innovación Terapéutica:</strong> La combinación de péptidos específicos relacionados con la enfermedad de Alzheimer y el uso de exosomas como vehículos de entrega representa un enfoque innovador que podría revolucionar el tratamiento de esta enfermedad neurodegenerativa.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    2. <strong>Mejora de la Eficacia del Tratamiento:</strong> Al utilizar exosomas para transportar péptidos, se mejora la biodisponibilidad y la eficacia del tratamiento, lo que puede resultar en una respuesta inmune más robusta y duradera contra las proteínas patógenas asociadas al Alzheimer.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    3. <strong>Personalización del Tratamiento:</strong> La capacidad de personalizar la vacuna según las características genéticas y moleculares de cada paciente permite tratamientos más efectivos y ajustados a las necesidades individuales, aumentando la probabilidad de éxito terapéutico.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    4. <strong>Impacto en la Salud Pública:</strong> La invención tiene el potencial de reducir significativamente la carga de la enfermedad de Alzheimer en la población, mejorando la calidad de vida de millones de personas afectadas y sus familias, y disminuyendo los costos asociados con el cuidado a largo plazo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    5. <strong>Ventaja Competitiva en el Mercado:</strong> La patente proporciona una ventaja competitiva al otorgar derechos exclusivos sobre la invención, lo que permite al titular establecerse como líder en el desarrollo de nuevas terapias para el Alzheimer y proteger su inversión en I+D.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    6. <strong>Oportunidades de Inversión:</strong> La innovación y el potencial comercial de la vacuna pueden atraer inversiones significativas de capital riesgo y otros fondos, proporcionando los recursos necesarios para el desarrollo y la comercialización.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    7. <strong>Fomento de la Investigación:</strong> La tecnología subyacente puede abrir nuevas avenidas para la investigación en otros trastornos neurodegenerativos o enfermedades relacionadas, ampliando el impacto y la aplicabilidad de la invención.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    8. <strong>Reputación y Credibilidad:</strong> Tener una patente reconocida en un campo tan crítico como la neurología refuerza la reputación del titular como líder en innovación médica, aumentando la confianza entre médicos, pacientes e inversores.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    9. <strong>Contribución al Conocimiento Científico:</strong> La invención no solo representa un avance en tratamientos, sino que también contribuye al conocimiento científico en la biología celular y la inmunología, incentivando más investigaciones en estas áreas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Conclusión:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, la patente "Vaccine Alzhe-Peptide Against Alzheimer Disease with Exogenous Exosomes as Carrier" (US Q08232201) representa un valor agregado significativo en términos de innovación, eficacia, personalización y oportunidades económicas. Su desarrollo y eventual comercialización no solo pueden transformar el tratamiento de la enfermedad de Alzheimer, sino que también contribuyen a avanzar en la investigación médica y mejorar la salud pública, brindando esperanza a millones de personas afectadas por esta devastadora enfermedad.
</p>

<!-- Estrategia de Protección -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.5.5. Estrategia de Protección
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Hemos implementado una estrategia integral de protección que incluye:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Registro de la Patente:</strong> Registro de la patente en las principales jurisdicciones para garantizar la protección en mercados clave.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Acuerdos de Confidencialidad:</strong> Acuerdos de confidencialidad con empleados y socios para salvaguardar la información sobre el proceso de producción y la composición del endulzante.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Monitoreo del Mercado:</strong> Monitoreo del mercado para detectar posibles infracciones de la patente.
</p>

<!-- Impacto en la Competitividad -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.5.6. Impacto en la Competitividad
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Alzhe-Peptide Against Alzheimer Disease with Exogenous Exosomes as Carrier" (US Q08232201) tiene un impacto significativo en el ámbito de la investigación y tratamiento de la enfermedad de Alzheimer, además de fortalecer la competitividad del titular en el mercado biotecnológico y farmacéutico. A continuación, se describen los aspectos clave de su impacto y competitividad:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    1. <strong>Avance en el Tratamiento de la Enfermedad de Alzheimer:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Innovación en Terapias:</strong> La combinación de péptidos específicos y exosomas como vehículo de entrega representa un enfoque novedoso para tratar la enfermedad de Alzheimer, lo que puede llevar a terapias más efectivas y específicas, mejorando así la calidad de vida de los pacientes.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Prevención de la Progresión de la Enfermedad:</strong> La posibilidad de prevenir la aparición o progresión de la enfermedad mediante la modulación de la respuesta inmune puede cambiar significativamente la forma en que se aborda el Alzheimer.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    2. <strong>Ventaja Competitiva en el Mercado:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Derechos Exclusivos:</strong> La protección patentada otorga derechos exclusivos al titular, permitiendo establecer un monopolio en la comercialización de la vacuna. Esto evita que competidores ofrezcan productos similares sin autorización, consolidando su posición en el mercado.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Diferenciación de Productos:</strong> Al ofrecer una solución innovadora frente a tratamientos existentes, la patente permite al titular diferenciarse de la competencia y posicionarse como líder en el sector de tratamientos para enfermedades neurodegenerativas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    3. <strong>Atracción de Inversiones:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Financiamiento para Desarrollo:</strong> La innovación asociada a la patente puede atraer inversiones de capital riesgo y otras fuentes de financiamiento, lo que proporciona recursos esenciales para la investigación, desarrollo y eventual comercialización de la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Interés de Socios Estratégicos:</strong> Las empresas farmacéuticas e instituciones de investigación pueden estar interesadas en asociarse para el desarrollo conjunto, lo que puede acelerar el proceso de comercialización y expansión en el mercado.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    4. <strong>Reputación y Credibilidad:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Posicionamiento como Líder en Innovación:</strong> La patente refuerza la reputación del titular como líder en el campo de la biotecnología y la investigación en neurociencia, aumentando la confianza de médicos, pacientes e inversores en la efectividad y viabilidad de la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Visibilidad en el Sector:</strong> La invención atrae la atención de la comunidad científica y médica, posicionando al titular como un referente en el desarrollo de tratamientos innovadores para el Alzheimer.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    5. <strong>Expansión a Nuevos Mercados:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Potencial Global:</strong> La patente permite explorar oportunidades en mercados internacionales, donde la demanda de tratamientos para el Alzheimer está en aumento. La capacidad de ofrecer una solución innovadora puede facilitar la entrada a nuevos mercados y la creación de alianzas estratégicas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Adaptación a Regulaciones Locales:</strong> La protección patentada proporciona un marco legal que facilita la adaptación a las regulaciones locales en diferentes países, lo que es crucial para la comercialización de productos farmacéuticos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    6. <strong>Fomento de la Investigación y Desarrollo:</strong>
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Generación de Nuevas Aplicaciones:</strong> La tecnología desarrollada en esta patente puede abrir nuevas vías de investigación en otras enfermedades neurodegenerativas, ampliando su impacto en la comunidad científica y médica.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cultura de Innovación:</strong> La existencia de la patente fomenta una cultura de innovación dentro de la organización, incentivando la inversión continua en I+D y el desarrollo de nuevas terapias.
</p>
<!-- Potencial de Monetización -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.5.7. Potencial de Monetización
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El potencial de monetización de la patente está en:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Licencias y Regalías:</strong> Los titulares de la patente pueden licenciar la tecnología a otras compañías farmacéuticas o biotecnológicas, obteniendo ingresos a través de regalías. Dado el carácter innovador de la vacuna, la demanda de licencias puede ser alta, especialmente entre empresas que buscan integrar soluciones avanzadas y diferenciadas en sus portafolios de productos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Desarrollo y Comercialización Directa:</strong> Si la entidad titular de la patente opta por desarrollar y comercializar directamente la vacuna, podría obtener ingresos sustanciales de las ventas, especialmente si logra acuerdos con gobiernos o instituciones sanitarias que busquen asegurar un suministro efectivo y seguro de vacunas. La pandemia ha demostrado la disposición de los gobiernos para invertir considerablemente en vacunas efectivas, lo que podría traducirse en contratos lucrativos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Expansión de Aplicaciones:</strong> La tecnología subyacente a esta patente podría adaptarse para otras enfermedades virales, lo que expandiría su mercado potencial y, por lo tanto, las fuentes de ingresos. Este enfoque modular permite capitalizar en nuevos mercados sin la necesidad de desarrollar tecnologías completamente nuevas desde cero.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Valoración de la Empresa:</strong> La posesión de una patente con un potencial de mercado tan alto puede incrementar significativamente la valoración de la empresa titular, lo que es beneficioso en el contexto de rondas de financiamiento, fusiones, adquisiciones, o incluso en una oferta pública inicial (IPO).
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Socios y Alianzas Estratégicas:</strong> La exclusividad de esta tecnología puede facilitar alianzas estratégicas con grandes farmacéuticas, instituciones de investigación y organizaciones internacionales. Estos socios pueden aportar capital, conocimientos y recursos adicionales, lo que facilita el desarrollo y la distribución a gran escala, y al mismo tiempo, genera ingresos por acuerdos de colaboración.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En conjunto, la patente tiene un alto potencial de monetización a través de una combinación de licencias, desarrollo directo, expansiones de aplicación, y alianzas estratégicas.
</p>

<!-- Cumplimiento Normativo -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.5.8. Cumplimiento Normativo
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Esto implica asegurar que el desarrollo, producción, y comercialización de la vacuna cumpla con todas las regulaciones y leyes aplicables en las jurisdicciones relevantes. Esto incluye:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Aprobaciones Regulatorias:</strong> La vacuna debe obtener la aprobación de organismos regulatorios como la FDA en los Estados Unidos, la EMA en Europa, y otras agencias equivalentes en diferentes países. Esto implica cumplir con estrictos estándares de seguridad, eficacia y calidad, que se validan a través de ensayos clínicos en varias fases.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cumplimiento de Buenas Prácticas de Manufactura (GMP):</strong> Durante la producción, es fundamental adherirse a las Buenas Prácticas de Manufactura (GMP) para garantizar que la vacuna se fabrique bajo condiciones controladas y consistentes, minimizando riesgos de contaminación, errores de producción y garantizando la calidad del producto final.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección de Datos y Privacidad:</strong> En el manejo de datos clínicos y de pacientes, es crucial cumplir con leyes de protección de datos como el GDPR en Europa y la HIPAA en los Estados Unidos, asegurando que la información personal de los participantes en los ensayos clínicos se maneje de manera segura y ética.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Propiedad Intelectual y Cumplimiento de Patentes:</strong> Es necesario asegurar que la patente y sus derechos asociados sean respetados y que no haya infracción de otras patentes o derechos de propiedad intelectual existentes. Esto también incluye la vigilancia de posibles infracciones por parte de terceros para proteger la exclusividad del producto.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Cumplimiento Ambiental y de Seguridad:</strong> En la producción y distribución de la vacuna, es necesario cumplir con regulaciones ambientales y de seguridad, que aseguren que no se produzcan daños al medio ambiente y que se garantice la seguridad de los trabajadores y los consumidores.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Transparencia y Reportes:</strong> Mantener transparencia en todas las fases del desarrollo y comercialización, proporcionando informes precisos a las autoridades regulatorias, inversionistas y al público, según lo requieran las leyes aplicables.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Cumplir con estos estándares y regulaciones no solo es crucial para evitar sanciones legales y financieras, sino también para asegurar la confianza del público y el éxito comercial de la vacuna.
</p>

<!-- Plan a Futuro -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.5.9. Plan a Futuro
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El plan futuro para la patente podría enfocarse en varias áreas estratégicas para maximizar su impacto y monetización:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Ampliación de Ensayos Clínicos:</strong> Continuar con la realización de ensayos clínicos avanzados para demostrar la eficacia y seguridad de la vacuna en una variedad de poblaciones y entornos. Esto incluiría fases posteriores de ensayos clínicos y estudios de largo plazo para evaluar la durabilidad de la inmunidad conferida por la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Desarrollo de Nuevas Aplicaciones:</strong> Explorar la adaptación de esta tecnología para otras enfermedades virales o incluso bacterianas. La capacidad de los exosomas para transportar diferentes tipos de material biológico podría permitir el desarrollo de nuevas vacunas o terapias genéticas, expandiendo así el uso de la patente a diferentes áreas de la medicina.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Colaboraciones y Alianzas Estratégicas:</strong> Establecer asociaciones con instituciones académicas, centros de investigación, y empresas farmacéuticas para acelerar el desarrollo y la comercialización de la vacuna. Estas alianzas podrían proporcionar acceso a recursos adicionales, como infraestructura de investigación y canales de distribución global.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Expansión a Mercados Internacionales:</strong> Trabajar en la obtención de aprobaciones regulatorias en mercados internacionales clave, como Europa, Asia, y América Latina, para ampliar la disponibilidad de la vacuna y su impacto global. Este proceso también implicaría adaptar la producción y distribución a las normativas y necesidades específicas de cada región.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Optimización de la Producción y Distribución:</strong> Invertir en tecnologías de producción avanzadas y en la expansión de las capacidades de manufactura para satisfacer la demanda global. Además, establecer cadenas de suministro robustas y eficientes que permitan la distribución rápida y efectiva de la vacuna a nivel mundial.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Protección y Gestión de la Propiedad Intelectual:</strong> Fortalecer la vigilancia y protección de los derechos de propiedad intelectual asociados con la patente para evitar infracciones y proteger la exclusividad de la tecnología. Esto también podría incluir la exploración de nuevas patentes derivadas para proteger mejoras y nuevas aplicaciones de la tecnología.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Monetización a través de Licencias y Ventas:</strong> Explorar opciones de licenciamiento a terceros para generar ingresos adicionales, al mismo tiempo que se consideran las ventas directas en mercados estratégicos. El objetivo sería maximizar el retorno de la inversión en la investigación y desarrollo de la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Este plan futuro busca no solo asegurar el éxito comercial de la vacuna, sino también expandir su impacto en la salud pública global y posicionar a los titulares de la patente como líderes en innovación en el campo de las vacunas y terapias basadas en esas tecnologías.
</p>

<!-- Conclusión -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.5.10. Conclusión
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Alzhe-Peptide Against Alzheimer Disease with Exogenous Exosomes as Carrier" (US Q08232201) representa un avance prometedor en la lucha contra la enfermedad de Alzheimer, ofreciendo una estrategia innovadora que combina la inmunoterapia con la nanotecnología a través del uso de exosomas como vehículos de entrega para péptidos específicos. Esta combinación tiene el potencial de mejorar significativamente la eficacia del tratamiento al modular la respuesta inmune del paciente de manera más precisa y dirigida. 
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    El enfoque propuesto no solo busca tratar los síntomas de la enfermedad, sino que también puede prevenir su progresión, lo que podría transformar la forma en que se aborda el Alzheimer. Al ofrecer una solución que podría personalizarse según las características individuales de los pacientes, la patente se alinea con las tendencias actuales hacia la medicina personalizada, lo que la hace aún más relevante en el contexto médico actual.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    La protección legal proporcionada por la patente otorga al titular derechos exclusivos que fortalecen su posición en el mercado, permitiendo la posibilidad de atraer inversiones significativas y colaboraciones estratégicas con otras instituciones y empresas. Esto no solo potencia el desarrollo de la vacuna, sino que también contribuye a la creación de un ecosistema de innovación en el sector de la biotecnología y la farmacéutica.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, la patente "Vaccine Alzhe-Peptide Against Alzheimer Disease with Exogenous Exosomes as Carrier" tiene el potencial de no solo mejorar los tratamientos disponibles para la enfermedad de Alzheimer, sino también de establecer un nuevo estándar en la investigación y desarrollo de terapias efectivas y personalizadas. Su desarrollo y eventual comercialización podrían marcar una diferencia significativa en la vida de millones de pacientes afectados por esta enfermedad devastadora, ofreciendo nuevas esperanzas tanto para los pacientes como para sus familias.
</p>

<!-- Patentes Registradas -->
<h2 style="font-size: 24px; color: #c62828; margin-bottom: 20px; text-align: left; border-bottom: 3px solid #c62828; padding-bottom: 5px;">
    11.6. Patentes Registradas (6)
</h2>

<!-- Descripción de la Patente 11.6.1 -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.6.1. Vaccine Diab2-peptide against Diabetes Mellitus 2 disease with exogenous exosomes as Carrier. Patent in Course: US Q08232203.
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Diab2-Peptide Against Diabetes Mellitus 2 Disease with Exogenous Exosomes as Carrier" (US Q08232203) describe una innovadora vacuna diseñada para combatir la Diabetes Mellitus Tipo 2 (DM2) mediante el uso de péptidos específicos combinados con exosomas exógenos como vehículos de entrega.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta invención se basa en la combinación de péptidos que modulan la respuesta inmunitaria asociada a la Diabetes Mellitus Tipo 2 y exosomas, que actúan como transportadores naturales, para mejorar la biodisponibilidad y eficacia del tratamiento. Los exosomas, pequeñas vesículas derivadas de células, tienen la capacidad única de atravesar barreras biológicas, lo que los convierte en un sistema de entrega ideal para los péptidos terapéuticos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    El péptido incluido en la vacuna está diseñado para inducir una respuesta inmune específica contra los antígenos relacionados con la DM2, que pueden desempeñar un papel en la modulación de la resistencia a la insulina y la disfunción metabólica. Al utilizar exosomas como portadores, se garantiza que los péptidos lleguen de manera eficiente a las células diana, lo que maximiza la efectividad del tratamiento y minimiza posibles efectos secundarios.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    La vacuna está destinada a ser utilizada como un tratamiento preventivo y terapéutico para pacientes con riesgo de desarrollar DM2 o aquellos que ya han sido diagnosticados con la enfermedad. Su objetivo es mejorar la función metabólica, reducir la resistencia a la insulina, y en última instancia, prevenir las complicaciones crónicas asociadas con la DM2.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Además, esta tecnología permite la personalización del tratamiento, ajustando los componentes peptídicos según el perfil genético y metabólico individual del paciente, lo que mejora la efectividad del tratamiento y minimiza las reacciones adversas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, esta patente propone un enfoque revolucionario para el tratamiento de la Diabetes Mellitus Tipo 2, utilizando una combinación de inmunoterapia y nanotecnología para ofrecer una solución más efectiva y personalizada para millones de personas afectadas por esta condición crónica.
</p>

<!-- Derechos de Autor y Protección Legal -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.6.3. Derechos de Autor y Protección Legal
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Diab2-peptide against Diabetes Mellitus 2 disease with exogenous exosomes as Carrier. Patent in Course: US Q08232203" está protegida bajo las leyes de propiedad intelectual, especialmente en el ámbito de las patentes y derechos de autor. A continuación se detallan los aspectos relevantes relacionados con su protección legal:
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>1. Protección por Patente:</strong> La patente confiere derechos exclusivos al titular sobre la invención, lo que significa que tiene el derecho de fabricar, usar, vender y licenciar la vacuna durante un periodo determinado, generalmente de 20 años desde la fecha de presentación. Esto evita que otros reproduzcan la invención sin el consentimiento del titular.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>2. Prevención de Infracciones:</strong> La protección de la patente permite al titular tomar acciones legales contra cualquier entidad que intente comercializar o usar la invención sin autorización, lo que protege la inversión en investigación y desarrollo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>3. Derechos de Autor:</strong> Aunque los derechos de autor no protegen las ideas o conceptos detrás de la invención, pueden aplicarse a documentos, presentaciones, gráficos y otros materiales que describan o expliquen la vacuna. Esto significa que cualquier contenido escrito o visual relacionado con la invención puede estar protegido.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>4. Registro de Derechos de Autor:</strong> Registrar estos materiales puede proporcionar una capa adicional de protección, asegurando que el contenido original no sea utilizado sin permiso.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>5. Protección Legal:</strong> Es crucial que el titular de la patente registre la invención en la oficina de patentes correspondiente y mantenga una vigilancia activa del mercado para detectar posibles infracciones. La vigilancia permite actuar rápidamente contra competidores que podrían intentar explotar la tecnología sin autorización.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>6. Acciones Legales:</strong> En caso de infracción, el titular de la patente tiene el derecho de iniciar acciones legales, lo que puede incluir demandas por daños y perjuicios y medidas cautelares para detener el uso no autorizado de la invención.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>7. Licencias y Transferencia de Tecnología:</strong> El titular de la patente puede optar por licenciar la tecnología a otras empresas o instituciones, permitiendo su uso a cambio de regalías. Esto no solo genera ingresos adicionales, sino que también facilita la comercialización de la vacuna en el mercado.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>8. Colaboraciones Estratégicas:</strong> La patente puede fomentar alianzas con instituciones de investigación y empresas farmacéuticas, facilitando el desarrollo conjunto y la comercialización de la vacuna.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>9. Consideraciones Éticas y Regulatorias:</strong> Dado que la patente se refiere a un tratamiento para una enfermedad crónica, es fundamental considerar las regulaciones éticas y de salud pública que rigen el desarrollo y la comercialización de terapias biológicas. Esto incluye la obtención de aprobaciones de las autoridades regulatorias pertinentes para ensayos clínicos y productos farmacéuticos.
</p>

<!-- Valor Agregado -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.6.4. Valor Agregado
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Diab2-Peptide Against Diabetes Mellitus 2 Disease with Exogenous Exosomes as Carrier" ofrece un valor agregado significativo en el campo de la medicina y la biotecnología, especialmente en el tratamiento de la Diabetes Mellitus Tipo 2 (DM2). Este valor se manifiesta a través de varias características clave que diferencian esta invención de las terapias convencionales.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>1. Innovación en la Administración de Terapias:</strong> La utilización de exosomas exógenos como vehículos para la entrega de péptidos terapéuticos representa un avance revolucionario en la administración de medicamentos. Los exosomas permiten una entrega más eficiente y dirigida de los péptidos, lo que aumenta la biodisponibilidad del tratamiento y mejora su eficacia. Esta tecnología también reduce el riesgo de efectos secundarios al minimizar la exposición sistémica a los componentes terapéuticos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>2. Enfoque Personalizado:</strong> La vacuna tiene el potencial de ser personalizada según el perfil genético y metabólico del paciente, lo que permite una mayor precisión en el tratamiento. Esto es particularmente valioso en una enfermedad como la DM2, donde la respuesta a los tratamientos puede variar ampliamente entre individuos. La personalización mejora la eficacia del tratamiento y reduce la probabilidad de reacciones adversas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>3. Prevención de Complicaciones a Largo Plazo:</strong> Al mejorar el control de la glucosa y la resistencia a la insulina, la vacuna puede ayudar a prevenir o retrasar las complicaciones crónicas de la DM2, como las enfermedades cardiovasculares, la neuropatía y la nefropatía. Esto no solo mejora la calidad de vida del paciente, sino que también reduce los costos asociados con el manejo de estas complicaciones a largo plazo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>4. Contribución a la Salud Pública:</strong> La vacuna podría desempeñar un papel crucial en la lucha contra la creciente epidemia de DM2 a nivel mundial. Su implementación masiva podría reducir la incidencia de nuevos casos y ayudar a controlar la enfermedad en poblaciones de alto riesgo, lo que tendría un impacto positivo en la salud pública a escala global.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>5. Facilitación de Tratamientos Combinados:</strong> La vacuna puede ser utilizada en combinación con otros tratamientos convencionales para la DM2, como medicamentos orales y cambios en el estilo de vida, potenciando los efectos terapéuticos y ofreciendo una estrategia integral para el manejo de la enfermedad.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>6. Posicionamiento Estratégico en el Mercado:</strong> La adopción de esta vacuna por parte del mercado posicionaría a la empresa titular de la patente como líder en innovación en el campo de la biotecnología y la medicina personalizada. Este posicionamiento no solo fortalece la competitividad de la empresa, sino que también abre nuevas oportunidades de colaboración y expansión en mercados emergentes y establecidos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>7. Sostenibilidad y Aceptación:</strong> Al utilizar exosomas, que son componentes naturales del cuerpo humano, la vacuna es más sostenible y podría tener una mayor aceptación por parte de los pacientes y los reguladores. Además, la tecnología podría ser aplicable a otras enfermedades, lo que aumenta su valor agregado al permitir su adaptación y expansión en otras áreas terapéuticas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, la patente "Vaccine Diab2-Peptide Against Diabetes Mellitus 2 Disease with Exogenous Exosomes as Carrier" radica en su capacidad para ofrecer una solución innovadora, eficaz y personalizada para el tratamiento y la prevención de la Diabetes Mellitus Tipo 2. Su enfoque avanzado en la administración de terapias, la prevención de complicaciones, y la mejora en la calidad de vida de los pacientes, junto con su potencial de posicionamiento estratégico en el mercado, la convierten en una invención de gran valor en la medicina moderna.
</p>

<!-- Estrategia de Protección -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.6.5. Estrategia de Protección
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Hemos implementado una estrategia integral de protección que incluye:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;">Registro de la patente en las principales jurisdicciones para garantizar la protección en mercados clave.</li>
    <li style="margin-bottom: 10px;">Acuerdos de confidencialidad con empleados y socios para salvaguardar la información sobre el proceso de producción y la composición del endulzante.</li>
    <li style="margin-bottom: 10px;">Monitoreo del mercado para detectar posibles infracciones de la patente.</li>
</ul>

<!-- Impacto en la Competitividad -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.6.6. Impacto en la Competitividad
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Diab2-Peptide Against Diabetes Mellitus 2 Disease with Exogenous Exosomes as Carrier" (US Q08232203) tiene el potencial de generar un impacto significativo en la competencia dentro del mercado de tratamientos para la Diabetes Mellitus Tipo 2 (DM2). Este impacto se puede analizar desde varias perspectivas clave:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Ventaja Competitiva a Través de la Innovación:</strong> La combinación de péptidos terapéuticos con exosomas exógenos como vehículos de administración es una innovación disruptiva que puede cambiar las reglas del juego en el tratamiento de la DM2. Esta tecnología supera las limitaciones de las terapias convencionales, ofreciendo una opción más eficaz y dirigida. Las empresas competidoras que dependen de tratamientos tradicionales podrían verse obligadas a invertir en investigación y desarrollo para mantenerse al día con este avance.</li>
    <li style="margin-bottom: 10px;"><strong>Posicionamiento en el Mercado de Medicina Personalizada:</strong> El enfoque de medicina personalizada de esta vacuna, que permite adaptar el tratamiento a las características individuales de cada paciente, posiciona a la empresa titular de la patente como líder en una tendencia creciente en la industria de la salud. Este posicionamiento podría atraer a consumidores y socios estratégicos que buscan soluciones más efectivas y personalizadas, desafiando a las empresas que ofrecen productos menos especializados.</li>
    <li style="margin-bottom: 10px;"><strong>Barreras de Entrada para Nuevos Competidores:</strong> La obtención de esta patente crea una barrera significativa para nuevos competidores que deseen ingresar al mercado con tecnologías similares. El monopolio sobre esta innovadora tecnología de vacuna durante la vigencia de la patente proporciona a la empresa una ventaja exclusiva, permitiéndole capturar una mayor cuota de mercado sin competencia directa en esta área específica.</li>
    <li style="margin-bottom: 10px;"><strong>Reducción de la Demanda de Terapias Convencionales:</strong> Si la vacuna demuestra ser más eficaz que los tratamientos convencionales, como los medicamentos orales y las inyecciones de insulina, podría reducir la demanda de estos productos. Esto afectaría negativamente a las empresas que dependen de estas terapias como sus principales fuentes de ingresos, obligándolas a replantear sus estrategias de negocio.</li>
    <li style="margin-bottom: 10px;"><strong>Aceleración de la Investigación y Desarrollo:</strong> La introducción de esta vacuna innovadora podría impulsar a la competencia a acelerar sus esfuerzos de investigación y desarrollo en tecnologías similares o complementarias. Las empresas competidoras podrían verse obligadas a innovar para no quedarse atrás, lo que podría conducir a un aumento general en la inversión en nuevas terapias para la DM2 y otras enfermedades crónicas.</li>
    <li style="margin-bottom: 10px;"><strong>Efecto en los Precios del Mercado:</strong> La entrada de una vacuna tan avanzada en el mercado podría influir en la estrategia de precios de los competidores. Para seguir siendo competitivos, podrían verse obligados a ajustar sus precios o desarrollar versiones mejoradas de sus productos actuales. La presión de un producto superior podría llevar a una reducción en los márgenes de ganancia de los competidores, especialmente si la vacuna se comercializa a un precio competitivo.</li>
    <li style="margin-bottom: 10px;"><strong>Fidelización del Cliente:</strong> La introducción exitosa de esta vacuna podría generar una fuerte lealtad entre los pacientes y los proveedores de atención médica, lo que dificultaría que los competidores atraigan a estos clientes una vez que se hayan acostumbrado a los beneficios de este tratamiento innovador. Esto podría resultar en una ventaja competitiva sostenida para la empresa titular de la patente.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Conclusión:</strong> El impacto en la competencia de la patente "Vaccine Diab2-Peptide Against Diabetes Mellitus 2 Disease with Exogenous Exosomes as Carrier" es significativo. Al introducir una tecnología innovadora y potencialmente superior en el tratamiento de la Diabetes Mellitus Tipo 2, la patente establece una ventaja competitiva que desafía a las empresas rivales a innovar y adaptarse. Además, crea barreras de entrada, influye en la dinámica de precios y posiciona a la empresa titular como un líder en el creciente mercado de la medicina personalizada. Este impacto podría redefinir el panorama competitivo en el tratamiento de la DM2, beneficiando a la empresa titular de la patente mientras obliga a la competencia a evolucionar.
</p>

<!-- Potencial de Monetización -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.6.7. Potencial de Monetización
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El potencial de monetización de la patente está en:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Licencias y Regalías:</strong> Los titulares de la patente pueden licenciar la tecnología a otras compañías farmacéuticas o biotecnológicas, obteniendo ingresos a través de regalías. Dado el carácter innovador de la vacuna, la demanda de licencias puede ser alta, especialmente entre empresas que buscan integrar soluciones avanzadas y diferenciadas en sus portafolios de productos.</li>
    <li style="margin-bottom: 10px;"><strong>Desarrollo y Comercialización Directa:</strong> Si la entidad titular de la patente opta por desarrollar y comercializar directamente la vacuna, podría obtener ingresos sustanciales de las ventas, especialmente si logra acuerdos con gobiernos o instituciones sanitarias que busquen asegurar un suministro efectivo y seguro de vacunas. La pandemia ha demostrado la disposición de los gobiernos para invertir considerablemente en vacunas efectivas, lo que podría traducirse en contratos lucrativos.</li>
    <li style="margin-bottom: 10px;"><strong>Expansión de Aplicaciones:</strong> La tecnología subyacente a esta patente podría adaptarse para otras enfermedades virales, lo que expandiría su mercado potencial y, por lo tanto, las fuentes de ingresos. Este enfoque modular permite capitalizar en nuevos mercados sin la necesidad de desarrollar tecnologías completamente nuevas desde cero.</li>
    <li style="margin-bottom: 10px;"><strong>Valoración de la Empresa:</strong> La posesión de una patente con un potencial de mercado tan alto puede incrementar significativamente la valoración de la empresa titular, lo que es beneficioso en el contexto de rondas de financiamiento, fusiones, adquisiciones, o incluso en una oferta pública inicial (IPO).</li>
    <li style="margin-bottom: 10px;"><strong>Socios y Alianzas Estratégicas:</strong> La exclusividad de esta tecnología puede facilitar alianzas estratégicas con grandes farmacéuticas, instituciones de investigación y organizaciones internacionales. Estos socios pueden aportar capital, conocimientos y recursos adicionales, lo que facilita el desarrollo y la distribución a gran escala, y al mismo tiempo, genera ingresos por acuerdos de colaboración.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    En conjunto, la patente tiene un alto potencial de monetización a través de una combinación de licencias, desarrollo directo, expansiones de aplicación, y alianzas estratégicas.
</p>

<!-- Cumplimiento Normativo -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.6.8. Cumplimiento Normativo
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Cumplir con el marco normativo implica asegurar que el desarrollo, producción, y comercialización de la vacuna cumpla con todas las regulaciones y leyes aplicables en las jurisdicciones relevantes. Esto incluye:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Aprobaciones Regulatorias:</strong> La vacuna debe obtener la aprobación de organismos regulatorios como la FDA en los Estados Unidos, la EMA en Europa, y otras agencias equivalentes en diferentes países. Esto implica cumplir con estrictos estándares de seguridad, eficacia y calidad, que se validan a través de ensayos clínicos en varias fases.</li>
    <li style="margin-bottom: 10px;"><strong>Cumplimiento de Buenas Prácticas de Manufactura (GMP):</strong> Durante la producción, es fundamental adherirse a las Buenas Prácticas de Manufactura (GMP) para garantizar que la vacuna se fabrique bajo condiciones controladas y consistentes, minimizando riesgos de contaminación, errores de producción y garantizando la calidad del producto final.</li>
    <li style="margin-bottom: 10px;"><strong>Protección de Datos y Privacidad:</strong> En el manejo de datos clínicos y de pacientes, es crucial cumplir con leyes de protección de datos como el GDPR en Europa y la HIPAA en los Estados Unidos, asegurando que la información personal de los participantes en los ensayos clínicos se maneje de manera segura y ética.</li>
    <li style="margin-bottom: 10px;"><strong>Propiedad Intelectual y Cumplimiento de Patentes:</strong> Es necesario asegurar que la patente y sus derechos asociados sean respetados y que no haya infracción de otras patentes o derechos de propiedad intelectual existentes. Esto también incluye la vigilancia de posibles infracciones por parte de terceros para proteger la exclusividad del producto.</li>
    <li style="margin-bottom: 10px;"><strong>Cumplimiento Ambiental y de Seguridad:</strong> En la producción y distribución de la vacuna, es necesario cumplir con regulaciones ambientales y de seguridad, que aseguren que no se produzcan daños al medio ambiente y que se garantice la seguridad de los trabajadores y los consumidores.</li>
    <li style="margin-bottom: 10px;"><strong>Transparencia y Reportes:</strong> Mantener transparencia en todas las fases del desarrollo y comercialización, proporcionando informes precisos a las autoridades regulatorias, inversionistas y al público, según lo requieran las leyes aplicables.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    Cumplir con estos estándares y regulaciones no solo es crucial para evitar sanciones legales y financieras, sino también para asegurar la confianza del público y el éxito comercial de la vacuna.
</p>


<!-- Plan a Futuro -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.6.9. Plan a Futuro
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El plan futuro para la patente podría enfocarse en varias áreas estratégicas para maximizar su impacto y monetización:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Ampliación de Ensayos Clínicos:</strong> Continuar con la realización de ensayos clínicos avanzados para demostrar la eficacia y seguridad de la vacuna en una variedad de poblaciones y entornos. Esto incluiría fases posteriores de ensayos clínicos y estudios de largo plazo para evaluar la durabilidad de la inmunidad conferida por la vacuna.</li>
    <li style="margin-bottom: 10px;"><strong>Desarrollo de Nuevas Aplicaciones:</strong> Explorar la adaptación de esta tecnología para otras enfermedades virales o incluso bacterianas. La capacidad de los exosomas para transportar diferentes tipos de material biológico podría permitir el desarrollo de nuevas vacunas o terapias genéticas, expandiendo así el uso de la patente a diferentes áreas de la medicina.</li>
    <li style="margin-bottom: 10px;"><strong>Colaboraciones y Alianzas Estratégicas:</strong> Establecer asociaciones con instituciones académicas, centros de investigación, y empresas farmacéuticas para acelerar el desarrollo y la comercialización de la vacuna. Estas alianzas podrían proporcionar acceso a recursos adicionales, como infraestructura de investigación y canales de distribución global.</li>
    <li style="margin-bottom: 10px;"><strong>Expansión a Mercados Internacionales:</strong> Trabajar en la obtención de aprobaciones regulatorias en mercados internacionales clave, como Europa, Asia, y América Latina, para ampliar la disponibilidad de la vacuna y su impacto global. Este proceso también implicaría adaptar la producción y distribución a las normativas y necesidades específicas de cada región.</li>
    <li style="margin-bottom: 10px;"><strong>Optimización de la Producción y Distribución:</strong> Invertir en tecnologías de producción avanzadas y en la expansión de las capacidades de manufactura para satisfacer la demanda global. Además, establecer cadenas de suministro robustas y eficientes que permitan la distribución rápida y efectiva de la vacuna a nivel mundial.</li>
    <li style="margin-bottom: 10px;"><strong>Protección y Gestión de la Propiedad Intelectual:</strong> Fortalecer la vigilancia y protección de los derechos de propiedad intelectual asociados con la patente para evitar infracciones y proteger la exclusividad de la tecnología. Esto también podría incluir la exploración de nuevas patentes derivadas para proteger mejoras y nuevas aplicaciones de la tecnología.</li>
    <li style="margin-bottom: 10px;"><strong>Monetización a través de Licencias y Ventas:</strong> Explorar opciones de licenciamiento a terceros para generar ingresos adicionales, al mismo tiempo que se consideran las ventas directas en mercados estratégicos. El objetivo sería maximizar el retorno de la inversión en la investigación y desarrollo de la vacuna.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    Este plan futuro busca no solo asegurar el éxito comercial de la vacuna, sino también expandir su impacto en la salud pública global y posicionar a los titulares de la patente como líderes en innovación en el campo de las vacunas y terapias basadas en estas tecnologías.
</p>

<!-- Conclusión -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.6.10. Conclusión
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Vaccine Diab2-Peptide Against Diabetes Mellitus 2 Disease with Exogenous Exosomes as Carrier" representa un avance significativo en el tratamiento de la Diabetes Mellitus Tipo 2 (DM2). Las conclusiones más relevantes de esta patente son:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Un Enfoque Innovador:</strong> La combinación de péptidos específicos con exosomas exógenos como portadores marca un enfoque innovador en la lucha contra la DM2. Esta estrategia permite una entrega más eficiente y dirigida de los componentes terapéuticos, mejorando la biodisponibilidad y reduciendo los efectos secundarios.</li>
    <li style="margin-bottom: 10px;"><strong>Eficacia Potencialmente Superior:</strong> La patente ofrece una solución que puede superar las limitaciones de las terapias actuales para la DM2, proporcionando una mejoría significativa en el control de la glucosa y la resistencia a la insulina. La capacidad de esta vacuna para ser personalizada según las características del paciente puede llevar a una mayor eficacia terapéutica y a un tratamiento más preciso y adaptado.</li>
    <li style="margin-bottom: 10px;"><strong>Impacto en la Prevención y Control:</strong> La vacuna tiene el potencial de no solo tratar, sino también prevenir la progresión de la DM2 y sus complicaciones asociadas. Al ofrecer un tratamiento más eficaz y duradero, esta tecnología podría desempeñar un papel fundamental en la reducción de la incidencia de complicaciones crónicas, mejorando la calidad de vida de los pacientes y reduciendo los costos de atención médica a largo plazo.</li>
    <li style="margin-bottom: 10px;"><strong>Posicionamiento en el Mercado:</strong> Como un líder en el desarrollo de soluciones avanzadas para enfermedades crónicas, fortaleciendo su competitividad en un mercado en crecimiento. La tecnología podría generar nuevas oportunidades de negocio y alianzas estratégicas, consolidando la presencia de la empresa en la industria biotecnológica.</li>
    <li style="margin-bottom: 10px;"><strong>Contribución a la Salud Pública:</strong> La vacuna podría tener un impacto significativo en la salud pública, especialmente en regiones con alta prevalencia de DM2. Su aplicación podría contribuir a la lucha global contra la diabetes, ofreciendo una solución accesible y efectiva para millones de personas afectadas por esta enfermedad.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    En general, la patente "Vaccine Diab2-Peptide Against Diabetes Mellitus 2 Disease with Exogenous Exosomes as Carrier" (US Q08232203) concluye como una innovación disruptiva con el potencial de transformar el tratamiento de la Diabetes Mellitus Tipo 2. Su enfoque avanzado, eficacia superior, y beneficios tanto para los pacientes como para la salud pública, la posicionan como una contribución valiosa en el campo de la medicina personalizada y la biotecnología. Esta patente no solo representa un avance tecnológico, sino también una oportunidad para mejorar la calidad de vida de millones de personas en todo el mundo.
</p>

<!-- Patentes Registradas (7) -->
<h2 style="font-size: 24px; color: #c62828; margin-bottom: 20px; text-align: left; border-bottom: 3px solid #c62828; padding-bottom: 5px;">
    11.7. Patentes Registradas (7)
</h2>

<!-- Descripción de la Patente 11.7.1 -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.7.1. Olive Oil Macerated with Aloe Vera and Sativa Cannabis as Drug Carrier. Patent in Course: US Q11070001.
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta patente describe una innovadora formulación que utiliza aceite de oliva macerado con Aloe vera y Cannabis sativa como vehículo para la administración de medicamentos. La combinación única de estos ingredientes naturales ofrece una solución eficaz y biocompatible para mejorar la entrega de fármacos, aumentando su biodisponibilidad y efectividad.
</p>

<!-- Composición y Proceso -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    1. Composición y Proceso
</h4>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Aceite de Oliva:</strong> El aceite de oliva es conocido por sus propiedades antioxidantes y antiinflamatorias. En esta patente, actúa como base lipídica, facilitando la disolución y absorción de los principios activos del fármaco.</li>
    <li style="margin-bottom: 10px;"><strong>Aloe Vera:</strong> El Aloe vera es incorporado por sus propiedades curativas y su capacidad para mejorar la penetración de sustancias a través de las capas de la piel y las membranas mucosas. Su inclusión en la maceración potencia la capacidad del aceite de oliva para llevar los medicamentos a los tejidos diana.</li>
    <li style="margin-bottom: 10px;"><strong>Cannabis Sativa:</strong> La Cannabis sativa, rica en cannabinoides como el CBD, aporta beneficios terapéuticos adicionales, incluyendo efectos antiinflamatorios, analgésicos y ansiolíticos. Su maceración en el aceite de oliva, junto con el Aloe vera, crea una matriz que mejora la estabilidad y la eficacia del fármaco.</li>
</ul>

<!-- Mecanismo de Acción -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    2. Mecanismo de Acción
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La combinación de estos tres ingredientes permite que el vehículo de administración sea más eficiente en la liberación controlada de medicamentos. El proceso de maceración asegura que los principios activos de cada componente se integren completamente, creando un sistema de entrega sinérgico. Este vehículo es especialmente eficaz para fármacos liposolubles, asegurando una liberación prolongada y sostenida en el sitio de acción.
</p>

<!-- Aplicaciones Terapéuticas -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    3. Aplicaciones Terapéuticas
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Este sistema de administración está diseñado para ser versátil, adecuado para una amplia gama de fármacos utilizados en el tratamiento de diversas condiciones, como inflamación crónica, dolor, ansiedad, y enfermedades de la piel. La matriz oleosa facilita la absorción transdérmica, oral o incluso tópica de los medicamentos, dependiendo de la formulación final.
</p>

<!-- Ventajas y Beneficios -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    4. Ventajas y Beneficios
</h4>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Biocompatibilidad:</strong> El uso de ingredientes naturales asegura una alta tolerancia por parte de los pacientes, reduciendo el riesgo de efectos secundarios adversos.</li>
    <li style="margin-bottom: 10px;"><strong>Eficiencia en la Administración:</strong> La capacidad del aceite de oliva macerado de transportar y liberar fármacos de manera eficiente significa que se puede lograr un mayor efecto terapéutico con dosis menores.</li>
    <li style="margin-bottom: 10px;"><strong>Estabilidad Mejorada:</strong> La combinación de Aloe vera y Cannabis sativa no solo aumenta la eficacia del fármaco, sino que también mejora la estabilidad de los ingredientes activos, prolongando la vida útil del producto.</li>
</ul>

<!-- Conclusión -->
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Olive Oil Macerated with Aloe Vera and Sativa Cannabis as Drug Carrier" (US Q11070001) propone un avance significativo en el campo de la farmacología natural. Al utilizar un enfoque innovador para la maceración de estos ingredientes naturales, se crea un sistema de administración de medicamentos altamente efectivo y versátil, con aplicaciones potenciales en una amplia gama de tratamientos terapéuticos. Este sistema tiene el potencial de mejorar considerablemente la eficacia de los fármacos y la calidad de vida de los pacientes.
</p>

<!-- Derechos de Autor y Protección Legal -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.7.3. Derechos de Autor y Protección Legal
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Olive Oil Macerated with Aloe Vera and Sativa Cannabis as Drug Carrier" (US Q11070001), está protegida bajo las leyes de propiedad intelectual, especialmente en el ámbito de las patentes y derechos de autor. A continuación se detallan los aspectos relevantes relacionados con su protección legal:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Protección por Patente:</strong> La patente confiere derechos exclusivos al titular sobre la invención, lo que significa que tiene el derecho de fabricar, usar, vender y licenciar la vacuna durante un periodo determinado, generalmente de 20 años desde la fecha de presentación. Esto evita que otros reproduzcan la invención sin el consentimiento del titular.</li>
    <li style="margin-bottom: 10px;"><strong>Prevención de Infracciones:</strong> La protección de la patente permite al titular tomar acciones legales contra cualquier entidad que intente comercializar o usar la invención sin autorización, lo que protege la inversión en investigación y desarrollo.</li>
    <li style="margin-bottom: 10px;"><strong>Derechos de Autor:</strong> Aunque los derechos de autor no protegen las ideas o conceptos detrás de la invención, pueden aplicarse a documentos, presentaciones, gráficos y otros materiales que describan o expliquen la vacuna. Esto significa que cualquier contenido escrito o visual relacionado con la invención puede estar protegido.</li>
    <li style="margin-bottom: 10px;"><strong>Registro de Derechos de Autor:</strong> Registrar estos materiales puede proporcionar una capa adicional de protección, asegurando que el contenido original no sea utilizado sin permiso.</li>
    <li style="margin-bottom: 10px;"><strong>Protección Legal:</strong> Es crucial que el titular de la patente registre la invención en la oficina de patentes correspondiente y mantenga una vigilancia activa del mercado para detectar posibles infracciones. La vigilancia permite actuar rápidamente contra competidores que podrían intentar explotar la tecnología sin autorización.</li>
    <li style="margin-bottom: 10px;"><strong>Acciones Legales:</strong> En caso de infracción, el titular de la patente tiene el derecho de iniciar acciones legales, lo que puede incluir demandas por daños y perjuicios y medidas cautelares para detener el uso no autorizado de la invención.</li>
    <li style="margin-bottom: 10px;"><strong>Licencias y Transferencia de Tecnología:</strong> El titular de la patente puede optar por licenciar la tecnología a otras empresas o instituciones, permitiendo su uso a cambio de regalías. Esto no solo genera ingresos adicionales, sino que también facilita la comercialización de la vacuna en el mercado.</li>
    <li style="margin-bottom: 10px;"><strong>Colaboraciones Estratégicas:</strong> La patente puede fomentar alianzas con instituciones de investigación y empresas farmacéuticas, facilitando el desarrollo conjunto y la comercialización de la vacuna.</li>
    <li style="margin-bottom: 10px;"><strong>Consideraciones Éticas y Regulatorias:</strong> Dado que la patente se refiere a un tratamiento para una enfermedad neurodegenerativa, es fundamental considerar las regulaciones éticas y de salud pública que rigen el desarrollo y la comercialización de terapias biológicas. Esto incluye la obtención de aprobaciones de las autoridades regulatorias pertinentes para ensayos clínicos y productos farmacéuticos.</li>
</ul>

<!-- Valor Agregado -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.7.4. Valor Agregado
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El Valor Agregado de la Patente "Olive Oil Macerated with Aloe Vera and Sativa Cannabis as Drug Carrier" (US Q11070001), aporta un valor agregado significativo en varias áreas clave, destacando su potencial como una herramienta innovadora y eficaz en la administración de medicamentos. Aquí se detallan los principales elementos que constituyen su valor agregado:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Sinergia de Ingredientes Naturales:</strong> La combinación de aceite de oliva, Aloe vera y Cannabis sativa crea una sinergia que maximiza las propiedades terapéuticas de cada componente. El uso conjunto de estos ingredientes no solo mejora la biodisponibilidad y la estabilidad de los fármacos, sino que también potencia sus efectos terapéuticos, ofreciendo una solución más eficaz que las formulaciones tradicionales.</li>
    <li style="margin-bottom: 10px;"><strong>Mejora de la Biodisponibilidad:</strong> El proceso de maceración en aceite de oliva facilita la integración de los principios activos de Aloe vera y Cannabis sativa, resultando en una mayor absorción de los medicamentos en los tejidos diana. Esta mejora en la biodisponibilidad permite reducir las dosis necesarias para alcanzar el efecto terapéutico deseado, lo que puede disminuir el riesgo de efectos secundarios y mejorar la adherencia del paciente al tratamiento.</li>
    <li style="margin-bottom: 10px;"><strong>Versatilidad en la Administración:</strong> Este vehículo de administración tiene aplicaciones potenciales en múltiples rutas de administración, incluyendo tópica, oral y transdérmica. Esta versatilidad permite que la formulación sea adaptada para tratar una amplia gama de enfermedades y condiciones, ampliando su utilidad en diversas áreas terapéuticas.</li>
    <li style="margin-bottom: 10px;"><strong>Aprovechamiento de las Propiedades del Cannabis:</strong> La inclusión de Cannabis sativa, particularmente el CBD, aporta propiedades antiinflamatorias, analgésicas y ansiolíticas que son altamente valoradas en la medicina moderna. Este enfoque permite aprovechar los beneficios del cannabis en una forma más controlada y efectiva, dentro de un marco legal y clínico adecuado.</li>
    <li style="margin-bottom: 10px;"><strong>Sostenibilidad y Naturalidad:</strong> El uso de ingredientes naturales y sostenibles como el aceite de oliva y el Aloe vera apela a la creciente demanda de productos más ecológicos y seguros en el mercado de la salud. Este enfoque no solo beneficia a los pacientes en términos de salud y bienestar, sino que también alinea la patente con las tendencias globales hacia productos más naturales y éticos.</li>
    <li style="margin-bottom: 10px;"><strong>Innovación y Diferenciación en el Mercado:</strong> La patente se posiciona como una innovación disruptiva en el mercado de la administración de medicamentos, diferenciándose de las soluciones convencionales. Esto ofrece a la empresa una ventaja competitiva significativa, permitiendo el desarrollo de productos que pueden ocupar nichos específicos en el mercado de la salud y el bienestar.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Conclusión:</strong> El valor agregado de la patente "Olive Oil Macerated with Aloe Vera and Sativa Cannabis as Drug Carrier" (US Q11070001) radica en su capacidad para ofrecer una solución terapéutica más eficaz, natural y versátil. Al integrar ingredientes naturales en una formulación innovadora, esta patente no solo mejora la administración de medicamentos, sino que también posiciona a la empresa como un líder en la innovación dentro del campo de la salud natural y la biotecnología.
</p>

<!-- Estrategia de Protección -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.7.5. Estrategia de Protección
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Hemos implementado una estrategia integral de protección que incluye:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;">Registro de la patente en las principales jurisdicciones para garantizar la protección en mercados clave.</li>
    <li style="margin-bottom: 10px;">Acuerdos de confidencialidad con empleados y socios para salvaguardar la información sobre el proceso de producción y la composición del endulzante.</li>
    <li style="margin-bottom: 10px;">Monitoreo del mercado para detectar posibles infracciones de la patente.</li>
</ul>

<!-- Impacto en la Competitividad -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.7.6. Impacto en la Competitividad
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Olive Oil Macerated with Aloe Vera and Sativa Cannabis as Drug Carrier" (US Q11070001) tiene un impacto significativo en la competitividad de la empresa en varios aspectos clave, fortaleciendo su posición en el mercado de la salud y el bienestar. A continuación, se detallan los elementos que contribuyen a su impacto competitivo:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Innovación Tecnológica:</strong> La combinación de aceite de oliva, Aloe vera y Cannabis sativa en una formulación única como vehículo para la administración de fármacos representa una innovación disruptiva en el campo de la medicina natural y la biotecnología. Esta patente permite a la empresa diferenciarse claramente de sus competidores, ofreciendo un producto que no solo es eficaz, sino también innovador, atrayendo a consumidores que buscan soluciones terapéuticas avanzadas y naturales.</li>
    <li style="margin-bottom: 10px;"><strong>Ventaja en el Mercado de Productos Naturales:</strong> Con el creciente interés en productos naturales y sostenibles, esta patente posiciona a la empresa en un segmento del mercado que está en expansión. El uso de ingredientes naturales como el aceite de oliva y Aloe vera, combinados con los beneficios terapéuticos del Cannabis sativa, responde a la demanda de consumidores conscientes de la salud y el medio ambiente, proporcionando una ventaja competitiva frente a productos sintéticos y menos ecológicos.</li>
    <li style="margin-bottom: 10px;"><strong>Versatilidad en Aplicaciones Terapéuticas:</strong> La capacidad de esta patente para adaptarse a múltiples rutas de administración (tópica, oral y transdérmica) y su potencial para tratar una amplia gama de enfermedades y condiciones permite a la empresa explorar diferentes mercados y nichos. Esta versatilidad facilita la expansión de la cartera de productos y la diversificación de la oferta, lo que a su vez puede incrementar la participación en el mercado y fortalecer la competitividad.</li>
    <li style="margin-bottom: 10px;"><strong>Potencial para Alianzas Estratégicas:</strong> El enfoque innovador y natural de esta patente la hace atractiva para posibles alianzas con otras empresas del sector salud, biotecnología y bienestar. Estas colaboraciones podrían incluir acuerdos de licencia, asociaciones de distribución y co-desarrollo de productos, ampliando la presencia de la empresa en nuevos mercados y reforzando su posición competitiva.</li>
    <li style="margin-bottom: 10px;"><strong>Protección de Propiedad Intelectual:</strong> La patente proporciona una protección sólida de la propiedad intelectual, permitiendo a la empresa salvaguardar su innovación y evitar que los competidores copien o repliquen la tecnología. Esta ventaja competitiva, derivada de la exclusividad en el uso de esta formulación, permite a la empresa mantener un liderazgo en el mercado y proteger su inversión en I+D.</li>
    <li style="margin-bottom: 10px;"><strong>Respuesta a las Tendencias del Mercado:</strong> La formulación de esta patente está alineada con las tendencias actuales hacia tratamientos más personalizados y naturales. Esto no solo atrae a los consumidores finales, sino también a profesionales de la salud que buscan alternativas más seguras y eficaces para sus pacientes, incrementando la confianza en la marca y su competitividad en el mercado.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Conclusión:</strong> El impacto en la competitividad de la patente "Olive Oil Macerated with Aloe Vera and Sativa Cannabis as Drug Carrier" (US Q11070001) es significativo. A través de la innovación tecnológica, la versatilidad en aplicaciones, la ventaja en el mercado de productos naturales, y la sólida protección de propiedad intelectual, esta patente fortalece la posición de la empresa en el mercado, ofreciendo una ventaja competitiva sostenible y abriendo nuevas oportunidades de crecimiento y expansión en la industria de la salud y el bienestar.
</p>

<!-- Potencial de Monetización -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.7.7. Potencial de Monetización
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El potencial de monetización de la patente está en:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Licencias y Regalías:</strong> Los titulares de la patente pueden licenciar la tecnología a otras compañías farmacéuticas o biotecnológicas, obteniendo ingresos a través de regalías. Dado el carácter innovador de la vacuna, la demanda de licencias puede ser alta, especialmente entre empresas que buscan integrar soluciones avanzadas y diferenciadas en sus portafolios de productos.</li>
    <li style="margin-bottom: 10px;"><strong>Desarrollo y Comercialización Directa:</strong> Si la entidad titular de la patente opta por desarrollar y comercializar directamente la vacuna, podría obtener ingresos sustanciales de las ventas, especialmente si logra acuerdos con gobiernos o instituciones sanitarias que busquen asegurar un suministro efectivo y seguro de vacunas. La pandemia ha demostrado la disposición de los gobiernos para invertir considerablemente en vacunas efectivas, lo que podría traducirse en contratos lucrativos.</li>
    <li style="margin-bottom: 10px;"><strong>Expansión de Aplicaciones:</strong> La tecnología subyacente a esta patente podría adaptarse para otras enfermedades virales, lo que expandiría su mercado potencial y, por lo tanto, las fuentes de ingresos. Este enfoque modular permite capitalizar en nuevos mercados sin la necesidad de desarrollar tecnologías completamente nuevas desde cero.</li>
    <li style="margin-bottom: 10px;"><strong>Valoración de la Empresa:</strong> La posesión de una patente con un potencial de mercado tan alto puede incrementar significativamente la valoración de la empresa titular, lo que es beneficioso en el contexto de rondas de financiamiento, fusiones, adquisiciones, o incluso en una oferta pública inicial (IPO).</li>
    <li style="margin-bottom: 10px;"><strong>Socios y Alianzas Estratégicas:</strong> La exclusividad de esta tecnología puede facilitar alianzas estratégicas con grandes farmacéuticas, instituciones de investigación y organizaciones internacionales. Estos socios pueden aportar capital, conocimientos y recursos adicionales, lo que facilita el desarrollo y la distribución a gran escala, y al mismo tiempo, genera ingresos por acuerdos de colaboración.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    En conjunto, la patente tiene un alto potencial de monetización a través de una combinación de licencias, desarrollo directo, expansiones de aplicación, y alianzas estratégicas.
</p>

<!-- Cumplimiento Normativo -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.7.8. Cumplimiento Normativo
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Cumplir con el marco normativo implica asegurar que el desarrollo, producción, y comercialización de la vacuna cumpla con todas las regulaciones y leyes aplicables en las jurisdicciones relevantes. Esto incluye:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Aprobaciones Regulatorias:</strong> La vacuna debe obtener la aprobación de organismos regulatorios como la FDA en los Estados Unidos, la EMA en Europa, y otras agencias equivalentes en diferentes países. Esto implica cumplir con estrictos estándares de seguridad, eficacia y calidad, que se validan a través de ensayos clínicos en varias fases.</li>
    <li style="margin-bottom: 10px;"><strong>Cumplimiento de Buenas Prácticas de Manufactura (GMP):</strong> Durante la producción, es fundamental adherirse a las Buenas Prácticas de Manufactura (GMP) para garantizar que la vacuna se fabrique bajo condiciones controladas y consistentes, minimizando riesgos de contaminación, errores de producción y garantizando la calidad del producto final.</li>
    <li style="margin-bottom: 10px;"><strong>Protección de Datos y Privacidad:</strong> En el manejo de datos clínicos y de pacientes, es crucial cumplir con leyes de protección de datos como el GDPR en Europa y la HIPAA en los Estados Unidos, asegurando que la información personal de los participantes en los ensayos clínicos se maneje de manera segura y ética.</li>
    <li style="margin-bottom: 10px;"><strong>Propiedad Intelectual y Cumplimiento de Patentes:</strong> Es necesario asegurar que la patente y sus derechos asociados sean respetados y que no haya infracción de otras patentes o derechos de propiedad intelectual existentes. Esto también incluye la vigilancia de posibles infracciones por parte de terceros para proteger la exclusividad del producto.</li>
    <li style="margin-bottom: 10px;"><strong>Cumplimiento Ambiental y de Seguridad:</strong> En la producción y distribución de la vacuna, es necesario cumplir con regulaciones ambientales y de seguridad, que aseguren que no se produzcan daños al medio ambiente y que se garantice la seguridad de los trabajadores y los consumidores.</li>
    <li style="margin-bottom: 10px;"><strong>Transparencia y Reportes:</strong> Mantener transparencia en todas las fases del desarrollo y comercialización, proporcionando informes precisos a las autoridades regulatorias, inversionistas y al público, según lo requieran las leyes aplicables.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    Cumplir con estos estándares y regulaciones no solo es crucial para evitar sanciones legales y financieras, sino también para asegurar la confianza del público y el éxito comercial de la vacuna.
</p>

<!-- Plan a Futuro -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.7.9. Plan a Futuro
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    El plan futuro para la patente podría enfocarse en varias áreas estratégicas para maximizar su impacto y monetización:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Ampliación de Ensayos Clínicos:</strong> Continuar con la realización de ensayos clínicos avanzados para demostrar la eficacia y seguridad de la vacuna en una variedad de poblaciones y entornos. Esto incluiría fases posteriores de ensayos clínicos y estudios de largo plazo para evaluar la durabilidad de la inmunidad conferida por la vacuna.</li>
    <li style="margin-bottom: 10px;"><strong>Desarrollo de Nuevas Aplicaciones:</strong> Explorar la adaptación de esta tecnología para otras enfermedades virales o incluso bacterianas. La capacidad de los exosomas para transportar diferentes tipos de material biológico podría permitir el desarrollo de nuevas vacunas o terapias genéticas, expandiendo así el uso de la patente a diferentes áreas de la medicina.</li>
    <li style="margin-bottom: 10px;"><strong>Colaboraciones y Alianzas Estratégicas:</strong> Establecer asociaciones con instituciones académicas, centros de investigación, y empresas farmacéuticas para acelerar el desarrollo y la comercialización de la vacuna. Estas alianzas podrían proporcionar acceso a recursos adicionales, como infraestructura de investigación y canales de distribución global.</li>
    <li style="margin-bottom: 10px;"><strong>Expansión a Mercados Internacionales:</strong> Trabajar en la obtención de aprobaciones regulatorias en mercados internacionales clave, como Europa, Asia, y América Latina, para ampliar la disponibilidad de la vacuna y su impacto global. Este proceso también implicaría adaptar la producción y distribución a las normativas y necesidades específicas de cada región.</li>
    <li style="margin-bottom: 10px;"><strong>Optimización de la Producción y Distribución:</strong> Invertir en tecnologías de producción avanzadas y en la expansión de las capacidades de manufactura para satisfacer la demanda global. Además, establecer cadenas de suministro robustas y eficientes que permitan la distribución rápida y efectiva de la vacuna a nivel mundial.</li>
    <li style="margin-bottom: 10px;"><strong>Protección y Gestión de la Propiedad Intelectual:</strong> Fortalecer la vigilancia y protección de los derechos de propiedad intelectual asociados con la patente para evitar infracciones y proteger la exclusividad de la tecnología. Esto también podría incluir la exploración de nuevas patentes derivadas para proteger mejoras y nuevas aplicaciones de la tecnología.</li>
    <li style="margin-bottom: 10px;"><strong>Monetización a través de Licencias y Ventas:</strong> Explorar opciones de licenciamiento a terceros para generar ingresos adicionales, al mismo tiempo que se consideran las ventas directas en mercados estratégicos. El objetivo sería maximizar el retorno de la inversión en la investigación y desarrollo de la vacuna.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    Este plan futuro busca no solo asegurar el éxito comercial de la vacuna, sino también expandir su impacto en la salud pública global y posicionar a los titulares de la patente como líderes en innovación en el campo de las vacunas y terapias basadas en esas tecnologías.
</p>
<!-- Conclusión -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.7.10. Conclusión
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "Olive Oil Macerated with Aloe Vera and Sativa Cannabis as Drug Carrier" (US Q11070001) representa una innovadora contribución al campo de la administración de medicamentos, aprovechando los beneficios sinérgicos de ingredientes naturales para mejorar la eficacia terapéutica. A continuación se presentan las conclusiones clave:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Innovación en la Administración de Medicamentos:</strong> Esta patente ofrece un enfoque novedoso en la administración de fármacos, utilizando una combinación de aceite de oliva, Aloe vera y Cannabis sativa. Esta formulación no solo mejora la biodisponibilidad y la estabilidad de los principios activos, sino que también potencia sus efectos terapéuticos, permitiendo una administración más eficaz de medicamentos para diversas enfermedades.</li>
    <li style="margin-bottom: 10px;"><strong>Alineación con las Tendencias del Mercado:</strong> La combinación de ingredientes naturales y sostenibles responde a la creciente demanda global de productos más ecológicos y seguros. Esta patente posiciona a la empresa como un líder en el desarrollo de soluciones naturales para la salud, alineándose con las tendencias actuales hacia tratamientos más personalizados y menos invasivos.</li>
    <li style="margin-bottom: 10px;"><strong>Protección de Propiedad Intelectual:</strong> Esta patente proporciona una protección efectiva de la propiedad intelectual, asegurando que la tecnología innovadora desarrollada esté resguardada frente a la competencia. Esto permite a la empresa mantener una ventaja competitiva y explorar oportunidades de mercado sin la amenaza de imitaciones o competidores directos.</li>
    <li style="margin-bottom: 10px;"><strong>Potencial de Mercado y Competitividad:</strong> Gracias a su versatilidad en aplicaciones y su alineación con las demandas del mercado, esta patente tiene el potencial de abrir nuevos nichos y mercados, fortaleciendo la competitividad de la empresa. La posibilidad de su uso en diversas rutas de administración (tópica, oral, transdérmica) y en diferentes áreas terapéuticas amplía su alcance y relevancia en la industria.</li>
    <li style="margin-bottom: 10px;"><strong>Contribución a la Salud y Bienestar:</strong> El enfoque natural y eficaz de esta patente no solo ofrece beneficios a nivel comercial, sino que también tiene un impacto positivo en la salud y el bienestar de los consumidores. Al proporcionar una opción terapéutica que minimiza los efectos secundarios y maximiza la eficacia, esta patente contribuye al avance de la medicina y al mejoramiento de la calidad de vida.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>De modo General:</strong> La patente "Olive Oil Macerated with Aloe Vera and Sativa Cannabis as Drug Carrier" (US Q11070001) se destaca como una innovación significativa en el campo de la administración de medicamentos. Su enfoque en ingredientes naturales, su protección de propiedad intelectual y su alineación con las tendencias del mercado, aseguran un impacto positivo tanto en la competitividad de la empresa como en la salud de los consumidores. Esta patente no solo representa una ventaja estratégica, sino que también tiene el potencial de redefinir los estándares de eficacia y seguridad en la industria farmacéutica y de bienestar.
</p>

<!-- Conclusión -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.8.10. Conclusión
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "System and Methods for Extracting Aromatic Oils from Plant Biomass" (US 63,320,184) representa un avance significativo en la industria de extracción de aceites esenciales, ofreciendo un sistema y métodos que optimizan la recuperación de aceites aromáticos a partir de biomasa vegetal. A continuación, se presentan las conclusiones clave que destacan la relevancia y el impacto de esta patente:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Innovación en Procesos de Extracción:</strong> Introduce métodos innovadores que mejoran la eficiencia de extracción, garantizando un mayor rendimiento y calidad de los aceites esenciales. Esta innovación posiciona a la empresa como un líder en tecnología de extracción, diferenciándola de los métodos tradicionales.</li>
    <li style="margin-bottom: 10px;"><strong>Sostenibilidad y Responsabilidad Ambiental:</strong> El enfoque en la sostenibilidad, mediante la reducción del consumo de energía y la minimización de residuos, asegura que el proceso de extracción no solo sea rentable, sino también respetuoso con el medio ambiente. Este compromiso con prácticas sostenibles responde a la creciente demanda de productos ecológicos y fortalece la reputación de la empresa en el mercado.</li>
    <li style="margin-bottom: 10px;"><strong>Calidad del Producto Final:</strong> La alta pureza y calidad de los aceites extraídos a través de este sistema garantizan su idoneidad para aplicaciones en cosmética, perfumería y productos farmacéuticos. Esto no solo satisface las expectativas de los clientes actuales, sino que también abre nuevas oportunidades en mercados que valoran productos premium.</li>
    <li style="margin-bottom: 10px;"><strong>Versatilidad y Diversificación:</strong> La capacidad del sistema para trabajar con una amplia variedad de biomasa vegetal permite a la empresa diversificar su línea de productos y adaptarse a diferentes demandas del mercado. Esta versatilidad es crucial para el crecimiento a largo plazo en un entorno comercial en constante cambio.</li>
    <li style="margin-bottom: 10px;"><strong>Innovación Continua:</strong> La patente establece un marco para la investigación y el desarrollo continuos en la extracción de aceites esenciales, incentivando a la empresa a explorar nuevas tecnologías y mejorar sus procesos. Este enfoque en la innovación refuerza su competitividad y su capacidad para anticipar y responder a las tendencias del mercado.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>En resumen:</strong> La patente "System and Methods for Extracting Aromatic Oils from Plant Biomass" (US 63,320,184) no solo mejora la eficiencia y la calidad de la extracción de aceites aromáticos, sino que también contribuye a la sostenibilidad ambiental y ofrece oportunidades para la diversificación y la innovación. A medida que el mercado de aceites esenciales continúa creciendo, esta patente posiciona a la empresa para aprovechar nuevas oportunidades y mantener una ventaja competitiva en la industria. La combinación de tecnología avanzada, compromiso con la sostenibilidad y enfoque en la calidad garantiza que esta patente tenga un impacto duradero y positivo en el sector.
</p>

<!-- Patentes Registradas -->
<h2 style="font-size: 24px; color: #c62828; margin-bottom: 20px; text-align: left; border-bottom: 3px solid #c62828; padding-bottom: 5px;">
    11.9. Patentes Registradas (9)
</h2>

<!-- Descripción de la Invención -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.9.1. System and Methods for Extracting THC from Cannabis Plants
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    This invention relates to an advanced system and methodology designed to optimize the extraction of tetrahydrocannabinol (THC) from cannabis plants. The system employs innovative techniques to isolate and concentrate THC efficiently, ensuring maximum purity and potency of the final product. The process involves a series of controlled steps, including selective solvent extraction, filtration, and refinement stages, all designed to minimize degradation of THC while maintaining the integrity of other cannabinoids and terpenes. This technology significantly enhances the yield and quality of THC extracts, making it a valuable tool for both medical and recreational cannabis industries.
</p>

<!-- Derechos de Autor y Protección Legal -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.9.3. Derechos de Autor y Protección Legal
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    The "System and Methods for Extracting THC from Cannabis Plants" (Patent Number: US 63,357,796) is protected under intellectual property laws, particularly in the realms of patents and copyrights. Below are the key aspects of its legal protection:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Protección por Patente:</strong> The patent grants the holder exclusive rights to the invention, including the rights to manufacture, use, sell, and license the technology for a specified period, typically 20 years from the filing date. This prevents others from replicating the invention without the holder's consent.</li>
    <li style="margin-bottom: 10px;"><strong>Prevención de Infracciones:</strong> Patent protection allows the holder to take legal action against any entity attempting to commercialize or use the invention without authorization, safeguarding the investment in research and development.</li>
    <li style="margin-bottom: 10px;"><strong>Derechos de Autor:</strong> Copyrights can apply to related materials, such as documents, presentations, and graphics that describe or explain the technology. Registering these materials provides an additional layer of protection, ensuring that the original content is not used without permission.</li>
    <li style="margin-bottom: 10px;"><strong>Registro y Vigilancia:</strong> It is crucial for the patent holder to register the invention with the relevant patent offices and maintain active market surveillance to detect potential infringements. Vigilance allows for quick action against competitors who might try to exploit the technology without authorization.</li>
    <li style="margin-bottom: 10px;"><strong>Acciones Legales:</strong> In case of infringement, the patent holder has the right to initiate legal action, which may include lawsuits for damages and injunctions to stop unauthorized use of the invention.</li>
    <li style="margin-bottom: 10px;"><strong>Licencias y Transferencia de Tecnología:</strong> The patent holder may choose to license the technology to other companies or institutions, allowing its use in exchange for royalties. This not only generates additional income but also facilitates the market commercialization of the technology.</li>
    <li style="margin-bottom: 10px;"><strong>Consideraciones Éticas y Regulatorias:</strong> Given that the patent involves a treatment for a neurodegenerative disease, it is crucial to consider the ethical and public health regulations governing the development and commercialization of biological therapies. This includes obtaining approvals from relevant regulatory authorities for clinical trials and pharmaceutical products.</li>
</ul>

<!-- Valor Agregado -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.9.4. Valor Agregado
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    The patented "System and Methods for Extracting THC from Cannabis Plants" (Patent Number: US 63,357,796) offers substantial added value through its innovative approach to THC extraction. This system not only maximizes the yield and purity of THC but also preserves other valuable cannabinoids and terpenes, enhancing the overall efficacy of the final product. By utilizing state-of-the-art technology and precise control mechanisms, this method ensures a higher quality extract with consistent potency, setting a new standard in the cannabis industry. The process is scalable and adaptable, making it suitable for both large-scale industrial applications and smaller, specialized production needs. This adds a competitive edge by enabling producers to deliver superior products that meet the growing demands of both medicinal and recreational markets.
</p>

<!-- Estrategia de Protección -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.9.5. Estrategia de Protección
</h3>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;">Registro de la patente en las principales jurisdicciones para garantizar la protección en mercados clave.</li>
    <li style="margin-bottom: 10px;">Acuerdos de confidencialidad con empleados y socios para salvaguardar la información sobre el proceso de producción y la composición del endulzante.</li>
    <li style="margin-bottom: 10px;">Monitoreo del mercado para detectar posibles infracciones de la patente.</li>
</ul>

<!-- Impacto en la Competitividad -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.9.6. Impacto en la Competitividad
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    The "System and Methods for Extracting THC from Cannabis Plants" (Patent Number: US 63,357,796) has a significant impact on the competitiveness of the cannabis market. By offering an advanced methodology that maximizes THC purity and yield, this technology enables producers to obtain higher quality extracts, resulting in superior final products. The ability to maintain the integrity of other cannabinoids and terpenes during the extraction process not only enhances the product's efficacy but also creates a distinctive advantage over competitors.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Furthermore, this system is highly scalable and adaptable, allowing it to be implemented in both large industrial operations and more specialized productions. This flexibility ensures that producers can quickly respond to changing market demands and offer consistent, high-quality products. As a result, those who adopt this technology will be better positioned to lead the market, attract loyal customers, and differentiate themselves in an increasingly competitive sector.
</p>

<!-- Potencial de Monetización -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.9.7. Potencial de Monetización
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    The monetization potential of the patent includes:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Licencias y Regalías:</strong> Patent holders can license the technology to other pharmaceutical or biotech companies, generating revenue through royalties. Given the innovative nature of the technology, demand for licenses could be high, especially among companies looking to integrate advanced and differentiated solutions into their product portfolios.</li>
    <li style="margin-bottom: 10px;"><strong>Desarrollo y Comercialización Directa:</strong> If the patent-holding entity chooses to develop and directly market the technology, it could generate substantial sales revenue, particularly if it secures agreements with governments or health institutions seeking to ensure an effective and safe supply of cannabis products. The pandemic has shown governments' willingness to invest significantly in effective solutions, which could translate into lucrative contracts.</li>
    <li style="margin-bottom: 10px;"><strong>Expansión de Aplicaciones:</strong> The technology underlying this patent could be adapted for other medical or recreational cannabis applications, expanding its potential market and revenue sources. This modular approach allows for capitalizing on new markets without the need to develop entirely new technologies from scratch.</li>
    <li style="margin-bottom: 10px;"><strong>Valoración de la Empresa:</strong> Holding a patent with such a high market potential can significantly increase the valuation of the patent-owning company, which is beneficial in the context of fundraising, mergers, acquisitions, or even an initial public offering (IPO).</li>
    <li style="margin-bottom: 10px;"><strong>Socios y Alianzas Estratégicas:</strong> The exclusivity of this technology can facilitate strategic partnerships with major pharmaceutical companies, research institutions, and international organizations. These partners can provide additional capital, knowledge, and resources, facilitating large-scale development and distribution while generating revenue through collaboration agreements.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    In summary, the patent offers significant monetization potential through a combination of licensing, direct development, application expansion, and strategic partnerships.
</p>

<!-- Cumplimiento Normativo -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.9.8. Cumplimiento Normativo
</h3>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Aprobaciones Regulatorias:</strong> The product must obtain approval from regulatory bodies such as the FDA in the United States, the EMA in Europe, and equivalent agencies in other countries. This involves meeting strict safety, efficacy, and quality standards, which are validated through multi-phase clinical trials.</li>
    <li style="margin-bottom: 10px;"><strong>Cumplimiento de Buenas Prácticas de Manufactura (GMP):</strong> During production, it is essential to adhere to Good Manufacturing Practices (GMP) to ensure that the product is manufactured under controlled and consistent conditions, minimizing contamination risks, production errors, and guaranteeing the final product's quality.</li>
    <li style="margin-bottom: 10px;"><strong>Protección de Datos y Privacidad:</strong> In handling clinical and patient data, it is crucial to comply with data protection laws such as the GDPR in Europe and HIPAA in the United States, ensuring that the personal information of clinical trial participants is handled securely and ethically.</li>
    <li style="margin-bottom: 10px;"><strong>Propiedad Intelectual y Cumplimiento de Patentes:</strong> It is necessary to ensure that the patent and its associated rights are respected and that there is no infringement of other existing patents or intellectual property rights. This also includes monitoring potential infringements by third parties to protect the product's exclusivity.</li>
    <li style="margin-bottom: 10px;"><strong>Cumplimiento Ambiental y de Seguridad:</strong> In the production and distribution of the product, it is necessary to comply with environmental and safety regulations, ensuring that no harm is done to the environment and that the safety of workers and consumers is guaranteed.</li>
    <li style="margin-bottom: 10px;"><strong>Transparencia y Reportes:</strong> Maintain transparency in all phases of development and commercialization, providing accurate reports to regulatory authorities, investors, and the public, as required by applicable laws.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    Complying with these standards and regulations is not only crucial to avoid legal and financial penalties but also to ensure public trust and the product's commercial success.
</p>

<!-- Plan a Futuro -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.9.9. Plan a Futuro
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    The future plan for the patent could focus on several strategic areas to maximize its impact and monetization:
</p>
<ul style="margin-bottom: 20px; text-align: justify; padding-left: 20px;">
    <li style="margin-bottom: 10px;"><strong>Ampliación de Ensayos Clínicos:</strong> Continue conducting advanced clinical trials to demonstrate the product's efficacy and safety in a variety of populations and environments. This would include later phases of clinical trials and long-term studies to assess the durability of the benefits provided by the technology.</li>
    <li style="margin-bottom: 10px;"><strong>Desarrollo de Nuevas Aplicaciones:</strong> Explore the adaptation of this technology for other viral or even bacterial diseases. The ability of the system to process different types of biological material could allow the development of new applications, expanding the patent's use in different areas of medicine.</li>
    <li style="margin-bottom: 10px;"><strong>Colaboraciones y Alianzas Estratégicas:</strong> Establish partnerships with academic institutions, research centers, and pharmaceutical companies to accelerate the development and commercialization of the product. These alliances could provide access to additional resources, such as research infrastructure and global distribution channels.</li>
    <li style="margin-bottom: 10px;"><strong>Expansión a Mercados Internacionales:</strong> Work on obtaining regulatory approvals in key international markets, such as Europe, Asia, and Latin America, to expand the availability of the product and its global impact. This process would also involve adapting production and distribution to the specific regulations and needs of each region.</li>
    <li style="margin-bottom: 10px;"><strong>Optimización de la Producción y Distribución:</strong> Invest in advanced production technologies and expand manufacturing capacities to meet global demand. Additionally, establish robust and efficient supply chains to enable the rapid and effective distribution of the product worldwide.</li>
    <li style="margin-bottom: 10px;"><strong>Protección y Gestión de la Propiedad Intelectual:</strong> Strengthen the monitoring and protection of intellectual property rights associated with the patent to avoid infringements and protect the exclusivity of the technology. This could also include exploring new derivative patents to protect improvements and new applications of the technology.</li>
    <li style="margin-bottom: 10px;"><strong>Monetización a través de Licencias y Ventas:</strong> Explore licensing options to third parties to generate additional income while considering direct sales in strategic markets. The goal would be to maximize the return on investment in the research and development of the technology.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    This future plan aims not only to ensure the commercial success of the technology but also to expand its impact on global public health and position the patent holders as leaders in innovation in the field of cannabis-based therapies.
</p>







<!-- Conclusión -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    11.9.10. Conclusión
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    La patente "System and Methods for Extracting THC from Cannabis Plants" (Patent Number: US 63,357,796) representa un avance importante en la industria del cannabis, proporcionando una solución eficaz y eficiente para la extracción de THC. Esta tecnología no solo maximiza la pureza y el rendimiento del THC extraído, sino que también preserva otros compuestos valiosos como los cannabinoides y terpenos, lo que resulta en un extracto de alta calidad y mayor eficacia. El sistema es innovador en su enfoque, combinando precisión y control para garantizar la consistencia y estabilidad del producto final. Su capacidad de adaptación y escalabilidad permite su uso en una amplia gama de aplicaciones, desde producciones a gran escala hasta operaciones más pequeñas y especializadas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, esta patente posiciona a sus titulares a la vanguardia del mercado, proporcionando una ventaja competitiva clara al ofrecer un proceso de extracción superior que satisface las crecientes demandas de calidad y pureza en la industria del cannabis.
</p>

<!-- Marcas Registradas -->
<h2 style="font-size: 24px; color: #c62828; margin-bottom: 20px; text-align: left; border-bottom: 3px solid #c62828; padding-bottom: 5px;">
    12. Marcas Registradas
</h2>

<!-- Presentación de la Marca "PPG PLUS" -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.1. Presentación de la Marca "PPG PLUS"
</h3>

<!-- Concepto de Marca -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.1.1. Concepto de Marca
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    "PPG PLUS" representa la evolución de una marca que, durante más de 35 años, fue sinónimo de virilidad y control eficaz de los lípidos en decenas de países. Originalmente conocida como "PPG," esta marca estableció un legado basado en la eficacia comprobada de su ingrediente activo, ayudando a millones de personas a mantener su salud cardiovascular, cerebrovascular y salud sexual. 
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Con el tiempo, hemos comprendido que la combinación del ingrediente activo que tiene el PPG combinado con otros productos naturales, vitaminas, minerales y nutrientes esenciales tiene el potencial de ir mucho más allá de lo que habíamos imaginado. "PPG PLUS" es más que una simple evolución de la marca original; es una revolución en la forma en que entendemos la salud y el bienestar.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Este nuevo concepto no solo reafirma nuestro compromiso con la prevención y el tratamiento de enfermedades, sino que también destaca cómo los productos naturales, cuando se utilizan de manera inteligente y en combinación con ingredientes de calidad, pueden superar la eficacia de los medicamentos tradicionales. "PPG PLUS" es un símbolo de cómo la ciencia y la naturaleza pueden unirse para ofrecer soluciones de salud que no solo tratan, sino que también previenen y mejoran la calidad de vida.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    La marca "PPG PLUS" celebra la energía y la salud que provienen de los azúcares de caña no centrifugada, considerados por la OMS como los más saludables, y de los azúcares de caña centrifugada fortificados con ingredientes naturales que los legitiman como opciones saludables. Estos azúcares no solo ofrecen un sabor agradable, sino que también proporcionan beneficios adicionales para la salud, convirtiéndose en aliados perfectos para un estilo de vida activo y dinámico.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Utilizando la imagen y el legado de "PPG," "PPG PLUS" captura la atención y el corazón de los consumidores, promoviendo un enfoque hacia la salud que es tan icónico como la propia marca. Es un homenaje a la resiliencia, la vitalidad y la innovación, simbolizando que los productos naturales, respaldados por décadas de investigación y experiencia, pueden ser la clave para una vida más larga y saludable.
</p>

<!-- Valor de la Marca -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.1.2. Valor de la Marca
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    "PPG PLUS" es mucho más que una simple evolución de su predecesora; representa la culminación de más de 35 años de innovación, reconocimiento y confianza en el mercado global. Con "PPG PLUS," la marca no solo amplía su alcance, sino que también incorpora avances significativos en la formulación de productos, combinando su ingrediente activo con otros productos naturales, vitaminas y minerales que pueden superar incluso a los medicamentos tradicionales en la prevención, control y tratamiento de enfermedades.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    El valor de "PPG PLUS" radica en su capacidad para adaptarse y liderar en un mercado en constante cambio, aprovechando su legado para capturar la atención de nuevas generaciones de consumidores. Con una sólida base de clientes leales y una red de distribución global, la marca se encuentra en una posición única para capitalizar la creciente demanda de productos naturales y de bienestar.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Además, su capacidad para combinar tradición con innovación, respaldada por la ciencia y la tecnología, refuerza su prestigio y garantiza su relevancia en el futuro. "PPG PLUS" no solo es una marca reconocida; es un activo estratégico que continúa ofreciendo valor tangible y potencial de crecimiento a largo plazo para inversores y stakeholders por igual.
</p>

<!-- Diferenciación en el Mercado -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.1.3. Diferenciación en el Mercado
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La marca "PPG PLUS" influye significativamente en la diferenciación del mercado al posicionarse como un referente en la salud y el bienestar, destacando sus características únicas que la separan de otras marcas competidoras. "PPG PLUS" hereda una rica historia de más de 35 años como símbolo de virilidad y control de lípidos. Esta evolución hacia "PLUS" no solo moderniza la marca, sino que también apela a la confianza y lealtad que los consumidores ya tienen hacia su predecesora, lo que permite una transición fluida hacia nuevas ofertas de productos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    La propuesta de "PPG PLUS" se centra en la utilización de ingredientes naturales combinados con productos fortificados, vitaminas y minerales, lo que la diferencia de muchos competidores que dependen de soluciones sintéticas o farmacéuticas. Este enfoque resuena especialmente con los consumidores que buscan alternativas más saludables y efectivas para el cuidado de su salud.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Al incorporar conceptos de nutrición inteligente y productos terapéuticos, "PPG PLUS" se posiciona en el segmento de mercado donde la salud y la funcionalidad son prioridades. Esto no solo atrae a consumidores interesados en mejorar su bienestar, sino que también fomenta la percepción de la marca como líder en innovación dentro de su categoría.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    La marca también puede destacar su compromiso con prácticas sostenibles y responsables en la producción, lo que atrae a un público más consciente del medio ambiente. Esta responsabilidad social puede mejorar la imagen de la marca y aumentar su atractivo en un mercado donde los consumidores valoran cada vez más la sostenibilidad.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Utilizando la figura icónica de "PPG PLUS" y sus asociaciones culturales, la marca establece una conexión emocional con los consumidores, especialmente en mercados donde estos valores son significativos. Esta conexión no solo mejora la lealtad del cliente, sino que también crea una comunidad alrededor de la marca.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, "PPG PLUS" se destaca en el mercado al combinar su legado con innovación, un enfoque en la salud natural, un compromiso con la sostenibilidad y una conexión emocional con los consumidores, lo que le permite diferenciarse efectivamente de sus competidores.
</p>

<!-- Estrategia de Crecimiento -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.1.4. Estrategia de Crecimiento
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    "PPG PLUS" puede contribuir significativamente a la estrategia de crecimiento de la compañía a través de varios enfoques clave como son la expansión de la Línea de Productos, al posicionar "PPG PLUS" como una marca innovadora que combina ingredientes naturales con fórmulas avanzadas, la compañía puede expandir su línea de productos para abarcar una mayor variedad de suplementos, alimentos inteligentes y productos terapéuticos.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta diversificación no solo atrae a nuevos segmentos de mercado, sino que también aumenta las oportunidades de ingresos al ofrecer productos que responden a las tendencias actuales de salud y bienestar.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Aumento de la Lealtad del Cliente, aprovechando la sólida reputación y el legado de la marca original "PPG," "PPG PLUS" puede capitalizar la lealtad existente de los clientes al ofrecerles productos mejorados que superan sus expectativas. Esto fortalece la relación con los consumidores y fomenta la repetición de compras, lo que es crucial para el crecimiento sostenido de la compañía.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Penetración en Nuevos Mercados, mediante su enfoque en la nutrición inteligente y productos naturales, "PPG PLUS" tiene el potencial de penetrar en mercados emergentes donde existe una creciente demanda por productos saludables y sostenibles. La marca puede ser el vehículo para la expansión internacional, llevando su propuesta de valor a regiones donde la conciencia sobre la salud está en auge.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Diferenciación Competitiva, porque "PPG PLUS" contribuye a la diferenciación de la compañía en un mercado saturado al ofrecer productos únicos respaldados por una historia de éxito. Esta diferenciación ayuda a la compañía a posicionarse como un líder en innovación dentro de su sector, lo que puede traducirse en un crecimiento de la cuota de mercado.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Fortalecimiento de la Marca Global, al asociar "PPG PLUS" con un legado de confianza y eficacia, y al mismo tiempo modernizar la marca con innovaciones actuales, la compañía refuerza su imagen de marca global. Este fortalecimiento de la marca no solo apoya las ventas directas, sino que también facilita asociaciones estratégicas y colaboraciones que pueden impulsar aún más el crecimiento; y mediante la responsabilidad y Sostenibilidad en un entorno donde los consumidores valoran cada vez más la responsabilidad corporativa, "PPG PLUS" puede posicionarse como una marca comprometida con la sostenibilidad y la salud global, lo que no solo mejora la percepción de la marca, sino que también atrae a inversores y socios que buscan compañías con valores alineados con las demandas sociales actuales.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, "PPG PLUS" puede ser un pilar clave en la estrategia de crecimiento de la compañía al expandir su oferta de productos, aumentar la lealtad del cliente, penetrar nuevos mercados, diferenciarse de la competencia, fortalecer su presencia global y alinear su marca con valores de sostenibilidad y responsabilidad.
</p>

<!-- Proyecciones Financieras -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.1.5. Proyecciones Financieras
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    "PPG PLUS" puede ser utilizada para introducir una gama de productos premium que combinan ingredientes naturales con tecnologías avanzadas de formulación. Al posicionar estos productos como soluciones superiores en el mercado, la compañía puede justificar precios más altos, aumentando así los márgenes de ganancia. La percepción de valor añadido, basada en la eficacia y la innovación de "PPG PLUS," permite a la empresa captar un segmento de mercado dispuesto a pagar más por productos de calidad.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    El fuerte legado de la marca original "PPG" proporciona una base sólida para construir lealtad con "PPG PLUS." La confianza del consumidor en la marca, combinada con la promesa de mejoras en salud y bienestar, fomenta la repetición de compras. Aumentar la retención de clientes reduce los costos de adquisición y asegura flujos de ingresos recurrentes, lo cual es crucial para mejorar las proyecciones financieras a largo plazo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    "PPG PLUS" puede servir como punta de lanza para la expansión en mercados internacionales y en nuevos canales de distribución, como plataformas de e-commerce, tiendas especializadas en salud y bienestar, y asociaciones con clínicas o centros de salud. La entrada en estos nuevos mercados y canales diversifica las fuentes de ingresos, reduciendo la dependencia de un solo mercado y ampliando el alcance global de la marca.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Al apalancar la identidad de "PPG PLUS," la compañía puede realizar campañas de marketing más impactantes que resuenen con consumidores conscientes de la salud y el bienestar. Además, al participar en iniciativas de co-branding con otras marcas complementarias, "PPG PLUS" puede expandir su presencia y generar ingresos adicionales a través de asociaciones estratégicas.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    "PPG PLUS" puede ser el núcleo de nuevas innovaciones que la compañía registre como propiedad intelectual, como patentes y trademarks. Esta innovación no solo refuerza la diferenciación de la marca, sino que también puede ser licenciada a terceros, generando flujos de ingresos adicionales. La protección de la propiedad intelectual asociada a "PPG PLUS" asegura una ventaja competitiva sostenible y contribuye a una mejor previsibilidad financiera.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    El éxito continuo de "PPG PLUS" en el mercado puede mejorar la percepción de la compañía entre inversores y accionistas. Un sólido desempeño de la marca puede traducirse en un aumento del valor de las acciones y una mayor confianza en la capacidad de la compañía para generar ingresos sostenibles y rentables. Esto, a su vez, facilita la captación de capital para futuras expansiones y proyectos de innovación.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    A medida que "PPG PLUS" gane tracción en el mercado, la producción en mayor escala de sus productos puede llevar a una reducción en los costos unitarios, mejorando los márgenes de beneficio. La explotación eficiente de las economías de escala no solo mejora la rentabilidad, sino que también permite ofrecer precios competitivos sin sacrificar la calidad, lo que refuerza aún más la posición financiera de la compañía.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    En resumen, "PPG PLUS" puede ser una herramienta poderosa para mejorar las proyecciones financieras de la compañía al permitir un mayor precio por producto, aumentar la lealtad del cliente, expandir la presencia en nuevos mercados, y fortalecer las relaciones con los inversores. La marca no solo representa un activo valioso en términos de ventas y marketing, sino también en su capacidad para generar ingresos sostenibles y mejorar la rentabilidad a largo plazo.
</p>

<!-- Conclusión -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.1.5. Conclusión
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La marca "PPG PLUS" representa una evolución estratégica que capitaliza sobre el éxito histórico de "PPG," ampliando su alcance y reforzando su valor en el mercado. Al combinar su legado de eficacia en el control de lípidos con nuevas formulaciones que incluyen ingredientes naturales y tecnologías avanzadas, "PPG PLUS" ofrece una oportunidad única para capturar una cuota de mercado significativa en los sectores de salud, bienestar, y nutrición. Esta innovación no solo eleva la percepción de la marca, sino que también permite a la compañía establecer una posición diferenciada en un mercado competitivo, lo que se traduce en mayores márgenes de ganancia y un crecimiento sostenido.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Para los inversores, "PPG PLUS" representa una propuesta de inversión sólida y prometedora. La marca no solo tiene el potencial de generar ingresos consistentes a través de una leal base de clientes, sino que también abre nuevas oportunidades para la expansión internacional, la innovación continua y la creación de alianzas estratégicas. La capacidad de la compañía para escalar y diversificar su oferta de productos bajo esta marca garantiza una ventaja competitiva sostenible, lo que hace de "PPG PLUS" una inversión atractiva y rentable a largo plazo.
</p>

<!-- Marca YOU TOMORROW -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.2. Marca "YOU TOMORROW"
</h3>

<!-- Concepto de Marca -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.2.1. Concepto de Marca
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Presentamos "YOU TOMORROW," una marca que representa la visión de un futuro donde cada individuo puede alcanzar su mejor versión mediante la adopción de un estilo de vida saludable e inteligente. Este concepto aboga por la personalización de la nutrición, donde los alimentos son diseñados específicamente para las necesidades únicas de cada persona, considerando factores como la etnia y la región geográfica.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    "YOU TOMORROW" no solo ofrece productos, sino un camino hacia una vida más larga y de mejor calidad, alineando la nutrición con los avances en ciencia y tecnología. "YOU TOMORROW" representa un cambio de paradigma en cómo abordamos la salud y el bienestar, moviéndonos hacia un enfoque más holístico y personalizado. Es la promesa de un mañana en el que las decisiones que tomamos hoy en nuestra alimentación y estilo de vida, con la ayuda de productos nutricionales inteligentes, nos permitirán disfrutar de una vida plena y saludable. Esta marca se posiciona como líder en la revolución de la longevidad y la calidad de vida, invitando a las personas a imaginar y construir su mejor versión para el futuro.
</p>

<!-- Valor de la Marca -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.2.2. Valor de la Marca
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    El valor de la marca "YOU TOMORROW" radica en su capacidad para conectar con la aspiración universal de mejorar la calidad de vida y prolongar la longevidad. Esta marca tiene un enfoque innovador en la personalización de la nutrición, lo que la distingue en un mercado cada vez más consciente de la salud. "YOU TOMORROW" ofrece un valor único al integrar la ciencia avanzada y la tecnología con las necesidades individuales, adaptando sus productos a las características genéticas, étnicas y geográficas de cada persona.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Además, el valor de la marca se refuerza por su compromiso con la transformación personal y su promesa de un futuro más saludable. "YOU TOMORROW" no es solo una marca de productos; es una filosofía de vida que invita a los consumidores a participar activamente en la creación de un mejor yo, basándose en decisiones informadas y científicamente respaldadas. Esta visión de futuro convierte a la marca en un aliado clave para aquellos que buscan no solo vivir más, sino vivir mejor, posicionando a "YOU TOMORROW" como una marca de gran relevancia y atractivo en el mercado global.
</p>

<!-- Diferenciación en el Mercado -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.2.3. Diferenciación en el Mercado
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La diferenciación de la marca "YOU TOMORROW" en el mercado se basa en su enfoque único en la personalización de la nutrición inteligente, adaptada específicamente a las necesidades individuales según etnias, regiones geográficas y perfiles genéticos. Mientras que muchas marcas de salud y bienestar ofrecen productos generalizados, "YOU TOMORROW" se distingue por su compromiso con la creación de soluciones nutricionales altamente personalizadas, diseñadas para optimizar la salud y la longevidad de cada persona.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Además, "YOU TOMORROW" no solo se centra en la prevención de enfermedades, sino en la potenciación del bienestar a través de una nutrición que actúa como un catalizador para el cambio de estilo de vida. La marca se posiciona como un facilitador del "futuro mejorado" de sus consumidores, ofreciendo no solo productos, sino un enfoque integral que incluye orientación sobre hábitos saludables y una visión holística del bienestar. Esta combinación de personalización, ciencia avanzada, y enfoque integral en la calidad de vida posiciona a "YOU TOMORROW" como una marca pionera y diferenciada en el sector de la salud y la nutrición.
</p>

<!-- Estrategia de Crecimiento -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.2.4. Estrategia de Crecimiento
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La estrategia de crecimiento de "YOU TOMORROW" se basará en varios pilares clave, diseñados para consolidar su posición como líder en el mercado de nutrición personalizada y salud integral:
</p>
<ul style="margin-bottom: 20px; text-align: justify;">
    <li><strong>Expansión del Mercado a Nivel Global:</strong> "YOU TOMORROW" se enfocará en la expansión a mercados internacionales, comenzando por regiones con una demanda creciente de soluciones personalizadas de salud y bienestar, como América del Norte, Europa, y Asia. Aprovechando el análisis de datos demográficos y de salud, se desarrollarán productos específicos para diversas etnias y regiones, lo que permitirá una penetración efectiva en estos mercados.</li>
    <li><strong>Innovación Continua en Productos y Servicios:</strong> La marca invertirá en investigación y desarrollo para crear nuevos productos que incorporen los últimos avances en ciencia nutricional y biotecnología. Esto incluirá el desarrollo de alimentos funcionales y suplementos diseñados para optimizar la longevidad y la calidad de vida de manera personalizada, utilizando perfiles genéticos y biomarcadores individuales.</li>
    <li><strong>Alianzas Estratégicas y Colaboraciones:</strong> "YOU TOMORROW" buscará establecer alianzas con instituciones de investigación, universidades, y otras empresas líderes en biotecnología y salud. Estas colaboraciones permitirán acceder a nuevas tecnologías y conocimientos, impulsando la innovación y mejorando la oferta de productos. Además, alianzas con plataformas digitales y minoristas globales facilitarán la distribución y visibilidad de la marca.</li>
    <li><strong>Educación y Concienciación del Consumidor:</strong> Parte de la estrategia incluirá campañas de educación y concienciación para informar a los consumidores sobre los beneficios de la nutrición personalizada y cómo "YOU TOMORROW" puede ayudarles a alcanzar su mejor versión en términos de salud y bienestar. Esto se llevará a cabo mediante la creación de contenido educativo, participación en eventos de salud y bienestar, y el uso de plataformas digitales para llegar a un público más amplio.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    Esta estrategia permitirá a "YOU TOMORROW" crecer de manera sostenible, consolidando su presencia en el mercado global mientras se posiciona como la marca líder en nutrición personalizada y calidad de vida.
</p>

<!-- Proyecciones Financieras -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.2.5. Proyecciones Financieras
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La proyección financiera de "YOU TOMORROW" se centra en un crecimiento sostenible y ambicioso, apalancando la creciente demanda por productos de nutrición personalizada y soluciones integrales de bienestar. En los primeros años, la marca se establecerá en mercados clave como Estados Unidos, Canadá, y Europa Occidental, con una expansión progresiva a nuevos mercados en Asia y América Latina.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    A medida que la marca gane tracción, se introducirán nuevas líneas de productos y servicios, incluyendo suscripciones personalizadas basadas en análisis genéticos, lo que fortalecerá la posición de "YOU TOMORROW" como líder en nutrición personalizada a nivel global. En cuanto a los costos, se espera una inversión inicial significativa que cubrirá la investigación y desarrollo, marketing, y la infraestructura necesaria para el lanzamiento. Sin embargo, con la expansión y optimización operativa, la eficiencia en la producción y las economías de escala permitirán un aumento en los márgenes de rentabilidad a lo largo del tiempo.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    La empresa alcanzará la rentabilidad neta positiva en los primeros años, con un crecimiento constante en las ganancias netas, lo que permitirá generar un retorno de inversión atractivo. Este crecimiento estará respaldado por la innovación continua, la expansión de mercado, y estrategias de marketing efectivas que posicionarán a "YOU TOMORROW" como una marca referente en el sector de la salud y el bienestar personalizado a nivel global.
</p>

<!-- Conclusión -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    12.2.6. Conclusión
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La marca "YOU TOMORROW" es altamente atractiva para los inversionistas, porque resalta su potencial transformador en el mercado de la nutrición y el bienestar. La propuesta de valor de la marca se centra en ofrecer soluciones personalizadas que se adaptan a las necesidades específicas de cada individuo, teniendo en cuenta su genética, etnia y entorno.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Este enfoque innovador no solo responde a la creciente demanda de productos de salud personalizados, sino que también posiciona a "YOU TOMORROW" como un líder en la industria, capaz de marcar la diferencia en la calidad de vida de las personas. Además, la estrategia de crecimiento bien definida y las proyecciones financieras sólidas indican un camino claro hacia la rentabilidad y el éxito sostenible.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    A través de la inversión en investigación y desarrollo, la expansión en mercados clave y la adopción de tecnologías avanzadas, "YOU TOMORROW" está preparada para capturar una cuota de mercado significativa y generar retornos atractivos para sus inversores. En resumen, invertir en "YOU TOMORROW" no solo es una oportunidad para participar en un negocio con un gran potencial de crecimiento, sino también para contribuir a una causa noble: mejorar la salud y el bienestar de las personas en todo el mundo.
</p>

<div class="marca-pinochio" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Concepto de Marca -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
        <i class="fas fa-book" style="margin-right: 10px; color: #1b5e20;"></i>12.3. Marca “PINOCHIO”
    </h2>
    <h3 style="font-size: 20px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
        12.3.1. Concepto de Marca
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Presentamos "PINOCHIO", una marca que simboliza un compromiso firme con la salud y la autenticidad en la alimentación. Nuestro propósito es sustituir los alimentos procesados que amenazan la salud y la calidad de vida, eliminando ingredientes químicos y refinados que han perdido sus propiedades nutricionales. "PINOCHIO" promueve la esencia de los "SMART FOODS-REAL FOODS", ofreciendo una gama de productos que son verdaderamente nutritivos y que fomentan un estilo de vida saludable. La marca se inspira en la historia de "Pinocho", que representa el deseo de ser real y auténtico, al igual que nuestros alimentos, que buscan devolver la pureza y el valor nutricional a la dieta moderna.
    </p>

    <!-- Valor de la Marca -->
    <h3 style="font-size: 20px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
        12.3.2. Valor de la Marca
    </h3>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>Reconocimiento y Confianza:</strong> "PINOCHIO" se presenta como un símbolo de confianza y autenticidad, conectando emocionalmente con los consumidores que buscan opciones alimentarias más saludables y honestas.</li>
        <li><strong>Asociación Positiva:</strong> La narrativa de "PINOCHIO", que aboga por la verdad y la integridad, resuena con el creciente deseo de los consumidores de alejarse de los productos artificiales y volver a lo natural.</li>
    </ul>

    <!-- Diferenciación en el Mercado -->
    <h3 style="font-size: 20px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
        12.3.3. Diferenciación en el Mercado
    </h3>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>Innovación del Producto:</strong> "PINOCHIO" no solo será una marca de alimentos; será un movimiento hacia la salud y la transparencia en la alimentación. Nuestra gama de productos incluirá ingredientes naturales y saludables que preservan su valor nutricional, proporcionando opciones alimenticias que realmente nutren.</li>
        <li><strong>Marketing Auténtico:</strong> Nuestra estrategia de marketing se centrará en contar historias de autenticidad y bienestar, utilizando elementos visuales que evoquen la simplicidad y la pureza de nuestros alimentos. "PINOCHIO" se destacará en un mercado lleno de productos procesados, representando un cambio hacia opciones más saludables y genuinas.</li>
    </ul>

    <!-- Estrategia de Crecimiento -->
    <h3 style="font-size: 20px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
        12.3.4. Estrategia de Crecimiento
    </h3>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>Lanzamiento y Distribución:</strong> "PINOCHIO" se lanzará en mercados clave de América Latina, EE. UU. y Europa, donde el interés por alimentos saludables está en aumento. Estableceremos asociaciones con supermercados, tiendas de salud, plataformas de comercio electrónico y comunidades en línea, llevando nuestros productos a los consumidores que buscan alternativas saludables.</li>
        <li><strong>Expansión de Productos:</strong> A medida que la marca se consolide, planeamos diversificar nuestra oferta, introduciendo una variedad de alimentos y snacks saludables que continúen el legado de nutrición y autenticidad.</li>
    </ul>

    <!-- Proyecciones Financieras -->
    <h3 style="font-size: 20px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
        12.3.5. Proyecciones Financieras
    </h3>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>Mercado Potencial:</strong> El mercado de alimentos saludables está en constante crecimiento, con una demanda significativa de productos que priorizan la salud y la nutrición. "PINOCHIO" está bien posicionado para capturar una porción considerable de este mercado en expansión.</li>
        <li><strong>Retorno de Inversión:</strong> Presentaremos proyecciones financieras que demuestren cómo "PINOCHIO" puede generar un retorno atractivo para los inversores a través de una estrategia de ventas eficaz y un enfoque en la construcción de una marca sólida.</li>
    </ul>

    <!-- Conclusión -->
    <h3 style="font-size: 20px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
        12.3.6. Conclusión
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Invertir en "PINOCHIO" es más que respaldar una nueva marca; es unirse a un movimiento hacia la autenticidad y la salud. Con nuestra propuesta de productos innovadores y una estrategia de marketing basada en la verdad y la transparencia, "PINOCHIO" está preparado para liderar el mercado de alimentos saludables. Estamos buscando socios estratégicos que compartan nuestra visión y estén listos para formar parte de esta emocionante aventura en la transformación de la alimentación.
    </p>

    <!-- Derechos de Autor y Secretos Comerciales -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
        13. DERECHOS DE AUTOR Y SECRETOS COMERCIALES.
    </h2>
    <h3 style="font-size: 20px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        13.1. Derechos de Autor:
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Los derechos de autor protegen nuestras obras originales de autoría, incluidas las etiquetas de productos, el contenido promocional, el diseño de envases y cualquier material de marketing creado para PPG NUTRITIONAL. Estos derechos garantizan que nuestro contenido único no pueda ser utilizado o reproducido sin autorización, lo que ayuda a mantener la integridad y la identidad de nuestra marca. Al registrar nuestros derechos de autor, aseguramos que nuestras ideas y creaciones permanezcan protegidas, lo que añade valor a nuestra marca y mejora su atractivo para los consumidores e inversionistas.
    </p>
    <h3 style="font-size: 20px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        13.2. Secretos Comerciales:
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Los secretos comerciales son un aspecto fundamental de nuestra estrategia de negocio. En PPG NUTRITIONAL, utilizamos fórmulas exclusivas, métodos de producción y procesos de investigación que no son de dominio público, lo que nos otorga una ventaja competitiva. Al mantener estos secretos, podemos ofrecer productos innovadores que cumplen con los estándares más altos de calidad y eficacia, diferenciándonos de la competencia. La protección de estos secretos comerciales es esencial para preservar nuestra posición en el mercado y aumentar la confianza de los inversionistas en el potencial de crecimiento de nuestra empresa.
    </p>
</div>





<!-- Valor para Inversionistas -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    13.3. Valor para Inversionistas
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La protección de nuestros derechos de autor y secretos comerciales representa no solo una barrera de entrada para competidores, sino también una sólida base para la inversión. Al invertir en PPG NUTRITIONAL, los inversionistas no solo respaldan una marca innovadora, sino también un modelo de negocio que prioriza la protección de su propiedad intelectual. Esto crea un entorno favorable para el crecimiento a largo plazo y el retorno de la inversión, aumentando la valoración de la empresa en un mercado cada vez más competitivo.
</p>

<!-- Productos y Tecnologías -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    14. PRODUCTOS Y TECNOLOGÍAS
</h3>

<!-- Tecnologías Propietarias -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    14.1. Tecnologías Propietarias
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    En “PPG NUTRITIONAL”, nos especializamos en la gestión e innovación de medicamentos de patentes, así como en el desarrollo de nuevos productos terapéuticos y nutricionales inteligentes. Nuestra misión es diseñar soluciones que no solo prevengan, controlen y traten enfermedades, síndromes y trastornos, sino que también contribuyan a revertir el proceso de envejecimiento, mejorando el rendimiento físico y mental de las personas y aumentando su expectativa de vida con calidad.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Contamos con un equipo altamente calificado de más de 50 doctores en ciencias, con 35 años de experiencia en la gestión y la innovación tecnológica. Este equipo se dedica al desarrollo de sistemas de inteligencia medicinal, abarcando una amplia gama de tecnologías y procedimientos avanzados. Nuestros esfuerzos incluyen el diseño y la optimización de laboratorios, la elaboración de protocolos para ensayos biológicos, así como la certificación y el registro de productos terapéuticos y alimenticios.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Nuestra estrategia se basa en realizar investigaciones de alto rendimiento que integran principios de genómica, proteómica, biología evolutiva, química espacial e inteligencia artificial, entre otros campos. Esta sólida base científica nos permite desarrollar tecnologías y procesos innovadores que garantizan un fuerte posicionamiento de nuestras marcas y patentes en el mercado.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Con “PPG NUTRITIONAL”, los inversionistas tienen la oportunidad de participar en un ecosistema en crecimiento que no solo busca rentabilidad, sino que también está comprometido con la mejora de la calidad de vida de las personas a través de soluciones de salud de vanguardia. Estamos posicionados para liderar la transformación del sector de la salud y la nutrición, aprovechando nuestras tecnologías propietarias para ofrecer productos que realmente marquen la diferencia en la vida de las personas.
</p>

<!-- Procesos de Producción Innovadores -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    14.2. Procesos de Producción Innovadores
</h4>


<!-- Portafolio de Productos -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    14.3. Portafolio de Productos
</h4>
<!-- Línea de productos bajo la marca PPG PLUS -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    14.3.1. Línea de productos bajo la marca PPG PLUS
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Durante aproximadamente 15 años hemos estudiado y comprendido que las alteraciones y síndromes que causan cambios en el colesterol y los triglicéridos se presentan de manera diferente en cada uno de los pacientes afectados por distintas enfermedades. No es lo mismo prevenir, controlar y tratar los trastornos lipídicos en pacientes hipertensos que en aquellos que padecen enfermedades cardiovasculares, artritis, artrosis, cáncer, impotencia sexual, diabetes, obesidad y otros.
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Basándonos en estos fundamentos y tras varios años de investigación científica, somos capaces de ofrecer una variedad de productos bajo la marca PPG PLUS (bajo patente) que permiten la aplicación de protocolos personalizados para la prevención, control y tratamiento de alteraciones lipídicas, como se muestra a continuación:
</p>

<!-- PPG Plus 9 -->
<h5 style="font-size: 18px; color: #04b1b7; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #04b1b7; padding-bottom: 5px;">
    PPG Plus 9
</h5>

 <!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture18.png" alt="Imagen representativa" style="width: 40%; height: auto; border-radius: 8px;">
  </div>


<p style="margin-bottom: 20px; text-align: justify;">
    Esencial para reducir los niveles de colesterol malo, prevenir la agregación plaquetaria y promover la función sexual tanto en hombres como en mujeres.
</p>

<!-- PPG Plus AC -->
<h5 style="font-size: 18px; color: #04b1b7; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #04b1b7; padding-bottom: 5px;">
    PPG Plus AC
</h5>


 <!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture19.png" alt="Imagen representativa" style="width: 40%; height: auto; border-radius: 8px;">
  </div>


<p style="margin-bottom: 20px; text-align: justify;">
    Esencial para regular el sistema inmunológico, reducir los niveles de colesterol malo, inhibir el crecimiento de células cancerosas y reducir el riesgo de enfermedades cardiovasculares, mejorar la función visual y la salud ocular.
</p>

<!-- PPG Plus KL -->
<h5 style="font-size: 18px; color: #04b1b7; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #04b1b7; padding-bottom: 5px;">
    PPG Plus KL
</h5>


 <!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture20.png" alt="Imagen representativa" style="width: 40%; height: auto; border-radius: 8px;">
  </div>


<p style="margin-bottom: 20px; text-align: justify;">
    Mejora las funciones cardíacas, reduce los procesos inflamatorios en los órganos internos, disminuye los niveles de colesterol malo, mejora la concentración, la memoria y el aprendizaje, reduce los síntomas asociados con la artritis, estabiliza los niveles de azúcar, fortalece el sistema inmunológico y mejora la salud de la piel.
</p>

<!-- PPG Plus AO -->
<h5 style="font-size: 18px; color: #04b1b7; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #04b1b7; padding-bottom: 5px;">
    PPG Plus AO
</h5>

 <!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/Picture21.png" alt="Imagen representativa" style="width: 40%; height: auto; border-radius: 8px;">
  </div>

  
<p style="margin-bottom: 20px; text-align: justify;">
    Mejora la función y obstrucción arterial, reduce el riesgo de ataques cardíacos, disminuye el riesgo de cáncer, controla los niveles de azúcar en la sangre, estimula la actividad antiinflamatoria, promueve las habilidades cognitivas y ayuda a la digestión.
</p>


<!-- PPG Plus HA -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    PPG Plus HA
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Combate el cáncer intestinal, estados de somnolencia y astenia; tiene efecto laxante, estimula la digestión y las secreciones del páncreas, regula el nivel de azúcar en sangre y el nivel de colesterol.
</p>

<!-- PPG Plus AX -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    PPG Plus AX
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Modula el sistema inmunológico en niños, jóvenes y adultos; reduce el riesgo de artritis; regula el metabolismo de los niveles de triglicéridos, colesterol malo y la presión arterial. Mejora los niveles de glucosa y controla la secreción de insulina. Es un protector renal que previene la nefropatía diabética. Previene infartos y trombosis.
</p>

<!-- PPG Plus CC -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    PPG Plus CC
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Previene la inflamación del hígado y los riñones, alivia el estrés, controla la diabetes, el cáncer, reduce la carga viral, baja los niveles de colesterol malo y mejora a los enfermos de Alzheimer. Controla la epilepsia o el Alzheimer. Reduce el apetito, acelerando el metabolismo, lo que ayuda a adelgazar.
</p>

<!-- PPG Plus GJ -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    PPG Plus GJ
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Protege contra el envejecimiento. Aumenta la energía y la fuerza en personas afectadas por enfermedades, reduce la grasa corporal, disminuye los niveles de colesterol malo, mejora el sueño, la memoria, la recuperación de la libido, tiene efectos anticancerígenos, mejora la fertilidad y fortalece los músculos y huesos.
</p>

<!-- PPG Plus SJ -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    PPG Plus SJ
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Disminuye los niveles de colesterol malo, fortalece y nutre el sistema nervioso, aumenta el intelecto, mejora la memoria (previene el Alzheimer) y la capacidad cognitiva, combate el insomnio y la fatiga mental y física. Participa en la reducción de riesgos de enfermedades cardiovasculares, problemas renales y previene infartos.
</p>

<!-- PPG Plus GM -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    PPG Plus GM
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Indicado para reducir los niveles de colesterol malo, mejora la salud de la piel, tiene un efecto antienvejecimiento, antiséptico y antiinflamatorio. Combate las manchas solares, el acné y los puntos negros, fortalece el cabello e hidrata el cuero cabelludo.
</p>

<!-- PPG Plus AN -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    PPG Plus AN
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Indicado para reducir los niveles de colesterol malo, previene la formación de sustancias inflamatorias, inhibe la formación de coágulos o trombos, tiene acción vasodilatadora, regula los efectos de las hormonas femeninas en el ciclo menstrual, es eficaz en la reducción de quistes ováricos. Regula la conducción de impulsos nerviosos, diabetes, alergias, Alzheimer, depresión y cáncer de ovario, mama y estómago.
</p>

<!-- PPG Plus SM -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    PPG Plus SM
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Indicado para reducir los triglicéridos, bajar los niveles de colesterol malo y la presión arterial; previene la fibrilación auricular y reduce el riesgo de muerte. Es útil para la artritis reumatoide y la depresión.
</p>

<!-- PPG Plus TB -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    PPG Plus TB
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Disminuye los niveles de colesterol malo; mejora la oxigenación de la sangre, ayuda a controlar el reumatismo y el dolor de la artritis, protege y da flexibilidad a las arterias, reduce el envejecimiento de los tejidos, mejora la psoriasis, tiene un efecto antiinflamatorio, regula el sistema inmunológico, reduce el riesgo de enfermedades cardíacas y arteriales, y es útil en enfermedades respiratorias.
</p>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<div class="adjuvants-line" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Line of Adjuvants -->
    <h2 style="font-size: 30px; color: #c62828; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
         14.3.2. Line of Adjuvants
    </h2>
    <p style="margin-bottom: 20px; text-align: justify;">
        The side effects and toxic reactions of medications are the cause of 15% of premature deaths in acute episodes. However, no one perceives that the continued use for years of medications used in the control and treatment of hypertension, diabetes, arthritis, osteoarthritis, obesity, cardiovascular, cerebrovascular, dementias, Alzheimer's, and hundreds of other diseases, alterations, and syndromes to short and medium term cause more harm than benefit to patients.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        The constant use of medications for the control and treatment of diseases, syndromes, and alterations can lead to the development of other conditions that are often more fatal and reduce the quality of life more than the disease for which the medication was originally prescribed.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Favorably, the scientists of "PPG NUTRITIONAL" have utilized empathic methods of artificial intelligence, genomics, and proteomics to investigate ways to counteract the adverse and toxic effects of the drugs used for controlling and treating these conditions while improving their pharmacological and therapeutic actions.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        The line of adjuvants developed by "PPG NUTRITIONAL" focuses on reducing and eliminating the side effects of each of the drugs used by patients to control or treat chronic diseases, as demonstrated in the cases presented below:
    </p>
    
    <!-- Estrategia de Uso de Adyuvantes para Hipertensión -->
<div class="hypertension-section" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Hipertensión -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Hypertension
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        High blood pressure or hypertension, if left untreated, can lead to serious health conditions. Recent studies support a target blood pressure for most people of 120/80 mm Hg, with an optimal level of 115/75 mm Hg for many people. Our approach aims to achieve that MIS-recommended blood pressure control through a combination of natural interventions, lifestyle changes, and the use of physician-prescribed antihypertensive medications. This is complemented by the use of adjuvant therapeutics that increase the effectiveness of the medications used in controlling this disease and, at the same time, prevent the adverse and toxic effects that prolonged use of these medications may cause, such as the development of syndromes, alterations, and new diseases like cancer, which are often fatal or severely impact quality of life.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        If diet and lifestyle changes alone do not lower blood pressure sufficiently, medications may become part of the strategy in the following way:
    </p>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>First-line recommendation:</strong> Angiotensin II receptor blockers (particularly Telmisartan); Angiotensin-converting enzyme inhibitors such as Benazepril (Lotensin), Captopril, Enalapril (Vasotec), Fosinopril, Lisinopril (Prinivil, Zestril), Moexipril, Perindopril, Quinapril (Accupril).</li>
        <li><strong>Second-line recommendation:</strong> Thiazide diuretics such as Chlorothiazide (Diuril), Chlorthalidone, Hydrochlorothiazide (Microzide), Indapamide, Metolazone.</li>
        <li><strong>Third-line recommendation:</strong> Calcium channel blockers such as Amlodipine (Norvasc), Diltiazem (Cardizem, Tiazac), Felodipine, Isradipine, Nicardipine, Nifedipine (Adalat CC, Procardia), Nisoldipine (Sular), Verapamil (Calan, Verelan). Combination therapy with more than one blood pressure medicine may be appropriate for those whose blood pressure cannot be controlled by a single medicine.</li>
    </ul>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        To enhance the pharmacological actions of the drugs used in the prevention, control, and treatment of hypertension and simultaneously counteract the side effects and adverse reactions caused by these drugs in the medium and long term, which often contribute to the development of disorders, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," in collaboration with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that improve the effectiveness of the drugs used at each stage of hypertension treatment while reducing the risk of contracting disorders, syndromes, or fatal diseases that decrease the quality of life. These adjuvants consist of unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for human use by the FDA.
    </p>
    
    <!-- Nombre del Producto -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Product Name: SYSTOL 115/75
    </h3>
</div>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias3.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>




<!-- Estrategia de Uso de Adyuvantes -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    RHEUMATOID ARTHRITIS
</h3>

<!-- Resumen de la Artritis Reumatoide -->
<p style="margin-bottom: 20px; text-align: justify;">
    Rheumatoid arthritis (RA) is a systemic inflammatory disease characterized by an autoimmune response that causes pain and disfigurement in peripheral joints. A dangerously underappreciated fact about RA is that it also significantly increases the risk of cardiovascular disease. Too often, conventional treatment strategies produce only marginal relief, failing to mitigate the intrinsic systemic risks that decrease the longevity of RA patients. Treatments should be focused on the application of intensive protocols for cardiovascular risk reduction, which should be as high a priority as relieving joint pain. Strategies must be conveniently focused through the use of adjuvants that improve therapeutic actions, reduce toxicity, and contribute to retraining the immune system to prevent joint damage, as well as reduce the risk for the development of cardiovascular diseases and even malignant diseases such as cancer.
</p>

<!-- Tratamientos Convencionales -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Conventional Treatments
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Disease-modifying antirheumatic drugs (DMARDs) such as methotrexate and sulfasalazine; Glucocorticoids such as prednisone; Non-steroidal anti-inflammatory drugs (NSAIDs); Statins to prevent cardiovascular disease; Modified-release prednisone to improve on the action of conventional prednisone; Stem cell treatment; Bioidentical hormone replacement therapy.
</p>

<!-- Estrategia de Uso de Adyuvantes -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Strategy for Use of Adjuvants
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    To improve the pharmacological actions of the drugs used in the prevention, control, and treatment of Rheumatoid arthritis and at the same time counteract the side effects and adverse reactions caused by the use of these drugs in the medium and long term, which usually contribute to the development of alterations, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," together with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that improve the actions of the drugs used in each of the stages of Rheumatoid arthritis treatment and at the same time reduce the risk of contracting disorders, syndromes, or fatal diseases that decrease quality of life. These adjuvants are unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for use in humans by the FDA.
</p>

<!-- Adjuntar Fotos de Adyuvantes -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Attach Adjuvants Photos (Group 6)
</h3>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias4.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Estrategia de Uso de Adyuvantes para Diabetes -->
<div class="adjuvants-diabetes" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Diabetes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Diabetes
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        When diabetes is diagnosed in middle age, life expectancy is reduced by about 10 years. Every seven seconds, a person dies from diabetes-related causes. There is a distinction between type 1 and type 2 diabetes. Diabetes mellitus is characterized by high levels of glucose in the blood. Type 2 diabetes is much more common than type 1 and is primarily caused by resistance to the effects of insulin, the hormone that facilitates the removal of glucose from the blood. Type 1 diabetes is mainly caused by the destruction of the insulin-producing pancreatic beta cells. Despite the differences, the effect in both cases is similar, as elevated blood sugar, even within the conventional normal range, can damage tissues throughout the body. One significant concern is the resistance to excess insulin, often exacerbated by the use of certain conventional medications that increase insulin levels without considering ambient glucose levels, potentially contributing to long-term issues.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Blood sugar control through a self-management program that includes understanding home glucose control and making lifestyle changes is considered one of the most rational approaches to managing blood sugar. Chronic elevation of fasting blood glucose levels, or recurrent excessive spikes in glucose levels after meals, can have devastating long-term consequences, including heart disease, blindness, kidney failure, liver disease, and cancer. Therefore, glucose-lowering medications like metformin should be managed with specific adjuvants to increase their efficacy and reduce side effects, minimizing the risk of developing malignant diseases such as cancer.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Metformin is considered the first-line drug for type 2 diabetes. It has also been shown to promote weight loss and protect against some cancers, cardiovascular disease, and Alzheimer disease. Acarbose is another drug that lowers glucose by blocking the breakdown of starches and slowing the absorption of sugar and carbohydrates. Depending on individual glycemic control and the severity of diabetes, other oral glucose-lowering agents or injectable drugs such as insulin may be necessary. Additionally, stem cell therapy aims to replace damaged or destroyed insulin-producing pancreatic beta cells in diabetics with new beta cells derived from human stem cells. Glucokinase activators, which lower glucose levels and stimulate pancreatic beta cell proliferation, as well as medications like lorcaserin and the combination of phentermine and topiramate, have been shown to improve glycemic control in obese individuals with type 2 diabetes.
    </p>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        To enhance the pharmacological actions of the drugs used in the prevention, control, and treatment of diabetes while counteracting the side effects and adverse reactions caused by these drugs in the medium and long term, which often contribute to the development of disorders, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," together with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that improve the effectiveness of the drugs used at each stage of diabetes treatment while reducing the risk of contracting disorders, syndromes, or fatal diseases that decrease the quality of life. These adjuvants consist of unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for human use by the FDA.
    </p>
</div>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias5.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Estrategia de Uso de Adyuvantes para Manejo del Colesterol -->
<div class="adjuvants-cholesterol" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Manejo del Colesterol -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Cholesterol Management
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        Emerging research on underestimated aspects of cholesterol biochemistry has revealed that high blood cholesterol levels represent a minimal part of the risk for the development of alterations, syndromes, and diseases. However, the chemical properties of the molecules responsible for transporting cholesterol through the blood, called lipoproteins, pose greater health risks as they can alter the structures of proteins, glucose, RNA, and DNA, leading to the development of disorders such as atherosclerosis. The use of statins and other drugs to control cholesterol and lipid metabolic disorders has shown that, in the medium and long term, they can cause alterations, syndromes, and diseases that may be more harmful, fatal, and reduce life expectancy and quality of life compared to the conditions associated with high levels of lipids and cholesterol in the blood. Fortunately, it is possible to develop therapeutic products (adjuvants) that counteract these risks and enhance the efficacy of conventional drugs.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Conventional treatments include HMG-CoA reductase inhibitors (statins) to reduce cellular production of cholesterol, medications to lower cholesterol absorption from the intestine (e.g., bile acid sequestrants like colesevelam), and PCSK9 inhibitors, which allow LDL to bond to its receptors and be removed from the blood. For individuals who require additional LDL lowering, the new drug bempedoic acid may be recommended in addition to statin therapy.
    </p>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        To improve the pharmacological actions of the drugs used in the prevention, control, and treatment of cholesterol while counteracting the side effects and adverse reactions caused by these drugs in the medium and long term, which often contribute to the development of alterations, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," together with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that enhance the effectiveness of the drugs used at each stage of cholesterol treatment while reducing the risk of contracting disorders, syndromes, or fatal diseases that decrease the quality of life. These adjuvants consist of unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for human use by the FDA.
    </p>
</div>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias6.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Estrategia de Uso de Adyuvantes para Alergias -->
<div class="adjuvants-allergies" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Alergias -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Allergies
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        Allergic states have increased worldwide in recent decades. Allergies include disorders such as atopic dermatitis, allergic rhinitis, asthma, hives, angioedema (swelling under the skin), as well as food, drug, and insect allergies. Medical treatment and other strategies can help alleviate allergic symptoms, syndromes, and reactions significantly as long as we can identify the allergens and components of the diet or environment that enhance these actions. The best benefits are achieved with the use of natural compounds with immunomodulatory properties because these help calm allergen-induced inflammatory responses to relieve symptoms. The medium and long-term use of conventional medications used for the treatment of allergies usually develop alterations, syndromes, and diseases that are sometimes more harmful and deadly than allergies themselves. Our scientists, together with doctors in offices, clinics, and hospitals, have developed therapeutic products (adjuvants) that improve the actions of conventional medications used to treat allergies, and at the same time reduce toxic effects and adverse reactions, alterations, and fatal diseases.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Conventional treatments are based on antihistamines (bilastine, cetirizine, desloratadine, ebastine, fexofenadine, levocetirizine, loratadine, mizolastine, and rupatadine); Decongestants (pseudoephedrine and phenylephrine); glucocorticosteroids (prednisone, hydrocortisone, betamethasone, beclomethasone); leukotriene antagonists; cromolyn sodium; beta-agonists (albuterol and epinephrine).
    </p>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        To improve the pharmacological actions of the drugs used in the prevention, control, and treatment of allergies while counteracting the side effects and adverse reactions caused by these drugs in the medium and long term, which often contribute to the development of alterations, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," together with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that enhance the effectiveness of the drugs used at each stage of allergy treatment while reducing the risk of contracting disorders, syndromes, or fatal diseases that decrease the quality of life. These adjuvants consist of unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for human use by the FDA.
    </p>
</div>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias7.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Estrategia de Uso de Adyuvantes para la Ansiedad -->
<div class="adjuvants-anxiety" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Ansiedad -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Anxiety
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        Nearly 15% of adults will experience an anxiety disorder in their lifetime, and approximately 18% of the adult population over 18 years of age in developed and emerging countries are affected by this disorder, which is considered multifaceted and must be addressed as such to achieve symptomatic relief. Psychoactive medications do not address the underlying causes of anxiety, such as hormonal and metabolic imbalances that arise as our bodies try to adapt to chronic stress. Clinical studies indicate that nutrients, healthy eating habits, and stress management techniques can effectively optimize the body's stress response mechanisms and support healthy neurological communication. Additionally, compounds such as vitamins and amino acids can provide the raw materials that the body needs to ensure the correct synthesis and signaling of neurotransmitters that control, prevent, and cure this disorder. However, it has been shown that the use of adjuvants is essential, together with the medications used for the treatment of anxiety, in order to increase efficacy, reduce toxicity, minimize adverse reactions, and, above all, prevent the continuous use of medications in the medium and long term, which can lead to the development of diseases such as cancer and reduce the quality life expectancy of patients under treatment.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Drug or medication therapy includes: Benzodiazepines such as diazepam (Valium), alprazolam (Xanax), and clonazepam (Klonopin); Azapirones such as buspirone (BuSpar); Antidepressants, including selective serotonin reuptake inhibitors (SSRIs) such as fluoxetine (Prozac) and sertraline (Zoloft); Beta blockers such as propranolol (Inderal) and atenolol (Tenormin); Pregabalin, an anticonvulsant medication that is also effective in treating anxiety.
    </p>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        To improve the pharmacological actions of the drugs used in the prevention, control, and treatment of anxiety and at the same time counteract the side effects and adverse reactions caused by the use of these drugs in the medium and long term, which often contribute to the development of alterations, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," together with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that enhance the effectiveness of the drugs used at each stage of anxiety treatment while reducing the risk of contracting disorders, syndromes, or fatal diseases that decrease the quality of life. These adjuvants consist of unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for human use by the FDA.
    </p>
</div>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias8.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Estrategia de Uso de Adyuvantes para el Cáncer -->
<div class="adjuvants-cancer" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Cáncer -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Cancer
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        Cancer is the final result of the aggression of normal cells by external and internal factors that cause them to find an internal environment that enables them to survive in a period that takes an average of between 5 and 15 years in which the organism “announces,” at least 4 times, that we are “incubating” a cancer. Understanding these phenomena is essential to prevent the development, progression, and consolidation of cancer. After establishing themselves, cancer cells and cancer in general develop "strategies" to perpetuate themselves and invade neighboring organs and tissues until they cause death. Despite these, the conventional medical establishment treats most cancer cases with a one-size-fits-all approach that may deprive many patients of a greater chance of successful treatment. The good news is that we currently have a diagnostic system that allows us to predict, from birth, the predisposition to suffer from different types of cancer, to consequently deploy therapeutic strategies for the control of all critical points related to the development of cancer and the strategies developed by cancer cells to evade treatment; considering epigenetic therapies and intelligent nutrition as the most effective to prevent, control, treat, and achieve remission in cancer (depending on the stage it is in) to make cancer a controllable chronic disease in which the patient can live with an acceptable quality of life.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Conventional cancer treatment typically involves surgery, chemotherapy, and radiotherapy. Recently, there has been progress in expanding treatment protocols to include immunotherapies, which represent an important step forward. However, these are still far from fully applying integrative medicine as the solution to the prevention, control, and remission of cancer to put true personalized medicine into practice.
    </p>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Implementing adjuvant therapies in the treatment of cancer is possible as long as we analyze each patient individually and consequently apply integrative medicine based on the analysis of the biology of cancer cells and the weaknesses they show at certain points during the development, progression, establishment, and consolidation processes. It is also necessary to understand the reasons why it is possible to proceed surgically, or not, to remove a tumor according to its characteristics and location, as this decision is vital to avoid metastasis and therefore prolong the patient's life. Therefore, adjuvant cancer therapy is personalized and specific; however, we have developed adjuvants that are common to apply in all stages of cancer development. These adjuvants are unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, peptides, probiotics, and other products authorized for use in humans by the FDA.
    </p>
</div>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias9.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Estrategia de Uso de Adyuvantes para Trastornos Sanguíneos -->
<div class="adjuvants-blood-disorders" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Trastornos Sanguíneos -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Blood Disorders
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        Iron deficiency anemia is one of the most prevalent nutritional conditions in the world, with about 30% of the global population suffering from anemia, underscoring the significant role nutritional factors play in the health of the hematopoietic (blood) system. Anemia, leukopenia, and thrombocytopenia are the main blood disorders. Conventional treatments for these blood disorders often come with significant, and in some cases serious, side effects, requiring patients to undergo invasive procedures or take medications for the rest of their lives. Using interventions with adjuvants is essential to increase the efficacy of the indicated medications and decrease their toxicity, thereby avoiding the development of fatal diseases and prolonging life with quality in patients receiving conventional treatment for anemia, leukopenia, and thrombocytopenia. Adjuvants also support the healthy development and function of blood cells.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        The conventional treatments for these conditions primarily involve the use of drugs and vitamins:
    </p>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>Anemia:</strong> Supplemental iron, especially iron protein succinylate for iron-deficiency anemia; Vitamin C, which facilitates the absorption of iron; Vitamin B12 and/or folate for anemia due to vitamin deficiency; Hydroxycarbamide, a drug that increases a form of hemoglobin that does not participate in sickling in those with sickle cell anemia.</li>
        <li><strong>Leukopenia:</strong> Antibiotics for leukopenia caused by cancer or fever (ciprofloxacin, amoxicillin/clavulanate, ceftazidime, vancomycin); Granulocyte-macrophage and granulocyte-stimulating colony factors can be used as a preventive measure to stimulate bone marrow to produce more white blood cells.</li>
        <li><strong>Thrombocytopenia:</strong> Avoid all drugs that impair clotting; Corticosteroids like prednisolone for autoimmune destruction of platelets; Rituximab, a drug that inhibits B-cells; Romiplostim and eltrombopag to induce platelet production.</li>
    </ul>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        To improve the pharmacological actions of the drugs used in the prevention, control, and treatment of blood disorders and at the same time counteract the side effects and adverse reactions caused by the use of these drugs in the medium and long term, which often contribute to the development of alterations, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," together with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that improve the effectiveness of the drugs used at each stage of treatment for blood disorders while reducing the risk of contracting disorders, syndromes, or fatal diseases that decrease the quality of life. These adjuvants consist of unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for human use by the FDA.
    </p>
</div>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias10.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>



<!-- Estrategia de Uso de Adyuvantes para Leucemia -->
<div class="adjuvants-leukemia" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Leucemia -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Leukemia
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        Leukemia is a type of blood cell cancer associated with the bone marrow producing too many abnormal blood cells, which then build up in the blood and cause problems. It is important to understand that the different types of leukemia require different treatment approaches, rather than the one-size-fits-all strategy used in the past. New therapies are currently being implemented that, together with adjuvants developed by us, can improve the effectiveness of treatments against leukemia.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        The specific treatment protocol for leukemias depends on the type of leukemia and the stage or aggressiveness of the disease. The first line of treatment is selected based on clinical trial results in patients with the same type and stage of leukemia. Currently, there is a long list of drugs available and approved by the FDA for use in combinations tailored to the individual patient's needs. Protocols for patients with acute leukemia typically start chemotherapy immediately after diagnosis. Other treatment options include tyrosine kinase inhibitors, bone marrow transplantation, monoclonal antibody-based therapy, and interferon therapy for specific types of leukemia. New and emerging strategies involve using T cells from the patient's own body, modified to attack and kill leukemia cells.
    </p>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        To enhance the pharmacological actions of the drugs used in the prevention, control, and treatment of leukemia while counteracting the side effects and adverse reactions caused by these drugs in the medium and long term, which often contribute to the development of alterations, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," in collaboration with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that improve the effectiveness of the drugs used at each stage of leukemia treatment while reducing the risk of contracting disorders, syndromes, or fatal diseases that decrease the quality of life. These adjuvants consist of unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for human use by the FDA.
    </p>
</div>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias11.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Estrategia de Uso de Adyuvantes para Linfoma -->
<div class="adjuvants-lymphoma" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Linfoma -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Lymphoma
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        Disruption of the immune system that fights infection, including the white blood cells and the lymphatic system, leads to a type of cancer called lymphoma. There are different types of lymphoma, and treatment can vary depending on the type. The procedure of how it is treated is indicated according to the form of development and the type of lymphoma. Emerging therapies and research, along with the insertion of adjuvants developed by us, are an integral part of these protocols to enhance the effectiveness of both conventional therapies and emerging treatments.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Lymphomas, like leukemias, must be treated differently according to their classification and the particularities of the cancer and the patient.
        <br><br>
        <strong>Hodgkin Lymphoma (HL):</strong> HL is usually treated with radiation and chemotherapy.
        <br><br>
        <strong>Non-Hodgkin Lymphoma (NHL):</strong> Treatment options for patients with NHL range from a "watch and wait" approach to hematopoietic stem cell transplantation. Rituximab is often given together with cyclophosphamide, doxorubicin, vincristine, and prednisone (CHOP). The combination of the 5 agents is called "R-CHOP".
        <br><br>
        <strong>Novel and Emerging Strategies:</strong> Interleukin (IL)-6 inhibitors: Plasma levels of IL-6 are significantly lower in patients whose lymphomas are in complete remission compared to those in partial remission or those who have progressive disease. Regular aspirin use was associated with a significantly reduced risk of HL, whereas the use of acetaminophen was actually linked to an increased risk of the disease. In combination with rituximab, pixantrone has been shown to be superior to other single-agent therapies for the treatment of relapsed/refractory aggressive NHL.
    </p>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        To improve the pharmacological actions of the drugs used in the prevention, control, and treatment of lymphoma while counteracting the side effects and adverse reactions caused by these drugs in the medium and long term, which often contribute to the development of alterations, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," in collaboration with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that improve the effectiveness of the drugs used at each stage of lymphoma treatment while reducing the risk of contracting disorders, syndromes, or fatal diseases that decrease the quality of life. These adjuvants consist of unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for human use by the FDA.
    </p>
</div>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias12.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Estrategia de Uso de Adyuvantes para Gota -->
<div class="adjuvants-gout" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Gota -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Gout
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        Gout is one of the oldest and most common forms of arthritis. It is a crystal deposition disease in which monosodium urate crystals form in joints and other tissues. A wide variety of conventional drugs, including NSAIDs, corticosteroids, colchicine, emerging therapies, and integrative interventions, together with adjuvants developed by us, can significantly improve the outcomes of gout treatment and prevention, while also preventing the progression of deadly diseases and extending life with quality.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        While elevated uric acid levels above normal parameters indicate gout, the most important diagnostic factor is the identification of monosodium urate crystals in joint fluid or tophi aspirates. Conventional medical treatments for gout include:
        <br><br>
        <strong>Medications for acute attacks:</strong> Nonsteroidal anti-inflammatory drugs (NSAIDs), corticosteroids, colchicine.
        <br><br>
        <strong>Drugs to reduce hyperuricemia:</strong> Xanthine oxidase inhibitors such as allopurinol to decrease uric acid production; uricosuric drugs to increase uric acid excretion.
        <br><br>
        Emerging therapeutics aimed at converting uric acid to allantoin and facilitating its excretion through the kidneys have recently become available. Injectable drugs such as Rasburicase (Elitek) and pegloticase (Krystexxa), approved by the FDA to reduce uric acid levels in patients with gout, break down uric acid into allantoin in the blood.
    </p>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        To enhance the pharmacological actions of drugs used in the prevention, control, and treatment of Gout while simultaneously counteracting the side effects and adverse reactions caused by these drugs in the medium and long term, which often contribute to the development of disorders, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," in collaboration with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that improve the effectiveness of the drugs used at each stage of gout treatment while reducing the risk of contracting disorders, syndromes, or fatal diseases that decrease the quality of life. These adjuvants consist of unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for human use by the FDA.
    </p>
</div>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias15.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>





<!-- Estrategia de Uso de Adyuvantes para Esclerosis Lateral Amiotrófica -->
<div class="adjuvants-als" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Sección de Esclerosis Lateral Amiotrófica -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Amyotrophic Lateral Sclerosis
    </h3>
    
    <!-- Resumen -->
    <p style="margin-bottom: 20px; text-align: justify;">
        Amyotrophic lateral sclerosis (ALS) is a degenerative neuromuscular disease with an average survival rate of three to five years after diagnosis. The protocol for ALS treatment includes conventional diagnostic strategies and emerging medical therapies. Fortunately, conventional treatments aim to reduce symptoms and slow the disease's progression. This is achieved through the personalized use of scientifically studied medications and natural therapies used as adjuvants alongside conventional therapies, which have shown promise in delaying disease progression and improving quality of life.
    </p>
    
    <!-- Tratamientos Convencionales -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Conventional Treatments
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        The conventional treatment of ALS is based on a multitherapy approach, including:
        <br><br>
        <strong>Riluzole:</strong> Buffers the effects of glutamate accumulation and may prolong survival for a few months.
        <br><br>
        <strong>Edaravone:</strong> A free radical scavenger that can reduce oxidative stress.
        <br><br>
        <strong>Medications:</strong> To relieve painful muscle cramps and reduce excessive salivation.
        <br><br>
        <strong>Stem Cell Therapy and Gene Replacement Therapy:</strong> Emerging treatments aimed at slowing disease progression.
        <br><br>
        <strong>Insulin-like Growth Factor-1 (IGF-1):</strong> Modulates neuronal growth and function, with injections potentially helping to slow disease progression, though results have been mixed. These outcomes can be improved with the use of adjuvants that also minimize the occurrence of fatal diseases and enhance quality of life.
    </p>
    
    <!-- Estrategia de Uso de Adyuvantes -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        Strategy for Use of Adjuvants
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        To enhance the pharmacological actions of drugs used in the prevention, control, and treatment of Amyotrophic Lateral Sclerosis (ALS) while counteracting the side effects and adverse reactions caused by these drugs in the medium and long term, which often contribute to the development of alterations, syndromes, and deadly diseases such as cancer, the scientists and doctors of "PPG NUTRITIONAL," in collaboration with family doctors and specialists from clinics and hospitals, assisted by the "MIS," have defined a personalized therapeutic strategy. This strategy involves developing specific adjuvants that improve the effectiveness of the drugs used at each stage of ALS treatment while reducing the risk of contracting disorders, syndromes, or fatal diseases that decrease the quality of life. These adjuvants consist of unique compositions or combinations of labeled drugs, natural active ingredients, enzyme cofactors, vitamins, trace elements, protein hydrolysates, peptides, probiotics, and other products authorized for human use by the FDA.
    </p>
</div>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias13.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>






<!-- Enfermedades Digestivas -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
    <i class="fas fa-notes-medical" style="margin-right: 10px; color: #1b5e20;"></i>Enfermedades Digestivas
</h2>

<!-- Enfermedad Celíaca -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Enfermedad Celíaca
</h3>

<!-- Resumen -->
<p style="margin-bottom: 20px; text-align: justify;">
    La alergia al trigo, la enfermedad celíaca y la sensibilidad al gluten no celíaca pueden confundirse entre sí, pero en realidad son tres condiciones distintas. Por lo tanto, es crucial entender cómo se diferencian para la prevención, control o tratamiento de estas enfermedades. Igualmente importante es saber cómo cambiar el estilo de vida y el apoyo nutricional basado en compuestos naturales que complementen la dieta libre de gluten. Esta dieta corrige deficiencias nutricionales, promueve la curación intestinal, equilibra el sistema inmunológico y reduce la inflamación crónica. Mantener una dieta libre de gluten de por vida es esencial para las personas con enfermedad celíaca. La dieta libre de gluten también se considera el tratamiento principal para la sensibilidad al gluten no celíaca, aunque algunas investigaciones recomiendan evitar los FODMAPs en lugar del gluten.
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    La enfermedad celíaca es un trastorno inflamatorio del sistema inmunológico que ocurre cuando personas genéticamente susceptibles consumen gluten. El sistema inmunológico daña el revestimiento del intestino delgado, lo que puede causar una mala absorción de nutrientes y síntomas que van desde diarrea y estreñimiento hasta erupciones cutáneas y depresión. Se utilizan una variedad de medicamentos de manera intercambiable para el control y tratamiento de la enfermedad. Se ha demostrado que la mayoría, si no todos, de los medicamentos utilizados tienden a desarrollar enfermedades que van desde una disminución de la calidad de vida hasta causar muertes prematuras prevenibles.
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    Al estudiar los mecanismos biológicos involucrados en el desarrollo de las enfermedades celíacas y los modos de acción de los medicamentos utilizados para controlar estas alteraciones, encontramos la manera de contrarrestar los efectos adversos de los medicamentos a largo plazo y aumentar su efectividad de la siguiente manera:
</p>

<!-- Adyuvantes para prevenir -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    1. Adyuvantes para prevenir el desarrollo, la progresión y el establecimiento de enfermedades relacionadas con la enfermedad celíaca no tratada
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Se confirma que la enfermedad celíaca no tratada puede llevar al desarrollo de osteoporosis, infertilidad, trastornos neurológicos, otras enfermedades autoinmunes y, en algunos casos, cáncer. (Ventura 1999; Fasano, Catassi 2012; Rashtak 2012; Kagnoff 2007; Sapone 2012; Bai 2013; UCMC 2014). 
</p>
<p style="margin-bottom: 20px; text-align: justify;">
    Consecuentemente, hemos desarrollado varias formulaciones (9) que contrarrestan todos los procesos metabólicos y nutricionales asociados con la enfermedad celíaca. Algunos ejemplos se ilustran a continuación.
</p>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/medicamento5.png" alt="Imagen representativa" style="width: 20%; height: auto; border-radius: 8px;">
  </div>

<!-- Enfermedad Celíaca -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    NEUROCARE
</h3>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/medicamento3.png" alt="Imagen representativa" style="width: 20%; height: auto; border-radius: 8px;">
  </div>

<!-- Enfermedad Celíaca -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    HPERCARE
</h3>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/medicamento3.png" alt="Imagen representativa" style="width: 20%; height: auto; border-radius: 8px;">
  </div>

<!-- Enfermedad Celíaca -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    GENACARE
</h3>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/medicamento3.png" alt="Imagen representativa" style="width: 20%; height: auto; border-radius: 8px;">
  </div>

<!-- Enfermedad Celíaca -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    PERICARE
</h3>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/medicamento3.png" alt="Imagen representativa" style="width: 20%; height: auto; border-radius: 8px;">
  </div>

<!-- Enfermedad Celíaca -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    CIDECARE
</h3>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/medicamento3.png" alt="Imagen representativa" style="width: 20%; height: auto; border-radius: 8px;">
  </div>

 <!-- Adyuvantes para mejorar el uso de medicamentos -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    2. Adyuvantes para hacer que el uso de medicamentos sea más efectivo y contrarrestar los efectos adversos y el desarrollo, la progresión y el establecimiento de enfermedades como el cáncer
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Estadísticamente, más del 60% de los pacientes mayores de 35 años que tienen enfermedad celíaca y enfermedades relacionadas debutan con hipertensión arterial. Esta enfermedad suele tratarse con medicamentos de primera línea, incluidos los bloqueadores de los receptores de angiotensina II (particularmente Telmisartán); inhibidores de la enzima convertidora de angiotensina (Benazepril (Lotensin); Captopril; Enalapril (Vasotec); Fosinopril; Lisinopril (Prinivil, Zestril); Moexipril; Perindopril; Quinapril (Accupril)); diuréticos tiazídicos de segunda línea (Clorotiazida (Diuril); Clortalidona; Hidroclorotiazida (Microzide); Indapamida; Metolazona); y de tercera línea: bloqueadores de los canales de calcio (Amlodipino (Norvasc); Diltiazem (Cardizem, Tiazac, etc.); Felodipino; Isradipino; Nicardipino; Nifedipino (Adalat CC, Procardia); Nisoldipino (Sular); Verapamilo (Calan, Verelan)). Para contrarrestar los efectos de algunos de estos medicamentos, se utilizan formulaciones como la descrita a continuación:
</p>

<!-- Nombre de la Formulación -->
<p style="margin-bottom: 20px; text-align: center; font-weight: bold; font-size: 18px; color: #c62828;">
    PERNOCARE
</p>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/medicamento5.png" alt="Imagen representativa" style="width: 20%; height: auto; border-radius: 8px;">
  </div>

<!-- Formulación para neutralizar el dipéptido prolinaglutinina -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    3. Formulación para neutralizar el dipéptido prolinaglutinina que causa permeabilidad intestinal
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Etiológicamente, la permeabilidad del intestino se debe a la predisposición genética de las personas para codificar proteínas y enzimas que actúan desde las microvellosidades intestinales para “neutralizar” los péptidos que el organismo “pierde” la capacidad de hidrolizar, absorber y utilizar en el metabolismo intermedio. Hemos demostrado favorablemente que el uso de formulaciones con ingredientes específicos puede neutralizar estos productos y eliminarlos en las heces.
</p>

<!-- Formulación para Neutralizar FODMAPs -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    4. Formulación para neutralizar FODMAPs que causan sensibilidad al gluten no celíaca
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Etiológicamente, esta enfermedad sugiere que el gluten u otras proteínas en el trigo y los granos relacionados pueden no ser la única causa de la reactividad no celíaca al trigo. En algunas personas, los oligosacáridos, disacáridos, monosacáridos y polioles fermentables (FODMAPs), que son carbohidratos mal absorbidos, pueden contribuir a las reacciones de sensibilidad al trigo en personas sin enfermedad celíaca manifiesta o alergia al trigo. Estos elementos han servido como base para estudiar el estado del arte y desarrollar fórmulas neutralizantes para estos metabolitos, reduciendo así los síntomas que causan al ser eliminados en las heces.
</p>

<!-- Nombre de la Formulación -->
<p style="margin-bottom: 20px; text-align: center; font-weight: bold; font-size: 18px; color: #c62828;">
    NEUTRACARE
</p>

<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/medicamento3.png" alt="Imagen representativa" style="width: 20%; height: auto; border-radius: 8px;">
  </div>


<!-- Úlceras Pépticas -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Úlceras Pépticas
</h4>

<!-- Resumen -->
<p style="margin-bottom: 20px; text-align: justify;">
    Las úlceras pépticas son llagas en el revestimiento del estómago o en la primera parte del intestino delgado, que pueden causar dolor ardiente en la parte superior del abdomen, vómitos, acidez o agruras, aunque a veces no causan ningún síntoma. Las principales causas de las úlceras están relacionadas con el uso inapropiado de medicamentos antiinflamatorios (AINEs) como el ibuprofeno o la infección por la bacteria H. pylori. Dependiendo de las causas, las opciones de tratamiento para las úlceras se basarán en medicamentos y cambios en la dieta y el estilo de vida que se pondrán en práctica para reducir los síntomas, las alteraciones y el riesgo de contraer úlceras debido al consumo de alcohol. Se ha demostrado que las preparaciones a base de ingredientes activos naturales, autorizadas por la FDA, ayudan a erradicar las infecciones por H. pylori, reducen el sangrado gastrointestinal causado por la aspirina y otros trastornos.
</p>

<!-- Tratamiento Convencional -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Tratamiento Convencional
</h4>

<!-- Úlceras Positivas para H. pylori -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 10px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    Úlceras Positivas para H. pylori
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Los antibióticos resultan en una tasa de cura del 70-90%, que dependerá de la genética de las personas y de factores relacionados con la resistencia a los antibióticos. Los inhibidores de la bomba de protones (IBP) bloquean la secreción de ácido en el estómago, permitiendo que las úlceras sanen y aliviando a menudo el dolor; pero debemos tener en cuenta que cuando se utilizan a largo plazo, los IBP están asociados con una amplia gama de efectos secundarios graves, incluyendo enfermedades renales y cardiovasculares. La terapia triple es un tratamiento estándar que combina dos antibióticos y un IBP. El bismuto también puede incluirse para la "terapia cuádruple."
</p>

<!-- Úlceras Negativas para H. pylori -->
<h5 style="font-size: 18px; color: #c62828; margin-bottom: 10px; text-align: left; border-bottom: 1px solid #c62828; padding-bottom: 5px;">
    Úlceras Negativas para H. pylori
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Debe suspenderse el uso de AINEs. En estas situaciones se utilizan antiácidos y medicamentos que reducen la secreción de ácido. El misoprostol (Cytotec) y el sucralfato (Carafate) se usan para ayudar a proteger el revestimiento del estómago de los efectos dañinos de los AINEs en pacientes que deben continuar tomándolos.
</p>

<!-- Estrategia para el uso de Adyuvantes -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Estrategia para el uso de Adyuvantes
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Para contrarrestar los efectos adversos de los medicamentos a largo plazo utilizados en el tratamiento de las úlceras; los científicos y médicos de "PPG NUTRICIONAL" junto con médicos especialistas que, desde sus consultorios de medicina familiar y consultas médicas en clínicas y hospitales con el apoyo de "MIS," encontraron una solución terapéutica personalizada para la prevención, control o tratamiento de las úlceras en aquellos pacientes con alto riesgo de contraer la enfermedad que comienzan a desarrollar síndromes, síntomas o alteraciones; así como para el control, tratamiento o cura de aquellos que ya han desarrollado la enfermedad mediante el uso de adyuvantes o preparados en los que utilizaremos medicamentos, ingredientes activos naturales, cofactores enzimáticos, oligoelementos, hidrolizados de proteínas, péptidos, microorganismos como patógenos y otros productos autorizados para su uso en humanos por la FDA.
</p>

<!-- Referencias -->
<p style="margin-bottom: 20px; text-align: left; font-weight: bold;">
    REFERENCIAS.
</p>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>




<!-- Diverticulosis -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Diverticulosis
</h4>

<!-- Resumen -->
<p style="margin-bottom: 20px; text-align: justify;">
    La presencia de pequeñas bolsas o sacos en la pared del intestino grueso es común con el avance de la edad. Estos sacos se llaman divertículos, y con mayor frecuencia se forman en la parte inferior del intestino grueso, el colon. Existe un grupo de factores que se cree aumentan el riesgo de estas condiciones, así como nueva evidencia que se supone es factible para utilizarse en la remodelación del tratamiento de estas condiciones. Con el uso de preparaciones personalizadas según la etapa y evolución de los pacientes, es posible controlar y prevenir complicaciones.
</p>

<!-- Tratamiento Convencional -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Tratamiento Convencional
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La diverticulosis asintomática no requiere tratamiento. El tratamiento conservador para la diverticulitis no complicada incluye una dieta líquida o baja en residuos y antibióticos orales. En la diverticulitis complicada, puede ser necesaria la hospitalización con líquidos intravenosos, antibióticos o cirugía.
</p>

<!-- Estrategia para el uso de Adyuvantes -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Estrategia para el uso de Adyuvantes
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Para contrarrestar los efectos adversos de los medicamentos a largo plazo utilizados en el tratamiento de la diverticulosis; los científicos y médicos de "PPG NUTRICIONAL" junto con médicos especialistas que, desde sus consultorios de medicina familiar y consultas médicas en clínicas y hospitales con el apoyo de "MIS," lograron definir una estrategia terapéutica personalizada para la prevención, control o tratamiento de la diverticulosis a través del uso de adyuvantes o preparados en los que utilizaremos medicamentos de etiqueta, ingredientes activos naturales, cofactores enzimáticos, oligoelementos, hidrolizados de proteínas, péptidos, microorganismos no patógenos y otros productos autorizados para su uso en humanos por la FDA como materia prima.
</p>

<!-- Referencias -->
<p style="margin-bottom: 20px; text-align: left; font-weight: bold;">
    REFERENCIAS.
</p>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>



<!-- Enfermedad Inflamatoria Intestinal -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Enfermedad Inflamatoria Intestinal
</h4>

<!-- Resumen -->
<p style="margin-bottom: 20px; text-align: justify;">
    La enfermedad inflamatoria intestinal (EII) es un término amplio que describe un conjunto de condiciones que alteran el tracto digestivo, siendo la enfermedad de Crohn y la colitis ulcerosa las más comunes. Los principales objetivos del tratamiento de la EII incluyen controlar la inflamación y corregir las deficiencias vitamínicas. Es importante destacar que la EII puede aumentar el riesgo de cáncer de colon, por lo que aquellos diagnosticados con EII deben someterse a exámenes regulares para la detección de cáncer de colon. Se requieren análisis de sangre para detectar deficiencias nutricionales y monitorear la inflamación y la progresión de la enfermedad. Las terapias médicas convencionales combinadas con una dieta saludable, ejercicios físicos regulares e intervenciones integrativas con ingredientes activos naturales pueden reducir la inflamación crónica y mejorar los resultados asociados con esta enfermedad, ya que pueden modular el sistema inmunológico, disminuir la inflamación, entre otras acciones que pueden ayudar a controlar los síntomas asociados con la EII.
</p>

<!-- Tratamientos Convencionales -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Tratamientos Convencionales
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Medicamentos antiinflamatorios como el ácido 5-aminosalicílico, corticosteroides, inmunosupresores como la azatioprina, ciclosporina y metotrexato; otros medicamentos como el cromoglicato de sodio y la naltrexona, y cirugías para extirpar secciones gravemente dañadas del tracto intestinal.
</p>

<!-- Estrategia para el uso de Adyuvantes -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Estrategia para el uso de Adyuvantes
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Para contrarrestar los efectos adversos de los medicamentos a largo plazo utilizados en el tratamiento de la enfermedad inflamatoria intestinal; los científicos y médicos de "PPG NUTRICIONAL" junto con médicos especialistas que, desde sus consultorios de medicina familiar y consultas médicas en clínicas y hospitales con el apoyo de "MIS," definen una estrategia terapéutica personalizada para la prevención, control o tratamiento de la enfermedad inflamatoria intestinal a través del uso de adyuvantes o preparados en los que utilizaremos como materia prima medicamentos, ingredientes activos naturales, cofactores enzimáticos, oligoelementos, hidrolizados de proteínas, péptidos, microorganismos no patógenos y otros productos autorizados para su uso en humanos por la FDA.
</p>

<!-- Referencias -->
<p style="margin-bottom: 20px; text-align: left; font-weight: bold;">
    REFERENCIAS.
</p>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Síndrome del Intestino Irritable -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Síndrome del Intestino Irritable
</h4>

<!-- Resumen -->
<p style="margin-bottom: 20px; text-align: justify;">
    El síndrome del intestino irritable (SII) se caracteriza por dolor abdominal crónico, hinchazón y episodios variables de diarrea y estreñimiento. Las causas no siempre están claras, pero muchos factores pueden contribuir al SII, que no debe confundirse con la enfermedad inflamatoria intestinal. En un enfoque integral para manejar el SII, los tratamientos convencionales se combinan con intervenciones dietéticas y de estilo de vida, así como con productos basados en ingredientes activos naturales y otros productos que, junto con una dieta recomendada, el control del estrés y la combinación de medicamentos convencionales, pueden ayudar a aliviar los síntomas del SII y mejorar la calidad de vida en general.
</p>

<!-- Tratamientos Médicos Convencionales -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Tratamientos Médicos Convencionales
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Agentes de aumento de volumen como la fibra dietética. Laxantes y ablandadores de heces como Lubiprostona [Amitiza] y polietilenglicol [MiraLAX]); medicamentos antiespasmódicos como Propantelina; antidepresivos serotoninérgicos, ya sea de acción central como Duloxetina [Cymbalta] o de acción local como Alosetrón [Lotronex]); antibióticos para tratar el sobrecrecimiento bacteriano del intestino delgado y probióticos.
</p>

<!-- Estrategia para el uso de Adyuvantes -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Estrategia para el uso de Adyuvantes
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Para contrarrestar los efectos adversos de los medicamentos a largo plazo utilizados en el tratamiento del síndrome del intestino irritable; los científicos y médicos de "PPG NUTRITIONAL" junto con médicos especialistas que, desde sus consultorios de medicina familiar y desde consultas médicas en clínicas y hospitales, fueron apoyados por el "MIS" para encontrar una solución terapéutica personalizada para la prevención, control o tratamiento del síndrome del intestino irritable a través del uso de adyuvantes que se desarrollan a partir de medicamentos de etiqueta, ingredientes activos naturales, cofactores enzimáticos, oligoelementos, hidrolizados de proteínas, péptidos, microorganismos no patógenos y otros productos autorizados para su uso en humanos por la FDA como materia prima.
</p>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Nueva Línea "Proteínas Veganas Biofuncionales" -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Nueva Línea "Proteínas Veganas Biofuncionales"
</h4>

<!-- Ejercicio, Proteínas Personalizadas y Extensión de Vida -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Ejercicio, Proteínas Personalizadas y Extensión de Vida
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Realizar ejercicio físico de manera sistemática reduce el riesgo de enfermedades crónicas, ralentiza el envejecimiento, disminuye la mortalidad y prolonga la vida con mayor calidad que cualquier medicamento. Uno de los principales objetivos del ejercicio físico es mejorar y mantener una alta capacidad cardiorrespiratoria, al menos lo suficiente para regular el metabolismo y activar factores de longevidad en diferentes órganos y tejidos. Los científicos de "PPG NUTRITIONAL" han investigado y desarrollado una forma de maximizar los beneficios de la actividad física, utilizando un enfoque personalizado, mediante el uso de "PROTEÍNAS BIOFUNCIONALES" como integrador y catalizador en el aumento de la actividad cardiorrespiratoria durante el entrenamiento y la actividad física. La experiencia de más de 15 años en la aplicación de "PROTEÍNAS BIOFUNCIONALES" muestra que en todas las personas se puede mejorar y aumentar la capacidad cardiorrespiratoria, hasta en un 30%, realizando constantemente actividad física moderada a intensa y al mismo tiempo aumentar la masa muscular, disminuir el peso corporal, incrementar la resistencia y elasticidad, así como mejorar la memoria y la capacidad mental.
</p>

<!-- Razones para hacer ejercicio de manera sistemática -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Razones para hacer ejercicio de manera sistemática
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La falta de ejercicio físico se considera el cuarto factor de riesgo para la muerte prematura a nivel mundial. La evidencia científica muestra que, independientemente de la edad, el sexo, las enfermedades que sufren las personas y su condición física, el ejercicio físico regular ralentiza la velocidad a la que el cuerpo envejece y reduce el riesgo de cáncer, demencia, osteoporosis, enfermedades cardíacas, accidentes cerebrovasculares, depresión, obesidad, diabetes tipo 2 e hipertensión arterial. El ejercicio es una de las estrategias anti-envejecimiento más poderosas que existen, ya que activa potentemente los factores biológicos clave para regular el metabolismo energético, que es definitivamente lo que determina el proceso de longevidad. Además, se ha demostrado que la actividad física regular apoya la función inmunológica saludable, mejora la función cognitiva, reduce los factores de riesgo cardiovascular, controla la obesidad, disminuye la pérdida muscular relacionada con la edad, el daño articular y otros trastornos óseos y musculares hasta en un 30%. Para lograr estos propósitos, es necesario combinar la actividad física con intervenciones nutricionales "inteligentes" basadas en proteínas convenientemente mezcladas con ingredientes activos naturales de origen vegetal, vitaminas, aminoácidos, lípidos saludables y minerales esenciales que, juntos, maximizan los beneficios para la salud y la longevidad sin que estos se conviertan en sustancias clasificadas dentro de la categoría de dopaje.
</p>

<!-- Actividad Física y Uso de Proteínas Biofuncionales Personalizadas -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Actividad Física y Uso de Proteínas Biofuncionales Personalizadas
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Un programa integral de actividad física incluye ejercicio aeróbico, fortalecimiento muscular y articular, flexibilidad y equilibrio. Sin embargo, en muchas ocasiones las personas llegan a los gimnasios en condiciones físicas que no les permiten asimilar esta estrategia en su forma integral. Por lo tanto, es necesario establecer maniobras dirigidas a perder peso, controlar la obesidad, fortalecer los músculos, aumentar la masa muscular, fortalecer las articulaciones y reducir la inflamación de este tejido, así como minimizar el riesgo de lesiones, entre otros aspectos relacionados con la edad, el sexo y las condiciones de salud de cada persona en particular, con el fin de determinar la forma de entrenamiento y el tipo de apoyo nutricional "inteligente" para mejorar la función cardiovascular y, en consecuencia, la longevidad, la calidad de vida y el control de enfermedades, trastornos y síndromes. De acuerdo con esto, nuestro equipo de científicos ha trabajado en el desarrollo de suplementos nutricionales proteicos "inteligentes" que tienen como objetivo mejorar el metabolismo y activar factores endógenos que favorecen el rendimiento del ejercicio físico y la función cardiovascular en las diferentes fases del entrenamiento por parte de quienes realizan ejercicio físico.
</p>

<!-- Estrategia de desarrollo de proteínas "inteligentes" -->
<p style="margin-bottom: 20px; text-align: justify;">
    La estrategia de desarrollar proteínas "inteligentes" basadas en sistemas de inteligencia medicinal ha permitido desarrollar alrededor de 35 de estas proteínas para fines específicos según las condiciones físicas, alteraciones, síndromes o enfermedades de las personas que han decidido sistemáticamente hacer ejercicio o practicar deportes para entretenerse y mejorar la salud; y también para atletas y practicantes de deportes que tienen diferentes propósitos en el entrenamiento, como aumentar la masa muscular, mejorar la resistencia, aumentar la capacidad cardiorrespiratoria, mejorar la fuerza de contracción muscular, evitar la acumulación de ácido láctico en el músculo, evitar procesos inflamatorios asociados con el entrenamiento y el esfuerzo físico prolongado, entre otros. A continuación, se muestran algunos ejemplos de proteínas:
</p>



<!-- Contenedor de las imágenes organizadas en un grid -->
<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 20px 0;">

  <!-- Imagen 1 -->
  <div>
    <img src="/PPG15.png" alt="Imagen representativa" style="width: 100%; height: auto; border-radius: 8px;">
  </div>

  <!-- Imagen 2 -->
  <div>
    <img src="/PPG14.png" alt="Imagen representativa" style="width: 100%; height: auto; border-radius: 8px;">
  </div>

  <!-- Imagen 3 -->
  <div>
    <img src="/PPG13.png" alt="Imagen representativa" style="width: 100%; height: auto; border-radius: 8px;">
  </div>

  <!-- Imagen 4 -->
  <div>
    <img src="/PPG12.png" alt="Imagen representativa" style="width: 100%; height: auto; border-radius: 8px;">
  </div>

</div>

<!-- Línea Anti-Envejecimiento de Belleza y Cuidado Personal -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Línea Anti-Envejecimiento de Belleza y Cuidado Personal
</h4>

<!-- Resumen de la línea anti-envejecimiento -->
<p style="margin-bottom: 20px; text-align: justify;">
    Los científicos de "PPG NUTRITIONAL" se han basado en los avances más importantes e innovadores en los diferentes campos de la ciencia para generar investigaciones a partir de la información ofrecida por "bibliotecas" electrónicas sobre millones de estructuras químicas previamente estudiadas. Estas estructuras describen propiedades químicas, físicas y biológicas que nuestros científicos utilizan para correlacionar estas propiedades usando sistemas de inteligencia artificial empática para finalmente determinar diferentes acciones tóxicas, farmacológicas y nutricionales, entre otras, como acciones anti-envejecimiento, antioxidantes, antiinflamatorias, antimicrobianas, analgésicas y otras posibles acciones biológicas beneficiosas con un alto nivel de certeza del 100%.
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    Los resultados de décadas de investigación nos permiten mostrar una amplia gama de productos anti-envejecimiento en forma de cremas, sueros, ungüentos, geles, cápsulas, soluciones y emulsiones, entre otros, para uso oral y tópico, que generan una combinación ideal para mantener la belleza de la piel y retrasar el proceso de envejecimiento de los órganos y tejidos internos tanto como lo permitan las potencialidades fisiológicas de las personas.
</p>

<p style="margin-bottom: 20px; text-align: justify;">
    Nuestro secreto mejor guardado radica en nuestra capacidad para usar sistemas de inteligencia medicinal para desarrollar gamas de productos que correspondan a la biología particular de cada persona, grupo étnico y grupo poblacional según las áreas geográficas de origen; así, es posible saber cuáles de los productos podemos elegir de la gran variedad que tenemos para que, en sus diferentes combinaciones, puedan ser utilizados por vía oral y tópica en cada persona según su tipo de piel, cabello, propensión al envejecimiento, los tipos y la calidad de los alimentos que puede consumir y cuáles alimentos eliminar, entre otros factores previamente determinados que permiten que los productos que ofrecemos se conviertan en "inteligentes" según la biología personal y el entorno en el que vive la persona.
</p>

<!-- Crema Protectora y Rejuvenecedora para la Piel del Cuello -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema Protectora y Rejuvenecedora para la Piel del Cuello
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    El cuello es una de las pieles más delicadas de nuestro cuerpo, lo que la hace vulnerable a los signos de envejecimiento y exposición ambiental. Esta fórmula contiene ingredientes activos en células madre vegetales que tienen la capacidad de fortalecer y proteger la piel del cuello de la acción de los rayos ultravioleta, el calor, la fricción con la ropa, etc. Esta crema de la línea "PPG NUTRITIONAL" ayuda a mantener la región del cuello con un aspecto juvenil y radiante. Las células madre ayudan a estimular la síntesis de colágeno e inhiben la degradación de la elastina, protegiendo y fortaleciendo así la vitalidad de esta delicada área desprotegida por el escote.
</p>

<!-- Crema Anti-Envejecimiento para la Noche -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema Anti-Envejecimiento para la Noche
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Nuestros rostros a menudo revelan nuestra edad y el estado de nuestra salud justo después de las horas de trabajo o escuela. Durante la noche, el cuerpo repone energía, restaura el metabolismo y activa hormonas, el sistema inmunológico y repara tejidos. La piel no es la excepción, pero tiene la desventaja de que este órgano está mal perfundido, por lo que le resulta difícil recibir los nutrientes necesarios para su renovación. Para resolver este dilema, desarrollamos una crema de noche basada en ingredientes activos innovadores que, cuando se suministra antes de dormir, tiene la capacidad de proporcionar los nutrientes que la piel necesita para restaurar su salud, frescura y belleza. La evidencia clínica muestra que los ingredientes activos contenidos en el producto reducen los procesos inflamatorios, promueven una respuesta inmune saludable, renuevan las células de la piel y preservan el ADN saludable, lo que reduce la aparición de arrugas y características antiestéticas, haciendo que la piel esté más saludable y presente un aspecto más juvenil.
</p>

<!-- Suero Anti-Envejecimiento Universal -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Suero Anti-Envejecimiento Universal
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Nuestros sueros "PPG NUTRITIONAL" ayudan a mantener una piel hermosa y radiante al reducir la aparición de arrugas, flacidez, decoloración y otros cambios en la piel que aparecen con la edad. Los activos que componen los sueros anti-envejecimiento de nuestra línea mejoran la hidratación, rejuvenecen, firman, tonifican, minimizan la apariencia de líneas finas y arrugas en la piel porque sus activos aumentan la producción de ceramida, elastina y ayudan a retener el colágeno y la humedad de la piel en valores fisiológicos.
</p>

<!-- Exfoliante que Revitaliza y Rejuvenece la Piel Opaca -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Exfoliante que Revitaliza y Rejuvenece la Piel Opaca
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    A medida que envejecemos, la piel tiende a volverse dura y áspera. Estos eventos traen nostalgia a la mayoría de las personas y recuerdos de los días en que su piel era suave y vibrante. Los científicos de "PPG NUTRITIONAL" han trabajado arduamente para contribuir a cambiar los estados de ánimo asociados con estos eventos. Hemos desarrollado un exfoliante que, cuando se aplica, deja una capa de piel joven y de aspecto suave. Al usar esta fórmula, la persona siente cómo refresca todo su cuerpo, mientras restaura y ofrece un aspecto juvenil a la piel opaca, ya que elimina la capa dura de células muertas en la superficie que se visualiza al restaurar y rejuvenecer este integumento, mientras apoya el crecimiento celular con un aumento significativo en los niveles de colágeno, elastina y ceramida que suavizan, igualan el color, hidratan y calman la piel exfoliada con ingredientes activos que brindan una sensación de placer.
</p>

<!-- Crema Facial y Corporal Rejuvenecedora y Anti-Envejecimiento -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema Facial y Corporal Rejuvenecedora y Anti-Envejecimiento
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Los científicos de "PPG NUTRITIONAL" han demostrado la eficacia de la combinación de ingredientes activos contenidos en células madre vegetales para ralentizar el proceso de envejecimiento de la piel facial, ya que promueven la producción natural de colágeno y elastina, ayudando a suavizar la apariencia de arrugas, enrojecimiento y textura áspera porque ayuda a la piel a defenderse contra la exposición ambiental mientras la hidrata, y estimula la producción de tejido conectivo de la matriz extracelular y la producción de moléculas que retienen agua que generan una piel facial más firme con una apariencia más juvenil y suave en la que las arrugas y la textura áspera desaparecen.
</p>

<!-- Suero Rejuvenecedor y Anti-Envejecimiento para el Cuero Cabelludo -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Suero Rejuvenecedor y Anti-Envejecimiento para el Cuero Cabelludo
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La fórmula está hecha con células madre de plantas que contienen aceites secos reconocidos por su poder refrescante para el cabello. Los aceites son fácilmente absorbidos por la piel del cuero cabelludo sin dejar residuos en este tejido. El compuesto está especialmente dirigido a las células de la piel del cuero cabelludo porque puede ayudar a revivir el cabello opaco, cansado y quebradizo con los activos de la mezcla de aceites. El efecto neto se traduce en un mejor crecimiento del cabello, previene la muerte de los folículos pilosos y es excelente para inhibir los radicales libres, reteniendo la humedad para un brillo sedoso y proporcionando un volumen y textura óptimos al cabello.
</p>

<!-- Crema que Estimula la Producción de Colágeno y Rejuvenece la Piel Corporal -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema que Estimula la Producción de Colágeno y Rejuvenece la Piel Corporal
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La formulación ha sido diseñada teniendo en cuenta que el colágeno es esencial para la firmeza, cohesión y resistencia de la piel. La radiación solar, la mala nutrición y los factores ambientales contribuyen al agotamiento del colágeno y otros componentes de la piel. Teniendo en cuenta este antecedente, el compuesto se desarrolló a partir de células madre vegetales que proporcionan aminoácidos esenciales para la síntesis de proteínas, incluido el colágeno, que promueven una piel de aspecto juvenil. Consideramos que no es necesario administrar colágeno hidrolizado en la piel porque esto, más allá de funcionar como cualquier proteína, no está compuesto por aminoácidos esenciales y tiene una masa molecular que no permite que sea absorbido directamente por la piel, lo que significa que después de promover la salud de este órgano, lo que logra es dificultar el metabolismo de la piel.
</p>

<!-- Crema Rejuvenecedora de Manos -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema Rejuvenecedora de Manos
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    El clima y el entorno pueden ser duros para nuestra piel, especialmente la piel fina de nuestras manos. Esta formulación respaldada por la ciencia combina células madre vegetales con activos de la naturaleza para mantener la piel radiante y saludable mediante la hidratación, suavización y rejuvenecimiento de la piel. Restaura y mantiene la piel de aspecto juvenil con una fórmula sinérgica con esta fórmula innovadora que ayuda a aclarar las manchas oscuras, minimizar la apariencia de arrugas, rejuvenecer el tono de la piel e hidratar la piel seca. Rejuvenece y protege la piel deshidratada, reduce la apariencia de manchas oscuras, líneas finas y piel áspera, y nutre para un tono y brillo de piel saludables. Definitivamente ayuda a mantener la piel rejuvenecida y protegida.
</p>

<!-- Cápsulas Suaves Reestructurantes y Rejuvenecedoras -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Cápsulas Suaves Reestructurantes y Rejuvenecedoras
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    El envejecimiento es un evento natural del cual nadie escapa. Hoy en día, se conocen al menos siete (7) pilares relacionados con la aceleración o restricción de este proceso, entre los que destacan la integridad molecular del ADN, ARN, proteínas y lípidos; la modulación epigenética mediante el control de factores externos, dieta y estilos de vida; la modulación de la proteostasis; el control de las respuestas inflamatorias; la gestión del estrés; la preservación de la función de las células madre y el mantenimiento del metabolismo celular. Afortunadamente, se ha estudiado un número significativo de compuestos presentes en células madre vegetales que, al trabajar en sinergia, activan la mayoría de las vías anti-envejecimiento relacionadas con la expresión génica y la modulación de la función con la consiguiente disminución del proceso de envejecimiento.
</p>

<!-- Cápsulas para Controlar la Senescencia y el Envejecimiento -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Cápsulas para Controlar la Senescencia y el Envejecimiento
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La senescencia celular es una parte natural del proceso de envejecimiento en la que las células ya no funcionan de manera óptima. Las células senescentes pueden acumularse con el tiempo, afectando la función diaria de las células sanas que las rodean. Los compuestos senolíticos apuntan selectivamente a las células senescentes. Estos compuestos tienen amplios beneficios para la salud, apoyando la división celular saludable y una respuesta inflamatoria robusta. Nuevas investigaciones indican que los activos presentes en células madre vegetales pueden ser especialmente útiles para reducir la carga de células senescentes y combatir el envejecimiento.
</p>

<!-- Cápsulas Activadoras de Energía Mitocondrial -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Cápsulas Activadoras de Energía Mitocondrial
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Mantener una mitocondria saludable es sinónimo de buena salud celular, de órganos, tejidos y prolongación de la vida. Esta fórmula, compuesta por una mezcla de ingredientes activos presentes en células madre vegetales, promueve la función mitocondrial saludable, inhibe la glicación celular, sobrecarga la producción de energía celular y promueve la generación de nuevas mitocondrias, fortaleciendo así los mecanismos que minimizan el proceso de envejecimiento.
</p>

<!-- Cápsulas Moduladoras Epigenéticas -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Cápsulas Moduladoras Epigenéticas
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Los nutrientes y los alimentos determinan las funciones de los órganos y tejidos. Un régimen de nutrición adecuado o la suplementación de compuestos nutricionales saludables ayudan a inhibir procesos proliferativos e inflamatorios que apoyan la salud de todo el cuerpo, así como a mantener la respuesta post-inflamatoria saludable del cuerpo. Los científicos de "PPG NUTRITIONAL" han desarrollado una fórmula basada en células madre vegetales que promueve una respuesta post-inflamatoria saludable mediada por el control de genes que responden a señales epigenéticas.
</p>

<!-- Cápsulas con Ingredientes que Imitan la Restricción Calórica -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Cápsulas con Ingredientes que Imitan la Restricción Calórica
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Se ha demostrado que la restricción calórica es una de las formas de lograr longevidad. Los estudios de cribado de alto rendimiento desarrollados por nosotros utilizando inteligencia artificial, respaldados por sistemas de inteligencia medicinal, han demostrado que más de 200 productos son capaces de inhibir los procesos biológicos involucrados en el desarrollo, establecimiento y progresión del envejecimiento a nivel celular porque son capaces de imitar la restricción calórica. Los científicos de "PPG NUTRITIONAL" han encontrado ingredientes activos en células madre vegetales que son capaces de imitar la restricción calórica y, en consecuencia, ralentizar el proceso de envejecimiento de la piel, los tejidos y los órganos internos.
</p>

<!-- Suero que Previene el Desarrollo de Arrugas -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Suero que Previene el Desarrollo de Arrugas
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Ayudando a promover el soporte estructural del colágeno de la piel y mantener la hidratación. La formulación ayuda a reafirmar, levantar y contornear la apariencia de la piel. La clave de su poder restaurador es una alta concentración de células madre vegetales que estimulan la síntesis de colágeno y la revitalización del ácido hialurónico. Logra todos estos efectos porque ayuda a activar la estructura celular, apoya la producción de colágeno, aumenta la hidratación de la piel y suaviza la piel para darle una apariencia más juvenil.
</p>

<!-- Suero para Promover la Apariencia Juvenil de la Piel -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Suero para Promover la Apariencia Juvenil de la Piel
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Diseñado en torno a una mezcla perfecta de células madre de frutas que combinan la longevidad de almacenamiento de los ingredientes activos que poseen estas células vegetales con las propiedades emolientes que protegen, revitalizan y preservan un brillo juvenil para una piel más suave, de aspecto juvenil y flexible.
</p>


<!-- Crema Protectora contra el Estrés Ambiental -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Crema Protectora contra el Estrés Ambiental
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Elaborada a partir de una mezcla de células madre vegetales, esta crema tiene la capacidad de regenerar continuamente las células a lo largo de la vida. Esta fórmula ayuda a reponer las células de la piel, protegiéndola de los factores de estrés ambiental y promoviendo una piel más fuerte y de aspecto más saludable, ya que te protege de los peligros ambientales comunes.
</p>

<!-- Crema Revitalizante y Rejuvenecedora para la Piel -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema Revitalizante y Rejuvenecedora para la Piel
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La humedad de la piel está garantizada por la capa externa de este órgano. Sin embargo, la exposición ambiental con el tiempo puede debilitar esa barrera, dejando atrás una piel áspera y desigual con signos de envejecimiento. Los científicos de "PPG NUTRITIONAL" han desarrollado una fórmula innovadora que combina ingredientes activos presentes en células madre vegetales que estimulan la renovación de la barrera externa de la piel y apoyan la capacidad de la piel para mantener su humedad superficial restaurativa, lo que ayuda a suavizar la apariencia de líneas finas y arrugas para dar una apariencia de piel más vibrante y juvenil.
</p>

<!-- Suero Facial Hidratante y Rejuvenecedor -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Suero Facial Hidratante y Rejuvenecedor
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La formulación facial combina células madre vegetales que rejuvenecen y protegen la piel deshidratada, reducen la apariencia de manchas oscuras, líneas finas y piel áspera, y nutren para un tono y brillo de piel saludable. Definitivamente ayuda a mantener la piel rejuvenecida y protegida.
</p>

<!-- Crema Rejuvenecedora de Manos -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema Rejuvenecedora de Manos
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    El clima y el entorno pueden ser duros para nuestra piel, especialmente la piel fina de nuestras manos. Esta formulación respaldada por la ciencia combina células madre vegetales con activos de la naturaleza para mantener la piel radiante y saludable mediante la hidratación, suavización y rejuvenecimiento de la piel. Restaura y mantiene la piel de aspecto juvenil con una fórmula sinérgica que ayuda a aclarar las manchas oscuras, minimizar la apariencia de arrugas, rejuvenecer el tono de la piel e hidratar la piel seca.
</p>

<!-- Crema Facial y Corporal Rejuvenecedora y Anti-Envejecimiento -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema Facial y Corporal Rejuvenecedora y Anti-Envejecimiento
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Los científicos de "PPG NUTRITIONAL" han demostrado la eficacia de la combinación de ingredientes activos contenidos en células madre vegetales para ralentizar el proceso de envejecimiento de la piel facial, ya que promueven la producción natural de colágeno y elastina, ayudando a suavizar la apariencia de arrugas, enrojecimiento y textura áspera. Esto ayuda a la piel a defenderse contra la exposición ambiental mientras la hidrata y estimula la producción de tejido conectivo de la matriz extracelular y la producción de moléculas que retienen agua, generando una piel facial más firme con una apariencia más juvenil y suave, en la que desaparecen las arrugas y la textura áspera.
</p>

<!-- Protectores Solares de Nueva Generación -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Protectores Solares de Nueva Generación
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La producción de vitamina D disminuye cada año en todo el mundo, mientras que la deficiencia de esta vitamina contribuye a la entrada de virus en el cuerpo, incluyendo el COVID-19, y también al desarrollo de diversas enfermedades como el cáncer de piel, que han aumentado en tiempos recientes debido a la acción de los rayos solares. A esta situación se suma el hecho de que los filtros y protectores solares, que se utilizan actualmente, al bloquear la síntesis de vitamina D, contribuyen al desarrollo de enfermedades, alteraciones hormonales en mujeres y, contrario a lo que se cree, no ayudan a detener el proceso de envejecimiento de la piel causado por la exposición al sol. Para resolver este problema, los científicos de "PPG NUTRITIONAL" han desarrollado una gama de productos eficientes, llamados "potters", que actúan como filtros solares sin interferir en la síntesis de vitamina D. Lo interesante de esta línea es que no se diferenciará por factor de protección, como 15, 30, 50, 60, etc., lo cual crea confusión entre los consumidores. Esta gama de productos está diseñada para exponer de manera segura cualquier tipo de piel por al menos 12 horas para cualquier grupo étnico, tipo o fototipo del consumidor. Estos productos serán completamente veganos, no contendrán hormonas femeninas en sus fórmulas ni componentes de origen animal, y no causarán daño a la salud humana ni al medio ambiente, siendo 100% veganos.
</p>

<!-- Apoyo para las Pestañas -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Apoyo para las Pestañas
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    "PPG NUTRITIONAL" ha desarrollado una fórmula que combina las propiedades biológicas de un grupo de células madre de plantas específicas para aumentar el crecimiento y el grosor de las pestañas, haciéndolas más largas.
</p>

<!-- Crema para Rejuvenecer y Levantar los Ojos -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema para Rejuvenecer y Levantar los Ojos
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La piel gruesa de los párpados es sensible a una variedad de factores ambientales y a los inevitables signos de envejecimiento. La Crema para Levantamiento de Ojos de "PPG NUTRITIONAL" contiene activos de células madre vegetales que apoyan el envejecimiento saludable de la piel alrededor de los ojos, mientras la hidratan, nutren y reafirmante la delicada piel alrededor de los ojos. Los ingredientes activos promueven la formación de colágeno y elastina alrededor de los ojos, apoyan las proteínas existentes en la piel y ayudan a minimizar la apariencia del envejecimiento.
</p>

<!-- DERACIR -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    DERACIR
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Spray de uso oral especialmente diseñado para que los ingredientes activos contenidos en las células madre de plantas presentes en la formulación se absorban de manera más efectiva a través de la vía sublingual, logrando que las acciones regenerativas de colágeno, elastina y ceramida se mejoren y sean más efectivas.
</p>

<!-- NERACIR -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    NERACIR
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Spray de uso oral especialmente diseñado para que los ingredientes activos contenidos en las células madre de plantas presentes en la formulación se absorban de manera más efectiva a través de la vía sublingual, resultando en acciones antiinflamatorias, control de radicales libres y regulación de genes involucrados en la codificación de proteínas, mejorando la función cognitiva y participando en la prevención, retraso y control de enfermedades neurodegenerativas como el Alzheimer, demencia y Parkinson.
</p>

<!-- CERACIR -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    CERACIR
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Spray de uso oral especialmente diseñado para que los ingredientes activos contenidos en las células madre de plantas presentes en la formulación se absorban de manera más efectiva a través de la vía sublingual, resultando en el restablecimiento de los procesos enzimáticos y otros compuestos endógenos que regulan el proceso de metabolismo de proteínas y, en consecuencia, disminuyen el proceso de envejecimiento y el desarrollo de enfermedades crónicas no transmisibles.
</p>

<!-- TERACIR -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    TERACIR
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Crema de uso tópico de absorción intradérmica basada en ingredientes activos combinados con células madre de plantas que restaura y ofrece un aspecto juvenil a la piel opaca porque elimina la capa dura de células muertas en la superficie, que se visualiza al restaurar y rejuvenecer la piel, mientras apoya el crecimiento celular con un aumento significativo en los niveles de colágeno, elastina y ceramida que suavizan, igualan el color, hidratan y calman la piel exfoliada con ingredientes activos que brindan una sensación de placer.
</p>

<!-- PARACIR -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    PARACIR
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Crema de uso tópico de absorción intradérmica elaborada a partir de una mezcla de células madre vegetales que tiene la capacidad de regenerar continuamente las células a lo largo de la vida. Esta fórmula ayuda a reponer las células de la piel, protegiéndola de los factores de estrés ambiental y promoviendo una piel más fuerte y de aspecto más saludable al protegerla de los peligros ambientales comunes.
</p>

<!-- Crema Anti-Envejecimiento para el Día -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema Anti-Envejecimiento para el Día
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    Durante el día estamos muy expuestos a agentes ambientales como el frío, el calor, la sequedad, la humedad, los rayos ultravioleta, la contaminación y otros que actúan directamente sobre la piel causando un deterioro sistemático y profundo. Para contrarrestar estos efectos, hemos diseñado una crema de día que promueve la hidratación, fomenta la renovación celular, ayuda a regenerar el colágeno, inhibe los radicales libres y protege la piel de la radiación mientras promueve la protección de un ADN saludable.
</p>

<!-- Suero Reafirmante para Rejuvenecer debajo de los Ojos -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Suero Reafirmante para Rejuvenecer debajo de los Ojos
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La piel debajo de los ojos es altamente susceptible al impacto visible del envejecimiento, como arrugas, líneas finas y bolsas. El suero para ojos "FONS IUVENIS", diseñado para su uso debajo de los ojos, con ingredientes activos contenidos en células madre de plantas, ayuda a combatir estos efectos. Este suero para ojos combate los efectos del tiempo y la exposición en la delicada capa de piel debajo de los ojos, reduciendo la apariencia de arrugas en un 15% después de solo un mes de uso.
</p>

<!-- Apoyo para las Pestañas -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Apoyo para las Pestañas
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    "PPG NUTRITIONAL" ha desarrollado una fórmula que combina las propiedades biológicas de un grupo de células madre de plantas específicas para aumentar el crecimiento y el grosor de las pestañas, haciéndolas más largas.
</p>

<!-- Crema para Rejuvenecer y Levantar los Ojos -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Crema para Rejuvenecer y Levantar los Ojos
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La piel gruesa de los párpados es sensible a una variedad de factores ambientales y a los inevitables signos de envejecimiento. La Crema para Levantamiento de Ojos de "PPG NUTRITIONAL" contiene activos de células madre vegetales que apoyan el envejecimiento saludable de la piel alrededor de los ojos, mientras la hidratan, nutren y reafirmante la delicada piel alrededor de los ojos. Los ingredientes activos promueven la formación de colágeno y elastina alrededor de los ojos, apoyan las proteínas existentes en la piel y ayudan a minimizar la apariencia del envejecimiento.
</p>

<!-- Protectores Solares de Nueva Generación -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Protectores Solares de Nueva Generación
</h4>
<p style="margin-bottom: 20px; text-align: justify;">
    La producción de vitamina D disminuye cada año en todo el mundo, mientras que la deficiencia de esta vitamina contribuye a la entrada de virus en el cuerpo, incluyendo el COVID-19, y también al desarrollo de diversas enfermedades como el cáncer de piel, que han aumentado en tiempos recientes debido a la acción de los rayos solares. A esta situación se suma el hecho de que los filtros y protectores solares, que se utilizan actualmente, al bloquear la síntesis de vitamina D, contribuyen al desarrollo de enfermedades, alteraciones hormonales en mujeres y, contrario a lo que se cree, no ayudan a detener el proceso de envejecimiento de la piel causado por la exposición al sol. Para resolver este problema, los científicos de "PPG NUTRITIONAL" han desarrollado una gama de productos eficientes, llamados "potters", que actúan como filtros solares sin interferir en la síntesis de vitamina D. Lo interesante de esta línea es que no se diferenciará por factor de protección, como 15, 30, 50, 60, etc., lo cual crea confusión entre los consumidores. Esta gama de productos está diseñada para exponer de manera segura cualquier tipo de piel por al menos 12 horas para cualquier grupo étnico, tipo o fototipo del consumidor. Estos productos serán completamente veganos, no contendrán hormonas femeninas en sus fórmulas ni componentes de origen animal, y no causarán daño a la salud humana ni al medio ambiente, siendo 100% veganos.
</p>

<!-- Referencias -->
<p style="margin-bottom: 20px; text-align: left; font-weight: bold;">
    REFERENCIAS.
</p>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<!-- Otros Productos con Presencia en el Mercado -->
<h4 style="font-size: 20px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    Otros Productos con Presencia en el Mercado
</h4>

<!-- Deep Block -->
<h4 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    Deep Block
</h4>


<!-- Sección para cargar una foto a todo lo largo después del primer enunciado -->
  <div style="margin: 20px 0;">
    <img src="/PPG16.png" alt="Imagen representativa" style="width: 40%; height: auto; border-radius: 8px;">
  </div>


<!-- Base para su Uso “Deep Block” -->
<h5 style="font-size: 18px; color: #1b5e20; margin-bottom: 10px; text-align: left; border-bottom: 1px solid #1b5e20; padding-bottom: 5px;">
    Base para su Uso “Deep Block”
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    La investigación científica sobre el origen, microambiente, ecosistema, características biológicas, incidencia y recurrencia del virus que causa el "COVID-19" en diferentes especies animales fue clave para combinar ingredientes activos completamente naturales (registrados con las autoridades sanitarias) que permitieron desarrollar la formulación "Deep Block". Esta formulación tiene la capacidad de ayudar y, al mismo tiempo, fortalecer la actividad del sistema inmunológico; bloquear la puerta de entrada de virus, bacterias y ácaros desde la boca, ojos y nariz hacia el tracto respiratorio inferior, previniendo así que la enfermedad progrese a etapas graves y críticas. Además de controlar la entrada del virus en el cuerpo, "Deep Block" ayuda a minimizar la tormenta de citoquinas, la inflamación, el desarrollo de mediadores proinflamatorios y la eliminación de radicales libres (capacidad antioxidante) que, en conjunto, previenen la progresión de alteraciones generadas por la actividad del sistema inmunológico; todo lo cual disminuye la progresión de la enfermedad hacia etapas graves, críticas y las muertes debidas al proceso llamado coagulación intravascular diseminada. Finalmente, los pacientes que se enfermaron con Covid-19 se benefician porque reducirá el proceso inflamatorio del corazón, cerebro y otros órganos hasta la erradicación total de este proceso.
</p>

<!-- Base Científica para el Desarrollo “Deep Block” -->
<h5 style="font-size: 18px; color: #1b5e20; margin-bottom: 10px; text-align: left; border-bottom: 1px solid #1b5e20; padding-bottom: 5px;">
    Base Científica para el Desarrollo “Deep Block”
</h5>
<p style="margin-bottom: 20px; text-align: justify;">
    Basándonos en el conocimiento de los receptores a los que se une el virus que causa el Covid-19, realizamos modelado 3D, con la ayuda de sistemas de inteligencia artificial, sobre el dominio proteico al que se une Sar-CoV-2 e identificamos los compuestos naturales que podrían interferir o bloquear esta unión. Pero nuestra investigación fue más allá porque profundizamos en comprender el mecanismo patogénico evolutivo de la enfermedad hacia las etapas graves, críticas y que causan la muerte en los pacientes infectados. Saber que la tormenta de citoquinas, los procesos inflamatorios y la coagulación intravascular diseminada son la causa de la progresión de las alteraciones patológicas fue suficiente para seleccionar y modelar, con la ayuda de sistemas de inteligencia medicinal, cuáles de los ingredientes activos naturales junto con otros nutrientes eran capaces de prevenir que estos eventos patológicos ocurrieran fuera del control de los mecanismos biológicos que normalmente se activan en los organismos humanos.
</p>


<!-- Referencias -->
<p style="margin-bottom: 20px; text-align: left; font-weight: bold;">
    REFERENCIAS.
</p>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias</span>
   </a>
</div>

<div style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">

    <!-- Profesionales y Científicos -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        15. PROFESIONALES Y CIENTÍFICOS
    </h3> 
</div>

<!-- Perfil de los Investigadores Principales -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  15.1. Perfil de los Investigadores Principales
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  El equipo de científicos es liderado por el <strong>Prof. Remigio R. Cortés Rodríguez, PhD</strong>, quien cuenta con una carrera de más de 30 años, coordinando investigaciones científicas con la participación de más de 50 científicos experimentados. Ha desarrollado e implementado patentes y procedimientos para la creación de antibióticos, vacunas, suplementos nutricionales, alimentos inteligentes, cosméticos y otros productos terapéuticos que actualmente se comercializan a nivel mundial. Los científicos, médicos y especialistas que conforman su equipo multidisciplinario garantizan la ejecución completa de todos los procesos relacionados con el desarrollo de productos terapéuticos y alimentos inteligentes.
</p>

<!-- Currículum del Prof. Dr. Remigio R. Cortés Rodríguez -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  15.1.1 Currículum Vitae.
</h3>

<!-- Currículum del Prof. Dr. Remigio R. Cortés Rodríguez -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
 Currículum Prof. Dr. Remigio R. Cortés Rodríguez
</h3>

<p style="margin-bottom: 18px; text-align: justify;">
  <strong>E-mail:</strong> remicor6210@gmail.com; cremigio@ppgsmart-therapeutics.com<br>
  <strong>Phone:</strong> +1 786-344-9120
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Prof. Dr. Remigio R. Cortés Rodríguez, PhD</strong>, es actualmente el presidente de <span style="color: #000;">“PPG NUTRITIONAL”</span> en Florida, Estados Unidos. Durante más de 30 años ha coordinado investigaciones científicas con la participación de más de 50 doctores en ciencias de diversas especialidades de países como Bélgica, Brasil, Holanda, España, Estados Unidos, Rusia, Cuba, México, Portugal, Canadá y Alemania, entre otros. Ha publicado más de 1000 artículos en revistas científicas de alto impacto y ha recibido múltiples premios y reconocimientos internacionales. Ha dirigido programas de diploma, maestría y doctorado para el desarrollo de medicamentos, alimentos, nutracéuticos y otros productos de interés económico. Es parte de un selecto grupo de científicos que han desarrollado nuevos antibióticos, vacunas y otros medicamentos únicos en el mundo, contando con más de 100 publicaciones, 60 cursos de formación y múltiples patentes.
</p>

<!-- Titulos Profesionales -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  I. Títulos Profesionales
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Doctor en Ciencias con Especialidad en Farmacología y Toxicología.</li>
  <li>Maestría en Ciencias en Toxicología.</li>
  <li>Diploma en Tratamientos Corporales Intensivos.</li>
  <li>Diploma en Salud y Calidad de Vida.</li>
  <li>Diploma en Medicina Natural y Tradicional.</li>
  <li>Diploma en Productos Naturales.</li>
  <li>Diploma en Farmacología Clínica.</li>
  <li>Diploma en Gestión de la Calidad.</li>
  <li>Especialista en Terapia Clínica Antidótica.</li>
</ul>

<!-- Historia Laboral -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  II. Historia Laboral
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>CEO “ANTIAGE GENOME INNOVATION CONSORTIUM CORPORATION. Miami, FL, USA.</li>
  <li>CEO “PPG NUTRITIONAL” Miami, FL, USA.</li>
  <li>CEO Laboratorio de Diagnóstico por Inteligencia Artificial. México.</li>
  <li>Director de la División de Biotecnología y Miembro del Consejo Directivo "The Wexxon Group". Florida, USA.</li>
  <li>Director de Investigación y Desarrollo de Medicamentos. CALAS. República Dominicana.</li>
  <li>Director de la Unidad de Investigación en Toxicología para el Desarrollo de Medicamentos, Biofuncionales, Productos Naturales y Ecotoxicología. Universidad Médica. Villa Clara. Cuba.</li>
  <li>Director del Centro Regional de Toxicovigilancia. Cuba.</li>
  <li>Jefe del Departamento de Toxicología. Centro de Bioactivos Químicos. Facultad de Farmacia. Universidad Central de Las Villas. Cuba.</li>
  <li>Jefe de la División Biomédica. Centro de Bioactivos Químicos. Universidad Central de Las Villas. Cuba.</li>
  <li>Profesor e investigador a tiempo completo. División Biomédica, Centro de Bioactivos Químicos. Facultad de Farmacia. Universidad Central de Las Villas. Cuba.</li>
</ul>

<!-- Experiencia Docente -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  III. Experiencia Docente
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  El Prof. Dr. Cortés Rodríguez es profesor acreditado y reconocido en varias de las universidades más importantes de América Latina, como la Universidad Central de Las Villas en Cuba, la Universidad de La Habana en Cuba, la Universidad Médica de Villa Clara en Cuba, la Universidad Nacional Autónoma de México, la Universidad Autónoma de Baja California en México, la Universidad Nacional de Colombia, la Universidad Nacional de Nicaragua, la Universidad Católica de Guayaquil en Ecuador, la Universidad de Guayaquil en Ecuador, la Universidad de Cuenca en Ecuador, la Universidad de Sao Paulo en Brasil, la Universidad de Mogis Das Cruces en Brasil, y el Instituto de Investigación del Cáncer en Rusia. Cuenta con más de 28 años de experiencia como docente en pregrado y posgrado.
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Pregrado:</strong><br>
  Ha impartido, como profesor principal, las siguientes asignaturas:
  <ul>
    <li>Fisiología</li>
    <li>Bioquímica</li>
    <li>Toxicología</li>
    <li>Farmacología</li>
  </ul>
</p>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Posgrado:</strong><br>
  Ha impartido varios cursos de formación orientados a mejorar la competencia académica y profesional de los profesionales de la salud pública y del desarrollo de medicamentos, tales como:
  <ul>
    <li>Estrategias y Regulaciones para el Desarrollo de Medicamentos y otros Productos Terapéuticos.</li>
    <li>Regulación y Seguridad de Medicamentos patentados, genéricos, naturales y otros productos terapéuticos.</li>
    <li>Terapia Antidótica para intoxicaciones causadas por fármacos, plantas, animales, insecticidas, pesticidas, y otros productos.</li>
    <li>Uso Racional de Medicamentos.</li>
    <li>Uso Racional de Productos Naturales como Suplementos Nutricionales para Deportistas de Alto Rendimiento.</li>
    <li>Nutrición "Inteligente" en Enfermedades Crónicas No Transmisibles.</li>
    <li>Coordinador de Diplomas en desarrollo de productos naturales.</li>
    <li>Coordinador del Diploma en uso racional de Cosmecéuticos.</li>
    <li>Coordinador del Diploma en Tratamientos Corporales Intensivos.</li>
    <li>Coordinador del Diploma en Ecotoxicología.</li>
    <li>Biofuncionales para el tratamiento de cáncer, diabetes, obesidad, enfermedades cerebrovasculares, cardiovasculares y otras patologías.</li>
    <li>Uso Racional de Medicamentos y Biofuncionales en Enfermedades Crónicas Degenerativas.</li>
    <li>Coordinador de programas de capacitación para médicos y otros profesionales de la salud, en el sector Turismo, sobre Tratamientos Corporales Intensivos.</li>
  </ul>
</p>


<!-- Cursos Recibidos -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  IV. Cursos Recibidos
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Más de 60 cursos de formación y posgrado, entre los cuales destacan los siguientes:
</p>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Gestión de proyectos de investigación y desarrollo de ciclo completo. Cuba.</li>
  <li>Evaluación de Medicamentos con Potencialidades Carcinogénicas. Italia.</li>
  <li>Tecnología farmacéutica de medicamentos. Cuba.</li>
  <li>Tecnología de cosméticos. Cuba.</li>
  <li>Tecnología de nutracéuticos. Cuba.</li>
  <li>Sistemas Operativos de Computación. Cuba.</li>
  <li>Inteligencia Artificial enfocada en el desarrollo de medicamentos. España.</li>
  <li>Bioestadística. España.</li>
  <li>Bioseguridad. Cuba.</li>
  <li>Certificación y Acreditación de Laboratorios. Cuba.</li>
  <li>Gestión y Aseguramiento de la Calidad. Cuba.</li>
  <li>Gestión y Aseguramiento de la Calidad. España.</li>
  <li>Interacciones Medicamentosas. Cuba.</li>
  <li>Metodología para la evaluación y desarrollo de nuevos medicamentos. Cuba.</li>
  <li>Estudios de Mercado de Productos Farmacéuticos. Cuba.</li>
  <li>Mercadeo de productos farmacéuticos. Cuba.</li>
  <li>Administración de empresas farmacéuticas. México.</li>
  <li>Diseño, Concepción, Redacción, Gestión y Administración de Proyectos. Cuba.</li>
  <li>Ecotoxicología. Cuba.</li>
  <li>Genotoxicidad. Cuba.</li>
  <li>Genómica avanzada. Cuba.</li>
  <li>Proteómica. Cuba.</li>
  <li>Nanotecnología (desarrollo de nuevos productos). Cuba.</li>
  <li>Gestión ambiental. Cuba.</li>
  <li>Gestión, Organización y Administración de Eventos Científicos. Cuba.</li>
  <li>Nutrición artificial pre y postoperatoria. España.</li>
  <li>Terapia Antidótica. Cuba.</li>
  <li>Inmunología. Alemania.</li>
  <li>Evaluación Transgénica. Bélgica.</li>
  <li>Terapias Biofuncionales en enfermedades no contagiosas. Cuba.</li>
  <li>Medicina natural y tradicional. Cuba.</li>
  <li>Fundamentos y aplicación de la medicina complementaria. Cuba.</li>
  <li>Acupuntura. Cuba.</li>
  <li>Reflexoterapia. Cuba.</li>
  <li>Apiterapia. Cuba.</li>
  <li>Auriculoterapia. Cuba.</li>
  <li>Masaje terapéutico. Cuba.</li>
  <li>Tratamientos terapéuticos corporales. Cuba.</li>
  <li>Imagenología aplicada a la medicina. Cuba.</li>
</ul>

<!-- Idiomas -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  V. Idiomas
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Español</li>
  <li>Ruso</li>
  <li>Inglés</li>
</ul>

<!-- Colaboración Internacional -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  VI. Colaboración Internacional
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Universidad de Aguascalientes. México.</li>
  <li>Universidad Complutense de Madrid. España.</li>
  <li>Instituto Biomédico del Sur. México.</li>
  <li>Universidad Nacional de Nicaragua. Nicaragua.</li>
  <li>Universidad Nacional de Colombia (UNAL). Colombia.</li>
  <li>Sociedad de Químicos Cosméticos. México.</li>
  <li>Sociedad de Químicos Cosméticos. Colombia.</li>
  <li>Universidad Autónoma de Baja California. México.</li>
  <li>Universidad de Salta. Argentina.</li>
  <li>Universidad Austral de Chile. Chile.</li>
  <li>Universidad Católica de Costa Rica. Costa Rica.</li>
  <li>Universidad Nacional Autónoma de México (UNAM). México.</li>
  <li>Grupo Empresarial GASA. S.A. México.</li>
  <li>Laboratorios Farmacéuticos NAFAR. México.</li>
  <li>Universidad Popular de Nicaragua. Nicaragua.</li>
  <li>York Medical. Canadá.</li>
  <li>Phicsa Medical. México.</li>
  <li>CREEKS. República Dominicana.</li>
  <li>Universidad Católica de Santiago de Guayaquil. Ecuador.</li>
  <li>Universidad de Guayaquil. Ecuador.</li>
  <li>Universidad de Manabí. Ecuador.</li>
  <li>Universidad de Cuenca. Ecuador.</li>
  <li>Compañía Farmacéutica Pharmala. Guatemala.</li>
  <li>Agencia Reguladora LexPharma. Rusia.</li>
  <li>Instituto Ruso para la Investigación del Cáncer. Rusia.</li>
  <li>Universidad de Mogis das Cruzes. Brasil.</li>
  <li>Universidad de Campinas. Brasil.</li>
</ul>

<!-- Otros Aspectos Relevantes -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  VII. Otros Aspectos Relevantes
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <ul>
    <li>Desarrollo de Sistemas de Inteligencia Médica para el pronóstico y la sugerencia de protocolos para la prevención, control, tratamiento y cura de enfermedades, síndromes y trastornos.</li>
    <li>Desarrollo de laboratorios de diagnóstico clínico mediante inteligencia artificial.</li>
    <li>Posee decenas de patentes y marcas registradas para productos farmacéuticos y cosmecéuticos.</li>
    <li>Miembro de grupos de autores que poseen las PATENTES de nuevos medicamentos registrados y en uso en Cuba y otros países.</li>
    <li>Experiencia en el diseño, montaje y acreditación de laboratorios, y la posterior transferencia tecnológica de productos farmacéuticos para las industrias farmacéutica, alimentaria y cosmecéutica.</li>
    <li>Experiencia en el diseño, montaje y acreditación de laboratorios para la evaluación preclínica de nuevos medicamentos.</li>
    <li>Ha participado como ponente en más de 70 eventos nacionales e internacionales.</li>
    <li>Ha presidido comités organizadores de varios eventos nacionales e internacionales.</li>
    <li>Ha publicado más de 100 artículos científicos relacionados con su trabajo científico y de investigación, varios de ellos en revistas indexadas.</li>
    <li>Publicación de libros, monografías y materiales científicos y didácticos.</li>
    <li>Ha tutelado más de 70 tesis de grado, proyectos de tesis de licenciatura y maestría.</li>
    <li>Ha servido como tutor para varias tesis doctorales.</li>
    <li>Ha presidido tribunales para otorgar diferentes categorías científicas y de investigación.</li>
    <li>Fundador y presidente de la Sociedad Cubana de Toxicología en la Región Central de Cuba.</li>
    <li>Fundador y Presidente de la Sociedad Cubana de Cosmetología.</li>
    <li>Miembro del Consejo Asesor de Toxicología de la República de Cuba.</li>
    <li>Miembro de tribunales de acreditación de carreras.</li>
    <li>Miembro de tribunales para la acreditación de laboratorios de ensayo, farmacéuticos y de investigación.</li>
    <li>Consultor de gestión de proyectos para el Ministerio de Ciencia, Tecnología y Medio Ambiente de la República de Cuba.</li>
    <li>Acreedor de varias distinciones nacionales e internacionales como:
      <ul>
        <li>2 Premios Anuales al Mérito Científico-Técnico: Otorgados por el Ministro de Educación Superior de Cuba.</li>
        <li>Premio Especial, otorgado por el Ministro de Ciencia, Tecnología y Medio Ambiente de Cuba, al trabajo de mayor relevancia científica en el país (Cuba).</li>
        <li>Docenas de Premios en FOROS Nacionales de Ciencia y Tecnología en Cuba.</li>
        <li>Premio otorgado por la Academia de Ciencias de Cuba al trabajo científico de mayor relevancia nacional.</li>
        <li>Premios Especiales Otorgados por la Academia de Ciencias de Cuba por trabajos de relevancia científica durante los años 1992, 1993, 1996, 1998, 1999, 2000 y hasta 2009.</li>
        <li>Premio al mejor trabajo científico presentado en el Congreso Internacional de Cosmética celebrado en 2002 en Cartagena de Indias, Colombia.</li>
        <li>Medalla XXX Aniversario de la Asociación Latinoamericana de Toxicología. Este reconocimiento se otorga a las personalidades que han contribuido al desarrollo de la toxicología en América Latina y el mundo.</li>
        <li>Medalla de Oro de la Organización Mundial de la Propiedad Intelectual (OMPI) por el desarrollo de una patente para un medicamento (antibiótico) único en el mundo por sus características.</li>
      </ul>
    </li>
  </ul>
</p>


<!-- Nota -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
  Nota
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Este documento es un resumen del currículo extendido, el cual está en nuestra posesión en su forma original, firmado por las autoridades e instituciones que certifican su veracidad bajo la firma de un notario público, y fue entregado a las autoridades de inmigración de los Estados Unidos para la residencia permanente en USA.
</p>

<!-- Datos del Ejecutivo -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Prof. Ervelio Eliseo Olazábal Manso, PhD
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Gerente Ejecutivo</strong><br>
  <strong>PPG NUTRITIONAL</strong>
</p>

<!-- Títulos Profesionales -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Títulos Profesionales
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Doctor en Ciencias en Microbiología y Parasitología.</li>
  <li>Especialista en Epizootiología.</li>
  <li>Diploma en Gestión Empresarial.</li>
  <li>Diploma en Productos Naturales.</li>
  <li>Diploma en Ecotoxicología.</li>
</ul>

<!-- Carrera Profesional -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Carrera Profesional
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Director en la empresa cubano-canadiense CBQYM Inc., dedicada al desarrollo de proyectos farmacéuticos humanos.</li>
  <li>Vicedecano de Investigación en la Facultad de Ciencias Agropecuarias, UCLV.</li>
  <li>Subdirector de Investigación en el Centro de Bioactivos Químicos.</li>
  <li>Jefe del Departamento de Enfermedades Infecciosas y Parasitarias.</li>
  <li>Director de la División Biológica del CBQ.</li>
  <li>Investigador Principal en proyectos de investigación antiparasitarios.</li>
  <li>Jefe del Laboratorio de Investigación Parasitológica.</li>
  <li>Responsable del programa farmacéutico humano y veterinario.</li>
  <li>Coordinador Principal de Servicios Científicos y Técnicos de Ecotoxicología en el CBQ.</li>
  <li>Miembro de la Junta Nacional de la Industria Biotecnológica y Farmacéutica.</li>
  <li>Miembro del Grupo Nacional de Expertos del Programa Científico de la Academia de Ciencias de Cuba.</li>
  <li>Miembro del comité editorial de una revista científica.</li>
  <li>Miembro del Comité Asesor Provincial del Ministerio de Ciencia y Tecnología.</li>
  <li>Miembro del Consejo Científico del Centro de Bioactivos Químicos.</li>
</ul>

<!-- Experiencia Docente -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Experiencia Docente
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Más de 39 años de experiencia docente nacional e internacional.
</p>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li><strong>Pregrado:</strong> Ha impartido clases a más de 1,000 estudiantes y ha contribuido al desarrollo de programas de estudio en Medicina Veterinaria, Farmacia y Biología, desarrollando planes de estudio y materiales teóricos y prácticos para las siguientes asignaturas:
    <ul>
      <li>Parasitología</li>
      <li>Farmacología</li>
      <li>Toxicología General</li>
      <li>Ecotoxicología</li>
      <li>Modelos Biológicos Experimentales</li>
      <li>Zoología</li>
      <li>Bioseguridad</li>
    </ul>
  </li>
  <li><strong>Posgrado:</strong> Coordinó y/o participó en varios cursos de formación orientados a mejorar las competencias académicas, científicas y profesionales de graduados en Farmacia, Medicina Humana y Veterinaria, Química, Agronomía, Biología, Bioquímica, y otros campos relacionados con la salud pública y ocupacional, a través de programas como:
    <ul>
      <li>Doctorados</li>
      <li>Maestrías</li>
      <li>Diplomas</li>
      <li>Cursos de formación en:
        <ul>
          <li>Bioseguridad</li>
          <li>Metodología de la Investigación</li>
          <li>Control Antiparasitario</li>
          <li>Biofuncionales</li>
          <li>Farmacología</li>
          <li>Toxicología Alimentaria</li>
          <li>Gestión de Proyectos</li>
          <li>Modelos Biológicos</li>
        </ul>
      </li>
    </ul>
  </li>
</ul>

<!-- Estudios de Postgrado Realizados -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Estudios de Postgrado Realizados
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Participó en más de 40 cursos de posgrado y programas de formación, incluyendo:
</p>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Farmacología, Cuba.</li>
  <li>Moscas y Enfermedades Hemoparasitarias, México.</li>
  <li>Procesamiento de Muestras de Tejidos Parasitarios para Microscopía Electrónica, México.</li>
  <li>Aseguramiento de la Calidad en el Desarrollo de Medicamentos, Cuba.</li>
  <li>Gestión Internacional de Proyectos, Ministerio de Inversión Extranjera, Cuba.</li>
  <li>Evaluación de Fasciolicidas, México.</li>
  <li>Biofuncionales, México.</li>
  <li>Formulación de Microemulsiones, México.</li>
  <li>Evaluación Antigiardiasis, Cuba.</li>
  <li>Marketing, Cuba.</li>
  <li>Estudios de Mercado, Cuba.</li>
  <li>Técnicas de Negociación, Cuba.</li>
  <li>Metodologías para el Desarrollo de Nuevos Medicamentos, Cuba.</li>
  <li>Bioseguridad en Instalaciones de Investigación, Cuba.</li>
  <li>Ecotoxicología, Cuba.</li>
</ul>

<!-- Idiomas Hablados -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Idiomas Hablados
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Español (Nativo)</li>
  <li>Inglés</li>
</ul>

<!-- Colaboración Internacional y Roles de Asesoría -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Colaboración Internacional y Roles de Asesoría
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Universidad de Leipzig (Alemania).</li>
  <li>Universidad Humboldt (Alemania).</li>
  <li>Instituto de Helmintología (Checoslovaquia).</li>
  <li>York Medical Company, Canadá.</li>
  <li>Phicsa Médica, México.</li>
  <li>Universidad Nacional Autónoma de México, Ciudad de México.</li>
  <li>Universidad Autónoma de Baja California, México.</li>
  <li>Compañía Farmacéutica GASA, México.</li>
  <li>Compañía Farmacéutica GAMSA, México.</li>
  <li>Laboratorio Farmacéutico LIFERPAL, México.</li>
  <li>Compañía Farmacéutica NAFAR, México.</li>
  <li>Universidad Técnica de Manabí, Ecuador.</li>
  <li>Universidad de Cuenca, Ecuador.</li>
</ul>

<!-- Distinciones Nacionales e Internacionales Más Relevantes -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Distinciones Nacionales e Internacionales Más Relevantes
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Ha recibido 36 distinciones científicas o profesionales por sus contribuciones destacadas en la ciencia y la enseñanza, incluyendo:
</p>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Medalla Pepito Tey otorgada por el Consejo de Estado de Cuba.</li>
  <li>Medalla por la Educación Cubana otorgada por el Ministro de Educación.</li>
  <li>Premio Especial del Ministro de Ciencia y Tecnología.</li>
  <li>Premio Nacional de la Academia de Ciencias de Cuba.</li>
  <li>Premio Nacional en el Campo Biomédico.</li>
  <li>Otros premios y reconocimientos nacionales, provinciales y universitarios.</li>
</ul>

<!-- Otros Intereses -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Otros Intereses
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Miembro del equipo de autores de tres nuevos medicamentos patentados registrados en Cuba y varias patentes en diversos países desarrollados, tanto para uso veterinario como humano.</li>
  <li>Autor de patentes y marcas registradas para productos farmacéuticos y cosméticos.</li>
  <li>Autor de registros para productos farmacéuticos y cosméticos.</li>
  <li>Experiencia en el diseño, montaje y acreditación de laboratorios, y la posterior transferencia tecnológica de productos naturales para las industrias farmacéutica, alimentaria y cosmética.</li>
  <li>Experiencia en el diseño, montaje y acreditación de laboratorios para la evaluación preclínica de nuevos medicamentos y cosméticos.</li>
  <li>Experiencia en el diseño, montaje y acreditación de laboratorios de ecotoxicología.</li>
  <li>Ha participado como ponente en más de 75 eventos nacionales e internacionales.</li>
  <li>Ha presidido comités organizadores de varios eventos nacionales e internacionales.</li>
  <li>Participó en la prestación de servicios de pruebas ecotoxicológicas.</li>
  <li>Ha publicado más de 60 monografías y artículos científicos relacionados con sus actividades científicas e investigativas.</li>
  <li>Supervisó más de 65 tesis de grado, diploma y maestría.</li>
  <li>Supervisor de tesis doctorales.</li>
  <li>Ha presidido varios tribunales para otorgar diversas categorías científicas e investigativas.</li>
  <li>Miembro del comité fundador de la Sociedad Cubana de Cosmetología.</li>
  <li>Miembro de juntas nacionales y comités científicos para el desarrollo de medicamentos humanos y veterinarios.</li>
</ul>

<!-- Información del Equipo Profesional -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
  Información del Equipo Profesional
</h3>

<!-- Prof. Dr. LUIS O MAROTO-MARTÍN -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Prof. Dr. LUIS O MAROTO-MARTÍN
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  <strong>Socio - Gerente</strong><br>
  PRODUCCIONES BIOLÓGICAS SOST-MAR, S. R. L., República Dominicana<br>
  <strong>Asesor Científico</strong><br>
  TIOTE-Biotech, S.R.L., República Dominicana
</p>

<!-- Títulos Profesionales -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Títulos Profesionales
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>PhD en Ciencias Biológicas Aplicadas [Microbiología y Biología Molecular], Suma Cum Laude, 2006.</li>
  <li>Diploma en Apiterapia, 2021.</li>
  <li>Diploma en Epizootiología, 1998.</li>
  <li>Doctor en Medicina Veterinaria (DVM), 1996.</li>
</ul>

<!-- Carrera Profesional -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Carrera Profesional
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Miembro del Consejo Científico en el Instituto de Biotecnología de Plantas, 2007-2015.</li>
  <li>Miembro del Consejo Científico de la Facultad de Ciencias Agropecuarias y Animales. Cuba, UCLV, 2006-2015.</li>
  <li>Miembro del Consejo Científico del Centro de Bioactivos Químicos. Cuba, UCLV, 2010-2015.</li>
</ul>

<!-- Experiencia Docente -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Experiencia Docente
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Más de 25 años de experiencia docente en Cuba (1996-2015) y República Dominicana (2016-2024).
</p>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li><strong>Pregrado:</strong> Ha impartido clases a más de 1,500 estudiantes y ha contribuido al desarrollo de programas de estudio en Medicina Veterinaria, Biología, Biotecnología y Bioquímica, con amplia experiencia en el desarrollo de planes de estudio y materiales teóricos y prácticos para las siguientes asignaturas:
    <ul>
      <li>Microbiología</li>
      <li>Parasitología</li>
      <li>Zoología</li>
      <li>Bioseguridad</li>
      <li>Biología del Desarrollo</li>
    </ul>
  </li>
  <li><strong>Posgrado:</strong> Coordinó y/o participó en varios cursos de formación orientados a mejorar las competencias académicas, científicas y profesionales de graduados en Medicina Humana y Veterinaria, Agronomía, Biología y Biotecnología. Las principales actividades se centraron en:
    <ul>
      <li>Programas Doctorales</li>
      <li>Programas de Maestría</li>
      <li>Cursos de formación en:
        <ul>
          <li>Medicina Veterinaria Avanzada</li>
          <li>Microbiología</li>
          <li>Bioseguridad</li>
          <li>Metodología de la Investigación</li>
          <li>Microbiología de Alimentos</li>
          <li>Química de Proteínas y Proteómica</li>
        </ul>
      </li>
    </ul>
  </li>
</ul>

<!-- Estudios de Postgrado Realizados -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Estudios de Postgrado Realizados
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Participó en más de 20 cursos de posgrado y programas de formación, incluyendo:
</p>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>2022-2023 - Curso – Diseño Instruccional en Aprendizaje Virtual. INTEC-UNED, República Dominicana.</li>
  <li>11/2019 – 09/2020 - Curso-Taller "Liderazgo Integral en la Gestión Universitaria", PUCMM, República Dominicana.</li>
  <li>09/2017 – 02/2018 - Diploma en Gestión Docente. INTEC, República Dominicana.</li>
  <li>09/16 – 09/23/2017 - Taller de Metodologías Activas. INTEC, República Dominicana.</li>
  <li>03/01 – 03/07/2015 - Desarrollo de un Programa Regional de Maestría en Producción Porcina y Seguridad Alimentaria en Países del Caribe. Universidad ISA, República Dominicana.</li>
  <li>09/01 – 09/08/2014 - Desarrollo de un Programa Regional de Maestría en Producción Porcina y Seguridad Alimentaria en Países del Caribe. Universidad de Leipzig (Leipzig Universität), Alemania.</li>
  <li>02/2010 - Inmunología. UCLV, Cuba (impartido por el Prof. B.M. Goodderis, UGent, Bélgica).</li>
  <li>10/29/2005 - Proteínas, estudios y aplicación en biociencia. UCLV, Cuba.</li>
  <li>01/21/2005 - Bioseguridad, bioética y aspectos legales de la Biotecnología. IBP, UCLV, Cuba.</li>
  <li>05/24-05/28/2004 - Curso internacional de posgrado "Enseñanza e Investigación en Ciencias Vegetales y Animales". UCLV, Cuba.</li>
  <li>03/04 – 03/25/2004 - Inglés con fines académicos (curso impartido por el Prof. Michael Whitburn de ITO, VUB). Vrije Universiteit Brussel, Bélgica.</li>
  <li>11/2000 – 02/2001 - Entrenamiento en técnicas de cromatografía para purificación de proteínas. SPRO, IMOL. Vrije Universiteit Brussel, Bélgica.</li>
  <li>09/07/ - 09/18/1998 - Biología Molecular. UCLV, Cuba.</li>
  <li>02/20/1998 - Ingeniería genética. UCLV, Cuba.</li>
  <li>02/20/1998 - Principales enfermedades del cerdo, UCLV, Cuba.</li>
  <li>1997 - Ingeniería genética básica. UCLV, Cuba.</li>
  <li>09/21/1997 – 07/08/1998 - Diploma en Epidemiología Veterinaria. UCLV, Cuba.</li>
</ul>

<!-- Idiomas -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Idiomas
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Español (Nativo)</li>
  <li>Inglés (Intermedio)</li>
  <li>Francés (Básico)</li>
</ul>

<!-- Distinciones Nacionales e Internacionales Más Relevantes -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Distinciones Nacionales e Internacionales Más Relevantes
</h3>
<p style="margin-bottom: 18px; text-align: justify;">
  Distinciones científicas o profesionales por contribuciones destacadas en la ciencia y la enseñanza, incluyendo:
</p>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>2023 – Reconocimiento como "Coordinador de Grandes Ligas", Instituto Tecnológico de Santo Domingo (INTEC).</li>
  <li>2020 – Reconocimiento como "Profesor con Alto Índice de Eficiencia Docente 2019-2020", Instituto Tecnológico de Santo Domingo (INTEC).</li>
  <li>2018 – Investigador Adjunto, Carrera de Investigadores de la República Dominicana.</li>
  <li>2018 – Reconocimiento como "Profesor con Alto Índice de Eficiencia Docente 2017-2018", Instituto Tecnológico de Santo Domingo (INTEC).</li>
  <li>2013 – Premio Nacional de la Academia de Ciencias de Cuba. "Contribuciones a la Epidemiología de Enteropatógenos en lechones jóvenes en Cuba".</li>
  <li>2012 – Premio Provincial de la Academia de Ciencias de Cuba. "Contribuciones a la Epidemiología de Enteropatógenos en lechones jóvenes en Cuba".</li>
  <li>2009 – Profesor Titular en la Universidad Central "Marta Abreu" de Las Villas. Cuba.</li>
  <li>2003 – Premio Provincial de la Academia de Ciencias de Cuba. "Uso de Lectinas".</li>
  <li>1997 – Premio Anual al Mérito Científico-Técnico. Cuba.</li>
</ul>

<!-- Información Adicional -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Información Adicional
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Involucrado en más de 10 Proyectos de Investigación, con amplia experiencia en la Gestión de Proyectos de Investigación.</li>
  <li>Participación activa en Congresos Nacionales e Internacionales, Simposios y Reuniones Científicas.</li>
  <li>Experiencia como supervisor y promotor de más de 40 tesis de grado, diploma y maestría.</li>
  <li>Supervisor de tesis doctorales.</li>
  <li>Presidente y miembro del jurado en varios tribunales en eventos científicos.</li>
  <li>2023 – Editor en Jefe de la Revista CAC, INTEC, República Dominicana.</li>
  <li>2023 – Miembro Individual de la IAFP (International Association of Food Protection, ID: 65673).</li>
  <li>2023 – Miembro Individual de la American Association for the Advancement of Science. [Member/Customer Number: 60505754]</li>
  <li>2022 – Miembro Individual de la AOAC (ID: 185518).</li>
  <li>2022 – Miembro de la American Society for Microbiology (ID: 2003179981).</li>
  <li>2006-2015 - Miembro de la Comisión Nacional para la Carrera de Biología en Cuba.</li>
  <li>2007-2015 - Miembro del Consejo Científico en el Instituto de Biotecnología de Plantas (IBP, UCLV. Cuba).</li>
  <li>2007-2015 - Miembro del Consejo Científico en el Centro de Compuestos Bioactivos (CBQ, UCLV).</li>
  <li>2007-2015 - Jefe del Nodo Científico de Estudios Biológicos Aplicados en UCLV.</li>
  <li>2008-2015 - Miembro del Comité Asesor Provincial para el Ministerio de Ciencia y Tecnología en el Área de Ciencias Agropecuarias y Animales. Cuba, UCLV.</li>
  <li>2008-2015 - Miembro del Consejo Científico en la Facultad de Ciencias Agropecuarias y Animales (FCA, UCLV).</li>
  <li>2009-2015 - Miembro de la Comisión de Expertos en Ciencias Básicas en UCLV-CITMA.</li>
</ul>


<!-- Publicaciones Principales -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
  Publicaciones Principales
</h3>
<ul style="margin-bottom: 18px; text-align: justify;">
  <li>Maroto-Martín, L. O. (2024). Editorial. <em>Ciencia, Ambiente y Clima</em>, 7(1), 3-5. <a href="https://doi.org/10.22206/cac.2024.v7i1.3211">https://doi.org/10.22206/cac.2024.v7i1.3211</a>.</li>
  <li>Ramos Abreu, M., Maroto-Martín, L. O., Franco F., E., De Francisco, L. E. (2024). Bioprospección de lectinas en plantas de la familia Rubiaceae endémicas de la República Dominicana. <em>Ciencia, Ambiente y Clima</em>, 7(1), 99-122. <a href="https://doi.org/10.22206/cac.2024.v7i1.3177">https://doi.org/10.22206/cac.2024.v7i1.3177</a>.</li>
  <li>Maroto-Martín, L. O. (2023). Editorial. <em>Ciencia, Ambiente y Clima</em>, 6(2), 3-6. <a href="https://doi.org/10.22206/cac.2023.v6i2.3023">https://doi.org/10.22206/cac.2023.v6i2.3023</a>.</li>
  <li>Bonnelly, R., Calderon, V. V., Ortiz, I., Ovando, A., Pinales, C., Lara, W., Mateo-Perez, S. E., Cárdenas-Alegía, O., Ramos, R. T., Rodríguez-Rodríguez, Y., Maroto-Martín, L. O., Franco De Los Santos, E. (2023). Comparison of Two Bacterial Characterization Techniques for the Genomic Analysis of River Microbiomes. <em>Applied Microbiology</em>, 3(3), 1037–1045. MDPI AG. <a href="http://dx.doi.org/10.3390/applmicrobiol3030071">http://dx.doi.org/10.3390/applmicrobiol3030071</a>.</li>
  <li>Bonnelly, R., Queiroz Cavalcante, A. L., Calderon, V. V., Baraúna, R. A., Jucá Ramos, R. T., Rodríguez-Rodríguez, Y., De Francisco, L. E. R., Maroto-Martín, L.O., Perdomo, O.P., Franco De Los Santos, E.F. (2023). Beta-Lactam Susceptibility Profiles of Bacteria Isolated from the Ozama River in Santo Domingo, Dominican Republic. <em>Sustainability</em>, 15(6), 5109. MDPI AG. <a href="http://dx.doi.org/10.3390/su15065109">http://dx.doi.org/10.3390/su15065109</a>.</li>
  <li>Paneca, G. V., Maroto-Martin LO, & Beltrán, Y. H. (2015). Intestinal glycosilation and its association with host-pathogen interaction. [Glicosilación intestinal y su relación con la interacción hospedero-patógeno.] <em>InfoCiencia</em>, 19(1), 76-84.</li>
  <li>Martínez Medina, S., Collado, R., Barbón, R., Rodríguez, Pérez, M., Tejeda, M., Rojas, L., Daniels, D., Roque, B., Torres, D., Maroto-Martín, L.O., Vitlloch, A., Gómez-Kosky, R. (2015) Novel explant for somatic embryogenesis in Sorghum bicolor (L.) Mohen. <em>Plant Biotechnology</em>, 15(3), 163 - 175, julio - septiembre, 2015, ISSN 2074-8647, RNPS: 2154 (versión electrónica).</li>
  <li>de la Fé Rodríguez, P.Y., Cruz Muñoz, E., Maroto-Martín, L.O., Godderis B.M., Cox, E., Butaye, P. (2014) Contributions to the Epidemiology of Enteropathogens of young pigs in Cuba. <em>Yearly Magazine of the Sciences Academy of Cuba</em>, 4(2). <a href="http://www.revistaccuba.cu/index.php/acc/article/viewFile/210/167">http://www.revistaccuba.cu/index.php/acc/article/viewFile/210/167</a>. ISBN 50878979.</li>
  <li>de la Fé Rodríguez P.Y., Maroto-Martin L.O., Muñoz E.C., Imberechts H., Butaye P, Goddeeris BM, Cox E. (2013). Several enteropathogens are circulating in suckling and newly weaned piglets suffering from diarrhoea in the province of Villa Clara, Cuba. <em>Trop Anim Health Prod</em>, 45(2), 435-40.</li>
  <li>de la Fé Rodríguez PY, Kiiru JN, Maroto-Martin LO, Muñoz EC, Butaye P, Cox E, Goddeeris BM. (2012) Characterization and clonal grouping of pathogenic Escherichia coli isolated from intestinal contents of diarrheic piglets in Villa Clara province, Cuba, according to their antibiotic resistance and ERIC-PCR profiles. <em>Vet Microbiol</em>, 154(3-4), 425-8.</li>
  <li>Váldes-Paneca G.R., Maroto-Martin LO, Cruz-Muños E., de La Fé Rodríguez PY, Hernández-Beltrán Y. (2012) Binding to intestinal brush-border: Tool to evaluate intestinal glycosylation. <em>Cuban Rev. Quim.</em>, 24(1).</li>
  <li>de la Fé Rodríguez PY, Coddens A, Del Fava E, Cortiñas Abrahantes J, Shkedy Z, Maroto-Martin LO, Cruz Muñoz E, Duchateau L, Cox E, Goddeeris BM. (2011) High prevalence of F4+ and F18+ Escherichia coli in Cuban piggeries as determined by serological survey. <em>Tropical Animal Health and Production</em>, 43, 937-46.</li>
  <li>Maroto-Martín LO, Muñoz, E. C., de Cupere, F., van Driessche, E., Echemendia Blanco, D., Rodríguez, J. M. M., Beeckmans, S. (2010) Bacterial contamination of boar semen affects the litter size. <em>Anim Reprod Sci</em>, 120(1-4), 95-104.</li>
  <li>Lazo, L., Cruz, E., Machado, J. M., Maroto-Martín, L.O., Manso, M. J., De Cupere, F., Sanchez, J. (2006). Obtaining polyclonal antisera and study of fimbriae as colonization factors in E. coli strains that cause diarrhea in creeds. <em>Rev. Salud Anim</em>, 27(2), 73 – 79.</li>
  <li>Alba Gómez, L.O., Hernández Breto, G., Silveira Prado, E.A., Cruz Muñoz, E., Maroto Martín, L.O. (2005). Finding of a vaginal leucorrhea of non-inflammatory character in bovine females I. Macroscopic and microscopic examination. <em>Veterinary Electronic Magazine REDVET</em>, VI(9). <a href="http://www.veterinaria.org/revistas/redvet/n101005.html">http://www.veterinaria.org/revistas/redvet/n101005.html</a>.</li>
  <li>Alba Gómez, L.O., Segredo Cañizare, E., Silveira Prado, E.A., Cruz Muñoz, E., Maroto Martín, L.O. (2005). Finding of a vaginal leucorrhea of non-inflammatory character in bovine females II. Vaginal and uterine microbiological examination. <em>Veterinary Electronic Magazine REDVET</em>, VI(10). <a href="http://www.veterinaria.org/revistas/redvet/n101005.html">http://www.veterinaria.org/revistas/redvet/n101005.html</a>.</li>
  <li>Alba Gómez, L.O., Casañas Suárez, H., Silveira Prado, E.A., Cruz Muñoz, E., Maroto Martín, L.O. (2005). Finding of a vaginal leucorrhea of non-inflammatory character in bovine females III. Clinical characteristics and fertility. <em>Veterinary Electronic Magazine REDVET</em>, VI(10). <a href="http://www.veterinaria.org/revistas/redvet/n101005.html">http://www.veterinaria.org/revistas/redvet/n101005.html</a>.</li>
  <li>Lazo, L., Hernández, L., Cruz, E., Maroto-Martín, L.O., Molina, .R., Manso M. J., y Rodríguez, A. (2005). Epidemiologic considerations about the behavior of the porcine enteric Colibacillosis in Villa Clara province. <em>Rev. Salud Anim</em>, 27(2), 129-132.</li>
</ul>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/referencias2.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Referencias Extra</span>
   </a>
</div>


<!-- Información Personal -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-id-badge" style="margin-right: 10px; color: #c62828;"></i>1. Información Personal
</h2>
<p style="margin-bottom: 20px; text-align: justify;">
    <strong>Nombre y Apellidos:</strong> MARÍA AURORA BARRIOS ÁLVAREZ<br>
    <strong>Fecha de Nacimiento:</strong> 1ro de Mayo de 1950<br>
    <strong>Lugar:</strong> Provincia Santiago de Cuba<br>
    <strong>Ciudadanía:</strong> Cubana<br>
    <strong>Estado Civil:</strong> Casada<br>
    <strong>Profesión:</strong> Lic. en Ciencias Farmacéuticas (1974)<br>
    <strong>Grado Científico:</strong> Doctor en Ciencias Farmacéuticas (PhD) (1997), Universidad de La Habana<br>
    <strong>Categoría Docente:</strong> Profesor Titular, Universidad de La Habana (2006)<br>
    Profesor Consultante, Universidad de La Habana (2011)<br>
    Labora en la Educación Superior desde 1983.
</p>
<!-- Estudios en Enseñanza Superior -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: center; border-bottom: 2px solid #ef6c00; padding-bottom: 10px;">
    <i class="fas fa-graduation-cap" style="margin-right: 10px; color: #ef6c00;"></i>2. Estudios en Enseñanza Superior
</h2>
<p style="margin-bottom: 20px; text-align: justify;">
    Escuela de Bioquímica Farmacéutica, Facultad de Ciencias, Universidad de La Habana (1969-1974).
</p>

<!-- Actividad Laboral -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
    <i class="fas fa-briefcase" style="margin-right: 10px; color: #1b5e20;"></i>3. Actividad Laboral
</h2>

<!-- Tabla 3.1: Actividad Laboral -->
<table style="width:100%; border-collapse: collapse; margin: 20px 0;">
    <caption style="caption-side: bottom; font-weight: bold;">Tabla 3.1: Actividad Laboral</caption>
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Centro</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Fecha</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Actividad desarrollada</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Empresa de Producción de Biológicos “Carlos J. Finlay”</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1974-1983</td>
            <td style="border: 1px solid #ddd; padding: 8px;">
                <ul style="margin: 0; padding-left: 20px;">
                    <li>Jefe de los laboratorios de Adsorción, Mezcla y Llenado. (Dpto de Vac. Bacterianas)</li>
                    <li>Jefe del laboratorio de Purificación de Antígenos. (Dpto de Vac. Bacterianas)</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;" rowspan="2">Facultad de Farmacia y Alimentos de la UH</td>
            <td style="border: 1px solid #ddd; padding: 8px;">1983-1991</td>
            <td style="border: 1px solid #ddd; padding: 8px;">
                <ul style="margin: 0; padding-left: 20px;">
                    <li>Profesora de Tecnología Farmacéutica.</li>
                    <li>Instructor, 1983. Asistente, 1987.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">1991-actual</td>
            <td style="border: 1px solid #ddd; padding: 8px;">
                <ul style="margin: 0; padding-left: 20px;">
                    <li>Jefe del Departamento de Tecnología y Control de Medicamentos, 1998-abril 2010</li>
                    <li>Profesora Auxiliar, 1998. Profesora Titular, 2006</li>
                    <li>Profesora principal de Tec. Farmacéutica III, 1990</li>
                    <li>Jefe de disciplina de Tec. Farmacéutica, 1996-actual</li>
                    <li>Miembro del Consejo de dirección IFAL, 1998-2010</li>
                    <li>Miembro del Comité Académico de Maestría, 1994-actual</li>
                    <li>Miembro del Comité Académico del Doctorado de Tecnología y Control de Medicamentos</li>
                    <li>Coordinadora del Diplomado en Tecnología Farmacéutica</li>
                    <li>Miembro del Consejo Científico, 1998-actualidad</li>
                    <li>Miembro de Tribunales de recategorización (Categorías docentes) (MES)</li>
                    <li>Experto de la Junta de Acreditación Nacional (JAN)</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>

<!-- Cursos de Postgrado Recibidos -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-book" style="margin-right: 10px; color: #c62828;"></i>4. Cursos de Postgrado Recibidos
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Análisis de aminoácidos - 1975</li>
    <li>Inmunología Básica - 1977</li>
    <li>Investigación Bibliográfica - 1982</li>
    <li>Idioma Inglés - 1985-88</li>
    <li>Curso Básico de Pedagogía - 1984</li>
    <li>Computación - 1986</li>
    <li>Biofarmacia y farmacocinética - 1986</li>
    <li>Medicamentos de Acción Sostenida - 1986</li>
    <li>Cromatografía (HPLC) - 1987</li>
    <li>Química Física de las Superficies y Coloides - 1987</li>
    <li>Entrenamiento en acción prolongada por 6 meses en Finlandia - 1987-88</li>
    <li>Métodos de microencapsulación - 1988</li>
    <li>Diseño de Experimentos - 1993</li>
    <li>Homologación de requisitos para el registro de medicamentos - 1993</li>
    <li>Sistemas Farmacéuticos de Liberación Prolongada - 1994</li>
    <li>Validación de procesos asépticos - 1994</li>
    <li>Validación en formas sólidas - 1993</li>
    <li>Buenas prácticas en la producción de vacunas - 1993</li>
    <li>Validación (Actualización) - 1995</li>
    <li>Zeolitas y Productos activos zeolíticos - 1995</li>
    <li>Buenas Prácticas de Fabricación - 1996</li>
    <li>Técnicas de Dirección - 1997</li>
    <li>Diplomado de Buenas Prácticas de Fabricación - 2003</li>
    <li>Diplomado de Gerencia Empresarial - 2003</li>
    <li>Ciclo de conferencias de Marketing Farmacéutico - 2003</li>
    <li>Curso de superación jurídica para directivos - 2005</li>
    <li>Curso internacional sobre Tecnología de sólidos - 2005</li>
    <li>Curso internacional sobre Tecnología Farmacéutica - 2008</li>
    <li>Curso de Buenas Prácticas de Fabricación (act.) - 2010</li>
    <li>Curso sobre Mantenimiento en la Ind. Farmac. - 2010</li>
    <li>Curso sobre la creación de libros electrónicos - 2015</li>
</ul>

<!-- Idiomas -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 10px;">
    <i class="fas fa-language" style="margin-right: 10px; color: #ef6c00;"></i>Idiomas
</h2>
<p style="margin-bottom: 20px; text-align: left;">
    <strong>Inglés:</strong><br>
    Lee: Bien<br>
    Escribe: Regular<br>
    Habla: Regular
</p>

<!-- Participación en la Impartición de Cursos de Posgrado -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-chalkboard-teacher" style="margin-right: 10px; color: #c62828;"></i>5. Participación en la Impartición de Cursos de Posgrado
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Microencapsulación - 1990, 1991, 1992</li>
    <li>Elementos de Validación - 1994</li>
    <li>Medicamentos de Acción Prolongada - 1989, 1990</li>
    <li>Diseño y Elaboración de Medicamentos I - 1995, 1996, 1998</li>
    <li>Diseño y Elaboración de Medicamentos II - 1996, 1997, 1998, 1999, 2000, anualmente hasta 2013</li>
    <li>Sistemas Terapéuticos de Avanzada - 1997, 1998, 1999</li>
    <li>Fabricación y Acondicionamiento II y III - 2003</li>
    <li>Personal, Higiene y Medios de Protección - 2003</li>
    <li>Curso de Diseño y Elaboración de Medicamentos II en el Diplomado de Tecnología Farmacéutica - Anualmente</li>
    <li>Curso de Diseño y Elaboración de Medicamentos II en la Maestría de Tecnología y Control de Medicamentos - Anualmente</li>
    <li>Curso de Diseño y Elaboración de Medicamentos II en el doctorado curricular en Ciencias Farmacéuticas - 2012</li>
    <li>Asignatura: Trabajo en Equipo del diplomado de “Gerencia Empresarial” - 2005, 2006, 2009, 2010, 2012, 2014</li>
    <li>Asignatura: Comunicación y Publicidad (Diplomado de Marketing Farmacéutico) - 2005, 2006, 2009, 2010</li>
    <li>Asignatura: Comunicación y Publicidad Ambiental (Maestría en Gestión y Administración Ambiental) - 2010, 2012</li>
    <li>Comunicación Empresarial (Maestría en Gestión Empresarial MBA) - 2011, 2012, 2014</li>
    <li>Administración del Talento Humano: (Maestría en Gestión y Administración de Salud) - Desde 2007 hasta 2011</li>
    <li>Tecnología Gerencial II (Maestría en Gestión y Administración de Salud) - 2008-2010</li>
    <li>Validación de procesos - Anualmente desde 2009 hasta la actualidad</li>
    <p style="margin-bottom: 20px; text-align: left;">
        Nota: * = Impartido en diferentes Universidades de Ecuador.
    </p>
</ul>

<!-- Participación en Eventos -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
    <i class="fas fa-calendar-alt" style="margin-right: 10px; color: #1b5e20;"></i>6. Participación en Eventos
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>I Jornada Científica Estudiantil - 1973</li>
    <li>II Jornada Científica Estudiantil - 1974</li>
    <li>V Seminario CNIC - 1975</li>
    <li>II Congreso Nacional de Farmacia - 1978</li>
    <li>I, II, y III Jornada de las BTJ. E.P.B."Carlos J. Finlay" - 1977, 78, 79</li>
    <li>Evento X Aniversario de la E.P.B."Carlos J. Finlay" - 1981</li>
    <li>Evento XI Aniversario de la E.P.B. "Carlos J. Finlay" - 1982</li>
    <li>IV Conferencia de Ciencias Naturales - 1984</li>
    <li>9th Finnish Drug Research Meeting (Finlandia) - 1988</li>
    <li>5to. Congreso de la Sociedad Cubana de Ciencias Farmacéuticas - 1993</li>
    <li>Forum de Ciencia y Técnica (municipal y provincial) - 1993</li>
    <li>Forum de Ciencia y Técnica (municipal, provincial y nacional) - 1994, 95</li>
    <li>XXIII Congreso Panamericano de Enfermedades Digestivas - 1993</li>
    <li>Encuentro de preparaciones parenterales - 1993</li>
    <li>II Conferencia Científico-Técnica Nacional de Zeolitas Naturales - 1993</li>
    <li>I Reunión Iberoamericana sobre la enseñanza de las Ciencias Farmacéuticas y Alimentarias - 1994</li>
    <li>Evento XXV Aniversario de la E.P.B. "Carlos J. Finlay" - 1994</li>
    <li>Seminario Internacional "Tecnología Farmacéutica de Sólidos y sus formas dosificadas" - 1994</li>
    <li>XII Seminario Científico CNIC - 1995</li>
    <li>6to Congreso de la Sociedad Cubana de Ciencias Farmacéuticas - 1995</li>
    <li>Joven Ciencia'96 - 1996</li>
    <li>II Encuentro Iberoamericano sobre las Ciencias Farmacéuticas y Alimentarias - 1996</li>
    <li>Congreso sobre Tamices Moleculares. Caracas, Venezuela - 1996</li>
    <li>Zeolitas/97 “5ta Conferencia Internacional de Zeolitas Naturales. Pharmaceutical Action of Natural Clinoptilolite” - Nápoles, Italia - 1997</li>
    <li>VII Congreso de la Sociedad de Ciencias Farmacéuticas - 1998</li>
    <li>Congreso Centroamericano de Ciencias Farmacéuticas (Honduras) - 1998</li>
    <li>II Taller de Formas Sólidas - 1999</li>
    <li>I Jornada Científica de Servicios Farmacéuticos - 2000</li>
    <li>IV Evento Iberoamericano de la Ciencias Farmacéuticas y Alimentarias - 2000</li>
    <li>Conferencia Interamericana de Farmacia - 2001</li>
    <li>V Encuentro Iberoamericano de Farmacia - 2002</li>
    <li>II Conferencia Interamericana de Farmacia - 2003</li>
    <li>VI Encuentro Iberoaméricano de las Ciencias Farmacéuticas y Alimentarias - 2004</li>
    <li>Evento de la Quimefa - 2005</li>
    <li>Evento del Laboratorio Mario Muñoz - 2006</li>
    <li>Taller: “La Industria Farmacéutica Contemporánea” Tegucigalpa, Honduras - 2009</li>
    <li>XIX Simposium of Finnish Society of Physical Pharmacy. Analytical Methods in Pharmacy - Industrial and Novel Applications - 2008</li>
    <li>Adjuvant 2008. International Workshop on Vaccine Adjuvants and Parasitic Vaccines - 2008</li>
    <li>6th World Meeting on Pharmaceutics, Biopharmaceutics and Pharmaceutical Technology - 2008</li>
    <li>Jornada Científica de Quimefa - 2008, 2009, 2010, 2011, 2012</li>
    <li>Congreso de la Sociedad de Ciencias Farmacéuticas - 2010</li>
    <li>Taller Nacional de las Ciencias Farmacéuticas y Alimentarias - 2012</li>
    <li>VII Foro de la Cátedra Iberoamericana suiza de desarrollo de Medicamentos, La Habana - 2013</li>
    <li>VIII Foro de la Cátedra Iberoamericana suiza de desarrollo de Medicamentos, Brasil (Coautora) - 2014</li>
    <li>II Encuentro de Ciencias Farmacéuticas y Alimentarias - 2014</li>
    <li>XIV Congreso Nacional de Ciencias Farmacéuticas de Honduras (2 ponencias como coautor) - 2015</li>
    <li>III Encuentro de las Ciencias Farmacéuticas y Alimentarias (2 trabajos como ponente y dos como coautora) - 2015</li>
</ul>

<!-- Materias en las cuales ha participado como profesora de pregrado -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-chalkboard" style="margin-right: 10px; color: #c62828;"></i>7. Materias en las cuales ha participado como profesora de pregrado
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Tecnología Galénica de los Medicamentos (Cursos teóricos y prácticos, Plan B)</li>
    <li>Química Física de las Superficies y Coloides (Prácticas)</li>
    <li>Tecnología Farmacéutica I y II del Plan B (Teoría y Prácticas)</li>
    <li>Química Inorgánica Farmacéutica (Prácticas)</li>
    <li>Fundamento de la Práctica Farmacéutica (Teoría y Prácticas)</li>
    <li>Tecnología Farmacéutica II, III, IV del Plan C (Teoría y Prácticas)</li>
    <li>Tecnología Farmacéutica II, III, IV del Plan C perfeccionado</li>
    <li>Tecnología Farmacéutica II, III y IV del Plan D - 2010, 2011, 2012, 2013, 2014, 2015</li>
    <li>Buenas Prácticas de Fabricación (Asignatura optativa) - 2012, 2013, 2014, 2015</li>
    <li>Prácticas de Producción Industrial - Anualmente</li>
</ul>

<!-- Publicaciones -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 10px;">
    <i class="fas fa-book-open" style="margin-right: 10px; color: #ef6c00;"></i>8. Publicaciones
</h2>
<p style="margin-bottom: 20px; text-align: left;">
    <strong>Publicaciones Docentes:</strong> (Libros y Manuales de Prácticas de Laboratorio)
</p>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Iraizoz, A.; Bilbao, O.; Barrios, M.A. Conferencias de Tecnología Farmacéutica II. Ed MES, 267 p. (1990)</li>
    <li>Bilbao, O; Castañeda, A; Iraizoz, A,; Barrios, M.A.: Manual de Prácticas de Laboratorio de Tecnología Farmacéutica I. Ed. MES, 66 p. (1986)</li>
    <li>Iraizoz, A.; Barrios, M.A., Bilbao, O. Manual de Prácticas de Laboratorio de Tecnología Farmacéutica II. Ed. MES 78 p. (1986)</li>
    <li>Bilbao, O.; Iraizoz, A.; Castañeda, A. Barrios, M. A. Manual de Prácticas de Laboratorio de Farmacia Galénica. Ed. MES. 70 p. (1984)</li>
    <li>Barrios M.A.; Iraizoz A. Tecnología Farmacéutica IV. (Materiales para la intranet). Neobook: Herramienta de Autor (Libro electrónico preparado para la intranet de la Facultad)</li>
</ul>
<p style="margin-bottom: 20px; text-align: left;">
    <strong>Registros de Medicamentos:</strong> (3): Enterex (Tabletas); Disopiramida (Inyectable); Nandrolona (Inyectable)
</p>





<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/Publicaciones.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Publicaciones en revistas científicas</span>
   </a>
</div>

<!-- Tutorías para el Grado Científico (PhD) -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    <i class="fas fa-graduation-cap"></i> 9.3. Tutorías para el Grado Científico (PhD)
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Tutoría de Tesis de Doctorado (defendidas): Cuatro de sus aspirantes defendieron sus tesis de doctorado con resultados satisfactorios.
</p>
<ul style="margin-bottom: 20px; text-align: justify;">
    <li>Héctor Expósito: Desarrollo de una vacuna polivalente. 2009</li>
    <li>Yaneli Herrera: Introducción de nuevas tecnologías para la obtención de principios activos vacunales en un sistema integrado de producción de una planta multipropósito. 2009</li>
    <li>José García Suárez: Establecimiento del proceso de fermentación del polipéptido recombinante p25. Defensa en Noviembre de 2015.</li>
    <li>Héctor Santana Milián: Estabilización del Factor de Crecimiento Epidérmico Humano Recombinante para su aplicación parenteral. Defensa en Junio de 2016.</li>
</ul>
<p style="margin-bottom: 20px; text-align: justify;">
    Actualmente es tutora de 2 aspirantes que se encuentran realizando su trabajo experimental.
</p>

<!-- Reconocimientos Más Relevantes Recibidos -->
<h3 style="font-size: 22px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;">
    <i class="fas fa-award"></i> 10. Reconocimientos Más Relevantes Recibidos
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Vanguardia Nacional y Municipal del Sindicato de la Ciencia en los años 1995 y 1996 respectivamente, Vanguardia Nacional del Sindicato de la Educación en 1998 y provincial en 1997. Educadora ejemplar desde 1985 y Por la Excelencia Universitaria desde 1996. Vanguardia Provincial del Sindicato de la Educación en 1999.
</p>

<!-- Condecoraciones -->
<h3 style="font-size: 22px; color: #1b5e20; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    <i class="fas fa-medal"></i> 10.1. Condecoraciones
</h3>
<ul style="margin-bottom: 20px; text-align: justify;">
    <li>Medalla por la Educación Cubana. (Consejo de Estado de la República de Cuba)</li>
    <li>Medalla José Tey. (Consejo de Estado de la República de Cuba)</li>
    <li>Sello 280 Aniversario de la Universidad de la Habana. (Universidad de la Habana)</li>
    <li>Medalla Rafael María de Mendive. (Consejo de Estado de la República de Cuba) 2010</li>
    <li>Medalla por la defensa de la Patria. (Consejo de Estado de la República de Cuba)</li>
</ul>

<!-- Premios Recibidos -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    <i class="fas fa-trophy"></i> 10.2. Premios Recibidos
</h3>
<ul style="margin-bottom: 20px; text-align: justify;">
    <li>VII Forum de Ciencia y Técnica Nacional. Mención. 1992</li>
    <li>VIII Forum de Ciencia y Técnica Nacional. Potencialidad de la Zeolita cubana en la fabricación de medicamentos. Destacado. 1993</li>
    <li>IX Forum de Ciencia y Técnica Nacional. Mención. Diseño y Desarrollo de Fosfato de disopiramida inyectable. 1994</li>
    <li>X Forum de Ciencia y Técnica Nacional. Mención Especial. Enterex y Neutacid, dos medicamentos a partir de zeolita natural purificada. 1995</li>
    <li>Mejor Colectivo de investigación. Mención. UH. 1993</li>
    <li>Mayor aporte al aprovechamiento de los recursos naturales. UH. 1994</li>
    <li>Primer premio en la comisión de medicamentos. Desarrollo de Medicamentos antidiarreicos y antiácidos. UH. 1995</li>
    <li>Premio Nacional de la Academia de Ciencias de la República de Cuba. “Elaboración de medicamentos a partir de productos activos zeolíticos”. Autor Principal. 1999</li>
    <li>Mención al mejor trabajo en la línea de medicamentos, biomateriales y diagnosticadores</li>
    <li>Reconocimiento por su trabajo como experto en el consejo científico del Ministerio de Salud Pública. 1997</li>
    <li>Diversos premios en concursos científicos</li>
    <li>Investigador invitado de la Universidad de Helsinki, Finlandia</li>
    <li>Profesor invitado de la Universidad Autónoma de Honduras</li>
    <li>Trabajo de mayor trascendencia y originalidad de la UH. Mención. 2004</li>
    <li>Mejor Colectivo de Investigación de la Universidad de la Habana. Premio. 2004. Entregado al colectivo de “Utilización de bioactivos en Medicamentos y Cosméticos”</li>
    <li>Publicación más destacada de la UH. 2006. Gerardo Rodríguez-Fuentes, Aramis Rivera Denis, María A. Barrios Álvarez, Antonio Iraizoz Colarte; Antacid drug based on purified natural clinoptilolite. Microporous and Mesoporous Materials. Ed Elsevier. 94 (2006) 200-207. Índice de impacto. 3.35</li>
    <li>Premio nacional de la Academia de Ciencias de Cuba “Procesos analíticos tecnológicos (PAT) para el desarrollo de un nuevo excipiente farmacéutico obtenido como derivado de la industria azucarera cubana”. Autor Principal. 2008</li>
</ul>

<!-- Postgrados o Entrenamientos que Imparte -->
<h3 style="font-size: 22px; color: #ef6c00; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 5px;">
    <i class="fas fa-book"></i> 11. Postgrados o Entrenamientos que Imparte
</h3>
<ul style="margin-bottom: 20px; text-align: justify;">
    <li>Diseño y Elaboración de Medicamentos II. (Maestría en Tecnología y Control de Medicamentos) Cuba, Honduras y México</li>
    <li>Diseño y Elaboración de Medicamentos II. (Diplomado en Tecnología)</li>
    <li>Diseño y Elaboración de Medicamentos II. (Doctorado Curricular en C. Farmacéuticas)</li>
    <li>Sistemas Terapéuticos de Avanzadas</li>
    <li>Medicamentos estériles. Buenas Prácticas de Fabricación. (Curso de superación) Cuba y Guatemala</li>
    <li>Medicamentos de acción controlada. (Curso de superación)</li>
    <li>Trabajo en Equipos. (Diplomado de Gerencia Empresarial)</li>
    <li>Comunicación y Publicidad. (Diplomado de Marketing Farmacéutico). Ecuador</li>
    <li>Introducción a las Buenas Prácticas de Fabricación. (Curso de Superación) Honduras y Guatemala</li>
    <li>Comunicación Ambiental. (Maestría en Gestión y Administración Ambiental) Ecuador</li>
    <li>Comunicación Empresarial. (Maestría en Administración de Empresas MBA) Ecuador</li>
    <li>Administración del Talento Humano. (Maestría en Gerencia en Salud) Ecuador</li>
    <li>Validación de Procesos (Maestría en Tecnología y Control de Medicamentos) Cuba y Honduras</li>
    <li>Validación de Procesos. (Doctorado Curricular en C. Farmacéuticas)</li>
    <li>Diseño y creación de Libros electrónicos. Diplomado en TIC para la docencia</li>
</ul>

<!-- Otras Actividades -->
<h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
    <i class="fas fa-cogs"></i> 12. Otras Actividades
</h3>
<p style="margin-bottom: 20px; text-align: justify;">
    Es miembro de la Comisión Nacional de la Carrera de Ciencias Farmacéuticas en Cuba. Jefe de la disciplina de Tecnología Farmacéutica. Miembro del Comité Académico de la Maestría en Tecnología y Control de Medicamentos. Miembro del Comité Académico del Doctorado Curricular en Ciencias Farmacéuticas. Coordinadora del Diplomado en Tecnología Farmacéutica. Experto Evaluador de Programas de pre y postgrado para su acreditación por la Junta de Acreditación Nacional. (Certificado de Idoneidad emitido por la JAN). Ha formado parte de tribunales para el otorgamiento de los títulos de Master y de Licenciado en Ciencias Farmacéuticas y ha sido oponente en estos ejercicios académicos en diversas ocasiones. Miembro del Tribunal de otorgamiento de Categorías docentes de Instructor y Asistente (1997-2010). Ha integrado como invitada el tribunal de otorgamiento de los títulos de Doctor en Ciencias (PhD) en diversas ocasiones. Miembro del tribunal de recategorización a nivel de Ministerio de Educación Superior de docentes que forman parte de los tribunales de categorización a nivel de facultad. Pertenece y funciona como parte de la Comisión Evaluadora de los Programas Ramales de Ciencia y Técnica del Ministerio de Salud Pública. Árbitro de dos revistas científicas cubanas. RCF y Revista CNIC.
</p>




<!-- Datos Personales -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-user" style="margin-right: 10px; color: #c62828;"></i>Datos Personales
</h2>
<p style="margin-bottom: 20px; text-align: left;">
    <strong>NOMBRE:</strong> Antonio Juan Iraizoz Colarte<br>
    <strong>PROFESIÓN:</strong> Lic. Ciencias Farmacéuticas (1974). Universidad de la Habana.<br>
    <strong>GRADO CIENTÍFICO:</strong> Doctor en Ciencias Farmacéuticas. PhD. (1985). Instituto Químico Farmacéutico de San Petersburgo, Rusia. Convalidado en la República de Cuba (1985).<br>
    <strong>CATEGORÍA DOCENTE:</strong> Profesor Titular (1996). Profesor Emérito del Ministerio de Educación Superior de la República de Cuba (2017).<br>
    <strong>CARGOS:</strong><br>
    <ul style="padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
        <li>Presidente Comisión Nacional Carrera de Licenciatura en Ciencias Farmacéuticas. República de Cuba.</li>
        <li>Vicepresidente Tribunal Nacional del Doctorado en Ciencias Farmacéuticas. República de Cuba.</li>
    </ul>
</p>

<!-- Datos Biográficos -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 10px;">
    <i class="fas fa-info-circle" style="margin-right: 10px; color: #ef6c00;"></i>Datos Biográficos
</h2>
<p style="margin-bottom: 20px; text-align: left;">
    Nació en Ciudad de la Habana, el 5 de julio de 1949, cursó la enseñanza primaria en el "Instituto Edison", con resultados docentes sobresalientes. Posteriormente, estudió la segunda enseñanza en la Escuela Secundaria Básica "Rafael Carini", donde se graduó con resultados excelentes, alcanzando premios nacionales en las asignaturas de Química y Matemáticas, y provinciales en Física y Geografía. Obtuvo el primer lugar regional en los exámenes de Prueba de Nivel. La enseñanza secundaria superior la cursó en el Instituto Preuniversitario "René O. Reiné", en 11no grado pasó el SMO en la MGR Unidad 3331, graduándose en dicho Instituto en 1969 con resultados igualmente sobresalientes. Matriculó en la Universidad de la Habana en el propio año en la Escuela de Bioquímica Farmacéutica, graduándose en 1974, con un alto índice académico que lo llevó a ser seleccionado entre los diez graduados más destacados de su año; ocupó la Presidencia de la FEU de su año en 1972, 1973 y 1974. Es casado y tiene dos hijos.
</p>

<!-- Síntesis de la Trayectoria Laboral -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
    <i class="fas fa-briefcase" style="margin-right: 10px; color: #1b5e20;"></i>Síntesis de la Trayectoria Laboral
</h2>
<p style="margin-bottom: 20px; text-align: left;">
    Fue Alumno Ayudante durante los 5 años de la carrera en las asignaturas de Química Biorgánica I, Farmacobotánica y Análisis Instrumental. Al graduarse fue nombrado profesor de la Escuela en la Disciplina de Tecnología Farmacéutica, con la categoría docente de Instructor, promovido a Profesor Asistente en 1984, a Profesor Auxiliar en 1990 y a Profesor Titular en 1996. Fue Jefe de la Disciplina de Tecnología Farmacéutica desde 1987 hasta 2001. Es Presidente de la Comisión Nacional de la Carrera de Licenciatura en Ciencias Farmacéuticas desde 1989 hasta la fecha. Ha ocupado diversos cargos institucionales, entre ellos, Segundo Secretario Ideológico de la Facultad de Ciencias de la Universidad de La Habana, de 1973-75, Secretario General del Comité de Base de Trabajadores de la Escuela de Bioquímica Farmacéutica de 1975-77, y Secretario General de la Sección Sindical de la Facultad de Farmacia y Alimentos de 1985-88. También fue Metodólogo del Instituto de Farmacia y Alimentos de 1990-1996 y Vicedecano de Investigaciones desde 1996 hasta 2010.
</p>

<!-- Cursos de Postgrado Recibidos -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-book" style="margin-right: 10px; color: #c62828;"></i>Cursos de Postgrado Recibidos
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Computación. Sistema MS Dos (1977)</li>
    <li>Química Orgánica Superior (1977)</li>
    <li>Diseño Experimental y Estadísticas (1978)</li>
    <li>Computación (1978)</li>
    <li>Química Física Coloidal I (1979)</li>
    <li>Química Física Coloidal II (1980)</li>
    <li>Química Física Coloidal III (1981)</li>
    <li>Química Física de la Superficie (1982)</li>
    <li>Filosofía (1982)</li>
    <li>Biodisponibilidad (1986)</li>
    <li>Biofarmacia (1987)</li>
    <li>Cromatografía Líquida de Alta Resolución (1987)</li>
    <li>Validación en las Ciencias Farmacéuticas (1989)</li>
    <li>Estudios de Estabilidad (1990)</li>
    <li>Planeación Industrial (1992)</li>
    <li>Liposomas (1994)</li>
    <li>Aerosoles Farmacéuticos (1995)</li>
    <li>Diplomado en Buenas Prácticas de Fabricación (2003)</li>
    <li>Seminario-Taller Glatt (2005)</li>
    <li>“Advanced Pharmaceutical Powder Technology”, alcanzando 4 créditos internacionales, impartido por profesores de la Universidad de Helsinki, Finlandia (2005)</li>
</ul>

<!-- Idiomas -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 10px;">
    <i class="fas fa-language" style="margin-right: 10px; color: #ef6c00;"></i>Idiomas
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Graduado de Idioma Francés. U.H. (1977)</li>
    <li>Graduado de Idioma Ruso. U.H. (1980)</li>
    <li>Examen de suficiencia Idioma Inglés. U.H. (1991 y 1996)</li>
</ul>

<!-- Cursos de Postgrado Impartidos -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-chalkboard-teacher" style="margin-right: 10px; color: #c62828;"></i>Cursos de Postgrado Impartidos
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Medicamentos de Acción Prolongada. 1986-1991.</li>
    <li>Microencapsulación en las Ciencias Farmacéuticas. 1991-2000.</li>
    <li>Tabletas y Suspensiones Farmacéuticas. 1983.</li>
    <li>Tabletas Farmacéuticas. 1984-1986.</li>
    <li>Computación. 1980.</li>
    <li>Validación de Procesos. 1991-2005.</li>
    <li>Introducción a la Validación. 2001.</li>
    <li>Reología en las Ciencias Farmacéuticas. 1994-1998.</li>
    <li>Diseño y Proceso de Elaboración de Medicamentos II. 1995-2007.</li>
    <li>Diseño de Instalaciones Farmacéuticas. La Habana. 2006-2015.</li>
    <li>Diseño de Instalaciones Farmacéuticas. Santiago de Cuba. 2007.</li>
    <li>Diseño de Instalaciones Farmacéuticas. Bayamo, Cuba. 2008, 2011.</li>
    <li>Sistemas Terapéuticos de Avanzada. Bayamo, Cuba. 2008, 2012.</li>
    <li>Diseño de Instalaciones Farmacéuticas. Tegucigalpa, Honduras. 2015.</li>
    <li>Diseño y Proceso de Elaboración de Medicamentos III. 1996-2000.</li>
    <li>Tecnología Farmacéutica General. UAC, México. 1996.</li>
    <li>Tecnología Farmacéutica General. Univ. Veracruzana, México. 1997.</li>
    <li>Procesos Operacionales Farmacéuticos. 1996-1997.</li>
    <li>Diseño y Proceso de Elaboración de Medicamentos II. Universidad Autónoma de Honduras. 1997.</li>
    <li>Sistemas Terapéuticos de Avanzada. Universidad Autónoma de Honduras. 1997.</li>
    <li>Tecnología Farmacéutica General. UH. 1997.</li>
    <li>Aseguramiento de la Calidad y Buenas Prácticas de Fabricación. República de Honduras. Experto contratado por la OPS/OMS. 1997.</li>
    <li>Sistemas Terapéuticos de Avanzada. 1999-2016.</li>
    <li>Instalaciones I. Programa EOI, América, España. 2003.</li>
    <li>Instalaciones II. Programa EOI, América, España. 2003.</li>
    <li>Fabricación y Acondicionamiento III. Programa EOI, América, España. 2003.</li>
    <li>Buenas Prácticas de Fabricación. Honduras. 2003.</li>
    <li>“Actualización en temas de Tecnología Farmacéutica”. Honduras. 2003.</li>
    <li>“Estabilidad Integral de Medicamentos. Honduras. 2003.</li>
    <li>“Validación de Procesos Farmacéuticos”. Universidad de San Carlos, Guatemala. 2005.</li>
    <li>“Introducción a la Validación”. Universidad de San Carlos. Guatemala. 2005.</li>
    <li>Diseño de Instalaciones Farmacéuticas. Lima, Perú. 2005.</li>
    <li>Dirección por Valores, Liderazgo. Machala, Ecuador. 2006.</li>
    <li>Dirección por Valores, Liderazgo. La Habana. 2005, 2007, 2009, 2011-2014.</li>
    <li>Dirección Estratégica. Manta, Machala y Guayaquil, Ecuador. 2006.</li>
    <li>Diseño de Instalaciones Farmacéuticas. UNAH, Honduras. 2009, 2015.</li>
    <li>Buenas Prácticas de Fabricación. UNAH, Honduras. 2009, 2016.</li>
    <li>Tabletas Farmacéuticas. Honduras. 2009.</li>
    <li>Dirección Estratégica. Ecuador. 2006-2011.</li>
    <li>Gerencia Aplicada I. Ecuador. 2006.</li>
    <li>Gerencia Aplicada II. Ecuador. 2006.</li>
    <li>Marketing Farmacéutico. Ecuador. 2007, 2009.</li>
    <li>Dirección Estratégica Ambiental. Ecuador. 2011-2012.</li>
    <li>Cambio Organizacional. Guayaquil, Ecuador. 2012, 2014.</li>
    <li>Operaciones Unitarias en la Producción de Cosméticos. UH. 2015.</li>
</ul>
<p style="margin-bottom: 20px; text-align: left;">
    En total ha impartido un total de 138 cursos de superación o postgrado. Ha impartido numerosas asesorías a Empresas Farmacéuticas en el territorio nacional y en el extranjero. Miembro del Consejo Técnico Asesor de la Unión de Empresas Farmacéuticas QUIMEFA, desde 1984 hasta el 2012.
</p>


<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/Publicaciones2.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Publicaciones en revistas científicas</span>
   </a>
</div>



<!-- Patentes -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-patent" style="margin-right: 10px; color: #c62828;"></i>Patentes
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Microencapsulación del bisacodilo. Octubre del 2003.</li>
    <li>Sistema matricial de liberación controlada, elaborado a partir de dextrana técnica, HPMC y alcohol cetílico. Julio del 2004.</li>
</ul>

<!-- Comisiones Científicas -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #ef6c00; padding-bottom: 10px;">
    <i class="fas fa-users" style="margin-right: 10px; color: #ef6c00;"></i>Comisiones Científicas a que Pertenece o ha Pertenecido
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Consejo Científico del Instituto de Farmacia y Alimentos de la Universidad de la Habana. 1986 – (29 años)</li>
    <li>Consejo Científico del Centro de Química Farmacéutica. Ministerio de Salud Pública. Cuba. 1994-2008</li>
    <li>Comisión Nacional de la Carrera de Ciencias Farmacéuticas. Ministerio de Educación Superior, Cuba. (Presidente) 1989 – (27 años)</li>
    <li>Comisión de Desarrollo de la Industria Farmacéutica. Consejo de Estado de la República de Cuba. 1989 – 1991 (adscripto al Grupo de apoyo del Presidente)</li>
    <li>Comisión de Expertos en Medicamentos. Ministerio de Salud Pública de Cuba. 1991 – 2012. (21 años)</li>
    <li>Comisión Programa de Formas Terminadas. Ministerio de Salud Pública de Cuba. 1992 – 2012. (20 años)</li>
    <li>Comisión de Expertos en Dextrana. Ministerio del Azúcar de Cuba. 1987 – 1992</li>
    <li>Comisión de Expertos en Polímeros. Academia de Ciencias de Cuba. 1989 – 1994</li>
    <li>Grupo Estatal No. 1. Ministerio de Ciencia, Técnica y Medio Ambiente de Cuba. 1993 – 2010 (17 años)</li>
    <li>Miembro Fundador y Vicepresidente del Tribunal Permanente del Doctorado en Ciencias Farmacéuticas. 1996 – (20 años)</li>
    <li>Comisión de Expertos en Formas Terminadas. Ministerio de Ciencia, Tecnología y Medio Ambiente. 1994 – 1999</li>
    <li>Consejo Científico de la Industria Médico Farmacéutica de Cuba. Resolución 17/1997</li>
    <li>Comité Académico Maestría y Doctorado en Tecnología y Control de Medicamentos. UH. Coordinador. 1994 – (22 años)</li>
    <li>Comité Académico de Postgrado IFAL. UH. 1995 – (21 años)</li>
    <li>Comité Académico del Doctorado Curricular en Ciencias Farmacéuticas. 2006 – (10 años)</li>
    <li>Miembro del Consejo de Dirección del IFAL-UH. 1989 – 2009</li>
    <li>Miembro Comité de Expertos de Programas Científico Técnico Nacionales. Desarrollo de productos biotecnológicos, farmacéuticos y de medicina verde. Ministerio de Ciencia, Tecnología y Medio Ambiente. Resolución 75/1997</li>
    <li>Experto OPS/OMS. 1997</li>
    <li>Comité de Expertos en Procesos Tecnológicos. Centro Estatal de Control de Medicamentos. Ministerio de Salud Pública. 2000 – (16 años)</li>
    <li>Miembro Consejo Técnico Asesor de QUIMEFA. 2002 – 2012</li>
    <li>Vicepresidente de la Red de Medicamentos del MES. 1998 – 2004</li>
    <li>Comisión de Expertos en Nuevas Tecnologías. CECMED. 2000 – (16 años)</li>
    <li>Experto Junta Nacional de Acreditación, República de Cuba. (JAN). 2003 – (13 años)</li>
    <li>Árbitro de la Revista Cubana de Farmacia. (1986-)</li>
</ul>

<!-- Tutorías -->
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-graduation-cap" style="margin-right: 10px; color: #c62828;"></i>Tutorías
</h2>
<h3 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
    Doctorados Defendidos
</h3>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Nueva formulación de tabletas polivitamínicas. Lic. Hilda Ma. González San Miguel. 1993.</li>
    <li>Obtención y evaluación de almidones modificados para su empleo como desintegrantes y aglutinantes en tabletas. Ing. Eduardo G. Cañizares Hernández. 1994.</li>
    <li>Estudio y utilización de un complejo polimetacrilato de quinidina en la preparación de tabletas de liberación prolongada. Lic. Irina Ramos Arocha. 1994.</li>
    <li>Elaboración de Medicamentos a partir de zeolita natural. Lic. María Aurora Barrios Alvarez. 1996.</li>
    <li>Medicamentos antisépticos elaborados a partir del PAZ ZZ. MSc. Iliana Perdomo López. 1998.</li>
    <li>Microencapsulación del bisacodilo. MSc. Irela Pérez Sánchez. 2002.</li>
    <li>Desarrollo de un sistema pelicular acuoso con quitosana para aplicaciones farmacéuticas. MSc. Mirna Fernández Cervera. 2004.</li>
    <li>Desarrollo y Evaluación de una Nueva Formulación del Stabilak a Partir de una Dosis Menor de Tiocianato. MSc. Dulce María Soler Roger. 2004.</li>
    <li>Obtención de agregados superparticulados por delipidación parcial con B-ciclodextrinas del antígeno de superficie del virus de la hepatitis B para la formulación de candidatos de vacunas más inmunogénicas y terapéuticas. Lic. Iloki Assanga Simón Bernard. 2005.</li>
    <li>Evaluación de un nuevo polímero para su empleo en la elaboración de formas sólidas de acción controlada. MSc. Gelsys González Novoa. 2005.</li>
    <li>Empleo de la quitina de langosta en la elaboración de tabletas. MSc. Viviana García Mir. 2006.</li>
    <li>Un ingrediente activo con acción antihelmíntica, a partir de las semillas de Cucúrbita moschata Duch: estudios analíticos y de preformulación. MSc. Elisa Jorge. 2006.</li>
    <li>Potencialidades de la dextrana cubana en medicamentos de liberación controlada. MSc. Eddy Castellanos Gil. 2008.</li>
    <li>Hacia una nueva generación de vacunas multivalentes basadas en vesículas de membrana externa de Neisseria meningitidis serogrupo B. Lic. Ramón Barberá. 2008.</li>
    <li>Obtención y caracterización física de un extracto seco de las hojas de la especie Tamarindus indica L. para compresión directa. MSc. Jesús Rafael Rodríguez Amado. 2012.</li>
</ul>

<h3 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
    Aspirantes Actuales
</h3>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>MSc. Antonio Ignacio Iraizoz Barrios</li>
    <li>MSc. Iverlis Díaz Polanco</li>
    <li>MSc. Ania González Cortezón</li>
    <li>MSc. Suslebys Salomón Izquierdo</li>
</ul>

<h3 style="font-size: 20px; color: #1b5e20; margin-bottom: 15px; text-align: left;">
    Maestrías Tutoreadas ya Defendidas
</h3>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; color: #1b5e20; text-align: left;">
    <li>Diseño y elaboración de Desipramina Clorhidrato, Grageas 25mg. Lic. Iliana Perdomo López. IFAL. 1996.</li>
    <li>Nuevo diseño de tabletas de FeSO4 525mg, acción controlada. Lic. Grisell Toledo. Universidad de Cienfuegos. 1996.</li>
    <li>Frascos plásticos de producción nacional como envase alternativo para medicamentos semisólidos. Lic. Oscar García Pulpeiro. Emp. Lab. Farm. “Roberto Escudero”. 1996.</li>
    <li>Desarrollo y evaluación de un reactivo para el diagnóstico de hemoglobina en sangre. Lic. Miriam Díaz de Armas. Emp. Lab. Farm. “Carlos J. Finlay”. 1996.</li>
    <li>Desarrollo de formulaciones de Clorhidrato de Amantadina, Jarabe 50mg x 5mL y Cápsulas x 100mg. Lic. Irela Pérez Sánchez. IFAL. 1996.</li>
    <li>Diseño y elaboración de tabletas de Levodopa 250mg., Carbidopa 50mg. Lic. Mirna Fernández Cervera. IFAL. 1996.</li>
    <li>Elaboración de Suspensiones Farmacéuticas a partir de productos activos zeolíticos. Lic. Maité Héctor Rodríguez. IFAL. 1996.</li>
    <li>Diseño, desarrollo y evaluación de una nueva formulación de tabletas de Clorhidrato de Labetalol 100 y 200mg. Lic. Vivian Tolosa Cubela. AICA. 1997.</li>
    <li>Control de la calidad y estudio de estabilidad de tabletas de Captopril, de dosis 25 y 50mg. Lic. Leidiana Hernández Mejías. IFAL. 1997.</li>
    <li>Almidón hidrolizado. Efecto de este aglutinante sobre la estabilidad de las tabletas de Clorodiazepóxido, obtención y evaluación industrial de esta sustancia auxiliar. Lic. Leonor Reyes Herrera. IFAL. 1997.</li>
    <li>Posibilidades de empleo en formas farmacéuticas del extracto y el aceite esencial de Melaleuca leudodendron, L. Lic. Luis E. Rodríguez Rodríguez, IFAL. 1997.</li>
    <li>Reformulación, control y estabilidad de un antiparasitario para uso veterinario. Lic. Gladys Díaz Noriega. LABIOFAM. 1997.</li>
    <li>Diseño y desarrollo de una nueva formulación de Nistatina oral. Tabletas. Ing. María Ofelia Morón García. E.L.F. "Reinaldo Gutiérrez". 1997.</li>
    <li>Desarrollo de una formulación de tabletas de Metildopa, 500mg. Lic. Evangelina Uribarri Hernández. Lab. MEDSOL. 1997.</li>
    <li>Diseño y evaluación de nuevas formulaciones de Warfarina sódica 2 y 10mg. Tabletas. Lic. Onán Gámez Rodríguez. E.L.F. "Reinaldo Gutiérrez". 1997.</li>
    <li>Influencia de algunos factores físicos y farmacotécnicos en la disolución de sustancias poco solubles. Lic. Guillermo Jordán Martínez. Lab. MEDSOL. 1997.</li>
    <li>Tabletas de Clorhidrato de Propranolol de acción prolongada. Estudios tecnológicos. Lic. Eddy Castellanos Gil. CQF. 1997.</li>
    <li>Diseño y desarrollo de una formulación de tabletas de Metiltestosterona, 5mg. Lic. Osmel Martínez Mursulí. IFAL. 1997.</li>
    <li>Desarrollo y escalado de una formulación de tabletas de Desipramina Clorhidrato, 75 mg de acción controlada. Lic. Mercedes Campo Fernández. IFAL. 1998.</li>
    <li>Desarrollo y evaluación de una formulación de Salbutamol. Aerosol. Lic. Rolando Fernández. CIDEM. 1998.</li>
    <li>Evaluación de un nuevo polímero POVIAC I, como aglutinante en tabletas. Lic. Yosaida Herrera. Lab. MEDSOL. 1998.</li>
    <li>Estudio de las potencialidades del POVIAC, como formador de matrices para tabletas de acción controlada. Lic. Orlando Ortíz Alfonso. IFAL. 1998.</li>
    <li>Desarrollo de un nuevo medicamento antianémico. Lic. Hiram Prats Garrigó. IFAL. 1998.</li>
    <li>Diseño y desarrollo de una nueva formulación para suspensión oral. Lic. Sonia Padrón. Inst. Finlay. 1998.</li>
    <li>Diseño de una planta de anticonceptivos orales. Lic. Norma Herera. Lab. MEDSOL. 1998.</li>
    <li>Diseño y elaboración de tabletas de Indometacina de liberación controlada. 75 mg. Lic. Reynaldo García Pereira. CIDEM. 1999.</li>
    <li>Estudio de formulación de tabletas de Ibuprofeno de acción controlada. Dr. Fausto Zaruma Gómez. (Ecuador). 1998.</li>
    <li>Diseño y elaboración de cápsulas de Indometacina de acción controlada. Dra. Gloria Aguilar Matamoros. (Honduras). 1998.</li>
    <li>Utilización de corpúsculos de sangre bovina en la preparación de cápsulas con fines antianémicos. Dra. Liliam Rocío Maradiaga (Honduras). 1998.</li>
    <li>Diseño y elaboración de tabletas de Albendazol. Dra. María Victoria Zelaya. (Honduras). 1998.</li>
    <li>Reformulación de formas sólidas. Lic. Silvia Cordero Russinyol. E.L.F. "Reinaldo Gutiérrez". 1999.</li>
    <li>Estudio de formulación de tabletas de acción controlada de Dinitrato de Isosorbide. Lic. Bassem Rachid. (Palestina). 1999.</li>
    <li>Reformulación de tabletas de hidroclorotiazida. Lic. Loreta Delgado Díaz. E.L.F. "Reinaldo Gutiérrez". 1999.</li>
    <li>Diseño de tabletas de Tioridazida de acción controlada. Lic. Madeleine Suárez. Lab. NOVATEC. 1999.</li>
    <li>Diseño y evaluación de cremas y óvulos de ketoconazol. Lic. Rosa Ma. Alvarez. CIDEM. 1999.</li>
    <li>Tabletas de cloruro de potasio de acción controlada. Lic. Amelié González. IFAL. 1999.</li>
    <li>Desarrollo de una formulación de amitriptilina-25. Tabletas revestidas. Lic. Jorge L. Castaño Fernández. Lab MEDSOL. 2000.</li>
    <li>Estudio de la granulación húmeda en un Roto Junior-10 para el escalado ha roto P-400. Lic. Tania Urquiza Rodríguez. Lab. MEDSOL. 2000.</li>
    <li>Desarrollo de una formulación de cefalexina 125mg, polvo para suspensión oral. Lic. María A. Serrate Merino. Emp. Lab. Farm. 8 de Marzo. 2000.</li>
    <li>Remodelación y puesta en marcha de una planta de inyectables. Lic. Isabel Pérez Gorgoy. Emp. Lab. Farm. 8 de Marzo. 2000.</li>
    <li>Proceso de microencapsulación del bisacodilo a escala de laboratorio. Diseño de una formulación por 5mg. Estudios tecnológicos. Lic. Wilfredo Hernández Martínez. Matanzas. 2000.</li>
    <li>Desarrollo de una formulación antibiótica para aves. Lic. Yudith Rodríguez COPEI. LABIOFAM. 2000.</li>
    <li>Diseño de tabletas de Clorhidrato de Amitriptilina 75 mg de Liberación Controlada. Estudios Preliminares. Lic. Marlen Espino Domínguez. Lab. Novatec. 2001.</li>
    <li>Estudio comparativo de lactosas de compresión directa a diferentes concentraciones de tres proveedores. QFB José de Guadalupe Quiroz Oropeza. Benemérita Universidad Autónoma de Puebla, México. 2001.</li>
    <li>Diseño de una formulación de tabletas vaginales de ketoconazol 400mg. Lic. Orelbe Medina Lorenzo. E.L.F. "Reinaldo Gutiérrez". 2001.</li>
    <li>Diseño y evaluación de formulaciones nacionales de tabletas de ácido acetil salicílico bufferadas y pediátricas. Lic. Juan Lázaro Lugones Fernández. ELF "Reinaldo Gutiérrez". 2001.</li>
    <li>Desarrollo de una nueva formulación de hidroclorotiazida 25mg. Lic. Miriam Moya. ELF "Reinaldo Gutiérrez". 2001.</li>
    <li>Desarrollo de formas terminadas a partir del polvo de pseudotallo de plátano. Lic. Ana Eliset Chacón González. LABIOFAM. 2001.</li>
    <li>Evaluación de dos formulaciones de gentamicina sulfato inyectable para uso veterinario. Lic. Ana Emilia Nápoles. LABIOFAM. 2002.</li>
    <li>Estudio de diferentes variantes tecnológicas para la obtención de tabletas de KCl 750mg, de acción controlada. Lic. Silvia Alonso Brizuela. Emp.Lab. Farm. "Reinaldo Gutiérrez". 2002.</li>
    <li>Evaluación de celulosas microcristalinas de diferentes proveedores, para su uso en tabletas. QFB Lidia Aguilar. Benemérita Universidad Autónoma de Puebla, México. 2002.</li>
    <li>Diseño de una Planta de anticonceptivos orales. Lic. Norma Pérez. 2002.</li>
    <li>Antibiótico en tabletas masticables para uso infantil. Lic. Iverlis Díaz. CIDEM. 2003.</li>
    <li>Desarrollo de matrices inertes para medicamentos sólidos de acción controlada. Lic. Nicté González. CIDEM. 2003.</li>
    <li>Desarrollo de un antiparasitario para uso veterinario. Lic. Aixa Puig. LABIOFAM. 2003.</li>
    <li>Metodología a seguir para validar procesos de esterilización por filtración. Lic. Carlos A. Amaro Nodarse. 2003.</li>
    <li>Desarrollo de un producto bacteriostático para su uso en veterinaria. Lic. Valia Vázquez Pita. LABIOFAM. 2004.</li>
    <li>Desarrollo de una formulación de tabletas de liberación controlada de Pentoxifilina 400mg. Lic. Marisela Lara Castro. CIDEM. 2005.</li>
    <li>Desarrollo de una formulación de Indinavir 200mg. Cápsulas. Lic. Antonio Iraizoz Barrios. CIDEM. 2005.</li>
    <li>Diseño de una planta piloto de líquidos y semisólidos. Lic. Adriana Muñoz. CIDEM. 2005.</li>
    <li>Estudios para la reformulación del inyectable ior® EPOCIM. Lic. Janette Cruz Rdguez. CIM. 2006.</li>
    <li>Desarrollo tecnológico de una formulación cápsulas Vimang 300 mg. Lic Ritsie Ruiz Caballero. CQF. 2007.</li>
    <li>Remodelación de una nave del combinado óptico para la producción de extractos y tinturas a partir de drogas vegetales, para la fabricación de medicamentos líquidos. Ing. Gladys C. Álvarez Santos. Saúl Delgado. 2007.</li>
    <li>Desarrollo de una formulación de Atenolol 25 mg tabletas. Lic. Luis E. Bejerano Hdez. NOVATEC. 2007.</li>
    <li>Diseño y evaluación de la formulación de Propocilén. Lic Zoila Ovies Cascaret. Reinaldo Gutiérrez. 2007.</li>
    <li>Introducción industrial de tabletas anticonceptivas Etinor y Aminor. Pedro A. Santiesteban Montiel. Lic Reinaldo Gutiérrez. 2007.</li>
    <li>Formulación de tabletas de Acitan a partir del polvo del pseudotallo del plátano (psp) proveniente de la especia Musa paradisiaca L. Lic. Ubaldo Melik Salazar. Labiofam Oriente. 2008.</li>
    <li>Estudio de matrices combinadas de Dextrana-HPMC y alcohol cetílico. Aplicabilidad de la compresión asistida por ultrasonido. Lic Nguyen Le Trung. Viet Nam. 2008.</li>
    <li>Desarrollo de una nueva formulación por compresión directa para el producto Amitriptilina 25, tabletas revestidas. Lic Yaselys Bécquer Ferreira. MEDSOL. 2008.</li>
    <li>Remodelación de una nave del combinado óptico de El Cano, para construir una planta de envase de tabletas en blister que cumpla con las BPP. Lic Iván R. Santana Segura. MEDSOL. 2009.</li>
    <li>Obtención y caracterización física de un extracto seco de las hojas de la especie Tamarindus indica L. para compresión directa. Lic Jesús R. Rodríguez Amado. U.O. 2009.</li>
    <li>Formulación de comprimidos a partir de un extracto blando de las hojas de la especie Tamarindus indica L. Lic. Ariadna Lafourcade Prada. Lab. Oriente. 2009.</li>
    <li>Recubrimiento acuoso de tabletas con matrices hidrofílicas, utilizando Koloidon V-4. Lic José Lizardo Lara. MEDSOL. 2009.</li>
    <li>Nueva formulación de ácido nalidíxico-500mg, tabletas. Lic Manuel Alonso. MEDSOL. 2009.</li>
    <li>Remodelación de un almacén de reactivos. Aplicación de las Buenas Prácticas de Almacenamiento. Lic. Joana Lima González. 2010.</li>
    <li>Diseño tecnológico de una Planta de Cefalosporinas Inyectables. Lic. Adely Río Pérez. 2011.</li>
    <li>Diseño de la Planta de Tabletas de la Empresa Laboratorio Farmacéutico “Oriente”. Lic. Julia Cleger. 2011.</li>
    <li>Calificación de dos equipos mezcladores de la Empresa Laboratorio “Oriente”. Ing. Mario Hung. 2011.</li>
    <li>Remodelación de los Laboratorios de Análisis Físico-Químico y Control Microbiológico de la Empresa Laboratorio Farmacéutico “Reinaldo Gutiérrez”. Lic. Martha Plasencia. 2011.</li>
    <li>Proceso tecnológico de elaboración de una dispersión sólida de ciclosporina A mediante secado por atomización. Lic. Susleby Salomón Izquierdo. 2011.</li>
    <li>Diseño de una Planta de Cefalosporinas Orales. Lic. Dayma Aguilera Soto. 2012.</li>
    <li>Organización Productiva de la Planta de Cefalosporinas Orales. Ing. Xenia Madrazo Sagré. 2012.</li>
    <li>Remodelación de locales para instalación de una planta de producción de concentrados para hemodiálisis. Ing. José Antonio Candel Gómez. 2012.</li>
    <li>Cualificación de la máquina multicanal Contadora-Llenadora Multicanal modelo ACS-20S. Ing Yurian Martínez Frómeta 2012.</li>
    <li>Control del proceso de fabricación de tabletas por vía húmeda. Una aplicación en Excel. Ing. Carlos Aníbal Villalón Sevilla. 2012.</li>
    <li>Formulación de cápsulas duras a partir del extracto blando de las hojas de tamarindus indica L. Lic. Liana Pérez Rondón. 2012.</li>
    <li>Reformulación de tinidazol 500mg tabletas. Lic. Mayda Martínez Cutiño. 2013.</li>
    <li>Desarrollo de una nueva formulación de ranitidina 150mg tabletas por compresión directa. Ing. Bárbara Formoso Acosta. 2013.</li>
    <li>Remodelación de una edificación existente para la instalación de una planta de producción de Sales de Rehidratación Oral. Lic. Alicia Ivette Sánchez Mujica. 2013.</li>
    <li>Reingeniería de la instalación y el proceso de producción de líquidos en Acrilest. Ing. Lien Pérez Morales. 2013.</li>
    <li>Diseño de tabletas del complejo multivitamínico POLIVIT, por compresión directa. Lic. Jorge David Fundora Nieto. 2014.</li>
    <li>Remodelación de la Planta de Producción de Vendas Enyesadas de la Empresa Laboratorio Farmacéutico “Oriente”. Lic. Jerry Cano. 2014.</li>
    <li>Estudio preliminar de las potencialidades de la Zeolita en el control de la liberación del ión litio en formas farmacéuticas. Lic. Ahmad Khirouz. 2015.</li>
    <li>Obtención de la formulación de vacuna toxoide tetánico veterinario en un fermentador de 150 L. Ing. Maydolis Álvarez Tito. 2015.</li>
    <li>Metodología para la Evaluación del Desempeño basado en Competencias Laborales en la Empresa Laboratorio Farmacéutico Líquidos Orales Medilip. Lic. Rolando Viera Valdés. 2016.</li>
</ul>

<!-- MAESTRANDOS ACTUALES -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-user-graduate" style="margin-right: 10px; color: #c62828;"></i>MAESTRANDOS ACTUALES
</h2>
<p style="margin-bottom: 20px; text-align: left;">
    En la actualidad, tutorea otras 12 tesis de Master. Ha tutoreado 148 Tésis de Diploma (Tésis de Titulación). Ha presentado 202 trabajos en eventos científicos nacionales e internacionales.
</p>

<!-- CONDECORACIONES -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-medal" style="margin-right: 10px; color: #c62828;"></i>CONDECORACIONES
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
    <li>Distinción por la Educación Cubana.1993. Consejo de Estado de la República de Cuba</li>
    <li>Medalla "Hazaña Laboral". Consejo de Estado de la República de Cuba.</li>
    <li>Medalla “José Tey”. Consejo de Estado de la República de Cuba. 1998</li>
    <li>Orden "Jesús Menéndez". Consejo de Estado de la República de Cuba. 2000</li>
    <li>Medalla conmemorativa de la Universidad de Helsinki, Finlandia. 2001</li>
    <li>Sello “270 Aniversario de la Universidad de la Habana”.1997.</li>
    <li>Sello “Forjadores del Futuro” en dos ocasiones 1977 y 1978. Brigadas Técnico Juveniles</li>
    <li>Orden “Juan Tomás Roig”. Consejo de Estado de la República de Cuba. 2004.</li>
    <li>Medalla “Rafael Ma. de Mendive”. Consejo de Estado de la República de Cuba. 2005.</li>
    <li>Orden “Frank País” segundo grado. Consejo de Estado de la República de Cuba 2007.</li>
    <li>Medalla 280 Aniversario de la Universidad de la Habana. 2009</li>
    <li>Orden “Frank País”, primer grado. 2013</li>
</ul>

<!-- RECONOCIMIENTOS RECIBIDOS MÁS RELEVANTES -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-trophy" style="margin-right: 10px; color: #c62828;"></i>RECONOCIMIENTOS RECIBIDOS MÁS RELEVANTES
</h2>
<p style="margin-bottom: 20px; text-align: left;">
    - Profesor más Destacado en Docencia Directa de la UH. 1990<br>
    - Profesor más destacado integralmente del IFAL (Lo ha obtenido en 9 ocasiones)<br>
    - Investigador más destacado del IFAL (Lo ha recibido 6 veces)<br>
    - Propuesto para la Distinción Especial del Ministro de Educación Superior (13 ocasiones)<br>
    - Profesor más destacado integralmente de la Universidad de La Habana. 1994.<br>
    - Distinción Especial del Ministro de Educación Superior. Docencia.1994<br>
    - Profesor más destacado integralmente de la Universidad de La Habana. 1996<br>
    - Distinción Especial del Ministro de Educación Superior. Postgrado.1996.<br>
    - Profesor más destacado integralmente de la Universidad de La Habana. 2004.<br>
    - Distinción Especial del Ministro de Educación Superior. Docencia. 2004.<br>
    - Profesor más destacado integralmente de la Universidad de La Habana. 2007.<br>
    - Distinción Especial del Ministro de Educación Superior. Docencia  2007<br>
    - Vanguardia Provincial.1993. Sindicato de la Educación.<br>
    - Vanguardia Nacional.1994.Sindicato de la Educación.<br>
    - Vanguardia Nacional.1995.Sindicato de las Ciencias.<br>
    - Vanguardia Nacional.1996.Sindicato de las Ciencias.<br>
    - Vanguardia Nacional.1997.Sindicato de las Ciencias.<br>
    - Vanguardia Nacional.1998.Sindicato de las Ciencias.<br>
    - Vanguardia Nacional. 1999. Sindicato de las Ciencias.<br>
    - Vanguardia Nacional.2000. Sindicato de las Ciencias<br>
    - Vanguardia Nacional.2001. Sindicato de las Ciencias<br>
    - Vanguardia Provincial.2002. Sindicato de las Ciencias.<br>
    - Vanguardia Nacional. 2003. Sindicato de las Ciencias.<br>
    - Vanguardia Nacional. 2004.  Sindicato de las Ciencias<br>
    - Vanguardia Nacional. 2007.  Sindicato de las Ciencias<br>
    - Vanguardia Nacional. 2008.  Sindicato de las Ciencias<br>
    - Vanguardia Nacional. 2009.  Sindicato de la Educación.<br>
    - Vanguardia Nacional. 2010.  Sindicato de la Educación.<br>
    - Profesor más destacado en trabajo doctoral de la Universidad de La Habana. 1996<br>
    - Profesor más destacado en el trabajo de Maestrías de la Universidad de La Habana. 1997.<br>
    - Profesor más destacado en el trabajo de Maestrías de la Universidad de La Habana. Mención. 1998.<br>
    - Profesor más destacado integralmente de la Universidad de La Habana. 1999.<br>
    - Profesor más destacado integralmente de la Universidad de La Habana.2000.<br>
    - Profesor más destacado en el trabajo de Maestrías de la Universidad de La Habana. Mención. 2001.<br>
    - Profesor más destacado en el trabajo de Maestrías de la Universidad de La Habana. Mención. 2002.<br>
    - Profesor Invitado de la Universidad Autónoma de Campeche, México.1995<br>
    - Profesor Invitado de la Universidad Veracruzana, México.1996<br>
    - Profesor Invitado de la Universidad Autónoma de Honduras.1997<br>
    - Profesor Invitado de la BUAP, México. 2000.<br>
    - Investigador Invitado de la Universidad de Helsinki, Finlandia.1992<br>
    - Profesor Invitado de la División de Tecnología Farmacéutica de la Universidad de Helsinki, Finlandia.2001.<br>
    - Profesor Invitado de Honor de la División de Tecnología Farmacéutica de la Universidad de Helsinki, Finlandia.2002.<br>
    - Profesor más destacado de la Universidad de la Habana en el Trabajo de Maestría. Premio. 2003.<br>
    - Investigador más Destacado de la Universidad de la Habana. 2004.<br>
    - Profesor Invitado de la Universidad de San Marcos. Guatemala. 2005.<br>
    - Profesor Invitado de la Universidad de San Cristóbal de Huamanga. Perú. 2005.<br>
    - Profesor Invitado de la Universidad de Guayaquil. Ecuador. 2006.<br>
    - Profesor más Destacado Integralmente de la UH. 2008<br>
    - Profesor más Destacado Integralmente de la UH. 2009<br>
    - Profesor más destacado en el postgrado internacional en Cuba de la UH. Mención. 2008<br>
    - Premio a la Obra Científica de la Vida. Universidad de la Habana. 2010.<br>
    - Destacado “Alma Mater”, desde su creación en 1993 hasta 2015.<br>
    - Tiza de Oro. 1996, 1998, 2004. 2015.<br>
    - Profesor más Destacado en Trabajo Metodológico del IFAL. 2015<br>
    - Profesor más Destacado en Trabajo Docente Metodológico de la Universidad de la Habana. 2015.<br>
    - Distinción Especial del Ministro de Educación Superior. Trabajo Docente Metodológico. 2016.<br>
    - Profesor Emérito de la Universidad de la Habana y del Ministerio de Educación Superior de la República de Cuba. 2017.
</p>

<!-- PREMIOS CIENTÍFICOS RECIBIDOS -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-award" style="margin-right: 10px; color: #c62828;"></i>PREMIOS CIENTÍFICOS RECIBIDOS
</h2>
<p style="margin-bottom: 20px; text-align: left;">
    - VII Forum de Ciencia y Técnica Nacional. Mención. 1992.<br>
    - VIII Forum de Ciencia y Técnica Nacional. Destacado. 1993.<br>
    - IX Forum de Ciencia y Técnica Nacional. Mención especial. 1994.<br>
    - X Forum de Ciencia y Técnica Nacional. Mención. 1995.<br>
    - XI Forum de Ciencia y Técnica Nacional. Mención. 1996.<br>
    - Premio al Trabajo de mayor aporte económico. UH, 1993.<br>
    - Mejor colectivo de Investigación. Mención. UH, 1993.<br>
    - Mayor aporte al aprovechamiento de los recursos naturales. UH,  1994.<br>
    - Primer premio en la Comisión de Medicamentos. UH, 1995.<br>
    - Mención en la Comisión de Medicamentos. UH, 1995.<br>
    - Mejor Maestría. UH, 1995. Coordinador de la Maestría.<br>
    - Mención al mejor trabajo en la línea de medicamentos, biomateriales y diagnosticadores. UH. 1996.<br>
    - Mejor Maestría UH, 1999. Mención. Coordinador de la Maestría.<br>
    - Premio Nacional de la Academia de Ciencias de la Républica de Cuba. “Elaboración de medicamentos a partir de productos activos zeolíticos”. Autor Principal. 1999.<br>
    - Premio Nacional de la Academia de Ciencias de la Républica de Cuba. “Utilización de la dextrana técnica cubana en la elaboración de medicamentos”. 1999.<br>
    - Premio UH al mejor trabajo en la dirección de nuevos materiales. 2001.<br>
    - Mejor Colectivo de Investigación de la UH. Mención. 2003.<br>
    - Trabajo de mayor trascendencia y originalidad de la UH. Mención. 2004.<br>
    - Mejor Colectivo de Investigación de la Universidad de la Habana. Premio. 2004.<br>
    - Premio UH al mejor artículo científico. 2006.<br>
    - Premio nacional de la Academia de Ciencias de Cuba “Procesos analíticos tecnológicos (PAT) para el desarrollo de un nuevo excipiente farmacéutico obtenido como derivado de la industria azucarera cubana”. Autor Principal. 2008.<br>
    - Premio Universidad de la Habana. “Procesos analíticos tecnológicos (PAT) para el desarrollo de un nuevo excipiente farmacéutico obtenido como derivado de la industria azucarera cubana”. 2008.<br>
    - Premio “Alma Mater” “Procesos analíticos tecnológicos (PAT) para el desarrollo de un nuevo excipiente farmacéutico obtenido como derivado de la industria azucarera cubana”. 2008.
</p>
<p style="margin-bottom: 20px; text-align: left;">
    En total:<br>
    - 5 veces Distinción Especial del Ministro de la Educación Superior<br>
    - 14 veces Vanguardia Nacional<br>
    - 2 veces Vanguardia Provincial<br>
    - 40 Premios Universitarios<br>
    - 3 Premios de la ACC<br>
    - 4 Premios FCT nacional<br>
    Ha obtenido diversos premios adicionales en concursos científicos.
</p>

<!-- LÍNEAS DE INVESTIGACIÓN QUE DIRIGE EN LA UH -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-flask" style="margin-right: 10px; color: #c62828;"></i>LÍNEAS DE INVESTIGACIÓN QUE DIRIGE EN LA UH
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
    <li>Programa de Formas terminadas (genéricos)</li>
    <li>Medicamentos de liberación controlada</li>
</ul>

<!-- POSTGRADOS O ENTRENAMIENTOS QUE IMPARTE -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-chalkboard-teacher" style="margin-right: 10px; color: #c62828;"></i>POSTGRADOS O ENTRENAMIENTOS QUE IMPARTE
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
    <li>Tecnología de Formas Farmacéuticas Sólidas</li>
    <li>Tecnología de Formas Farmacéuticas semisólidas</li>
    <li>Medicamentos de acción controlada</li>
    <li>Microencapsulación</li>
    <li>Sistemas Terapéuticos de Avanzada</li>
    <li>Buenas Prácticas de Producción</li>
    <li>Operaciones Unitarias en Tecnología Farmacéutica. Validación</li>
    <li>Validación de Procesos</li>
    <li>Asesoramiento en planes de estudio de Ciencias Farmacéuticas</li>
    <li>Aseguramiento y Control de la Calidad en la Industria Farmacéutica</li>
    <li>Diseño de Instalaciones Farmacéuticas</li>
    <li>Dirección Estratégica</li>
    <li>Cambio Organizacional</li>
</ul>


<!-- Dr. Luis CRUZ-RODRIGUEZ -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-user-md" style="margin-right: 10px; color: #c62828;"></i>Dr. Luis CRUZ-RODRIGUEZ
</h2>
<p style="margin-bottom: 20px; text-align: left;">
    He does research in virology, Molecular Biology, and Cell Biology. Since 2002, he has focused on virology and Hereditary Cancer Diseases, with more than 40 scientific publications. His most recent copyrights include:
</p>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
    <li>Algorithms "CRUZ-RODRIGUEZ (CR)" as a tool to design multiepitope RNA-peptide vaccines against Breast/Ovarian and Lung cancer Diseases. Evaluation of Fusion Stability (FS), Exosome Affinity (EA), and Optimal Biological Action (OBA).</li>
    <li>Algorithms CRUZ-RODRIGUEZ (CR). Calculation of Fusion Stability of [DNA or RNA]-Peptide (FS) and the Exosome Affinity between miRNA-peptide and Exosome (EA).</li>
    <li>How to calculate the number of biological entities according to security distance with specific pathogens. Statistical and mathematical analysis on SARS-CoV2: Viral Transmission in Enclosed Areas. Health Insurance Status and Risk Factors on COVID-19.</li>
</ul>
<p style="margin-bottom: 20px; text-align: left;">
    These accomplishments culminated in his patent for a "VACCINE RNA-PEPTIDE AGAINST SARS-2 CoV-2 WITH ENDOGENOUS EXOSOMES AS CARRIER."
</p>

<!-- Formación -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
    <i class="fas fa-graduation-cap" style="margin-right: 10px; color: #1b5e20;"></i>Formation
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
    <li>2014: PhD in Physiology and Molecular Genetics: UNIVERSITY CLERMONT FERRAND 2, BLAISE PASCAL - CLERMONT FERRAND, France.</li>
    <li>2009: MASTER in PROTEOME AND GENOMIC: UNIVERSITY PARIS VII, PARIS, France.</li>
    <li>2002: Graduated in Biochemistry (Bac+5): UNIVERSITY OF HABANA, Cuba.</li>
</ul>

<!-- Experiencia laboral -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #ef6c00; padding-bottom: 10px;">
    <i class="fas fa-briefcase" style="margin-right: 10px; color: #ef6c00;"></i>Work Experience
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
    <li>07/2022: CEO of ELIDAN GOLD LABEL LLC, Tampa, FLORIDA, USA.</li>
    <li>06/2022: CEO of ELIDAN DREAMS LLC, Tampa, FLORIDA, USA.</li>
    <li>07/2020－Present: CEO of ELIDAN AMERICA LLC, Miami, FLORIDA, USA.</li>
    <li>01/2020－Present: CEO and President of ELIDAN DYNAMIC CORP, Tampa, FLORIDA, USA.</li>
    <li>11/2018－2020: CEO and President of ELIDAN GENOME SAS, Montereau Fault Yonne, France.</li>
    <li>11/2013－05/2017: Manager Director of Research and Development in Biotechnology and Biopharmacie, CESA ALLIANCE SA, Luxembourg.</li>
    <li>01/2010－02/2011: Post Doc: Responsable of Research, PROTENIA SA－ Université de AL AKHAWAYN, Marocco.</li>
    <li>2007－2010: Molecular Screening using SSCP, PCR ARMS of breast cancer in Cuban population. Collaboration with l'IARC, Lyon France.</li>
    <li>09/2002－07/2007: Research Biochemist, National institute of Genetics Diseases, INGM, Havana, CUBA.</li>
</ul>

<!-- Competencias -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-cogs" style="margin-right: 10px; color: #c62828;"></i>Competence
</h2>
<p style="margin-bottom: 20px; text-align: left;">
    Dr. Luis CRUZ RODRIGUEZ is currently responsible for Research and Development Scientifiques (CEO) and President of Elidan Dynamic Corporation, receiving nine patents and four copyrights assigned in the USA. Trained in:
</p>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
    <li>Bioinformatics Analysis of Protein Sequences, DNA vaccine design, RNA-Protein vaccine design, Protein vaccine design.</li>
    <li>Bioinformatics Analysis of DNA Sequences.</li>
    <li>Confocal Microscopy, Protein Sequencing.</li>
    <li>Cell Culture, Molecular Genetics, Extraction Cell Line, Genetic Engineering.</li>
    <li>Bacterial Transformation, Restriction Digestion, Plasmid Cloning, Plasmid Extraction, Plasmid Expression.</li>
    <li>Culture Gel, Electrophoresis, DNA Gene Expression, Western Blot, Southern Blot.</li>
    <li>Analysis Cloning, Electrophoresis, DNA Isolation, DNA Extraction, DNA Sequencing, RNA Isolation.</li>
    <li>Reverse Transcription, SDS-PAGE, DNA Amplification, PCR/ Hot PCR/ RT PCR/ ARMS PCR/ qPCR, Immunofluorescence RNA.</li>
    <li>Transfection RNA, DNA Gel Electrophoresis, Agarose Gel Electrophoresis.</li>
    <li>Culture Bacterial, Protein Expression, Protein Purification.</li>
</ul>

<!-- Publicaciones científicas -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
    <i class="fas fa-book" style="margin-right: 10px; color: #1b5e20;"></i>Scientific Publications
</h2>
<p style="margin-bottom: 20px; text-align: left;">Copyrights (2020-2021)</p>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
    <li>Cruz-Rodriguez L. “LONGLIFE calculator as predictor tool in anti-aging olive oil resin using ELIDANLORD food Menu”. U.S. Copyright number. Xu002405581. Registered: 12/08/2023.</li>
    <li>Cruz-Rodriguez L. “Algorithms CRUZ-RODRIGUEZ (CR) as a tool to design multiepitope RNA-peptide vaccines against Breast/Ovarian and Lung cancer Diseases. Evaluation of Fusion Stability (FS), Exosome Affinity (EA), and Optimal Biological Action (OBA)”. U.S. Copyright number. TXu002244018. Registered: 02/04/2021.</li>
    <li>Cruz-Rodriguez L. “Algorithms CRUZ-RODRIGUEZ (CR)”. Calculation of Fusion Stability of [DNA or RNA]-Peptide (FS) and the Exosome Affinity between miRNA-peptide and Exosome (EA)”. U.S. Copyright number. TXu002229629. Registered: 12/04/2020.</li>
    <li>Cruz-Rodriguez L. “How to calculate the number of biological entities according to security distance with specific pathogens. Statistical and mathematical analysis on SARS-CoV2: Viral Transmission in Enclosed Areas. Health Insurance Status and Risk Factors on COVID-19”. U.S. Copyright number. TXu002227926. Registered: 11/09/2020.</li>
</ul>

<!-- Datos personales -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-address-card" style="margin-right: 10px; color: #c62828;"></i>Personal Information
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: none; text-align: left;">
    <li><strong>Name:</strong> Yovani Marrero Ponce</li>
    <li><strong>Birthplace:</strong> Placetas, Villa Clara.</li>
    <li><strong>Date of Birth:</strong> July 17, 1977.</li>
    <li><strong>Place of Residence:</strong> Camajuani, Villa Clara, Cuba.</li>
    <li><strong>Home Address:</strong> Independencia Interior s/n, et Santa Teresa and Luz Caballeros.</li>
    <li><strong>Nationality:</strong> Cuban.</li>
    <li><strong>Sex:</strong> Male.</li>
    <li><strong>Marital Status:</strong> Single, one child.</li>
    <li><strong>Phone Number:</strong> (53)-(42)-482975.</li>
</ul>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: none; text-align: left;">
    <li><strong>Affiliations and mailing address:</strong></li>
    <li>Unit of Computer-Aided Molecular “Biosilico” Discovery and Bioinformatic Research (CAMD-BIR Unit), Department of Pharmacy, Faculty of Chemistry-Pharmacy. Central University of Las Villas, Road to Camajuani Km 5 ½, Santa Clara, Villa Clara, 54830, Cuba.</li>
    <li>Guest Researcher at: Institut Universitari de Ciencia Molecular, Universitat de Valencia. Edifici d'Instituts de Paterna, P.O. Box 22085. Poligon la Coma s/n (darrere Canal Nou), E-46980 Paterna, Valencia, Spain.</li>
</ul>

<!-- Información de Contacto -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
    <i class="fas fa-address-book" style="margin-right: 10px; color: #c62828;"></i>Contact Information
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: none; text-align: left;">
    <li><strong>Fax:</strong> 53-42-281130 [or 53-42-281455] (Cuba) and 34.963543576 (València)</li>
    <li><strong>Telephone:</strong> 53-42-281192 [or 53-42-281473] (Cuba) and 34.963544431 (València)</li>
    <li><strong>Cell:</strong> 610028990</li>
    <li><strong>Email:</strong> ymarrero77@yahoo.es, ymponce@gmail.com, yovanimp@qf.uclv.edu.cu</li>
    <li><strong>URL:</strong> <a href="http://www.uv.es/yoma/">http://www.uv.es/yoma/</a></li>
</ul>
<blockquote style="font-style: italic; color: #666; text-align: left;">
    "... It is exactly the possibility to carry out a dream that makes life interesting.”
    <br>— Paulo Coelho, “The Alchemist”
</blockquote>

<!-- Educación -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
    <i class="fas fa-graduation-cap" style="margin-right: 10px; color: #1b5e20;"></i>EDUCATION (ACADEMIC BACKGROUND)
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: none; text-align: left;">
    <li><strong>Philosophical Doctor (Ph.D):</strong> Chemical Sciences, Havana University, Havana City, Cuba. 7/05.</li>
    <li><strong>Dissertation:</strong> Molecular Quadratic Indices: Applications to Molecular Design in QSAR/QSPR Studies.</li>
    <li><strong>Dissertation Advisors:</strong> Luis A. Montero Cabrera, Dr. rer. nat.; Francisco Torrens Zaragoza, Ph.D.; and Miguel A. Cabrera Pérez, Ph.D.</li>
</ul>

<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: none; text-align: left;">
    <li><strong>Master of Science (M.Sc):</strong> Biochemistry, Medical University “Dr. Serafin Ruiz de Zarate Ruiz”, Santa Clara, Villa Clara, Cuba. 1/02-2/04.</li>
    <li><strong>Dissertation:</strong> Topological Molecular Computer Design (TOMOCOMD): A Promising Approach for Computed-Aided Molecular Design.</li>
    <li><strong>Dissertation Advisors:</strong> Miguel A. Cabrera Pérez, Ph.D.; Luis A. Montero Cabrera, Dr. rer. nat.; and Francisco Torrens Zaragoza, Ph.D.</li>
</ul>

<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: none; text-align: left;">
    <li><strong>Bachelor of Science (B.Sc):</strong> Pharmaceutical Sciences, Central University of Las Villas, Santa Clara, Villa Clara, Cuba, 7/01.</li>
    <li><strong>Golden Award for Academic Results:</strong> 7/01.</li>
    <li><strong>Thesis:</strong> TOSS-MODE Based QSPR/QSAR Models for Analgesic and Anti-inflammatory Activity of Capsaicin Analogues.</li>
    <li><strong>Thesis Advisors:</strong> Humberto Gonzales Díaz, Ph.D.</li>
</ul>

<!-- Experiencia Postdoctoral -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #ef6c00; padding-bottom: 10px;">
    <i class="fas fa-flask" style="margin-right: 10px; color: #ef6c00;"></i>Post-doctoral Experience
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
    <li>Department of Chemical-Physics, Faculty of Chemistry; and Institut Universitari de Ciencia Molecular. University of València, Burjassot (València), Spain. 7/05-1/06.</li>
    <li>Departament of Parasitology, Faculty of Veterinarian Medicinal and Zootecnic. UNAM, México, D.F. 04510, México. 6/06-8/06.</li>
    <li>Unit of Molecular Connectivity and Drug Design, Department of Chemical-Physics, Faculty of Pharmacy. University of València, Burjassot (València), Spain. 9/06-12/06.</li>
    <li>Institut Universitari de Ciencia Molecular (ICMoL). University of València, Burjassot-Paterna (València), Spain. 1/07-6/07.</li>
</ul>
<blockquote style="font-style: italic; color: #666; text-align: left;">
    "Indeed, we are still waiting for the rise of computational drug discovery.”
    <br>— Apweiler, R. Biosilico. 2003, I, 5-6.
</blockquote>

<!-- Experiencia Docente y de Investigación -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
    <i class="fas fa-chalkboard-teacher" style="margin-right: 10px; color: #1b5e20;"></i>Higher Education Teaching Themes and Scientific Research
</h2>

<h3 style="font-size: 20px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    <i class="fas fa-book-reader" style="margin-right: 10px; color: #1b5e20;"></i>Teaching Experience
</h3>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: none; text-align: left;">
    <li><strong>Organic and Medicinal Chemistry Professor:</strong> Faculty of Chemistry and Pharmacy, Central University of Las Villas, Cuba. 9/01-7/03.</li>
    <li><strong>Biochemistry and Molecular Pharmacology Professor:</strong> Faculty of Chemistry and Pharmacy, Central University of Las Villas, Cuba. 8/04-Present.</li>
</ul>

<h3 style="font-size: 20px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 5px;">
    <i class="fas fa-vials" style="margin-right: 10px; color: #1b5e20;"></i>Research Experience
</h3>
<p style="margin-bottom: 20px; text-align: left;">
    Drug Discovery and Molecular Design, Chem-Bio-Informatic, Chemometric, Molecular Modelling, Computational and Theoretical Chemistry Specialist. Unit of Computer-Aided Molecular “Biosilico” Discovery and Bioinformatic Research (CAMD-BIR Unit), Faculty of Chemistry-Pharmacy and Drug Design Laboratory, Chemical Biaoctive Center. Cuba. 7/01-Present.
</p>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
    <li>Definition and computational-implementation of novel molecular and bio-macromolecular descriptors for chem-bio-informatics investigations.</li>
    <li>Perform computational models to predict chem-physics, pharmacokinetics (ADME), pharmacology, and toxicology properties/activities through 2D-topological, 3D-chiral, geometric and topographic molecular and macromolecular descriptors.</li>
    <li>2D, 3D database searching & characterization of molecular similarity.</li>
    <li>Database mining for hit and lead structure search.</li>
    <li>Computer-aided “rational” drug (molecular) design and selection/identification of new lead compounds using computational (virtual and in silico) screening procedure.</li>
    <li>Generation of pharmacophore models (pharmacophore modelling) for the design of new bio-active compounds.</li>
    <li>Develop of bio-macromolecular descriptors for the study of protein and nucleic acid classification, macromolecule-drug interactions, proteins folding degree, Docking and Scoring.</li>
    <li>Integrating wet-lab and in silico discovery techniques.</li>
</ul>

<!-- Idiomas -->
<h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #283593; padding-bottom: 10px;">
    <i class="fas fa-language" style="margin-right: 10px; color: #283593;"></i>LANGUAGES
</h2>
<ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: none; text-align: left;">
    <li><strong>Spanish:</strong> Native.</li>
    <li><strong>English:</strong> Speak, write, read, and translate well.</li>
</ul>
<blockquote style="font-style: italic; color: #666; text-align: left;">
    “…It is lots of fun to blow bubbles but it is wiser to prick them yourself before someone else tries to.”
    <br>— Oswald Avery
</blockquote>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/Publicaciones3.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Publicaciones en revistas científicas</span>
   </a>

<div class="expertise-section" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Expertise and Current Work Interests -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
        <i class="fas fa-lightbulb" style="margin-right: 10px; color: #1b5e20;"></i>EXPERTISE AND CURRENT WORK INTERESTS
    </h2>

    <!-- Teaching Interests -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        Teaching Main Interests
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        My current teaching interests include organic, bioorganic, and medicinal chemistry, as well as "rational" drug design. More recently, I am also interested in teaching molecular pharmacology and biochemistry.
    </p>

    <!-- Research Interests -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        Research Main Interests
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        My current research interests are in drug discovery, specifically the development of new computational methods for chem-bio-informatics investigations. I’m also interested in developing novel molecular and macromolecular (proteins and nucleic acids) descriptors for QSPR/QSAR, “rational” (computer-aided) drug design, molecular similarity characterization, computational (virtual and in silico) screening, protein and nucleic acid classification, macromolecule-drug interactions, folding degree description, and early pharmacokinetics and toxicity prediction. Recently, I have also become interested in comparative modeling, docking, and scoring. These research areas are powerful when used individually, but their true potential is unlocked when used together to provide a complete understanding of ligand-receptor interactions.
    </p>

    <!-- Keywords -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        Keywords
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Computer-Aided Drug (Molecular) Design, Cheminformatics, Bioinformatics, Computational Chemistry, Biochemistry.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Additional Terms: 2D/3D-Molecular Descriptors, 3D-QSAR/QSPR, Docking, Molecular Modeling, Computational (virtual and in silico) Screening.
    </p>
    <blockquote style="font-style: italic; color: #666; text-align: right; margin: 20px 0;">
        "No person is an island; much is owed to many." — H. P. Schultz
    </blockquote>

    <!-- Collaboration Partners -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
        <i class="fas fa-users" style="margin-right: 10px; color: #c62828;"></i>SOME OF OUR COLLABORATION PARTNERS
    </h2>

    <!-- Local Partners -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        Local
    </h3>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li>Dr. Miguel Ángel Cabrera-Pérez. Department of Drug Design, Chemical Bioactive Center.</li>
        <li>Dr. Humberto Gonzales Díaz. Department of Drug Design, Chemical Bioactive Center.</li>
        <li>Dr. Reinaldo Molina Ruiz. Department of Drug Design, Chemical Bioactive Center.</li>
        <li>Dr. Nilo Castañedo. Director of Chemical Bioactive Center.</li>
        <li>Dr. Erbelio Olazábal. Department of Parasitology, Chemical Bioactive Center.</li>
        <li>Dr. Ricardo Grau. Center of Studies on Informatics.</li>
        <li>Prof. Elisa Jorge. Department of Pharmacy, Faculty of Chemistry-Pharmacy.</li>
        <li>Prof. Leisy Nieto Reyes. Department of Pharmacy, Faculty of Chemistry-Pharmacy.</li>
        <li>Prof. Maykel Pérez González. Department of Drug Design, Chemical Bioactive Center.</li>
        <li>Prof. Liane Saíz Urra. Department of Drug Design, Chemical Bioactive Center.</li>
        <li>Prof. Yunierkis Perez Castillo. Department of Drug Design, Chemical Bioactive Center.</li>
    </ul>

    <!-- National Partners -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        National
    </h3>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li>Prof. Yoanna María Alvares-Ginarte. Pharmaceutical Chemistry Center, La Habana, Cuba.</li>
        <li>Prof. Rachel Crespo-Otero. Laboratory of Theoretical and Computational Chemistry, University of Havana, La Habana, Cuba.</li>
        <li>Dr. Ramón Carrasco. Pharmaceutical Chemistry Center, La Habana, Cuba.</li>
        <li>Prof. Luis Alberto Montero Cabrera. Laboratory of Theoretical and Computational Chemistry, University of Havana, La Habana, Cuba.</li>
        <li>Prof. Enrique Molina. Research Dean, Faculty of Chemical Engineering and Pharmacy, University of Camaguey, Cuba.</li>
        <li>Prof. Alfredo Peña. Faculty of Chemistry, University of Granma, Bayamo, Cuba.</li>
        <li>Dr. Quirino Arias Cedeño. Faculty of Chemistry, University of Granma, Bayamo, Cuba.</li>
        <li>Dr. M. Almeida. Faculty of Chemistry, University of Granma, Bayamo, Cuba.</li>
        <li>Prof. Rolando Alba Hernández. Faculty of Chemistry, University of Oriente, Santiago de Cuba, Cuba.</li>
    </ul>

    <!-- International Partners -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        International
    </h3>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li>Francisco Torrens. Institut Universitari de Ciència Molecular, Universitat de València, Spain.</li>
        <li>Eduardo A. Castro. INIFTA, División Química Teórica, La Plata, Buenos Aires, Argentina.</li>
        <li>Mahmud Tareq Hassan Khan. Department of Pharmacology, University of Tromsø, Norway.</li>
        <li>Maite Iyarreta-Veitía. Centre d'etudes Pharmaceutiques, Université Paris-Sud, France.</li>
        <li>Froylán Ibarra-Velarde. Department of Parasitology, UNAM, Mexico.</li>
        <li>Alma Huesca-Guillen. Department of Parasitology, UNAM, Mexico.</li>
        <li>Ysaías J. Alvarado. Universidad del Zulia, Maracaibo, Venezuela.</li>
        <li>Arjumand Ather. Center for Biotechnology, University of Ferrara, Italy.</li>
        <li>Mukhlis N. Sultankhodzhaev. S. Yunusov Institute of Chemistry of Plant Substances, Uzbekistan.</li>
        <li>Rory N. García-Sánchez. Universidad Nacional de la Amazonía Peruana, Iquitos, Peru.</li>
        <li>Carlos A. Brandt. Department of Organic Chemistry, Butantan Institute, São Paulo, Brazil.</li>
        <li>Juan J. Nogal-Ruiz. Department of Parasitology, UCM, Madrid, Spain.</li>
        <li>Antonio R. Martínez-Fernández. Department of Parasitology, UCM, Madrid, Spain.</li>
        <li>Vicente J. Arán. Instituto de Química Médica (CSIC), Madrid, Spain.</li>
        <li>María Celeste Vega. Department of Parasitology, UCM, Madrid, Spain.</li>
        <li>Miriam Rolón. Department of Parasitology, UCM, Madrid, Spain.</li>
        <li>Alicia Gómez-Barrio. Department of Parasitology, UCM, Madrid, Spain.</li>
        <li>José Antonio Escario. Department of Parasitology, UCM, Madrid, Spain.</li>
        <li>Juan José Nogal. Department of Parasitology, UCM, Madrid, Spain.</li>
        <li>Prof. Ramon García-Domenech. University of Valencia, Spain.</li>
    </ul>

    <!-- References -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #283593; padding-bottom: 10px;">
        <i class="fas fa-address-book" style="margin-right: 10px; color: #283593;"></i>REFERENCES
    </h2>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: none; text-align: left;">
        <li><strong>Prof. Francisco Torrens, Ph.D.</strong><br>
            Institut Universitari de Ciència Molecular<br>
            Departament de Química Física, Universitat de València<br>
            Dr. Moliner-50, E-46100 Burjassot (Valencia), Spain<br>
            Telephone: +34 963543182 | Fax: +34 963543156<br>
            e-mail: <a href="mailto:Francisco.Torrens@uv.es">Francisco.Torrens@uv.es</a>
        </li>
        <li style="margin-top: 15px;"><strong>Prof. Eduardo A. Castro, Ph.D.</strong><br>
            Director del Instituto de Investigaciones Fisicoquímicas Teóricas y Aplicadas (INIFTA)<br>
            División Química Teórica, Suc.4, C.C. 16, La Plata 1900, Buenos Aires, Argentina<br>
            e-mail: <a href="mailto:jubert@arnet.com.ar">jubert@arnet.com.ar</a> or <a href="mailto:castro@dalton.quimica.unlp.edu.ar">castro@dalton.quimica.unlp.edu.ar</a>
        </li>
        <li style="margin-top: 15px;"><strong>Prof. Mahmud Tareq Hassan Khan, Ph.D.</strong><br>
            Department of Biochemistry and Molecular Biology, Center for Biotechnology, University of Ferrara<br>
            Via L. Borsari, 46, I-44100 Ferrara, Italy<br>
            Office Phone: +39-0532-424505 | Cell: +39-335-1553899 | Fax: +39-0532-424500<br>
            e-mail: <a href="mailto:mthkhan2002@yahoo.com">mthkhan2002@yahoo.com</a><br>
            Website: <a href="http://myprofile.cos.com/mthkhan" target="_blank">http://myprofile.cos.com/mthkhan</a>
        </li>
        <li style="margin-top: 15px;"><strong>Prof. Maité Iyarreta-Veitía, Ph.D.</strong><br>
            Centre d'etudes Pharmaceutiques, CNRS Biocis UMR 8076, Laboratoire de Synthese de Composes d’Interet Biologique<br>
            Faculté de Pharmacie, Université Paris-Sud, 5 rue J.B. Clément, 92296 Chatenay-Malabry Cedex, France<br>
            e-mail: <a href="mailto:mmiivv@yahoo.com.br">mmiivv@yahoo.com.br</a>
        </li>
        <li style="margin-top: 15px;"><strong>Prof. Froylán Ibarra-Velarde, Ph.D.</strong><br>
            Head of Department of Parasitology, Faculty of Veterinarian Medicinal and Zootecnic, UNAM, Mexico<br>
            e-mail: <a href="mailto:ibarraf@servidor.unam.mx">ibarraf@servidor.unam.mx</a>
        </li>
        <li style="margin-top: 15px;"><strong>Dr. Ysaías J. Alvarado</strong><br>
            Laboratorio de Electrónica Molecular, Unidad Académica Química Inorgánica, Departamento de Química, Facultad Experimental de Ciencias, Universidad del Zulia, Venezuela<br>
            e-mail: <a href="mailto:yalvaradofec@yahoo.com">yalvaradofec@yahoo.com</a>
        </li>
        <li style="margin-top: 15px;"><strong>Prof. Nilo Ramón Castañedo Cancio, Ph.D.</strong><br>
            Director of Center of Chemical Bioactive, Central University of Las Villas, Road to Camajuaní Km. 51/2, Santa Clara, Villa Clara, Cuba P.C. 54830<br>
            Office: +53 (42) 281192, 281473 | Fax: +53 (42) 281130, 281455<br>
            e-mail: <a href="mailto:niloc@cbq.uclv.edu.cu">niloc@cbq.uclv.edu.cu</a>
        </li>
    </ul>
</div>

   

    <div style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">

    <!-- Publicaciones Científicas y Contribuciones -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        15.2. Publicaciones Científicas y Contribuciones
    </h3>
</div>

<!-- Botón para ir al enlace de referencias -->
<div style="text-align: left;">
   <a href="https://antiageg.com/publicaciones15.html" 
      style="
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         color: #c62828;
         border: 2px solid #c62828;
         border-radius: 25px;
         text-decoration: none;
         font-weight: bold;
         transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      "
      onmouseover="
         this.style.transform = 'scale(1.05)';
         this.style.color = '#fff';
         this.style.backgroundColor = '#c62828';
         this.style.borderColor = '#c62828';
      "
      onmouseout="
         this.style.transform = 'scale(1)';
         this.style.color = '#c62828';
         this.style.backgroundColor = 'transparent';
         this.style.borderColor = '#c62828';
      ">
      <span>Publicaciones en revistas científicas de alto impacto</span>
   </a>
</div>


<div class="logros-equipo" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Logros del Equipo de Científicos -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
        <i class="fas fa-trophy" style="margin-right: 10px; color: #1b5e20;"></i>15.3. Logros del Equipo de Científicos
    </h2>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li>Uno de nuestros científicos líder recibió en mayo 2020 un financiamiento de $40 millones del Gobierno de USA.</li>
        <li>Acreedores de la Medalla de Oro de la Organización Mundial de la Propiedad Intelectual (OMPI). Premio 1 millón 850 mil USD y una medalla de oro.</li>
        <li>Autores de vacunas, antibióticos y otros medicamentos de patentes considerados únicos en el mundo.</li>
        <li>Desarrollo de procedimientos de patentes para obtención de medicamentos, otros productos terapéuticos y alimentos veganos “inteligentes” con acciones sobre la salud.</li>
        <li>Medalla de Oro "RAMS" al mejor trabajo que otorgó derecho a participar en el 60º encuentros de “Premios Nobel” para jóvenes científicos.</li>
        <li>Desarrolladores del “Sistema Medicinal Inteligente” para diagnóstico precoz y auxiliar en la aplicación de protocolos médicos para la prevención, control, tratamiento, rehabilitación y cura de 150 enfermedades y 1084 síndromes. Fundado con 4.5 millones de USD.</li>
        <li>Desarrolladores de nuevas tecnologías y metodologías biofarmacéuticas que posibilitan incrementar la producción de medicamentos y la competencia e impacto social y económico de las industrias farmacéuticas. Fundado y avalado por la Comisión Europea con una financiación de 1.017.384 €.</li>
        <li>Concepción y creación de un laboratorio de inteligencia artificial para la predicción y el desarrollo racional de medicamentos para tratar enfermedades, síndromes y alteraciones. Fundado y avalado por la agencia de cooperación española con una financiación de 254.800 €.</li>
        <li>Desarrolladores de tecnologías en el campo de las ciencias biofarmacéuticas vinculadas al desarrollo de nuevos fármacos. Fundado y avalado por la agencia de cooperación española con una financiación de 230.000 €.</li>
        <li>Desarrolladores de modelos experimentales "in silico" para determinar y predecir modelos experimentales de biodisponibilidad mediante estudios de predicción de fármacos de patentes y aumentar la capacidad para registro de genéricos. Validado y avalado experimentalmente por la agencia de cooperación española con una financiación de 34.000 €.</li>
        <li>Acreedores de la Medalla "XXX" Aniversario de la Asociación Latinoamericana de Toxicología, por su contribución al desarrollo de la toxicología en América Latina.</li>
        <li>Decenas de premios otorgados por el Ministro de Educación Superior de Cuba a los trabajos de mayor relevancia científica en dicho país.</li>
        <li>Decenas de premios especiales otorgados por el Ministro de Ciencia, Tecnología y Medio Ambiente de Cuba, como resultados de las investigaciones de mayor relevancia científica en dicho país.</li>
        <li>Decenas de premios otorgados por la Academia de Ciencias de Cuba a trabajos científicos de mayor relevancia nacional en dicho país.</li>
        <li>Acreedores de decenas de premios Relevantes en “Fórum Nacionales” de Ciencias y Técnicas en Cuba, entre otros.</li>
    </ul>

    <!-- Registro y Certificaciones -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #c62828; padding-bottom: 10px;">
        <i class="fas fa-certificate" style="margin-right: 10px; color: #c62828;"></i>16. REGISTRO Y CERTIFICACIONES
    </h2>
    <p style="margin-bottom: 20px; text-align: justify;">
        “PPG NUTRITIONAL” ha logrado desarrollar una amplia gama de productos terapéuticos y nutricionales que hacen que la compañía se perfile hacia el liderazgo dentro de las industrias de productos terapéuticos de salud y la industria alimentaria con productos innovadores enmarcados en la categoría de “inteligentes”. Este éxito se fundamenta en tres pilares clave: certificaciones de calidad, cumplimiento de regulaciones en mercados clave y procesos de registro en diferentes países.
    </p>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>Certificaciones de Calidad:</strong> La calidad es un componente esencial en nuestra filosofía operativa. “PPG NUTRITIONAL” y sus socios han obtenido diversas certificaciones de calidad que validan nuestros procesos y productos. Estas certificaciones aseguran que nuestros productos sean seguros, efectivos y de alta calidad, cumpliendo con los estándares internacionales.</li>
        <li><strong>Regulaciones Cumplidas en Mercados Clave:</strong> “PPG NUTRITIONAL” trabaja en estrecha colaboración con nuestros socios para asegurar que todos nuestros productos cumplan con las normativas locales e internacionales. Esto incluye regulaciones relacionadas con la producción, etiquetado, y comercialización de alimentos, productos terapéuticos y suplementos nutricionales.</li>
        <li><strong>Procesos de Registro en Diferentes Países:</strong> La expansión internacional de “PPG NUTRITIONAL” se ha facilitado mediante la implementación de procesos de registro eficientes y adaptados a las legislaciones de cada país. Este enfoque nos permite agilizar el tiempo de lanzamiento al mercado y garantizar la disponibilidad de nuestros productos en múltiples regiones.</li>
    </ul>

    <!-- Mercado y Competencia -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
        <i class="fas fa-chart-line" style="margin-right: 10px; color: #1b5e20;"></i>17. MERCADO Y COMPETENCIA
    </h2>
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        17.1. Análisis de Mercado
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        En 2023, el mercado global de suplementos nutricionales experimentó un auge considerable, con un valor estimado en aproximadamente USD 160 mil millones. Este crecimiento se vio impulsado por factores como el envejecimiento de la población, el aumento de la conciencia sobre la salud preventiva, y una mayor demanda de productos que apoyen el sistema inmunológico. Los suplementos vitamínicos y minerales continuaron dominando este mercado, representando alrededor de USD 50 mil millones. Otros segmentos importantes incluyeron los suplementos de proteínas y aminoácidos, con ventas que alcanzaron USD 30 mil millones, y los productos herbales y botánicos, que generaron alrededor de USD 25 mil millones.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        El mercado mexicano, por ejemplo, ha mostrado un crecimiento robusto en las ventas de proteínas, bebidas y suplementos nutricionales en los últimos cinco años. En 2023, las ventas totales de bebidas ascendieron a $15.5 mil millones, siendo México el país con el mayor consumo per cápita de refrescos en el mundo. Finalmente, el mercado de suplementos nutricionales en México creció a $33.38 mil millones en 2023.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        En paralelo, el mercado global de alimentos procesados alcanzó un valor de aproximadamente USD 4.5 billones en 2023. Este mercado incluye productos como snacks, comidas preparadas, bebidas y productos congelados. Los snacks procesados representaron alrededor de USD 600 mil millones en ventas. Además, la intersección entre los alimentos procesados y los suplementos nutricionales ha dado lugar a la categoría emergente de alimentos funcionales y nutracéuticos, valorada en aproximadamente USD 275 mil millones en 2023.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        PPG NUTRITIONAL ha identificado una brecha crítica en el mercado global de suplementos nutricionales y alimentos procesados, lo que ofrece una oportunidad única para superar las debilidades existentes a través de la innovación. Nuestros productos inteligentes están formulados para prevenir, controlar, tratar y curar síndromes, alteraciones, y enfermedades, así como para revertir el proceso de envejecimiento en todas las personas. Este enfoque innovador está diseñado para revolucionar el mercado, estableciendo nuevos estándares en nutrición y suplementación inteligente.
    </p>

    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        17.2. Principales Competidores
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Nuestros principales competidores en el mercado de suplementos nutricionales son corporaciones que manejan miles de millones de dólares y millones de puntos de venta alrededor del mundo. Aunque tienen enormes recursos para investigación, desarrollo y producción, tienen limitaciones en la concepción sobre las necesidades reales de la población mundial de acceder a alimentos reales. Aquí se analiza a las grandes corporaciones, reflejando y describiendo los campos de acción y productos de altos valores de ventas.
    </p>
</div>

<div class="competencia-clientes" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Principales Competidores en el Mercado de Suplementos Nutricionales -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
        <i class="fas fa-industry" style="margin-right: 10px; color: #1b5e20;"></i>Principales Competidores en el Mercado de Suplementos Nutricionales
    </h2>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>Nestlé Health Science</strong><br>
            <em>Descripción:</em> División de Nestlé dedicada a la nutrición médica y suplementos para la salud.<br>
            <em>Productos Destacados:</em> Suplementos nutricionales específicos para diversas condiciones de salud, nutrición médica enteral, y productos de salud digestiva.
        </li>
        <li><strong>Danone Nutricia</strong><br>
            <em>Descripción:</em> Parte de Danone, se enfoca en nutrición médica especializada y productos para el cuidado de la salud.<br>
            <em>Productos Destacados:</em> Fórmulas de nutrición enteral y suplementos para necesidades dietéticas específicas.
        </li>
        <li><strong>Herbalife</strong><br>
            <em>Descripción:</em> Empresa global en el sector de nutrición y suplementos, conocida por su enfoque en control de peso y nutrición deportiva.<br>
            <em>Productos Destacados:</em> Suplementos para el control de peso, proteínas en polvo, y productos de nutrición deportiva.
        </li>
        <li><strong>Amway (Nutrilite)</strong><br>
            <em>Descripción:</em> Uno de los principales fabricantes de suplementos nutricionales directos al consumidor.<br>
            <em>Productos Destacados:</em> Suplementos de vitaminas, minerales, y productos específicos para la salud y el bienestar.
        </li>
        <li><strong>USANA Health Sciences</strong><br>
            <em>Descripción:</em> Compañía que se centra en el desarrollo de suplementos nutricionales y productos de cuidado personal.<br>
            <em>Productos Destacados:</em> Suplementos vitamínicos y minerales, antioxidantes y productos para el sistema inmunológico.
        </li>
        <li><strong>GNC (General Nutrition Centers)</strong><br>
            <em>Descripción:</em> Cadena de tiendas especializada en suplementos y productos de salud.<br>
            <em>Productos Destacados:</em> Suplementos vitamínicos, proteínas en polvo, y productos para el control de peso.
        </li>
    </ul>

    <!-- Principales Competidores en el Mercado de Alimentos Procesados -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
        <i class="fas fa-box" style="margin-right: 10px; color: #1b5e20;"></i>Principales Competidores en el Mercado de Alimentos Procesados
    </h2>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>PepsiCo</strong><br>
            <em>Descripción:</em> Multinacional con un portafolio extenso en alimentos y bebidas, que también incursiona en productos de nutrición.<br>
            <em>Productos Destacados:</em> Snacks, bebidas y alimentos procesados con una creciente línea de productos saludables.
        </li>
        <li><strong>The Kraft Heinz Company</strong><br>
            <em>Descripción:</em> Compañía global de alimentos y bebidas con un enfoque en productos envasados.<br>
            <em>Productos Destacados:</em> Alimentos preparados y procesados, salsas, y condimentos.
        </li>
        <li><strong>Unilever</strong><br>
            <em>Descripción:</em> Multinacional que ofrece una amplia gama de productos alimenticios y de cuidado personal.<br>
            <em>Productos Destacados:</em> Alimentos procesados, productos de nutrición y salud, y alimentos para bebés.
        </li>
        <li><strong>General Mills</strong><br>
            <em>Descripción:</em> Empresa con una fuerte presencia en el mercado de alimentos procesados y cereales.<br>
            <em>Productos Destacados:</em> Cereales, productos de panadería, y alimentos preparados.
        </li>
        <li><strong>Nestlé</strong><br>
            <em>Descripción:</em> Multinacional de alimentos y bebidas con un enfoque en productos tanto para el consumidor general como para necesidades específicas de salud.<br>
            <em>Productos Destacados:</em> Alimentos y bebidas, productos para nutrición infantil y médica.
        </li>
        <li><strong>Mondelez International</strong><br>
            <em>Descripción:</em> Compañía global especializada en bocadillos y dulces.<br>
            <em>Productos Destacados:</em> Galletas, chocolates, y otros snacks procesados.
        </li>
    </ul>

    <!-- Diferenciación de PPG NUTRITIONAL -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
        <i class="fas fa-star" style="margin-right: 10px; color: #1b5e20;"></i>Diferenciación de “PPG NUTRITIONAL”
    </h2>
    <p style="margin-bottom: 20px; text-align: justify;">
        “PPG NUTRITIONAL” se distingue en el mercado por su enfoque innovador en la nutrición inteligente, utilizando avances en genómica, proteómica, biología evolutiva y química espacial para desarrollar productos que no solo mejoran la salud, sino que también optimizan la longevidad y la calidad de vida. Mientras que los competidores tradicionales se centran en productos genéricos y soluciones de nutrición estándar, PPG NUTRITIONAL ofrece soluciones personalizadas y basadas en la biología específica de cada individuo, proporcionando una ventaja competitiva en términos de eficacia y personalización de los productos.
    </p>

    <!-- Principales Clientes -->
    <h2 style="font-size: 24px; color: #333; text-align: center; border-bottom: 2px solid #1b5e20; padding-bottom: 10px;">
        <i class="fas fa-users" style="margin-right: 10px; color: #1b5e20;"></i>18. CLIENTES Y SOCIOS COMERCIALES
    </h2>
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        18.1. Principales Clientes
    </h3>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>Instituciones de Salud y Hospitales</strong><br>
            <em>Descripción:</em> Centros médicos que buscan suplementos para mejorar el estado nutricional de sus pacientes y apoyar la recuperación y el tratamiento de enfermedades crónicas.<br>
            <em>Ejemplos:</em> Hospitales universitarios, clínicas de especialidad, y centros de salud integrados.
        </li>
        <li><strong>Centros de Investigación y Universidades</strong><br>
            <em>Descripción:</em> Instituciones dedicadas a la investigación en salud, nutrición y biotecnología que requieren productos avanzados para estudios clínicos y experimentales.<br>
            <em>Ejemplos:</em> Universidades con programas en ciencias de la salud, centros de investigación biomédica.
        </li>
        <li><strong>Industria Farmacéutica</strong><br>
            <em>Descripción:</em> Compañías que colaboran en el desarrollo de productos nutricionales complementarios a tratamientos médicos y terapias.<br>
            <em>Ejemplos:</em> Empresas farmacéuticas que buscan integrar suplementos inteligentes en sus portafolios de productos.
        </li>
        <li><strong>Minoristas y Distribuidores de Salud y Bienestar</strong><br>
            <em>Descripción:</em> Redes de farmacias, cadenas de tiendas y plataformas en línea especializadas en la venta de productos de salud y suplementos.<br>
            <em>Ejemplos:</em> Tiendas de suplementos nutricionales, cadenas de farmacias y plataformas de comercio electrónico como Amazon.
        </li>
        <li><strong>Consumidores Conscientes de la Salud</strong><br>
            <em>Descripción:</em> Individuos que buscan mejorar su bienestar general, prevenir enfermedades y prolongar su vida con calidad a través de productos avanzados.<br>
            <em>Ejemplos:</em> Personas interesadas en salud preventiva, longevidad y nutrición personalizada.
        </li>
        <li><strong>Veterinarios y Clínicas de Animales</strong><br>
            <em>Descripción:</em> Profesionales que buscan suplementos nutricionales para mejorar la salud y el bienestar de las mascotas y animales.<br>
            <em>Ejemplos:</em> Clínicas veterinarias, tiendas de suministros para mascotas.
        </li>
        <li><strong>Agricultores y Empresas de Cuidado de Plantas</strong><br>
            <em>Descripción:</em> Empresas y profesionales que requieren soluciones para mejorar la nutrición, crecimiento y protección de plantas.<br>
            <em>Ejemplos:</em> Empresas agrícolas, viveros, y distribuidores de productos para el cuidado de plantas.
        </li>
        <li><strong>Compañías de Nutrición Deportiva</strong><br>
            <em>Descripción:</em> Empresas enfocadas en productos para la mejora del rendimiento físico y la recuperación de atletas y entusiastas del fitness.<br>
            <em>Ejemplos:</em> Marcas de suplementos deportivos, gimnasios y centros de entrenamiento.
        </li>
        <li><strong>Organizaciones de Salud Pública y ONGs</strong><br>
            <em>Descripción:</em> Instituciones que implementan programas de salud y nutrición a nivel comunitario o global.<br>
            <em>Ejemplos:</em> Organizaciones internacionales de salud, fundaciones de investigación en salud.
        </li>
    </ul>

    <!-- Estrategias para Abordar a Estos Clientes -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        Estrategias para Abordar a Estos Clientes
    </h3>
    <ul style="margin-bottom: 20px; padding-left: 25px; list-style-type: disc; text-align: left;">
        <li><strong>Personalización de Productos:</strong> Adaptar los suplementos y alimentos inteligentes para satisfacer las necesidades específicas de cada segmento.</li>
        <li><strong>Educación y Formación:</strong> Proporcionar materiales educativos y formación sobre los beneficios de los productos para profesionales de la salud y consumidores.</li>
        <li><strong>Colaboraciones Estratégicas:</strong> Establecer asociaciones con instituciones de salud, investigación y minoristas para ampliar el alcance de los productos.</li>
        <li><strong>Marketing y Comunicación:</strong> Desarrollar campañas de marketing dirigidas a consumidores conscientes de la salud y profesionales de la industria para destacar la innovación y la eficacia de los productos.</li>
    </ul>

    <!-- Socios de Distribución -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        18.2. Socios de Distribución
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        PPG NUTRITIONAL ha logrado una estrategia, junto a sus socios, para posicionarnos de manera estratégica en el mercado global al firmar contratos de distribución, almacenamiento y marketing con corporaciones de gran renombre que nos permitirán ingresar a las más importantes cadenas de supermercados, farmacias y tiendas de autoservicio en México, Estados Unidos, Brasil, Argentina, Colombia, y otros países de América Latina y el Caribe. Estos acuerdos incluyen alianzas con minoristas de prestigio como Walmart, Costco, y CVS en los Estados Unidos, así como Soriana y Farmacias Guadalajara y otras en México. Estas colaboraciones no solo aseguran la presencia de nuestros productos en los anaqueles de los principales actores del comercio minorista, sino que también nos permiten alcanzar una amplia audiencia en diversas geografías y segmentos de mercado.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        Además, hemos firmado contratos con laboratorios de primera línea que se especializan en la producción de alimentos y suplementos nutricionales. Estos laboratorios no solo cumplen con los más altos estándares de calidad establecidos por organismos reguladores como la FDA, sino que también tienen la capacidad de producir en las cantidades necesarias para satisfacer la demanda de grandes mercados. Esto es crucial para nuestra estrategia, ya que nos permitirá no solo ingresar en los principales mercados físicos, sino también expandir nuestra presencia en plataformas de comercio electrónico de gran envergadura, como Amazon, Mercado Libre y otras.
    </p>

    <!-- Expansión en Supermercados y Farmacias -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        Expansión en Supermercados y Farmacias
    </h3>


 <p style="margin-bottom: 20px; text-align: justify;">
        En México, PPG NUTRITIONAL ha consolidado acuerdos con Soriana, una de las cadenas de supermercados más grandes del país, con más de 800 tiendas repartidas en todo el territorio nacional. Además, Farmacias Guadalajara, con más de 2,000 sucursales en todo México, será un aliado estratégico para la distribución de nuestros productos en el ámbito de la salud y bienestar. Estos acuerdos nos permiten no solo una amplia distribución, sino también un posicionamiento privilegiado en puntos de venta claves donde nuestros productos pueden ser accesibles a millones de consumidores. 
    </p>

    <div class="mexico-outreach" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- Mexico Outreach Section -->
    <p style="margin-bottom: 20px; text-align: justify;">
        A continuación, un ejemplo de nuestro alcance en México, con apoyo de nuestros socios con los que tenemos firmados contratos:
    </p>
</div>


<table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Productos</th>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Puntos de Venta de Adyuvantes</th>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Puntos de Venta de Refrescos</th>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Puntos de Venta de PPGS</th>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Puntos de Venta de Proteínas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Savings Pharmacies</td>
                <td style="border: 1px solid #ddd; padding: 8px;">1600</td>
                <td style="border: 1px solid #ddd; padding: 8px;">1600</td>
                <td style="border: 1px solid #ddd; padding: 8px;">1600</td>
                <td style="border: 1px solid #ddd; padding: 8px;">1600</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Costco</td>
                <td style="border: 1px solid #ddd; padding: 8px;">41</td>
                <td style="border: 1px solid #ddd; padding: 8px;">41</td>
                <td style="border: 1px solid #ddd; padding: 8px;">41</td>
                <td style="border: 1px solid #ddd; padding: 8px;">41</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Walmart</td>
                <td style="border: 1px solid #ddd; padding: 8px;">317</td>
                <td style="border: 1px solid #ddd; padding: 8px;">317</td>
                <td style="border: 1px solid #ddd; padding: 8px;">317</td>
                <td style="border: 1px solid #ddd; padding: 8px;">317</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Guadalajara Pharmacies</td>
                <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
                <td style="border: 1px solid #ddd; padding: 8px;">2000</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Similares</td>
                <td style="border: 1px solid #ddd; padding: 8px;">8000</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
                <td style="border: 1px solid #ddd; padding: 8px;">8000</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Regional Chain</td>
                <td style="border: 1px solid #ddd; padding: 8px;">24042</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
                <td style="border: 1px solid #ddd; padding: 8px;">24042</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">La Comer</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
                <td style="border: 1px solid #ddd; padding: 8px;">84</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Oxxo</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
                <td style="border: 1px solid #ddd; padding: 8px;">21970</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">GNC</td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
                <td style="border: 1px solid #ddd; padding: 8px;"></td>
                <td style="border: 1px solid #ddd; padding: 8px;">214</td>
            </tr>
        </tbody>
    </table>
</div>
    
  <div class="us-expansion" style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <!-- U.S. Market Expansion Section -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        Expansión en Estados Unidos
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        En Estados Unidos, la alianza con Walmart, el minorista más grande del mundo con presencia en más de 4,700 tiendas solo en el país, subraya nuestra capacidad de penetrar el mercado estadounidense a gran escala. Costco, con su modelo de membresía y más de 500 almacenes en Estados Unidos, representa otra vía importante para ofrecer nuestros productos a un segmento de consumidores que busca calidad y valor. Asimismo, CVS, con más de 9,900 farmacias en Estados Unidos, proporcionará una plataforma robusta para la venta de nuestros suplementos nutricionales y productos de salud, garantizando una cobertura extensiva en el sector farmacéutico.
    </p>
    
    <!-- Large Scale Production Section -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        Laboratorios y Producción en Gran Escala
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Un componente esencial de nuestra estrategia de expansión es la colaboración con laboratorios de producción que no solo cumplen con las normativas más estrictas, sino que también tienen la capacidad de escalar la producción para satisfacer la creciente demanda en los mercados internacionales. Estos laboratorios están equipados con tecnología de vanguardia y operan bajo estrictos controles de calidad, asegurando que cada producto de PPG NUTRITIONAL cumple con los más altos estándares antes de llegar a las manos de los consumidores.
    </p>
    <p style="margin-bottom: 20px; text-align: justify;">
        La capacidad de producción garantizada por estos laboratorios es vital para nuestra entrada en mercados masivos y plataformas de comercio electrónico como Amazon y Mercado Libre. Estos canales son esenciales para nuestra estrategia, ya que permiten llegar a millones de consumidores que buscan productos innovadores, de alta calidad, y respaldados por ciencia. La integración con plataformas de e-commerce no solo facilita la venta directa al consumidor, sino que también nos permite captar un mercado global que está en constante búsqueda de productos que mejoren la salud, el bienestar, y la calidad de vida.
    </p>
    
    <!-- Conclusion Section -->
    <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">
        Conclusión: Un Futuro Prometedor para PPG NUTRITIONAL
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        PPG NUTRITIONAL se encuentra en una posición única para capitalizar las oportunidades en el mercado global de alimentos y suplementos nutricionales. Con alianzas estratégicas ya en marcha con las principales cadenas de supermercados, farmacias, y plataformas de comercio electrónico, y con la capacidad de producción asegurada por laboratorios de primer nivel, estamos preparados para satisfacer la demanda global de productos que no solo cumplen con los más altos estándares de calidad, sino que también están diseñados para mejorar la salud y la longevidad de millones de personas en todo el mundo. Nuestra visión es clara: transformar la industria de la nutrición y el bienestar con productos innovadores que verdaderamente marcan la diferencia.
    </p>
</div>
 


<div style="font-size: 16px; line-height: 1.8; padding: 25px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">

    <!-- Estrategia de Comercialización -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        19. ESTRATEGIA DE COMERCIALIZACIÓN
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Anexos.
    </p>

    <!-- Finanzas -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        20. FINANZAS
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        Anexos.
    </p>

    <!-- Valor de Inversiones “PPG NUTRITIONAL” -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        21. VALOR DE INVERSIONES “PPG NUTRITIONAL”
    </h3>
    
    <!-- Antecedentes -->
    <h4 style="font-size: 18px; color: #333; margin-bottom: 10px;">
        21.1. Antecedentes
    </h4>
    <p style="margin-bottom: 20px; text-align: justify;">
        Nuestro equipo de científicos, compuesto por aproximadamente 50 doctores, se ha dedicado al desarrollo de productos terapéuticos durante más de 35 años. Aunque la empresa se estableció oficialmente en Estados Unidos hace 12 años, nuestros importantes logros nos posicionan como líderes en el mercado de la salud y la nutrición inteligente. A continuación, se detallan y cuantifican los principales activos y capacidades de la empresa, lo que permite una evaluación integral de su valor.
    </p>

    <!-- Valoración de Activos y Capacidades -->
    <h4 style="font-size: 18px; color: #333; margin-bottom: 10px;">
        21.2. Valoración de activos y capacidades
    </h4>

    <!-- Investigación y Desarrollo (I+D) -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.2.1. Investigación y Desarrollo (I+D)
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        Inversión en I+D: Se han invertido aproximadamente 1.200 millones de dólares en investigación y desarrollo, lo que ha dado como resultado la creación de casi 450 productos terapéuticos.
    </p>

    <!-- Desarrollo de Patentes -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.3. Desarrollo de Patentes
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        El costo asociado con el desarrollo de nuestras patentes se estima en 200 millones de dólares. Esto incluye gastos de investigación, alquiler de instalaciones, equipos y salarios durante aproximadamente 17 años por parte de decenas de científicos, técnicos y otros especialistas.
    </p>

    <!-- Tecnologías y Sistemas Automatizados -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.4. Tecnologías y Sistemas Automatizados
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        La implementación de tecnologías avanzadas y sistemas automatizados ha requerido una inversión aproximada de 150 millones de dólares.
        Inversión total en I+D: 1.550 millones de dólares.
    </p>

    <!-- Desarrollo de Formulaciones y Protocolos -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.5. Desarrollo de formulaciones y protocolos
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        Formulaciones avanzadas: El desarrollo de formulaciones científicas avanzadas ha supuesto una inversión de 50 millones de dólares.
    </p>

    <!-- Protocolos Preclínicos -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.6. Protocolos preclínicos
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        La creación y validación de cientos de protocolos preclínicos y clínicos ha supuesto un coste aproximado de 75 millones de dólares.
    </p>

    <!-- Inversión Total en Formulaciones y Protocolos -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.7. Inversión total en formulaciones y protocolos
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        125 millones de dólares.
    </p>

    <!-- Registros y Certificaciones de Marcas -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.8. Registros y certificaciones de marcas
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        Marcas registradas: La inversión en registros de marcas se estima en 20 millones de dólares.
    </p>

    <!-- Certificaciones de Gestión de la Calidad -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.9. Certificaciones de gestión de la calidad
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        La obtención de certificaciones internacionales de gestión de la calidad ha supuesto una inversión de 30 millones de dólares.
        Inversión total en marcas y certificaciones: 50 millones de dólares.
    </p>

    <!-- Infraestructura y Red de Socios -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.11. Infraestructura y red de socios
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        • Red de distribución: La infraestructura para establecer una red de distribución de casi 100.000 puntos de venta ha supuesto una inversión de 100 millones de dólares.<br>
        • Socios estratégicos: Los acuerdos y cartas de intención con socios clave representan un valor proyectado de $200 millones, considerando la capacidad de producción y distribución que aportan.<br>
        • Alianzas publicitarias: Las alianzas publicitarias y las estrategias de marketing han requerido una inversión de $50 millones.
        Inversión total en infraestructura y red de socios: $350 millones.
    </p>

    <!-- Costos y Gastos Asociados -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.12. Costos y gastos asociados
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        21.12.1. Costos de patentes y certificación: Los costos relacionados con la obtención y el mantenimiento de patentes, registros de productos y certificaciones se estiman en $100 millones adicionales.
    </p>

    <!-- Gastos Continuos de I+D -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        21.13. Gastos continuos de I+D
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        Los gastos continuos de investigación y desarrollo, para mantener nuestra posición de liderazgo, se calculan en $100 millones anuales.
        Total de costos y gastos asociados: $200 millones.
    </p>

    <!-- Valoración Total de la Empresa -->
    <h5 style="font-size: 16px; color: #333; margin-bottom: 10px;">
        22.13. Valoración total de la empresa
    </h5>
    <p style="margin-bottom: 20px; text-align: justify;">
        Sumando todas las inversiones y los gastos asociados, el valor total de la empresa se estima en: 1.550 millones de dólares + 125 millones de dólares + 50 millones de dólares + 350 millones de dólares + 200 millones de dólares = 2.275 millones de dólares.
    </p>

    <!-- Conclusión y Recomendaciones -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        22. CONCLUSIÓN Y RECOMENDACIONES
    </h3>

    <!-- Oportunidades de Inversión -->
    <h4 style="font-size: 18px; color: #333; margin-bottom: 10px;">
        22.1. Oportunidades de Inversión
    </h4>
    <p style="margin-bottom: 20px; text-align: justify;">
At PPG NUTRITIONAL, we have developed cutting-edge technologies, innovative products, and marketing strategies designed to radically transform the nutritional supplements and processed food markets by introducing a new category of "smart" products. These products, while integrating seamlessly into the existing corporate structures of the food and pharmaceutical industries, go beyond conventional offerings to deliver health and longevity benefits. Our vision is to lead the transition toward "smart" products that not only enhance nutritional qualities but also provide significant therapeutic benefits. These advancements are backed by our exclusive patents and a focus on science and technology, ensuring that our products not only meet but exceed the expectations of consumers and regulators alike.
    </p>

<p style="margin-bottom: 20px; text-align: justify;">
PPG NUTRITIONAL's product portfolio includes nearly 450 items, ranging from intelligent nutritional supplements to adjuvants that enhance the efficacy of medications prescribed by physicians for treating chronic diseases, as well as smart foods. These products have been developed on a solid scientific foundation, supported by evidence, making them ideal solutions for preventing, controlling, and treating diseases, syndromes, and various health conditions, with the goal of prolonging life with quality for all individuals.
    </p>
 <p style="margin-bottom: 20px; text-align: justify;">
The investment opportunity in PPG NUTRITIONAL is unique, as we are well-positioned to capitalize on the growing demand for healthy, personalized, and effective products. Our continuous innovation, combined with a strong scientific base and a focus on quality, gives us a competitive edge in a rapidly expanding market.
    </p>

    <!-- Nuestra Propuesta -->
    <h4 style="font-size: 18px; color: #333; margin-bottom: 10px;">
        22.2. Nuestra Propuesta
    </h4>
    <p style="margin-bottom: 20px; text-align: justify;">
        Queremos establecer una colaboración estratégica entre PPG NUTRITIONAL y un “PARTNER” mayorista (Costco, Kroger, Publix, etc.) o una plataforma de ventas "on line" con el fin de implementar un enfoque que no solo impulse el crecimiento de nuestros productos, sino que también consolide su posición en el mercado.
    </p>

    <!-- Conclusión y Oportunidad de Inversión -->
    <h4 style="font-size: 18px; color: #333; margin-bottom: 10px;">
        22.2. Conclusión y oportunidad de inversión
    </h4>
    <p style="margin-bottom: 20px; text-align: justify;">
        La combinación de una amplia cartera de productos, una red de distribución bien establecida, un equipo de científicos y expertos de primer nivel y una inversión sustancial en tecnología avanzada nos coloca en una posición privilegiada para liderar el mercado de suplementos nutricionales y alimentos inteligentes. 
    </p>

    <h4 style="font-size: 18px; color: #333; margin-bottom: 10px;">
        22.3. Conclusion and Investment Opportunity
    </h4>

    <p style="margin-bottom: 20px; text-align: justify;">
The combination of a diversified product portfolio, a well-established distribution network, a team of world-class scientists and experts, and substantial investment in advanced technology puts us in an unparalleled position to lead the market for nutritional supplements and smart foods. Our portfolio, comprising nearly 450 products, is designed to improve health and quality of life, representing an unparalleled offering in today’s market.
    </p>

    <p style="margin-bottom: 20px; text-align: justify;">
Our proposal not only offers an attractive financial return but also represents an opportunity to participate in the evolution of a key industry for global health and well-being. Investing in PPG NUTRITIONAL is investing in the future of nutrition, where products not only nourish but also promote health, prevent diseases, and enhance quality of life. With a clear focus on innovation and excellence, we are ready to meet the challenges of the market and transform the way the world understands and consumes nutrition.
    </p>

    <!-- Anexos -->
    <h3 style="font-size: 22px; color: #c62828; margin-bottom: 15px; text-align: left; border-bottom: 2px solid #c62828; padding-bottom: 5px;">
        23. ANEXOS
    </h3>
    <p style="margin-bottom: 20px; text-align: justify;">
        23.1. Documentación de Patentes y marcas.<br>
        23.2. Estrategias comercialización.<br>
        23.3. Acuerdos de Colaboración.<br>
        23.4. Certificados de Registro y Regulaciones.<br>
        23.5. Datos primarios de investigaciones de Copyright.<br>
        23.6. Planes de negocios.<br>
        23.7. Análisis financiero.<br>
        23.8. Proyección de investigación y desarrollos próximos 10 años.<br>
        23.9. Resumen de otros investigadores.
    </p>

</div>









</div>



<script>


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
        new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    } 



document.addEventListener("DOMContentLoaded", function () {
            const headers = document.querySelectorAll("h1, h2, h3");
            const listaIndice = document.getElementById("listaIndice");
            const botonIndice = document.getElementById("botonIndice");
            const indice = document.getElementById("indice");

            headers.forEach((header, index) => {
                const id = `header-${index}`;
                header.id = id;

                const li = document.createElement("li");
                const a = document.createElement("a");
                a.href = `#${id}`;
                a.textContent = header.textContent;
                li.appendChild(a);

                listaIndice.appendChild(li);
            });

            // Funcionalidad de mostrar/ocultar el índice
            botonIndice.addEventListener("click", function () {
                if (indice.style.display === "none" || indice.style.display === "") {
                    indice.style.display = "block";
                } else {
                    indice.style.display = "none";
                }
            });

            // Ocultar el índice si se hace clic fuera de él
            document.addEventListener("click", function (event) {
                if (!indice.contains(event.target) && !botonIndice.contains(event.target)) {
                    indice.style.display = "none";
                }
            });
        });
        
document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
        
    </script>
</body>
</html>