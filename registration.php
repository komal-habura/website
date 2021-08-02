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
    $s="SELECT * FROM USERS WHERE NAME='$name'";

    $r = mysqli_query($con,$s);

    if(mysqli_num_rows($r)==1){
        echo "Username Already Taken";
    }
    else{
        $reg="INSERT INTO USERS (ID, NAME, AGE, DOB, DATE, TIME,PASSWORD) VALUES ('$id','$name', '$age','$dob','$date','$time','$pwd')";
        mysqli_query($con,$reg);
        echo "Registation sucessfull";
        header('location:login.php');

    }
?>