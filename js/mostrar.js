function mostrarExperiencies(str) {
    if (str == "") {
        document.getElementById("experiencia").innerHTML = this.responseText;
        return;
    } else {
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
        xmlhttp.open("GET","mostrar-experiencia.php?q="+str,true);
        xmlhttp.send();
    }
}

function mostrarLlistat() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("experiencies-header").style.display="block";
            document.getElementById("experiencia").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","mostrar-experiencia.php",true);
    xmlhttp.send();
}