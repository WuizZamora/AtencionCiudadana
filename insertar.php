<?php
// Configuración de conexión (ajusta según tus credenciales)
$servername = "localhost";
$username = "root";
$password = "Lazp221819.";
$dbname = "ATENCION_CIUDADANA";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanitizar datos
    $tipoSolicitud = mysqli_real_escape_string($conexion, $_POST['tipoSolicitud']);
    $fechaCaptura = date("Y-m-d H:i:s", strtotime($_POST['fechaCaptura']));
    $folio = mysqli_real_escape_string($conexion, $_POST['Folio']);
    $oficio = mysqli_real_escape_string($conexion, $_POST['Oficio']);
    $area = mysqli_real_escape_string($conexion, $_POST['area']);
    $fechaRecepcion = date("Y-m-d H:i:s", strtotime($_POST['fechaRecepcion']));
    $fechaDocumento = mysqli_real_escape_string($conexion, $_POST['fechaDocumento']);
    $funcionarioAsignado = mysqli_real_escape_string($conexion, $_POST['funcionarioAsignado']);
    $nombreRemitente = mysqli_real_escape_string($conexion, $_POST['nombreRemitente']);
    $cargoRemitente = mysqli_real_escape_string($conexion, $_POST['cargoRemitente']);
    $dependenciaRemitente = mysqli_real_escape_string($conexion, $_POST['dependenciaRemitente']);
    $categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
    $asunto = mysqli_real_escape_string($conexion, $_POST['asunto']);

    // Estado por defecto
    $estadoSolicitud = 'EN PROCESO';

    // Preparar consulta
    $sql = "INSERT INTO Correspondencia_Entrada (
        TipoSolicitud, 
        FechaCaptura, 
        Folio, 
        Oficio, 
        Area, 
        FechaRecepcion, 
        FechaDocumento, 
        FuncionarioAsignado, 
        NombreRemitente, 
        CargoRemitente, 
        DependenciaRemitente, 
        Categoria, 
        Asunto, 
        EstadoSolicitud
    ) VALUES (
        '$tipoSolicitud',
        '$fechaCaptura',
        '$folio',
        '$oficio',
        '$area',
        '$fechaRecepcion',
        '$fechaDocumento',
        '$funcionarioAsignado',
        '$nombreRemitente',
        '$cargoRemitente',
        '$dependenciaRemitente',
        '$categoria',
        '$asunto',
        '$estadoSolicitud'
    )";

    // Ejecutar consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    $conexion->close();
}
