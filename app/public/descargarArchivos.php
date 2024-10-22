<?php
require_once 'config.php';

if (isset($_GET['paciente_id']) && isset($_GET['nombre'])) {
    $paciente_id = $_GET['paciente_id'];
    $nombre = urldecode($_GET['nombre']); // Decodificar el nombre del paciente

    try {
        $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT pdf1, pdf2, pdf3, pdf4, pdf5, pdf6 FROM clientes WHERE id = :paciente_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':paciente_id' => $paciente_id]);
        $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($cliente) {
            $zip = new ZipArchive();
            $zipFileName = tempnam(sys_get_temp_dir(), 'paciente_') . '.zip';

            if ($zip->open($zipFileName, ZipArchive::CREATE) !== TRUE) {
                exit("No se pudo abrir el archivo ZIP.\n");
            }

            foreach ($cliente as $key => $file) {
                if ($file && file_exists($file)) {
                    $zip->addFile($file, basename($file));
                }
            }

            $zip->close();

            // Reemplazar caracteres no válidos en el nombre del archivo
            $safeName = preg_replace('/[^a-zA-Z0-9-_]/', '_', $nombre);

            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="archivos_' . $safeName . '.zip"');
            header('Content-Length: ' . filesize($zipFileName));

            readfile($zipFileName);
            unlink($zipFileName);
        } else {
            echo "No se encontraron archivos para este paciente.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "ID de paciente o nombre no especificado.";
}
?>
