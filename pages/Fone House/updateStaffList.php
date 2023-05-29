<?php

    include('connect.php');

    if (isset($_GET['id'])) {

        $staff_id = $_GET['id'];
        $selectStaff = "select * from staff where staff_id ='$staff_id' ";
        $runSelect = mysqli_query($connect,$selectStaff);

        $data = mysqli_fetch_array($runSelect);
    }

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Staff List</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <form action="updateStaffListCode.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Update Staff List</legend>

                        <input type="hidden" name="staff_id" value="<?php echo $data['staff_id'] ?>">

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required value="<?php echo $data['name'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required value="<?php echo $data['email'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="text" class="form-control" id="password" name="password" required value="<?php echo $data['password'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" class="form-control" id="dob" name="dob" required value="<?php echo $data['dob'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" value="male" name="gender" id="male" required <?php if ($data['gender'] == 'male') echo 'checked'; ?>>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" value="female" name="gender" id="female" required <?php if ($data['gender'] == 'female') echo 'checked'; ?>>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="position">Position:</label>
                            <select class="form-control" id="position" name="position" required>
                                <option value="storeManager" <?php if ($data['position'] == 'storeManager') echo 'selected'; ?>>Store Manager</option>
                                <option value="saleAssociate" <?php if ($data['position'] == 'saleAssociate') echo 'selected'; ?>>Sales Associate</option>
                                <option value="serviceTechnician" <?php if ($data['position'] == 'serviceTechnician') echo 'selected'; ?>>Service Technician</option>
                                <option value="customerServiceRepresentative" <?php if ($data['position'] == 'customerServiceRepresentative') echo 'selected'; ?>>Customer Service Representative</option>
                                <option value="stockClerk" <?php if ($data['position'] == 'stockClerk') echo 'selected'; ?>>Stock Clerk</option>
                                <option value="technicalSupportSpecialist" <?php if ($data['position'] == 'technicalSupportSpecialist') echo 'selected'; ?>>Technical Support Specialist</option>
                                <option value="marketing" <?php if ($data['position'] == 'marketing') echo 'selected'; ?>>Marketing and Promotion</option>
                                <option value="administrativeStaff" <?php if ($data['position'] == 'administrativeStaff') echo 'selected'; ?>>Administrative Staff</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea class="form-control" id="address" name="address" cols="15" rows="4"><?php echo $data['address'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="phone" class="form-control" id="phone" name="phone" required value="<?php echo $data['phone'] ?>"
                                onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                                minlength="8" maxlength="11">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update" name="btn_Update">
                        </div>
                    </fieldset> 
                </form>
            </div>
        </div> 
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>