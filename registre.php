<?php

include_once 'login.php';

if($_POST){
    
    if(!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['primerCognom']) && !empty($_POST['segonCognom']) && !empty($_POST['nomUsuari']) && !empty($_POST['contrasenya']) && !empty($_POST['contrasenya-confirm'])){

        $email = htmlspecialchars($_POST['email']);
        $nom = htmlspecialchars($_POST['nom']);
        $primerCognom = htmlspecialchars($_POST['primerCognom']);
        $segonCognom = htmlspecialchars($_POST['segonCognom']);
        $nomUsuari = htmlspecialchars($_POST['nomUsuari']);
        $contrasenya = htmlspecialchars($_POST['contrasenya']);
        $contrasenyaConfirm = htmlspecialchars($_POST['contrasenya-confirm']);

        $sqlCorreu = "SELECT * FROM usuaris WHERE correuElectronic = '" . $email . "'";
        $sqlNomUsuari = "SELECT * FROM usuaris WHERE nomUsuari = '" . $nomUsuari . "'";
        
        if(mysqli_num_rows(mysqli_query($conexio, $sqlCorreu))){
            echo "El correu ja existeix";
        }elseif(mysqli_num_rows(mysqli_query($conexio, $sqlNomUsuari))){
            echo "El nom d'usuari ja existeix";
        }elseif($contrasenya != $contrasenyaConfirm){
            echo "Les contrasenyes no coincideixen";
        }else{
            $sql = "INSERT INTO usuaris(nomUsuari, contrasenya, nom, primerCognom, segonCognom,  correuElectronic) VALUES('$nomUsuari', '$contrasenya', '$nom', '$primerCognom', '$segonCognom', '$email')";

            if(!mysqli_query($conexio, $sql)){
                echo "Error al regitrar l'usuari";
            }
        }
    }else{
        echo "Falten dades";
    }
}else{

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registre</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="col-md-2">
                <img src="logo/logo.png" class="logo">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label for="email">Correu Electrònic:</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" name="nom">
        <div class="form-group">
            <label for="primerCognom">Primer Cognom:</label>
            <input type="text" class="form-control" name="primerCognom">
        </div>
        <div class="form-group">
            <label for="segonCognom">Segon Cognom:</label>
            <input type="text" class="form-control" name="segonCognom">
        </div>
        <div class="form-group">
            <label for="nomUsuari">Nom d'usuari:</label>
            <input type="text" class="form-control" name="nomUsuari">
        </div>
        <div class="form-group">
            <label for="contrasenya">Contrasenya:</label>
            <input type="password" class="form-control" name="contrasenya">
        </div>
        <div class="form-group">
            <label for="contrasenya-confirm">Confirma la contrasenya:</label>
            <input type="password" class="form-control" name="contrasenya-confirm">
        </div>

        </div>
        <button type="submit" class="btn btn-default">Envia</button>
        </form>

    </div>
    <div class="col-md-4"></div>
    </div>
</body>
</html>

<?php
}
?>

