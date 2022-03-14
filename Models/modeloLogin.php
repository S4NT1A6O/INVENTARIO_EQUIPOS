<?php

class modeloLogin{

    // Atributos Computador

    public $ID_USUARIO;
    public $ID_EMPRESA_FK;
    public $ID_ROL_FK;
    public $NOMBRE_COMPLETO_USUARIO;
    public $CORREO_USUARIO;
    public $TIPO_DOCUMENTO_USUARIO;
    public $NUMERO_DOCUMENTO_USUARIO;
    public $FECHA_NACIMIENTO_USUARIO;
    public $NUMERO_CELULAR_USUARIO;
    public $NUMERO_FIJO_USUARIO;
    public $ESTADO;
    public $CREATED_AT;
    public $UPDATED_AT;

    // METODOS

    public function __construct(
        $ID_USUARIO,
        $ID_EMPRESA_FK,
        $ID_ROL_FK,
        $NOMBRE_COMPLETO_USUARIO,
        $CORREO_USUARIO,
        $TIPO_DOCUMENTO_USUARIO,
        $NUMERO_DOCUMENTO_USUARIO,
        $FECHA_NACIMIENTO_USUARIO,
        $NUMERO_CELULAR_USUARIO,
        $NUMERO_FIJO_USUARIO,
        $ESTADO,
        $CREATED_AT,
        $UPDATED_AT
        ){
        $this->ID_USUARIO=$ID_USUARIO;
        $this->ID_EMPRESA_FK=$ID_EMPRESA_FK;
        $this->ID_ROL_FK=$ID_ROL_FK;
        $this->NOMBRE_COMPLETO_USUARIO=$NOMBRE_COMPLETO_USUARIO;
        $this->CORREO_USUARIO=$CORREO_USUARIO;
        $this->TIPO_DOCUMENTO_USUARIO=$TIPO_DOCUMENTO_USUARIO;
        $this->NUMERO_DOCUMENTO_USUARIO=$NUMERO_DOCUMENTO_USUARIO;
        $this->FECHA_NACIMIENTO_USUARIO=$FECHA_NACIMIENTO_USUARIO;
        $this->NUMERO_CELULAR_USUARIO=$NUMERO_CELULAR_USUARIO;
        $this->NUMERO_FIJO_USUARIO=$NUMERO_FIJO_USUARIO;
        $this->ESTADO=$ESTADO;
        $this->CREATED_AT=$CREATED_AT;
        $this->UPDATED_AT=$UPDATED_AT;
    }

    public static function selectUser($CORREO_USUARIO,$PASSWORD_USUARIO){

        // $datos=array();
        $listaDatos=[];
        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->query("SELECT ID_USUARIO,ID_EMPRESA_FK ,ID_ROL_FK ,NOMBRE_COMPLETO_USUARIO,CORREO_USUARIO ,TIPO_DOCUMENTO_USUARIO,NUMERO_DOCUMENTO_USUARIO ,FECHA_NACIMIENTO_USUARIO,NUMERO_CELULAR_USUARIO ,NUMERO_FIJO_USUARIO,ESTADO,CREATED_AT	,UPDATED_AT FROM USUARIO WHERE CORREO_USUARIO ='".$CORREO_USUARIO."' AND PASSWORD_USUARIO ='".$PASSWORD_USUARIO."' AND ESTADO = 'ACTIVO';");
        // $datos[]=$sql->fetchAll();

        // while ($resultado=$sql->fetch_assoc()) {
        //     $datosUsuario[]=$resultado;
        //     // echo $fila["ID_USUARIO"];
        //     // echo $fila["ID_EMPRESA_FK"];
        //     // echo $fila["ID_ROL_FK"];
        // }

        foreach($sql->fetchAll() as $dato){
            $listaDatos[]=new modeloLogin($dato['ID_USUARIO'],$dato['ID_EMPRESA_FK'],$dato['ID_ROL_FK'],$dato['NOMBRE_COMPLETO_USUARIO'],$dato['CORREO_USUARIO'],$dato['TIPO_DOCUMENTO_USUARIO'],$dato['NUMERO_DOCUMENTO_USUARIO'],$dato['FECHA_NACIMIENTO_USUARIO'],$dato['NUMERO_CELULAR_USUARIO'],$dato['NUMERO_FIJO_USUARIO'],$dato['ESTADO'] ,$dato['CREATED_AT'],$dato['UPDATED_AT']);
        };

        // foreach($sql->fetchAll() as $usuario){
        //     $datosUsuario[]=new modeloLogin($usuario['ID_USUARIO'],$usuario['ID_EMPRESA_FK'],$usuario['ID_ROL_FK'],$usuario['NOMBRE_COMPLETO_USUARIO'],$usuario['CORREO_USUARIO'],$usuario['TIPO_DOCUMENTO_USUARIO'],$usuario['NUMERO_DOCUMENTO_USUARIO'],$usuario['FECHA_NACIMIENTO_USUARIO'],$usuario['NUMERO_CELULAR_USUARIO'],$usuario['NUMERO_FIJO_USUARIO'],$usuario['ESTADO'],$usuario['CREATED_AT'],$usuario['UPDATED_AT']);
        // };

        return $listaDatos;
    }
}
