<?php
    require_once "./code.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to PHP</title>
</head>
<body>
    <!-- Server Side Scripting -->
    <p></p><?php echo "Hello World!"; ?></p>
    <p><?php echo $firstName?></p>
    <p><?php echo $lastName?></p>
    <p><?php echo $email?></p>
    <p><?php echo $isMarried?>
    <p><?php var_dump($isMarried)?></p>
    <p><?php echo $gpa?></p>
    <p><?php print_r($gradesArray)?></p>
    <p><?php var_dump($gradesArray)?></p>
    <p><?php print_r($gradesObj)?></p>
    <p><?php var_dump($gradesObj)?></p>
    <p><?php var_dump($gradesObj)?></p>
    <p><?php print_r($gradesPrelims)?></p>
    <p><?php var_dump($gradesPrelims)?></p>


</body>
</html>