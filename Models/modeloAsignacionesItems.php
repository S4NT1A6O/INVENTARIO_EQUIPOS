<?php

class modeloAsignacionesItems{

    // Atributos
    public $ID_PRESTAMO;
    public $ID_EMPLEADO_FK;
    public $MODELO_ITEM;
    public $TIPO_ITEM;
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
        $MODELO_ITEM,
        $TIPO_ITEM,
        $FECHA_INICIO_PRESTAMO,
        $FECHA_FIN_PRESTAMO,
        $ESTADO,
        $CREATED_AT,
        $UPDATED_AT
        ){
        $this->ID_PRESTAMO=$ID_PRESTAMO;
        $this->ID_EMPLEADO_FK=$ID_EMPLEADO_FK;
        $this->MODELO_ITEM = $MODELO_ITEM;
        $this->TIPO_ITEM = $TIPO_ITEM;
        $this->FECHA_INICIO_PRESTAMO=$FECHA_INICIO_PRESTAMO;
        $this->FECHA_FIN_PRESTAMO=$FECHA_FIN_PRESTAMO;
        $this->ESTADO=$ESTADO;
        $this->CREATED_AT=$CREATED_AT;
        $this->UPDATED_AT=$UPDATED_AT;
    }

    public static function selectAsigI(){

        $listaAsigItems=[];
        $conexionDB=connectionDB::crearInstancia();
        $sql = $conexionDB->query( "SELECT PRESTAMO_ITEMS.ID_PRESTAMO ,USUARIO.NOMBRE_COMPLETO_USUARIO ,ITEMS.MODELO_ITEM ,ITEMS.TIPO_ITEM ,PRESTAMO_ITEMS.FECHA_INICIO_PRESTAMO ,PRESTAMO_ITEMS.FECHA_FIN_PRESTAMO ,PRESTAMO_ITEMS.ESTADO ,PRESTAMO_ITEMS.CREATED_AT ,PRESTAMO_ITEMS.UPDATED_AT
                                    FROM PRESTAMO_ITEMS INNER JOIN USUARIO
                                    ON PRESTAMO_ITEMS.ID_EMPLEADO_FK=USUARIO.ID_USUARIO
                                    INNER JOIN ITEMS
                                    ON PRESTAMO_ITEMS.ID_ITEM_FK=ITEMS.ID_ITEM
                                    WHERE PRESTAMO_ITEMS.ESTADO = 'ACTIVO' ;");

        foreach($sql->fetchAll() as $item){
            $listaAsigItems[]=new modeloAsignacionesItems($item['ID_PRESTAMO'],$item['NOMBRE_COMPLETO_USUARIO'],$item['MODELO_ITEM'],$item['TIPO_ITEM'],$item['FECHA_INICIO_PRESTAMO'],$item['FECHA_FIN_PRESTAMO'],$item['ESTADO'],$item['CREATED_AT'],$item['UPDATED_AT']);
        };

        return $listaAsigItems;

    }

    // public static function setAsigItem(
    //     $MARCA_ITEM,
    //     $MODELO_ITEM,
    //     $TIPO_ITEM,
    //     $CANTIDAD_ITEM,
    //     $CANTIDAD_DISPONIBLE_ITEM,
    //     $IMAGEN_ITEM,
    //     $ESTADO
    //        ){

    // }

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