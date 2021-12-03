
<?php
include 'header.php';
?>
<?php include './includeuser/db.php'?> 


<?php
session_start();

// When form submitted, insert values into the database.
if (isset($_POST['submit'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['user_name']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($connection, $username);
    $email    = stripslashes($_REQUEST['user_email']);
    $email    = mysqli_real_escape_string($connection, $email);
    $password = stripslashes($_REQUEST['user_password']);
    $password = mysqli_real_escape_string($connection, $password);
    $query    = "INSERT into `registration` (user_id, user_name, user_email ,user_password)
                 VALUES ('', '$username' , '$email',' ($password)')";
    $userquery = "INSERT into `users` ( user_email ,user_password)
    VALUES ( '$email','($password)')"; 
    
    $userresult = mysqli_query($connection , $userquery);
    $result   = mysqli_query($connection, $query);
    if ($result) {
        echo "<div class='form'>
              <h3>You are registered successfully.</h3><br/>
              <p class='link'>Click here to <a href='login.php'>Login</a></p>
              </div>";
    } else {
        echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
              </div>";
    }
} 

?>

<body class="text-center" style="background-color: rgb(177, 219, 205);">
<main class="form-signin" >
  <form action="registration.php" method="post" autocomplete="off">
    <img class="mb-4" src="images/logo.png" alt="" width="40%" height="70%">
    <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="user_name">
      <label for="floatingInput">Name</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user_email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="MobNumber" name="user_phonenumber">
      <label for="floatingInput">Phone Number</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder=" Set Password" name="user_password">
      <label for="floatingPassword">Password</label>
    </div>
      
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Register</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021.All rights reserved</p>
  </form>
</main> 



  </body>

