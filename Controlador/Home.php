<?php

class Home extends App {

    function __construct() {
        
    }

    public function index() {
        header('Access-Control-Allow-Origin: https://vinosdado.myshopify.com/');
        header('Access-Control-Allow-Methods: GET'); 
        $arreglo = []; 
        $arreglo["inicio"][0]="busqueda";
        $arreglo["inicio"][1]="xx";
        $arreglo["inicio"][2]="zz";

        echo json_encode($arreglo) ;
        //$this->inicio();
    }

    public function inicio() {/* Vista */
        $this->vista("principal/inicio") ;
    }

    public function Bienvenido() {/* Vista */
        include_once "Views/principal/template_Admin.php";
    }

}
