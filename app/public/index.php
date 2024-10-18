<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="dc.png" type="image/png">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Registration Form</title>

<style>

  .form-container {
  text-align: center; /* Centra los elementos en el contenedor */
}

.logo {
  max-width: 250px; /* Ajusta esto al tamaño deseado */
  height: auto; /* Mantiene la relación de aspecto de la imagen */
  display: block; /* Hace que la imagen se comporte como un bloque */
  margin: 0 auto; /* Centra la imagen horizontalmente */
  margin-bottom: 20px; /* Añade espacio entre el logo y el formulario */
}

     body {
    font-family: 'Poppins', sans-serif;
font-weight: 600;
background-color: #f4f7f6; /* Color de fondo más claro y moderno */
color: #33475b; /* Nuevo color de texto para mejor contraste */
margin: 0;
display: flex;
align-items: center;
justify-content: center;
height: 100vh;
overflow: hidden;
    background-color: #f7f7f7;
    background-image: linear-gradient(to bottom, rgba(247, 247, 247, 1) 0%, rgba(247, 247, 247, 1) 0%, rgba(247, 247, 247, 0.4) 460%), url('fondoma.png');
    background-size: cover; /* Ajustar la imagen para cubrir toda la pantalla */
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Fijar el fondo para que cubra toda la página */
}


.form-container {
  font-family: 'Poppins', sans-serif;
    font-weight: 600;
    width: 100%;
    max-width: 350px;
    background: #ffffff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05); /* Sombra más suave y moderna */
    margin: 0;
}

h2 {
  font-family: 'Poppins', sans-serif;
    font-weight: 600;
    text-align: center;
    color: #2c3e50; /* Color más oscuro y elegante */
    font-size: 26px; /* Tamaño más grande para mayor impacto */
    margin-bottom: 25px;
    letter-spacing: 1px; /* Espaciado para un look sofisticado */
}

form {
    display: none; /* Hidden by default */
}

form.active {
    display: block; /* Only the active form is displayed */
}

label {
    display: block;
    margin-bottom: 5px;
    color: #6c757d;
    font-size: 14px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ced4da;
    border-radius: 4px; /* Bordes más redondeados */
    box-sizing: border-box; /* Ensures padding doesn't affect width */
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    outline: none;
}

input[type="submit"] {
  font-family: 'Poppins', sans-serif;
    font-weight: 600;
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 6px;
    background-color: #2c3e50; /* Color más oscuro y elegante */
    color: white;
    font-size: 16px;
    cursor: pointer;
    box-shadow: 0 2px 4px rgba(0, 123, 255, 0.3);
    transition: all 0.2s ease-in-out;
}

input[type="submit"]:hover {
    background-color: #1a334d; /* Color aún más oscuro al pasar el ratón */
    box-shadow: 0 4px 8px rgba(0, 123, 255, 0.4);
}

.form-toggle {
    text-align: center;
    margin-top: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
}

.form-toggle button {
  font-family: 'Poppins', sans-serif;
    font-weight: 600;
    background: none;
    border: none;
    color: #007bff;
    cursor: pointer;
    padding: 5px;
    font-size: 14px;
    transition: color 0.2s ease-in-out;
}

.form-toggle button:hover {
    color: #0056b3;
}

.form-toggle button:focus {
    outline: none;
}

.notification {
    position: fixed;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1000;
    background-color: #28a745;
    color: white;
    padding: 15px;
    box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1);
    border-radius: 4px;
    display: none;
    animation: fadeIn 0.5s;
}

@keyframes fadeIn {
    from { top: 10%; opacity: 0; }
    to { top: 30%; opacity: 1; }
}

.notification button {
    border: none;
    background: #155724;
    color: white;
    padding: 10px 20px;
    margin-left: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.notification button:hover {
    background: #19692c;
}

.logo-part1 {
    color: #2c3e50;
    font-weight: 600;
}

.logo-part2 {
    color: #1abc9c;
    font-weight: 400;
}

h2 {
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 0;
    padding: 0;
}

.credits {
  display: inline-flex; /* Uso de inline-flex para alineación interna */
  align-items: center; /* Centra los elementos verticalmente */
  justify-content: center; /* Centra horizontalmente */
  text-align: center;
  cursor: pointer;
  padding: 0px 5px;
  transition: color 0.5s ease-in-out;
  text-decoration: none;
  border-radius: 15px;  /* Aplica bordes redondeados */
  margin-top: 20px;
}


.credits-logo {
  width: auto; /* Establece el ancho según el contenido, es decir, el tamaño natural del logo */
  height: auto; /* Altura automática para mantener la proporción */
  max-width: 0; /* Empieza sin ocupar espacio horizontal */
  overflow: hidden; /* Evita que cualquier parte del logo se desborde cuando max-width es 0 */
  transition: opacity 0.3s, transform 0.3s, max-width 0.3s ease-in-out; /* Agrega transición para max-width */
  opacity: 0;
  transform: scale(0.1); /* Comienza pequeño para una entrada suave */
  margin-left: -10px; /* Espacio entre el texto y el logo */
}

.credits:hover .credits-logo {
  max-width: 100px; /* Ajusta esto al tamaño natural del logo */
  opacity: 1;
  transform: scale(0.4);
}

.credits:hover {
  color: #1abc9c;
  transform: scale(1);
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.oculto {
      display: none;
    }


</style>
</head>
<body>
  <div class="notification" id="successNotification">
    <span>"User successfully registered"!</span>
    <button onclick="document.getElementById('successNotification').style.display='none'">Close</button>
  </div>

  <div class="form-container">
    <img src="dc.png" alt="cable" class="logo"/>
    <form id="loginForm" class="active" action="login.php" method="post">
      <label for="username">User:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Log in">
    </form>

    <h2>Sign up</h2>
    <form id="registerForm" action="register.php" method="post">
      <label for="new_username">Choose a username:</label>
      <input type="text" id="new_username" name="new_username" required>
      
      <label for="new_password">Choose a password:</label>
      <input type="password" id="new_password" name="new_password" required>
      
      <input type="submit" value="Sign up">
    </form>

    <div class="form-toggle">
      <button onclick="toggleForms()">Switch to Register</button>
      <a href="https://darklifeex.com/" class="credits">
        "Creado por Zero Studios Inc"
        <img src="logoempresa.png" alt="Logo" class="credits-logo">
      </a>
    </div>
  </div>

  <script>
    function toggleForms() {
      var loginForm = document.getElementById('loginForm');
      var registerForm = document.getElementById('registerForm');
      var toggleButton = document.querySelector('.form-toggle button');

      if (loginForm.classList.contains('active')) {
        loginForm.classList.remove('active');
        registerForm.classList.add('active');
        toggleButton.textContent = 'Switch to Start';
      } else {
        registerForm.classList.remove('active');
        loginForm.classList.add('active');
        toggleButton.textContent = 'Switch to Register';
      }
    }

    window.onload = function() {
      // Verifica si se acaba de registrar un usuario.
      if (window.location.search.indexOf('registered=true') > -1) {
        Swal.fire({
          title: '¡User successfully registered!',
          icon: 'success',
          confirmButtonText: 'Ok',
          timer: 3000, // La alerta se cierra después de 3 segundos
          timerProgressBar: true, // Muestra una barra de progreso
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
          }
        });

        // Cambia al formulario de inicio de sesión
        document.getElementById('loginForm').classList.add('active');
        document.getElementById('registerForm').classList.remove('active');
        document.querySelector('.form-toggle button').textContent = 'Switch to Register';
      }
    };

    // Muestra una alerta SweetAlert2 si hay un mensaje en localStorage
    document.addEventListener('DOMContentLoaded', function() {
      if (localStorage.getItem('invalidCredentials') === 'true') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Las credenciales proporcionadas son incorrectas.'
        });
        localStorage.removeItem('invalidCredentials');
      }
      if (localStorage.getItem('userNotAllowed') === 'true') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Usuario no permitido. Comuníquese con soporte.'
        });
        localStorage.removeItem('userNotAllowed');
      }
    });
  </script>
</body>
</html>