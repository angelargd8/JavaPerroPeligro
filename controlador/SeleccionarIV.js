const arrImg = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","ene","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
const arrVid = ["Adios","Apodo","Bienvenido","BuenasNoches","BuenasTardes","Comoestas","CualEsTuNombre","DondeVives","Gracias","Guatemala","Hola","MiNombreEs","Nombre","Abril","Agosto","DiasDeLaSemana","Diciembre","Domingo","Enero","Febrero","Jueves","Julio","Junio","Lunes","Martes","Marzo","Mayo","MesesDelAnio","Miercoles","Noviembre","Octubre","Sabado","Septiembre","Viernes"];

let posImg1 = Math.floor(Math.random() * arrImg.length);
let posImg2 = Math.floor(Math.random() * arrImg.length);

let posVid1 = Math.floor(Math.random() * arrVid.length);
let posVid2 = Math.floor(Math.random() * arrVid.length);
let posVid3 = Math.floor(Math.random() * arrVid.length);
let posVid4 = Math.floor(Math.random() * arrVid.length);

var im = document.getElementById("im");
im.setAttribute("src",hrefVideo(arrVid[posVid1]));
console.log(arrVid[posVid1]);
console.log(arrVid[posVid2]);
console.log(arrVid[posVid3]);
console.log(arrVid[posVid4]);
var im2 = document.getElementById("vid2");
//console.log(im2)
im2.setAttribute("src",hrefVideo(arrVid[posVid2]));
var im3 = document.getElementById("vid3");
im3.setAttribute("src",hrefVideo(arrVid[posVid3]));
var im4 = document.getElementById("vid4");
im4.setAttribute("src",hrefVideo(arrVid[posVid4]));
document.getElementById("clickMe").onclick = revisarRespuestas;

function getPosImg1(){
    return posImg1;
}

function getPosImg2(){
    return posImg2;
}

function getPosVid1(){
    return posVid1;
}

function getPosVid2(){
    return posVid2;
}

function getArrI(){
    return arrImg;
}

function getArrVid(){
    return getArrVid;
}

function revisarRespuestas(){
    varlor = 0;
    r1 = document.getElementById("Rimg1").value;
    r1 = r1.replace(/\s/g, '');
    r2 = document.getElementById("Rimg2").value;
    r2 = r2.replace(/\s/g, '');
    r3 = document.getElementById("Rimg3").value;
    r3 = r3.replace(/\s/g, '');
    r4 = document.getElementById("Rimg4").value;
    r4 = r4.replace(/\s/g, '');
    if(r1.toLowerCase() == (arrVid[posVid1]).toLocaleLowerCase()){
        console.log("Buena1");
        varlor +=10;
    }
    if(r2.toLowerCase() == (arrVid[posVid2]).toLocaleLowerCase()){
        console.log("Buena2");
        varlor +=10;
    }
    if(r3.toLowerCase() == (arrVid[posVid3]).toLocaleLowerCase()){
        console.log("Buena3");
        varlor +=10;
    }
    if(r4.toLowerCase() == (arrVid[posVid4]).toLocaleLowerCase()){
        console.log("Buena4");
        varlor +=10;
    }
    window.location.replace("../vista/Repaso.php?valor="+varlor+"&cambio=si")
}