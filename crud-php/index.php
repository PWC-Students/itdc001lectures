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
    <title>CSV Records</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
	    html,
	    body {
	        text-align: center;
	        font-family: 'Roboto', sans-serif;
	        background-color: black;
	        color: white;
	        letter-spacing: .15em;
	    }
	    a {
	        text-decoration: none;
	        font-family: 'Roboto', sans-serif;
	        background-color: black;
	        color: white;
	        border: 2px solid gray;
	        padding: 5px;
	        font-size: 10px;
	    }
	    

	</style>

</head>
<body>
    <div style = "position:absolute; right:25px; top:25px;">
       <a style="font-size: 2vh;" href="register.php"> Sign Up </a>
       <a style="font-size: 2vh;" href="loginpage.php"> Login </a>
    </div>
    <div style="font-size: 8vh; margin-top: 30vh; letter-spacing: .30em;" class="typewriter">
    	<h1>Welcome</h1>
    </div>
    

</body>
</html>