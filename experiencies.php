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
        /*foreach($result as $resultat){
            $idUsuari=$resultat['idUsuari'];
            $titol=$resultat['titol'];
            $dataPublicacio=$resultat['dataPublicacio'];
            $text=$resultat['text'];
            $imatge=$resultat['imatge'];
            $idCategoria=$resultat['idCategoria'];
        }*/
        foreach($result as $reesult){
            echo "<hr class='featurette-divider'>" .
            "<div class='row featurette experiencia' id=" . $reesult['id'] . ">" .
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
        <!--<form>
            <input type="hidden" name="idUsuari" value="<?php echo $idUsuari?>"><br>
            <br>Titol:<br>
            <input type="text" name="titol" value="<?php echo $titol?>"><br>
            <br>Data publicació:<br>
            <input type="text" name="dataPublicacio" value="<?php echo $dataPublicacio?>"><br>
            <br>Text:<br>
            <input type="text" name="text" value="<?php echo $text?>"><br>
            <br>Imatge:<br>
            <input type="text" name="imatge" value="<?php echo $imatge?>"><br>
            <br>idCategoria:<br>
            <input type="text" name="idCategoria" value="<?php echo $idCategoria?>"><br>
        </form>
        <button type='button' class='btn btn-primary' onclick='mostrarLlistat()'>Torna al llistat d'experiencies</button>
-->
</div>