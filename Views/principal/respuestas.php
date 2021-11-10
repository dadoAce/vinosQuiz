<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <?php include_once 'Views/complementos/referencias/referencias.php'; ?>
</head>

<body class=" ">
    <main class="main-principal h-100 d-flex">

        <?php $this->vista("complementos/menus/menuPrincipal"); ?>
        <div id="contenedor">

            <h1 class="text-center">Quiz</h1>
            <section class=" d-flex flex-column justify-content-center align-items-center w-100 mt-2 ">


                <div class="border border-dark rounded bg-light w-50 p-2">

                    <h5>Respuestas</h5>
                    <table class="table table-light w-100">
                        <thead>
                            <th>#</th>
                            <th>Origen</th>
                            <th>Respuesta</th>
                            <th>Fecha</th>
                            <th> </th>
                        </thead>
                        <tbody>
                            <?php if ($respuestas != null) {
                            ?>
                                <?php foreach ($respuestas as $value) { ?>
                                    <tr>
                                        <td> <?php echo $value["idRegistro"] ?></td>
                                        <td><?php echo $value["usuario"] ?></td>
                                        <td><?php echo $value["respuestas"] ?></td>
                                        <td><?php echo $value["fecha"] ?></td>
                                        <td>
                                            <a href=" " class="btn btn-danger">Eliminar</a>
                                            <a href=" " class="btn btn-primary"> Detalles</a>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            <?php } else {
                            ?>


                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </section>
        </div>

    </main>

</body>

</html>

<?php include_once 'Views/complementos/referencias/referencias_footer.php'; ?>;