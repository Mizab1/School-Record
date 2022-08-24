<?php
    require_once "../../connect_to_db.php";
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $uniq_filename = uniqid() . uniqid();
    $location = "../../img/" . $uniq_filename . ".png";

    
    mysqli_query($conn, "INSERT INTO login_details (login_email, login_username, login_password, img) VALUES ('$email', '$username', '$password', '$location')");
    move_uploaded_file($_FILES["image"]["tmp_name"], $location);

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["logged"] = true;

    $_SESSION["msg"] = "Signup Successful";
    $_SESSION["msg_type"] = "success";
    header("location: ../../homepage.php");

?>