<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <?php
        $IDSolicitud = $_GET['IDSolicitud'];
        echo $IDSolicitud;
        ?>


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
        </form>

        <h3>SEGUIMIENTO</h3>
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-danger">
                <tr>
                    <th>DATO 1</th>
                    <th>DATO 2</th>
                    <th>DATO 3</th>
                    <th>DATO 4</th>
                    <th>DATO 5</th>
                    <th>Acciónes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum dolorum nostrum nulla ipsum iure, ea repellat explicabo distinctio, quasi commodi molestiae laboriosam magnam recusandae impedit eum dignissimos doloremque optio reprehenderit!</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quibusdam fugit. Iusto corrupti reprehenderit delectus unde aliquid harum soluta sit. Eveniet libero laboriosam magni numquam culpa facilis harum, tempore corporis!</td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis ab, ipsum laudantium illo, doloribus, odio perferendis quisquam possimus accusamus ad aspernatur cum porro dolorem! Rerum esse aut placeat aliquid quasi.</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores nobis at explicabo odit, ratione voluptas nulla eos sapiente error, eius harum optio exercitationem, quibusdam quod repellendus cumque assumenda blanditiis autem!</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores nobis at explicabo odit, ratione voluptas nulla eos sapiente error, eius harum optio exercitationem, quibusdam quod repellendus cumque assumenda blanditiis autem!</td>
                    <td>
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>