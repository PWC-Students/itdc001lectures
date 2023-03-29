<?php
    require_once "./backend/create.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>
    <form action="./backend/create.php" method="POST">
        <fieldset>
            <legend>Student Details</legend>
            <label for="firstname">First Name: </label><br>
            <input type="text" name="firstname" required>   
            <br>
            <label for="lastname">Last Name: </label><br>
            <input type="text" name="lastname" required>
            <br>
            <label for="email">Email: </label><br>
            <input type="email" name="email" required>
            <br>
            <label for="password">Password: </label><br>
            <input type="password" name="password" required>
            <br>
            <label for="gender">Gender: </label><br>
            <input type="radio" name="gender" value="Male" required>Male
            <input type="radio" name="gender" value="Female" required>Female
            <br>
            <label for="birthday">Birthday: </label><br>
            <input type="date" name="birthday" required>
            <br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
    
</body>
</html>