<?php

include_once("Models/modeloEmpleados.php");
include_once("Connection.php");

class controladorEmpleados{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user-data'])) {
            header('Location: ' . URL . '?controlador=Login&accion=Login');
        }
    }

    public function Empleados(){
        $empleados= modeloEmpleados::selectEmpleados();
        include_once("Views/Empleados/Empleados.php");
    }

    public function RegistroEmpleado(){ 

        $data['list-empresas']= modeloEmpleados::selectDataEmpresa();
        if ($_POST) {

            $ID_EMPRESA_FK = $_POST['ID_EMPRESA_FK'];
            $NOMBRE_COMPLETO_EMPLEADO = $_POST['NOMBRE_COMPLETO_EMPLEADO'];
            $CORREO_EMPLEADO = $_POST['CORREO_EMPLEADO'];
            $TIPO_DOCUMENTO_EMPLEADO = $_POST['TIPO_DOCUMENTO_EMPLEADO'];
            $NUMERO_DOCUMENTO_EMPLEADO = $_POST['NUMERO_DOCUMENTO_EMPLEADO'];
            $FECHA_NACIMIENTO_EMPLEADO = $_POST['FECHA_NACIMIENTO_EMPLEADO'];
            $NUMERO_CELULAR_EMPLEADO = $_POST['NUMERO_CELULAR_EMPLEADO'];
            $NUMERO_FIJO_EMPLEADO = $_POST['NUMERO_FIJO_EMPLEADO'];
            $ESTADO = "ACTIVO";
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('America/Bogota'));
            $CREATED_AT = $time->format("Y-m-d h:i:s");
            $UPDATED_AT = $time->format("Y-m-d h:i:s");

            modeloEmpleados::setEmpleado($ID_EMPRESA_FK,$NOMBRE_COMPLETO_EMPLEADO,$CORREO_EMPLEADO,$TIPO_DOCUMENTO_EMPLEADO,$NUMERO_DOCUMENTO_EMPLEADO,$FECHA_NACIMIENTO_EMPLEADO,$NUMERO_CELULAR_EMPLEADO,$NUMERO_FIJO_EMPLEADO,$ESTADO,$CREATED_AT,$UPDATED_AT);

            header("Location:./?controlador=Empleados&accion=Empleados");
        }
        include_once("Views/Empleados/RegistroEmpleado.php");
    }

    public function BorrarEmpleados(){

        $ID_EMPLEADO= $_POST['ID_EMPLEADO'];

        $modeloEmpleados= modeloEmpleados::deleteEmpleado($ID_EMPLEADO);

        // echo json_encode($modeloEmpleados);

        // header("Location:./?controlador=Empleados&accion=Empleados");

    }
}
?>