<?php

    include_once 'conexioBD.php';

    if($_POST){
        if(!empty($_POST['titol']) && !empty($_POST['text'])){

            $titol = htmlspecialchars($_POST['titol']);
            $text = htmlspecialchars($_POST['text']);
            $nomImg = basename($_FILES['imgExperiencia']['name']);
            
            $sqlComprovacioExistencia = "SELECT titol FROM experiencies WHERE titol = '$titol'";
            if(mysqli_num_rows(mysqli_query($conexio, $sqlComprovacioExistencia))){
                echo "Ja existeix una experiencia amb aquest nom.";
            }else{

                // Guardar la imatge al directori
                if(!move_uploaded_file($_FILES['imgExperiencia']['tmp_name'], "img_experiencies/$nomImg")){
                    echo "Error al desar la imatge.";
                }

                //Pujar experiencia a la BD
                $sql = "INSERT INTO experiencies(titol, text, imatge) VALUES('$titol', '$text', '$nomImg')";
    
                if(!mysqli_query($conexio, $sql)){
                    echo "Error al inserir experiencia";
                }
            }
        }else{
            echo "Falten dades";
        }
    }else{

?>

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
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titol">Titol:</label>
                        <input type="text" class="form-control" name="titol">
                    </div>
                    <div class="form-group">
                        <label for="text">Text:</label>
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">Text:</label>
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img-experiencia">Imatge:</label>
                        <input type="file" name="imgExperiencia"
                        class="form-control-file" id="exampleFormControlFile1" ><br>
                    </div>
                    <input type="submit" value="Afegir"></input>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
    <?php 
        $cont = file_get_contents("footer.php"); 
        echo $cont;
    ?>
    </body>
</html>
<?php
    }
?>