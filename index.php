<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Decie</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  <body>
<?php require 'partials/header.php'?>


<?php

  if(isset($_SESSION['login'])){
    if($_SESSION['pago']=='si'){
    include("config/conexion.php");
    $comp = new conex();
    $link = $comp->conectar();    
    $user=$_SESSION['login'];
    echo '<table border="1" align="center" class="table" >
    <thead class="thead-dark">
    <tr>
      <th scope="col">N°</th>
      <th scope="col">curso</th>
      <th scope="col">calificación</th>
      <th scope="col">modo</th>
      <th scope="col">modulo</th>
      <th scope="col">tareas</th>
      <th scope="col">Examen</th>
      <th scope="col">intentos restantes</th>
    </tr>
  </thead>
';
    $comp->mostrarcurso($link,$user);
    echo '</table>';
    }else{
      echo 'Por favor realiza el pago';
    }
  }else{
    echo '<center>Por Favor inicia Sesion para poder ver los modulos</center>';
}
?>

  </body>

</html>
