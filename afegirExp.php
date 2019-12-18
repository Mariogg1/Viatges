<?php

    include_once 'conexioBD.php';

    if($_POST){
        if(!empty($_POST['titol']) && !empty($_POST['text']) && !empty($_POST['categoria'])){

            $usuari = $_POST['idUsuari'];
            $titol = htmlspecialchars($_POST['titol']);
            $text = htmlspecialchars($_POST['text']);
            $categoria = $_POST['categoria'];
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
                $sql = "INSERT INTO experiencies(titol, text, imatge, idCategoria, idUsuari) VALUES('$titol', '$text', '$nomImg', $categoria, $usuari)";
    
                if(!mysqli_query($conexio, $sql)){
                    echo "Error al inserir experiencia";
                }
            }

            header("Location: index.php");

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
        include_once 'declaracio.php';
        include_once 'conexioBD.php';
        session_start();
        $nomUsuari = $_SESSION['login_user'];
        $sql = "SELECT id FROM usuaris WHERE nomUsuari='$nomUsuari'";

        $resultats = mysqli_query($conexio, $sql);
        
        foreach($resultats as $resultat){
            $idUsuari = $resultat['id'];
        }

    ?>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idUsuari" value="<?php echo $idUsuari?>">
                    <div class="form-group">
                        <label for="titol">Titol:</label>
                        <input type="text" class="form-control" name="titol">
                    </div>
                    <div class="form-group">
                        <label for="text">Text:</label>
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">Categoria:</label>
                        <select class="selector form-control" name="categoria">
                        <option value disabled selected>Categories:</option>
                        <?php

                            $sql = "SELECT * FROM categories";

                            $resultats = mysqli_query($conexio, $sql);

                            foreach($resultats as $resultat){
                            echo "<option value='" . $resultat['id'] . "'>" . $resultat['nom'] . "</option>";
                            }

                        ?>
                        </select>
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
    </body>
</html>
<?php
    }
    include_once 'footer.php';
?>