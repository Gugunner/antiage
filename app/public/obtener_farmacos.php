<?php
require_once 'config.php';

try {
    $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT enfermedad, palabras_clave_ausente, palabras_clave_presente FROM informes_medicos WHERE tipo_informe = 'farmacogenetica'");
    $stmt->execute();

    $enfermedades = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($enfermedades);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
