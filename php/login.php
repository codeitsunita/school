<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype =$_POST['usertype'];
    
    include"connect.php";
    
    $query = "SELECT * FROM account where username ='$username' and password = '$password' and usertype ='$usertype'";

    $result= mysqli_query($con,$query);
    
    if(mysqli_num_rows($result)>0){
        while($record=mysqli_fetch_assoc($result)){
            $faculty= $record['Faculty'];
            if($usertype== 'admin'){
                $_SESSION['username'] = $username;
            header('location:../admin/adminhome.php');
              
        }else if($usertype =='teacher'){
                $_SESSION['faculty'] = $faculty;
            header('location:../teacher/home.php');
        }else{


            $_SESSION['username'] =$username;

            header('location:../student/index.php');
        }
        }
        
    }else{
        echo "invalid username or password";
    }
   
?>









