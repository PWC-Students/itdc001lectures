<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html,
        body {
            text-align: center;
            height: 100%;
            font-family: 'Roboto', sans-serif;
            background-color: black;
            color: white;
            letter-spacing: .15em;
        }
        table {
            margin: 0 auto;
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

	<?php

	session_start();

	if(isset($_POST['submit'])){
	    $userid = (rand(10000009,99999999));
	    $username = $_POST['username'];
	    $password = $_POST['password'];
	    $fname = $_POST['fname'];
	    $mname = $_POST['mname'];  
	    $lname = $_POST['lname'];
	    $birthdate = date('Y-m-d', strtotime($_POST['birthdate']));
	    $phone = $_POST['phone'];
	    $status = $_POST['status'];
	    $email = $_POST['email'];

	    /*
	        A function to validate the image uploaded
	    */
	    function uploadImage(){
	        $target_dir = "uploads/";
	        $target_file = $target_dir . $_POST['fname']. $_POST['lname']. basename($_FILES["fileToUpload"]["name"]);
	        $uploadOk = 1;
	        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	        $isUploaded = false;

	        /*
	            Check if image file is a actual image or fake image
	        */
	        if(!isset($_FILES["fileToUpload"])) {
	            echo '<br>'.'<span style="color:red;text-align:center;">Please upload your profile pifture.</span>';
	        }

	        /*
	            Check if image file is a actual image or fake image
	        */
	        if(isset($_POST["submit"])) {
	            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	            if($check !== false) {
	                $uploadOk = 1;
	            } else {
	                echo '<br><br>'.'<span style="color:red; text-align:center; font-size: 24px;">File is not an image.</span>';
	                $uploadOk = 0;
	            }
	        }

	        /*
	            Check if file already exists
	        */
	        if (file_exists($target_file)) {
	           echo '<br><br>'.'<span style="color:red; text-align:center; font-size: 24px;">Sorry, file already exist.</span>';
	           $uploadOk = 0;
	       }

	        /*
	            Check file size
	        */
	        if ($_FILES["fileToUpload"]["size"] > 5000000) {
	           echo '<br><br>'.'<span style="color:red; text-align:center; font-size: 24px;">Sorry, your image file size is too large.</span>';
	           $uploadOk = 0;
	       }

	        /*
	            Allow certain file formats
	        */
	        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	       && $imageFileType != "gif" ) {
	           echo '<br><br>'.'<span style="color:red; text-align:center; font-size: 24px;">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</span>';
	           $uploadOk = 0;
	       }

	        /*
	            Check if $uploadOk is set to 0 by an error
	        */
	        if ($uploadOk == 0) {
	           echo '<br><br>'.'<span style="color:red; text-align:center; font-size: 24px;">Sorry, there was an error uploading your file.</span>';
	        // if everything is ok, try to upload file
	       } else {
	        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file )) {
	            $isUploaded = true;
	            // echo '<br>'."The file ". htmlspecialchars( basename($_FILES["fileToUpload"]["name"]). $_POST['fname'] . '.'). " has been uploaded.";
	         } else {
	         	echo '<br><br>'.'<span style="color:red; text-align:center; font-size: 24px;">Sorry, there was an error uploading your file.</span>';
	         }
	       }

	       return $isUploaded;
	    }

	    /*
	        A function to validate the input data
	    */
	    function validateData(){
	        $isFirstNameValid = false;
	        $isMiddleNameValid = false;
	        $isLastNameValid = false;
	        $isEmailValid = false;

	        //check first name format
	        if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname'])) {
	        	echo '<br><br>'.'<span style="color:red; text-align:center; font-size: 24px;">First Name must contain letters and white space only.</span>';
	            $isFirstNameValid = false;
	        } else {
	            $isFirstNameValid = true;
	        }

	        //check middle name format
	        if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['mname'])) {
	        	echo '<br><br>'.'<span style="color:red; text-align:center; font-size: 24px;">Middle must contain letters and white space only.</span>';
	            $isMiddleNameValid = false;
	        } else {
	            $isMiddleNameValid = true;
	        }

	        //check last name format
	        if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lname'])) {
	        	echo '<br><br>'.'<span style="color:red; text-align:center; font-size: 24px;">Last Name must contain letters and white space only.</span>';
	            $isLastNameValid = false;
	        } else {
	            $isLastNameValid = true;
	        }

	        //check email format
	        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$_POST['email'])) {
	        	echo '<br><br>'.'<span style="color:red; text-align:center; font-size: 24px;">Please Enter a Valid Email address.</span>';
	            $isEmailValid = false;
	        } else {
				/*
					Now if email format is valid, check if email already existed

	        		First, get csv file and return an array
	        	*/
	        	function getFile($path) {
	        	    $fp = fopen($path, 'r');
	        	    while ($line = fgetcsv($fp)) {
	        	        $lines[] = $line;
	        	    }
	        	    fclose($fp);

	        	    return $lines;
	        	}
	        	$credentials = getFile('file.csv');
	        	$email_input = $_POST['email'];

	        	//check if the email about to be registered is already existing by checking the array returned
	        	$check_email = function($email_to_check) use ($credentials) {
	        	    foreach($credentials as $credential){
	        	        if($credential[10] == $email_to_check){
	        	            return true;
	        	            break;
	        	        }
	        	    }
	        	    return false;
	        	};

	        	if($check_email($email_input)){
	        		echo '<br>'.'<br>'.'<span style="color:red; text-align:center; font-size: 24px;">The email you provided was already registered. Do you wish to sign in?</span><br><br><a style="color: black; background-color: white; font-size: 20px;" href="loginpage.php">Go To Login Page</a>';
	        	    $isEmailValid = false;
	        	} else{
	        	    $isEmailValid = true;
	        	}
	            
	        }

	        if($isFirstNameValid && $isMiddleNameValid && $isLastNameValid && $isEmailValid) {
	            return true;
	        } else{
	            return false;
	        }
	    }

	    if(validateData() === true && uploadImage() === true){
	    	$profilepicture = $_POST['fname']. $_POST['lname']. basename($_FILES["fileToUpload"]["name"]);

	    	$_SESSION['profilepicture'] = $profilepicture;
	    	$_SESSION['username'] = $username;
	    	$_SESSION['password'] = $password;
	    	$_SESSION['userid'] = $userid;
	    	$_SESSION['fname'] = $fname;
	    	$_SESSION['mname'] = $mname;
	    	$_SESSION['lname'] = $lname;
	    	$_SESSION['birthdate'] = $birthdate;
	    	$_SESSION['phone'] = $phone;
	    	$_SESSION['status'] = $status;
	    	$_SESSION['email'] = $email;

	    	$_SESSION['valid_data'] = true;
	    	$_SESSION['valid_image'] = true;

	    	header('Location: insert.php');
	    } else {
    		echo '<br>'.'<br>'.'<span style="color:red; text-align:center; font-size: 24px;">Error: Please check your credentials.</span><br><br><a style="color: black; background-color: white; font-size: 20px;" href="register.php">Try Again</a>';
    	}
	}

	?>
	</body>
</html>