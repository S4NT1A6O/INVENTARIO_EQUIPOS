<?php

class modeloItem{

    // Atributos Computador

    // Computador
    public $ID_ITEM ;
    public $MARCA_ITEM;
    public $MODELO_ITEM;
    public $TIPO_ITEM;
    public $CANTIDAD_ITEM;
    public $CANTIDAD_DISPONIBLE_ITEM;
    public $IMAGEN_ITEM;
    public $ESTADO;
    public $CREATED_AT;
    public $UPDATED_AT;

    // Metodos

    // Constructor
    public function __construct(
        $ID_ITEM,
        $MARCA_ITEM,
        $MODELO_ITEM,
        $TIPO_ITEM,
        $CANTIDAD_ITEM,
        $CANTIDAD_DISPONIBLE_ITEM,
        $IMAGEN_ITEM,
        $ESTADO,
        $CREATED_AT,
        $UPDATED_AT
        ){
        $this->ID_ITEM=$ID_ITEM;
        $this->MARCA_ITEM=$MARCA_ITEM;
        $this->MODELO_ITEM=$MODELO_ITEM;
        $this->TIPO_ITEM=$TIPO_ITEM;
        $this->CANTIDAD_ITEM=$CANTIDAD_ITEM;
        $this->CANTIDAD_DISPONIBLE_ITEM=$CANTIDAD_DISPONIBLE_ITEM;
        $this->IMAGEN_ITEM=$IMAGEN_ITEM;
        $this->ESTADO=$ESTADO;
        $this->CREATED_AT=$CREATED_AT;
        $this->UPDATED_AT=$UPDATED_AT;
    }

    public static function selectItems(){
    $listaItems=[];
    $conexionDB=connectionDB::crearInstancia();
    $sql = $conexionDB->query("SELECT * FROM ITEMS WHERE ESTADO = 'ACTIVO';");

    foreach($sql->fetchAll() as $item){
        $listaItems[]=new modeloItem($item['ID_ITEM'],$item['MARCA_ITEM'],$item['MODELO_ITEM'],$item['TIPO_ITEM'],$item['CANTIDAD_ITEM'],$item['CANTIDAD_DISPONIBLE_ITEM'],$item['IMAGEN_ITEM'],$item['ESTADO'] ,$item['CREATED_AT'],$item['UPDATED_AT']);
    };

    return $listaItems;

    }

    public static function itemsAgig(){

    }


}