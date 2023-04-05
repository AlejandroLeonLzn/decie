<?php

include("../config/conexion.php");
$comp = new conex();
$link = $comp->conectar();

$user=$_REQUEST['usuario'];
$pass=$_REQUEST['password'];


$comp->loginadmin($link,$user,$pass);




if (isset($_SESSION['adminlogin'])) {
  header('Location: /decie/administrador/paneldeadministrador.php');
}

?>