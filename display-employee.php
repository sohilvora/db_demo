<?php
include "dbconnect.php";
if (isset($_GET['id'])) {
    $emp_id = $_GET['id'];
    $query = mysqli_query($con, "DELETE FROM employee WHERE emp_id='$emp_id'");
    if ($query) {
        echo "<script type='text/javascript'>alert('Record deleted');window.location='display-employee.php';</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Employee</title>
</head>

<body><center>
    <a href="add-employee.php">Add Employee</a>
    <table border='1'>
        <tr>
            <th>NO.</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>

        <?php
        $q = mysqli_query($con, "SELECT * FROM employee");
        $i = 1;
        if (mysqli_num_rows($q) != 0) {
            while ($r = mysqli_fetch_array($q)) {
        ?>
        
                <tr >
                    <td><?= $i; ?></td>
                    <td><?= $r['emp_name'] ?></td>
                    <td><?= $r['emp_gender'] ?></td>
                    <td><?= $r['emp_mobile'] ?></td>
                    <td width="15%"><a href="display-employee.php?id=<?= $r['emp_id'] ?>" >Delete</a>&nbsp;&nbsp;&nbsp;<a href="edit-employee.php?id=<?= $r['emp_id'] ?>">Edit</a></td>
                </tr>
                
            <?php
                $i++;
            }
        } else {
            ?>
            <tr>
                <td colspan="5">No Records Found</td>
            </tr>
        <?php
        }
        ?>
    </table>
    </center>
</body>

</html>