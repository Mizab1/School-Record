<?php
    require_once "../../connect_to_db.php";

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM login_details WHERE login_username = '$input_username' AND login_password = '$input_password'");
    if(mysqli_num_rows($result) == 1){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["logged"] = true;


        $_SESSION["msg"] = "Login Successful";
        $_SESSION["msg_type"] = "success";
        header("location: ../../homepage.php");
    }else{
        $_SESSION["msg"] = "Login unsuccessful";
        $_SESSION["msg_type"] = "danger";
        header("location: login_page.php");
    }
?>