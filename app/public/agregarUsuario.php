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
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$username = $_POST['username'] ?? '';

if (!empty($username)) {
    $stmt = $pdo->prepare("INSERT INTO allowed_users (username) VALUES (?)");
    $stmt->execute([$username]);
    echo "Usuario agregado exitosamente.";
} else {
    echo "El nombre de usuario no puede estar vacío.";
}
?>
