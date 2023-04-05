<?php

include("../config/conexion.php");
$comp = new conex();
$link = $comp->conectar();
$comp2 = new conex();
$link2 = $comp2->conectar();
$comp3 = new conex();
$link3 = $comp3->conectar();
$comp4 = new conex();
$link4 = $comp4->conectar();
$comp5 = new conex();
$link5 = $comp5->conectar();


session_start();

$arreglo;
for ($i = 1; $i <= 10; $i++) {
$arreglo[$i] = $_REQUEST[$_SESSION['idPregunta'.$i.'']];
$idP[$i] = $_SESSION['idPregunta'.$i.''];
}

for ($i = 1; $i <= 10; $i++) {
    echo $_SESSION['idPregunta'.$i.''];
    echo '          ';
    echo $idP[$i];
    echo '<br>';
    }
$iduser=$_SESSION['iduser'];
$intento=$_SESSION['intento'];
$comp->agregarevaluacion4($link,$iduser,$idP,$arreglo,$intento);
$comp2->Calificar4($link2,$iduser);
$cali=$_SESSION['califica4'];
$idmodulo=4;
$comp3->regcal1($link3,$iduser,$idmodulo,$cali);
if($cali>=6){
$comp4->regapr($link4,$iduser,$idmodulo);
}elseif($cali<=5){
$comp4->regrep($link4,$iduser,$idmodulo);
}
$comp5->resint($link5,$iduser,$idmodulo);

header('Location: /decie');
?>