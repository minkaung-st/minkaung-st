<?php 

include('connect.php');

if (isset ($_GET['id'])) {

    $phone_id = $_GET['id'];
    $delete = "delete from phone where phone_id = '$phone_id' ";
    $runDelete = mysqli_query ($connect, $delete);

    if ($runDelete) {
        echo "<script>alert('Phone Successfully Deleted !')</script>";
        echo "<script>location = 'managePhone.php'</script>";
    }
    else {
        echo "<script>alert('Error Occur : Please Try Again !')</script>";
        echo "<script>location = 'managePhone.php'</script>";
    }
}

?>