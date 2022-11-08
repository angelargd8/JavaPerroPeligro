


function getUrlVars() { 
    var vars = {}; 
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) { 
    vars[key] = value; 
    });
    return vars;
}


function getLetra(){
    console.log(getUrlVars()["valor"]);
    return  getUrlVars()["valor"];
}

var im = document.getElementById("im");
console.log(im);
im.setAttribute("src",hrefImagen(getLetra()));

//('<img src="'+hrefImagen(getLetra())+'" height="700" width="400">');