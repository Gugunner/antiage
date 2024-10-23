<?php
header('Content-Type: application/json');
require_once 'config.php';

try {
    $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT trait_name, risk_level, detail from traits");
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
