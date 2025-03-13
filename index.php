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
    </div>
</body>

</html>