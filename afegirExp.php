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
    <form>
        <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div class="form-group">
                    <div class="form-group">
                        <label for="nom">Titol:</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
            </div>
                <label for="comment">Text:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
                Imatge:
                <input type="file" class="form-control-file" id="exampleFormControlFile1"><br>
                <input type="submit" ></input>
        </div>
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
