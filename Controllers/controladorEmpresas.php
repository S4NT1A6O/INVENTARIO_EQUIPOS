<?php

include_once("Models/modeloEmpresas.php");
include_once("Connection.php");


class controladorEmpresas
{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user-data'])) {
            header('Location: ' . URL . '?controlador=Login&accion=Login');
        }
    }

    public function Empresas()
    {
        $empresas = modeloEmpresas::selectEmpresas();
        include_once("Views/Empresas/Empresas.php");
    }

    // public function RegistroEmpresa()
    // {
    //     include_once("Views/Empresas/RegistroEmpresa.php");
    // }

    // public function RegistrarEmpresa()
    // {

    //     $RAZON_SOCIAL_EMPRESA = $_POST['RAZON_SOCIAL_EMPRESA'];
    //     $ESTADO = "ACTIVO";

    //     $resmodeloEmpresas = modeloEmpresas::setEmpresa($RAZON_SOCIAL_EMPRESA, $ESTADO);

    //     if (isset($resmodeloEmpresas)) {
    //         if ($resmodeloEmpresas) {
    //         }
    //         $info = array();
    //         $info['state'] = 'ok';
    //         $info['msg'] = 'Registro exitoso';
    //         $info['link'] = '?controlador=Empresas&accion=Empresas';
    //     }

    //     http_response_code(200);
    //     header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    //     header('Cache-Control: post-check=0, pre-check=0', false);
    //     header('Pragma: no-cache');
    //     header('Content-type: application/json; charset=UTF-8');
    //     echo json_encode($info);
    // }

    public function BorrarEmpresa()
    {

        $ID_EMPRESA = $_POST['ID_EMPRESA'];

        $modeloEmpresas = modeloEmpresas::deleteEmpresa($ID_EMPRESA);

        if (isset($modeloEmpresas)) {

            $info = array();

            if (count($modeloEmpresas) == 0) {
                $info['state'] = 'nok';
                $info['msg'] = 'No se pudo realizar la operación';
            } else {
                $info['state'] = 'ok';
                $info['msg'] = 'Se ha inhabilitado el registro';
            }

            // print_r($_SESSION['user-data']);
            http_response_code(200);
            header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
            header('Cache-Control: post-check=0, pre-check=0', false);
            header('Pragma: no-cache');
            header('Content-type: application/json; charset=UTF-8');
            echo json_encode($info);
        }
    }
}
