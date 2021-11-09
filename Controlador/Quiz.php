<?php

class Quiz extends App {

    function __construct() {
        
    }

    public function index() {
        
       $this->quiz();
    }
 
    public function quiz() {/* Vista */
        
        require_once 'Modelo/UsuarioModel.php';
        
        $this->vista("quiz/index") ;
    }
    public function Bienvenido() {/* Vista */
        include_once "Views/principal/template_Admin.php";
    }

}
