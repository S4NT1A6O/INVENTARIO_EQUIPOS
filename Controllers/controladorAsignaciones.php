<?php

include_once("Models/modeloAsignaciones.php");
include_once("Connection.php");

class controladorAsignaciones{

    public function AsignarComputador(){

        $data['list-empleados']= modeloAsignaciones::selectDataEmpleado();

        $data['list-computadores']= modeloAsignaciones::selectDataComputador();

        if ($_POST) {

            $ID_EMPLEADO_FK=$_POST['ID_EMPLEADO_FK'];
            $ID_PC_FK=$_POST['ID_PC_FK'];
            $FECHA_INICIO_PRESTAMO=$_POST['FECHA_INICIO_PRESTAMO'];
            $FECHA_FIN_PRESTAMO=$_POST['FECHA_FIN_PRESTAMO'];
            $ESTADO = "ACTIVO";
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('America/Bogota'));
            $CREATED_AT = $time->format("Y-m-d h:i:s");
            $UPDATED_AT = $time->format("Y-m-d h:i:s");

            modeloAsignaciones::setAsignacion($ID_EMPLEADO_FK,$ID_PC_FK,$FECHA_INICIO_PRESTAMO,$FECHA_FIN_PRESTAMO,$ESTADO,$CREATED_AT,$UPDATED_AT);

            modeloAsignaciones::updateStateComputador($ID_PC_FK);

            header("Location:./?controlador=Asignaciones&accion=HistorialAsignaciones");
        }
        include_once("Views/Computador/AsignarComputador.php");
    }

    public function HistorialAsignaciones(){
        $asignaciones= modeloAsignaciones::selectAsignaciones();
        include_once("Views/Computador/HistorialAsignaciones.php");
    }

    public function BorrarAsignacion(){

            $ID_PRESTAMO= $_POST['ID_PRESTAMO'];

            $modeloAsignaciones=modeloAsignaciones::deleteAsignacion($ID_PRESTAMO);

            // header("Location:./?controlador=Asignaciones&accion=HistorialAsignaciones");
    }

}

?>