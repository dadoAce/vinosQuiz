<?php

class Ticket extends App
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
 
        $this->vista("ticket/prueba",);
    } 
}
