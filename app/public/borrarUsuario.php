<?php
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

$id = $_POST['id'] ?? '';

if (!empty($id)) {
    $stmt = $pdo->prepare("DELETE FROM allowed_users WHERE id = ?");
    $stmt->execute([$id]);
    echo "Usuario borrado exitosamente.";
} else {
    echo "ID de usuario no puede estar vacío.";
}
?>
