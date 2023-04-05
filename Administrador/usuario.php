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
    <h1>Modificar datos del Usuario</h1>
    <form action="actualizarusuario.php" method="post">
    <table border="1" align="center" class="table">
    <?php
    
$user=$_REQUEST['usuario'];
$obj->mostrarperfiladmin($link,$user);
?>
</table>

<input type="submit" value="Guardar Cambios" class="btn btn-success"></center>
    <br>
    </form>


    <center><h1>Modificar contraseña del Usuario</h1></center>
    <form action="contraseñausuario.php" method="post">
    <table align="center" class="table">
  <?php
   echo '<td align="right"><input class="form-check-input" type="radio" name="usuario" id="usuario" value="'.$user.'" checked>cambiar contraseña </td>
    ';    ?>
    <td><input type="password" name="password" class="form-control" required  placeholder="nueva contraseña"></td>
    <td><input type="submit" value="Guardar Cambios" class="btn btn-warning"></td>
    </tr>
</table>
</form>


<center><h1>Eliminar Usuario</h1></center>
    <form action="eliminarusuario.php" method="post">
    <table align="center" class="table">
  <?php
   echo '<td align="right">
   <input class="form-check-input" type="radio" name="usuario" id="usuario" value="'.$user.'" checked>
   ¿Eliminar Este usuario?</td>
    ';    ?>
    <td><input type="submit" value="Eliminar" class="btn btn-danger"></td>
    <td></td>
    <td></td>
    </tr>
</table>
</form>

    <?php
        echo '<table border="1" align="center" class="table" >
        <thead class="thead-dark">
        <tr>
          <th scope="col">id curso</th>
          <th scope="col">curso</th>
          <th scope="col">calificación</th>
          <th scope="col">modo</th>
          <th scope="col">tarea</th>
          <th scope="col">Examen</th>
          <th scope="col">intentos restantes</th>
        </tr>
      </thead>
    ';
        $obj->mostrarcursoadmin($lnk,$user);
        echo '</table>';
?>
    </center>
  </body>
</html>