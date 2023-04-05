<?php

include("../config/conexion.php");
$comp = new conex();
$link = $comp->conectar();

$user=$_REQUEST['email'];
$pass=password_hash($_REQUEST['password'], PASSWORD_BCRYPT);


$comp->agregausradm($link,$user,$pass);


header('Location: /decie/administrador');

?>