<?php
    require_once "code.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objects and Classes</title>
</head>
<body>
    <h1>Person</h1>
    <p>From Parent Class ------- <?= ($mySelf->printName()); ?></p>
    <p>From Child Class Student -------<?= ($friend->printName()); ?></p>
    <p>From Child Class Classmate -------<?= ($classmate->printName()); ?></p>
</body>
</html>