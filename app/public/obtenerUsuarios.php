<?php
session_start();  // Inicializar la sesión
if (!isset($_SESSION['user_id'])) { // Si no se ha establecido la variable user_id en la sesión
    header("Location: index.php"); // Redireccionar a index.php
    exit(); // Asegurar que el script se detenga después de redireccionar
}
require_once 'config.php';
$charset = 'utf8mb4';

$dsn = "mysql:host=" . HOSTNAME . ";dbname=" . DBNAME . ";charset=" . $charset;
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, USERNAME, PASSWORD, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$stmt = $pdo->query("SELECT id, username FROM allowed_users");
$users = $stmt->fetchAll();
echo json_encode($users);
?>
