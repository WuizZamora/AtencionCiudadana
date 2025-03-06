<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php

    $IDSolicitud = $_GET['IDSolicitud'];

    // echo "ID: " . $IDSolicitud;

    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "Lazp221819.";
    $basedatos = "ATENCION_CIUDADANA";

    // Crear conexión
    $conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // echo "Conexión exitosa con MySQLi";

    // Consulta SQL
    $sql = "SELECT * FROM Correspondencia_Entrada WHERE PK_IDCorrespondenciaEntrada = $IDSolicitud";
    $result = $conexion->query($sql);
    ?>
    <div class="container text-center">
        <h3 class="text-center">CORRESPONDENCIA ENTRADA DETALLE</h3>
        <hr>

        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="card mb-3">
                    <div class="card-header text-bg-dark">
                        TIPO DE SOLICITUD: <?php echo $row['TipoSolicitud']; ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <strong>Folio: </strong> <br> <?php echo $row['Folio']; ?>
                            </div>
                            <div class="col-md-3 mb-3">
                                <strong>Fecha de Captura: </strong> <br> <?php echo $row['FechaCaptura']; ?>
                            </div>
                            <div class="col-md-3 mb-3">
                                <strong>Oficio: </strong> <br> <?php echo $row['Oficio']; ?>
                            </div>
                            <div class="col-md-3 mb-3">
                                <strong>Área: </strong> <br> <?php echo $row['Area']; ?>
                            </div>
                            <div class="col-md-3 mb-3">
                                <strong>Fecha de Recepción: </strong> <br> <?php echo $row['FechaRecepcion']; ?>
                            </div>
                            <div class="col-md-3 mb-3">
                                <strong>Fecha del Documento: </strong> <br> <?php echo $row['FechaDocumento']; ?>
                            </div>
                            <div class="col-md-3 mb-3">
                                <strong>Funcionario designado: </strong> <br> <?php echo $row['FuncionarioAsignado']; ?>
                            </div>
                            <div class="col-md-3 mb-3">
                                <strong>Turno OP: </strong> <br> <?php echo $row['Turno']; ?>
                            </div>
                            <hr>
                            <h5 class="text-center">REMITENTE</h5>
                            <div class="col-md-4 mb-3">
                                <strong>Nombre: </strong> <br> <?php echo $row['NombreRemitente']; ?>
                            </div>
                            <div class="col-md-4 mb-3">
                                <strong>Cargo: </strong> <br> <?php echo $row['CargoRemitente']; ?>
                            </div>
                            <div class="col-md-4 mb-3">
                                <strong>Dependencia: </strong> <br> <?php echo $row['DependenciaRemitente']; ?>
                            </div>
                            <hr>
                            <div class="col-md-3 mb-3">
                                <strong>Categoria: </strong> <br> <?php echo $row['Categoria']; ?>
                            </div>
                            <div class="col-md-9 mb-3">
                                <strong>Asunto: </strong> <br> <?php echo $row['Asunto']; ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <strong>Estado: </strong> <br> <?php echo $row['EstadoSolicitud']; ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <strong>Oficio: </strong> <br> <?php echo $row['OficioAtencion']; ?>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="alert alert-warning">No se encontraron registros</div>
        <?php endif; ?>
        <h3>SEGUMIENTO</h3>
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
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

    <?php $conexion->close(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>