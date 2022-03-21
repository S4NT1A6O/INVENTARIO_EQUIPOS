<?php

class modeloMantenimiento{

    // ATRIBUTOS
    public $ID_MANTENIMIENTO;
    public $ID_PC_FK;
    public $DESCRIPCION_MANTENIMIENTO;
    public $ESTADO;
    public $CREATED_AT;
    public $UPDATED_AT;

    // METODOS
    // CONSTRUCTOR
    public function __construct(
        $ID_MANTENIMIENTO,
        $ID_PC_FK,
        $DESCRIPCION_MANTENIMIENTO,
        $ESTADO,
        $CREATED_AT,
        $UPDATED_AT
        ){
        $this->ID_MANTENIMIENTO=$ID_MANTENIMIENTO;
        $this->ID_PC_FK=$ID_PC_FK;
        $this->DESCRIPCION_MANTENIMIENTO=$DESCRIPCION_MANTENIMIENTO;
        $this->ESTADO=$ESTADO;
        $this->CREATED_AT=$CREATED_AT;
        $this->UPDATED_AT=$UPDATED_AT;
    }

    public static function selectMantenimientos(){

        $listaMantenimientos=[];
        $conexionDB=connectionDB::crearInstancia();
        $sql = $conexionDB->query( "SELECT MANTENIMIENTOS.ID_MANTENIMIENTO, COMPUTADOR.SERIAL_PC, MANTENIMIENTOS.DESCRIPCION_MANTENIMIENTO, MANTENIMIENTOS.ESTADO, MANTENIMIENTOS.CREATED_AT, MANTENIMIENTOS.UPDATED_AT
                                    FROM MANTENIMIENTOS INNER JOIN COMPUTADOR
                                    ON MANTENIMIENTOS.ID_PC_FK = COMPUTADOR.ID_PC
                                    WHERE MANTENIMIENTOS.ESTADO = 'ACTIVO' ;" );

        foreach($sql->fetchAll() as $mantenimiento){
            $listaMantenimientos[]=new modeloMantenimiento($mantenimiento['ID_MANTENIMIENTO'],$mantenimiento['SERIAL_PC'],$mantenimiento['DESCRIPCION_MANTENIMIENTO'],$mantenimiento['ESTADO'],$mantenimiento['CREATED_AT'],$mantenimiento['UPDATED_AT']);
        };

        return $listaMantenimientos;

    }

    public static function selectHistorialMantenimientos(){

        $listaHistorialMantenimientos=[];
        $conexionDB=connectionDB::crearInstancia();
        $sql = $conexionDB->query( "SELECT MANTENIMIENTOS.ID_MANTENIMIENTO, COMPUTADOR.SERIAL_PC, MANTENIMIENTOS.DESCRIPCION_MANTENIMIENTO, MANTENIMIENTOS.ESTADO, MANTENIMIENTOS.CREATED_AT, MANTENIMIENTOS.UPDATED_AT
                                    FROM MANTENIMIENTOS INNER JOIN COMPUTADOR
                                    ON MANTENIMIENTOS.ID_PC_FK = COMPUTADOR.ID_PC
                                    WHERE MANTENIMIENTOS.ESTADO <> 'ACTIVO' ;" );

        foreach($sql->fetchAll() as $mantenimiento){
            $listaHistorialMantenimientos[]=new modeloMantenimiento($mantenimiento['ID_MANTENIMIENTO'],$mantenimiento['SERIAL_PC'],$mantenimiento['DESCRIPCION_MANTENIMIENTO'],$mantenimiento['ESTADO'],$mantenimiento['CREATED_AT'],$mantenimiento['UPDATED_AT']);
        };

        return $listaHistorialMantenimientos;

    }

    public static function selectDataComputador(){

    }

    public static function closeMaintenance(){
        
    }

}

?>