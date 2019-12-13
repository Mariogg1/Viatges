// Login button

window.onload = function(){
    document.getElementById("login-select").addEventListener("click", function(){
        document.getElementById("login-register").style.display="none";
        document.getElementById("login-form").style.display="block";
     })

     document.getElementById("login-cancela").addEventListener("click", function(){
        document.getElementById("login-register").style.display="block";
        document.getElementById("login-form").style.display="none";
     })
}