<?php
require_once 'config.php';
header('Content-Type: application/json');

try {
    $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id, nombre, identificacion, fecha_nacimiento, sexo, correo, telefono, codigo_kit, tipo_muestra, enfermedades_diagnosticadas, informacion_clinica, codigo_vendedor, informe_final FROM clientes";
    $stmt = $pdo->query($sql);
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($clientes);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
