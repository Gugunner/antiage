<?php
require_once 'config.php';

// Crear conexión
$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// SQL para obtener datos
$sql = "SELECT * FROM informes_medicos";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

// Cerrar conexión
$conn->close();
?>
