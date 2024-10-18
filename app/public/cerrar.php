<?php
  session_start();
  if (isset($_SESSION))
    unset($_SESSION);
  session_destroy();    //Destruye la sesión
  header('Location: index.php');    //Nos redirige al index.php para iniciar la sesión con las credenciales del usuario
?>