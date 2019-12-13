<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v3.8.6">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Usuari registrat</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Bootstrap core CSS -->
      <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">       
      <!-- Favicons -->
      <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
      <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
      <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
      <meta name="theme-color" content="#563d7c">
      <!-- Custom styles for this template -->
      <link href="carousel.css" rel="stylesheet">
      <script src="js/mostrar.js"></script>
    </head>
    <body>
      <?php 
        $cont = file_get_contents("header.php"); 
        echo $cont;
      ?>
      <main role="main">
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">
        <button type="button" class="btn btn-primary" onclick="location.href='afegirExp.php'">Afegeix una experiencia</button>
      <!-- Three columns of text below the carousel -->
          <div class="botones">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
              <select class="selector" form="categories">
                <option value disabled selected>Llistar per:</option>
                <option value="data" id="data">Data</option>
                <option value="puntuacio" id="puntuacio">Puntuació</option>
              </select>
           </div> 
            <h1>Llistat d'experiències</h1>

            <script>
              function myFunction() {
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName("li");
                for (i = 0; i < li.length; i++) {
                  a = li[i].getElementsByTagName("a")[0];
                  txtValue = a.textContent || a.innerText;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                  } else {
                    li[i].style.display = "none";
                  }
                }
              }
            </script>
        <div class="wrapper fadeInDown">
          <div id="formContent">
        <!-- START THE FEATURETTES -->

            <?php
            include_once 'mostrar-experiencia.php';
            ?>
            
            <!-- /END THE FEATURETTES -->
            <!-- FOOTER -->
            <?php 
              $cont = file_get_contents("footer.php"); 
              echo $cont;
            ?>
          </div>
    
  </body>
</html>