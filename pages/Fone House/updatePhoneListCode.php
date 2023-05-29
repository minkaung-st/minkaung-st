<?php

    include('connect.php');

    if (isset($_POST['btn_Update'])) {

        $phone_id = $_POST['phone_id'];
        $brand = $_POST['brand'];
        $model = $_POST['model']; 
        $storage = $_POST['storage'];
        $unit_price = $_POST['unit_price'];
        $stock_quantity = $_POST['stock_quantity'];
        $specification = $_POST['specification'];

        $updatePhoneList = " UPDATE phone SET `brand`='$brand', `model`='$model', `storage`='$storage', `unit_price`='$unit_price', `stock_quantity`='$stock_quantity', `specification`='$specification' WHERE `phone_id` ='$phone_id' ";
        $runUpdatePhoneList = mysqli_query($connect,$updatePhoneList);

        if ($runUpdatePhoneList) {

            echo "<script> alert('Phone Updated Successfully !') </script>";
            echo "<script> location = 'managePhone.php' </script>";
        }
        else {
            echo "<script> alert('Error Occur : Please Try Again !') </script>";
            echo "<script> location = 'managePhone.php' </script>";
        }
    }

?>