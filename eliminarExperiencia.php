<?php
include_once 'conexioBD.php';
?>
<?php
    $id=$_GET['id'];

$sSQL="DELETE FROM experiencies WHERE id=$id";
if(!mysqli_query($conexio, $sSQL)) echo "false";
else echo "Eliminada";
?>
<button type='button' class='btn btn-primary' onclick='mostrarLlistat()'>Torna al llistat d'experiencies</button>