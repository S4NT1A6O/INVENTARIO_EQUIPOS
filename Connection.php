<?php

class connectionDB{

    private static $instancia=NULL;

    public static function crearInstancia(){
        if (!isset(self::$instancia)) {

            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            self::$instancia = new PDO('mysql:host=localhost;dbname=db_computers_inventory','root','', $opcionesPDO);
        
            echo "Conexion relizada";
        }
        return self::$instancia;
    }


}
?>