<?php

include("conexion.php");
$comp = new conex();
$link = $comp->conectar();

session_start();
$mail=$_SESSION['login'];

$comp->pagousr($link,$mail);
echo'<script>alert("Pago realizado exitosamente, por favor inicia sesion de nuevo")</script>';

header('Location: /decie/logout.php');
?>