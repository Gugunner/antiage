<?php
require_once 'config.php';

try {
    $pdo = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $enfermedad = $_POST['enfermedad'];
    $tipoInforme = $_POST['tipoInforme'];
    $palabrasClaveAusente = $_POST['palabrasClaveAusente'];
    $palabrasClavePresente = $_POST['palabrasClavePresente'];
    $recomendacionesPresentes = $_POST['recomendaciones_presentes'];
    $recomendacionesAusentes = $_POST['recomendaciones_ausentes'];
    $alimentosAbundancia = $_POST['alimentos_abundancia'];
    $alimentosModeradamente = $_POST['alimentos_moderadamente'];
    $alimentosCuidado = $_POST['alimentos_cuidado'];
    $tratamiento = $_POST['tratamiento'];
    $diagnostico = $_POST['diagnostico'];  // Nuevo campo
    $opciones = $_POST['opciones'];

    $sql = "INSERT INTO informes_medicos (enfermedad, tipo_informe, palabras_clave_ausente, palabras_clave_presente, recomendaciones_presentes, recomendaciones_ausentes, alimentos_abundancia, alimentos_moderadamente, alimentos_cuidado, tratamiento, diagnostico, opciones, created_at) 
            VALUES (:enfermedad, :tipoInforme, :palabrasClaveAusente, :palabrasClavePresente, :recomendacionesPresentes, :recomendacionesAusentes, :alimentosAbundancia, :alimentosModeradamente, :alimentosCuidado, :tratamiento, :diagnostico, :opciones, NOW())";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':enfermedad', $enfermedad);
    $stmt->bindParam(':tipoInforme', $tipoInforme);
    $stmt->bindParam(':palabrasClaveAusente', $palabrasClaveAusente);
    $stmt->bindParam(':palabrasClavePresente', $palabrasClavePresente);
    $stmt->bindParam(':recomendacionesPresentes', $recomendacionesPresentes);
    $stmt->bindParam(':recomendacionesAusentes', $recomendacionesAusentes);
    $stmt->bindParam(':alimentosAbundancia', $alimentosAbundancia);
    $stmt->bindParam(':alimentosModeradamente', $alimentosModeradamente);
    $stmt->bindParam(':alimentosCuidado', $alimentosCuidado);
    $stmt->bindParam(':tratamiento', $tratamiento);
    $stmt->bindParam(':diagnostico', $diagnostico);  // Nuevo campo
    $stmt->bindParam(':opciones', $opciones);

    $stmt->execute();
    echo "Nueva enfermedad agregada correctamente.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
