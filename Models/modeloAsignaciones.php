<?php

class modeloAsignaciones{

    // Atributos
    // Asignaciones

    public $ID_PRESTAMO;
    public $ID_EMPLEADO_FK;
    public $ID_PC_FK;
    public $FECHA_INICIO_PRESTAMO;
    public $FECHA_FIN_PRESTAMO;
    public $CREATED_AT;
    public $UPDATED_AT;

    public function __construct(
        $ID_PRESTAMO,
        $ID_EMPLEADO_FK,
        $ID_PC_FK,
        $FECHA_INICIO_PRESTAMO,
        $FECHA_FIN_PRESTAMO,
        $CREATED_AT,
        $UPDATED_AT
    ){
        $this->ID_PRESTAMO=$ID_PRESTAMO;
        $this->ID_EMPLEADO_FK=$ID_EMPLEADO_FK;
        $this->ID_PC_FK=$ID_PC_FK;
        $this->FECHA_INICIO_PRESTAMO=$FECHA_INICIO_PRESTAMO;
        $this->FECHA_FIN_PRESTAMO=$FECHA_FIN_PRESTAMO;
        $this->CREATED_AT=$CREATED_AT;
        $this->UPDATED_AT=$UPDATED_AT;
    }

    public static function selectAsignaciones(){

        $listaAsignaciones=[];
        $conexionDB=connectionDB::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM PRESTAMO");

        foreach($sql->fetchAll() as $computador){
            $listaAsignaciones[]=new modeloEmpresas($computador['ID_PRESTAMO'],$computador['ID_EMPLEADO_FK'],$computador['ID_PC_FK'],$computador['FECHA_INICIO_PRESTAMO'],$computador['FECHA_FIN_PRESTAMO'],$computador['CREATED_AT'],$computador['UPDATED_AT']);
        };

        return $listaAsignaciones;

    }

    public static function setAsignacion(
        $ID_EMPLEADO_FK,
        $ID_PC_FK,
        $FECHA_INICIO_PRESTAMO,
        $FECHA_FIN_PRESTAMO,
        $CREATED_AT,
        $UPDATED_AT
    ){
        $conexionDB=connectionDB::crearInstancia();
        $sql=$conexionDB->prepare("INSERT INTO PRESTAMO (ID_EMPLEADO_FK, ID_PC_FK, FECHA_INICIO_PRESTAMO, FECHA_FIN_PRESTAMO, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?)");
        $sql->execute(array($ID_EMPLEADO_FK,$ID_PC_FK,$FECHA_INICIO_PRESTAMO,$FECHA_FIN_PRESTAMO,$CREATED_AT,$UPDATED_AT));
    }

    public static function selectDataEmpleado(){

        $conexionDB=connectionDB::crearInstancia();
        $sql="SELECT ID_EMPLEADO,NOMBRE_COMPLETO_EMPLEADO FROM EMPLEADO";
        $stmt = $conexionDB->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function selectDataComputador(){

        $conexionDB=connectionDB::crearInstancia();
        $sql="SELECT ID_PC,MODELO_PC FROM COMPUTADOR";
        $stmt = $conexionDB->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

}


?>