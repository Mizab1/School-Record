<?php
    require_once "../../connect_to_db.php";
    $roll_no = $_POST["roll_no"];
    $result = mysqli_query($conn, "SELECT * FROM student_details WHERE roll_no='$roll_no'");
    if($roll_no <= 0){
        $_SESSION["msg"] = "Roll number can't be negative or zero";
        $_SESSION["msg_type"] = "danger";
        header("location: check_rollno.php");
    }elseif (mysqli_num_rows($result) == 1) {
        $_SESSION["msg"] = "This roll number is not available";
        $_SESSION["msg_type"] = "danger";
        header("location: check_rollno.php");
    }else{
        $_SESSION["msg"] = "This roll number is available";
        $_SESSION["msg_type"] = "success";
        header("location: add.php?roll_no=".$roll_no);
    }
?>