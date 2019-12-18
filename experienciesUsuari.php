    <h1>Editar experiencies</h1>
    <?php
        include_once 'conexioBD.php';
    ?>
    <?php
        session_start();
        $nomUsuari = $_SESSION['login_user'];
        $sql = "SELECT id FROM usuaris WHERE nomUsuari='$nomUsuari'";

        $resultats = mysqli_query($conexio, $sql);
        
        foreach($resultats as $resultat){
            $idUsuari = $resultat['id'];
        }

        $sSQL="SELECT * FROM experiencies WHERE idUsuari=$idUsuari";

        $result=mysqli_query($conexio, $sSQL);
        foreach($result as $reesult){
            echo "<hr class='featurette-divider'>" .
            "<div class='row featurette experiencia' id=" . $reesult['id'] ." onclick=modificarExperienciaFormulari(this.id);>" .
            "<div class='col-md-7'>" .
            "<h2 class='featurette-heading'>" .
            $reesult['titol'] .
            "</h2>
            <p class='lead cortar-largo'>" .
            $reesult['text'] . "</p>
            </div>
            <div class='col-md-5'>
            <img src='img_experiencies/" . $reesult['imatge'] . "' width='450' height='450' style='object-fit: cover'/>
            </div>
            </div>";
        }
    ?>
        <button type='button' class='btn btn-primary' onclick='mostrarLlistat()'>Torna al llistat d'experiencies</button>
</div>