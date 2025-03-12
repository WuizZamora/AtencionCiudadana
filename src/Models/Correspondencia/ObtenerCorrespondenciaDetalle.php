<?php

$IDSolicitud = $_GET['IDSolicitud'];
require_once __DIR__ . '/CorrespondenciaModel.php';

header('Content-Type: application/json'); // Responder en formato JSON

try {
    $CorrespondenciaModel = new CorrespondenciaModel();
    $correspondencia = $CorrespondenciaModel->obtenerCorrespondenciaDetalle($IDSolicitud); // Nota el nombre de variable
    echo json_encode([
        'success' => true,
        'data' => $correspondencia // Variable corregida
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
