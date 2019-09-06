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
    <meta charset="UTF-8">
    <title>Assignment publish</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>
       body{
        background-image: linear-gradient(to left,rgba(100,40,150,0.6),rgba(140,100,90,0.3));
       }
       form{
           justify-content: center;
           margin-left: 500px;
           padding: 10px;
           width: 400px;
           max-height: 630px;
           background-color: white;
           border-style:solid 1px white;
       }
       
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
        margin-top:35px;
        background-color: transparent;
    }
        @media  screen and (max-width:600px){
           form{
               margin-left:30px;
           }
       }
    @media  screen and (min-width:600px){
           form{
               margin-left:90px;
           }
       }
    @media  screen and (min-width:1200px){
           form{
               margin-left:500px;
           }
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
      <li><a href="home.php">Home</a></li>
      <li class="dropdown active">
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
      <li class=""><a href=eventreceive.php>Events</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
           <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
    </ul>
  </div>
</nav>
  
    <form action="../php/assignmentpublish.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="subjectCode">SubjectCode:</label>
      <input type="text" class="form-control" id="subl" placeholder="Enter subject" name="txtCode">
    </div>
    <div class="form-group">
      <label for="Date">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter date" name="txtDate">
    </div>
   
    <div class="form-group">
      <label for="Deadline">Deadline:</label>
      <input type="date" class="form-control" id="deadline" placeholder="Enter deadline for submisssion" name="txtDeadline">
    </div>
    
     <div class="form-group">
     <label for="faculties">Faculty</label>
        <select name="txtFaculty" id="" class="form-control">
            <?php
                include "../php/connect.php";
                $query = "SELECT * FROM faculty";
                $result = mysqli_query($con,$query);
                while($record =mysqli_fetch_assoc($result)){
                    $faculty =$record['Faculty'];
                    ?>
                    <option value="<?php echo $faculty ?>"> <?php echo $faculty ?></option>
                    <?php
                }
            ?>
          
         </select>
    </div>
    <div class="form-group">
     <label for="semester">Semester</label>
        <select name="txtSemester" id="" class="form-control">
            <option value="first">first</option>
            <option value="second">second</option>
            <option value="third">third</option>
          
         </select>
    </div>
    <div class="form-group">
      <label for="teacher">Teacher:</label>
      <input type="text" class="form-control" id="subl" placeholder="Enter subject" name="txtTeacher">
    </div>
    <div class="form-group">
        <label for="file">Remarks:</label>
        <input style="width: 70%;height: 40px" type="text" name="txtRemarks" class="form-control-file" id="file">
   </div>
    <div class="form-group">
    <label for="file">File:</label>
    <input type="file" name="file" class="form-control-file" id="file" placeholder="upload">
    
  </div>
  <button type="submit" name="btnSubmit" class="btn btn-transparents btn-lg" style="color: black; margin-bottom: 10px;">Submit</button>
  
 
   </form>
     
     
<footer class="container-fluid text-center" style=" height:50px;">
  <p>copyright@Pedagogy 2019</p>
</footer>
 
   
     
</body>
</html>