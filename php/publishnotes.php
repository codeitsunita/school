<?php
    if(isset($_POST['btnSubmit'])){
        $subjectcode = $_POST['txtCode'];
        $faculty = $_POST['txtFaculty'];
        $semester = $_POST['txtSemester'];
        $teacher = $_POST['txtTeacher'];
        $file_name = $_FILES['file']['name'];
        $file_type= $_FILES['file']['type'];
        $file_size =$_FILES['file']['size'];
        $temp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];
        
        if($error == 0){
            if($file_size > 0){
                if($file_type = "application/pdf"){
                    
                    include"connect.php";
                    
                    $insert = "INSERT INTO notes (SubjectCode,Faculty,Semester,Notes,Teacher) VALUES('$subjectcode','$faculty','$semester','$file_name','$teacher')";
                    
                    if(mysqli_query($con,$insert)){
                        move_uploaded_file($temp_name,"../upload/notesTech/$file_name");
                        echo"file uploaded";
                        header('Refresh:1;../teacher/home.php');
                            
                    }else{
                        echo ("error:" . mysqli_error());
                        header('Refresh:5;../teacher/publishNotes.php');
                    }
                }else{
                    echo "invalid format";
                }
            }else{
                echo "check size";
            }
        }else{
            echo "error found";
        }
    }
?>