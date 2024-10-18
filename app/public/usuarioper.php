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
  <title>Tabla de Usuarios Permitidos con ag-Grid</title>
  <!-- ag-Grid CSS -->
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-grid.css">
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-theme-alpine.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <!-- FontAwesome para los iconos -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="estilo_Cuentas.css?v=1.1&_=<?php echo time(); ?>">
  <style>
    body {
      background-color: #141b24; /* Color de fondo claro */
      font-family: 'Poppins', sans-serif;
    }
    .swal2-popup {
      font-family: 'Poppins', sans-serif;
    }

    .edit-button:hover, .delete-button:hover {
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
    margin: 0 5px; /* Añadir margen entre los botones */
  }

#enfermedad i {
    color: #8f27fa; /* Aplica el color solo al icono */
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
    <button id="addNewAccountBtn" class="button"><i class="fas fa-plus"></i>Nuevo Usuario Permitido</button>

    <!-- Modal -->
    <div id="accountModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: hidden; background-color: transparent;">
      <div class="modal-content" style="background-color: #1f2936; padding: 10px; border: 1px solid #888; width: auto; max-width: 600px; box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px rgba(0,0,0,0.19); position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); font-family: 'Poppins', sans-serif; border-radius: 10px;">
        <span class="close" style="color: #ffffff; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
        <form id="accountForm" method="post" action="agregarUsuario.php" style="display: grid; grid-template-columns: repeat(2, max-content); gap: 4px;">
          <div style="grid-column: span 2; display: flex; justify-content: center;"></div>
          
          <input type="hidden" id="id" name="id">
          
          <div style="grid-column: span 2; display: flex; flex-direction: column; margin-top: 10px;">
            <label for="username" style="margin: 0; font-size: 12px;">Usuario</label>
            <textarea id="username" name="username" required style="padding: 4px; margin: 0;" class="expandable"></textarea>
          </div>
          
          <input type="submit" value="Guardar" style="grid-column: span 2; background-color: #141b24; color: white; cursor: pointer; padding: 4px; margin: 4px auto; width: auto;">
        </form>
      </div>
    </div>

    <!-- <button class="button" onclick="location.href='https://www.cesarm54.sg-host.com';">Formulario</button>-->

    <button class="button" id="enfermedad" onclick="location.href='enfermedadestablas.php';"><i class="fas fa-virus"></i> Enfermedades.</button>

    <!-- <div id="panelNotas" style="display: none;">
      <button id="cerrarNotas" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 24px; cursor: pointer;">&times;</button>
      <textarea id="textoNotas"></textarea>
      <button id="guardarNotas" class="buttonGuardar"><i class="fas fa-save"></i></button>
    </div>
    
    <button class="button"><i class="fas fa-user"></i> Usuario</button>
    -->
    <button class="button" onclick="document.location.href='cerrar.php'"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</button>
  </div>
  <div class="right-items">
    <div class="bell-container">
      <i class="fas fa-bell"></i><span class="bell-counter">5</span> <!-- Icono de campana con contador -->
    </div>
    <ul class="counters-list">
      <li><span>Informes generados: 0</span></li>
    </ul>
  </div>
</div>

<!-- Contenedor de ag-Grid -->
<div id="myGrid" class="ag-theme-quartz-dark" style="height: 600px"></div>

<!-- ag-Grid library -->
<script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.js?_=${new Date().getTime()}"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Llamada AJAX para obtener los datos al iniciar la página
    fetch('obtenerUsuarios.php?_=' + new Date().getTime())
      .then(response => response.json())
      .then(data => {
        const gridOptions = {
          columnDefs: [
            { headerName: "Usuario", field: "username", editable: true, width: 150, filter: true },
            { 
              headerName: "Opciones",
              field: "opciones",
              editable: false,
              width: 150,
              cellRenderer: function(params) {
                var editButton = `<button class="edit-button" onclick="openModalWithData(${params.data.id}, '${params.data.username}')" data-action="edit" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-pencil-alt" style="color: rgb(68, 144, 53);"></i></button>`;
                var deleteButton = `<button class="delete-button" onclick="confirmDelete(${params.data.id})" data-action="delete" data-id="${params.data.id}" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fas fa-trash" style="color: red;"></i></button>`;
                return `<div class="options-buttons">${editButton} ${deleteButton}</div>`;
              }

            }
          ],
          rowData: data,
          domLayout: 'autoHeight',
        };

        new agGrid.Grid(document.getElementById('myGrid'), gridOptions);
      })
      .catch(error => console.error('Error al obtener datos:', error));
  });

  function openModalWithData(id, username) {
    document.getElementById("id").value = id;
    document.getElementById('username').value = username;
    document.getElementById('accountModal').style.display = 'block';
  }

  function confirmDelete(id) {
    Swal.fire({
      title: '¿Estás seguro?',
      text: "Borrarás el usuario correspondiente. Este cambio no se puede revertir. ¿Deseas confirmar?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, borrar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        deleteUsuario(id);
      }
    });
  }

  function deleteUsuario(id) {
    fetch('borrarUsuario.php?_=' + new Date().getTime(), {
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
        text: 'El usuario ha sido borrado correctamente.',
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

  var modal = document.getElementById("accountModal");
  var btn = document.getElementById("addNewAccountBtn");
  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function() {
    // Limpiar los campos del formulario
    document.getElementById('id').value = '';
    document.getElementById('username').value = '';
    
    modal.style.display = "block";
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  document.getElementById('accountForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(document.getElementById('accountForm'));
    var id = document.getElementById('id').value;
    var url = id ? 'actualizarUsuario.php?_=' + new Date().getTime() : 'agregarUsuario.php?_=' + new Date().getTime();

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
        location.reload(); // Recargar la página para ver los cambios actualizados
      });
      modal.style.display = 'none'; // Cerrar el modal
    })
    .catch(error => console.error('Error al actualizar:', error));
  });
</script>

</body>
</html>
