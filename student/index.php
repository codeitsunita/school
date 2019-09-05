<?php
    session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }else{
        header('location:../login.php');
    }
?>
    <?php

    include "layouts/header.php";
   ?> 
   <div class="alert alert-success" role="alert"><span><strong><marquee>Welcome To Student Area : <?php echo "$username" ?></marquee></strong></span></div>  
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
            <div class="col">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-xl-4">
                        <div class="serviceBox yellow">
                            <div class="service-icon" style="height: 75px;background-color: #c6c0c0;"><a href="#"></a>
                                <h4 style="color: rgb(38,42,47);font-family: Actor, sans-serif;">Notice</h4>
                            </div>
                            <div class="service-content">
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi risus, condimentum et orci quis, gravida maximus mauris. Praesent varius dolor eget ligula gravida mollis. Praesent ac. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xl-4">
                        <div class="serviceBox yellow">
                            <div class="service-icon" style="height: 75px;background-color: #c6c0c0;"><a href="#"></a>
                                <h4 style="color: rgb(38,42,47);font-family: Actor, sans-serif;">Notes</h4>
                            </div>
                            <div class="service-content">
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi risus, condimentum et orci quis, gravida maximus mauris. Praesent varius dolor eget ligula gravida mollis. Praesent ac. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xl-4">
                        <div class="serviceBox yellow">
                            <div class="service-icon" style="height: 75px;background-color: #c6c0c0;"><a href="#"></a>
                                <h4 style="color: rgb(38,42,47);font-family: Actor, sans-serif;">View Assignment</h4>
                            </div>
                            <div class="service-content">
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi risus, condimentum et orci quis, gravida maximus mauris. Praesent varius dolor eget ligula gravida mollis. Praesent ac. </p>
                            </div>
                        </div>
                    </div>

                </div>
                   
            
             
              
               
                
                  </div>
        </div>
    </div>
       
         <div class="container-fluid">
        <div class="row">
            <div class="col offset-xl-3">
                <div class="row">
                     <div class="col-sm-4 col-md-4 col-xl-4">
                        <div class="serviceBox yellow">
                            <div class="service-icon" style="height: 75px;background-color: #c6c0c0;"><a href="#"></a>
                                <h4 style="color: rgb(38,42,47);font-family: Actor, sans-serif;">Submit Assignment</h4>
                            </div>
                            <div class="service-content">
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi risus, condimentum et orci quis, gravida maximus mauris. Praesent varius dolor eget ligula gravida mollis. Praesent ac. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xl-4">
                        <div class="serviceBox yellow">
                            <div class="service-icon" style="height: 75px;background-color: #c6c0c0;"><a href="#"></a>
                                <h4 style="color: rgb(38,42,47);font-family: Actor, sans-serif;">Event</h4>
                            </div>
                            <div class="service-content">
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi risus, condimentum et orci quis, gravida maximus mauris. Praesent varius dolor eget ligula gravida mollis. Praesent ac. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
<?php        
include "layouts/footer.php";
?>