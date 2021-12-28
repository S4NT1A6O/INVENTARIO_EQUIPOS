<?php

class modeloEmpresas{
    public static function setEmpresa(
        $RAZON_SOCIAL_EMPRESA,
        $NIT_EMPRESA,
        $DIRECCION_EMPRESA,
        $CODIGO_POSTAL_EMPRESA,
        $CREATED_AT,
        $UPDATED_AT
    ){
        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("INSERT INTO EMPRESA (RAZON_SOCIAL_EMPRESA, NIT_EMPRESA, DIRECCION_EMPRESA, CODIGO_POSTAL_EMPRESA, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?)");
        $sql->execute(array($RAZON_SOCIAL_EMPRESA,$NIT_EMPRESA,$DIRECCION_EMPRESA,$CODIGO_POSTAL_EMPRESA,$CREATED_AT,$UPDATED_AT));
    }
}

?>