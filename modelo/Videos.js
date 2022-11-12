/*Universidad del Valle de Guatemala
Programación Orientada a Objetos, Sección 20
Ludwing Cano
Autores: 
    Angela García, 22869
    Francis Aguilar, 2243
    Gerardo Pineda, 22880
    Fernando Echeverría, 22610
*/


class video{
    refVideo = "";
    constructor(){
        
    }
    vd = [
    // frases comunes     
    "../frasescomunes/adios.mp4","../frasescomunes/apodo.mp4","../frasescomunes/bienvenido.mp4",
    "../frasescomunes/buenasnoches.mp4", "../frasescomunes/buenastardes.mp4",
    "../frasescomunes/comoestas.mp4",
    "../frasescomunes/cualestunombre.mp4","../frasescomunes/dondevives.mp4"
    ,"../frasescomunes/gracias.mp4", "../frasescomunes/guatemala.mp4", 
    "../frasescomunes/hola.mp4", 
    "../frasescomunes/minombrees.mp4", "../frasescomunes/nombre.mp4",
    // calendario
    "../calendario/abril.mp4",
    "../calendario/agosto.mp4", "../calendario/diasdelasemana.mp4", "../calendario/diciembre.mp4", 
    "../calendario/domingo.mp4", "../calendario/enero.mp4", "../calendario/febrero.mp4", 
    "../calendario/jueves.mp4", "../calendario/julio.mp4", "../calendario/junio.mp4", 
    "../calendario/lunes.mp4", "../calendario/martes.mp4", "../calendario/marzo.mp4", 
    "../calendario/mayo.mp4", "../calendario/mesesdelanio.mp4", "../calendario/miercoles.mp4", 
    "../calendario/noviembre.mp4","../calendario/octubre.mp4", "../calendario/sabado.mp4", 
    "../calendario/septiembre.mp4", "../calendario/viernes.mp4"];

    linkVideo(frase){
        switch (frase) {
            case "Adios":
                this.refVideo = this.vd[0];
                break;
            case "Apodo":
                this.refVideo = this.vd[1];
                break;
            case "Bienvenido":
                this.refVideo = this.vd[2];
                break;
            case "BuenasNoches":
                this.refVideo = this.vd[3];
                break;
            case "BuenasTardes":
                this.refVideo = this.vd[4];
                break;
            case "Comoestas":
                this.refVideo = this.vd[5];
                break;
            case "CualEsTuNombre":
                this.refVideo = this.vd[6];
                break;
            case "DondeVives":
                this.refVideo = this.vd[7];
                break;
            case "Gracias":
                this.refVideo = this.vd[8];
                break;
            case "Guatemala":
                this.refVideo = this.vd[9];
                break;
            case "Hola":
                this.refVideo = this.vd[10];
                break;
            case "MiNombreEs":
                this.refVideo = this.vd[11];
                break;
            case "Nombre":
                this.refVideo = this.vd[12];
                break;
            case "Abril":
                this.refVideo = this.vd[13];
                break;
            case "Agosto":
                this.refVideo = this.vd[14];
                break;    
            case "DiasDeLaSemana":
                this.refVideo = this.vd[15];
                break;     
            case "Diciembre":
                this.refVideo = this.vd[16];
                break;       
            case "Domingo":
                this.refVideo = this.vd[17];
                break;     
            case "Enero":
                this.refVideo = this.vd[18];
                break; 
            case "Febrero":
                this.refVideo = this.vd[19];
                break;
            case "Jueves":
                this.refVideo = this.vd[20];
                break;  
            case "Julio":
                this.refVideo = this.vd[21];
                break; 
            case "Junio":
                this.refVideo = this.vd[22];
                break; 
            case "Lunes":
                this.refVideo = this.vd[23];
                break; 
            case "Martes":
                this.refVideo = this.vd[24];
                break; 
            case "Marzo":
                this.refVideo = this.vd[25];
                break; 
            case "Mayo":
                this.refVideo = this.vd[26];
                break; 
            case "MesesDelAnio":
                this.refVideo = this.vd[27];
                break; 
            case "Miercoles":
                this.refVideo = this.vd[28];
                break; 
            case "Noviembre":
                this.refVideo = this.vd[29];
                break; 
            case "Octubre":
                this.refVideo = this.vd[30];
                break; 
            case "Sabado":
                this.refVideo = this.vd[31];
                break; 
            case "Septiembre":
                this.refVideo = this.vd[32];
                break; 
            case "Viernes":
                this.refVideo = this.vd[33];
                break; 
            default:
                break;
        }
        return this.refVideo;
    }
    

}

var vd = new video();
console.log(hrefVideo("Gracias"), vd[8]);

function hrefVideo(frase){
    return vd.linkVideo(frase);
}