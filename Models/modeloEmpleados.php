<?php

class modeloEmpleados{

    // Atributos EMPLEADO
    public $ID_EMPLEADO;
    public $ID_EMPRESA_FK;
    public $NOMBRE_COMPLETO_EMPLEADO;
    public $CORREO_EMPLEADO;
    public $TIPO_DOCUMENTO_EMPLEADO;
    public $NUMERO_DOCUMENTO_EMPLEADO;
    public $FECHA_NACIMIENTO_EMPLEADO;
    public $NUMERO_CELULAR_EMPLEADO;
    public $NUMERO_FIJO_EMPLEADO;
    public $ESTADO;
    public $CREATED_AT;
    public $UPDATED_AT;

    // Metodos
    public function __construct(
        $ID_EMPLEADO,
		$ID_EMPRESA_FK,
		$NOMBRE_COMPLETO_EMPLEADO,
		$CORREO_EMPLEADO,
		$TIPO_DOCUMENTO_EMPLEADO,
		$NUMERO_DOCUMENTO_EMPLEADO,
		$FECHA_NACIMIENTO_EMPLEADO,
		$NUMERO_CELULAR_EMPLEADO,
		$NUMERO_FIJO_EMPLEADO,
        $ESTADO,
		$CREATED_AT,
		$UPDATED_AT
        ){
        $this->ID_EMPLEADO=$ID_EMPLEADO;
        $this->ID_EMPRESA_FK=$ID_EMPRESA_FK;
        $this->NOMBRE_COMPLETO_EMPLEADO=$NOMBRE_COMPLETO_EMPLEADO;
        $this->CORREO_EMPLEADO=$CORREO_EMPLEADO;
        $this->TIPO_DOCUMENTO_EMPLEADO=$TIPO_DOCUMENTO_EMPLEADO;
        $this->NUMERO_DOCUMENTO_EMPLEADO=$NUMERO_DOCUMENTO_EMPLEADO;
        $this->FECHA_NACIMIENTO_EMPLEADO=$FECHA_NACIMIENTO_EMPLEADO;
        $this->NUMERO_CELULAR_EMPLEADO=$NUMERO_CELULAR_EMPLEADO;
        $this->NUMERO_FIJO_EMPLEADO=$NUMERO_FIJO_EMPLEADO;
        $this->ESTADO=$ESTADO;
        $this->CREATED_AT=$CREATED_AT;
        $this->UPDATED_AT=$UPDATED_AT;
    }

    public static function selectDataEmpresa(){

        $conexionDB=connectionDB::crearInstancia();
        $sql = "SELECT ID_EMPRESA,RAZON_SOCIAL_EMPRESA FROM EMPRESA";
        $stmt = $conexionDB->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;

    }

    public static function setEmpleado(
		$ID_EMPRESA_FK,
		$NOMBRE_COMPLETO_EMPLEADO,
		$CORREO_EMPLEADO,
		$TIPO_DOCUMENTO_EMPLEADO,
		$NUMERO_DOCUMENTO_EMPLEADO,
		$FECHA_NACIMIENTO_EMPLEADO,
		$NUMERO_CELULAR_EMPLEADO,
		$NUMERO_FIJO_EMPLEADO,
		$CREATED_AT,
		$UPDATED_AT
    ){
        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("INSERT INTO EMPLEADO (ID_EMPRESA_FK, NOMBRE_COMPLETO_EMPLEADO, CORREO_EMPLEADO, TIPO_DOCUMENTO_EMPLEADO, NUMERO_DOCUMENTO_EMPLEADO, FECHA_NACIMIENTO_EMPLEADO, NUMERO_CELULAR_EMPLEADO, NUMERO_FIJO_EMPLEADO, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($ID_EMPRESA_FK,$NOMBRE_COMPLETO_EMPLEADO,$CORREO_EMPLEADO,$TIPO_DOCUMENTO_EMPLEADO,$NUMERO_DOCUMENTO_EMPLEADO,$FECHA_NACIMIENTO_EMPLEADO,$NUMERO_CELULAR_EMPLEADO,$NUMERO_FIJO_EMPLEADO,$CREATED_AT,$UPDATED_AT));
    }

    public static function selectEmpleados(){

        $listaEmpleados=[];
        $conexionDB=connectionDB::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM EMPLEADO WHERE ESTADO = 'ACTIVO'");

        foreach($sql->fetchAll() as $empleado){
            $listaEmpleados[]=new modeloEmpleados($empleado['ID_EMPLEADO'],$empleado['ID_EMPRESA_FK'],$empleado['NOMBRE_COMPLETO_EMPLEADO'],$empleado['CORREO_EMPLEADO'],$empleado['TIPO_DOCUMENTO_EMPLEADO'],$empleado['NUMERO_DOCUMENTO_EMPLEADO'],$empleado['FECHA_NACIMIENTO_EMPLEADO'],$empleado['NUMERO_CELULAR_EMPLEADO'],$empleado['NUMERO_FIJO_EMPLEADO'], $empleado['ESTADO'],$empleado['CREATED_AT'],$empleado['UPDATED_AT']);
        };

        return $listaEmpleados;
    }

    public static function deleteEmpleado($ID_EMPLEADO){

        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("UPDATE EMPLEADO SET ESTADO = 'INACTIVO' WHERE ID_EMPLEADO = ?;");
        $resultadoSql = $sql->execute(array($ID_EMPLEADO));

        return $resultadoSql;

    }
}

?>