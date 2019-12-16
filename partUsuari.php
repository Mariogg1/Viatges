<!DOCTYPE html>
  <html lang="es">
    <head>
    <?php
        include_once 'declaracio.php';
    ?>
    </head>
    <body>
      <button type="button" class="btn btn-primary" onclick="location.href='index.php'">Torna a la pagina d'inici</button>
      <?php 
        $cont = file_get_contents("footer.php"); 
        echo $cont;
      ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  </body>
</html>