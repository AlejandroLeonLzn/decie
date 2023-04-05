
   <header>
   <center> 
    <a href="/decie"> <h1>Decie</h1> </a> 
    
<hr>
  <?php
  session_start();

  if(isset($_SESSION['login'])){
    echo utf8_encode('Bienvenido(a) '.$_SESSION['name']);
    echo '  <a href="/decie/user.php">Perfil</a>';
    echo '  <a href="/decie/logout.php">Cerrar Sesion</a>';
}else{
    echo '<span><a href="login.php">iniciar Sesion</a> | <a href="SignUp.php">Registrarse</a></span>';
}
?>
<hr>
</center> 

</header>