<?php
require_once __DIR__ . '/CorrespondenciaModel.php';


header('Content-Type: application/json'); // Responder en formato JSON

try {
    $CorrespondenciaModel = new CorrespondenciaModel();
    $correspondencias = $CorrespondenciaModel->obtenerCorrespondencia();

    echo json_encode([
        'success' => true,
        'data' => $correspondencias
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?>
