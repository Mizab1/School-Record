
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="add_styles.css">
    <title>Check Roll Number</title>
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
    
    
    <form action="" method="post">    
        <table class="table text-center header">
            <tbody>
                <tr>
                    <th class="col-md-1"><a href="../../homepage.php" class="btn btn-secondary" class="align_item_center" style="padding: 10px; float: left; margin: 0px 40px;">Home</a></th>
                    <td class="col-md-2"><h2 class="my-1">Government Polytechnic Thane</h2></td>
                    <th class="col-md-1"><h4 class="my-2">Check Roll Number Availablity</h4></th>
                </tr>
            </tbody>
        </table>
    </form>
    
    <div class="container form">
        <div class="justify-content-center text-center">
            <label style="font-family: 'Lexend Deca'; font-size:50px; color:white;">Check Roll Number</label>
        </div>
        <div class="row justify-content-center">
            <form action="check_rollno_process.php" method="post">
                <div class="form-group font-weight-bold">
                    <label>Roll Number:</label>
                    <input type="number" name="roll_no" class="form-control" placeholder="Enter Roll no." required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" name="login">Check</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>