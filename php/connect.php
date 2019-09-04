<?php

    $con = mysqli_connect('localhost','root','','school');
    if(!$con){
        
        die("error:" . mysqli_error());
    }
?>