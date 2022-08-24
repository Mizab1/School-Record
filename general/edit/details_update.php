<?php
    require_once "../../connect_to_db.php";

    $id = $_SESSION["pass_id"];
    
    if (isset($_POST["update"])) {
        $roll_no = $_POST["roll_no"];
        $first_name = $_POST["first_name"];
        $middle_name = $_POST["middle_name"];
        $surname = $_POST["surname"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $branch = $_POST["branch"];
        $year = $_POST["year"];
        $address = $_POST["address"];
        $state = $_POST["state"];
        $pincode = $_POST["pincode"];
        $phone_no = $_POST["phone_no"];
        $parent_phone_no = $_POST["parent_phone_no"];

        mysqli_query($conn, "UPDATE student_details SET roll_no='$roll_no', first_name='$first_name', middle_name='$middle_name', surname='$surname', age='$age', email='$email', branch='$branch', year='$year', address='$address', state='$state', pincode='$pincode', phone_no='$phone_no', parent_phone_no='$parent_phone_no' WHERE id='$id'");

    }

    $_SESSION["msg"] = "Details has been updated successfully";
    $_SESSION["msg_type"] = "success";
    header("location: selection_page.php");
?>