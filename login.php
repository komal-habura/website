<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registation</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-10">
                <h2>Login Here</h2>
                <form action="info.php" method="post">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="name" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" require>
                    </div><br>
                    If you don't have account please <a href="register.php">Register.</a><br>
                    <button type="submit" class="btn btn-primary"> Login</button>
                </form>
                
            </div>
        </div></div>
    </div>
</body>
</html>