<?php
// Conexión a la base de datos
require_once 'config.php';

try {
    $conn = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si ya existe una nota
    $sql = "SELECT id FROM notas ORDER BY fecha DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        // Si existe, actualizar la última nota
        $sqlUpdate = "UPDATE notas SET nota = :nota, fecha = CURRENT_TIMESTAMP WHERE id = :id";
        $stmtUpdate = $conn->prepare($sqlUpdate);
        $stmtUpdate->bindParam(':nota', $_POST['nota']);
        $stmtUpdate->bindParam(':id', $resultado['id']);
        $stmtUpdate->execute();
        echo "Nota actualizada con éxito";
    } else {
        // Si no existe, insertar una nueva nota
        $sqlInsert = "INSERT INTO notas (nota) VALUES (:nota)";
        $stmtInsert = $conn->prepare($sqlInsert);
        $stmtInsert->bindParam(':nota', $_POST['nota']);
        $stmtInsert->execute();
        echo "Nota guardada con éxito";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
