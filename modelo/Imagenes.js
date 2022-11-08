/*Universidad del Valle de Guatemala
Programación Orientada a Objetos, Sección 20
Ludwing Cano
Autores: 
    Angela García, 22869
    Francis Aguilar, 2243
    Gerardo Pineda, 22880
    Fernando Echeverría, 22610
*/


class imagen{
    refImagen = "";
    constructor(){
        
    }
    img = ["../ImagenesVideos/abcdario/A.jpg","../ImagenesVideos/abcdario/B.jpg","../ImagenesVideos/abcdario/C.jpg",
    "../ImagenesVideos/abcdario/D.jpg", "../ImagenesVideos/abcdario/E.jpg","../ImagenesVideos/abcdario/F.jpg","../ImagenesVideos/abcdario/G.jpg","../ImagenesVideos/abcdario/H.jpg",
    "../ImagenesVideos/abcdario/I.jpg","../ImagenesVideos/abcdario/J.jpg", "../ImagenesVideos/abcdario/K.jpg", "../ImagenesVideos/abcdario/L.jpg", 
    "../ImagenesVideos/abcdario/M.jpg", "../ImagenesVideos/abcdario/N.jpg","../ImagenesVideos/abcdario/ene.jpg", "../ImagenesVideos/abcdario/O.jpg", "../ImagenesVideos/abcdario/P.jpg", 
    "../ImagenesVideos/abcdario/Q.jpg", "../ImagenesVideos/abcdario/R.jpg", "../ImagenesVideos/abcdario/S.jpg", "../ImagenesVideos/abcdario/T.jpg",
    "../ImagenesVideos/abcdario/U.jpg", "../ImagenesVideos/abcdario/V.jpg", "../ImagenesVideos/abcdario/W.jpg","../ImagenesVideos/abcdario/X.jpg", 
    "../ImagenesVideos/abcdario/Y.jpg", "../ImagenesVideos/abcdario/Z.jpg"];

    linkLetra(letra){
        switch (letra) {
            case "A":
                this.refImagen = this.img[0];
                break;
            case "B":
                this.refImagen = this.img[1];
                break;
            case "C":
                this.refImagen = this.img[2];
                break;
            case "D":
                this.refImagen = this.img[3];
                break;
            case "E":
                this.refImagen = this.img[4];
                break;
            case "F":
                this.refImagen = this.img[5];
                break;
            case "G":
                this.refImagen = this.img[6];
                break;
            case "H":
                this.refImagen = this.img[7];
                break;
            case "I":
                this.refImagen = this.img[8];
                break;
            case "J":
                this.refImagen = this.img[9];
                break;
            case "K":
                this.refImagen = this.img[10];
                break;
            case "L":
                this.refImagen = this.img[11];
                break;
            case "M":
                this.refImagen = this.img[12];
                break;
            case "N":
                this.refImagen = this.img[13];
                break;
            case "ene":
                this.refImagen = this.img[14];
                break;
            case "O":
                this.refImagen = this.img[15];
                break;
            case "P":
                this.refImagen = this.img[16];
                break;
            case "Q":
                this.refImagen = this.img[17];
                break;
            case "R":
                this.refImagen = this.img[18];
                break;
            case "S":
                this.refImagen = this.img[19];
                break;
            case "T":
                this.refImagen = this.img[20];
                break;
            case "U":
                this.refImagen = this.img[21];
                break;
            case "V":
                this.refImagen = this.img[22];
                break;
            case "W":
                this.refImagen = this.img[23];
                break;
            case "X":
                this.refImagen = this.img[24];
                break;
            case "Y":
                this.refImagen = this.img[25];
                break;
            case "Z":
                this.refImagen = this.img[26];
                break;
            default:
                break;
        }
        return this.refImagen;
    }
    


}

var img = new imagen();
//alert(img.linkLetra("A"))

function hrefImagen(letra){
    //alert(letra);
    return img.linkLetra(letra);
    
}