


function getUrlVars() { 
    var vars = {}; 
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) { 
    vars[key] = value; 
    });
    return vars;
}


function getVideo(){
    console.log(getUrlVars()["valor"]);
    return  getUrlVars()["valor"];
}

var vid = document.getElementById("vid");
//console.log(im);
vid.setAttribute("src",hrefVideo(getVideo()));

//('<img src="'+hrefImagen(getLetra())+'" height="700" width="400">');