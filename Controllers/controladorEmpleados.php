<?php

include_once("Models/modeloEmpleados.php");
include_once("Connection.php");

class controladorEmpleados
{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user-data'])) {
            header('Location: ' . URL . '?controlador=Login&accion=Login');
        }
    }

    public function Empleados()
    {
        $empleados = modeloEmpleados::selectEmpleados();
        include_once("Views/Empleados/Empleados.php");
    }

    public function RegistroEmpleado()
    {
        $data['list-empresas'] = modeloEmpleados::selectDataEmpresa();
        if ($_POST) {
            $ID_EMPRESA_FK = trim($_POST['ID_EMPRESA_FK']);
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

            // $existEmployee = existEmployeeDb();
            $existEmployee = modeloEmpleados::existEmployee($NUMERO_DOCUMENTO_EMPLEADO, $CORREO_EMPLEADO);

            if (count($existEmployee) > 0) {
                echo "El empleado ya existe, vete a la mi!";
                die();
            }

            // Insertar el registro en la base de datos
            modeloEmpleados::setEmpleado($ID_EMPRESA_FK, $NOMBRE_COMPLETO_EMPLEADO, $CORREO_EMPLEADO, $TIPO_DOCUMENTO_EMPLEADO, $NUMERO_DOCUMENTO_EMPLEADO, $FECHA_NACIMIENTO_EMPLEADO, $NUMERO_CELULAR_EMPLEADO, $NUMERO_FIJO_EMPLEADO, $ESTADO, $CREATED_AT, $UPDATED_AT);

            header("Location:./?controlador=Empleados&accion=Empleados");
        }
        include_once("Views/Empleados/RegistroEmpleado.php");
    }

    public function BorrarEmpleados()
    {

        $ID_EMPLEADO = $_POST['ID_EMPLEADO'];
        $modeloEmpleados = modeloEmpleados::deleteEmpleado($ID_EMPLEADO);

        if (isset($modeloEmpleados)) {

            $info = array();



            http_response_code(200);
            header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
            header('Cache-Control: post-check=0, pre-check=0', false);
            header('Pragma: no-cache');
            header('Content-type: application/json; charset=UTF-8');
            echo json_encode($info);
        }
    }

    private function validateEmail(string $email)
    {
        filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
