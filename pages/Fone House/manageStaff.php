<?php 

    session_start(); 
    include('connect.php');

    if ( !isset($_SESSION['staffEmail']) && !isset($_SESSION['staffPassword']) && !isset($_SESSION['staffPosition'])) {
        
        echo "<script> alert('You Must Login First To Manage Staff List !') </script>";
        echo "<script> location = 'staffLogin.php' </script>";
    }

    $showAllStaff = "select * from staff";
    $runShowAllStaff = mysqli_query($connect,$showAllStaff);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manage Staff Lists </title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

        <br><h4 class="text-center">Manage Staff List</h4><br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Staff id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Date Of Birth</th>
                    <th>Gender</th>
                    <th>Position</th>
                    <th>Profile Picture</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($runShowAllStaff as $rowData) {
                            
                        $id = $rowData['staff_id'];

                        echo"<tr>";
                            echo"<td>" .$rowData['staff_id']. "</td>";                               
                            echo"<td>" .$rowData['name']. "</td>";                                
                            echo"<td>" .$rowData['email']. "</td>";                                
                            echo"<td>" .$rowData['password']. "</td>";                                
                            echo"<td>" .$rowData['dob']. "</td>";                                
                            echo"<td>" .$rowData['gender']. "</td>";                                
                            echo"<td>" .$rowData['position']. "</td>";    

                            echo"<td> <img src='" .$rowData['profile_picture']. "' class='img-fluid' style='max-width: 100px; height: auto;'> </td>";                                
                            
                            echo"<td>" .$rowData['address']. "</td>";                                
                            echo"<td>" .$rowData['phone']. "</td>";                                
                            echo"<td><a href='updateStaffList.php?id=$id'> Update </a> | <a href='deleteStaffList.php?id=$id' class='text-danger'> Delete </a> </td>";                            
                        echo"</tr>";                        
                    }                    
                ?>                
            </tbody>            
        </table>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>