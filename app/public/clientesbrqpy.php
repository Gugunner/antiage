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
      background-color: #151b25;
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
      margin-top: 70px;
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
      margin: 0 10px;
    }
    .button:hover, #botonNotas:hover, .button-unique:hover {
      transform: scale(1.1);
      transition: transform 0.2s;
    }
    #deleteSelectedBtn:hover {
      transform: scale(1.05);
      transition: transform 0.2s;
    }
    #deleteSelectedBtn {
      margin-left: 0px;
    }

    #deleteSelectedBtn i {
      color: red;
    }

    #botonEnfermedades i {
      color: #8554f6;
    }
    
    #botonNotas i, #botonFormulario i , #botonUsuario i, #addNewAccountBtn i {
      color: #f4ae07;
    }
  </style>
</head>
<body>
<div class="top-bar">
  <div class="left-items">
    <i class="fas fa-bars"></i>
    <button id="addNewAccountBtn" class="button"><i class="fas fa-plus"></i>Nuevo Paciente</button>
    <div id="accountModal" class="modal">
      <div class="modal-content">
        <span class="close" style="color: #ffffff; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
        <form id="accountForm" method="post" action="agregarPaciente.php" enctype="multipart/form-data" style="display: grid; grid-template-columns: repeat(2, max-content); gap: 4px;">
          <div style="grid-column: span 2; display: flex; justify-content: center;"></div>
          <input type="hidden" id="id" name="id">
          <div style="grid-column: span 2; display: flex; flex-direction: column; margin-top: 10px;">
            <label for="nombre" style="margin: 0; font-size: 12px;">Nombre y Apellidos</label>
            <textarea id="nombre" name="nombre" required style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
        
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="fecha_nacimiento" style="margin: 0; font-size: 12px;">Fecha de Nacimiento</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required style="padding: 4px; margin: 0;">
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="sexo" style="margin: 0; font-size: 12px;">Sexo</label>
            <select id="sexo" name="sexo" required style="padding: 4px; margin: 0;">
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
              <option value="Otro">Otro</option>
            </select>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="correo" style="margin: 0; font-size: 12px;">Correo</label>
            <textarea id="correo" name="correo" required style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="telefono" style="margin: 0; font-size: 12px;">Teléfono</label>
            <textarea id="telefono" name="telefono" required style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="codigo_kit" style="margin: 0; font-size: 12px;">Código del Kit</label>
            <textarea id="codigo_kit" name="codigo_kit" required style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="tipo_muestra" style="margin: 0; font-size: 12px;">Tipo de Muestra</label>
            <select id="tipo_muestra" name="tipo_muestra" required style="padding: 4px; margin: 0;">
              <option value="Saliva">Saliva</option>
              <option value="Sangre">Sangre</option>
              <option value="Otro">Otro</option>
            </select>
          </div>

          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="informe_final" style="margin: 0; font-size: 12px;">Informe Final</label>
            <textarea id="informe_final" name="informe_final"  style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          
          
          <div style="grid-column: span 2; display: flex; flex-direction: column;">
            <label for="pdfs" style="margin: 0; font-size: 12px;">Subir PDFs</label>
            <input type="file" id="pdfs" name="pdfs[]" multiple style="padding: 4px; margin: 0;">
          </div>

          <div style="grid-column: span 2; display: none; flex-direction: column;">
    <label for="codigo_vendedor" style="margin: 0; font-size: 12px;">Código de Vendedor</label>
    <textarea id="codigo_vendedor" name="codigo_vendedor" style="padding: 4px; margin: 0;" class="expandable"></textarea>
</div>

<div style="grid-column: span 2; display: none; flex-direction: column;">
    <label for="enfermedades_diagnosticadas" style="margin: 0; font-size: 12px;">Enfermedades Diagnosticadas</label>
    <textarea id="enfermedades_diagnosticadas" name="enfermedades_diagnosticadas" style="padding: 4px; margin: 0;" class="expandable"></textarea>
</div>

<div style="grid-column: span 2; display: none; flex-direction: column;">
    <label for="informacion_clinica" style="margin: 0; font-size: 12px;">Información Clínica</label>
    <textarea id="informacion_clinica" name="informacion_clinica" style="padding: 4px; margin: 0;" class="expandable"></textarea>
</div>

<div style="grid-column: span 2; display: none; flex-direction: column;">
    <label for="identificacion" style="margin: 0; font-size: 12px;">Identificación</label>
    <textarea id="identificacion" name="identificacion" style="padding: 4px; margin: 0;" class="expandable"></textarea>
</div>

          <input type="submit" value="Guardar" style="grid-column: span 2; background-color: #141b24; color: white; cursor: pointer; padding: 4px; margin: 4px auto; width: auto;">
        </form>
      </div>
    </div>
    <button class="button" id="botonEnfermedades" onclick="location.href='enfermedadestablas.php';"><i class="fas fa-notes-medical"></i> Enfermedad</button>
   <!-- <button class="button" id="botonFormulario" onclick="window.open('https://cesarm72.sg-host.com/formulario.html', '_blank');">
        <i class="fas fa-file-alt"></i>Formulario
    </button>-->

    <button class="button" id="botonResumen" onclick="location.href='resumenedit.php';" style="color: #4CAF50;">
    <i class="fas fa-file-alt" style="color: #4CAF50;"></i> Resumen
    </button>


    <button class="button" id="botonNotas"><i class="fas fa-sticky-note"></i> Notas</button>
    <div id="panelNotas" style="display: none;">
      <button id="cerrarNotas" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 24px; cursor: pointer;">&times;</button>
      <textarea id="textoNotas"></textarea>
      <button id="guardarNotas" class="buttonGuardar"><i class="fas fa-save"></i></button>
    </div>
    <button class="button" id="botonUsuario" onclick="location.href='usuarioper.php';"><i class="fas fa-user"></i> Usuario</button>
    <button class="button" id="deleteSelectedBtn"><i class="fas fa-trash"></i> Borrar <i class="fas fa-check-square" style="color: lightblue;"></i></button>

  </div>
  <button class="button" onclick="document.location.href='cerrar.php'"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</button>
  <div class="right-items">
    <div class="bell-container">
      <i class="fas fa-bell"></i><span class="bell-counter">5</span>
    </div>
    <ul class="counters-list">
      <li><span>Clientes registrados: 0</span></li>
    </ul>
  </div>
</div>
<div class="content">
  <div id="myGrid" class="ag-theme-quartz-dark" style="height: 600px;"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.js?_=${new Date().getTime()}"></script>
<script>
  let gridOptions;

  document.addEventListener('DOMContentLoaded', function() {
  fetch('obtenerPacientes.php?_=' + new Date().getTime())
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
          { headerName: "ID", field: "id", sortable: true, filter: 'agNumberColumnFilter', width: 50 }, // Asegúrate de que la columna ID sea visible, sortable y tenga un filtro
          { headerName: "Nombre y Apellidos", field: "nombre", editable: true, width: 100, filter: 'agTextColumnFilter' },
          { headerName: "Fecha de Nacimiento", field: "fecha_nacimiento", editable: true, width: 50, filter: 'agDateColumnFilter', sortable: true },
          { headerName: "Sexo", field: "sexo", editable: true, width: 50, filter: 'agTextColumnFilter' },
          { headerName: "Correo", field: "correo", editable: true, width: 80, filter: 'agTextColumnFilter' },
          { headerName: "Teléfono", field: "telefono", editable: true, width: 50, filter: 'agTextColumnFilter' },
          { headerName: "Código del Kit", field: "codigo_kit", editable: true, width: 80, filter: 'agTextColumnFilter' },
          { headerName: "Tipo de Muestra", field: "tipo_muestra", editable: true, width: 40, filter: 'agTextColumnFilter' },
          { headerName: "Informe Final", field: "informe_final", editable: true, width: 0, filter: 'agTextColumnFilter' },
          { 
            headerName: "Opciones",
            field: "opciones",
            editable: false,
            width: 160,
            cellRenderer: function(params) {
              var renewButton = `<button class="renew-button" onclick="openModalWithData(${params.data.id}, \`${params.data.nombre}\`, \`${params.data.identificacion}\`, \`${params.data.fecha_nacimiento}\`, \`${params.data.sexo}\`, \`${params.data.correo}\`, \`${params.data.telefono}\`, \`${params.data.codigo_kit}\`, \`${params.data.tipo_muestra}\`, \`${params.data.enfermedades_diagnosticadas}\`, \`${params.data.informacion_clinica}\`, \`${params.data.codigo_vendedor}\`, \`${params.data.informe_final}\`)" data-action="renew" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-pencil-alt" style="color: rgb(68, 144, 53);"></i></button>`;
              var deleteButton = `<button class="delete-button" onclick="confirmDelete(${params.data.id})" data-action="delete" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-trash" style="color: red;"></i></button>`;
              var lockButton = `<button class="lock-button" data-action="lock" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-lock" style="color: rgba(255, 255, 255, 0.8);"></i></button>`;
              var downloadButton = `<button class="download-button" onclick="downloadFiles(${params.data.id}, \`${params.data.nombre}\`)" data-action="download" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-download" style="color: blue;"></i></button>`;
              var reportButton = `<button class="report-button" onclick="generateReport(${params.data.id})" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-file-alt" style="color: orange;"></i></button>`;
              return `<div class="options-buttons">${renewButton} ${deleteButton} ${lockButton} ${downloadButton} ${reportButton}</div>`;
            }
          }
        ],
        rowData: data,
        defaultColDef: {
          sortable: true
        },
        domLayout: 'autoHeight',
        rowSelection: 'multiple',
        onFilterChanged: saveFilterModel,
        onGridReady: function(params) {
          params.api.sizeColumnsToFit();
          loadFilterModel();
          // Asegúrate de que el orden se aplique después de que los datos se hayan cargado
          setTimeout(() => {
            params.api.setSortModel([{ colId: 'id', sort: 'desc' }]); // Ordenar por el campo ID en orden descendente
          }, 100);
        },
        suppressRowClickSelection: true,
        onRowClicked: onRowClicked
      };

      new agGrid.Grid(document.getElementById('myGrid'), gridOptions);
    })
    .catch(error => console.error('Error al obtener datos:', error));
});






function onRowClicked(event) {
  const rowIndex = event.rowIndex;
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
      text: `Borrarás los pacientes seleccionados. Este cambio no se puede revertir. ¿Deseas confirmar?`,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, borrar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        deleteSelectedPacientes(selectedIds);
      }
    });
  } else {
    Swal.fire({
      icon: 'warning',
      title: 'No hay selecciones',
      text: 'Por favor, seleccione al menos un paciente para borrar.',
      showConfirmButton: true,
      confirmButtonText: 'Ok',
    });
  }
});

function deleteSelectedPacientes(ids) {
  fetch('borrarPacientes.php?_=' + new Date().getTime(), {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'ids=' + encodeURIComponent(JSON.stringify(ids))
  })
  .then(response => response.text())
  .then(data => {
    console.log(data); // Mostrar el resultado de la operación
    Swal.fire({
      icon: 'success',
      title: 'Borrado',
      text: 'Los pacientes seleccionados han sido borrados correctamente.',
      showConfirmButton: false,
      timer: 1500,
      customClass: {
        popup: 'swal2-popup'
      }
    }).then(() => {
      location.reload();
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
  document.getElementById('nombre').value = '';
  document.getElementById('identificacion').value = '';
  document.getElementById('fecha_nacimiento').value = '';
  document.getElementById('sexo').value = 'Masculino';
  document.getElementById('correo').value = '';
  document.getElementById('telefono').value = '';
  document.getElementById('codigo_kit').value = '';
  document.getElementById('tipo_muestra').value = 'Saliva';
  document.getElementById('enfermedades_diagnosticadas').value = '';
  document.getElementById('informacion_clinica').value = '';
  document.getElementById('codigo_vendedor').value = '';
  document.getElementById('informe_final').value = '';
  modal.style.display = "block";
  adjustTextareaHeight();
}

span.onclick = function() {
  modal.style.display = "none";
}

function openModalWithData(id, nombre, identificacion, fecha_nacimiento, sexo, correo, telefono, codigo_kit, tipo_muestra, enfermedades_diagnosticadas, informacion_clinica, codigo_vendedor, informe_final) {
  document.getElementById("id").value = id;
  document.getElementById('nombre').value = nombre;
  document.getElementById('identificacion').value = identificacion;
  document.getElementById('fecha_nacimiento').value = fecha_nacimiento;
  document.getElementById('sexo').value = sexo;
  document.getElementById('correo').value = correo;
  document.getElementById('telefono').value = telefono;
  document.getElementById('codigo_kit').value = codigo_kit;
  document.getElementById('tipo_muestra').value = tipo_muestra;
  document.getElementById('enfermedades_diagnosticadas').value = enfermedades_diagnosticadas;
  document.getElementById('informacion_clinica').value = informacion_clinica;
  document.getElementById('codigo_vendedor').value = codigo_vendedor;
  document.getElementById('informe_final').value = informe_final;
  modal.style.display = "block";
  adjustTextareaHeight();
}

function adjustTextareaHeight() {
  document.querySelectorAll('.expandable').forEach(textarea => {
    textarea.style.height = 'auto';
    textarea.style.height = (textarea.scrollHeight) + 'px';
  });
}

function downloadFiles(id, nombre) {
  // Codificar el nombre del paciente para que sea seguro incluirlo en la URL
  const encodedNombre = encodeURIComponent(nombre);
  window.location.href = `descargarArchivos.php?paciente_id=${id}&nombre=${encodedNombre}`;
}

//genera el informe final segun el contenido de el campo informe final o hgenera uno nuevo si no hay nada 

function generateReport(id) {
  fetch(`getInformeFinal.php?id=${id}`)
    .then(response => response.json())
    .then(data => {
      console.log('Respuesta del servidor:', data); // Depuración

      if (data.informe_final) {
        window.open(data.informe_final, '_blank');
      } else {
        console.error('El campo informe_final está vacío.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
}


document.getElementById('accountForm').addEventListener('submit', function(event) {
  event.preventDefault();
  var formData = new FormData(document.getElementById('accountForm'));
  var id = document.getElementById('id').value;
  var url = id ? 'actualizarPaciente.php?_=' + new Date().getTime() : 'agregarPaciente.php?_=' + new Date().getTime();

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
  .catch(error => console.error('Error:', error));
});

function confirmDelete(id) {
  Swal.fire({
    title: '¿Estás seguro?',
    text: "No podrás revertir esto!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, borrar!',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      fetch('borrarPaciente.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'id=' + id
      })
      .then(response => response.text())
      .then(data => {
        Swal.fire(
          'Borrado!',
          'El paciente ha sido borrado.',
          'success'
        ).then(() => {
          location.reload();
        });
      })
      .catch(error => console.error('Error:', error));
    }
  })
}

function guardarNota() {
  const textoNotas = document.getElementById('textoNotas').value;
  fetch('guardarNota.php', {
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

document.getElementById('cerrarNotas').addEventListener('click', function() {
  guardarNotaYCerrar();
});
</script>
</body>
</html>

