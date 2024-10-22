<?php
require_once 'config.php';
// Establecer conexión
$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);

// Verificar conexión
if ($conn->connect_error) {
    die(json_encode(['error' => "Conexión fallida: " . $conn->connect_error]));
}

$id = $_GET['id'];
$sql = "SELECT pdf1, pdf2, pdf3, pdf4, pdf5, pdf6 FROM clientes WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(['error' => 'Error en la preparación de la consulta: ' . $conn->error]));
}

$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$files = $result->fetch_assoc();

if ($files === null) {
    die(json_encode(['error' => 'No se encontraron archivos PDF para el ID proporcionado']));
}

$stmt->close();
$conn->close();

$pdfFiles = [$files['pdf1'], $files['pdf2'], $files['pdf3'], $files['pdf4'], $files['pdf5'], $files['pdf6']];
$pharmaPdf = '';

foreach ($pdfFiles as $pdf) {
    if (strpos(strtolower($pdf), 'pharma') !== false || strpos(strtolower($pdf), 'farma') !== false) {
        $pharmaPdf = $pdf;
        break;
    }
}

echo json_encode(['pharmaPdf' => $pharmaPdf]);
?>
