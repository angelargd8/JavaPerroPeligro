


class imagen{
    refImagen = "";
    constructor(){
        
    }
    img = ["../abcdario/A.jpg","../abcdario/B.jpg","../abcdario/C.jpg",
    "../abcdario/D.jpg", "../abcdario/F.jpg","../abcdario/G.jpg","../abcdario/H.jpg",
    "../abcdario/I.jpg","../abcdario/J.jpg", "../abcdario/K.jpg", "../abcdario/L.jpg", 
    "../abcdario/M.jpg", "../abcdario/N.jpg", "../abcdario/O.jpg", "../abcdario/P.jpg", 
    "../abcdario/Q.jpg", "../abcdario/R.jpg", "../abcdario/S.jpg", "../abcdario/T.jpg",
    "../abcdario/U.jpg", "../abcdario/V.jpg", "../abcdario/W.jpg","../abcdario/X.jpg", 
    "../abcdario/Y.jpg", "../abcdario/Z.jpg"];

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
            default:
                break;
        }
        return this.refImagen;
    }
    


}

var img = new imagen();
//const ima=document.getElementById("ima");
function hrefImagen(letra){
    return img.linkLetra(letra);
}