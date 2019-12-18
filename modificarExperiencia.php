<?php
include_once 'conexioBD.php';
?>
<?php
    $id=$_GET['id'];
    $idUsuari=$_GET['idUsuari'];
    $titol=$_GET['titol'];
    $text=$_GET['text'];
    $idCategoria=$_GET['idCategoria'];

$sSQL="UPDATE experiencies SET titol='$titol', text='$text', idCategoria=$idCategoria WHERE id=$id";
if(!mysqli_query($conexio, $sSQL)) echo "false";
?>
<button type='button' class='btn btn-primary' onclick='mostrarLlistat()'>Torna al llistat d'experiencies</button>