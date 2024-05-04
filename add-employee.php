<?php
include "dbconnect.php";
if ($_POST) {
    $name = $_POST['emp_name'];
    $gender = $_POST['emp_gender'];
    $mobile = $_POST['emp_mobile'];
    $q = mysqli_query($con, "INSERT INTO employee(emp_name, emp_gender, emp_mobile) VALUES ('$name','$gender','$mobile')");

    if ($q) {
        echo "<script type='text/javascript'>alert('Record Added');window.location='display-employee.php';</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form method="post" class="text-center p-5">
        Name : <input type="text" placeholder="Enter Name " name="emp_name" required>
        <br><br>
        Gender : <input type="text" placeholder="Enter Gender" name="emp_gender" required>
        <br><br>
        Mobile : <input type="text" placeholder="Enter Mobile" name="emp_mobile" required>
        <br><br>
        <input type="submit" value="Send">
    </form>
    </div>
</body>
</html>