<?php 
    require_once './code.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo PI?></p>
    <p><?php echo Pi?></p>
    <p><?php echo $x?></p>
    <p><?php echo $y?></p>
    <p><?php echo($true)?></p>
    <p><?php var_dump($isEqual)?></p>
    <p>$num1 == $numStr => <?php var_dump($isNumEqual)?></p>
    <p>$num1 === $numStr => <?php var_dump($isNumEqualToStr)?></p>
    <p><?php echo $spaceship ?></p>
    <p><?php var_dump($logicalAnd) ?></p>
    <p><?php var_dump($logicalOR) ?></p>
    <p><?php var_dump($logicalOR) ?></p>
    <p><?php echo$fullName ?></p>
    <p><?php var_dump($fullName) ?></p>
    <p><?php echo $associativeArr['prelim'] ?></p>
    <p><?php echo $associativeArr['midterm'] ?></p>
    <p><?php echo $associativeArr['finals'] ?></p>
    <p><?php echo $fruits[1][1] ?></p>
    <p><?php echo $printValue ?></p>
    <p><?php echo doWhileLoop() ?></p>
    <p><?php echo whileLoop() ?></p>
    <p><?php echo forLoop() ?></p>
    <p><?php echo forEachFuntion() ?></p>
</body>
</html>