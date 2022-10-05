<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../login/login_style.css">
    <title>Login</title>
</head>
<body>
    <?php require_once "../../connect_to_db.php";?>
    <?php if(isset($_SESSION["msg"])): ?>
    <div class="alert alert-<?=$_SESSION["msg_type"]?>">
        <?php
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        ?>
    </div>
    <?php endif; ?>

<?php
    if(isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"])){
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
        
            $uniq_filename = uniqid() . uniqid();
            $location = "../../img/" . $uniq_filename . ".png";
        
            
            mysqli_query($conn, "INSERT INTO login_details (login_email, login_username, login_password, img) VALUES ('$email', '$username', '$hash_password', '$location')");
            move_uploaded_file($_FILES["image"]["tmp_name"], $location);
        
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["logged"] = true;
        
            $_SESSION["msg"] = "Signup Successful";
            $_SESSION["msg_type"] = "success";
            header("location: ../../homepage.php");
        }else{
            $err_msg = "Email is invalid";
        }
    }

?>

    <!-- <div class="topnav">
        <div class="search-container">
            <form action="signup_page.php" method="post">
               <a href="../../homepage.php" class="btn btn-secondary" style="float: left;">Home</a>
            </form>
        </div>
    </div> -->
    <table class="table text-center header">
        <tbody>
            <tr>
                <th class="col-md-1"><h4 class="my-2">Student Records</h4></th>
                <td class="col-md-2"><h2 class="my-1">Government Polytechnic Thane</h2></td>
            </tr>
        </tbody>
    </table>

    <div class="container form">
        <div class="justify-content-center text-center">
            <label style="font-family: 'Lexend Deca'; font-size:50px; color:white;">User Signup</label>
        </div>
        <div class="row justify-content-center">
            <form action="signup_page.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?>" required>
                    <h5 class="text-center danger" style="color:#DD5353"><?php echo isset($err_msg) ? $err_msg : ""; ?></h5>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Your Username" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ""; ?>" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ""; ?>" required>
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Insert Your Image</label>
                    <input class="form-control" type="file" name="image" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" name="signup">Signup</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>