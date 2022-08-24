<?php

    require_once "../../connect_to_db.php";

    $id = $_SESSION["pass_id"];
    $date = $_POST["date"];
    $narration = $_POST["narration"];
    $amount = $_POST["amount"];
    mysqli_query($conn, "INSERT INTO fee_records(id, today_date, narration, debit) VALUES('$id', '$date', '$narration', '$amount')");

    $_SESSION["msg"] = "Debit has been added successfully";
    $_SESSION["msg_type"] = "success";

    header("location: selection_page.php")
    
?>