  <main role="main">
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">
    <div class="row">
      <div class="col-md-3">
        <button type="button" class="btn btn-primary" onclick="location.href='afegirExp.php'">Afegeix una experiencia</button>
      </div>
      <div class="col-md-6"></div>
      <div class="col-md-3">
        <div class="row">
          <form action="javascript:void(0)" method="POST" onsubmit="buscar(this.palabra.value)">
            <input type="text" name="palabra" placeholder="Cerca">
            <input type="submit" name="buscador" value="Buscar">
          </form>
        </div>
        <div class="row">
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <h1>Llistat d'experiències</h1>
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-4">
        <select class="selector" onchange="filtrarLlistat(this.value)">
          <option value disabled selected>Categories:</option>
          <?php

            include_once 'conexioBD.php';

            $sql = "SELECT * FROM categories";

            $resultats = mysqli_query($conexio, $sql);

            foreach($resultats as $resultat){
              echo "<option value='" . $resultat['id'] . "'>" . $resultat['nom'] . "</option>";
            }

          ?>
        </select>
        <select class="selector">
          <option value disabled selected>Llistar per:</option>
          <option value="data" id="data">Data</option>
          <option value="puntuacio" id="puntuacio">Puntuació</option>
        </select>
      </div>
    </div>
    

    <div class="wrapper fadeInDown">
      <div id="formContent">
    <!-- START THE FEATURETTES -->

        <?php
        include_once 'mostrar-experiencia.php';
        ?>
        
        <!-- /END THE FEATURETTES -->
      </div>
    </div>
  </div> 
  </body>
</html>