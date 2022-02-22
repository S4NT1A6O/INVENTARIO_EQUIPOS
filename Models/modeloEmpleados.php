<?php

class modeloEmpleados{

    // Atributos EMPLEADO
    public $ID_USUARIO;
    public $ID_EMPRESA_FK;
    public $ID_ROL_FK;
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

    public static function selectDataEmpresa(){

        $conexionDB=connectionDB::crearInstancia();
        $sql = "SELECT ID_AREA_EMPRESA, NOMBRE_AREA_EMPRESA FROM AREA_EMPRESA WHERE ESTADO = 'ACTIVO';";
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
        $ESTADO,
		$CREATED_AT,
		$UPDATED_AT
        ){
        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("INSERT INTO EMPLEADO (ID_EMPRESA_FK, NOMBRE_COMPLETO_EMPLEADO, CORREO_EMPLEADO, TIPO_DOCUMENTO_EMPLEADO, NUMERO_DOCUMENTO_EMPLEADO, FECHA_NACIMIENTO_EMPLEADO, NUMERO_CELULAR_EMPLEADO, NUMERO_FIJO_EMPLEADO, ESTADO, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($ID_EMPRESA_FK,$NOMBRE_COMPLETO_EMPLEADO,$CORREO_EMPLEADO,$TIPO_DOCUMENTO_EMPLEADO,$NUMERO_DOCUMENTO_EMPLEADO,$FECHA_NACIMIENTO_EMPLEADO,$NUMERO_CELULAR_EMPLEADO,$NUMERO_FIJO_EMPLEADO,$ESTADO,$CREATED_AT,$UPDATED_AT));
    }

    public static function selectEmpleados(){

        $listaEmpleados=[];
        $conexionDB=connectionDB::crearInstancia();
        $sql = $conexionDB->query( "SELECT USUARIO.ID_USUARIO, AREA_EMPRESA.NOMBRE_AREA_EMPRESA, USUARIO.ID_ROL_FK, USUARIO.NOMBRE_COMPLETO_USUARIO, USUARIO.CORREO_USUARIO, USUARIO.TIPO_DOCUMENTO_USUARIO, USUARIO.NUMERO_DOCUMENTO_USUARIO, USUARIO.FECHA_NACIMIENTO_USUARIO, USUARIO.NUMERO_CELULAR_USUARIO, USUARIO.NUMERO_FIJO_USUARIO, USUARIO.ESTADO , USUARIO.CREATED_AT , USUARIO.UPDATED_AT 
                                    FROM USUARIO INNER JOIN AREA_EMPRESA
                                    ON USUARIO.ID_EMPRESA_FK=AREA_EMPRESA.ID_AREA_EMPRESA
                                    WHERE USUARIO.ESTADO = 'ACTIVO' AND USUARIO.ID_ROL_FK='2';");

        foreach($sql->fetchAll() as $empleado){
            $listaEmpleados[]=new modeloEmpleados($empleado['ID_USUARIO'],$empleado['NOMBRE_AREA_EMPRESA'],$empleado['ID_ROL_FK'],$empleado['NOMBRE_COMPLETO_USUARIO'],$empleado['CORREO_USUARIO'],$empleado['TIPO_DOCUMENTO_USUARIO'],$empleado['NUMERO_DOCUMENTO_USUARIO'],$empleado['FECHA_NACIMIENTO_USUARIO'],$empleado['NUMERO_CELULAR_USUARIO'],$empleado['NUMERO_FIJO_USUARIO'], $empleado['ESTADO'],$empleado['CREATED_AT'],$empleado['UPDATED_AT']);
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