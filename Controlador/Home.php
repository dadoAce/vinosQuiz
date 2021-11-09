<?php

class Home extends App {

    function __construct() {
        
    }

    public function index() {


        return 
        $this->vista("principal/inicio") ;
        //$this->inicio();
    }

    public function inicio() {/* Vista */
        $this->vista("principal/inicio") ;
    }

    public function Bienvenido() {/* Vista */
        include_once "Views/principal/template_Admin.php";
    }

}
