<?php

// echo $controlador;

include_once("Controllers/controlador".$controlador.".php");
$objControlador = "controlador".ucfirst($controlador);

$controlador = new $objControlador();
$accion = ucfirst($accion);
// echo $accion;
$controlador->$accion();

?>