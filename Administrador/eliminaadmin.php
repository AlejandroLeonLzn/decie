<?php


include("../config/conexion.php");
$comp = new conex();
$link = $comp->conectar();


session_start();

$ida=$_REQUEST['idadmin'];


$comp->eliminaadm($link,$ida);



?>