<?php

// function __construct(){

// 	$url = isset($_GET['url']) ? $_GET['url'] : null;
// 	$url = rtrim($url, '/');
// 	$url = explode('/', $url);

// }

$controlador="Login";
$accion="Login";

if(isset($_GET['controlador']) && isset($_GET['accion'])){
    
    if (($_GET['controlador']!="") && ($_GET['accion']!="") ) {
        $controlador = $_GET['controlador'];

        $accion = $_GET['accion'];
        }
}

    require_once("Views/Template.php");

?>