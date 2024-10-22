<?php
  session_start();  // Inicializar la sesión
  if (!isset($_SESSION['user_id'])) // Si no se ha establecido la variable user_id en la sesión
    header("Location: index.php"); // Redireccionar a index.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de Traits con ag-Grid</title>
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-grid.css?_=${new Date().getTime()}">
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-theme-alpine.css?_=${new Date().getTime()}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap&_=${new Date().getTime()}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css?_=${new Date().getTime()}">
  <link rel="stylesheet" href="estilo_Cuentas.css?v=1.1&_=${new Date().getTime()}">
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
    

            .content {
          margin-top: 80px; /* Aumentar este valor para empujar el contenido hacia abajo si es necesario */
          padding: 10px;
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
      flex-wrap: wrap; /* Ajustar los elementos a nuevas líneas si es necesario */
      overflow: hidden;
    }
    .left-items {
      display: flex;
      align-items: center;
      gap: 10px; /* Espacio entre botones */
      flex-wrap: wrap;
    }
    .right-items {
      display: flex;
      align-items: center;
      gap: 10px;
      white-space: nowrap; /* Evitar que los elementos se dividan en varias líneas */
    }
    .bell-container {
      position: relative;
      margin-right: 10px;
    }
    .bell-counter {
      position: absolute;
      top: -10px;
      right: -10px;
      background-color: red;
      color: white;
      border-radius: 50%;
      padding: 2px 6px;
      font-size: 12px;
    }
    .counters-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      align-items: center;
    }
    .counters-list li {
      margin-right: 10px;
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
    .options-buttons {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }
    .options-buttons button {
      margin: 0 10px;
    }
    .button:hover {
      transform: scale(1.1);
      transition: transform 0.2s;
    }
    #deleteSelectedBtn:hover {
      transform: scale(1.05);
      transition: transform 0.2s;
    }
    #deleteSelectedBtn i {
      color: red;
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

  </style>
</head>
<body>
<div class="top-bar">
  <div class="left-items">
    <i class="fas fa-bars"></i>
    <!-- Botón para abrir el modal de nuevo Trait -->
    <button id="addNewAccountBtn" class="button"><i class="fas fa-plus"></i> Nuevo Trait</button>
    <button class="button" id="botonPacientes" onclick="location.href='clientesbrqpy.php';"><i class="fas fa-users"></i> Pacientes</button>
    <button class="button" id="botonEnfermedades" onclick="location.href='enfermedadestablas.php';"><i class="fas fa-notes-medical"></i> Enfermedad</button>


    </button>    <button class="button" id="botonNotas"><i class="fas fa-sticky-note"></i> Notas</button>
    <div id="panelNotas" style="display: none;">
      <button id="cerrarNotas" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 24px; cursor: pointer;">&times;</button>
      <textarea id="textoNotas"></textarea>
      <button id="guardarNotas" class="buttonGuardar"><i class="fas fa-save"></i></button>
    </div>

    
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

<!-- Modal para agregar nuevo Trait -->
<div id="accountModal" class="modal">
  <div class="modal-content">
    <span class="close" style="color: #ffffff; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
    <form id="accountForm" method="post" action="agregarTrait.php" enctype="multipart/form-data" style="display: grid; grid-template-columns: repeat(2, max-content); gap: 4px;">
      <div style="grid-column: span 2; display: flex; justify-content: center;"></div>
      <input type="hidden" id="id" name="id">
      <div style="grid-column: span 2; display: flex; flex-direction: column; margin-top: 10px;">
        <label for="trait_name" style="margin: 0; font-size: 12px;">Nombre del Trait</label>
        <textarea id="trait_name" name="trait_name" required style="padding: 4px; margin: 0;" class="expandable"></textarea>
      </div>
      <div style="grid-column: span 2; display: flex; flex-direction: column;">
        <label for="risk_level" style="margin: 0; font-size: 12px;">Nivel de Riesgo</label>
        <select id="risk_level" name="risk_level" required style="padding: 4px; margin: 0;">
          <option value="Perjudicial">Perjudicial</option>
          <option value="Medio">Medio</option>
          <option value="Beneficioso">Beneficioso</option>
        </select>
      </div>
      <div style="grid-column: span 2; display: flex; flex-direction: column;">
        <label for="detail" style="margin: 0; font-size: 12px;">Detalles</label>
        <textarea id="detail" name="detail" required style="padding: 4px; margin: 0;" class="expandable"></textarea>
      </div>
      <input type="submit" value="Guardar" style="grid-column: span 2; background-color: #141b24; color: white; cursor: pointer; padding: 4px; margin: 4px auto; width: auto;">
    </form>
  </div>
</div>

<div class="content">
  <div id="myGrid" class="ag-theme-quartz-dark" style="height: 600px;"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.js?_=${new Date().getTime()}"></script>
<script>
  let gridOptions;

  document.addEventListener('DOMContentLoaded', function() {
    fetch('obtenerTraits.php?_=' + new Date().getTime())
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
            { headerName: "ID", field: "id", sortable: true, filter: 'agNumberColumnFilter', width: 15 },
            { headerName: "Nombre del Trait", field: "trait_name", editable: true, width: 100, filter: 'agTextColumnFilter' },
            { headerName: "Nivel de Riesgo", field: "risk_level", editable: true, width: 25, filter: 'agTextColumnFilter',
              valueFormatter: (params) => {
                if (params.value === "Perjudicial") return "Perjudicial";
                if (params.value === "Beneficioso") return "Beneficioso";
                return "Medio"; 
              }
            },
            { headerName: "Detalles", field: "detail", editable: true, width: 200, filter: 'agTextColumnFilter' },
            { 
              headerName: "Opciones",
              field: "opciones",
              editable: false,
              width: 15,
              cellRenderer: function(params) {
                var renewButton = `<button class="renew-button" onclick="openModalWithData(${params.data.id}, \`${params.data.trait_name}\`, \`${params.data.risk_level}\`, \`${params.data.detail}\`)" data-action="renew" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-pencil-alt" style="color: rgb(68, 144, 53);"></i></button>`;
                var deleteButton = `<button class="delete-button" onclick="confirmDelete(${params.data.id})" data-action="delete" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-trash" style="color: red;"></i></button>`;
                return `<div class="options-buttons">${renewButton} ${deleteButton}</div>`;
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
            setTimeout(() => {
              params.api.setSortModel([{ colId: 'id', sort: 'desc' }]); 
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
        text: `Borrarás los traits seleccionados. Este cambio no se puede revertir. ¿Deseas confirmar?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, borrar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          deleteSelectedTraits(selectedIds);
        }
      });
    } else {
      Swal.fire({
        icon: 'warning',
        title: 'No hay selecciones',
        text: 'Por favor, seleccione al menos un trait para borrar.',
        showConfirmButton: true,
        confirmButtonText: 'Ok',
      });
    }
  });

  function deleteSelectedTraits(ids) {
    fetch('borrarTraits.php?_=' + new Date().getTime(), {
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
        text: 'Los traits seleccionados han sido borrados correctamente.',
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

  function openModalWithData(id, trait_name, risk_level, detail) {
    document.getElementById("id").value = id;
    document.getElementById('trait_name').value = trait_name;
    document.getElementById('risk_level').value = risk_level;
    document.getElementById('detail').value = detail;
    document.getElementById("accountModal").style.display = "block";
  }

  document.getElementById('addNewAccountBtn').addEventListener('click', function() {
    document.getElementById('id').value = '';
    document.getElementById('trait_name').value = '';
    document.getElementById('risk_level').value = 'Medio'; 
    document.getElementById('detail').value = '';
    document.getElementById('accountModal').style.display = 'block';
  });

 document.getElementById('accountForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var formData = new FormData(document.getElementById('accountForm'));
    var actionUrl = document.getElementById('id').value ? 'actualizarTrait.php' : 'agregarTrait.php';
    
    fetch(actionUrl, {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      Swal.fire({
        icon: 'success',
        title: 'Guardado',
        text: 'El Trait ha sido procesado exitosamente.',
        showConfirmButton: false,
        timer: 1500
      }).then(() => {
        location.reload();
      });
    })
    .catch(error => {
      console.error('Error:', error);
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Hubo un problema al procesar el Trait. Inténtalo nuevamente.',
      });
    });
});

  window.onclick = function(event) {
    var modal = document.getElementById('accountModal');
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  };

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
  
function confirmDelete(id) {
  Swal.fire({
    title: '¿Estás seguro?',
    text: `Eliminarás este Trait. Este cambio no se puede revertir. ¿Deseas continuar?`,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, borrar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      deleteTrait(id);
    }
  });
}

function deleteTrait(id) {
  fetch('borrarTrait.php', {
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
      text: 'El Trait ha sido eliminado correctamente.',
      showConfirmButton: false,
      timer: 1500,
      customClass: {
        popup: 'swal2-popup'
      }
    }).then(() => {
      location.reload(); // Recargar la página para actualizar la tabla
    });
  })
  .catch(error => console.error('Error al borrar el Trait:', error));
}

</script>
</body>
</html>
