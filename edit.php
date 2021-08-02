<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="register-box">
        <div class="row">
            <div class="col-md-10">
                <h2>Update Here</h2>
                <form action="update.php" method="POST">
                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="text" name="age" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="">Date of birth</label>
                        <input type="text" name="DOB" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="text" name="date" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="">Time</label>
                        <input type="text" name="time" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" require>
                    </div><br>
                    <button type="submit" class="btn btn-primary"> Update</button>
                </form>
                
            </div>
        </div></div>
    </div>
</body>
</html>
