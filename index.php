<?php
session_start();
if(!isset($_SESSION['login_user'])){
    include_once 'experiencies-noregistrat.php';
}else{
    include_once 'experiencies-registrat.php';
}
?>