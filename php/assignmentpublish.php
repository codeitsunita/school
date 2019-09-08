<?php
    if (isset($_POST['btnSubmit'])) {
        $subjectcode = $_POST['txtCode'];
        $date = $_POST['txtDate'];
        $deadline = $_POST['txtDeadline'];
        $faculty =$_POST['txtFaculty'];
        $semester =$_POST['txtSemester'];
        $remarks = $_POST['txtRemarks'];
        $teacher = $_POST['txtTeacher'];
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $error =$_FILES['file']['error'];
        
        if($error == 0) {
            if($file_size > 0){
                if($file_type == "application/pdf"){
                    include "connect.php";
                    
                    $insert = "INSERT INTO assignmentpublish (Date,Deadline,SubjectCode,Faculty,Semester,Assignment,Remarks,Teacher) VALUES ('$date','$deadline','$subjectcode','$faculty','$semester','$file_name','$remarks','$teacher')";
                    
                    if(mysqli_query($con,$insert)){
                        move_uploaded_file($temp_name,"../upload/assignment/$file_name");
                        echo "file uploaded";
                        header('Refresh:1;../teacher/home.php');
                    }else{
                        echo("error:" . mysqli_error());
                        header('Refresh:4;../teacher/publishassignment.php');
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