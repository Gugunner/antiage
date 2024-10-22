<?php
require_once 'config.php';
$charset_allowed = 'utf8mb4';

try {
    $dsn = "mysql:host=" . HOSTNAME . ";dbname=" . DBNAME . ";charset=" . $charset_allowed;
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, USERNAME, PASSWORD, $options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT disease, disease_type, abundant, moderate, exclude FROM disease_food_consumption");
    $stmt->execute();
    header('Content-Type: application/json; charset=utf-8');
    $enfermedades = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($enfermedades);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
