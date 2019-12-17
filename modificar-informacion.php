<div id="experiencia">
<h1>Actualizar un registro</h1>
<?php
    include_once 'conexioBD.php';
?>

<?php
    if(!isset($_SESSION['login_user'])){
        session_start();
    }
    $id=$_SESSION['login_user'];
    echo '<FORM METHOD="POST" ACTION="modificar-informacion2.php"><br>';


    //Creamos la sentencia SQL y la ejecutamos
    $sSQL="Select * From usuaris Where nomUsuari='$id'";
    $result=mysqli_query($conexio, $sSQL);
    foreach($result as $resultat){
        $id=$resultat['id'];
        $nomUsuari=$resultat['nomUsuari'];
        $contrasenya=$resultat['contrasenya'];
        $nom=$resultat['nom'];
        $primercognom=$resultat['primerCognom'];
        $segoncognom=$resultat['segonCognom'];
        $correuelectronic=$resultat['correuElectronic'];
        $estat=$resultat['estat'];
    }
    ?>
    <input type="hidden" name="id" value="<?php echo $id?>"><br>
    <br>Nom usuari:<br>
    <input type="text" name="nomUsuari" value="<?php echo $nomUsuari?>"><br>
    <br>Contrasenya:<br>
    <input type="text" name="contrasenya" value="<?php echo $contrasenya?>"><br>
    <br>Nom:<br>
    <input type="text" name="nom" value="<?php echo $nom?>"><br>
    <br>Primer cognom:<br>
    <input type="text" name="primerCognom" value="<?php echo $primercognom?>"><br>
    <br> Segon cognom:<br>
    <input type="text" name="segonCognom" value="<?php echo $segoncognom?>"><br>
    <br> Correu electronic: <br>
    <input type="text" name="correuElectronic" value="<?php echo $correuelectronic?>"><br>
    <input type="SUBMIT" value="Actualizar">
    </FORM>
    <button type='button' class='btn btn-primary' onclick='mostrarLlistat()'>Torna al llistat d'experiencies</button>
</div>