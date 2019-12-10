<?php

if($_POST){

    $userName = htmlspecialchars($_POST['userName']);
    $contrasenya = htmlspecialchars($_POST['password']);

    include_once 'login.php';

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

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="col-md-2">
        <img src="logo/logo.png" class="logo">
    </div>
    <div class="col-md-7"></div>
    <div class="col-md-3" id="login-register">
        <?php

            if(isset($_GET['login']) && $_GET['login']=="failed"){
                echo "<p>Usuari incorrecte</p>";
            }

        ?>
        <button class="btn btn-secondary" id="login-select">Inicia Sessió</button>
        <button class="btn btn-secondary">Registra't</button>
    </div>
    <div class="col-md-3" id="login-form">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Your username *" value="" name="userName"/>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Your password *" value="" name="password" />
        </div>
        <div class="form-group">
            <input type="submit" class="btnSubmit" value="Login" name="submit" />
        </div>
        <div class="form-group">
            <a href="#" class="ForgetPwd">Forget Password?</a>
        </div>
        </form>
    </div>
    </nav>
</header>

<?php
}
?>


