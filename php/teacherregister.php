<?php
   if(isset($_POST['btnSubmit'])){   
       $fullname=$_POST['fullname'];
       $username=$_POST['username'];
       $password=$_POST['password'];
       $retype=$_POST['retype'];
       $address=$_POST['address'];
       $mobile=$_POST['mobile'];
       $faculty=$_POST['faculty'];
       $usertype=$_POST['usertype'];
       //$semester=$_POST['semester'];
       $file_name = $_FILES['file']['name'];
       $file_size = $_FILES['file']['size'];
       $file_type = $_FILES['file']['type'];
       $error = $_FILES['file']['error'];
       $temp_name = $_FILES['file']['tmp_name'];
       
       if($error == 0){
          if($file_type =="image/png" || $file_type=="image/jpeg"){
               if($password == $retype){

                   include "connect.php";

                    $insert="INSERT INTO account (Fullname, Username,Password,Address,Mobile,Usertype,Faculty,Image) VALUES('$fullname','$username','$password','$address','$mobile','$usertype','$faculty','$file_name')";

                   if(mysqli_query($con,$insert)){
                     move_uploaded_file($temp_name,"../upload/image/$file_name");
                       echo"Record saved";
                       header('Refresh:4;../admin/adminhome.php');
                   }else{

                        echo "error";
                        header('Refresh:4;../register.php');
                        }
               }
                else{
                   echo "password donot match";
               }
           }else{
               echo "invalid format";
           }
       
   }
   }
       
       
?>

