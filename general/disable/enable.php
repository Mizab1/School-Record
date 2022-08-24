<?php
    require_once "../../connect_to_db.php";
    $id = $_GET["id"];

    // transfer
    mysqli_query($conn, "INSERT INTO student_details (id, roll_no, first_name, middle_name, surname, age, email, branch, year, address, state, pincode, phone_no, parent_phone_no) SELECT * FROM disable_table WHERE id = '$id'");

    // delete
    mysqli_query($conn, "DELETE FROM disable_table WHERE id = '$id'");

    $_SESSION["msg"] = "Details has been enabled successfully";
    $_SESSION["msg_type"] = "info";
    header("location: disable_list.php");
?>