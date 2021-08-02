<?php
    session_start();


    $con =mysqli_connect('localhost', 'root', '', 'users');
    mysqli_select_db($con,'users');
    $id= 1;
    $name= $_POST["name"];
    $age= $_POST["age"];
    $dob= $_POST["DOB"];
    $date= $_POST["date"];
    $time= $_POST["time"];
    $pwd= $_POST["password"];
    $s="UPDATE USERS SET AGE='$age',DOB='$dob',DATE='$date',TIME='$time',PASSWORD='$pwd' WHERE NAME='$name'";

    $r = mysqli_query($con,$s);

        echo "succesfully update";
        header('location:login.php');
?>