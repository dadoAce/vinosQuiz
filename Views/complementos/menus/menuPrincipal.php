<div id="menu-lateral-1" class="menu-lateral-content text-white text-center h-100 float-left">
    <div class="h-100 text-white d-flex flex-column justify-content-star align-items-center  ">
        <div class="menu-lateral-header w-100">
            <div class="d-flex justify-content-end cerrar-menu  pr-3">x</div>
            <div class="py-3  d-flex flex-column flex-md-row  align-items-center justify-content-center">
                <img width="30" src="<?php echo $this->base_url("/Assets/imgs/sistema/LogoDado200p.png") ?>" class="rounded-circle bg-white">
                <div class="menu-site-title px-1">Admin</div>
            </div>
        </div>
        <div class="ml-1-adorno-1"></div>
        <!-- INICIO:SECCION -->
        <div class="menu-seccion text-left pl-4">
            <a href="<?php echo $this->base_url() ?>" class="seccion-titulo">

                PRINCIPAL
            </a>
            <div class="menu-seccion-item text-left pl-2">
                Inicio
            </div>
        </div>
        <!-- FIN: SECCION -->
        <!-- INICIO:SECCION -->
        <div class="menu-seccion text-left pl-4">
            <a class="seccion-titulo">
                Cuestionarios
            </a>
            <div class="menu-seccion-item text-left pl-2">
                <a href="<?php echo $this->base_url() ?>/Quiz">Quiz</a>
            </div>
            <div class="menu-seccion-item text-left pl-2">
                <a href="<?php echo $this->base_url() ?>/Home/Respuestas">Respuestas</a>
            </div>
        </div>
        <!-- FIN: SECCION -->
    </div>
</div>