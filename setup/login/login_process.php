<?php
    require_once "../../connect_to_db.php";

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM login_details WHERE login_username = '$input_username'");
    while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($input_password, $row["login_password"])) { 
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
    }
?>