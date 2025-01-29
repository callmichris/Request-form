<?php
include 'connect.php';


if (isset($_POST['signin'])) {
    $staffid = $_POST['staff_id'];
    $department = $_POST['department'];
    $password = $_POST['password'];
    
    $checkID = "SELECT * From staff where staff_id ='$staffid' AND password='$password'";
    $result = $conn->query($checkID);
    
    if (!$result) {
        echo '<script type="text/javascript">';
        echo 'alert("Incorrect Staff ID or Password")';
        echo '</script>';
    } elseif ($result->num_rows > 0) {
      header("Location: form.php");
      exit; 
    } else {
      echo '<script type="text/javascript">';
      echo 'alert("Incorrect Staff ID or Password")';
      echo '</script>';
    }
  }
if (isset($_POST['forgot'])) {
    header("location:register.php");
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="login" style="display:none;"></div>
        <form class="container" method="post" >
            <div class="head">
                <h2>KUMASI TECHNICAL UNIVERSITY STAFF REQUEST  PORTAL</h2>
            </div>
            <div class="img-container">
                <h1 class="form-title">LOGIN</h1>
                <div>
                    <img class="logo"  src="../images/kstu.png" id="logo" alt="kstu.png">
                </div>
            </div>
            <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="staff_id" id="staffid"  placeholder="Staff ID " >
                    <label for="staffid" id="staff_id" >Staff ID</label>
                </div>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="department" id="department" placeholder="Department" >
                <label for="department" id="department">Department</label>
            </div>

            </div>
            <div class="input-group"> 
                <i class="fas fa-lock"></i>
                <input type="password"  placeholder="Password" name="password" >
                <label type="password" for="password"id="password" name="password"  >Password</label>
            </div>
            <input type="submit" value="Login" class="btn" name="signin"><br><br>
            <p><button class="btn btn-warning" name="forgot">Sign Up</button></p>


        </form>

    </div>

   
<script src="js/script.js"></script>
</body>
</html>