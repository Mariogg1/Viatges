<?php

include_once 'conexioBD.php';

$id = $_GET['id'];

$sql = "SELECT * FROM experiencies WHERE idCategoria = $id";

$experiencies = mysqli_query($conexio, $sql);

$i = 0;
foreach($experiencies as $experiencia){
    if($i % 2 == 0){
        echo "<hr class='featurette-divider'>" .
        "<div class='row featurette experiencia' id=" . $experiencia['id'] . " onclick='mostrarExperiencies(this.id)'>" . 
        "<div class='col-md-7'>" . 
        "<h2 class='featurette-heading'>" . 
        $experiencia['titol'] . 
        "</h2>
        <p class='lead cortar-largo'>" . 
        $experiencia['text'] . "</p>
        </div>
        <div class='col-md-5'>
        <img src='img_experiencies/" . $experiencia['imatge'] . "' width='450' height='450' style='object-fit: cover'/>
        </div>
        </div>";
        $i++;
    }else{

        echo "<hr class='featurette-divider'>" .
        "<div class='row featurette experiencia' id=" . $experiencia['id'] . " onclick='mostrarExperiencies(this.id)'>" . 
        "<div class='col-md-7 order-md-2'>" . 
        "<h2 class='featurette-heading'>" . 
        $experiencia['titol'] . 
        "</h2>
        <p class='lead cortar-largo'>" . 
        $experiencia['text'] . "</p>
        </div>
        <div class='col-md-5 order-md-1'>
        <img src='img_experiencies/" . $experiencia['imatge'] . "' width='450' height='450' style='object-fit: cover'/>
        </div>
        </div>";
        $i++;
    }
}

?>