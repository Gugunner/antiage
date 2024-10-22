<?php
session_start(); // Start the session at the beginning of the script

// Database connection configuration for allowed users
require_once 'config.php';
$charset_allowed = 'utf8mb4';

$dsn_allowed = "mysql:host=" . HOSTNAME . ";dbname=" . DBNAME . ";charset=" . $charset_allowed;
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn_registered = "mysql:host=" . HOSTNAME . ";dbname=" . DBNAME . ";charset=" . $charset_allowed;
$options_registered = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo_allowed = new PDO($dsn_allowed, USERNAME, PASSWORD, $options);
    $pdo_registered = new PDO($dsn_registered, USERNAME, PASSWORD, $options_registered);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Fetch allowed users from the allowed users database
$stmt_allowed = $pdo_allowed->query("SELECT username FROM allowed_users");
$allowed_users = $stmt_allowed->fetchAll(PDO::FETCH_COLUMN);

// User authentication
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Basic validations
    if (empty($username) || empty($password)) {
        // Redirect and store a flag in localStorage for frontend handling
        echo "<script>
        localStorage.setItem('invalidCredentials', 'true');
        window.location.href = 'index.php';
        </script>";
        exit;
    }

    // Check if the user is in the allowed list
    if (!in_array($username, $allowed_users)) {
        // User not allowed
        echo "<script>
        localStorage.setItem('userNotAllowed', 'true');
        window.location.href = 'index.php';
        </script>";
        exit;
    }

    // Verify user credentials from the registered users database
    $stmt_registered = $pdo_registered->prepare("SELECT id, username, password FROM user_data WHERE username = ?");
    $stmt_registered->execute([$username]);
    $user = $stmt_registered->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Credentials are correct
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: index2.php'); // Redirect to the welcome page
        exit;
    } else {
        // Handle incorrect credentials
        echo "<script>
        localStorage.setItem('invalidCredentials', 'true');
        window.location.href = 'index.php';
        </script>";
        exit;
    }
} else {
    // Handle invalid request method
    exit('Invalid request method.');
}
?>