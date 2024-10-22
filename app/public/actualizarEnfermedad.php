<?php
require_once 'config.php';

try {
    $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recibe el ID del registro que quieres actualizar
    $id = $_POST['id'];
    
    // Recibe los valores a actualizar. Si el campo está vacío, no se actualiza.
    $enfermedad = !empty($_POST['enfermedad']) ? $_POST['enfermedad'] : null;
    $tipoInforme = !empty($_POST['tipoInforme']) ? $_POST['tipoInforme'] : null;
    $palabrasClaveAusente = !empty($_POST['palabrasClaveAusente']) ? $_POST['palabrasClaveAusente'] : null;
    $palabrasClavePresente = !empty($_POST['palabrasClavePresente']) ? $_POST['palabrasClavePresente'] : null;
    $recomendacionesPresentes = !empty($_POST['recomendaciones_presentes']) ? $_POST['recomendaciones_presentes'] : null;
    $recomendacionesAusentes = !empty($_POST['recomendaciones_ausentes']) ? $_POST['recomendaciones_ausentes'] : null;
    $alimentosAbundancia = !empty($_POST['alimentos_abundancia']) ? $_POST['alimentos_abundancia'] : null;
    $alimentosModeradamente = !empty($_POST['alimentos_moderadamente']) ? $_POST['alimentos_moderadamente'] : null;
    $alimentosCuidado = !empty($_POST['alimentos_cuidado']) ? $_POST['alimentos_cuidado'] : null;
    $tratamiento = !empty($_POST['tratamiento']) ? $_POST['tratamiento'] : null;
    $diagnostico = !empty($_POST['diagnostico']) ? $_POST['diagnostico'] : null;
    $opciones = !empty($_POST['opciones']) ? $_POST['opciones'] : null;

    // Crear la consulta de actualización dinámica
    $sql = "UPDATE informes_medicos SET ";
    $params = [];
    
    if ($enfermedad !== null) {
        $sql .= "enfermedad = :enfermedad, ";
        $params[':enfermedad'] = $enfermedad;
    }
    if ($tipoInforme !== null) {
        $sql .= "tipo_informe = :tipoInforme, ";
        $params[':tipoInforme'] = $tipoInforme;
    }
    if ($palabrasClaveAusente !== null) {
        $sql .= "palabras_clave_ausente = :palabrasClaveAusente, ";
        $params[':palabrasClaveAusente'] = $palabrasClaveAusente;
    }
    if ($palabrasClavePresente !== null) {
        $sql .= "palabras_clave_presente = :palabrasClavePresente, ";
        $params[':palabrasClavePresente'] = $palabrasClavePresente;
    }
    if ($recomendacionesPresentes !== null) {
        $sql .= "recomendaciones_presentes = :recomendacionesPresentes, ";
        $params[':recomendacionesPresentes'] = $recomendacionesPresentes;
    }
    if ($recomendacionesAusentes !== null) {
        $sql .= "recomendaciones_ausentes = :recomendacionesAusentes, ";
        $params[':recomendacionesAusentes'] = $recomendacionesAusentes;
    }
    if ($alimentosAbundancia !== null) {
        $sql .= "alimentos_abundancia = :alimentosAbundancia, ";
        $params[':alimentosAbundancia'] = $alimentosAbundancia;
    }
    if ($alimentosModeradamente !== null) {
        $sql .= "alimentos_moderadamente = :alimentosModeradamente, ";
        $params[':alimentosModeradamente'] = $alimentosModeradamente;
    }
    if ($alimentosCuidado !== null) {
        $sql .= "alimentos_cuidado = :alimentosCuidado, ";
        $params[':alimentosCuidado'] = $alimentosCuidado;
    }
    if ($tratamiento !== null) {
        $sql .= "tratamiento = :tratamiento, ";
        $params[':tratamiento'] = $tratamiento;
    }
    if ($diagnostico !== null) {
        $sql .= "diagnostico = :diagnostico, ";
        $params[':diagnostico'] = $diagnostico;
    }
    if ($opciones !== null) {
        $sql .= "opciones = :opciones, ";
        $params[':opciones'] = $opciones;
    }

    // Eliminar la última coma y añadir la cláusula WHERE
    $sql = rtrim($sql, ', ') . " WHERE id = :id";
    $params[':id'] = $id;

    $stmt = $pdo->prepare($sql);

    // Ejecutar la consulta con los parámetros proporcionados
    $stmt->execute($params);

    echo "Registro actualizado correctamente.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
