<?php

class Quiz extends App
{

    function __construct()
    {
    }

    public function index()
    {

        $this->quiz();
    }
    public function quiz_api()
    {/* Vista */


        $this->vista("quiz/quiz");
    }
    public function quiz()
    {/* Vista */


        $this->vista("quiz/index");
    }
    public function Bienvenido()
    {/* Vista */
        include_once "Views/principal/template_Admin.php";
    }
    public function GuardarResultados()
    {
        require_once 'Modelo/RespuestaModel.php';
        $RespuestaM = new RespuestaModel();
        $datos["respuestas"] = $_POST["Resultados"];
        $datos["usuario"] = $_POST["usuario"];
        $result = $RespuestaM->save($datos);
        echo  json_encode($result);
    }
}
