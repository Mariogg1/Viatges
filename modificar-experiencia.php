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
        <br>Data publicació:<br>
        <input type="text" name="dataPublicacio" value="<?php echo $dataPublicacio?>"><br>
        <br>Text:<br>
        <input type="text" name="text" value="<?php echo $text?>"><br>
        <br>Imatge:<br>
        <input type="text" name="imatge" value="<?php echo $imatge?>"><br>
        <br>idCategoria:<br>
        <input type="text" name="idCategoria" value="<?php echo $idCategoria?>"><br>
        <button type='button' class='btn btn-primary' onclick='actualitzarExperiencia(this.form.elements.id.value, this.form.elements.idUsuari.value, this.form.elements.titol.value, this.form.elements.dataPublicacio.value, this.form.elements.text.value, this.form.elements.imatge.value, this.form.elements.idCategoria.value)'>Actualitza</button>
    </form>