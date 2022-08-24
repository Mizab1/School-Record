<?php
    require_once "connect_to_db.php";
    if(!isset($_SESSION["logged"])){
        header("location: setup/login/login_page.php");
    }else{
        header("location: homepage.php");
    }
?>