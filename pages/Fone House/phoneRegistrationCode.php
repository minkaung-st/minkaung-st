<?php 

    include('connect.php');

    if (isset($_POST['btn_Register'])) {

        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $color = $_POST['color'];
        $storage = $_POST['storage'];
        $unit_price = $_POST['unit_price'];
        $stock_quantity = $_POST['stock_quantity'];

        $phone_img = $_FILES['phone_img']['tmp_name'];
        $folder = "phone_img/";
        $file = $folder . $_FILES['phone_img']['name'];

        $specification = $_POST['specification'];

        if (move_uploaded_file($phone_img,$file)) {

            $insert = "
                insert into phone (brand , model , color , storage , unit_price , stock_quantity , phone_img , specification)
                values ('$brand', '$model', '$color', '$storage', '$unit_price', '$stock_quantity', '$file', '$specification')
            ";

            mysqli_query($connect , $insert);

            echo "<script> alert('Phone Registered Successfully!') </script>";
            echo "<script> location = 'phoneRegistration.php' </script>";
        }
        else {
            echo "<script> alert('Error Occur : Try Again !') </script>";
            echo "<script> location = 'phoneRegistration.php' </script>";
        }
    }

?>