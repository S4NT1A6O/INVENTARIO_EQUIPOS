<?php

include_once("Models/modeloMantenimiento.php");
include_once("Connection.php");

class controladorMantenimiento{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user-data'])) {
            header('Location: ' . URL . '?controlador=Login&accion=Login');
        }
    }

    public function HistorialMantenimiento(){

        $historialMantenimientos=modeloMantenimiento::selectHistorialMantenimientos();
        include_once("Views/Mantenimientos/HistorialMantenimientos.php");
    }

    public function Mantenimientos(){
        $mantenimientos= modeloMantenimiento::selectMantenimientos();
        include_once("Views/Mantenimientos/Mantenimientos.php");
    }

    public function setMantenimiento(){

        $data['list-computadores']= modeloMantenimiento::selectDataComputador();

        include_once("Views/Mantenimientos/RegistroMantenimiento.php");

        if ($_POST) {

            $ID_PC_FK = $_POST['ID_PC_FK'];
            $DESCRIPCION_MANTENIMIENTO = $_POST['DESCRIPCION_MANTENIMIENTO'];
            $ESTADO_MANTENIMIENTO = $_POST['ESTADO_MANTENIMIENTO']; 
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('America/Bogota'));
            $CREATED_AT = $time->format("Y-m-d h:i:s");
            $UPDATED_AT = $time->format("Y-m-d h:i:s");

            header("Location:./?controlador=Mantenimiento&accion=Mantenimientos");
        }
    }

    public function closeMaintenance(){

        $ID_EMPRESA=$_POST['ID_EMPRESA'];

        $modeloEmpresas=modeloMantenimiento::closeMaintenance($ID_EMPRESA);

    }

}

?>