<?php

    $host = "192.168.219.132";
    $user = "grup3";
    $password = "grup3";
    $db = "viatges";

    $conexio = mysqli_connect($host, $user, $password, $db);
    mysqli_set_charset($conexio,"utf8");


    if(!$conexio){
        echo "Ha fallat la conexió amb la base de dades";
    }

?>