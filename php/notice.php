<?php
    if (isset($_POST['btnSubmit'])) {
        $date = $_POST['txtDate'];
        $subject = $_POST['txtSubject'];
        $remarks = $_POST['txtRemarks'];
        $postby=$_POST['txtPost'];
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $error =$_FILES['file']['error'];
        
        if($error == 0) {
            if($file_size > 0){
                if($file_type == "application/pdf"){
                    include "connect.php";
                    
                    $insert = "INSERT INTO notice (Date,Subject,Remarks,Notice,Postby) VALUES ('$date','$subject','$remarks','$file_name', '$postby')";
                    
                    if(mysqli_query($con,$insert)){
                        move_uploaded_file($temp_name,"../upload/notice/$file_name");
                        echo "file uploaded";
                        header('Refresh:1;../admin/notice.php');
                    }else{
                        echo("error:" . mysqli_error());
                        header('Refresh:4;../admin/notice.php');
                    }
                    
                    
                }else{
                    echo"invalid format";
                }
            }else{
                echo"no-file enter";
            }
        }else{
            echo "error found";
        }
        
        
    }

?>