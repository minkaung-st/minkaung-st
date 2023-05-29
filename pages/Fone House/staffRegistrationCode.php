
<?php

include('connect.php');

if (isset($_POST['btn_Register'])) {
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob']; 
    $gender = $_POST['gender'];
    $position = $_POST['position'];
 
    $profile = $_FILES['profile']['tmp_name'];
    $folder = "staffProfile/";
    $file = $folder . $_FILES['profile']['name'];

    $address = $_POST['address'];
    $phone = $_POST['phone'];

    if (move_uploaded_file($profile, $file)) {
        $insert = "
            INSERT INTO staff (name, email, password, dob, gender, position, profile_Picture, address, phone)
            VALUES ('$name', '$email', '$password', '$dob', '$gender', '$position', '$file', '$address', '$phone')
        ";

        mysqli_query($connect, $insert);

        echo "<script> alert('Staff Registered Successfully'); </script>";
        echo "<script> location = 'staffRegistration.php'; </script>";
    } 
    else {
        echo "<script> alert('Error Occurred: Failed to upload profile picture'); </script>";
        echo "<script> location = 'staffRegistration.php'; </script>";
    }
} 

?>