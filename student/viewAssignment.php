
<?php
    session_start();
    include "../php/connect.php";
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $query = "SELECT faculty FROM account where username = '$username'";
        $result = mysqli_query($con,$query);
        while($record = mysqli_fetch_assoc($result)){
            $faculty = $record['faculty'];
        }
    }else{
        header('location:../login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>studenthom</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/dh-navbar-inverse-1.css">
    <link rel="stylesheet" href="assets/css/dh-navbar-inverse.css">
    <link rel="stylesheet" href="assets/css/DNFeature-Boxes.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/MUSA_no-more-tables-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_no-more-tables.css">
    <link rel="stylesheet" href="assets/css/Service-Box-Style-01.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .box{
            width: 100%;
            height: 350px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean navbar-inverse navbar-fixed-top" style="background-color: #825889;">
        <div class="container"><a class="navbar-brand" href="#" style="padding:0px;margin-left:0px;height:78px;"> <img class="img-fluid" src="assets/img/logo.png" style="margin-left: -10px;margin-right: 0px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color: #825889;padding-left: 20px;">
                <ul class="nav navbar-nav ml-auto" style="margin-top:13px;">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" uk-scroll="offset:50">Home </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="notice.php" uk-scroll="offset:100">Notice</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="notes.php" uk-scroll="offset:100">notes</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link active" data-toggle="dropdown" aria-expanded="false" href="viewAssignment.php">Assignment</a>
                        <div class="dropdown-menu" role="menu" style="background-color: #c6c0c0;"><a class="dropdown-item border rounded-0" role="presentation" href="viewAssignment.php">View </a><a class="dropdown-item border rounded-0" role="presentation" href="submitAssignment.php" style="background-color: #c6c0c0;">Submit</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="event.php">Event</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php" uk-scroll="offset:50">Log Out</a></li>
                </ul>
        </div>
        </div>
    </nav>
    
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-10" style="margin-left: -15px;">
                        <div class="list-group"><a href="index.php" class="list-group-item list-group-item-action"  style="background-color: #c6c0c0;">Home</a>
                           <a href="notice.php" class="list-group-item list-group-item-action" style="background-color: #c6c0c0;">Notice</a>
                            <a href="notes.php" class="list-group-item list-group-item-action"  style="background-color: #c6c0c0;">Notes</a>
                            <a href="viewAssignment.php" class="list-group-item list-group-item-action" style="background-color: #c6c0c0;">View Assignment</a>
                            <a href="submitAssignment.php" class="list-group-item list-group-item-action"
                                  style="background-color: #c6c0c0;">Submit Assignment</a>
                                   <a href="event.php" class="list-group-item list-group-item-action"  style="background-color: #c6c0c0;">Event</a>
                                   <a href="../index.php"
                                    class="list-group-item list-group-item-action"  style="background-color: #c6c0c0;">Log Out</a></div>
                    </div>
                </div>
            </div>
            
    
    <div class="col-lg-9">
        <h5 style="font-family:Actor; margin-top:10px;">Assignment table</h5>
          <p>The table showing assignment of students.</p>            
          <table class="table table-hover ">
            <thead>
              <tr>
                 <th style="background-color: #c6c0c0;" scope="col">ID</th>
                 <th style="background-color: #c6c0c0;"scope="col">Date</th>
                 <th style="background-color: #c6c0c0;"scope="col">Deadline</th>
                 <th style="background-color: #c6c0c0;"scope="col">SubjectCode</th>
                 <th style="background-color: #c6c0c0;"scope="col">Faculty</th>
                 <th style="background-color: #c6c0c0;" scope="col">Semester</th>
                 <th style="background-color: #c6c0c0;"scope="col">Assignment</th>
                 <th style="background-color: #c6c0c0;"scope="col">Remarks</th>
                 <th style="background-color: #c6c0c0;"scope="col">Teacher</th>

              </tr>
            </thead>
            <tbody>
           <?php

             include "../php/connect.php";
             $query = "SELECT * FROM assignmentpublish";
             $result = mysqli_query($con,$query);
             if(mysqli_num_rows($result) >0){
                 while($record=mysqli_fetch_assoc($result)){
                     $id=$record['id'];
                     $date=$record['Date'];
                     $deadline=$record['Deadline'];
                     $subjectcode=$record['SubjectCode'];
                     $faculty=$record['Faculty'];
                     $semester=$record['Semester'];
                     $assignment=$record['Assignment'];
                     $remarks=$record['Remarks'];
                     $teacher=$record['Teacher'];
                     echo "<tr scope='row'>";
                     echo "<td>$id</td>";
                      echo "<td>$date</td>";
                      echo "<td>$deadline</td>";
                      echo "<td>$subjectcode</td>";
                      echo "<td>$faculty</td>";
                      echo "<td>$semester</td>";
                     echo "<td><a href='../upload/assignmentreceive/$assignment'>Download</a></td>";
                     echo "<td>$remarks</td>";
                     echo "<td>$teacher</td>";
                     echo "</tr>";
                 }


             }


           
        ?>
    </tbody>
  </table>
    </div>
 </div>
 </div>
      
      
       <footer style="background-color: #825889;">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-xl-4">
                <h2 style="font-family: Actor, sans-serif;">ABC College</h2>
                <p class="links">
                   <a href="home.php" style="color: rgb(243,244,245);">Home</a>
                   <strong> · </strong><a href="notice.php" style="color: rgb(243,244,245);">Notice</a>
                   <strong> · </strong><a href="notes.php" style="color: rgb(243,244,245);">Notes</a>
                   <strong> · </strong><a href="viewAssignment.php" style="color: rgb(243,244,245);">View Assignment</a>
                   <strong> · </strong><a href="submitAssignment.php" style="color: rgb(243,244,245);">Submit Assignment</a>
                   <strong> · </strong><a href="event.php" style="color: rgb(243,244,245);">Event</a>
                </p>
            </div>
            
            <div class="col-sm-4 col-md-4 col-xl-4">
                <div>
                <p><i class="fa fa-map-marker"></i>&nbsp; &nbsp; &nbsp;Dharan-10</p>
                <p><i class="fa fa-phone-square"></i>&nbsp; &nbsp;+123456789</p>
                <p><i class="icon ion-email"></i>&nbsp; &nbsp; mail@company.com</p>
                </div>
            </div>
            
            <div class="col-sm-4 col-md-4 col-xl-4">
                <div>
                    <p>Get Connected</p>
                </div>
                
                <div class="social-links social-icons"><a href="#" style="background-color: rgb(242,245,247);"><i class="fa fa-facebook" style="color: rgb(130,88,137);"></i></a><a href="#" style="background-color: rgb(249,250,251);"><i class="fa fa-twitter" style="color: #825889;"></i></a>
                    <a
                        href="#" style="background-color: rgb(244,245,247);"><i class="fa fa-linkedin" style="color: #825889;"></i></a><a href="#" style="background-color: rgb(249,250,251);"><i class="fa fa-github" style="color: #825889;"></i></a></div>
            </div>
        </div>
    </footer>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>