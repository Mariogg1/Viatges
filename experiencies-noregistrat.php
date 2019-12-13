<main role="main">
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
          <!-- Three columns of text below the carousel -->
          <div class="row">
            <?php
              include_once 'conexioBD.php';
              $sql = "SELECT * FROM experiencies ORDER BY ID DESC LIMIT 3";
              $experiencies = mysqli_query($conexio, $sql);
              foreach($experiencies as $experiencia){
                echo "<div class='col-lg-4'>" .
                "<img class='img-experiencia' src='img_experiencies/" . $experiencia['imatge'] . "' style='object-fit: cover'>
                <h2>" . $experiencia['titol'] . "</h2>
                <p class='cortar'>" . $experiencia['text'] . "</p>
                <p><a class='btn btn-secondary' href='#' role='button'>Veure més</a></p>
                </div>";
              }
            ?>
          </div>
          <!-- /.row -->
          <div class="wrapper fadeInDown">
            <div id="formContent">
          <!-- FOOTER -->
            <?php 
              $cont = file_get_contents("footer.php"); 
              echo $cont;
            ?>
      </main>
      <!--
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
            -->
      </body>
</html>