function mostrarExperienciesUsuari() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("experiencia").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","experienciesUsuari.php",true);
    xmlhttp.send();
}

function modificarExperienciaFormulari(id) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("experiencies-header").style.display="none";
            document.getElementById("experiencia").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","modificarExperiencia-formulari.php?id="+id,true);
    xmlhttp.send();
}

function modificarExperiencia(id, idUsuari, titol, dataPublicacio, text, imatge, idCategoria) {
    $id=id;
    $idUsuari=idUsuari;
    $titol=titol;
    $dataPublicacio=dataPublicacio;
    $text=text;
    $imatge=imatge;
    $idCategoria=idCategoria;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("experiencia").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","modificarExperiencia.php?id="+$id+"&idUsuari="+$idUsuari+"&titol="+$titol+"&dataPublicacio="+$dataPublicacio+"&text="+$text+"&imatge="+$imatge+"&idCategoria="+$idCategoria,true);
    xmlhttp.send();
}

function eliminarExperiencia(id){
    $id = id;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("experiencia").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","eliminarExperiencia.php?id="+$id,true);
    xmlhttp.send();
}