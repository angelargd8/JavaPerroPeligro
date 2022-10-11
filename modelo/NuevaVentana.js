
//function init(){

    
//}


class NuevaVentana{
    constructor() 
    {

    }
    abecedario() {
        /*document.write("aa");*/
        window.location.href = "../vista/abecedario.html";
        //alert("perro peligro")
    }
    saludos() {
        window.location.href = "../vista/saludos.html";
    }
    frases_comunes() {
        window.location.href = "../vista/frases_comunes.html";
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
});*/
    
