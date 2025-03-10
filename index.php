<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORRESPONDENCIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container text-center bg-dark text-white">
        <h3 class="tex-center">
            CORRESPONDENCIA DE ENTRADA (AÑO)
        </h3>
        <hr>
        <form action="insertar.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label" for="tipoSolicitud">Tipo de solicitud</label>
                    <select class="form-select text-center" id="tipoSolicitud" name="tipoSolicitud" required>
                        <option selected disabled value="">Elige una opción</option>
                        <option value="Oficialia_Partes">Oficialia de partes</option>
                        <option value="Formato">Formato</option>
                        <option value="Correo_Electrónico">Correo Electronico</option>
                        <option value="SUAC">SUAC</option>
                        <option value="Interno">Interno</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3" id="CampoTipoSuac" style="display: none;">
                    <label for="tipoSuac" class="form-label">Tipo de SUAC</label>
                    <select class="form-select text-center" id="tipoSuac" name="tipoSuac">
                        <option selected disabled value="">Elige una opción</option>
                        <option value="Normal">Normal</option>
                        <option value="CxC">Casa por casa</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="fechaCaptura" class="form-label">Fecha de captura</label>
                    <input class="form-control text-center" type="datetime-local" id="fechaCaptura" name="fechaCaptura" maxlength="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="Folio" class="form-label text-success">Folio</label>
                    <input class="form-control text-center" type="text" id="Folio" name="Folio" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="Oficio" class="form-label">Oficio</label>
                    <input class="form-control" type="text" id="Oficio" name="Oficio" maxlength="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label" for="area">Área</label>
                    <!-- Select para Interno (INT) -->
                    <select class="form-select text-center" id="areaSelect" name="area" style="display: none;">
                        <option disabled value="">Elige una opción</option>
                        <option value="DG">DIRECCIÓN GENERAL</option>
                        <option value="DESC">DIRECCIÓN EJECUTIVA DE SUBSTANCIACIÓN Y CALIFICACIÓN</option>
                        <option value="DEVT">DIRECCIÓN EJECUTIVA DE VERIFICACIÓN AL TRANSPORTE</option>
                        <option value="DEAJSL">DIRECCIÓN EJECUTIVA DE ASUNTOS JURIDICOS Y SERVICIOS LEGALES</option>
                        <option value="DAF">DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS</option>
                        <option value="DEVA">DIRECCIÓN EJECUTIVA DE VERIFICACIÓN ADMINISTRATIVA</option>
                    </select>
                    <!-- Input para otros tipos -->
                    <input type="text" class="form-control" id="areaInput" name="area" style="display: none;">
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label" for="fechaRecepcion">Fecha de recepción</label>
                    <input type="date" class="form-control text-center" name="fechaRecepcion" id="fechaRecepcion" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label" for="fechaDocumento">Fecha del documento</label>
                    <input type="date" class="form-control text-center" name="fechaDocumento" id="fechaDocumento" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="funcionarioAsignado" class="form-label">Funcionario designado</label>
                    <select class="form-select text-center" id="funcionarioAsignado" name="funcionarioAsignado" required>
                        <option selected disabled value="">Elige una opción</option>
                        <option value="OPCIÓN 1">OPCIÓN 1</option>
                        <option value="OPCIÓN 2">OPCIÓN 2</option>
                        <option value="OPCIÓN 3">OPCIÓN 3</option>
                    </select>
                </div>

                <!-- <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Archivo en expediente y/o carpeta</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div> -->
                <!-- <div class="col-md-3 mb-3">
                    <label class="form-label" for="">Clasificación</label>
                    <select class="form-select text-center" id="" name="" required>
                        <option selected disabled value="">Elige una opción</option>
                        <option value="">Externo</option>
                        <option value="">Interno</option>
                    </select>
                </div> -->
                <!-- <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Turno</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div> -->

                <!-- <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Dirigido a</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div> -->

                <h5 class="text-center">REMITENTE</h5>
                <hr>
                <div class="col-md-4 mb-3">
                    <label for="nombreRemitente" class="form-label">Nombre completo</label>
                    <input class="form-control" type="text" id="nombreRemitente" name="nombreRemitente" maxlength="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="cargoRemitente" class="form-label">Cargo del remitente</label>
                    <input class="form-control" type="text" id="cargoRemitente" name="cargoRemitente" maxlength="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="dependenciaRemitente" class="form-label">Dependencia </label>
                    <input class="form-control" type="text" id="dependenciaRemitente" name="dependenciaRemitente" maxlength="" required>
                </div>
                <hr>
                <div class="col-md-4 mb-3">
                    <label for="categoria" class="form-label">Categoria (ANTES TEMA)</label>
                    <input class="form-control" type="text" id="categoria" name="categoria" maxlength="" required>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="asunto" class="form-label">Asunto</label>
                    <textarea class="form-control" name="asunto" id="asunto" rows="8" maxlength="400" required> </textarea>
                </div>
                <!-- <div class="col-md-3 mb-3">
                    <label for="" class="form-label text-danger">Fecha del evento</label>
                    <input class="form-control" type="date" id="" name="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label text-danger">Lugar del evento</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Referente al caso</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div> -->
            </div>
            <div class="col-12">
                <button class="btn btn-warning" type="submit">Guardar</button>
            </div>
        </form>

        <?php
        require 'config/connection.php';
        $conexion = Connection::conectar(); // Obtiene la conexión MySQLi

        // Consulta SQL
        $sql = "SELECT PK_IDCorrespondenciaEntrada, Folio, TipoSolicitud, FechaCaptura, NombreRemitente, EstadoSolicitud  FROM Correspondencia_Entrada ORDER BY PK_IDCorrespondenciaEntrada DESC";
        $result = $conexion->query($sql);
        ?>

        <div class="container mt-4">
            <h2 class="mb-4">Correspondencia Entrante</h2>

            <div class="container">
                <table class="table table-striped table-hover table-bordered ">
                    <thead class="table-primary">
                        <tr>
                            <th>Folio</th>
                            <!-- <th>ID</th> -->
                            <th>Tipo de solicitud</th>
                            <th>Captura</th>
                            <th>Remitente</th>
                            <th>Estado</th>
                            <th>Acciónes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($fila = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $fila["Folio"] . '</td>';
                                // echo '<td>' . $fila["PK_IDCorrespondenciaEntrada"] . '</td>';
                                echo '<td>' . $fila["TipoSolicitud"] . '</td>';
                                echo '<td>' . ($fila["FechaCaptura"] ? date('d/m/Y H:i:s', strtotime($fila["FechaCaptura"])) : '') . '</td>';
                                echo '<td>' . $fila["NombreRemitente"] . '</td>';
                                echo '<td><span class="badge text-' . getEstadoBadge($fila["EstadoSolicitud"]) . '">' . $fila["EstadoSolicitud"] . '</span></td>';
                                echo '<td><a href="/AtencionCiudadana/verSolicitud.php?IDSolicitud=' . $fila["PK_IDCorrespondenciaEntrada"] . '" target="_blank" class="btn btn-success">Ver</a></td>';

                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="19" class="text-center">No se encontraron registros</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
        // Función para colores de los estados
        function getEstadoBadge($estado)
        {
            switch ($estado) {
                case 'ATENDIDO':
                    return 'success';
                case 'EN PROCESO':
                    return 'warning';
                case 'CANCELADO':
                    return 'danger';
                default:
                    return 'success';
            }
        }

        // Liberar memoria y cerrar conexión
        $result->free();
        $conexion->close();
        ?>

        <!-- SEGUIMIENTO -->
        <!-- <h5 class="text-center">
            SEGUIMIENTO / ESTATUS
        </h5>
        <hr>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="" class="form-label">Estatus de la solicitud</label>
                <select class="form-select text-center" id="" name="" required>
                    <option selected disabled value="">Elige una opción</option>
                    <option value="">Atendido</option>
                    <option value="">En proceso</option>
                    <option value="">Cancelado</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="" class="form-label">Oficio de atención</label>
                <input class="form-control" type="text" id="" name="" maxlength="" required>
            </div>
        </div>
        <hr> -->
        <!--
        <h3 class="text-center">
            CORRESPONDENCIA DE SALIDA (AÑO)
        </h3>
        <hr>
        <form action="#" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Fecha de emisión</label>
                    <input class="form-control" type="datetime-local" id="" name="" maxlength="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Clasificación</label>
                    <select class="form-select text-center" id="" name="" required>
                        <option selected disabled value="">Elige una opción</option>
                        <option value="">Ciudadanos</option>
                        <option value="">Interno</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Dirigido a</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Área</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Expediente</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Asunto</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <h5 class="text-center">
                    Dirección
                </h5>
                <hr>
                <div class="col-md-4 mb-3">
                    <label for="" class="form-label"> Calle y número</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="" class="form-label">Colonia</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="" class="form-label">Alcaldia</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <hr>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Elaboró</label>
                    <select class="form-select text-center" id="" name="" required>
                        <option selected disabled value="">Elige una opción</option>
                        <option value="">OPCIÓN 1</option>
                        <option value="">OPCIÓN 2</option>
                        <option value="">OPCIÓN 3</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Fecha del acuse</label>
                    <input class="form-control" type="date" id="" name="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Medio</label>
                    <input class="form-control" type="text" id="" name="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Folio de respuesta a solicitud</label>
                    <input class="form-control" type="text" id="" name="" required>
                </div>
            </div>
        </form>

        <h3 class="text-center">
            CONTROL DE CORRESPONDENCIA (AÑO)
        </h3>
        <hr>
        <form action="#" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">MODALIDAD / OFICIO</label>
                    <input class="form-control" type="text" id="" name="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">CARGO / DEPENDENCIA</label>
                    <input class="form-control" type="text" id="" name="" required>
                </div>

                <h5 class="text-center">REMITENTE</h5>
                <hr>

                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Nombre completo </label>
                    <input class="form-control" type="text" id="" name="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input class="form-control" type="mail" id="" name="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Teléfono</label>
                    <input class="form-control" type="tel" id="" name="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Asunto</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <h5 class="text-center">
                    Dirección
                </h5>
                <hr>
                <div class="col-md-4 mb-3">
                    <label for="" class="form-label"> Calle y número</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="" class="form-label">Colonia</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="" class="form-label">Alcaldia</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <hr>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Personal para zonificación</label>
                    <select class="form-select text-center" id="" name="" required>
                        <option selected disabled value="">Elige una opción</option>
                        <option value="">OPCIÓN 1</option>
                        <option value="">OPCIÓN 2</option>
                        <option value="">OPCIÓN 3</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Personal para atención</label>
                    <select class="form-select text-center" id="" name="" required>
                        <option selected disabled value="">Elige una opción</option>
                        <option value="">OPCIÓN 1</option>
                        <option value="">OPCIÓN 2</option>
                        <option value="">OPCIÓN 3</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="" class="form-label">Observaciones</label>
                    <textarea class="form-control" name="" id="" rows="8" maxlength="400" required> </textarea>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="" class="form-label">Respuesta</label>
                    <select class="form-select text-center" id="" name="" required>
                        <option selected disabled value="">Elige una opción</option>
                        <option value="">DEFINITIVA</option>
                        <option value="">PARCIAL</option>
                    </select>
                </div>
            </div>
        </form>

        <h3 class="text-center">SEGUIMIENTO CORRESPONDENCIA</h3>
        <hr>
        <form action="#" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label" for="">Fecha de seguimiento</label>
                    <input type="datetime-local" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label" for="">Oficio de canalización</label>
                    <input type="text" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label" for="">Dirigido a</label>
                    <input type="text" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label" for="">Respuesta de canalización</label>
                    <input type="text" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label text-danger" for="">Informe previo</label>
                    <input type="text" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label text-danger" for="">Respuesta final al peticionario</label>
                    <input type="text" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label" for="">Pendiente con autoridad</label>
                    <input type="text" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label" for="">Medio de notificacion</label>
                    <input type="text" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label text-danger" for="">Fecha de notificación</label>
                    <input type="datetime-local" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label" for="">SAC</label>
                    <input type="text" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label" for="">Medio de conocomiento DG</label>
                    <input type="text" class="form-control text-center" name="" id="" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label" for="">Fecha de conocomiento DG</label>
                    <input type="datetime-local" class="form-control text-center" name="" id="" required>
                </div>

            </div>
        </form> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>