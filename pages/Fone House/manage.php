
<?php 

    session_start(); 
    include('connect.php');

    if ( !isset($_SESSION['staffEmail']) && !isset($_SESSION['staffPassword']) && !isset($_SESSION['staffPosition'])) {
        
        echo "<script> alert('You Must Login First To Manage Staff List !') </script>";
        echo "<script> location = 'staffLogin.php' </script>";
    }

    // $showAllStaff = "select * from staff";
    // $runShowAllStaff = mysqli_query($connect,$showAllStaff);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
</head>
<body>

    <h3><a href="manageStaffList.php"> Staff Manage </a></h3>
    <h3>Customer Manage</h3>
    <h3>Phone Manage</h3>

</body>
</html>