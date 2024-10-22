<?php
require_once 'config.php';

if (isset($_POST['ids'])) {
    $ids = json_decode($_POST['ids']);

    try {
        $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        foreach ($ids as $id) {
            // Obtener los archivos asociados al paciente
            $sql = "SELECT pdf1, pdf2, pdf3, pdf4, pdf5, pdf6 FROM clientes WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

            // Borrar los archivos del servidor
            if ($cliente) {
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
            } else {
                echo "No se encontraron archivos para el paciente con ID $id.<br>";
            }

            // Borrar el registro del paciente
            $sql = "DELETE FROM clientes WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            if ($stmt->execute([':id' => $id])) {
                echo "Paciente con ID $id borrado correctamente.<br>";
            } else {
                echo "Error al borrar el paciente con ID $id.<br>";
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "IDs de pacientes no especificados.";
}
?>
