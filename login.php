<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "viatges";

    $conexio = mysqli_connect($host, $user, $password, $db);
    mysqli_set_charset($conexio,"utf8");


    if(!$conexio){
        echo "Ha fallat la conexió amb la base de dades";
    }

?>