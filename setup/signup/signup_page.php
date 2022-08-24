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
            <form action="signup_process.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Your Username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Insert Your Image</label>
                    <input class="form-control" type="file" name="image">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" name="signup">Signup</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>