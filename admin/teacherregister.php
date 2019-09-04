<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>pedagpgy register</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <form class="form-horizontal custom-form" style="background-color: #208f8f;width: 542px;height: 846px; " action="../php/teacherregister.php" method="post">
                <h1>Register Form</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Fullname</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="fullname" required></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="email-input-field">UserName</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="username" required></div>
                </div>
                <div class="form-group" style="height: 29px;">
                    <div class="col-sm-4 label-column"><label class="control-label" for="email-input-field">Password</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password" required></div>
                </div>
                <div class="form-group" style="height: 29px;">
                    <div class="col-sm-4 label-column"><label class="control-label" for="email-input-field">Password-retype</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="retype" required></div>
                </div>
                <div class="form-group" style="width: 462px;height: 49px;padding: -15px;filter: contrast(117%);">
                    <div class="col-sm-4 label-column" style="height: 23px;"><label class="control-label" for="dropdown-input-field" style="margin: 20px;width: 54px;">Faculty</label></div>
                    <div class="col-sm-4 input-column" style="width: 208px;height: 44px;padding: 0px;">
                        <select name="faculty" class="form-control" style="margin: 20px;padding: 9px;height: 43px;color: #625d5d;width: 197px;">
                            <?php
                                include "php/connect.php";
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
                </div>
                <div class="form-group" style="width: 462px;height: 62px;padding: -10px;filter: contrast(117%);">
                    <div class="col-sm-4 label-column" style="height: 23px;"><label class="control-label" for="dropdown-input-field" style="margin: 20px;width: 54px;">Semester</label></div>
                    <div class="col-sm-4 input-column" style="width: 208px;height: 44px;padding: 0px;color: #f2eded;">
                        <select name="semester" class="form-control" style="margin: 20px;padding: 0px;height: 43px;color: #625d5d;width: 197px;">
                            <option value="first">first</option>
                            <option value="second">second</option>
                            <option value="third">third</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="email-input-field">Address</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="address"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="email-input-field">Contact No</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="tel" name="mobile" required></div>
                </div>
                <div class="form-group">
                    <input  type="file" name="file">
                </div>
                
                <div class="checkbox"><label><input type="checkbox">I've read and accept the terms and conditions</label></div><button class="btn btn-default submit-button" type="submit" name="btnSubmit">Submit</button></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>