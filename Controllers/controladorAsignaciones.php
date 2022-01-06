<?php

include_once("Models/modeloAsignaciones.php");
include_once("Connection.php");

class controladorAsignaciones{

    public function AsignarComputador(){

        $data['list-empleados']= modeloAsignaciones::selectDataEmpleado();

        $data['list-computadores']= modeloAsignaciones::selectDataComputador();

        if ($_POST) {

            print_r($_POST);
            $ID_EMPLEADO_FK=$_POST['ID_EMPLEADO_FK'];
            $ID_PC_FK=$_POST['ID_PC_FK'];
            $FECHA_INICIO_PRESTAMO=$_POST['FECHA_INICIO_PRESTAMO'];
            $FECHA_FIN_PRESTAMO=$_POST['FECHA_FIN_PRESTAMO'];
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('America/Bogota'));
            $CREATED_AT = $time->format("Y-m-d h:i:s");
            $UPDATED_AT = $time->format("Y-m-d h:i:s");

            modeloAsignaciones::setAsignacion($ID_EMPLEADO_FK,$ID_PC_FK,$FECHA_INICIO_PRESTAMO,$FECHA_FIN_PRESTAMO,$CREATED_AT,$UPDATED_AT);
        }
        include_once("Views/Computador/AsignarComputador.php");
    }

    public function HistorialAsignaciones(){
        include_once("Views/Computador/HistorialAsignaciones.php");
    }

}

?>