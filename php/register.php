<?php
   if(isset($_POST['btnSubmit'])){   
       $fullname=$_POST['fullname'];
       $username=$_POST['username'];
       $password=$_POST['password'];
       $retype=$_POST['retype'];
       $address=$_POST['address'];
       $mobile=$_POST['mobile'];
       $faculty=$_POST['faculty'];
       $semester=$_POST['semester'];
       
       if($password == $retype){
           
           include "connect.php";
            $insert="INSERT INTO account (fullname, username,password,address,mobile,faculty,semester,usertype) VALUES('$fullname','$username','$password','$address','$mobile','$faculty','$semester','student')";

           if(mysqli_query($con,$insert)){

               echo"Record saved";
            header('Refresh:4;../login.php');
           }
            else{

                echo("error:" . mysqli_error());
           header('Refresh:4;../register.php');
            }
        }else{
           echo "password donot match";
       }
   }
       
       
?>

