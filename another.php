<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<style>
    #allcon{
        align-items: center;
        text-align: center;
        order: 1px solid blue;
        height: 100hv;
        margin: 100px auto;
    }
    #img{
        border: 2px solid #75fb4c;
        border-radius: 50px;
        height: 100px;
    }
    #fm{
        color: #75fb4c;
    }
    #btn{
        border: unset;
        border-radius: 5px;
        background-color: green;
        width: 10%;
        height: 50px;
    }#btn:hover{
        background-color: #75fb4c;
    }
</style>
<body>

    <div class="container-fluit" id="allcon">
        <div class=""><img src="../images/che.jpg" alt="" id="img"> </div>
        <div id="fm">Form Submitted Successfully!</div>
        <div>SUCCESS!  The form has been submitted successfully. We will reply to you soon!</div>
        <div> <button id="btn"> <a href="another.php"></a> Go Back</button> </div>
        
    </div>
    
    <script>
    setTimeout(function() {
        window.location.href = 'login.php'; 
    }, 2000); 
</script>
</body>
</html>