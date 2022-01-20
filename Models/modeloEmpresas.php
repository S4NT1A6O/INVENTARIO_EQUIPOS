<?php

class modeloEmpresas{

    // Atributos
    public $ID_EMPRESA;
    public $RAZON_SOCIAL_EMPRESA;
    public $NIT_EMPRESA;
    public $DIRECCION_EMPRESA;
    public $CODIGO_POSTAL_EMPRESA;
    public $CREATED_AT;
    public $UPDATED_AT;

    
    // Metodos

    public function __construct(
        $ID_EMPRESA,
        $RAZON_SOCIAL_EMPRESA,
        $NIT_EMPRESA,
        $DIRECCION_EMPRESA,
        $CODIGO_POSTAL_EMPRESA,
        $ESTADO,
        $CREATED_AT,
        $UPDATED_AT){
        $this->ID_EMPRESA=$ID_EMPRESA;
        $this->RAZON_SOCIAL_EMPRESA=$RAZON_SOCIAL_EMPRESA;
        $this->NIT_EMPRESA=$NIT_EMPRESA;
        $this->DIRECCION_EMPRESA=$DIRECCION_EMPRESA;
        $this->CODIGO_POSTAL_EMPRESA=$CODIGO_POSTAL_EMPRESA;
        $this->ESTADO=$ESTADO;
        $this->CREATED_AT=$CREATED_AT;
        $this->UPDATED_AT=$UPDATED_AT;
    }

    public static function selectEmpresas(){
        $listaEmpresas=[];
        $conexionDB=connectionDB::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM EMPRESA  WHERE ESTADO = 'ACTIVO'");

        foreach($sql->fetchAll() as $empresa){
            $listaEmpresas[]=new modeloEmpresas($empresa['ID_EMPRESA'],$empresa['RAZON_SOCIAL_EMPRESA'],$empresa['NIT_EMPRESA'],$empresa['DIRECCION_EMPRESA'],$empresa['CODIGO_POSTAL_EMPRESA'],$empresa['ESTADO'],$empresa['CREATED_AT'],$empresa['UPDATED_AT']);
        };

        return $listaEmpresas;

    }

    public static function setEmpresa(
        $RAZON_SOCIAL_EMPRESA,
        $NIT_EMPRESA,
        $DIRECCION_EMPRESA,
        $CODIGO_POSTAL_EMPRESA,
        $CREATED_AT,
        $UPDATED_AT){
        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("INSERT INTO EMPRESA (RAZON_SOCIAL_EMPRESA, NIT_EMPRESA, DIRECCION_EMPRESA, CODIGO_POSTAL_EMPRESA, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?)");
        $sql->execute(array($RAZON_SOCIAL_EMPRESA,$NIT_EMPRESA,$DIRECCION_EMPRESA,$CODIGO_POSTAL_EMPRESA,$CREATED_AT,$UPDATED_AT));
    }

    public static function deleteEmpresa($ID_EMPRESA){

        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("DELETE FROM EMPRESA WHERE ID_EMPRESA = ?;");
        $sql->execute(array($ID_EMPRESA));

    }
}

?>