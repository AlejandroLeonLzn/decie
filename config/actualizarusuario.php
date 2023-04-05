<?php


include("conexion.php");
$comp = new conex();
$link = $comp->conectar();


session_start();
$id=$_SESSION['iduser'];

$mail=$_REQUEST['email'];
$nomb=$_REQUEST['nombre'];
$apep=$_REQUEST['ape_p'];
$apem=$_REQUEST['ape_m'];
$naci=$_REQUEST['nacimiento'];
$curp=$_REQUEST['curp'];
$tele=$_REQUEST['telefono'];
$civi=$_REQUEST['EstadoCivil'];
$sexo=$_REQUEST['Sexo'];
$esco=$_REQUEST['Escolaridad'];
$esta=$_REQUEST['Estado'];
$muni=$_REQUEST['municipio'];
$domi=$_REQUEST['Domicilio'];
$codi=$_REQUEST['CodigoPostal'];

$comp->modificarusr($link,$id,$nomb,$apep,$apem,$naci,$curp,$tele,$civi,$sexo,$esco,$esta,$muni,$domi,$codi,$mail);


?>