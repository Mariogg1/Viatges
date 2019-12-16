<?php
include('conexioBD.php');
if (isset($_GET['paraula'])){
    // Tomamos el valor ingresado
    $buscar = htmlspecialchars($_GET['paraula']);

    // Si está vacío, lo informamos, sino realizamos la búsqueda
    if (empty($buscar)){
        echo "No se ha ingresado una cadena a buscar";
    }else{
        $sql = "SELECT * FROM experiencies WHERE titol LIKE '%$buscar%'";
        $experiencies = mysqli_query($conexio, $sql);
        if ($experiencies === false){
            echo mysqli_error($conexio);
        }else{
            $total = mysqli_num_rows($experiencies);
            // Imprimimos los resultados
            if ($total > 0){
                echo "Resultados para: <b>$buscar</b>";
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
                // En caso de no encontrar resultados
                echo "No se encontraron resultados para: $buscar";
            }
        }
    }
}
?>
<button type='button' class='btn btn-primary' onclick='mostrarLlistat()'>Torna al llistat d'experiencies</button>
</div>
</body>