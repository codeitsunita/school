<?php
    session_start();
    if(isset($_SESSION['faculty'])){
        $faculty = $_SESSION['faculty'];
    }else{
        header('location:../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assignment Receive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      body{
          background-image: linear-gradient(to right,rgba(0,100,230,0.5),rgba(0,180,0,0.3));
      }
    th{
        text-align: center;
      }
      .clear{
          clear: both;
      }
      img{
          border-radius: 0;
          transition-delay: .1s;
      }
      img:hover{
          border-radius: 50%;
      }
     
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Teacher</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="home.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Assignment<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="publishAssignment.php">Publish</a></li>
          <li><a href="receiveAssignment.php">Receive</a></li>
          
        </ul>
      </li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="publishNotes.php">Publish</a></li>
           </ul>
      </li>
      <li class="active"><a href="eventreceive.php">Events</a></li>
     </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h1 style="text-align:center">Events</h1>
   <?php
        
     include "../php/connect.php";
     $query = "SELECT * FROM events";
     $result = mysqli_query($con,$query);
     if(mysqli_num_rows($result) >0){
         while($record=mysqli_fetch_assoc($result)){
             $subject=$record['Subject'];
             $date=$record['Date'];
             $file_name=$record['Image'];
             $remarks=$record['Remarks'];
             $postby=$record['Postby'];
            ?>
            <hr>
            <div class="row">
                <div class="col-md-3">
                   
                    <?php echo "<img style='border-radiius:15%;' src='../upload/image/$file_name' width='250' height='150'>" ?>
                </div>
                <div class="col-md-9">
                    <?php echo "<h1 style='margin-top:-10px;text-decoration:underline;'>$subject</h1>";
                        echo "$date";
                        echo"<p>$remarks </p>";
                        echo "<h4 style='float:right;color:#444'>Post by:$postby</h4>";
                    ?>
                     
                </div>
            </div>
            <?php
         }
     
        
     }
?>
        


<footer class="container-fluid text-center" style="color: black; margin-top: 100px;">
  <p>copyright@Pedagogy 2019</p>
</footer>
 
    </div>

</body>
</html>
