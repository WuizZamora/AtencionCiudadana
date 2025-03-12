<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORRESPONDENCIA | AC</title>
    <?php
    include './src/Views/Partials/head.php';
    ?>
</head>

<body>
    <div class="container text-center">
        <?php
            include './src/Controllers/CorrespondenciaController.php';
            // Controladores
            $Correspondencia = new CorrespondenciaController();
            $Correspondencia->index();
        ?>

        <h2 class="mb-4">Correspondencia Entrante</h2>
        <table id="tablaCorrespondencia" class="table table-striped table-hover table-bordered">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>Folio</th>
                    <th>Tipo de Solicitud</th>
                    <th>Fecha de Captura</th>
                    <th>Nombre del Remitente</th>
                    <th>Estado de la Solicitud</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tbodyCorrespondencia">
                <!-- Los datos se cargarán aquí -->
            </tbody>
        </table>
        <!-- Agrega esta parte de paginación -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center" id="pagination"></ul>
        </nav>


     
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
</body>

</html>