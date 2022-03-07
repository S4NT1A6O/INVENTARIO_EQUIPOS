<?php

class modeloAsignaciones{

    // Atributos
    public $ID_PRESTAMO;
    public $ID_EMPLEADO_FK;
    public $ID_PC_FK;
    public $FECHA_INICIO_PRESTAMO;
    public $FECHA_FIN_PRESTAMO;
    public $ESTADO;
    public $CREATED_AT;
    public $UPDATED_AT;

    // Metodos

    // Constructor
    public function __construct(
        $ID_PRESTAMO,
        $ID_EMPLEADO_FK,
        $ID_PC_FK,
        $FECHA_INICIO_PRESTAMO,
        $FECHA_FIN_PRESTAMO,
        $ESTADO,
        $CREATED_AT,
        $UPDATED_AT
        ){
        $this->ID_PRESTAMO=$ID_PRESTAMO;
        $this->ID_EMPLEADO_FK=$ID_EMPLEADO_FK;
        $this->ID_PC_FK=$ID_PC_FK;
        $this->FECHA_INICIO_PRESTAMO=$FECHA_INICIO_PRESTAMO;
        $this->FECHA_FIN_PRESTAMO=$FECHA_FIN_PRESTAMO;
        $this->ESTADO=$ESTADO;
        $this->CREATED_AT=$CREATED_AT;
        $this->UPDATED_AT=$UPDATED_AT;
    }

    public static function selectAsignaciones(){

        $listaAsignaciones=[];
        $conexionDB=connectionDB::crearInstancia();
        $sql = $conexionDB->query( "SELECT PRESTAMO.ID_PRESTAMO ,EMPLEADO.NOMBRE_COMPLETO_EMPLEADO ,COMPUTADOR.SERIAL_PC ,PRESTAMO.FECHA_INICIO_PRESTAMO ,PRESTAMO.FECHA_FIN_PRESTAMO ,PRESTAMO.ESTADO ,PRESTAMO.CREATED_AT ,PRESTAMO.UPDATED_AT 
                                    FROM PRESTAMO INNER JOIN EMPLEADO
                                    ON PRESTAMO.ID_EMPLEADO_FK=EMPLEADO.ID_EMPLEADO
                                    INNER JOIN COMPUTADOR
                                    ON PRESTAMO.ID_PC_FK=COMPUTADOR.ID_PC
                                    WHERE PRESTAMO.ESTADO = 'ACTIVO' ;" );

        foreach($sql->fetchAll() as $computador){
            $listaAsignaciones[]=new modeloAsignaciones($computador['ID_PRESTAMO'],$computador['NOMBRE_COMPLETO_EMPLEADO'],$computador['SERIAL_PC'],$computador['FECHA_INICIO_PRESTAMO'],$computador['FECHA_FIN_PRESTAMO'],$computador['ESTADO'],$computador['CREATED_AT'],$computador['UPDATED_AT']);
        };

        return $listaAsignaciones;

    }

    public static function setAsignacion(
        $ID_EMPLEADO_FK,
        $ID_PC_FK,
        $FECHA_INICIO_PRESTAMO,
        $ESTADO,
        $CREATED_AT,
        $UPDATED_AT
        ){
        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("INSERT INTO PRESTAMO (ID_EMPLEADO_FK, ID_PC_FK, FECHA_INICIO_PRESTAMO, ESTADO, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?)");
        $sql->execute(array($ID_EMPLEADO_FK,$ID_PC_FK,$FECHA_INICIO_PRESTAMO,$ESTADO,$CREATED_AT,$UPDATED_AT));
    }

    public static function deleteAsignacion ($ID_PRESTAMO){

        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("UPDATE PRESTAMO SET ESTADO = 'INACTIVO' WHERE ID_PRESTAMO = ?;");
        $resultadoSql=$sql->execute(array($ID_PRESTAMO));

        return $resultadoSql;

    }

    public static function updateStateComputador($ID_PC_FK){

        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("UPDATE COMPUTADOR SET DISPONIBILIDAD_PC = 'Asignado' WHERE ID_PC = ?;");
        $sql->execute(array($ID_PC_FK));
        
        

    }

    public static function selectDataEmpleado(){

        $conexionDB=connectionDB::crearInstancia();
        $sql="SELECT ID_USUARIO,NOMBRE_COMPLETO_USUARIO FROM USUARIO WHERE ID_ROL_FK = '2';";
        $stmt = $conexionDB->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function selectDataComputador(){

        $conexionDB=connectionDB::crearInstancia();
        $sql="SELECT ID_PC,MODELO_PC FROM COMPUTADOR WHERE DISPONIBILIDAD_PC LIKE 'DISPONIBLE';";
        $stmt = $conexionDB->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    
    public static function selectDataItem(){

        $conexionDB=connectionDB::crearInstancia();
        $sql="SELECT ID_ITEM,MODELO_ITEM,CANTIDAD_DISPONIBLE_ITEM,IMAGEN_ITEM FROM ITEMS WHERE ESTADO LIKE 'ACTIVO' AND CANTIDAD_DISPONIBLE_ITEM <= '1';";
        $stmt = $conexionDB->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

}

?>