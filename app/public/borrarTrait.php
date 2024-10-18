<?php
// Conectar a la base de datos
require_once 'config.php';

$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del trait a borrar
$id = $_POST['id'];

// Preparar la consulta SQL para eliminar el registro
$sql = "DELETE FROM traits WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Trait borrado correctamente";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
