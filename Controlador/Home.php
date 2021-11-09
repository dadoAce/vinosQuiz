<?php

class Home extends App {

    function __construct() {
        
    }

    public function index() {
        
       $this->inicio();
    }

    public function inicio() {/* Vista */
        
        require_once 'Modelo/UsuarioModel.php';
        /* Crear Objeto */
        $usuarioM = new UsuarioModel();

        /* Crear variables */ 
        $datos["usuarios"]  = $usuarioM->selectAll();
        
        $datos["contenido"] = "Views/principal/usuarios.php"; 
        $this->vista("principal/inicio",$datos) ;
    }

    public function Bienvenido() {/* Vista */
        include_once "Views/principal/template_Admin.php";
    }

}
