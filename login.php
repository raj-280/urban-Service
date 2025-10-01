<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $pass = $_POST['pass'];
   
   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      header('location:service.php');
     
   }else{
      $error[] = 'incorrect email or password!';
   }
   
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="" method = "POST">
			<h1>Log in</h1>
			<input type="email" placeholder="Email" name="email" required>
			<input type="password" placeholder="Password" name="pass" required>
			<input type="submit" name = "submit" id = "button">
			<a href="signup.php"> Click Here For Signup....</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Welcome !</h1>
				<p>To Explore Urban Services please login with your personal information.</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>