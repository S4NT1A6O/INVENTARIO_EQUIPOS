<?php

include_once("Models/modeloComputador.php");
include_once("Connection.php");

class controladorComputador{

    public function RegistroComputador(){

        if ($_POST) {
            print_r($_POST);

            $MARCA_PC = $_POST['MARCA_PC'];
            $MODELO_PC = $_POST['MODELO_PC'];
            $SERIAL_PC = $_POST['SERIAL_PC'];
            $PROCESADOR_PC = $_POST['PROCESADOR_PC'];
            $RAM_PC = $_POST['RAM_PC'];
            $UNIDAD_RAM_PC = $_POST['UNIDAD_RAM_PC'];
            $ALMACENAMIENTO_PC = $_POST['ALMACENAMIENTO_PC'];
            $UNIDAD_ALMACENAMIENTO_PC = $_POST['UNIDAD_ALMACENAMIENTO_PC'];
            $TIPO_SISTEMA_PC = $_POST['TIPO_SISTEMA_PC'];
            $SISTEMA_OPERATIVO_PC = $_POST['SISTEMA_OPERATIVO_PC'];
            $VERSION_SO_PC = $_POST['VERSION_SO_PC'];
            $DISPONIBILIDAD_PC = $_POST['DISPONIBILIDAD_PC'];
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('America/Bogota'));
            $CREATED_AT = $time->format("Y-m-d h:i:s");
            $UPDATED_AT = $time->format("Y-m-d h:i:s");

            
            modeloComputador::setComputador($MARCA_PC,$MODELO_PC,$SERIAL_PC,$PROCESADOR_PC,$RAM_PC,$UNIDAD_RAM_PC,$ALMACENAMIENTO_PC,$UNIDAD_ALMACENAMIENTO_PC,$TIPO_SISTEMA_PC,$SISTEMA_OPERATIVO_PC,$VERSION_SO_PC,$DISPONIBILIDAD_PC,$CREATED_AT,$UPDATED_AT);
        }

        include_once("Views/Computador/RegistroComputador.php");

    }

    public function Computadores(){
        $computadores= modeloComputador::selectComputadores();
        include_once("Views/Computador/Computadores.php");
    }

    public function AsignarComputador(){

        $data['list-empleados']= modeloComputador::selectDataEmpleado();

        $data['list-computadores']= modeloComputador::selectDataComputador();

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

            modeloComputador::setAsignacion($ID_EMPLEADO_FK,$ID_PC_FK,$FECHA_INICIO_PRESTAMO,$FECHA_FIN_PRESTAMO,$CREATED_AT,$UPDATED_AT);
        }
        include_once("Views/Computador/AsignarComputador.php");
    }

    public function HistorialAsignaciones(){
        include_once("Views/Computador/HistorialAsignaciones.php");
    }

}
?>