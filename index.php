<?php
// Initialize the session
session_start();
 
//Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login2.php");
   exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PVR Cinemas</title>
</head>
<body
    style="background-color:#012443; background-size:cover;overflow-x:hidden;background-repeat:no-repeat ">
    <!-- Navigation Part-->
    <div class="row">
        <?php include ('navbar.php'); ?>
    </div>
        <?php include_once 'moviesidebar.php'  ?>
        <?php include_once 'footer.php'  ?>
</body>
</html>