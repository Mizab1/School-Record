<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../browse/browse_style.css">
    <title>Archive List</title>
</head>

<body>
    <?php
        require_once "../../connect_to_db.php";
        if (!isset($_SESSION["logged"])){
            $_SESSION["msg"] = "You must first login!";
            $_SESSION["msg_type"] = "danger";
            header("location: ../../homepage.php");
        }
    ?>
    <?php if (isset($_SESSION["msg"]) && isset($_SESSION["logged"])) : ?>
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
            <form action="disable_list.php" method="post">
                <a href="../../homepage.php" class="btn btn-secondary" style="float: left;">Home</a>
                <input type="text" placeholder="Search.." name="search_keyword">
                <button type="submit" class="search-btn btn-secondary btn" name="search_btn">Search</button>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST["search_keyword"])) {
        $search_keyword = $_POST["search_keyword"];
        $result = mysqli_query($conn, "SELECT * FROM disable_table WHERE roll_no='$search_keyword' OR first_name LIKE '%$search_keyword%' OR surname LIKE '%$search_keyword%' OR Email LIKE '%$search_keyword%'");
    } else {
        $result = mysqli_query($conn, "SELECT * FROM disable_table");
    }
    ?>

    <!-- Table -->
    <div class="justify-content-center">
        <table class="table text-center">
            <thead class="thead-light">
                <tr>
                    <th>Roll No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row["roll_no"]; ?></td>
                    <td><?php echo $row["first_name"]; ?></td>
                    <td><?php echo $row["surname"]; ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><a href="<?php echo "enable.php?id=".$row["id"]; ?>" class="btn btn-primary">Enable</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>