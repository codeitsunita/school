<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    include "connect.php";

    $query = "SELECT * FROM admin where username = '$username' and password = '$password'";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) >0){
        echo "wait while redirecting";
        header('Refresh:1;../admin/adminpage.php');
    }else{
        echo "Incorrect username or password";
        header ('Refresh:3;../admin/adminlogin.html');
    }

?>