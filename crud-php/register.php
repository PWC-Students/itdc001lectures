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
	<title>Register</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
		a {
		    
		    font-family: 'Roboto', sans-serif;
		    background-color: black;
		    color: white;
		    border: 2px solid gray;
		    padding: 5px;
		    font-size: 10px;
		}

		.buttonHolder{ text-align: center; }
	</style>

</head>
<body>
	<div class="buttonHolder">
	 	<h1>Register</h1>
	</div>
		<form method="POST" action=./validation.php enctype="multipart/form-data" style="margin: auto; width: 200px;">
			<h3>Account Information:</h3>
			<i class="fa fa-user icon"></i>
			<input type="text" id="username" name="username" placeholder="Username" required style="width: 150px;"><br><br>
			<i class="fa fa-envelope icon"></i>
			<input type="text" id="email" name="email" placeholder="Email Address"required style="width: 148px;"><br><br>
			<i class="fa fa-key icon"></i>
			<input type="password" id="password" name="password" placeholder="Password"required style="width: 148px;"><br><br>


			<h3>Personal Information:</h3>
			<input type="text" id="fname" name="fname" placeholder="First Name"required style="width: 180px;"><br><br>
			<input type="text" id="mname" name="mname" placeholder="Middle Name (NA if none)"required style="width: 180px;"><br><br>
			<input type="text" id="lname" name="lname" placeholder="Last Name"required style="width: 180px;"><br><br>
			
			Date of Birth:
			<input type="date" name="birthdate" value="<?php echo date('Y-m-d'); ?>" style="width: 180px;"/><br><br>
			Phone Number: <br>
			<input type="tel" id="phone" name="phone" placeholder="Ex.0949-0000-000" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required style="width: 180px;"><br><br>
			Civil Status: <br>
			<select name="status" id="status" style="width: 190px;">
				<option value="Single">Single</option>
				<option value="Married">Married</option>
				<option value="Divorced">Divorced</option>
				<option value="Widowed">Widowed</option>
			</select><br><br>

			Upload Photo:
			<input type="file" name="fileToUpload" id="fileToUpload" required/><br><br>
			<div class="buttonHolder">
				<input style="color: black; background-color: white; font-size: 24px;" type="submit" name="submit" value="Register" style="margin: auto;">
			</div>
		</form>
		<br>
		Already have an account?
			<a style="color: black; background-color: white; font-size: 14px; " href="loginpage.php">Sign In</a>
</body>
</html>