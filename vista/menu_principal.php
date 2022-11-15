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
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #252440;">
    <div class="container">
        
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>     
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!-- Inicio -->
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="menu_principal.php">Menu principal</a>
      </li>
        <!-- -->
            <li class="nav-item">
                <a class="nav-link " href="abecedario.php">Abecedario</a>
            </li>

          <li class="nav-item">
            <a class="nav-link " href="frases_comunes.php">Frases comunes</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="calendario.php">Calendario</a>
          </li>
          <?php 
          
          if($obj->tipo() == "Administrador"):?>
            <li class="nav-item">
              <a class="nav-link " href="verUsuarios.php">Usuarios</a>
            </li>
          <?php endif; ?>
          <?php if($obj->tipo() == "Normal"):?>
            <li class="nav-item">
              <a class="nav-link " href="Repaso.php?valor=0&cambio=no">Repaso</a>
            </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link " href="index.php"> Cerrar Sesión</a>
          </li>

        </ul>
      
          

        </form>
      </div>
    </div>
    <div class="container">
    <a  class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-white text-decoration-none">
        &nbsp;&nbsp;
        <span class="fs-4"><?= $obj->us->Bienvenida()?></span>
      </a>
    </div>
  </nav>
	<font >
    <div class="container">
        <br><br><br><br><br><br>
        <h1 class="text-light" font="Arial">Bienvenido</h1>
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-7 formulario">
                <form action="abecedario.php" method="POST">
                    
     
                    <div class="form-group mx-sm-5 pb-5">
                        <input type="sumbit"  class="btn btn-block btn-lg empezar" value="Abecedario" onclick="abc()"><br>
                    </div>
                    
                </form>
                <form action="calendario.php" method="POST">
                    
                    
                    <div class="form-group mx-sm-5 pb-5">
                        <input type="button" class="btn btn-block btn-lg empezar" value="   Calendario   " onclick="salu2()"><br>
                    </div>
                    
                </form>
                <form action="frases_comunes.php" method="POST">
                     
                    <div class="form-group mx-sm-5 pb-5">
                        <input type="button" class="btn btn-block btn-lg empezar" value="    Frases    " onclick="frases()"><br>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>