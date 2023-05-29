<?php

    include('connect.php');

    if (isset($_POST['btn_Update'])) {

        $staff_id = $_POST['staff_id'];
        $name = $_POST['name'];
        $email = $_POST['email']; 
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $position = $_POST['position'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $updateStaffList = " UPDATE staff SET  name='$name', email='$email', password='$password', dob='$dob', gender='$gender', position='$position', address='$address', phone='$phone'  WHERE `staff_id` ='$staff_id' ";
        $runUpdateStaffList = mysqli_query($connect,$updateStaffList);

        if ($runUpdateStaffList) {

            echo "<script> alert('Staff Updated Successfully !') </script>";
            echo "<script> location = 'manageStaff.php' </script>";
        }
        else {
            echo "<script> alert('Error Occur : Please Try Again !') </script>";
            echo "<script> location = 'manageStaff.php' </script>";
        }
    }

?>