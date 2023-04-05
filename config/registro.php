<?php


include("conexion.php");
$comp = new conex();
$link = $comp->conectar();
$comp2 = new conex();
$link2 = $comp2->conectar();
$comp3 = new conex();
$link3 = $comp3->conectar();
$comp4 = new conex();
$link4 = $comp4->conectar();

$mail=$_REQUEST['email'];
$user=$mail;
$pass=password_hash($_REQUEST['password'], PASSWORD_BCRYPT);
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
$iduser=0;

//$comp4->correorepetido($link4,$user);
$comp->agregausr($link,$nomb,$apep,$apem,$naci,$curp,$tele,$civi,$sexo,$esco,$esta,$muni,$domi,$codi,$mail,$pass);
$comp2->mostraridreg($link2,$user);

$iduser=$_SESSION['iduser'];
$comp3->agregacursos($link3,$iduser);

session_unset();

session_destroy();

header('Location: /decie');

?>