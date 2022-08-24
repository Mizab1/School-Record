<?php
    require_once "../../connect_to_db.php";
    $id = $_GET["id"];

    // transfer
    mysqli_query($conn, "INSERT INTO disable_table (id, roll_no, first_name, middle_name, surname, age, email, branch, year, address, state, pincode, phone_no, parent_phone_no) SELECT * FROM student_details WHERE id = '$id'");

    // delete
    mysqli_query($conn, "DELETE FROM student_details WHERE id = '$id'");

    $_SESSION["msg"] = "Details has been deleted successfully";
    $_SESSION["msg_type"] = "danger";
    header("location: delete_page.php");
?>