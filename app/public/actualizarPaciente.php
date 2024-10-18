<?php
    require_once 'config.php';
    
    try {
        $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Obtener los datos del formulario
        $id = isset($_POST['id']) ? $_POST['id'] : null;
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
        $informe_final = $_POST['informe_final'];  // Campo del informe final que puede ser editado manualmente

        // Si existe un ID, actualizamos el registro existente
        if ($id) {
            $sql = "UPDATE clientes SET 
                    nombre = :nombre, 
                    identificacion = :identificacion, 
                    fecha_nacimiento = :fecha_nacimiento, 
                    sexo = :sexo, 
                    correo = :correo, 
                    telefono = :telefono, 
                    codigo_kit = :codigo_kit, 
                    tipo_muestra = :tipo_muestra, 
                    enfermedades_diagnosticadas = :enfermedades_diagnosticadas, 
                    informacion_clinica = :informacion_clinica, 
                    codigo_vendedor = :codigo_vendedor, 
                    informe_final = :informe_final
                    WHERE id = :id";
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
                ':codigo_vendedor' => $codigo_vendedor,
                ':informe_final' => $informe_final,  // Actualización del informe_final
                ':id' => $id
            ]);

            echo "Datos del paciente actualizados correctamente.";
        } else {
            echo "No se ha proporcionado un ID válido para la actualización.";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
