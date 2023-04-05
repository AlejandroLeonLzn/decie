<?php
include("../config/conexion.php");
$obj=new conex();
$link=$obj->conectar();
$lnk=$obj->conectar();
$lk=$obj->conectar();

session_start();
if (isset($_SESSION['adminlogin'])) {
}else{
  header('Location: /decie/administrador');
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  <body>
  <center>
    <h1>Panel de administrador</h1>
<?php
    echo utf8_encode('Bienvenido(a) '.$_SESSION['adminlogin']);
    echo '  <a href="/decie/logout.php">Cerrar Sesion</a>';
    ?>   
    <h1>Examen del Usuario</h1>
    
    <?php

$iduser=$_SESSION['idu'];
$idmodulo=5;
        echo '<table border="1" align="center" class="table" >
        <thead class="thead-dark">
        <tr>
        <th scope="col">id usuario</th>
        <th scope="col">id pregunta</th>
        <th scope="col">intentos restantes al responder</th>
          <th scope="col">respuesta</th>
          <th scope="col">respuesta correcta</th>
          <th scope="col">valor</th>
          <th scope="col">acierto</th>
        </tr>
      </thead>
    ';
    
    $obj->CalificacionAdm($lnk,$iduser,$idmodulo);
        echo '</table>';
?>
    </center>
  </body>
</html>