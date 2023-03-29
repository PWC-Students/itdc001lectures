<?php

require_once("./validation.php");

if (isset($_SESSION['user'])) {
    header('Location: view.php');
} else {
    if($_SESSION['valid_data'] == true && $_SESSION['valid_image'] == true){
        $profilepicture = $_SESSION['profilepicture'];
        $userid = $_SESSION['userid'];
        $fname = $_SESSION['fname'];
        $mname = $_SESSION['mname'];
        $lname = $_SESSION['lname'];
        $birthdate = $_SESSION['birthdate'];
        $phone = $_SESSION['phone'];
        $status = $_SESSION['status'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $email = $_SESSION['email'];

        $data = [$profilepicture, $userid, $fname, $mname, $lname, $birthdate, $phone, $status, $username, $password, $email];

        $filename = 'file.csv';
        $f = fopen($filename, 'a');

        if ($f === false) {
            die('Error opening the file ' . $filename);
        }
            
        fputcsv($f, $data);
        fclose($f);
        echo '<br>'.'<br>'.'<span style="color:green; text-align:center; font-size: 24px;">Registration Successful!</span><br><br><a style="color: black; background-color: white; font-size: 20px;" href="loginpage.php">Login</a>';
    }
    else {
        echo '<br>'.'<br>'.'<span style="color:red; text-align:center; font-size: 24px;">Error: Please check your credentials.</span><br><br><a style="color: black; background-color: white; font-size: 20px;" href="register.php">Go Back</a>';
    }
}

