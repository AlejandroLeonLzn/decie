<?php


include("../config/conexion.php");
$comp = new conex();
$link = $comp->conectar();


session_start();

$user=$_REQUEST['usuario'];
$pass=password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

$comp->modificarcontra($link,$user,$pass);



?>