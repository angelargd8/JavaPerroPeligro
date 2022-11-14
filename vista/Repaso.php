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

  <table>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td><video id="im" height="700" width="400" loop="false" autoplay="true" controls></td>
            <td><input type="text" id="Rimg1" name="Rimg1" placeholder="Ingrese el significado"></td>
        </tr>
        <tr>
            <td><video id="vid2" height="700" width="400" loop="false" autoplay="true" controls></td> 
            <td><input type="text" id="Rimg2" name="Rimg2" placeholder="Ingrese el significado"></td>        
        </tr>
        <tr>
            <td><video id="vid3" height="700" width="400" loop="false" autoplay="true" controls></td> 
            <td><input type="text" id="Rimg3" name="Rimg3" placeholder="Ingrese el significado"></td>
        </tr>
        <tr>
            <td><input id="clickMe" type="button" value="Revisar Respuestas" onclick="revisarRespuestas();" /></td>
        </tr>
  </table>
</body>
<script type="text/javascript" src="../modelo/Imagenes.js" ></script>
<script type="text/javascript" src="../modelo/Videos.js" ></script>
<script type="text/javascript" src="../controlador/SeleccionarIV.js"></script>
</html>