<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="col-md-2">
            <div class="fototitulo">
                <img src="logo/logo.png" class="logo">
            <div class="col-md-2">
                <div class="losdos">
                    <p class="p">Pedralbes</p>
                    <p class="e">Experiences</p>
                </div>
            </div>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-md-7"></div>
        <div class="col-md-1">
            <p class="b">BENVINGUT! <?php echo $_SESSION['login_user'] ?></p>
            <a href="logout.php">Sortir</a>
        </div>
    </nav>
</header>