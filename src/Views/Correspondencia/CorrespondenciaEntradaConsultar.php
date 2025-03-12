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