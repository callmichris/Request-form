<?php
include 'connect.php';


if(isset($_POST['signUp'])){
    $staffid=$_POST['staff_id'];
    $department=$_POST['department'];
    $password =$_POST['password'];
    
    $checkID = "SELECT * From staff where staff_id ='$staffid' ";
    $result=$conn->query($checkID);
    if($result->num_rows>0){
        echo '<script type = "text/javascript">';
        echo 'alert("Staff ID already exists")';
        echo '</script>';
    }
else{
    $insertQuery="INSERT INTO staff (staff_id,department, password)
                   VALUES('$staffid','$department','$password')";
        if($conn->query($insertQuery)==TRUE){
            header("location: login.php");
            exit;
        }

 
    }


}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Sign Up</title>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="register.css">
    
</head>
<body>
    <div id="signup" style="display:none;"></div>
        <form class="container"method="post" action="login.php">
            <div class="head">
                <h2>KUMASI TECHNICAL UNIVERSITY STAFF REQUEST  FORM</h2>
            </div>
            <div class="img-container">
                <h1 class="form-title">SIGN UP</h1>
                <div>
                    <img class="logo"  src="../images/kstu.png" id="logo" alt="kstu.png">
                </div>
            </div>
            <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="staff id" id="staff id"  placeholder="Staff ID " required >
                    <label for="staff id" id="staffid" >Staff ID</label>
                </div>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="department" id="department" placeholder="Department" required >
                <label for="department" id="department">Department</label>
            </div>

            <div class="input-group"> 
                <i class="fas fa-lock"></i>
                <input type="password" name="password"  placeholder="Password" required >
                <label for="password"id="password" name="password"  >Password</label>
            </div>
            <input type="submit" value="Sign Up" class="btn" name="signUp">

        </form>
</body>
<script src="../tryout/js/script.js"></script>
</html>       