<div id="experiencia">
<?php

include_once 'conexioBD.php';



if(!$_GET){

    $sql ="SELECT * FROM experiencies";
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
}else{

    $id = intval($_GET['q']);

    $sql ="SELECT * FROM experiencies WHERE id = $id";
    $experiencies = mysqli_query($conexio, $sql);

    $i = 0;
    foreach($experiencies as $experiencia){
            echo "<hr class='featurette-divider'>" .
            "<div class='row featurette' id=" . $experiencia['id'] . ">
            <h2 class='featurette-heading'>" . 
            $experiencia['titol'] . 
            "</h2></div></div><div class='col-md-12'>" . 
           
            "<img src='img_experiencies/" . $experiencia['imatge'] . "' width='450' height='450' style='object-fit: cover; float: right'/>" . 
            $experiencia['text'] .
            "<p>
            </div>
            </div>
            <div class='row'>
            <div class='col-md-8'></div>
            <div class='col-md-2 div-img-button align-center'>
            <img id='like-button' class='img-button' src='icons/heart-fill.svg' width='32' height='32' onclick='addLike( " . $experiencia['id'] . ")'>
            </div>
            <div class='col-md-2 div-img-button align-center'>
            <img id='like-button' class='img-button' src='icons/x-square-fill.svg' width='32' height='32' onclick='addDislike( " . $experiencia['id'] . ")'>
            </div>
            </div>
            <div class='row'>
            <div class='col-md-8'></div>
            <div class='col-md-2 div-img-button align-center'>
            <p><span id='like-num'>" . $experiencia['valoracionsPositives'] . "</span> Likes</p>
            </div>
            <div class='col-md-2 div-img-button align-center'>
            <p><span id='dislike-num'>" . $experiencia['valoracionsNegatives'] . "</span> Dislikes</p>
            </div>
            </div>
            <button type='button' class='btn btn-primary' onclick='mostrarLlistat()'>Torna al llistat d'experiencies</button>
            ";
            $i++;
    }
}
?>
</div>