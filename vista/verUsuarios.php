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
      <th>Puntos</th>
      </tr>
  </thead>
   
    
  <tbody class="BusquedaRapida" bgcolor="#ade8f4">

  <!-- ----------------------------------------menu --------------------------------------------->
    
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #252440;">
    <div class="container">
        
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>     
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!-- Inicio -->
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="menu_principal.php">Menu principal</a>
      </li>
        <!-- -->
            <li class="nav-item">
                <a class="nav-link " href="abecedario.html">Abecedario</a>
            </li>

          <li class="nav-item">
            <a class="nav-link active" href="frases_comunes.html">Frases comunes</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="calendario.html">Calendario</a>
          </li>
          <?php if($obj->tipo() == "Administrador"):?>
            <li class="nav-item">
              <a class="nav-link" href="verUsuarios.php">Usuarios</a>
            </li>
          <?php endif; ?>
          <?php if($obj->tipo() == "Normal"):?>
            <li class="nav-item">
              <a class="nav-link" href="Repaso.php">Repaso</a>
            </li>
          <?php endif; ?>
          

        </ul>
      
          

        </form>
      </div>
    </div>
  </nav>


       
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
        <td>".$misdatos["aciertos"]."</td>
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