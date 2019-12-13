<?php

if($_POST){

    $userName = htmlspecialchars($_POST['userName']);
    $contrasenya = htmlspecialchars($_POST['password']);

    include_once 'conexioBD.php';

    $sql = "SELECT * FROM usuaris WHERE nomUsuari = '" . $userName . "' AND contrasenya = '" . $contrasenya . "'";

    $usuariDB = mysqli_query($conexio, $sql);

    if(mysqli_num_rows($usuariDB) == 1){
        session_start();
        $_SESSION['login_user']=$userName;
        echo $_SESSION['login_user'];
        header("location: index.php");
    }else{
        header("location: index.php?login=failed");
    }
}else{

?>

        <?php

            if(isset($_GET['login']) && $_GET['login']=="failed"){
                echo "<p>Usuari incorrecte</p>";
            }

        ?>
    <div class="col-md-3" id="login-register">
        <button class="btn btn-secondary" id="login-select">Inicia Sessió</button>
        <a href="registre.php"><button class="btn btn-secondary">Registra't</button></a>
    </div>
    </div>
    <div class="col-md-3" id="login-form">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Your username *" value="" name="userName"/>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Your password *" value="" name="password" />
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <input type="submit" class="btnSubmit btn-login-form" value="Login" name="submit" />
            </div>
            <div class="form-group col-md-6">
                <input type="reset" class="btnSubmit btn-login-form" value="Cancel·la" id="login-cancela"/>
            </div>
        </div>
        <div class="form-group">
            <a href="registre.php" class="ForgetPwd">No tens compte?</a>
        </div>
        </form>
    </div>
    </nav>
</header>

<?php
}
?>


