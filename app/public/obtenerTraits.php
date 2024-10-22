<?php
// Conectar a la base de datos
require_once 'config.php';
$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar la base de datos para obtener los registros de la tabla traits
$sql = "SELECT id, trait_name, risk_level, detail FROM traits";
$result = $conn->query($sql);

$traits = [];

if ($result->num_rows > 0) {
    // Convertir los datos a un array asociativo
    while ($row = $result->fetch_assoc()) {
        $traits[] = $row;
    }
}

// Devolver los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($traits);

$conn->close();
?>
