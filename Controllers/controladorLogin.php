<?php

include_once("Models/modeloLogin.php");
include_once("Connection.php");

class controladorLogin{

    public function Login(){
        include_once("Views/Login/Login.php");
    }

    public function tryLogin(){
        if (isset($_POST['user']) && isset($_POST['pass'])) {

            $CORREO_USUARIO = $_POST['user'];
            $PASSWORD_USUARIO= md5($_POST['pass']);
            print_r($CORREO_USUARIO,$PASSWORD_USUARIO);
            $datosUsuario=modeloLogin::selectUser($CORREO_USUARIO,$PASSWORD_USUARIO);

            print_r($datosUsuario);

            if (count($datosUsuario)>0) {
                if (!isset($_SESSION)) {
                    session_start();
                    $_SESSION['user-data'];
                }
            }

            $TIPO_USUARIO='';

            foreach($datosUsuario as $usuario){
                $_SESSION['user-data']['ID_USUARIO']=$usuario->ID_USUARIO;
                $_SESSION['user-data']['ID_EMPRESA_FK']=$usuario->ID_EMPRESA_FK;
                $_SESSION['user-data']['ID_ROL_FK']=$usuario->ID_ROL_FK;
                $_SESSION['user-data']['NOMBRE_COMPLETO_USUARIO']=$usuario->NOMBRE_COMPLETO_USUARIO;
                $_SESSION['user-data']['CORREO_USUARIO']=$usuario->CORREO_USUARIO;
                $_SESSION['user-data']['TIPO_DOCUMENTO_USUARIO']=$usuario->TIPO_DOCUMENTO_USUARIO;
                $_SESSION['user-data']['NUMERO_DOCUMENTO_USUARIO']=$usuario->NUMERO_DOCUMENTO_USUARIO;
                $_SESSION['user-data']['FECHA_NACIMIENTO_USUARIO']=$usuario->FECHA_NACIMIENTO_USUARIO;
                $_SESSION['user-data']['NUMERO_CELULAR_USUARIO']=$usuario->NUMERO_CELULAR_USUARIO;
                $_SESSION['user-data']['NUMERO_FIJO_USUARIO']=$usuario->NUMERO_FIJO_USUARIO;
                $_SESSION['user-data']['ESTADO']=$usuario->ESTADO;
                $_SESSION['user-data']['CREATED_AT']=$usuario->CREATED_AT;
                $_SESSION['user-data']['UPDATED_AT']=$usuario->UPDATED_AT;
            }
            
            print_r($_SESSION['user-data']);
            // $_SESSION['user-data']['ID_USUARIO']=$datosUsuario['ID_USUARIO'];
            // $_SESSION['user-data']['ID_EMPRESA_FK']=$datosUsuario['ID_EMPRESA_FK'];
            // $_SESSION['user-data']['ID_ROL_FK']=$datosUsuario['ID_ROL_FK'];
            // $_SESSION['user-data']['NOMBRE_COMPLETO_USUARIO']=$datosUsuario['NOMBRE_COMPLETO_USUARIO'];
            // $_SESSION['user-data']['CORREO_USUARIO']=$datosUsuario['CORREO_USUARIO'];
            // $_SESSION['user-data']['PASSWORD_USUARIO']=$datosUsuario['PASSWORD_USUARIO'];
            // $_SESSION['user-data']['TIPO_DOCUMENTO_USUARIO']=$datosUsuario['TIPO_DOCUMENTO_USUARIO'];
            // $_SESSION['user-data']['NUMERO_DOCUMENTO_USUARIO']=$datosUsuario['NUMERO_DOCUMENTO_USUARIO'];
            // $_SESSION['user-data']['FECHA_NACIMIENTO_USUARIO']=$datosUsuario['FECHA_NACIMIENTO_USUARIO'];
            // $_SESSION['user-data']['NUMERO_CELULAR_USUARIO']=$datosUsuario['NUMERO_CELULAR_USUARIO'];
            // $_SESSION['user-data']['NUMERO_FIJO_USUARIO']=$datosUsuario['NUMERO_FIJO_USUARIO'];
            // $_SESSION['user-data']['ESTADO']=$datosUsuario['ESTADO'];
            // $_SESSION['user-data']['CREATED_AT']=$datosUsuario['CREATED_AT'];
            // $_SESSION['user-data']['UPDATED_AT']=$datosUsuario['UPDATED_AT'];

            // if ($_SESSION['user-data']['ID_ROL_FK']=$userData[0]['ID_ROL_FK']==1) {
                
            // }

            if ($userData[0]['ID_ROL_FK']=1 or $userData[0]['ID_ROL_FK']=2) {
                $info=array('success'=>true, 'msg'=>"Iniciando sesión...", 'link'=>"http://localhost/inventario_equipos/?controlador=Load&accion=Menu");
            }

        }
    }

}