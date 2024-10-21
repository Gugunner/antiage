<?php
require_once 'config.php';
header('Content-Type: application/json');

try {
    $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT enfermedad, palabras_clave_ausente, palabras_clave_presente FROM informes_medicos WHERE tipo_informe = 'RASGOS PERSONALES'");
    $stmt->execute();

    $enfermedades = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($enfermedades) {
        echo json_encode($enfermedades);
    } else {
        echo json_encode([]);
    }
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
