<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <style media="screen">
   @font-face {
     font-family: Roboto-Thin;
     src:url(CSS/Roboto-Thin.ttf);
   }
   h1{
   font-family: Roboto-Thin;
 }
</style>
</head>
</html>

<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","Futuremx.123","test");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas == 1){

    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");
  ?>
  <h1>Usuario o contraseña incorrectos</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
