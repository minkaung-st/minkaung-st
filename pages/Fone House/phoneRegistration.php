<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Registration</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="phoneRegistrationCode.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Phone List Registration</legend>

                        <div class="form-group">
                            <label for="brand">Brand:</label>
                            <input type="text" class="form-control" id="brand" name="brand" required>
                        </div>

                        <div class="form-group">
                            <label for="model">Model:</label>
                            <input type="text" class="form-control" id="model" name="model" required>
                        </div>

                        <div class="form-group">
                            <label for="color">Color:</label>
                            <input type="text" class="form-control" id="color" name="color" required>
                        </div>

                        <div class="form-group">
                            <label for="storage">Storage: </label>
                            <input type="text" class="form-control" id="storage" name="storage" required>
                        </div>

                        <div class="form-group">
                            <label for="unit_price">Unit Price: (Ks)</label>
                            <input type="number" class="form-control" id="unit_price" name="unit_price" required>
                        </div>

                        <div class="form-group">
                            <label for="stock_quantity">Stock Quantity: (Pcs)</label>
                            <input type="text" class="form-control" id="stock_quantity" name="stock_quantity" required>
                        </div>

                        <div class="form-group">
                            <label for="phone_img">Phone Img:</label>
                            <input type="file" class="form-control-file" id="phone_img" name="phone_img" required>
                        </div>

                        <div class="form-group">
                            <label for="specification">Specification:</label>
                            <input type="text" class="form-control" id="specification" name="specification" required>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Register" name="btn_Register">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div> 
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>