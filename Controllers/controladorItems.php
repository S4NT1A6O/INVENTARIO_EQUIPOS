<?php

include_once("Models/modeloItems.php");
include_once("Connection.php");

class controladorItems{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user-data'])) {
            header('Location: ' . URL . '?controlador=Login&accion=Login');
        }
    }

    public function RegistroItem(){

        if ($_POST) {
            print_r($_POST);

            $MARCA_PC = $_POST['MARCA_PC'];
            $MODELO_PC = $_POST['MODELO_PC'];
            $SERIAL_PC = $_POST['SERIAL_PC'];
            $PROCESADOR_PC = $_POST['PROCESADOR_PC'];
            $RAM_PC = $_POST['RAM_PC'];
            $UNIDAD_RAM_PC = $_POST['UNIDAD_RAM_PC'];
            $ALMACENAMIENTO_PC = $_POST['ALMACENAMIENTO_PC'];
            $UNIDAD_ALMACENAMIENTO_PC = $_POST['UNIDAD_ALMACENAMIENTO_PC'];
            $TIPO_SISTEMA_PC = $_POST['TIPO_SISTEMA_PC'];
            $SISTEMA_OPERATIVO_PC = $_POST['SISTEMA_OPERATIVO_PC'];
            $DISPONIBILIDAD_PC = $_POST['DISPONIBILIDAD_PC'];
            $ESTADO = "ACTIVO";
            $time = new DateTime();
            $time->setTimezone(new DateTimeZone('America/Bogota'));
            $CREATED_AT = $time->format("Y-m-d h:i:s");
            $UPDATED_AT = $time->format("Y-m-d h:i:s");

            modeloItem::setItem($MARCA_PC,$MODELO_PC,$SERIAL_PC,$PROCESADOR_PC,$RAM_PC,$UNIDAD_RAM_PC,$ALMACENAMIENTO_PC,$UNIDAD_ALMACENAMIENTO_PC,$TIPO_SISTEMA_PC,$SISTEMA_OPERATIVO_PC,$DISPONIBILIDAD_PC,$ESTADO,$CREATED_AT,$UPDATED_AT);

            header("Location:./?controlador=Computador&accion=Computadores");
        }

        include_once("Views/Items/RegistroItem.php");

    }

    public function Items(){
        $items= modeloItem::selectItems();
        include_once("Views/Items/Items.php");
    }

    public function ItemsAsignados(){
        $computadores= modeloItem::itemsAgig();
        include_once("Views/Items/ItemsAsignados.php");
    }

    public function BorrarItem(){

        $ID_ITEM=$_POST['ID_ITEM'];

        $modeloItem=modeloItem::deleteItem($ID_ITEM);

        if (isset($modeloItem)) {

            $info = array();

            if (count($modeloItem) == 0) {
                $info['state'] = 'nok';
                $info['msg'] = 'No se pudo realizar la operaci??n';
            }else{
                $info['state'] = 'ok';
                $info['msg'] = 'Se ha inhabilitado el registro';
            }

            http_response_code(200);
            header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
            header('Cache-Control: post-check=0, pre-check=0', false);
            header('Pragma: no-cache');
            header('Content-type: application/json; charset=UTF-8');
            echo json_encode($info);
        }
    }
}