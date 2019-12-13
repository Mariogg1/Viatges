<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title><?php if(isset($title)) echo $title; ?></title>
      <!-- Bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- Style -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Scripts -->
      <script src="js/mostrar.js"></script>
      <script src="js/documents.js"></script>
    </head>
    <body>
      <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="col-md-2">
          <a href="index.php"><img src="logo/logo.png" class="logo"></a>
      </div>
      <div class="col-md-7"></div>
        <?php 
          if(isset($_SESSION)){
              include_once 'header-registrat.php';
          }else{
              include_once 'header-no-registrat.php';
          }
        ?>