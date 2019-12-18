<?php
include_once 'conexioBD.php';
?>
<?php
    $id=$_GET['id'];
    $idUsuari=$_GET['idUsuari'];
    $titol=$_GET['titol'];
    $dataPublicacio=$_GET['dataPublicacio'];
    $text=$_GET['text'];
    $imatge=$_GET['imatge'];
    $idCategoria=$_GET['idCategoria'];

$sSQL="UPDATE experiencies SET idUsuari=$idUsuari, titol='$titol', dataPublicacio='$dataPublicacio', text='$text', imatge='$imatge', idCategoria=$idCategoria WHERE id=$id";
echo $sSQL;
if(!mysqli_query($conexio, $sSQL)) echo "false";
?>
<button type='button' class='btn btn-primary' onclick='mostrarLlistat()'>Torna al llistat d'experiencies</button>