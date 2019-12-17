<?php

    $nomUsuari = $_SESSION['login_user'];

    include_once 'conexioBD.php';

    $sql = "SELECT id, nomUsuari FROM usuaris WHERE nomUsuari='$nomUsuari'";

    $resultats = mysqli_query($conexio, $sql);

    foreach($resultats as $resultat){
        $id = $resultat['id'];
    }

    $sql = "SELECT idUsuari FROM administradors WHERE idUsuari=$id";

    $resultat = mysqli_query($conexio, $sql);

?>
        <div class="col-md-3">
            <p class="benvinguda">BENVINGUT! <?php echo $_SESSION['login_user'] ?></p>
            <div class="row">
                <?php
                if(mysqli_num_rows($resultat)==1){
                    echo "<a href='admin.php'>Secció d'Administrador</a>";
                }    
                ?>
            </div>
            <div class="row">
                <a href="logout.php">Sortir</a> 
            </div>  
        </div>
    </nav>
</header>