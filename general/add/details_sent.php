<?php
    require_once "../../connect_to_db.php";

    if (isset($_POST["save"])) {
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

        $result = mysqli_query($conn, "SELECT * FROM student_details WHERE roll_no='$roll_no'");
        if (mysqli_num_rows($result) == 1) {
            $_SESSION["msg"] = "You can't have same roll number!";
            $_SESSION["msg_type"] = "danger";
            header("location: add.php");
        }else{
            mysqli_query($conn, "INSERT INTO student_details(roll_no, first_name, middle_name, surname, age, email, branch, year, address, state, pincode, phone_no, parent_phone_no) VALUES('$roll_no', '$first_name', '$middle_name', '$surname', '$age', '$email', '$branch', '$year', '$address', '$state', '$pincode', '$phone_no', '$parent_phone_no')");
    
            $result = mysqli_query($conn, "SELECT * FROM student_details WHERE roll_no = '$roll_no'");
            $row = mysqli_fetch_assoc($result);
            $id = $row["id"];
    
            mysqli_query($conn, "INSERT INTO fee_records (id) SELECT (id) FROM student_details WHERE id = '$id'");
            
            $_SESSION["msg"] = "Details has been added successfully";
            $_SESSION["msg_type"] = "success";
            header("location: ../browse/browse.php");
        }

    }

?>