<?php
session_start();
if (isset($_SESSION['login'])) {
  header('Location: /decie');
}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  <body>
<center>
    <h1>Registrarse</h1>
    <span> <a href="login.php">Iniciar Sesion</a> | <a href="/decie">volver al sitio</a> </span>
    <form action="config/registro.php" method="post">
<br>
    <table border="0" width="500px">
    <tr>
    <td align="right">Correo Electronico</td>
    <td><input type="email" name="email" class="form-control" required  placeholder="Ingresa tu email" ></td>
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
      <td align="right">Nombre(s)</td>
      <td><input type="text" name="nombre" class="form-control" required  placeholder="Ingresa tu nombre" minlength="3" maxlength="30" pattern="[A-Z a-z]+"></td>
    </tr>
    <tr>
      <td align="right">Apellido Paterno</td>
      <td><input type="text" name="ape_p" class="form-control" required  placeholder="Apellido Paterno" minlength="3" maxlength="20" pattern="[A-Z a-z]+"></td>
    </tr>
    <tr>
      <td align="right">Apellido Materno</td>
      <td><input type="text" name="ape_m" class="form-control" required  placeholder="Apellido Materno" minlength="3" maxlength="20" pattern="[A-Z a-z]+"></td>
    </tr>
    <tr>
      <td align="right">Fecha de Nacimiento</td>
      <td><input type="date" name="nacimiento" class="form-control" required ></td>
    </tr>
    <tr>
      <td align="right">curp</td>
      <td><input type="text" name="curp" class="form-control" required  placeholder="curp" minlength="10" maxlength="30" pattern="[A-Za-z0-9]+"></td>
    </tr>
    <tr>
      <td align="right">telefono</td>
      <td><input type="number" name="telefono" class="form-control" required  placeholder="telefono" minlength="7" maxlength="15" pattern="[+-0-9]+"></td>
    </tr>
    <tr>
      <td align="right">Estado Civil</td>
      <td>
      <select name="EstadoCivil" id="EstadoCivil" class="form-control">
      <option value="Soltero(a)">Soltero(a)</option>
      <option value="Casado(a)">Casado(a)</option>
      <option value="Divorciado(a)">Divorciado(a)</option>
      <option value="Viudo(a)">Viudo(a)</option>
      <option value="Union Libre">Union Libre</option>
      <option value="Separado(a)">Separado(a)</option>
      </select>
      </td>
    </tr>
    <tr>
      <td align="right">Sexo</td>
      <td>
      <select name="Sexo" id="Sexo" class="form-control">
      <option value="Masculino">Masculino</option>
      <option value="Femenino">Femenino</option>
      </select>
      </td>
    </tr>
    <tr>
      <td align="right">Escolaridad</td>
      <td>
      <select name="Escolaridad" id="Escolaridad" class="form-control">
      <option value="Primaria">Primaria</option>
      <option value="Secundaria">Secundaria</option>
      <option value="Preparatoria/Bachillerato">Preparatoria/Bachillerato</option>
      <option value="Carrera Tecnica">Carrera Tecnica</option>
      <option value="Licenciatura">Licenciatura</option>
      <option value="Maestria">Maestria</option>
      <option value="Doctorado">Doctorado</option>
      <option value="Ninguna">Ninguna</option>
      </select>
      </td>
    </tr>
    <tr>
      <td align="right">Estado</td>
      <td>
      <select name="Estado" id="Estado" class="form-control">
<option value="Aguascalientes">Aguascalientes</option>
<option value="Baja California">Baja California</option>
<option value="Baja California Sur">Baja California Sur</option>
<option value="Campeche">Campeche</option>
<option value="Chiapas">Chiapas</option>
<option value="Chihuahua">Chihuahua</option>
<option value="Ciudad de México">Ciudad de Mexico</option>
<option value="Coahuila">Coahuila</option>
<option value="Colima">Colima</option>
<option value="Durango">Durango</option>
<option value="Guanajuato">Guanajuato</option>
<option value="Guerrero">Guerrero</option>
<option value="Hidalgo">Hidalgo</option>
<option value="Jalisco">Jalisco</option>
<option value="México">Mexico</option>
<option value="Michoacán">Michoacan</option>
<option value="Morelos">Morelos</option>
<option value="Nayarit">Nayarit</option>
<option value="Nuevo León">Nuevo Leon</option>
<option value="Oaxaca">Oaxaca</option>
<option value="Puebla">Puebla</option>
<option value="Querétaro">Queretaro</option>
<option value="Quintana">Quintana Roo</option>
<option value="San Luis Potosí">San Luis Potosi</option>
<option value="Sinaloa">Sinaloa</option>
<option value="Sonora">Sonora</option>
<option value="Tabasco">Tabasco</option>
<option value="Tamaulipas">Tamaulipas</option>
<option value="Tlaxcala">Tlaxcala</option>
<option value="Veracruz">Veracruz</option>
<option value="Yucatán">Yucatan</option>
<option value="Zacatecas">Zacatecas</option>
      </select>
      </td>
    </tr>
    <tr>
      <td align="right">Municipio</td>
      <td><input type="text" name="municipio" class="form-control" required placeholder="Municipio" minlength="3" maxlength="30" pattern="[A-Z a-z]+"></td>
    </tr>
    <tr>
      <td align="right">Domicilio</td>
      <td><input type="text" name="Domicilio" class="form-control" required placeholder="Domicilio" minlength="3" maxlength="30"></td>
    </tr>
    <tr>
      <td align="right">Codigo Postal</td>
      <td><input type="number" name="CodigoPostal" class="form-control" required placeholder="Codigo Postal" maxlength="6"></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" value="Registrar" class="btn btn-success"></td>
    </tr>
    </table>
    <br>
      
    </form>

    </center>
  </body>
</html>
