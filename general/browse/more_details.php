<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="browse_style.css">
    <title>More Details</title>
</head>

<body style="height: 100%;">
    <?php 
        require_once "../../connect_to_db.php";
        $id = $_GET["id"];
        $result = mysqli_query($conn, "SELECT * FROM student_details WHERE id='$id'");
    ?>

    <!-- Table -->
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="text-center py-3">
                <h1>Student Details</h1>
            </div>
            <div class="justify-content-center">
                <table class="table table-bordered text-center">
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <th>Roll No.</th>
                            <td><?php echo $row["roll_no"]; ?></td>
                        </tr>
                        <tr>
                            <th>First Name</th>
                            <td><?php echo $row["first_name"]; ?></td>
                        </tr>
                        <tr>
                            <th>Middle Name</th>
                            <td><?php echo $row["middle_name"]; ?></td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td><?php echo $row["surname"]; ?></td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td><?php echo $row["age"]; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $row["email"]; ?></td>
                        </tr>
                        <tr>
                            <th>Branch</th>
                            <td><?php echo $row["branch"]; ?></td>
                        </tr>
                        <tr>
                            <th>Year</th>
                            <td><?php echo $row["year"]; ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?php echo $row["address"]; ?></td>
                        </tr>
                        <tr>
                            <th>State</th>
                            <td><?php echo $row["state"]; ?></td>
                        </tr>
                        <tr>
                            <th>Pincode</th>
                            <td><?php echo $row["pincode"]; ?></td>
                        </tr>
                        <tr>
                            <th>Phone No.</th>
                            <td><?php echo $row["phone_no"]; ?></td>
                        </tr>
                        <tr>
                            <th>Parent Phone No.</th>
                            <td><?php echo $row["parent_phone_no"]; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>