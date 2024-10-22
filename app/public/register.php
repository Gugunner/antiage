<?php
session_start();
// Configuración de la conexión a la base de datos
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

// Registrando el usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['new_username'] ?? '';
    $password = $_POST['new_password'] ?? '';

    // Validaciones básicas
    if (empty($username) || empty($password)) {
        exit('Por favor, proporcione tanto un nombre de usuario como una contraseña.');
    }

    // Verificar si el usuario ya existe
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM user_data WHERE username = ?");
    $stmt->execute([$username]);
    if ($stmt->fetchColumn() > 0) {
        echo "<script>
        localStorage.setItem('userExists', 'true');
        window.location.href = 'index.php';
      </script>";
        exit;
    }

    // Hashear la contraseña
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Insertar el nuevo usuario con los datos necesarios
    $stmt = $pdo->prepare("INSERT INTO user_data (username, password) VALUES (?, ?)");
    if ($stmt->execute([$username, $passwordHash])) {
        // Redirigir al usuario a la pantalla de inicio de sesión con un parámetro de éxito
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'index.php?registered=true';
                }, 2000); // Redirige después de 2 segundos
              </script>";
    } else {
        echo "Error al registrar el usuario.";
    }
    exit;
} else {
    exit('Método de solicitud inválido.');
}
?>
