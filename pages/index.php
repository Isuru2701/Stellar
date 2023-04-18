<form action="signup.inc.php" method="POST">
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../styles/style.css">

</head>

<body>
	
<div class="container">	

<div class="login-box">
	<h2>Login</h2>
	<form action="login.inc.php" method="POST">
		<div class="input-box">
			<input type="text" name="username" required>
			<label>Username</label>
		</div>
		<div class="input-box">
			<input type="password" name="password"  required>
			<label>Password</label>
		</div>

		<div class="forgot-password">
			<a href="#">Forgot Password?</a>
		</div>

		<button type="submit" class="btn">Login</button>

		<div class="signup-link">
			Create an account?
			<a href="Signup.php"> Sign Up</a>
		</div>
		<?php
           if (isset($_GET["error"])){
              if($_GET["error"] == "emptyfields"){
                echo "<p>Fill in all Fieldss!</p>";
              }
              else if($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect Login Information!</p>";
              }
              else if($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper email!</p>";
              }
              else if($_GET["error"] == "incorrectpassword"){
                echo "<p>Passwords dont match my guy!</p>";
              }
              else if($_GET["error"] == "usernametaken"){
                echo "<p>Username is already taken!</p>";
              }
           }
        ?>

		<div class="social-media">
			<a href="#"><i class='bx bxl-google' ></i></a>
			<a href="#"><i class='bx bxl-facebook' ></i></a>
			<a href="#"><i class='bx bxl-instagram' ></i></a>	
		</div>

	</form>
	
</div>

<span style="--i:0;"></span>
<span style="--i:1;"></span>
<span style="--i:2;"></span>
<span style="--i:3;"></span>
<span style="--i:4;"></span>
<span style="--i:5;"></span>
<span style="--i:6;"></span>
<span style="--i:7;"></span>
<span style="--i:8;"></span>
<span style="--i:9;"></span>
<span style="--i:10;"></span>
<span style="--i:11;"></span>
<span style="--i:12;"></span>
<span style="--i:13;"></span>
<span style="--i:14;"></span>
<span style="--i:15;"></span>
<span style="--i:16;"></span>
<span style="--i:17;"></span>
<span style="--i:18;"></span>
<span style="--i:19;"></span>
<span style="--i:20;"></span>
<span style="--i:21;"></span>
<span style="--i:22;"></span>
<span style="--i:23;"></span>
<span style="--i:24;"></span>
<span style="--i:25;"></span>
<span style="--i:26;"></span>
<span style="--i:27;"></span>
<span style="--i:28;"></span>
<span style="--i:29;"></span>
<span style="--i:30;"></span>
<span style="--i:31;"></span>
<span style="--i:32;"></span>
<span style="--i:33;"></span>
<span style="--i:34;"></span>
<span style="--i:35;"></span>
<span style="--i:36;"></span>
<span style="--i:37;"></span>
<span style="--i:38;"></span>
<span style="--i:39;"></span>
<span style="--i:40;"></span>
<span style="--i:41;"></span>
<span style="--i:42;"></span>
<span style="--i:43;"></span>
<span style="--i:44;"></span>
<span style="--i:45;"></span>
<span style="--i:46;"></span>
<span style="--i:47;"></span>
<span style="--i:48;"></span>
<span style="--i:49;"></span>

</div>

</body>


</html>