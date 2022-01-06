<?php

class modeloComputador{

    // Atributos Computador

    // Computador
    public $ID_PC;
    public $MARCA_PC;
    public $MODELO_PC;
    public $SERIAL_PC;
    public $PROCESADOR_PC;
    public $RAM_PC;
    public $UNIDAD_RAM_PC;
    public $ALMACENAMIENTO_PC;
    public $UNIDAD_ALMACENAMIENTO_PC;
    public $TIPO_SISTEMA_PC;
    public $SISTEMA_OPERATIVO_PC;
    public $VERSION_SO_PC;
    public $DISPONIBILIDAD_PC;
    public $CREATED_AT;
    public $UPDATED_AT;




    // Metodos

    // Constructor
    public function __construct(
        $ID_PC,
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
        $this->ID_PC=$ID_PC;
        $this->MARCA_PC=$MARCA_PC;
        $this->MODELO_PC=$MODELO_PC;
        $this->SERIAL_PC=$SERIAL_PC;
        $this->PROCESADOR_PC=$PROCESADOR_PC;
        $this->RAM_PC=$RAM_PC;
        $this->UNIDAD_RAM_PC=$UNIDAD_RAM_PC;
        $this->ALMACENAMIENTO_PC=$ALMACENAMIENTO_PC;
        $this->UNIDAD_ALMACENAMIENTO_PC=$UNIDAD_ALMACENAMIENTO_PC;
        $this->TIPO_SISTEMA_PC=$TIPO_SISTEMA_PC;
        $this->SISTEMA_OPERATIVO_PC=$SISTEMA_OPERATIVO_PC;
        $this->VERSION_SO_PC=$VERSION_SO_PC;
        $this->DISPONIBILIDAD_PC=$DISPONIBILIDAD_PC;
        $this->CREATED_AT=$CREATED_AT;
        $this->UPDATED_AT=$UPDATED_AT;
    }

    public static function selectComputadores(){

        $listaComputadores=[];
        $conexionDB=connectionDB::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM COMPUTADOR");

        foreach($sql->fetchAll() as $computador){
            $listaComputadores[]=new modeloEmpresas($computador['ID_PC'],$computador['MARCA_PC'],$computador['MODELO_PC'],$computador['SERIAL_PC'],$computador['PROCESADOR_PC'],$computador['RAM_PC'],$computador['UNIDAD_RAM_PC'],$computador['ALMACENAMIENTO_PC'],$computador['UNIDAD_ALMACENAMIENTO_PC'],$computador['TIPO_SISTEMA_PC'],$computador['SISTEMA_OPERATIVO_PC'],$computador['VERSION_SO_PC'],$computador['DISPONIBILIDAD_PC'],$computador['CREATED_AT'],$computador['UPDATED_AT']);
        };

        return $listaComputadores;

    }

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

}

?>