<?php

include_once("Models/modeloAsignacionesItems.php");
include_once("Connection.php");

class controladorAsignacionesItems{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user-data'])) {
            header('Location: ' . URL . '?controlador=Login&accion=Login');
        }
    }

    public function AsignarItem(){
        $data['list-empleados']= modeloAsignaciones::selectDataEmpleado();

        $data['list-items']= modeloAsignaciones::selectDataItem();

        if ($_POST) {

            $MARCA_ITEM=$_POST['MARCA_ITEM'];
            $MODELO_ITEM=$_POST['MODELO_ITEM'];
            $TIPO_ITEM=$_POST['TIPO_ITEM'];
            $CANTIDAD_ITEM=$_POST['CANTIDAD_ITEM'];
            $CANTIDAD_DISPONIBLE_ITEM=$_POST['CANTIDAD_DISPONIBLE_ITEM'];
            $IMAGEN_ITEM=$_POST['IMAGEN_ITEM'];
            $ESTADO = "ACTIVO";
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('America/Bogota'));
            $CREATED_AT = $time->format("Y-m-d h:i:s");
            $UPDATED_AT = $time->format("Y-m-d h:i:s");

            modeloAsignaciones::setAsigItem($MARCA_ITEM,$MODELO_ITEM,$TIPO_ITEM,$CANTIDAD_ITEM,$CANTIDAD_DISPONIBLE_ITEM,$IMAGEN_ITEM,$ESTADO,$CREATED_AT,$UPDATED_AT);

        }
        include_once("Views/Items/AsignarItem.php");
    }

    public function HistorialAsiItems(){
        $asignacionesItems=modeloAsignacionesItems::selectAsigI();
        include_once("Views/Items/HistorialAsignacionesI.php");
    }

    public function BorrarAsignacion(){

            $ID_PRESTAMO= $_POST['ID_PRESTAMO'];

            $modeloAsignaciones=modeloAsignaciones::deleteAsignacion($ID_PRESTAMO);

            // header("Location:./?controlador=Asignaciones&accion=HistorialAsignaciones");
    }

}