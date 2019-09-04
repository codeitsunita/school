
    <?php
    if (isset($_POST['btnSubmit'])) {
     $subject=$_POST['txtSubject'];
    $date=$_POST['txtDate'];
    $file_name=$_FILES['file']['name'];
    $file_size=$_FILES['file']['size'];
    $temp_name=$_FILES['file']['tmp_name'];
    $file_type=$_FILES['file']['type'];
    $error=$_FILES['file']['error'];
    $remarks=$_POST['txtRemarks'];
    $postby=$_POST['txtPost'];
        
        $temp = explode(".",$file_name);
        $file_name = round(microtime(true)) . '.' . end($temp);
        
        if($error == 0) {
             if($file_size > 0){
                 if($file_type =="image/png" || $file_type=="image/jpeg"){
                     include "connect.php";
                    $insert = "INSERT INTO events (Subject,Image,Remarks,Postby) VALUES ('$subject','$file_name','$remarks', '$postby')";
                    
                    if(mysqli_query($con,$insert)){
                        move_uploaded_file($temp_name,"../upload/image/$file_name");
                        echo "file uploaded";
                        header('Refresh:6;../admin/events.php');
                       }else{
                        echo("error:" . mysqli_error());
                        header('Refresh:4;../admin/notice.php');
                    }
                    
                 }else{
                    echo"invalid format";
                }
            }else{
                echo"no-file enter";
                       
                        echo "invalid size";
                        }
                }else{
                    echo "error found";
                    }
        
            }
       
        
        

?>