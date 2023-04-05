
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Tareas</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
<body>
<?php require '../partials/header.php'?>
<?php
if (isset($_SESSION['login'])) {
}else{
  header('Location: /decie');
}?>
<h1>Tarea del Segundo Modulo</h1>
<p>contestar el siguiente archivo con la informacion correspondiente a sus conocimientos y subir con un formato PDF</p>

                  <table><tr><td>
                  <div class="card" style="width: 40rem;">
                  <img class="card-img-top" src="../img/tareas/1.png" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Rellene segun las indicaciones en las tablas.
                  </div>
                  </div>
                  </td>
                  <td width="10">
                  </td>
                  <td>
                  <div class="card" style="width: 40rem;">
                  <img class="card-img-top" src="../img/tareas/2.png" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  En caso de no poder escribir por ser una figura dar clic derecho y seleccionar editar texto.
                  </div>
                 </td>
                 </tr>
                 <tr>
                  <td>
                  <div class="card" style="width: 40rem;">
                  <img class="card-img-top" src="../img/tareas/3.png" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  para terminar exportar el archivo en la pestaña de archivo como un PDF
                  </div>
                  </td></tr>
                  </table>

<a href="archivos/2DO MODULO.docx" download="2DO MODULO.docx">Descargar Tarea</a>
<br>
<br>
<?php
  if(isset($_FILES['subir'])){
    $name_file = $_FILES['subir']['name'];
    $name_file = $_SESSION['name'].'.pdf';
    $tmp_name = $_FILES['subir']['tmp_name'];
    $local_image = "archivos/tarea2/Tarea2Id".$_SESSION['iduser']."";
    $upload = move_uploaded_file($tmp_name, $local_image.$name_file);
    if ($upload) {
      echo "<h5>Ya subio esta tarea, si selecciona otro se remplazara el anterior</h5>";
    }else{
      echo "archivo no agregado ";
    }
  }
?>

<form method="POST" enctype="multipart/form-data">  
  <input type="file" name="subir" accept=".PDF" id="subir">
  <input type="submit" name="submit" value="Subir"> 
</form>
<br>
</body>
</html>