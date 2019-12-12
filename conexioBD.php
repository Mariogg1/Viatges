<?php

    $host = "labs.iam.cat";
    $user = "a14alerevagu_adm";
    $password = "12341234";
    $db = "a14alerevagu_viatges";

    $conexio = mysqli_connect($host, $user, $password, $db);
    mysqli_set_charset($conexio,"utf8");


    if(!$conexio){
        echo "Ha fallat la conexió amb la base de dades";
    }

?>