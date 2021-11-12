<section class=" d-flex flex-column justify-content-center align-items-center w-100 mt-2 ">


    <div class="border border-dark rounded bg-light w-50 p-2">

        <h5>Usuarios Activos</h5>
        <table class="table table-dark w-100">
            <thead>
            <th>idUsuario</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th> </th> 
            </thead>
            <tbody>
                <?php if ($usuarios != null) {
                    ?>
                    <?php foreach ($usuarios as $value) { ?>
                        <tr>
                            <td><a href="<?php echo $this->base_url("Usuario/detallesUsuario/" . $value["idUsuario"]) ?>"class="text-white"> <?php echo $value["idUsuario"] ?></a></td> 
                            <td><?php echo $value["nombre"] ?></td>  
                            <td><?php echo $value["rol"] ?></td> 
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