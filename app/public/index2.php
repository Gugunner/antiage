<?php
session_start();  // Inicializar la sesión
if (!isset($_SESSION['user_id'])) { // Si no se ha establecido la variable user_id en la sesión
    header("Location: index.php"); // Redireccionar a index.php
    exit(); // Asegurar que el script se detenga después de redireccionar
}

// Lista de usuarios permitidos
$usuariosPermitidos = [ 'cesar', 'liosnelcue'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="81x (1).png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            background-image: linear-gradient(to bottom, rgba(247, 247, 247, 1) 0%, rgba(247, 247, 247, 1) 30%, rgba(247, 247, 247, 0.4) 300%), url('fondoma.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .header {
            color: #333;
            font-size: 70px;
            margin: 0 auto;
            margin-top: 50px;
            margin-bottom: 80px;
            font-weight: 300;
            text-transform: uppercase;
            background-color: transparent;
            min-height: 100px;
        }

        .button {
            display: inline-block;
            margin: 20px;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background-image: linear-gradient(to right, #6a82fb, #fc5c7d);
        }

        .button i {
            margin-right: 8px;
        }

        .button-strand {
            background-image: linear-gradient(to right, #007bff, #004085);
        }

        .button-fiber {
            background-image: linear-gradient(to right, #6f42c1, #5017a1);
        }

        .button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .button:focus {
            outline: none;
        }

        .button:active {
            transform: translateY(1px);
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .hiden {
        display: none;
    }
    </style>
</head>
<body>
    <div class="header">YOU TOMORROW</div>

    <a href="white_book/presentation/white_book.php" class="button button-strand">
        <i class="fas fa-wind"></i>White Book
    </a>

   <div class="">
    <a href="white_book/presentation/white_book (5).html" class="button button-strand">
        <i class="fas fa-wind"></i> White Book Public
    </a>
</div>


    <div class="">
    <a href="enfermedadestablas.php" class="button button-fiber">
        <i class="fas fa-wave-square"></i> YT System
    </a>
</div>

    <?php
    // Mostrar el botón solo si el usuario está en la lista de usuarios permitidos
    //if (in_array($_SESSION['username'], $usuariosPermitidos)) {
      //  echo '<a href="gestor.php" class="button button-mapas">
       //         <i class="fas fa-map-marked"></i>Mapas Billing
       //       </a>';
   // }
    ?>
</body>
</html>

