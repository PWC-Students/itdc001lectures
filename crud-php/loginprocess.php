<?php

session_start();

if (isset($_SESSION['user'])) {
    header('Location: view.php');
} else {
    function get_credentials_from_file($path) {
        $fp = fopen($path, 'r');
        while ($line = fgetcsv($fp)) {
            $lines[] = $line;
        }
        fclose($fp);

        return $lines;
    }

    $credentials = get_credentials_from_file('file.csv');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_credentials = function($username, $password) use ($credentials) {
        foreach($credentials as $credential){
            if($credential[8] == $username && $credential[9] == $password){
                return true;
                break;
            }
        }
        return false;
    };

    if($check_credentials($username, $password)){
        $_SESSION['user'] = $username;
        header('Location: view.php');
    } else{
        echo '<br>'.'<br>'.'<span style="color:red; text-align:center; font-size: 24px;">Error: No account found with the info you provided.</span><br><br><a style="color: black; background-color: white; font-size: 20px;" href="loginpage.php">Try again</a>';
    }
}









