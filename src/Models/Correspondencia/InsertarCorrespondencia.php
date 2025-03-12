<?php
require_once __DIR__ . '/CorrespondenciaModel.php';
header('Content-Type: application/json'); // Responder en formato JSON

$CorrespondenciaModel = new CorrespondenciaModel();

// Verifica si se recibieron datos por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        // Llamar a insertarCorrespondencia() solo una vez y capturar su resultado
        $resultado = $CorrespondenciaModel->insertarCorrespondencia();

        if ($resultado) { // Asumiendo que insertarCorrespondencia() devuelve true o algo en caso de éxito
            echo json_encode([
                'status' => 'success',
                'message' => 'Datos recibidos y procesados correctamente',
                'data' => $_POST // Puedes incluir los datos recibidos si es necesario
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Error al insertar la correspondencia'
            ]);
        }
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Ocurrió un error: ' . $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Método no permitido'
    ]);
}
?>