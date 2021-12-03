<?php include 'header.php'; ?>
<?php include './includeuser/db.php' ?>
<?php

  /*if (isset($_POST['submit']))
   {
   


  $useremail = $_POST['user_email'];
  $password =  $_POST['user_password'];


  $query = "SELECT * FROM registration where user_email='$useremail' AND user_password = '$password'";

  $result = mysqli_query($connection , $query);
  $row = mysqli_fetch_array($result , MYSQLI_ASSOC);
  $num = mysqli_num_rows($result); 
   if($num == 1) 
    {
    echo "Login Successfull";
 }
     else
      {
    echo "Invalid Email ";
     }
    }
    else{
      "error";
    }*/

    if (isset($_POST['submit']))
     {
      $username = mysqli_real_escape_string($connection, $_POST['user_email']);
      $password = mysqli_real_escape_string($connection, $_POST['user_password']);
    
     /* if (empty($username)) {
        array_push($errors, "Username is required");
      }
      if (empty($password)) {
        array_push($errors, "Password is required");
      }*/
  
        $query = "SELECT * FROM registration WHERE user_name='$username' AND user_password='$password'";
        $results = mysqli_query($connection, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
          echo "Wrong username/password combination";
        }
      }

  
    
    
    ?>
    




<body class="text-center" style="text-align: center;" >
<main class="form-signin" style="background-color: blanchedalmond;"  >
  <form action="login.php" method="post">
    <img class="mb-4" src="images/logo.png" alt="" width="40%" height="70%">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user_email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="user_password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021.All rights reserved</p>
  </form>
</main>    
  </body>

