<!--Universidad del Valle de Guatemala-->
<!--Autores: Francis Aguilar, 22243; Angela García, 22869; Gerardo Pineda, 22880; Fernando Enrique Echeverría Leal, 22610-->
<!--Programación Orientada a Objetos, sección 20-->
<!--11 de Noviembre 2022-->
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Menu Principal</title>
    
        <script type="text/javascript" src="../modelo/Videos.js" ></script>
            
        </script>
        
    </head>

<body><center>

<!-- ----------------------------------------menu --------------------------------------------->
    
<?php include "../modelo/encabezado.html"?>

	<font >
        <br><br><br><br><br>
        <h1 class="text-light" font="Arial">Calendario</h1>
        <br><br><br><br><br>

        <table border="5" style="margin: 0 auto;">
                    <tr>
                        <form action="frases.html?valor=MesesDelAnio" method="POST">   
                            <td></td>                
                            <td center><input type="submit" class="btn btn-block btn-lg empezar" value="      Meses del año     "></td>
                            <td></td>  
                        </form> 
                        
                    </tr>
                    <tr>
                        <form action="frases.html?valor=Enero" method="POST">     
                            <td><input type="submit"  class="btn btn-block btn-lg empezar" value="          Enero                "></td>
                        </form>
                        <form action="frases.html?valor=Febrero" method="POST">     
                            <td><input type="submit"  class="btn btn-block btn-lg empezar" value="             Febrero          "></td>
                        </form>
                        <form action="frases.html?valor=Marzo" method="POST">     
                            <td center><input type="submit"  class="btn btn-block btn-lg empezar" value="            Marzo               "></td>
                        </form>
                

                    </tr>
                    <tr>
                        <form action="frases.html?valor=Abril" method="POST">
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="          Abril                  " ></td>
                        </form>
                        <form action="frases.html?valor=Mayo" method="POST">
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="               Mayo             " ></td>
                        </form>
                        <form action="frases.html?valor=Junio" method="POST">
                            <td><input type="submit"  class="btn btn-block btn-lg empezar" value="            Junio                "></td>
                        </form>
                        

                    </tr>
                    <tr>
                        <form action="frases.html?valor=Julio" method="POST">     
                            <td><input type="submit"  class="btn btn-block btn-lg empezar" value="            Julio                "></td>
                        </form>
                        <form action="frases.html?valor=Agosto" method="POST">
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="             Agosto            "></td>
                        </form>
                        <form action="frases.html?valor=Septiembre" method="POST">
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="        Septiembre        "></td>
                        </form>


                    </tr>
                    <tr>
                        <form action="frases.html?valor=Noviembre" method="POST">                    
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="        Noviembre        "></td>
                        </form>
                        <form action="frases.html?valor=Diciembre" method="POST">                    
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="          Diciembre        "></td>
                        </form>
                    </tr>
        </table>
        <!-----Dias---->
        <table border="5" style="margin: 0 auto;">
            <tr>
                <form action="frases.html?valor=DiasDeLaSemana" method="POST">   
                    <td></td>                
                    <td center><input type="submit" class="btn btn-block btn-lg empezar" value="     Dias de la semana    "></td>
                    <td></td>  
                </form> 
                
            </tr>
            <tr>
                <form action="frases.html?valor=Lunes" method="POST">     
                    <td><input type="submit"  class="btn btn-block btn-lg empezar" value="            Lunes            "></td>
                </form>
                <form action="frases.html?valor=Martes" method="POST">      
                    <td><input type="submit"  class="btn btn-block btn-lg empezar" value="             Martes                  "></td>
                </form>
                <form action="frases.html?valor=Miercoles" method="POST">     
                    <td center><input type="submit"  class="btn btn-block btn-lg empezar" value="       Miercoles       "></td>
                </form>
        

            </tr>
            <tr>
                <form action="frases.html?valor=Jueves" method="POST">
                    <td><input type="submit" class="btn btn-block btn-lg empezar" value="          Jueves             " ></td>
                </form>
                <form action="frases.html?valor=Viernes" method="POST">
                    <td><input type="submit" class="btn btn-block btn-lg empezar" value="                Viernes              " ></td>
                </form>
                <form action="frases.html?valor=Sabado" method="POST">
                    <td><input type="submit"  class="btn btn-block btn-lg empezar" value="        Sabado           "></td>
                </form>
                

            </tr>
            <tr>
                <form action="frases.html?valor=Domingo" method="POST">     
                    <td><input type="submit"  class="btn btn-block btn-lg empezar" value="         Domingo         "></td>
                </form>
            </tr>
        </table>
        </table>  
  
                    
                
                
               
                
                

</body>

</html>