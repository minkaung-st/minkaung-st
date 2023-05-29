<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="staffLoginCode.php" method="post">
                    <fieldset>
                        <legend>Login To Your Account </legend>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="position">Position:</label>
                            <select class="form-control" id="position" name="position" required>
                                    <option value="" selected disabled></option>
                                <option value="storeManager">Store Manager</option>
                                <option value="saleAssociate">Sales Associate</option>
                                <option value="serviceTechnician">Service Technician</option>
                                <option value="customerServiceRepresentative">Customer Service Representative</option>
                                <option value="stockClerk">Stock Clerk</option>
                                <option value="technicalSupportSpecialist">Technical Support Specialist</option>
                                <option value="marketing">Marketing and Promotion</option>
                                <option value="administrativeStaff">Administrative Staff</option>
                                    <option value="" disabled></option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Login" name="btn_Login">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>