<?php

@include 'config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $sql = "INSERT INTO user (name, email, password, address) VALUES ('$name', '$email', '$password', '$address')";
    
    if ($conn->query($sql) === TRUE) {
		header('location:login.php');
    } else {
        header('location:signup.php');
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
	
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="#" method="POST">
			<h1>Create Account</h1>
			<input type="text" placeholder="Name" name="name"required/>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="password" required/>
			<input type="Address" placeholder="Address" name="address" required>
			<button href="home.html">Sign Up</button>
			<a href="login.php">Click Here For Login...!</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
                <h1>Hello,  cheif!</h1>
				<p>Enter your personal details and <br>start your journey with<br> Urban services.</p>	
			</div>
		</div>
	</div>
</div>
</body>
</html>