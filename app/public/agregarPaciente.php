<?php
require_once 'config.php';

try {
    $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $identificacion = $_POST['identificacion'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sexo = $_POST['sexo'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $codigo_kit = $_POST['codigo_kit'];
    $tipo_muestra = $_POST['tipo_muestra'];
    $enfermedades_diagnosticadas = $_POST['enfermedades_diagnosticadas'];
    $informacion_clinica = $_POST['informacion_clinica'];
    $codigo_vendedor = $_POST['codigo_vendedor'];

    // Insertar el nuevo paciente en la base de datos
    $sql = "INSERT INTO clientes (nombre, identificacion, fecha_nacimiento, sexo, correo, telefono, codigo_kit, tipo_muestra, enfermedades_diagnosticadas, informacion_clinica, codigo_vendedor) 
            VALUES (:nombre, :identificacion, :fecha_nacimiento, :sexo, :correo, :telefono, :codigo_kit, :tipo_muestra, :enfermedades_diagnosticadas, :informacion_clinica, :codigo_vendedor)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nombre' => $nombre,
        ':identificacion' => $identificacion,
        ':fecha_nacimiento' => $fecha_nacimiento,
        ':sexo' => $sexo,
        ':correo' => $correo,
        ':telefono' => $telefono,
        ':codigo_kit' => $codigo_kit,
        ':tipo_muestra' => $tipo_muestra,
        ':enfermedades_diagnosticadas' => $enfermedades_diagnosticadas,
        ':informacion_clinica' => $informacion_clinica,
        ':codigo_vendedor' => $codigo_vendedor
    ]);

    // Obtener el ID del paciente recién insertado
    $cliente_id = $pdo->lastInsertId();

    // Si el campo informe_final está vacío, generar la URL con el ID recién insertado
    if (empty($informe_final)) {
        $base_url = "https://antiageg.com/informefinal.html";
        $informe_final = $base_url . "?id=" . $cliente_id;

        // Actualizar el campo informe_final con la URL generada
        $sql = "UPDATE clientes SET informe_final = :informe_final WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':informe_final' => $informe_final, ':id' => $cliente_id]);
    }

    // Manejar la subida de archivos PDF
    function subirPDFs($pdo, $cliente_id) {
        $pdfs = $_FILES['pdfs'];
        $upload_dir = "uploads/";

        for ($i = 0; $i < count($pdfs['name']); $i++) {
            if ($pdfs['error'][$i] == UPLOAD_ERR_OK) {
                $tmp_name = $pdfs['tmp_name'][$i];
                $name = basename($pdfs['name'][$i]);
                $file_path = $upload_dir . $cliente_id . "_" . $name;

                if (move_uploaded_file($tmp_name, $file_path)) {
                    $pdf_field = "pdf" . ($i + 1);
                    $sql = "UPDATE clientes SET $pdf_field = :file_path WHERE id = :id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([':file_path' => $file_path, ':id' => $cliente_id]);
                }
            }
        }
    }

    subirPDFs($pdo, $cliente_id);

    echo "Paciente agregado correctamente y archivos PDF subidos.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
