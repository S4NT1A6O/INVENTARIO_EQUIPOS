<?php

class modeloEmpresas
{

    // Atributos
    public $ID_AREA_EMPRESA;
    public $NOMBRE_AREA_EMPRESA;
    // public $NIT_EMPRESA;
    // public $DIRECCION_EMPRESA;
    // public $CODIGO_POSTAL_EMPRESA;
    public $ESTADO;
    public $CREATED_AT;
    public $UPDATED_AT;

    // Metodos

    public function __construct(
        $ID_AREA_EMPRESA,
        $NOMBRE_AREA_EMPRESA,
        // $NIT_EMPRESA,
        // $DIRECCION_EMPRESA,
        // $CODIGO_POSTAL_EMPRESA,
        $ESTADO,
        $CREATED_AT,
        $UPDATED_AT
    ) {
        $this->ID_AREA_EMPRESA = $ID_AREA_EMPRESA;
        $this->NOMBRE_AREA_EMPRESA = $NOMBRE_AREA_EMPRESA;
        // $this->NIT_EMPRESA=$NIT_EMPRESA;
        // $this->DIRECCION_EMPRESA=$DIRECCION_EMPRESA;
        // $this->CODIGO_POSTAL_EMPRESA=$CODIGO_POSTAL_EMPRESA;
        $this->ESTADO = $ESTADO;
        $this->CREATED_AT = $CREATED_AT;
        $this->UPDATED_AT = $UPDATED_AT;
    }

    public static function selectEmpresas()
    {
        $listaEmpresas = [];
        $conexionDB = connectionDB::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM AREA_EMPRESA  WHERE ESTADO = 'ACTIVO'");

        foreach ($sql->fetchAll() as $empresa) {
            $listaEmpresas[] = new modeloEmpresas($empresa['ID_AREA_EMPRESA'], $empresa['NOMBRE_AREA_EMPRESA'], $empresa['ESTADO'], $empresa['CREATED_AT'], $empresa['UPDATED_AT']);
        };

        return $listaEmpresas;
    }

    public static function setEmpresa(
        $NOMBRE_AREA_EMPRESA,
        $ESTADO
    ) {
        $conexionDB = connectionDB::crearInstancia();
        $sql = $conexionDB->prepare("INSERT INTO AREA_EMPRESA (NOMBRE_AREA_EMPRESA, ESTADO, CREATED_AT) VALUES (?,?,NOW())");
        $sql->execute(array($NOMBRE_AREA_EMPRESA, $ESTADO));

        return $sql;
    }

    public static function deleteEmpresa($ID_AREA_EMPRESA)
    {

        $conexionDB = connectionDB::crearInstancia();
        $sql = $conexionDB->prepare("UPDATE AREA_EMPRESA SET ESTADO = 'INACTIVO' WHERE ID_AREA_EMPRESA = ?;");
        $resultadoSql = $sql->execute(array($ID_AREA_EMPRESA));

        return $resultadoSql;
    }
}
