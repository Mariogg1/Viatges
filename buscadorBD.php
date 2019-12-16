<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        <?php 
            $cont = file_get_contents("header.php"); 
            echo $cont;
        ?>
        <?php
        include('conexioBD.php');
        if (isset($_POST['buscador'])){
            // Tomamos el valor ingresado
            $buscar = mysqli_real_escape_string($conexio, $_POST['palabra']);

            // Si está vacío, lo informamos, sino realizamos la búsqueda
            if (empty($buscar)){
                echo "No se ha ingresado una cadena a buscar";
            }else{
                $sql = "SELECT * FROM experiencies WHERE titol LIKE '%$buscar%'";
            $result = mysqli_query($conexio, $sql);
                if ($result === false){
                    echo mysqli_error($conexio);
                }else{
                    $total = mysqli_num_rows($result);
                    // Imprimimos los resultados
                    if ($row = mysqli_fetch_array($result)){
                        echo "Resultados para: <b>$buscar</b>";
                        do {
                            echo "<h2 class='featurette-heading'>" .  $row['titol'] . "</h2>
                            <p class='lead cortar-largo'>" . $row['text'] . "</p>
                            <p>
                            </div>
                            <div class='col-md-5'>
                            <img src='img_experiencies/" . $row['imatge'] . "' width='450' height='450' style='object-fit: cover'/>";
                        }while ($row = mysqli_fetch_array($result));
                            echo "<p>Resultados: $total</p>";
                    }else{
                        // En caso de no encontrar resultados
                        echo "No se encontraron resultados para: $buscar";
                    }
                }
            }
        }
        ?>
        <?php 
            $cont = file_get_contents("footer.php"); 
            echo $cont;
        ?>
    </body>
</html>