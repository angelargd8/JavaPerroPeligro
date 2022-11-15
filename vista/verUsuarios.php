<!DOCTYPE html>
<head>
<?php
session_start(); 
ob_start();
include("../modelo/Principal.php");?>


<html lang="es">


<title>Busqueda de Usuarios</title>
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">

<!--Funcion de jquery para el filtrado-->

<script type="text/javascript">
$(document).ready(function () {
   (function($) {
       $('#Filtrar').keyup(
        function () 
        {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida tr').hide();
             $('.BusquedaRapida tr').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});
</script>
</head>
<body>
<?php include "../modelo/encabezado.php"?>
<!-- fin de la funcion de jquery-->
<!-- Inicio de contenidos -->
<div class="container">
    <br>
    <br>
    <br>
    <br>

 <h1 class="mt-5">Busqueda de Usuarios</h1>
 <hr>

<div class="row">
  <div class="col-12 col-md-12">
        <div class="input-group mb-3">

          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Buscar</span>
          </div>

          <input id="Filtrar" type="text" class="form-control" placeholder="Ingrese el dato a buscar" aria-label="Juan" >
        </div>

<!--Inicio de la tabla de contenido -->

<table class="table table-hover">
  <thead>
    <tr>
      <th>Id.</th>
      <th>Nombre</th>            
      <th>Correo</th>
      <th>Tipo de usuario</th>
      </tr>
  </thead>
   
    
  <tbody class="BusquedaRapida" bgcolor="#ade8f4">

  <!-- ----------------------------------------menu --------------------------------------------->
      
  


  
      <!-- Muestra el contenido de la base #fae1dd -->
      <?php

      //$con = mysqli_connect("localhost","root","","farmacia");
      //conexion
      include("../modelo/conexion.php");

      global $cnx;

      $consulta = "SELECT * FROM usuarios";
      $resultado = mysqli_query($cnx , $consulta);

      while($misdatos = mysqli_fetch_array($resultado)) 
      { 

      echo"
      <tr>
        <td>".$misdatos["id"]."</td>
        <td>".$misdatos["nombre"]."</td>
        <td>".$misdatos["correo"]."</td>
        <td>".$misdatos["Tipo_usuario"]."</td>

        </tr>";

       }

      ?>          

  </tbody>
</table>		

<!-- Fin Contenido --> 
</div><!-- Fin del formato -->
</div><!-- Fin row -->
</div><!-- Fin container -->
    
</body>
</html>