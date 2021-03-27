<?php
session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if($varsesion== null || $varsesion=''){
    header("location:index.html");
    die();
}
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style media="screen">
    @font-face {
      font-family: Roboto-Thin;
      src:url(CSS/Roboto-Thin.ttf);
    }
    </style>
    <title>Punto De Venta</title>
  </head>
  <body>
    <h1 class="text-center">Punto de venta</h1>
    <a href="/cerrar_sesion.php" class="btn btn-primary btn-sm" style="text-align:left">Cerrar Sesión</a>
    <a href="/PDF/Reporte_De-Ventas.php" class="btn btn-primary btn-sm" style="text-align:center">Reporte De Ventas</a>
      <hr>
         <div class="text-center">
           <button type="button" class="mostrar" onclick="Mostrar();"style="text-align:center">Iniciar</button>

         </div>
       <div id="elemento" hidden>
          <form method="post" action="/tablanueva.php">
            <input type="date" id="fecha">
            <button type="button" id="venta" onclick="Tabla();">Vender</button>
          </form>
         </div>

         <script src="home.js" charset="utf-8"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
         <script>
         function Tabla()
         {
             var fecha = document.getElementById('fecha').value;

         }
         function Tabla()
         {
           alert('<?php  accion(); ?>');
         }
         </script>
  </body>
</html>
