<?php
require_once 'config.php';
$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID de la enfermedad a borrar
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    error_log("ID recibido: " . $id); // Mensaje de depuración

    // Preparar y ejecutar la consulta de eliminación
    $sql = "DELETE FROM informes_medicos WHERE id = ?";
    $stmt = $conn->prepare($sql);

    // Verificar si la preparación de la consulta fue exitosa
    if ($stmt === false) {
        error_log("Error al preparar la consulta: " . $conn->error);
        die("Error al preparar la consulta: " . $conn->error);
    }

    $stmt->bind_param("i", $id);

    if ($stmt->execute() === TRUE) {
        echo "Enfermedad borrada correctamente";
    } else {
        echo "Error al borrar la enfermedad: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
} else {
    echo "ID de la enfermedad no proporcionado.";
}

$conn->close();
?>
