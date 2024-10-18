<?php
require_once 'config.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Obtener los archivos asociados al paciente
        $sql = "SELECT pdf1, pdf2, pdf3, pdf4, pdf5, pdf6 FROM clientes WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($cliente) {
            // Borrar los archivos del servidor
            foreach ($cliente as $file) {
                if ($file) {
                    if (file_exists($file)) {
                        if (unlink($file)) {
                            echo "Archivo $file borrado correctamente.<br>";
                        } else {
                            echo "Error al borrar el archivo $file.<br>";
                        }
                    } else {
                        echo "El archivo $file no existe.<br>";
                    }
                }
            }

            // Borrar el registro del paciente
            $sql = "DELETE FROM clientes WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            if ($stmt->execute([':id' => $id])) {
                echo "Paciente con ID $id borrado correctamente.";
            } else {
                echo "Error al borrar el paciente con ID $id.";
            }
        } else {
            echo "No se encontraron archivos para el paciente con ID $id.<br>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "ID de paciente no especificado.";
}
?>
