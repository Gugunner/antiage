<?php
header('Content-Type: application/json');
require_once 'config.php';

// Crear conexión
$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);

// Verificar conexión
if ($conn->connect_error) {
    die(json_encode(['error' => 'Error de conexión a la base de datos']));
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        if (!isset($data['codigo_kit'])) {
            $data['error_debug'] = 'Campo codigo_kit no encontrado en los resultados.';
        }
        echo json_encode($data);
    } else {
        echo json_encode(['error' => 'Cliente no encontrado']);
    }
} else {
    echo json_encode(['error' => 'ID de cliente no proporcionado']);
}

$conn->close();
?>
