<?php
session_start();
if (isset($_SESSION['adminlogin'])) {
  header('Location: /decie/administrador/paneldeadministrador.php');
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
    <h1>Iniciar Sesion de administrador</h1>

    <span><a href="/decie">volver al sitio</a> </span>
    <form action="index.php" method="post">
    </form>

    <form action="comprobacion.php" method="post">
    <table width="300px">
    <tr><td><input type="text" name="usuario" class="form-control" required placeholder="Ingresa tu usuario"></td>
      
      </tr>
      <tr><td>
      <input type="password" name="password" class="form-control" required placeholder="Ingresa tu contraseña"></td>
      </tr>
      <tr><td align="center">
      <input type="submit" value="Ingresar" class="btn btn-primary"></td>
      </tr>
      </table>
    </form>

    
    
  </center>
  </body>
</html>