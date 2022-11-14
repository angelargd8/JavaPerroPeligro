const arrImg = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","ene","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
const arrVid = ["Adios","Apodo","Bienvenido","BuenasNoches","BuenasTardes","Comoestas","CualEsTuNombre","DondeVives","Gracias","Guatemala","Hola","MiNombreEs","Nombre","Abril","Agosto","DiasDeLaSemana","Diciembre","Domingo","Enero","Febrero","Jueves","Julio","Junio","Lunes","Martes","Marzo","Mayo","MesesDelAnio","Miercoles","Noviembre","Octubre","Sabado","Septiembre","Viernes"];

let posImg1 = Math.floor(Math.random() * arrImg.length);
let posImg2 = Math.floor(Math.random() * arrImg.length);

let posVid1 = Math.floor(Math.random() * arrVid.length);
let posVid2 = Math.floor(Math.random() * arrVid.length);

var im = document.getElementById("im");
im.setAttribute("src",hrefVideo(arrVid[posVid2]));
var im2 = document.getElementById("vid2");
//console.log(im2)
im2.setAttribute("src",hrefVideo(arrVid[posVid1]));

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