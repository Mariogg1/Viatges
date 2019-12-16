<?php

include_once 'conexioBD.php';

$id = $_GET['id'];

$sql = "UPDATE experiencies SET valoracionsNegatives = valoracionsNegatives + 1 WHERE id = $id";

if(!mysqli_query($conexio, $sql)){
    echo "like no afegit";
}

$sql = "SELECT valoracionsNegatives FROM experiencies WHERE id = $id";

$resultat = mysqli_query($conexio, $sql);

foreach($resultat as $res){
    echo $res['valoracionsNegatives'];
}

?>