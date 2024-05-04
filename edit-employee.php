<?php
include "dbconnect.php";
$eid = $_GET['id'];
if (!isset($_GET['id'])) {
    header('Location:display-employee.php');
}
$select = mysqli_query($con, "SELECT * FROM employee WHERE emp_id = '$eid'");
$row = mysqli_fetch_array($select);
if ($_POST) {
    $name = $_POST['emp_name'];
    $gender = $_POST['emp_gender'];
    $mobile = $_POST['emp_mobile'];
    $q = mysqli_query($con, "UPDATE employee SET emp_name='$name', emp_gender='$gender', emp_mobile='$mobile' WHERE emp_id='$eid'");

    if ($q) {
        echo "<script type='text/javascript'>alert('Record Updated');window.location='display-employee.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>

<body>
<center>
    <form method="post">

        Name : <input type="text" placeholder="Enter Name " name="emp_name" value="<?= $row['emp_name'] ?>" required>


        Gender : <input type="text" placeholder="Enter Gender" name="emp_gender" value="<?= $row['emp_gender'] ?>" required>

        Mobile : <input type="text" placeholder="Enter Mobile" name="emp_mobile" value="<?= $row['emp_mobile'] ?>" required>

        <input type="submit">

    </form>
</body>
</center>
</html>