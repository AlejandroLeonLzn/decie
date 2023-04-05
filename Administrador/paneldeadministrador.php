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
    <h1>Usuarios Registrados</h1>
    <table border="1" align="center" class="table" >
    <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">curp</th>
      <th scope="col">numero telefonico</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Pago</th>
      <th scope="col">ver</th>
    </tr>
  </thead>
    <?php
$obj->mostrarusers($link);
?>
</table>

<h1>Registrar nuevo administrador</h1>
    <form action="registro.php" method="post">
<br>
    <table border="0" width="500px">
    <tr>
    <td align="right">Usuario</td>
    <td><input type="text" name="email" class="form-control" required  placeholder="Ingresa tu usuario"></td>
    </tr>
    <tr>
      <td align="right">Contraseña</td>
      <td><input type="password" name="password" class="form-control" required  placeholder="contraseña"></td>
    </tr>
    <tr>
      <td align="right">Confirmar Contraseña</td>
      <td><input type="password" name="confirm_password" class="form-control" required  placeholder="Confirmar contraseña"></td>
    </tr>  
    <tr>
    <td></td>
    <td><input type="submit" value="Registrar" class="btn btn-success"></td>
    </tr>
    </table>
    </form>

    
</table>

<h1>actualizar administrador</h1>
    <form action="actualizaadmin.php" method="post">
<br>
    <table border="0" width="500px">
    
    
		<tr>
    <td align="right">Usuario</td>
	<td> 
	
	<select name="idadmin" id="idamin" class="form-control">

 <?php
$obj->mostrarasmin($lnk);
?>
</select>
</td>
<tr>
    <td align="right">Nuevo Usuario</td>
    <td><input type="text" name="usuario" class="form-control" required  placeholder="Ingresa tu nuevo usuario"></td>
    </tr>
    <tr>
      <td align="right">Nueva Contraseña</td>
      <td><input type="password" name="password" class="form-control" required  placeholder="nueva contraseña"></td>
    </tr>
  </tr>
    <tr>
    <td></td>
    <td><input type="submit" value="Registrar" class="btn btn-success"></td>
    </tr>
    </table>
    </form>



    <h1>Eliminar administrador</h1>
    <form action="eliminaadmin.php" method="post">
<br>
    <table border="0" width="500px">
    
    
		<tr>
    <td align="right">Usuario</td>
	<td> 
	
	<select name="idadmin" id="idamin" class="form-control">
 <?php
$obj->mostrarasmin($lk);
?>
</select>
</td>
<tr>
    <td colspan="2"><center><input type="submit" value="Eliminar" class="btn btn-danger"></center></td>
    </tr>
    </table>
    </form>    

</table>



    </center>
  </body>
</html>