<?php
require_once __DIR__ . '/../../../config/connection.php';


class CorrespondenciaModel
{
    private $db;

    public function __construct()
    {
        $this->db = Connection::conectar(); // Conexión a la BD
    }

    public function obtenerCorrespondencia()
    {
        // Consulta SQL
        $query = "SELECT PK_IDCorrespondenciaEntrada, Folio, TipoSolicitud, FechaCaptura, NombreRemitente, EstadoSolicitud  FROM Correspondencia_Entrada ORDER BY PK_IDCorrespondenciaEntrada DESC";
        $result = mysqli_query($this->db, $query);

        if (!$result) {
            throw new Exception("Error en la consulta: " . mysqli_error($this->db));
        }

        $correspondencias = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $correspondencias[] = $row;
        }
        return $correspondencias;
    }

    public function insertarCorrespondencia()
    {
        $estadoSolicitud = 'EN PROCESO';
        $turnoOP = 'N/A';

        // Verificar que se recibieron datos POST
        if (!isset($_POST['tipoSolicitud'])) {
            throw new Exception("No se recibieron datos suficientes para insertar la correspondencia.");
        }

        // Asignar datos recibidos por POST
        $tipoSolicitud = mysqli_real_escape_string($this->db, $_POST['tipoSolicitud']);
        $folio = mysqli_real_escape_string($this->db, $_POST['folio']);
        $oficio = mysqli_real_escape_string($this->db, $_POST['oficio']);
        $area = mysqli_real_escape_string($this->db, $_POST['area']);
        $fechaRecepcion = mysqli_real_escape_string($this->db, $_POST['fechaRecepcion']);
        $fechaDocumento = mysqli_real_escape_string($this->db, $_POST['fechaDocumento']);
        $funcionarioAsignado = mysqli_real_escape_string($this->db, $_POST['funcionarioAsignado']);
        $nombreRemitente = mysqli_real_escape_string($this->db, $_POST['nombreRemitente']);
        $cargoRemitente = mysqli_real_escape_string($this->db, $_POST['cargoRemitente']);
        $dependenciaRemitente = mysqli_real_escape_string($this->db, $_POST['dependenciaRemitente']);
        $categoria = mysqli_real_escape_string($this->db, $_POST['categoria']);
        $asunto = mysqli_real_escape_string($this->db, $_POST['asunto']);
        $tipoSuac = isset($_POST['tipoSuac']) && !empty($_POST['tipoSuac']) ? mysqli_real_escape_string($this->db, $_POST['tipoSuac']) : 'N/A';


        // Preparar consulta
        $query = "INSERT INTO Correspondencia_Entrada (
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
            EstadoSolicitud, 
            TipoSUAC, 
            Turno
        ) VALUES (
            '$tipoSolicitud',
            NOW(),
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
            '$estadoSolicitud',
            '$tipoSuac',
            '$turnoOP'
        )";

        $result = mysqli_query($this->db, $query);

        if (!$result) {
            throw new Exception("Error en la consulta: " . mysqli_error($this->db));
        }

        return true; // Indicar éxito
    }

    public function obtenerCorrespondenciaDetalle($IDSolicitud)
    {
        // Usar prepared statements para evitar SQL Injection
        $query = "SELECT * FROM Correspondencia_Entrada WHERE PK_IDCorrespondenciaEntrada = ?";
        $stmt = mysqli_prepare($this->db, $query);
        mysqli_stmt_bind_param($stmt, "i", $IDSolicitud);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        // Obtener y retornar los resultados
        return mysqli_fetch_assoc($result);
    }

    public function obtenerCorrespondenciaEstado($IDSolicitud)
    {
        // Usar prepared statements para evitar SQL Injection
        $query = "SELECT PK_IDCorrespondenciaEntrada, EstadoSolicitud, OficioAtencion FROM Correspondencia_Entrada WHERE PK_IDCorrespondenciaEntrada = ?";
        $stmt = mysqli_prepare($this->db, $query);
        mysqli_stmt_bind_param($stmt, "i", $IDSolicitud);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        // Obtener y retornar los resultados
        return mysqli_fetch_assoc($result);
    }

    public function actualizarEstadoSolicitudCompleto($idCorrespondencia, $estadoSolicitud, $desth_path)
    {
        // Usar prepared statements para evitar SQL Injection
        $query = "UPDATE Correspondencia_Entrada SET EstadoSolicitud = ? , OficioAtencion = ? WHERE PK_IDCorrespondenciaEntrada = ?";
        $stmt = mysqli_prepare($this->db, $query);
        if (!$stmt) {
            // Manejo de error, por ejemplo:
            return false;
        }

        // Asumiendo que estadoSolicitud y desth_path son strings y idCorrespondencia es entero
        mysqli_stmt_bind_param($stmt, "ssi", $estadoSolicitud, $desth_path, $idCorrespondencia);
        mysqli_stmt_execute($stmt);

        // Comprobar si se actualizó alguna fila
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function actualizarEstadoSolicitud($idCorrespondencia, $estadoSolicitud)
    {
       // Usar prepared statements para evitar SQL Injection
       $query = "UPDATE Correspondencia_Entrada SET EstadoSolicitud = ? WHERE PK_IDCorrespondenciaEntrada = ?";
       $stmt = mysqli_prepare($this->db, $query);
       if (!$stmt) {
           // Manejo de error, por ejemplo:
           return false;
       }

       // Asumiendo que estadoSolicitud y desth_path son strings y idCorrespondencia es entero
       mysqli_stmt_bind_param($stmt, "si", $estadoSolicitud, $idCorrespondencia);
       mysqli_stmt_execute($stmt);

       // Comprobar si se actualizó alguna fila
       if (mysqli_stmt_affected_rows($stmt) > 0) {
           return true;
       } else {
           return false;
       }
    }
}
