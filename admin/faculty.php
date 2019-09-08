
<?php
    session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }else{
        header('location:../login.php');
    }
?><!DOCTYPE html>
<html>
<title>Our Project+</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
    text-align: center;
}
    td{
        font-weight: bolder;
        font-size: 17px;
        padding: 15px
    }

tr:nth-child(even){background-color: white}

th {
  background-color: #4CAF50;
  color: white;
}
    .header a:hover{
        background-color: white;
    }
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
   
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="teacherregister.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>Teacher Register</a>
    <a href="events.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>Events</a>
    <a href="notice.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>Notice</a>
    <a href="faculty.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-history fa-fw"></i>  Faculty</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a>
     <a href="../login.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Logout</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5 style="float:left"><b><i class="fa fa-dashboard"></i> Faculty Name</b></h5>
    <h5 style="float:right; margin-right:70px"><b><a href="addfaculty.php">ADD</a></b></h5>
  </header>
       <table style="width:100%">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Faculty</th>
            </tr>
          </thead>
          <tbody>
            <?php
              
              include "../php/connect.php";
              
              $query = "SELECT * FROM faculty";
              
              $result = mysqli_query($con,$query);
              
              if(mysqli_num_rows($result) > 0){
                  while($record = mysqli_fetch_assoc($result)){
                      $id = $record['id'];
                      $faculty = $record['Faculty'];
                    ?>
                    <tr>
                        <td><?php echo "$id"  ?></td>
                       <td><?php echo "$faculty"  ?> </td>
                    </tr>
                    
                    <?php
                  }
              }
              
              
              ?>
          </tbody>
        </table>
   </div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
