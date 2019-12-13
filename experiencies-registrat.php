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