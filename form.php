<?php

session_start();

$servername="localhost";
$username="root";
$password="";
$databasename="request_form";
$conn=mysqli_connect($servername,$username,$password,$databasename);
if(!$conn)
{
    die("connection Failed:". mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $name_of_staff = $_POST['name_of_staff'];
    $department = $_POST['department'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $request_type = $_POST['request_type'];
    $subject_of_request = $_POST['subject_of_request'];
    $request_details = $_POST['request_details'];

    $sql_query = "INSERT INTO requests (name_of_staff, department, contact, date, subject_of_request, request_details, request_type)
    VALUES ('$name_of_staff','$department','$contact','$date','$request_type','$subject_of_request','$request_details')";

if(mysqli_query($conn,$sql_query))
 {
     echo '<script type="text/javascript"> 
            alert("Form submitted successfully");
            window.location.href = "login.php";
           </script>';
    session_destroy();
    exit;  
}
else{
    echo"Error:" .$sql ."". mysqli_error($conn);
}

mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="js/main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <title>ICT Request Form</title>
    <style>

        
    </style>
</head>
<body>
 <div class="form-container" id="maincon">

     <div class="form-header">
        <h2>KUMASI TECHNICAL UNIVERSITY<br>ICT DIRECTORATE</h2>
        <h3>STAFF REQUEST FORM</h3>
    </div>
 

    <form class="container " method="post" action="form.php">
   
        <div class="form-group">
            <label  for="name_of_staff" >Name of Staff:</label>
            <input class="form-control" type="text" id="name_of_staff" name="name_of_staff" required>
        </div>  

        <div class="form-group">
            <label for="department">Department/Faculty/Directorate:</label>
            <input class="form-control" type="text" id="department" name="department" required>
        </div>

        <div class="form-group">
            <label for="contact">Mobile/WhatsApp Contact:</label>
            <input  class="form-control" type="text" id="contact" name="contact" required>
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input class="form-control" type="date" id="date" name="date" required>
        </div>

        <div name="request_type" class="form-group">
            <label>Request Type:</label>
            <div class="checkbox-group">
                <label><input class="form-check-input" type="radio" name="request_type" value="password_reset" required> Password Reset (Mail/Domain)</label>
                <label><input class="form-check-input" type="radio" name="request_type" value="lan_network" required> LAN Network/Internet/Wi-Fi</label>
                <label><input class="form-check-input" type="radio" name="request_type" value="isp" required> ISP/Examination/Result</label>
                <label><input class="form-check-input" type="radio" name="request_type" value="intercom "required> Intercom/Landline/VOIP</label>
                <label><input class="form-check-input" type="radio" name="request_type" value="hardware_software" required> Hardware/Software Installation Support</label>
                <label><input class="form-check-input" type="radio" name="request_type" value="components_replacement" required> Components Replacement/Acquisition</label>
                <label><input class="form-check-input" type="radio" name="request_type" value="printer" required> Printer/Copier/Scanner Issues</label>
                <label><input class="form-check-input" type="radio" name="request_type" value="biometrics" required> Biometrics/Clock in</label>
            </div>
        </div>


        <div class="form-group">
            <label for="subject_of_request">Subject of Request:</label>
            <input class="form-control" type="text" id="subject_of_request" name="subject_of_request" required>
        </div>

        <div class="form-group">
            <label for="request_details">Request Details:</label>
            <textarea class="form-control" id="request_details" name="request_details" required></textarea>
        </div>

        <div class="form-footer">
        <input class="btn btn-outline-success" type="submit" name="save" value="submit" style="width: 300px; height:1.2cm; display:contain; margin-bottom:-3px; ">
        </div>    
    </form>

 
</div>
</body>
</html>
