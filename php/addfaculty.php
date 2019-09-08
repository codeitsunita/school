<?php
    $faculty = $_POST['faculty'];
    
    include "connect.php";
    
    $insert ="INSERT INTO faculty(faculty) VALUES ('$faculty')";

    if(mysqli_query($con,$insert)){
        echo"Record Saved";
        header('Refresh:1;../admin/faculty.php');
    }else{
        echo("error:" . mysqli_error());
        header('Refresh:5;../admin/addfaculty.php');
    }
?>