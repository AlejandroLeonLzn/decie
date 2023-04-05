<?php


include("../config/conexion.php");
$comp = new conex();
$link = $comp->conectar();


session_start();

$ida=$_REQUEST['idadmin'];
$user=$_REQUEST['usuario'];
$pass=password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

$comp->modificaradmin($link,$ida,$user,$pass);



?>