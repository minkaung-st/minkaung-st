<?php 
    session_start();
    include('connect.php');

    if ( !isset($_SESSION['staffEmail']) && !isset($_SESSION['staffPassword']) ) {

        echo "<script> alert('You Must Login First To Manage Phone List !') </script>";
        echo "<script> location = 'staffLogin.php' </script>";
    }

    $showAllPhone = "select * from phone";
    $runShowAllPhone = mysqli_query($connect,$showAllPhone);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manage Phone List </title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


        <br><h4 class="text-center">Manage Phone List</h4><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Phone id</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Storage</th>
                    <th>Unit Price</th>
                    <th>Stock Quantity</th>
                    <th>Phone Img</th>
                    <th>Specification</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    foreach ($runShowAllPhone as $rowData) {

                        $id = $rowData['phone_id'];

                        echo"<tr>";
                            echo"<td>" .$rowData['phone_id']. "</td>";
                            echo"<td>" .$rowData['brand']. "</td>";
                            echo"<td>" .$rowData['model']. "</td>";
                            echo"<td>" .$rowData['storage']. " Gb </td>";
                            echo"<td>" .$rowData['unit_price']. " Ks </td>";
                            echo"<td>" .$rowData['stock_quantity']. " Pcs </td>";

                            echo"<td><img src=' " .$rowData['phone_img']. "'  class='img-fluid' style='max-width: 100px; height: auto;'></td>";

                            echo"<td>" .$rowData['specification']. "</td>";
                            echo"<td><a href='updatePhoneList.php?id=$id'> Update </a> | <a href='deletePhoneList.php?id=$id' class='text-danger'> Delete </a> </td>";
                        echo"</tr>";

                    }
                
                ?>
            </tbody>
        </table>
   

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>