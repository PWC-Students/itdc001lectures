<?php

session_start();

if (isset($_SESSION['user'])) {
    header('Location: view.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		html, body {
			text-align: center;
		 	font-family: 'Roboto', sans-serif;
		 	background-color: black;
		 	color: white;
		 	letter-spacing: .15em;
		}
	</style>

</head>
<body>
    <h1>Login</h1>
		<form method="POST" action=./loginprocess.php enctype="multipart/form-data" style="margin: auto; width: 220px;">
			<i class="fa fa-user icon"></i>
			<input type="text" id="username" name="username" placeholder="Username" required style="width: 180px; height: 30px;"><br><br>
			<i class="fa fa-key icon"></i>
			<input type="password" id="password" name="password" placeholder="Password"required style="width: 180px; height: 30px;"><br><br>
            <input  type="submit" name="submit" value="Submit" style="margin: auto;">
		</form>
		<br><br>
		Don't have an account?
			<a style="color: black; background-color: white; font-size: 14px; padding: 5px; " href="register.php">Sign Up</a>

</body>
</html>