<?php

class controladorLoad{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user-data'])) {
            header('Location: ' . URL . '?controlador=Login&accion=Login');
        }
    }

    public function Menu(){
        include_once("Views/Menu/Menu.php");
    }

    // public function Computador(){
    //     include_once('Views/Computador/RegistroComputador.php');
    // }
}
