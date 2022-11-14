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
    
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #252440;">
    <div class="container">
        
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>     
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!-- Inicio -->
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../modelo/Principal.php">Menu principal</a>
      </li>
        <!-- -->
            <li class="nav-item">
                <a class="nav-link" href="abecedario.html">Abecedario</a>
            </li>

          <li class="nav-item">
            <a class="nav-link" href="frases_comunes.html">Frases comunes</a>
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

  <table>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td><video id="im" height="700" width="400" loop="true" autoplay="true" controls></td>
            <td><input type="text" id="Rimg1" name="Rimg1"></td>
        </tr>

  </table>
  
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" id="Rimg1" name="Rimg1">
  <canvas id="im2" height="700" width="400"></canvas>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img id="a" height="700" width="400"/>
  <input type="text" id="Rimg2" name="Rimg2">
  <?php 
    
  ?>
</body>
<script type="text/javascript" src="../modelo/Imagenes.js" ></script>
<script type="text/javascript" src="../modelo/Videos.js" ></script>
<script type="text/javascript" src="../controlador/SeleccionarIV.js"></script>
</html>