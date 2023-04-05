<?php


include("../config/conexion.php");
$comp = new conex();
$link = $comp->conectar();
$comp2 = new conex();
$link2 = $comp2->conectar();


session_start();

$user=$_REQUEST['usuario'];

$comp->eliminamodulos($link,$user);
$comp2->eliminausr($link2,$user);



?>