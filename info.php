<?php
    session_start();

    $con =mysqli_connect('localhost', 'root', '', 'users');
    mysqli_select_db($con,'users');
    $id= 1;
    $name= $_POST["name"];
    $pwd= $_POST["password"];
    $s="SELECT * FROM USERS WHERE NAME='$name' AND PASSWORD='$pwd'";

    $r = mysqli_query($con,$s);
    
?>
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
        <div class="register-box">
        <div class="row">
            <div class="col-md-10">
                    <div class="form-group">
                        <?php 
                        if(mysqli_num_rows($r)==1){
                            while($query_data = mysqli_fetch_row($r)) {
                                echo " <h2>INFORMATION OF USER</h2><br>Name : $query_data[1] <br> Age: $query_data[2] <br> Date of Birth: $query_data[3] <br> Date: $query_data[4] <br> Time: $query_data[5]";
                              }
                        }
                        else{
                            
                            echo "<h1>USER IS NOT PRESENT</h1>";
                    
                        }
                        
                        ?>

                    </div>
                    <a href="edit.php"><button type="submit" class="btn btn-primary">Click to edit </button></a>
                    
                    
            </div>
        </div></div>
    </div>
</body>
</html>
