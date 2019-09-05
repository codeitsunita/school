
<?php        
include "layouts/header.php";
?>

<?php
    session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }else{
        header('location:../login.php');
    }
?>

        
        
        
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
  <p style="margin-top:10px;">The table showing notes of students.</p>  
         
  <table class="table table-hover ">
    <thead>
      <tr>
         <th scope="col">ID</th>
         <th scope="col">SubjectCode</th>
         <th scope="col">Faculty</th>
         <th scope="col">Semester</th>
         <th scope="col">Notes</th>
         <th scope="col">Teacher</th>

      </tr>
    </thead>
    <tbody>
   <?php
        
     include "../php/connect.php";
     $query = "SELECT * FROM notes";
     $result = mysqli_query($con,$query);
     if(mysqli_num_rows($result) >0){
         while($record=mysqli_fetch_assoc($result)){
             $id=$record['Id'];
             $subjectcode=$record['SubjectCode'];
             $faculty=$record['Faculty'];
             $semester=$record['Semester'];
             $note=$record['Notes'];
             $teacher=$record['Teacher'];
             echo "<tr scope='row'>";
             echo "<td>$id</td>";
              echo "<td>$subjectcode</td>";
              echo "<td>$faculty</td>";
              echo "<td>$semester</td>";
             echo "<td><a href='../upload/notesTech/$note'>Download</a></td>";
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

    
 <?php        
include "layouts/footer.php";
?>