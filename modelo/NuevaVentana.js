/*Universidad del Valle de Guatemala
Programación Orientada a Objetos, Sección 20
Ludwing Cano
Autores: 
    Angela García, 22869
    Francis Aguilar, 2243
    Gerardo Pineda, 22880
    Fernando Echeverría, 22610
*/




class NuevaVentana{
    constructor() 
    {

    }
    abecedario() {
        /*document.write("aa");*/
        window.location.href = "../vista/abecedario.php";
        //alert("perro peligro")
    }
    saludos() {
        window.location.href = "../vista/calendario.php";
    }
    frases_comunes() {
        window.location.href = "../vista/frases_comunes.php";
    }

}


var nuevav = new NuevaVentana();

function abc(){
    nuevav.abecedario();    
}
function salu2(){
    nuevav.saludos();    
}
function frases(){
    nuevav.frases_comunes();    
}

/*const p= new pre();
var b1= document.getElementById("c");
b1.onclick= function(){
    p.hola();  
    return false;
} 
document.getElementById("c").addEventListener('click', function(){
   p.hola(); 
//});*///
