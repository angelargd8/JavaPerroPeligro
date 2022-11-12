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
    vd = ["../frasescomunes/adios.mp4","../frasescomunes/apodo.mp4","../frasescomunes/bienvenido.mp4",
    "../frasescomunes/buenasnoches.mp4", "../frasescomunes/buenastardes.mp4","../frasescomunes/comoestas.mp4","../frasescomunes/cualestunombre.mp4","../frasescomunes/dondevives.mp4",
    ,"../frasescomunes/gracias.mp4", "../frasescomunes/guatemala.mp4", "../frasescomunes/hola.mp4", 
    "../frasescomunes/minombrees.mp4", "../frasescomunes/nombre.mp4"];

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
            default:
                break;
        }
        return this.refVideo;
    }
    


}

var vd = new video();

function hrefVideo(frase){
    //alert(frase);
    return vd.linkVideo(frase);
    
}