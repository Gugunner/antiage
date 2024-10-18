<?php
// Configuración de la conexión a la base de datos
require_once 'config.php';

// Crear conexión
$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los IDs de las enfermedades a borrar
if (isset($_POST['ids'])) {
    $ids = json_decode($_POST['ids'], true);

    // Verificar que los IDs sean un array
    if (is_array($ids) && count($ids) > 0) {
        // Crear placeholders para la consulta
        $placeholders = implode(',', array_fill(0, count($ids), '?'));

        // Preparar y ejecutar la consulta de eliminación
        $sql = "DELETE FROM informes_medicos WHERE id IN ($placeholders)";
        $stmt = $conn->prepare($sql);

        // Verificar si la preparación de la consulta fue exitosa
        if ($stmt === false) {
            error_log("Error al preparar la consulta: " . $conn->error);
            die("Error al preparar la consulta: " . $conn->error);
        }

        // Vincular los parámetros
        $stmt->bind_param(str_repeat('i', count($ids)), ...$ids);

        if ($stmt->execute() === TRUE) {
            echo "Enfermedades borradas correctamente";
        } else {
            echo "Error al borrar las enfermedades: " . $stmt->error;
        }

        // Cerrar la conexión
        $stmt->close();
    } else {
        echo "No se proporcionaron IDs válidos.";
    }
} else {
    echo "IDs de las enfermedades no proporcionados.";
}

$conn->close();
?>
