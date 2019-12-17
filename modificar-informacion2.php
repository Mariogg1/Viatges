<div id="experiencia">
<?php
include_once 'conexioBD.php';
?>
<?php
$id=$_POST['id'];
$nomUsuari=$_POST['nomUsuari'];
$contrasenya=$_POST['contrasenya'];
$nom=$_POST['nom'];
$primercognom=$_POST['primerCognom'];
$segoncognom=$_POST['segonCognom'];
$correuElectronic=$_POST['correuElectronic'];
$sSQL="UPDATE usuaris SET nomUsuari='$nomUsuari', contrasenya='$contrasenya', nom='$nom', primerCognom='$primercognom', segonCognom='$segoncognom', correuelectronic='$correuElectronic' WHERE id=$id";
echo "S'ha actualitzat";
mysqli_query($conexio, $sSQL);
?>
<button type='button' class='btn btn-primary' onclick='mostrarLlistat()'>Torna al llistat d'experiencies</button>
</div>