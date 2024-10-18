<?php
    require_once 'config.php';
    $conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $id = $_POST['id'];
    $trait_name = $_POST['trait_name'];
    $risk_level = $_POST['risk_level'];
    $detail = $_POST['detail'];

    // Verificar que el nivel de riesgo es uno de los permitidos
    if (!in_array($risk_level, ["Perjudicial", "Medio", "Beneficioso"])) {
        die("Nivel de riesgo inválido.");
    }

    // Preparar la consulta SQL para actualizar el registro
    $sql = "UPDATE traits SET trait_name = ?, risk_level = ?, detail = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $trait_name, $risk_level, $detail, $id);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Trait actualizado correctamente";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>
