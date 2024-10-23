<?php
require_once 'config.php';
header('Content-Type: application/json');

try {
    $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT informe_final FROM clientes WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($cliente) {
        $base_url = BASEURL ."informefinal.php";
        echo json_encode(['informe_final' => $base_url . "?id=" . $id]);
    } else {
        echo json_encode(['error' => 'No se encontró el cliente con el ID proporcionado.']);
    }
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>