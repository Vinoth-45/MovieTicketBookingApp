<?php


// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location:index.php');
}


?>
<div class="admin-section-header">
    <div class="admin-logo">
        <img src="../images/pvradmin.png" alt="" style="width:200px; height:80px">
    </div>
    <div class="admin-login-info">

        <div style="padding: 0 20px;">

            <h2><a href="admin.php">Admin Panel</a></h2>
        </div>



        <?php 
        
        
        if (isset($_SESSION['username']))
         {?>
        <form method='post' action="" style="padding-right:10px;">
            <input type="submit" value="Logout" class="btn btn-outline-warning" name="but_logout">
        </form>
        <?php } 
       
       ?>

    </div>
</div>