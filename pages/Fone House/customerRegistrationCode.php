<?php

include('connect.php');

if (isset($_POST['btn_Register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];

    $profile = $_FILES['profile']['tmp_name'];
    $folder = "customer_img/";
    $file = $folder . $_FILES['profile']['name'];

    $address = $_POST['address'];
    $phone = $_POST['phone'];

    if (move_uploaded_file($profile, $file)) {
        $insert = "
            INSERT INTO customer (name, email, password, dob, profile_picture, address, phone)
            VALUES ('$name', '$email', '$password', '$dob', '$file', '$address', '$phone')
        ";

        mysqli_query($connect, $insert);

        echo "<script> alert('Customer Registered Successfully'); </script>";
        echo "<script> location = 'customerRegistration.php'; </script>";
    } else {
        echo "<script> alert('Error Occurred: Failed to upload profile picture'); </script>";
        echo "<script> location = 'customerRegistration.php'; </script>";
    }
}

?>
