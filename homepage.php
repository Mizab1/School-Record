<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Student Records</title>
</head>
<body>
    <?php 
        require_once "connect_to_db.php";
        $welcome_msg = isset($_SESSION["username"]) ? "Welcome " . $_SESSION["username"] : "Please Login";
    ?>
    <?php if (isset($_SESSION["msg"])) : ?>
        <div class="alert alert-<?= $_SESSION["msg_type"] ?>">
            <?php
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            ?>
        </div>
    <?php endif; ?>
    <!-- Header -->
    <table class="table text-center header">
        <tbody>
            <tr>
                <th class="col-md-1"><h4 class="my-2">Student Records</h4></th>
                <td class="col-md-2"><h2 class="my-1">Government Polytechnic Thane</h2></td>
                <td class="col-md-1"><h4 class="my-2"><?php echo $welcome_msg ?></h4></td>
            </tr>
        </tbody>
    </table>

    <!-- Table -->
    <table class="table text-center">
        <thead class="thead-light">
            <tr>
                <th class="col-md-1">General</th>
                <th class="col-md-1">Fees Report</th>
                <th class="col-md-1">Setup</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="general/browse/browse.php">Browse</a></th>
                <td><a href="fees/fees_record/main_page.php">Fees Record</a></td>
                <td><a href="setup/login/login_page.php">Login</a></td>
            </tr>
            <tr>
                <td><a href="general/add/check_rollno.php">Add</a></th>
                <td><a href="fees/dues/selection_page.php">Dues</a></td>
                <td><a href="setup/logout.php">Logout</a></td>
            </tr>
            <tr>
                <td><a href="general/edit/selection_page.php">Edit</a></th>
                <td><a href="fees/credit/selection_page.php">Payment</a></td>
                <td><a href="setup/signup/signup_page.php">Sign Up</a></td>
            </tr>
            <tr>
                <td><a href="general/delete/delete_page.php">Delete</a></th>
                <td></td>
                <td><a href="setup/user_details/main_page.php">User's Details</a></td>
            </tr>
            <tr>
                <td><a href="general/disable/disable_list.php">Disable</a></th>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></th>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>