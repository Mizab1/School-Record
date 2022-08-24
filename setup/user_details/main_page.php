<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../general/browse/browse_style.css">
    <title>User Details</title>
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
            <form action="main_page.php" method="post">
            <a href="../../homepage.php" class="btn btn-secondary" style="float: left;">Home</a>
                <input type="text" placeholder="Search.." name="search_keyword">
                <button type="submit" class="search-btn btn-secondary btn" name="search_btn">Search</button>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST["search_keyword"])) {
        $search_keyword = $_POST["search_keyword"];
        $result = mysqli_query($conn, "SELECT * FROM login_details WHERE login_email='$search_keyword' OR login_username LIKE '%$search_keyword%'");
    } else {
        $result = mysqli_query($conn, "SELECT * FROM login_details");
    }
    ?>

    <!-- Table -->
    <div class="justify-content-center">
        <table class="table text-center">
            <thead class="thead-light">
                <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><img src="<?php echo $row["img"]; ?>"></td>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["login_email"]; ?></td>
                    <td><?php echo $row["login_username"]; ?></td>
                    <td><?php echo $row["login_password"]; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>