<h1>Editar experiencies</h1>
    <?php
        include_once 'conexioBD.php';
    ?>
    <?php
        $id=$_GET['id'];
        echo '<FORM METHOD="GET" ACTION="editexperiencia2.php"><br>';
        $sSQL="SELECT * FROM experiencies WHERE id=$id";
        $result = mysqli_query($conexio, $sSQL);
        foreach($result as $resultat){
            $id=$resultat['id'];
            $idUsuari=$resultat['idUsuari'];
            $titol=$resultat['titol'];
            $dataPublicacio=$resultat['dataPublicacio'];
            $text=$resultat['text'];
            $imatge=$resultat['imatge'];
            $idCategoria=$resultat['idCategoria'];
        }
    ?>
    <form>
        <input type="hidden" name="id" value="<?php echo $id?>"><br>
        <input type="hidden" name="idUsuari" value="<?php echo $idUsuari?>"><br>
        <br>Titol:<br>
        <input type="text" name="titol" value="<?php echo $titol?>"><br>
        <br>Text:<br>
        <textarea class="form-control" rows="5" name="text"><?php echo $text?></textarea><br>
        <br>Categoria:<br>
        <select class="selector form-control" name="categoria">
            <option value disabled>Categoria:</option>
            <?php

                $sql = "SELECT * FROM categories";

                $resultats = mysqli_query($conexio, $sql);

                foreach($resultats as $resultat){
                    if($resultat['id'] == $idCategoria){
                        echo "<option value='" . $resultat['id'] . "' selected>" . $resultat['nom'] . "</option>";
                    }else{
                        echo "<option value='" . $resultat['id'] . "'>" . $resultat['nom'] . "</option>";
                    }
                }
                

            ?>
        </select>
        <button type='button' class='btn btn-primary' onclick='modificarExperiencia(this.form.elements.id.value, this.form.elements.idUsuari.value, this.form.elements.titol.value, this.form.elements.text.value, this.form.elements.categoria.value)'>Actualitza</button>
        <button type='button' class='btn btn-primary' onclick='eliminarExperiencia(this.form.elements.id.value)'>Eliminar experiència</button>
    </form>