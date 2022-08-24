<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="main_page.css">
    <title>Fees Records</title>
</head>

<body>
    <?php require_once "../../connect_to_db.php" ?>
    <?php if (isset($_SESSION["msg"])) : ?>
        <div class="alert alert-<?= $_SESSION["msg_type"] ?>">
            <?php
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            ?>
        </div>
    <?php endif; ?>

    <!-- Search -->
    <div class="topnav">
        <div class="search-container">
            <form action="browse.php" method="post">
                <a href="../../homepage.php" class="btn btn-secondary" style="float: left;">Home</a>
                <h2 class="text-center">Government Polytechnic Thane</h2>
            </form>
        </div>
    </div>
    <?php
        $id = $_GET["id"];
        $result = mysqli_query($conn, "SELECT * FROM student_details WHERE id = '$id'");
    ?>

    <!-- Table -->
    <div class="container">
        <div class="justify-content-center">
            <table class="table text-center table-bordered">
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <thead class="thead-light">
                        <tr>
                            <th>Roll No.</th>
                            <td><?php echo $row["roll_no"]; ?></td>
                        </tr>
                        <tr>
                            <th>First Name</th>
                            <td><?php echo $row["first_name"];?></td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td><?php echo $row["surname"]; ?></td>
                        </tr>
                            <th>Age</th>
                            <td><?php echo $row["age"]; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $row["email"]; ?></td>
                        </tr>
                    </thead>
                    <?php endwhile; ?>
            </table>
        </div>
    </div>

    <hr>

    <div class="justify-content-center">
        <table class="table text-center table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Date</th>
                    <th>Narration</th>
                    <th>Debit</th>
                    <th>Credit</th>
                </tr>
            </thead>
            <?php
                $result1 = mysqli_query($conn, "SELECT * FROM fee_records WHERE id = '$id'");
            ?>
            <?php while ($row1 = mysqli_fetch_assoc($result1)) : ?>
                <tr>
                    <td><?php echo $row1["today_date"]; ?></td>
                    <td><?php echo $row1["narration"]; ?></td>
                    <td><?php echo $row1["debit"]; ?></td>
                    <td><?php echo $row1["credit"]; ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <td></td>
                <td></td>
                <td class="bg-secondary">
                    <?php
                        $result = mysqli_query($conn, "SELECT SUM(debit) FROM fee_records WHERE id = '$id'");
                        while($row = mysqli_fetch_array($result)){
                            $debit_fee = $row['SUM(debit)'];
                        } 
                        echo $debit_fee
                    ?>
                </td>
                <td class="bg-secondary">
                    <?php
                        $result = mysqli_query($conn, "SELECT SUM(credit) FROM fee_records WHERE id = '$id'");
                        while($row = mysqli_fetch_array($result)){
                            $credit_fee = $row['SUM(credit)'];
                        } 
                        echo $credit_fee
                    ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="font-weight-bold bg-primary">Balance</td>
                <td class="font-weight-bold bg-primary">
                    <?php
                        echo $debit_fee - $credit_fee;
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>