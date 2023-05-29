<?php 
    session_start();
    include('connect.php');

    if (isset($_POST['btn_Login'])) {
  
        $email = $_POST['email'];
        $password = $_POST['password'];
        $position = $_POST['position'];
        
        $searchStaff = "select * from staff where email ='$email' and password ='$password' and position ='$position' "; //
        $runSearchStaff = mysqli_query($connect,$searchStaff);

        $checkStaff = mysqli_num_rows($runSearchStaff);

        if ($checkStaff == 1) {

            $_SESSION['staffEmail'] = $email ;
            $_SESSION['staffPassword'] = $password ;
            $_SESSION['staffPosition'] = $position ;

            echo "<script> alert('Login Success !') </script>";
            echo "<script> location = 'manage.php' </script>";
        }
        else {
            echo "<script> alert('Login Fail : email or password maybe wrong !') </script>";
            echo "<script> location = 'staffLogin.php' </script>";
        }
    }
?>