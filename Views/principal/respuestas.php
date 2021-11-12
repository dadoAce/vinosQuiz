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
            <div class="d-flex flex-column justify-content-center align-items-center w-100 bg-primary text-white" style="height: 200px;">

                <h5>Respuestas</h5>
            </div>
            <section class=" d-flex flex-column justify-content-center align-items-center w-100 mt-2 p-4">


                <table class="table table-light table-hover table- w-100  table-striped border border-dark ">
                    <thead class="thead-dark">
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
                                        <a data-idRespuesta="<?= $value["idRegistro"] ?>" class="btn btn-primary btn-detalles text-white"> Detalles</a>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        <?php } else {
                        ?>

                        <?php } ?>
                    </tbody>
                </table>


            </section>
        </div>

    </main>

</body>
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title">Respuestas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="cargando">

                <div class="d-flex flex-column justify-content-center align-items-center w-100  " style="height: 200px;">
                    Cargando...
                </div>
            </div>
            <div class="modal-body" style="display: none;">
                <div class="col-12 mt-3">
                    <h6>Id</h6>
                    <input id="r_id" type="text" class="form-control" disabled>
                </div>
                <div class="col-12 mt-3">
                    <h6>Origen</h6>
                    <input id="r_origen" type="text" class="form-control" disabled>
                </div>
                <div class="col-12 mt-3">
                    <h6>Fecha</h6>
                    <input id="r_fecha" type="text" class="form-control" disabled>
                </div>
                <div class="col-12 mt-3">
                    <h6>Respuestas</h6>
                    <div id="r_respuestas">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</html>

<?php include_once 'Views/complementos/referencias/referencias_footer.php'; ?>;

<script>
    const detallesRespuesta = () => {
        const btnDetalles = $(".btn-detalles");
        btnDetalles.on("click", function() {
            $("#cargando").show("slow");
            $(".modal-body").hide("slow");
            $(".modal").modal("show");
            var id = $(this).attr("data-idRespuesta");
            console.log(id)
            $.ajax({
                url: '../Quiz/detallesRespuesta/',
                data: {
                    idRespuesta: id
                },
                type: 'GET',
                success: function(response) {
                    console.log("Bien");
                    response = JSON.parse(response)
                    console.log(response)
                    console.log(response.idRegistro)
                    if (response != "vacio") {

                        var contenido = "";

                        $.each(JSON.parse(response.respuestas), function(key, value) {
                            contenido += "<strong>" + value + "</strong><br>";
                        });


                        $("#r_id").val(response.idRegistro);
                        $("#r_respuestas").html(contenido);
                        $("#r_origen").val(response.usuario);
                        $("#r_fecha").val(response.fecha);
                    }
                    $("#cargando").hide("slow");
                    $(".modal-body").show("slow");
                },
                error: function(error) {
                    console.log("Error");
                    console.log(error);
                }
            });
        });
    }
    $(function() {
        detallesRespuesta()
    });

    ;
</script>