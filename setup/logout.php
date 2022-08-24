<?php
    require_once "../connect_to_db.php";
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    unset($_SESSION["logged"]);

    $_SESSION["msg"] = "Logout Successful";
    $_SESSION["msg_type"] = "success";
    header("location: ../index.php");
?>