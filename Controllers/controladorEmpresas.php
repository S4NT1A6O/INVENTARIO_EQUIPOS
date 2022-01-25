<?php

include_once("Models/modeloEmpresas.php");
include_once("Connection.php");


class controladorEmpresas{

    public function Empresas(){
        $empresas= modeloEmpresas::selectEmpresas();
        include_once("Views/Empresas/Empresas.php");
    }

    public function RegistroEmpresa(){
        if ($_POST) {
            print_r($_POST);

            $RAZON_SOCIAL_EMPRESA = $_POST['RAZON_SOCIAL_EMPRESA'];
            $NIT_EMPRESA = $_POST['NIT_EMPRESA'];
            $DIRECCION_EMPRESA = $_POST['DIRECCION_EMPRESA'];
            $CODIGO_POSTAL_EMPRESA = $_POST['CODIGO_POSTAL_EMPRESA'];
            $ESTADO = "ACTIVO";
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('America/Bogota'));
            $CREATED_AT = $time->format("Y-m-d h:i:s");
            $UPDATED_AT = $time->format("Y-m-d h:i:s");

            modeloEmpresas::setEmpresa($RAZON_SOCIAL_EMPRESA,$NIT_EMPRESA,$DIRECCION_EMPRESA,$CODIGO_POSTAL_EMPRESA,$ESTADO,$CREATED_AT,$UPDATED_AT);

            header("Location:./?controlador=Empresas&accion=Empresas");
        }
        include_once("Views/Empresas/RegistroEmpresa.php");
    }

    public function BorrarEmpresa(){

        $ID_EMPRESA=$_POST['ID_EMPRESA'];

        $modeloEmpresas=modeloEmpresas::deleteEmpresa($ID_EMPRESA);

    }

}
?>