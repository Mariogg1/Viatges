function mostrarModificacio() {
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
    xmlhttp.open("GET","modificar-informacion.php",true);
    xmlhttp.send();
}