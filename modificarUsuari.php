<div id="experiencia">
<?php
include_once 'conexioBD.php';
?>
<?php
$id=$_GET['id'];
$nomUsuari=$_GET['nomUsuari'];
$contrasenya=$_GET['contrasenya'];
$nom=$_GET['nom'];
$primercognom=$_GET['primercognom'];
$segoncognom=$_GET['segoncognom'];
$correuElectronic=$_GET['correuelectronic'];
$sSQL="UPDATE usuaris SET nomUsuari='$nomUsuari', contrasenya='$contrasenya', nom='$nom', primercognom='$primercognom', segoncognom='$segoncognom', correuelectronic='$correuElectronic' WHERE id=$id";
session_start();
$_SESSION['login_user']=$nomUsuari;
echo "S'ha actualitzat";
mysqli_query($conexio, $sSQL);
?>
<button type='button' class='btn btn-primary' onclick='mostrarLlistat()'>Torna al llistat d'experiencies</button>
</div>