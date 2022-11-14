<?php 
    session_start(); 
    include("../modelo/Principal.php");
?>

<html>
<head>
        <meta charset="utf-8">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Menu Principal</title>
    
        <script type="text/javascript" src="../modelo/NuevaVentana.js">
        </script>
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
    <body><center>

<!-- ----------------------------------------menu --------------------------------------------->
&nbsp;&nbsp;
  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
    <div class="container d-flex flex-wrap justify-content-center">
        <a class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
    <form class="col-12 col-lg-auto mb-3 mb-lg-0">
    <span class="input-group-text" id="basic-addon1">Buscar Usuario</span>
      <input id="Filtrar" type="search" class="form-control" placeholder="id, nombre, correo" aria-label="Search">
      </form>
      </a>
      </div>
  </nav>
<div class="row">
 <table class="table table-dark table-sm">
  <thead>
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo de Usuario</th>
      </tr>
  </thead>
  <tbody class="BusquedaRapida">
    <!-- PHP de ingreso a la base de datos-->
    <?php
                include("../modelo/conexion.php");
 
                 //Crear conexión
                $conn=mysqli_connect($servidor,$usuario,$clave,$base);
            
                $consulta="SELECT * FROM `usuarios`";
                $resultado = mysqli_query($conn , $consulta);
                $contador=0;
                while($row = mysqli_fetch_array($resultado)) 
                { 
                    $contador++;

                    echo"
                    <tr>
                        <td>$contador</td>
                        <td>".$row["id"]."</td>
                        <td>".$row["nombre"]."</td>
                        <td>".$row["correo"]."</td>
                        <td>".$row["Tipo_usuario"]."</td>";

                    echo "</tr>";

                }

        ?>
    </div>
  </body>
</html>