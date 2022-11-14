<!--Universidad del Valle de Guatemala-->
<!--Autores: Francis Aguilar, 22243; Angela García, 22869; Gerardo Pineda, 22880; Fernando Enrique Echeverría Leal, 22610-->
<!--Programación Orientada a Objetos, sección 20-->
<!--11 de Octubre 2022-->

<!DOCTYPE html>
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
        




    
    </head>

<body><center>

<!-- ----------------------------------------menu --------------------------------------------->
<?php include "../modelo/encabezado.html"?>

	<font >
    <div class="container">
        <br><br><br><br><br><br>
        <h1 class="text-light" font="Arial">Bienvenido</h1>
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-7 formulario">
                <form action="abecedario.html" method="POST">
                    
     
                    <div class="form-group mx-sm-5 pb-5">
                        <input type="button"  class="btn btn-block btn-lg empezar" value="Abecedario" onclick="abc()"><br>
                    </div>
                    
                </form>
                <form action="calendario.html" method="POST">
                    
                    
                    <div class="form-group mx-sm-5 pb-5">
                        <input type="button" class="btn btn-block btn-lg empezar" value="   Calendario   " onclick="salu2()"><br>
                    </div>
                    
                </form>
                <form action="frases_comunes.html" method="POST">
                     
                    <div class="form-group mx-sm-5 pb-5">
                        <input type="button" class="btn btn-block btn-lg empezar" value="    Frases    " onclick="frases()"><br>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>