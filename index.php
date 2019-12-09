<!DOCTYPE html>
        <html lang="es"><head>
            <meta charset="utf-8">
            <title>Pagina Inici</title>
            <style>
              .cortar{
                width:200px;
                height:150px;
                text-overflow:ellipsis;
                overflow:hidden; 
              }

              .img-experiencia{
                width: 150px; 
                height: 150px; 
                border-radius: 50%;
              }

              #login-form{
                display: none;
              }

            </style>
            <script>
              window.onload = function(){
                document.getElementById("login-select").addEventListener("click", function(){
                document.getElementById("login-register").style.display="none";
                document.getElementById("login-form").style.display="block";
              })
              }
            </script>
                <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">
                <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="css/style.css">
                    <!-- Bootstrap core CSS -->
                <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                
                    <!-- Favicons -->
                <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
                <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
                <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
                <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
                <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
                <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
                <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
                <meta name="theme-color" content="#563d7c">
                    <!-- Custom styles for this template -->
                    <link href="carousel.css" rel="stylesheet">
                  </head>
                  <body>
                    <header>
                  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <div class="col-md-2">
                      <img src="logo/logo.png" class="logo">
                    </div>
                    <div class="col-md-7"></div>
                  
                    <div class="col-md-3" id="login-register">
                      <button class="btn btn-secondary" id="login-select">Inicia Sesió</button>
                      <button class="btn btn-secondary">Registra't</button>
                    </div>
                    <div class="col-md-3" id="login-form">
                          <form>
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Your username *" value="" />
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" placeholder="Your password *" value="" />
                              </div>
                              <div class="form-group">
                                  <input type="submit" class="btnSubmit" value="Login" />
                              </div>
                              <div class="form-group">
                                  <a href="#" class="ForgetPwd">Forget Password?</a>
                              </div>
                          </form>
                      </div>
                  </nav>
                </header>

                
                
                <main role="main">
                  
                
                
                  <!-- Marketing messaging and featurettes
                  ================================================== -->
                  <!-- Wrap the rest of the page in another container to center all the content. -->
                
                  <div class="container marketing">

                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                    <?php

                      include_once 'login.php';

                      $sql = "SELECT * FROM experiencies ORDER BY ID DESC LIMIT 3";

                      $experiencies = mysqli_query($conexio, $sql);

                      foreach($experiencies as $experiencia){
                        echo "<div class='col-lg-4'>" .
                        "<img class='img-experiencia' src='https://cdn.getyourguide.com/img/tour_img-1294407-146.jpg'>
                        <h2>" . $experiencia['titol'] . "</h2>
                        <p class='cortar'>" . $experiencia['text'] . "</p>
                        <p><a class='btn btn-secondary' href='#' role='button'>Veure més</a></p>
                      </div>";
                      }

                    ?>
                      
                    </div><!-- /.row -->
                    <div class="wrapper fadeInDown">
                      <div id="formContent">
                        <!-- Tabs Titles -->
                    
                        <!-- Icon -->
                        
                  <!-- FOOTER -->
                  <footer class="container">
                    <p class="float-right"><a href="#">Back to top</a></p>
                    <p>© 2017-2019 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
                  </footer>
            </main>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    </body>
</html>