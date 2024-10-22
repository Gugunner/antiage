<?php
require_once 'config.php';

$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);

if ($conn->connect_error) {
    // die("Conexión fallida: " . $conn->connect_error);
    echo 'Caught exception: ', 'Conection fallida';
}

$id = $_GET['id'];
$sql = "SELECT pdf1, pdf2, pdf3, pdf4, pdf5, pdf6 FROM clientes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$files = $result->fetch_assoc();
$stmt->close();
$conn->close();

$pdfFiles = [$files['pdf1'], $files['pdf2'], $files['pdf3'], $files['pdf4'], $files['pdf5'], $files['pdf6']];
$ancestryPdf = '';

foreach ($pdfFiles as $pdf) {
    if (strpos(strtolower($pdf), 'ancestry') !== false) {
        $ancestryPdf = $pdf;
        break;
    }
}

echo json_encode(['ancestryPdf' => $ancestryPdf]);
?>
