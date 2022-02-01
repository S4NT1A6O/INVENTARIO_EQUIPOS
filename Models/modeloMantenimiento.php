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

        $ID_PC_FK,
        $DESCRIPCION_MANTENIMIENTO,
        $ESTADO,
        $CREATED_AT,
        $UPDATED_AT

        ){

    }

    public static function selectMantenimientos(){

    }
}

?>