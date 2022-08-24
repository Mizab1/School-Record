<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fees_record/main_page.css">
    <title>Add Debit</title>
</head>

<body>
    <?php
        require_once "../../connect_to_db.php";
    ?>
    <?php if (isset($_SESSION["msg"])) : ?>
        <div class="alert alert-<?= $_SESSION["msg_type"] ?>">
            <?php
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            ?>
        </div>
    <?php endif; ?>
    <?php
        unset($_SESSION["pass_id"]);
        $id = $_GET["id"];
        $_SESSION["pass_id"] = $id;
        echo $_GET["id"];
    ?>

    <!-- Table -->
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="text-center py-3">
                <h1>Student Form</h1>
            </div>
            <div class="justify-content-center">
                <form action="add.php" method="post">
                    <table class="table table-bordered text-center">
                        <tr>
                            <th>Today's Date</th>
                            <td><input type="date" class="form-control" placeholder="Enter Date" name="date" required></td>
                        </tr>
                        <tr>
                            <th>Narration</th>
                            <td><input type="text" class="form-control" placeholder="Enter Narration" name="narration" required></td>
                        </tr>
                        <tr>
                            <th>Amount</th>
                            <td><input type="number" class="form-control" placeholder="Enter Amount" name="amount" required></td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
                            <!-- <a href="add.php?debit=<?php echo $_GET["id"]; ?>" class="btn btn-primary">Submit</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>