<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Fecha en el pasado
// Conexión a la base de datos
require_once 'config.php';

try {
    $conn = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Seleccionar la última nota guardada
    $sql = "SELECT nota FROM notas ORDER BY fecha DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $nota = $stmt->fetch(PDO::FETCH_ASSOC);

    echo $nota['nota'];
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>