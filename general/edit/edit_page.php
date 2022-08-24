<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="browse_style.css">
    <title>Edit</title>
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
        $result = mysqli_query($conn, "SELECT * FROM student_details WHERE id='$id'");
    
    ?>

    <!-- Table -->
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="text-center py-3">
                <h1>Student Details Update</h1>
            </div>
            <div class="justify-content-center">
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <form action="details_update.php" method="post">
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>Roll No.</th>
                                <td><input type="number" class="form-control" placeholder="Enter Roll no." name="roll_no" value="<?php echo $row["roll_no"]; ?>" required></td>
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <td><input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="<?php echo $row["first_name"]; ?>" required></td>
                            </tr>
                            <tr>
                                <th>Middle Name</th>
                                <td><input type="text" class="form-control" placeholder="Enter Middle Name" name="middle_name" value="<?php echo $row["middle_name"]; ?>" required></td>
                            </tr>
                            <tr>
                                <th>Last Name</th>
                                <td><input type="text" class="form-control" placeholder="Enter Last Name" name="surname" value="<?php echo $row["surname"]; ?>" required></td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td><input type="number" class="form-control" placeholder="Enter Age" name="age" value="<?php echo $row["age"]; ?>" required></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="text" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $row["email"]; ?>" required></td>
                            </tr>
                            <tr>
                                <th>Branch</th>
                                <td>
                                <select class="form-control" name="branch" required>
                                    <option selected><?php echo $row["branch"]?></option>
                                    <option>Computer Engineering</option>
                                    <option>Mechanical Engineering</option>
                                    <option>Civil Engineering</option>
                                    <option>Chemical Engineering</option>
                                    <option>Tourism Engineering</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Year</th>
                                <td>
                                <select class="form-control" name="year" required>
                                    <option selected><?php echo $row["year"]?></option>
                                    <option>FY</option>
                                    <option>SY</option>
                                    <option>TY</option>
                                    <option>Final Year</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><input type="text" class="form-control" placeholder="Enter Address" name="address" value="<?php echo $row["address"]; ?>" required></td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td><input type="text" class="form-control" placeholder="Enter State" name="state" value="<?php echo $row["state"]; ?>" required></td>
                            </tr>
                            <tr>
                                <th>Pincode</th>
                                <td><input type="number" class="form-control" placeholder="Enter Pincode" name="pincode" value="<?php echo $row["pincode"]; ?>" required></td>
                            </tr>
                            <tr>
                                <th>Phone No.</th>
                                <td><input type="number" class="form-control" placeholder="Enter Phone No." name="phone_no" value="<?php echo $row["phone_no"]; ?>" required></td>
                            </tr>
                            <tr>
                                <th>Parent Phone No.</th>
                                <td><input type="number" class="form-control" placeholder="Enter Parent No." name="parent_phone_no" value="<?php echo $row["parent_phone_no"]; ?>" required></td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary btn-lg" name="update">Update</button>
                            </div>
                        </div>
                    </form>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</body>
</html>