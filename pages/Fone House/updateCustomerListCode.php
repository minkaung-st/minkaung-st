<?php

    include('connect.php');

    if (isset($_POST['btn_Update'])) {

        $customer_id = $_POST['customer_id'];
        $name = $_POST['name'];
        $email = $_POST['email']; 
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $updateCustomerList = " UPDATE customer SET  name='$name', email='$email', password='$password', dob='$dob', address='$address', phone='$phone'  WHERE `customer_id` ='$customer_id' ";
        $runUpdateCustomerList = mysqli_query($connect,$updateCustomerList);

        if ($runUpdateCustomerList) {

            echo "<script> alert('Customer Updated Successfully !') </script>";
            echo "<script> location = 'manageCustomer.php' </script>";
        }
        else {
            echo "<script> alert('Error Occur : Please Try Again !') </script>";
            echo "<script> location = 'manageCustomer.php' </script>";
        }
    }

?>