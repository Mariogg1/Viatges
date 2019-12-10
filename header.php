<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="col-md-2">
            <img src="logo/logo.png" class="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-md-8"></div>
        <div class="col-md-2">
            <p>Benvingut <?php echo $_SESSION['login_user'] ?></p>
            <a href="logout.php">Sortir</a>
        </div>
    </nav>
</header>