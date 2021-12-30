<?php

class modeloComputador{

    public static function setComputador(
        $MARCA_PC,
        $MODELO_PC,
        $SERIAL_PC,
        $PROCESADOR_PC,
        $RAM_PC,
        $UNIDAD_RAM_PC,
        $ALMACENAMIENTO_PC,
        $UNIDAD_ALMACENAMIENTO_PC,
        $TIPO_SISTEMA_PC,
        $SISTEMA_OPERATIVO_PC,
        $VERSION_SO_PC,
        $DISPONIBILIDAD_PC,
        $CREATED_AT,
        $UPDATED_AT
    ){
        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("INSERT INTO COMPUTADOR (MARCA_PC, MODELO_PC, SERIAL_PC, PROCESADOR_PC, RAM_PC, UNIDAD_RAM_PC, ALMACENAMIENTO_PC, UNIDAD_ALMACENAMIENTO_PC, TIPO_SISTEMA_PC, SISTEMA_OPERATIVO_PC, VERSION_SO_PC, DISPONIBILIDAD_PC, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($MARCA_PC,$MODELO_PC,$SERIAL_PC,$PROCESADOR_PC,$RAM_PC,$UNIDAD_RAM_PC,$ALMACENAMIENTO_PC,$UNIDAD_ALMACENAMIENTO_PC,$TIPO_SISTEMA_PC,$SISTEMA_OPERATIVO_PC,$VERSION_SO_PC,$DISPONIBILIDAD_PC,$CREATED_AT,$UPDATED_AT));
    }






    public static function setPrestamo(
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