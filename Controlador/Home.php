<?php

class Home extends App
{

    function __construct()
    {
    }

    public function index()
    {

        $this->inicio();
    }

    public function inicio()
    {/* Vista */

        require_once 'Modelo/UsuarioModel.php';
        /* Crear Objeto */
        $usuarioM = new UsuarioModel();

        /* Crear variables */
        $datos["usuarios"]  = $usuarioM->selectAll();

        $datos["contenido"] = "Views/principal/usuarios.php";
        $this->vista("principal/inicio", $datos);
    }
    public function quiz()
    {/* Vista */

        require_once 'Modelo/UsuarioModel.php';

        $this->vista("quiz/index");
    }
    public function Bienvenido()
    {/* Vista */
        include_once "Views/principal/template_Admin.php";
    }
    public function Respuestas()
    {
        require_once 'Modelo/RespuestaModel.php';
        $RespuestaM = new RespuestaModel();
        $datos["respuestas"] = $RespuestaM->selectAll();
        /* Vista */
        $this->vista("principal/respuestas", $datos);
    }

    public function tickets(){
        echo "9999";
    }

    public function tabla(){
        echo "<>";
    }
}
