<?php


include("conexion.php");
$comp = new conex();
$link = $comp->conectar();

$user=$_REQUEST['email'];
$pass=$_REQUEST['password'];

$comp->logincomp($link,$user,$pass);




if (isset($_SESSION['login'])) {
  header('Location: /decie');
}
?>