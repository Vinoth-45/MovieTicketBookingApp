<?php 

include '../includeuser/db.php';
session_start();


if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysqli_query($link, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: admin.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
 <?php include('mainheader.php'); ?>
    <?php include('header.php'); ?>
    <div class="admin-container">

    

        <?php include('sidebar.php'); ?>
        <div class="admin-container">

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<style>
        .container
        {
            
            width: 400px;
            height: 100%;
            align-items: center;
            margin-left:400px;
            margin-top: 100px;
           
           
        }
        
        .form-control
        {
            padding: 10px 10px 0 0 ;
            width: 250px;

        }
        .form-signin
        {
            padding-bottom: 10px;
        }
        
    </style>


	<title>Login Form</title>
</head>
<body>
	
	<div class="container">
		<form action="" method="POST" class="">
			<p class="login-text" style="font-size: 2rem; font-weight:600;">Admin Login</p>
			<div class=" form-signin">
				<input type="text" class="form-control" placeholder="Username" name="username"  required>
			</div>
			<div class="form-signin ">
				<input type="password" class="form-control" placeholder="Password" name="password" required >
			</div>
			<div class="form-signin">
				<button name="submit" class="btn btn-large btn-primary ">Login</button>
			</div>
		
		</form>
	</div>
</body>
</html>