<?php
session_start();
include_once 'declaracio.php';
if(!isset($_SESSION['login_user'])){
    include_once 'experiencies-noregistrat.php';
}else{
    include_once 'experiencies-registrat.php';
}
include_once 'footer.php';
?>