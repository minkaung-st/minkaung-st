<?php

    include('connect.php');

    if (isset($_GET['id'])) {

        $phone_id = $_GET['id'];
        $selectPhone = "select * from phone where phone_id ='$phone_id' ";
        $runSelect = mysqli_query($connect,$selectPhone); 

        $data = mysqli_fetch_array($runSelect);
    }

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Phone List</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <form action="updatePhoneListCode.php" method="post">
                    <fieldset>
                        <legend>Update Phone List</legend>

                        <input type="hidden" name="phone_id" value="<?php echo $data['phone_id'] ?>">

                        <div class="form-group">
                            <label for="brand">Brand:</label> 
                            <input type="text" class="form-control" id="brand" name="brand" required value="<?php echo $data['brand'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="model">Model:</label>
                            <input type="text" class="form-control" id="model" name="model" required value="<?php echo $data['model'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="storage">Storage: </label>
                            <input type="text" class="form-control" id="storage" name="storage" required value="<?php echo $data['storage'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="unit_price">Unit Price: (Ks)</label>
                            <input type="number" class="form-control" id="unit_price" name="unit_price" required value="<?php echo $data['unit_price'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="stock_quantity">Stock Quantity: (Pcs)</label>
                            <input type="text" class="form-control" id="stock_quantity" name="stock_quantity" required value="<?php echo $data['stock_quantity'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="specification">Specification:</label>
                            <input type="text" class="form-control" id="specification" name="specification" required value="<?php echo $data['specification'] ?>">
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