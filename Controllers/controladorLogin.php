<?php

include_once("Models/modeloLogin.php");
include_once("Connection.php");

class controladorLogin
{

    public function __construct()
    {
        session_start();
    }

    public function Login()
    {
        include_once("Views/Login/Login.php");
    }

    public function tryLogin()
    {
        if (isset($_POST['user']) && isset($_POST['pass'])) {

            $info = array();

            $CORREO_USUARIO = $_POST['user'];
            $PASSWORD_USUARIO = hash('sha512', ($_POST['pass']));
            $datosUsuario = modeloLogin::selectUser($CORREO_USUARIO, $PASSWORD_USUARIO);

            if (count($datosUsuario) == 0) {
                $info['state'] = 'nok';
                $info['msg'] = 'No se pudo iniciar sesion';
                $info['link'] = '';
                $_SESSION['user-data'] = [];
            } else {
                foreach ($datosUsuario as $usuario) {
                    $_SESSION['user-data']['ID_USUARIO'] = $usuario->ID_USUARIO;
                    $_SESSION['user-data']['ID_EMPRESA_FK'] = $usuario->ID_EMPRESA_FK;
                    $_SESSION['user-data']['ID_ROL_FK'] = $usuario->ID_ROL_FK;
                    $_SESSION['user-data']['NOMBRE_COMPLETO_USUARIO'] = $usuario->NOMBRE_COMPLETO_USUARIO;
                    $_SESSION['user-data']['CORREO_USUARIO'] = $usuario->CORREO_USUARIO;
                    $_SESSION['user-data']['TIPO_DOCUMENTO_USUARIO'] = $usuario->TIPO_DOCUMENTO_USUARIO;
                    $_SESSION['user-data']['NUMERO_DOCUMENTO_USUARIO'] = $usuario->NUMERO_DOCUMENTO_USUARIO;
                    $_SESSION['user-data']['FECHA_NACIMIENTO_USUARIO'] = $usuario->FECHA_NACIMIENTO_USUARIO;
                    $_SESSION['user-data']['NUMERO_CELULAR_USUARIO'] = $usuario->NUMERO_CELULAR_USUARIO;
                    $_SESSION['user-data']['NUMERO_FIJO_USUARIO'] = $usuario->NUMERO_FIJO_USUARIO;
                    $_SESSION['user-data']['ESTADO'] = $usuario->ESTADO;
                    $_SESSION['user-data']['CREATED_AT'] = $usuario->CREATED_AT;
                    $_SESSION['user-data']['UPDATED_AT'] = $usuario->UPDATED_AT;

                    if ($_SESSION['user-data']['ID_ROL_FK'] == 1 or $_SESSION['user-data']['ID_ROL_FK'] == 2) {
                        // $info=array();
                        $info['state'] = 'ok';
                        $info['msg'] = 'Iniciando sesion';
                        $info['link'] = '?controlador=Load&accion=Menu';
                        // $info=array('success'=>true, 'msg'=>"Iniciando sesion...", 'link'=>"?controlador=Load&accion=Menu");
                    } else {
                        $info['state'] = 'nok';
                        $info['msg'] = 'No se pudo iniciar sesion';
                        $info['link'] = '';
                        $_SESSION['user-data'] = [];
                    }
                }
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
