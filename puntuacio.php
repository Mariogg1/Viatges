<?php
include_once 'conexioBD.php';
$sql = "SELECT * FROM experiencies ORDER BY valoracionsPositives";
$experiencies = mysqli_query($conexio, $sql);

$i = 0;
foreach($experiencies as $experiencia){
  if($i % 2 == 0){
    echo "<hr class='featurette-divider'>" .
    "<div class='row featurette'>" . 
    "<div class='col-md-7'>" . 
    "<h2 class='featurette-heading'>" . 
    $experiencia['titol'] . 
    "</h2>
    <p class='lead cortar-largo'>" . 
    $experiencia['text'] . "</p>
    <p>
    </div>
    <div class='col-md-5'>
    <svg class='bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto' width='500' height='500' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: 500x500'><title>Placeholder</title><rect width='100%' height='100%' fill='#eee'></rect><text x='50%' y='50%' fill='#aaa' dy='.3em'>500x500</text></svg>
    </div>
    </div>";
    $i++;
  }else{
    echo "<hr class='featurette-divider'>" .
      "<div class='row featurette'>" . 
      "<div class='col-md-7 order-md-2'>" . 
      "<h2 class='featurette-heading'>" . 
      $experiencia['titol'] . 
      "</h2>
      <p class='lead cortar-largo'>" . 
      $experiencia['text'] . "</p>
      <p>
      </div>
      <div class='col-md-5 order-md-1'>
      <svg class='bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto' width='500' height='500' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: 500x500'><title>Placeholder</title><rect width='100%' height='100%' fill='#eee'></rect><text x='50%' y='50%' fill='#aaa' dy='.3em'>500x500</text></svg>
      </div>
      </div>";
      $i++;
  }
}
?>