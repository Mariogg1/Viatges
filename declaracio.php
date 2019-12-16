<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="utf-8">
      <title><?php if(isset($title)) echo $title; ?></title>
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
      <!-- Bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
      <!-- Style -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Scripts -->
      <script src="js/mostrar.js"></script>
      <script src="js/likes.js"></script>
    </head>
    <body>
      <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="col-md-2">
          <a href="index.php"><img src="logo/logo.png" class="logo"></a>
      </div>
      <div class="col-md-7"></div>
        <?php 
          if(isset($_SESSION['login_user'])){
              include_once 'header-registrat.php';
          }else{
              include_once 'header-no-registrat.php';
          }
        ?>