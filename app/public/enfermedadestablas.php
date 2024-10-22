<?php
  session_start();  //Inicializar la sesión
  if (!isset($_SESSION['user_id'])) //Si no se h establecido la variable user_id en la sesión
    header("Location: index.php"); //redireccionar a index.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de Pacientes con ag-Grid</title>
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-grid.css?_=${new Date().getTime()}">
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-theme-alpine.css?_=${new Date().getTime()}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap&_=${new Date().getTime()}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css?_=${new Date().getTime()}">
  <link rel="stylesheet" href="estilo_Cuentas.css?v=1.1&_=${new Date().getTime()}">
  <!-- Desactivar el caché -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">


    
  <style>
    body {
      background-color: #151b25; /* Color de fondo claro */
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      
    }
    .swal2-popup {
      font-family: 'Poppins', sans-serif;
    }
    .top-bar {
      background-color: #141b24;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    .content {
      margin-top: 70px; /* Altura de la barra superior */
      padding: 10px;
    }
    .left-items, .right-items {
      display: flex;
      align-items: center;
    }
    .button {
      margin-right: 10px;
    }
    .modal, .modal-unique {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background-color: rgba(0,0,0,0.5);
    }
    .modal-content, .modal-content-unique {
      background-color: #0a0f16;
      padding: 10px;
      border: 1px solid #888;
      width: auto;
      max-width: 600px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px rgba(0,0,0,0.19);
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-family: 'Poppins', sans-serif;
      border-radius: 10px;
    }
    .modal-content {
      max-height: 80%;
      overflow-y: auto;
    }
    textarea.expandable {
      max-height: 150px;
      overflow-y: auto;
    }
    .ag-theme-quartz-dark .ag-header {
      background-color: #161d28;
    }
    .ag-header {
      position: sticky;
      top: 0;
      z-index: 998;
      background-color: #161d28;
    }
    .renew-button:hover, .delete-button:hover {
      transform: scale(1.2);
      transition: transform 0.2s;
    }
    .lock-button {
      display: none;
    }
    .options-buttons {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }
    .options-buttons button {
      margin: 0 10px; /* Añadir margen entre los botones */
    }
    .button:hover, #botonNotas:hover, .button-unique:hover {
      transform: scale(1.1);
      transition: transform 0.2s;
    }
    #enfermedadesBtnUnique:hover, #deleteSelectedBtn:hover {
      transform: scale(1.05);
      transition: transform 0.2s;
    }
    #enfermedadesBtnUnique {
      margin-right: 15px; /* Más espacio para el botón de enfermedades por informe */
    }
    #deleteSelectedBtn {
      margin-left: 0px; /* Ajustar margen izquierdo para el botón de borrar seleccionados */
    }
    #botonNotas i {
      color: #f4ae07; /* Aplica el color solo al icono */
    }
    #botonFormulario i {
      color: #f4ae07; /* Aplica el color solo al icono */
    }    
    #deleteSelectedBtn i {
      color: red; /* Aplica el color solo al icono */
    } 
    #enfermedadesBtnUnique i {
      color: #f4ae07; /* Aplica el color solo al icono */
    }

    #botonPacientes i {
      color: #8554f6; /* Aplica el color solo al icono */
    }    

    #botonUsuario i {
      color: #f4ae07; /* Aplica el color solo al icono */
    } 
    #addNewAccountBtn i {
      color: #2ba31f; /* Aplica el color solo al icono */
    }
  </style>
</head>
<body>
<div class="top-bar">
  <div class="left-items">
    <i class="fas fa-bars"></i> <!-- Icono de menú -->
    <button id="addNewAccountBtn" class="button"><i class="fas fa-plus"></i>Enfermedad</button>
    <!-- Modal -->
    <div id="accountModal" class="modal">
      <div class="modal-content">
        <span class="close" style="color: #ffffff; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
        <form id="accountForm" method="post" action="agregarEnfermedad.php" style="display: grid; grid-template-columns: repeat(2, max-content); gap: 4px;">
          <div style="grid-column: span 2; display: flex; justify-content: center;"></div>
          <input type="hidden" id="id" name="id">
          <div style="grid-column: span 2; display: flex; flex-direction: column; margin-top: 10px;">
            <label for="enfermedad" style="margin: 0; font-size: 12px;">Enfermedad</label>
            <textarea id="enfermedad" name="enfermedad" required style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="tipoInforme" style="margin: 0; font-size: 12px;">Tipo de Informe</label>
            <select id="tipoInforme" name="tipoInforme" required style="padding: 4px; margin: 0;">
              <option value="FARMACOGENETICA">FARMACOGENETICA</option>
              <option value="ENFERMEDADES MONOGENICAS">ENFERMEDADES MONOGENICAS</option>
              <option value="RASGOS PERSONALES">RASGOS PERSONALES</option>
              <option value="ENFERMEDADES COMPLEJAS">ENFERMEDADES COMPLEJAS</option>
              <option value="WELLNESS">WELLNESS</option>
            </select>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="palabrasClaveAusente" style="margin: 0; font-size: 12px;">Palabras Clave Ausente</label>
            <textarea id="palabrasClaveAusente" name="palabrasClaveAusente" style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="palabrasClavePresente" style="margin: 0; font-size: 12px;">Palabras Clave Presente</label>
            <textarea id="palabrasClavePresente" name="palabrasClavePresente" style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="recomendaciones_presentes" style="margin: 0; font-size: 12px;">Recomendaciones Presentes</label>
            <textarea id="recomendaciones_presentes" name="recomendaciones_presentes" style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="recomendaciones_ausentes" style="margin: 0; font-size: 12px;">Recomendaciones Ausentes</label>
            <textarea id="recomendaciones_ausentes" name="recomendaciones_ausentes" style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="alimentos_abundancia" style="margin: 0; font-size: 12px;">Alimentos a Consumir en Abundancia</label>
            <textarea id="alimentos_abundancia" name="alimentos_abundancia" style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="alimentos_moderadamente" style="margin: 0; font-size: 12px;">Alimentos a Consumir Moderadamente</label>
            <textarea id="alimentos_moderadamente" name="alimentos_moderadamente" style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="alimentos_cuidado" style="margin: 0; font-size: 12px;">Alimentos a Consumir con Cuidado</label>
            <textarea id="alimentos_cuidado" name="alimentos_cuidado" style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="tratamiento" style="margin: 0; font-size: 12px;">Tratamiento</label>
            <textarea id="tratamiento" name="tratamiento" style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="diagnostico" style="margin: 0; font-size: 12px;">Diagnostico</label>
            <textarea id="diagnostico" name="diagnostico" style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <label for="opciones" style="display:none;">Opciones</label>
          <select id="opciones" name="opciones" style="display:none;">
            <option value="opcion1">Opción 1</option>
            <option value="opcion2">Opción 2</option>
          </select>
          <input type="submit" value="Guardar" style="grid-column: span 2; background-color: #141b24; color: white; cursor: pointer; padding: 4px; margin: 4px auto; width: auto;">
        </form>
      </div>
    </div>
    <button class="button" id="botonPacientes" onclick="location.href='clientesbrqpy.php';"><i class="fas fa-users"></i> Pacientes</button>
<!--<button class="button" id="botonFormulario" onclick="window.open('https://cesarm72.sg-host.com/formulario.html', '_blank');">
        <i class="fas fa-file-alt"></i>Formulario-->

        
      <button class="button" id="botonResumen" onclick="location.href='resumenedit.php';" style="color: #4CAF50;">
      <i class="fas fa-file-alt" style="color: #4CAF50;"></i> Resumen
      </button>



        
    </button>    <button class="button" id="botonNotas"><i class="fas fa-sticky-note"></i> Notas</button>
    <div id="panelNotas" style="display: none;">
      <button id="cerrarNotas" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 24px; cursor: pointer;">&times;</button>
      <textarea id="textoNotas"></textarea>
      <button id="guardarNotas" class="buttonGuardar"><i class="fas fa-save"></i></button>
    </div>
    <button class="button" id="botonUsuario" onclick="location.href='usuarioper.php';"><i class="fas fa-user"></i> Usuario</button>
    <!-- Botón que abre el modal enfermedadesModalUnique -->
    <button id="enfermedadesBtnUnique" class="button-unique"><i class="fas fa-chart-bar"></i>Informes</button>
    <!-- Modal enfermedadesModalUnique -->
    <div id="enfermedadesModalUnique" class="modal-unique">
      <div class="modal-content-unique">
        <span class="close-unique" style="color: #ffffff; position: absolute; top: 10px; right: 10px; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
        <h2 style="color: #ffffff; text-align: center;">Enfermedades por Informe</h2>
        <div id="modalContentUnique" style="color: #ffffff; font-size: 14px;">
          <p>FARMACOGENETICA: <span id="farmacogenetica-count">0</span></p>
          <p>ENFERMEDADES MONOGENICAS: <span id="monogenicas-count">0</span></p>
          <p>RASGOS PERSONALES: <span id="rasgos-count">0</span></p>
          <p>ENFERMEDADES COMPLEJAS: <span id="complejas-count">0</span></p>
          <p>WELLNESS: <span id="wellness-count">0</span></p>
          <p><strong>Total: <span id="total-count">0</span></strong></p>
        </div>
      </div>
    </div>
    <button class="button" id="deleteSelectedBtn"><i class="fas fa-trash"></i> Borrar <i class="fas fa-check-square" style="color: lightblue;"></i></button>
  </div>
  <button class="button" onclick="document.location.href='cerrar.php'"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</button>
  <div class="right-items">
    <div class="bell-container">
      <i class="fas fa-bell"></i><span class="bell-counter">5</span> <!-- Icono de campana con contador -->
    </div>
    <ul class="counters-list">
      <li><span>Informes generados: 0</span></li>
    </ul>
  </div>
</div>
<div class="content">
  <!-- Contenedor de ag-Grid -->
  <div id="myGrid" class="ag-theme-quartz-dark" style="height: 600px;"></div>
</div>
<!-- ag-Grid library -->
<script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.js?_=${new Date().getTime()}"></script>
<script>
   let gridOptions;

  document.addEventListener('DOMContentLoaded', function() {
    fetch('obtenerDatos.php?_=' + new Date().getTime())
      .then(response => response.json())
      .then(data => {
        gridOptions = {
          columnDefs: [
            {
              headerCheckboxSelection: true,
              checkboxSelection: true,
              headerName: "",
              width: 40,
              suppressSizeToFit: true
            },
            { headerName: "Enfermedad", field: "enfermedad", editable: true, width: 190, filter: 'agTextColumnFilter' },
            { headerName: "Tipo de Informe", field: "tipo_informe", editable: true, width: 190, filter: 'agTextColumnFilter' },
            { headerName: "Palabras Clave Ausente", field: "palabras_clave_ausente", editable: true, width: 120, filter: 'agTextColumnFilter' },
            { headerName: "Palabras Clave Presente", field: "palabras_clave_presente", editable: true, width: 120, filter: 'agTextColumnFilter' },
            { headerName: "Recomendaciones Presentes", field: "recomendaciones_presentes", editable: true, width: 120, filter: 'agTextColumnFilter' },
            { headerName: "Recomendaciones Ausentes", field: "recomendaciones_ausentes", editable: true, width: 120, filter: 'agTextColumnFilter' },
            { headerName: "Alimentos a Consumir en Abundancia", field: "alimentos_abundancia", editable: true, width: 120, filter: 'agTextColumnFilter' },
            { headerName: "Alimentos a Consumir Moderadamente", field: "alimentos_moderadamente", editable: true, width: 120, filter: 'agTextColumnFilter' },
            { headerName: "Alimentos a Consumir con Cuidado", field: "alimentos_cuidado", editable: true, width: 120, filter: 'agTextColumnFilter' },
            { headerName: "Tratamiento", field: "tratamiento", editable: true, width: 120, filter: 'agTextColumnFilter' },
            { headerName: "Diagnostico", field: "diagnostico", editable: true, width: 120, filter: 'agTextColumnFilter' },  <!-- Nueva columna -->
            { 
              headerName: "Opciones",
              field: "opciones",
              editable: false,
              width: 100,
              cellRenderer: function(params) {
                var renewButton = `<button class="renew-button" onclick="openModalWithData(${params.data.id}, \`${params.data.enfermedad}\`, \`${params.data.tipo_informe}\`, \`${params.data.palabras_clave_ausente}\`, \`${params.data.palabras_clave_presente}\`, \`${params.data.recomendaciones_presentes}\`, \`${params.data.recomendaciones_ausentes}\`, \`${params.data.alimentos_abundancia}\`, \`${params.data.alimentos_moderadamente}\`, \`${params.data.alimentos_cuidado}\`, \`${params.data.tratamiento}\`, \`${params.data.diagnostico}\`, \`${params.data.opciones}\`)" data-action="renew" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-pencil-alt" style="color: rgb(68, 144, 53);"></i></button>`;
                var deleteButton = `<button class="delete-button" onclick="confirmDelete(${params.data.id})" data-action="delete" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-trash" style="color: red;"></i></button>`;
                var lockButton = `<button class="lock-button" data-action="lock" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-lock" style="color: rgba(255, 255, 255, 0.8);"></i></button>`;
                return `<div class="options-buttons">${renewButton} ${deleteButton} ${lockButton}</div>`;
              }
            }
          ],
          rowData: data,
          domLayout: 'autoHeight',
          rowSelection: 'multiple',
          onFilterChanged: saveFilterModel,
          onGridReady: function(params) {
            params.api.sizeColumnsToFit();
            loadFilterModel();
          },
          suppressRowClickSelection: true, // Suprimir la selección de fila al hacer clic
          onRowClicked: onRowClicked // Agregar manejador de eventos para hacer clic en la fila
        };

        new agGrid.Grid(document.getElementById('myGrid'), gridOptions);
      })
      .catch(error => console.error('Error al obtener datos:', error));
  });

  function onRowClicked(event) {
    const node = event.node;
    const isSelected = node.isSelected();
    node.setSelected(!isSelected);
  }

  document.getElementById('deleteSelectedBtn').addEventListener('click', function() {
    const selectedNodes = gridOptions.api.getSelectedNodes();
    const selectedIds = selectedNodes.map(node => node.data.id);

    if (selectedIds.length > 0) {
      Swal.fire({
        title: '¿Estás seguro?',
        text: `Borrarás las enfermedades seleccionadas. Este cambio no se puede revertir. ¿Deseas confirmar?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, borrar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          deleteSelectedEnfermedades(selectedIds);
        }
      });
    } else {
      Swal.fire({
        icon: 'warning',
        title: 'No hay selecciones',
        text: 'Por favor, seleccione al menos una enfermedad para borrar.',
        showConfirmButton: true,
        confirmButtonText: 'Ok',
      });
    }
  });

  function deleteSelectedEnfermedades(ids) {
    fetch('borrarEnfermedades.php?_=' + new Date().getTime(), {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'ids=' + encodeURIComponent(JSON.stringify(ids))
    })
    .then(response => response.text())
    .then(data => {
      Swal.fire({
        icon: 'success',
        title: 'Borrado',
        text: 'Las enfermedades seleccionadas han sido borradas correctamente.',
        showConfirmButton: false,
        timer: 1500,
        customClass: {
          popup: 'swal2-popup'
        }
      }).then(() => {
        location.reload(); // Recargar la página para ver los cambios actualizados
      });
    })
    .catch(error => console.error('Error al borrar:', error));
  }

  function saveFilterModel() {
    const filterModel = gridOptions.api.getFilterModel();
    localStorage.setItem('gridFilterModel', JSON.stringify(filterModel));
  }

  function loadFilterModel() {
    const savedFilterModel = localStorage.getItem('gridFilterModel');
    if (savedFilterModel) {
      gridOptions.api.setFilterModel(JSON.parse(savedFilterModel));
    }
  }

  function contarEnfermedadesPorInforme(data) {
    const counts = {
      farmacogenetica: 0,
      monogenicas: 0,
      rasgos: 0,
      complejas: 0,
      wellness: 0
    };

    data.forEach(row => {
      switch (row.tipo_informe.toLowerCase()) {
        case 'farmacogenetica':
          counts.farmacogenetica++;
          break;
        case 'enfermedades monogenicas':
          counts.monogenicas++;
          break;
        case 'rasgos personales':
          counts.rasgos++;
          break;
        case 'enfermedades complejas':
          counts.complejas++;
          break;
        case 'wellness':
          counts.wellness++;
          break;
      }
    });

    document.getElementById('farmacogenetica-count').textContent = counts.farmacogenetica;
    document.getElementById('monogenicas-count').textContent = counts.monogenicas;
    document.getElementById('rasgos-count').textContent = counts.rasgos;
    document.getElementById('complejas-count').textContent = counts.complejas;
    document.getElementById('wellness-count').textContent = counts.wellness;
    document.getElementById('total-count').textContent = counts.farmacogenetica + counts.monogenicas + counts.rasgos + counts.complejas + counts.wellness;
  }

  document.getElementById('botonNotas').addEventListener('click', function() {
    var panel = document.getElementById('panelNotas');
    if (panel.style.display !== 'none') {
      var nota = document.getElementById('textoNotas').value;
      fetch('guardarNota.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'nota=' + encodeURIComponent(nota)
      })
      .then(response => response.text())
      .then(data => {
        console.log(data);
        panel.style.display = 'none';
      })
      .catch(error => console.error('Error:', error));
    } else {
      fetch('cargarNotas.php')
        .then(response => response.text())
        .then(data => {
          document.getElementById('textoNotas').value = data;
          panel.style.display = 'block';
        })
        .catch(error => console.error('Error:', error));
    }
  });

  document.getElementById('guardarNotas').addEventListener('click', function() {
    var nota = document.getElementById('textoNotas').value;
    fetch('guardarNota.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'nota=' + encodeURIComponent(nota)
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
  });

  document.addEventListener('DOMContentLoaded', function() {
    fetch('cargarNotas.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('textoNotas').value = data;
    })
    .catch(error => console.error('Error:', error));
  });

  var modal = document.getElementById("accountModal");
  var btn = document.getElementById("addNewAccountBtn");
  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function() {
    document.getElementById('id').value = '';
    document.getElementById('enfermedad').value = '';
    document.getElementById('tipoInforme').value = '';
    document.getElementById('palabrasClaveAusente').value = '';
    document.getElementById('palabrasClavePresente').value = '';
    document.getElementById('recomendaciones_presentes').value = '';
    document.getElementById('recomendaciones_ausentes').value = '';
    document.getElementById('alimentos_abundancia').value = '';
    document.getElementById('alimentos_moderadamente').value = '';
    document.getElementById('alimentos_cuidado').value = '';
    document.getElementById('tratamiento').value = '';
    document.getElementById('diagnostico').value = '';
    document.getElementById('opciones').value = 'opcion1';
    modal.style.display = "block";
    adjustTextareaHeight();
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  
  function openModalWithData(id, enfermedad, tipoInforme, palabrasClaveAusente, palabrasClavePresente, recomendacionesPresentes, recomendacionesAusentes, alimentosAbundancia, alimentosModeradamente, alimentosCuidado, tratamiento, diagnostico, opciones) {
    document.getElementById("id").value = id;
    document.getElementById('enfermedad').value = enfermedad;
    document.getElementById('tipoInforme').value = tipoInforme;
    document.getElementById('palabrasClaveAusente').value = palabrasClaveAusente;
    document.getElementById('palabrasClavePresente').value = palabrasClavePresente;
    document.getElementById('recomendaciones_presentes').value = recomendacionesPresentes;
    document.getElementById('recomendaciones_ausentes').value = recomendacionesAusentes;
    document.getElementById('alimentos_abundancia').value = alimentosAbundancia;
    document.getElementById('alimentos_moderadamente').value = alimentosModeradamente;
    document.getElementById('alimentos_cuidado').value = alimentosCuidado;
    document.getElementById('tratamiento').value = tratamiento;
    document.getElementById('diagnostico').value = diagnostico;
    document.getElementById('opciones').value = opciones;
    modal.style.display = "block";
    adjustTextareaHeight();
  }

  function adjustTextareaHeight() {
    document.querySelectorAll('.expandable').forEach(textarea => {
      textarea.style.height = 'auto';
      textarea.style.height = (textarea.scrollHeight) + 'px';
    });
  }

  document.getElementById('accountForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(document.getElementById('accountForm'));
    var id = document.getElementById('id').value;
    var url = id ? 'actualizarEnfermedad.php?_=' + new Date().getTime() : 'agregarEnfermedad.php?_=' + new Date().getTime();

    fetch(url, {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      Swal.fire({
        icon: 'success',
        title: 'Guardado',
        showConfirmButton: false,
        timer: 500,
        customClass: {
          popup: 'swal2-popup'
        }
      }).then(() => {
        location.reload();
      });
      modal.style.display = 'none';
    })
    .catch(error => console.error('Error al actualizar:', error));
  });

  document.getElementById('cerrarNotas').addEventListener('click', function() {
    guardarNotaYCerrar();
  });

  function guardarNota() {
    const textoNotas = document.getElementById('textoNotas').value;
    fetch('guardarNota.php?_=' + new Date().getTime(), {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: 'nota=' + encodeURIComponent(textoNotas)
    })
    .then(response => response.text())
    .then(data => {
      console.log('Nota guardada:', data);
    })
    .catch(error => {
      console.error('Error al guardar la nota:', error);
    });
  }

  function guardarNotaYCerrar() {
    guardarNota();
    document.getElementById('panelNotas').style.display = 'none';
  }

  document.querySelectorAll('.expandable').forEach(textarea => {
    textarea.addEventListener('input', function() {
      this.style.height = 'auto';
      this.style.height = (this.scrollHeight) + 'px';
    });

    textarea.addEventListener('focus', function() {
      this.style.height = 'auto';
      this.style.height = (this.scrollHeight) + 'px';
    });

    textarea.addEventListener('blur', function() {
      this.style.height = '';
    });
  });

  document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('accountModal').style.display = 'none';
  });

  var modalUnique = document.getElementById('enfermedadesModalUnique');
  var btnUnique = document.getElementById('enfermedadesBtnUnique');
  var spanUnique = document.querySelector('.close-unique');

  btnUnique.addEventListener('click', function() {
    fetch('obtenerDatos.php?_=' + new Date().getTime())
      .then(response => response.json())
      .then(data => {
        contarEnfermedadesPorInforme(data);
        modalUnique.style.display = 'block';
      })
      .catch(error => console.error('Error al obtener datos:', error));
  });

  spanUnique.addEventListener('click', function() {
    modalUnique.style.display = 'none';
  });

  window.addEventListener('click', function(event) {
    if (event.target == modalUnique) {
      modalUnique.style.display = 'none';
    }
  });

  function confirmDelete(id) {
    Swal.fire({
      title: '¿Estás seguro?',
      text: "Borrarás la enfermedad correspondiente. Este cambio no se puede revertir. ¿Deseas confirmar?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, borrar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        deleteEnfermedad(id);
      }
    });
  }

  function deleteEnfermedad(id) {
    fetch('borrarEnfermedad.php?_=' + new Date().getTime(), {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'id=' + encodeURIComponent(id)
    })
    .then(response => response.text())
    .then(data => {
      Swal.fire({
        icon: 'success',
        title: 'Borrado',
        text: 'La enfermedad ha sido borrada correctamente.',
        showConfirmButton: false,
        timer: 500,
        customClass: {
          popup: 'swal2-popup'
        }
      }).then(() => {
        location.reload();
      });
    })
    .catch(error => console.error('Error al borrar:', error));
  }

  document.addEventListener('keydown', function(event) {
    if (event.ctrlKey && event.key === 'c') {
      const selectedNodes = gridOptions.api.getSelectedNodes();
      let selectedText = '';

      selectedNodes.forEach(node => {
        const data = node.data;
        const enfermedad = data['enfermedad'];
        selectedText += enfermedad + '\n';
      });

      if (selectedText) {
        navigator.clipboard.writeText(selectedText).then(function() {
          Swal.fire({
            icon: 'success',
            title: 'Texto copiado',
            text: 'El texto ha sido copiado al portapapeles.',
            showConfirmButton: false,
            timer: 1000,
            customClass: {
              popup: 'swal2-popup'
            }
          });
        }).catch(function(err) {
          console.error('Error al copiar el texto: ', err);
        });
      }
    }
  });
</script>
</body>
</html>
