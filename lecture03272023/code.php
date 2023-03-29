<?php

// ------ Constants
define("PI", 3.1416);
CONST Pi = 3.1416;

// ------ Arithmetic Operator
$a = 123 + 123;
$b = 1 - 1;
$c = 1 * 1;
$d = 2 / 2;
$e = 3 % 3;

// ------ Assignment Operator
$x = 123;
$y = 1;

//Server Side Scripting
//$x = $x + 123;
$x += 123;
$y -= 123;
$x *= 123;
$x /= 123;

//Client Side Scripting
/*let x = 123;
x += 123;
x -= 123;
x *= 123;
x /= 123;
*/

// ------ Comparison Operator
$num1 = 2;
$num2 = 2;
$numStr = "2";
$true = false;

//Equality Operator
$isEqual = $x == $y;
$isNumEqual = $num1 == $numStr;

// Inequality Operator
$isEqual = $x != $y;

// Strict Equality Operator
$isNumEqualToStr = $num1 === $numStr;

// Strict Inequality Operator
$isEqual = $num1 == $numStr;

//Spaceship Operator
$left = 2;
$right = 2;
$spaceship = $left <=> $right;

// ------ Logical Operator
$logicalAnd = true && false;
$logicalOR = true || false;
$logicalXOR = true xor true;

// ------ String Operator
$fName = "John ";
$lName = "Doe";
$age = 12;

$fullName = $fName . "P. ". $lName . $age;

//Array and Associative Arrays
$sampleArray = array('1', '2', '3');
$anotherArray = ['1', '2', '3'];

$associativeArr = [
    'prelim' => 95,
    'midterm' => 89,
    'finals' => 92
];

//Multidimensional Array
$fruits = [
    ['banana', 'apple', 'grapes'],
    ['strawberry', 'lychee', 'orange'],
    ['durian', 'guava', 'kiwi']
];


//Decisions Control Structures
//IF -ELSE STATEMENTS
// $printValue;

// if($isEqual){
//     $printValue = "true";
// } 
// else if (!$isEqual){
//     $printValue = "false";
// }
// else {
//     $printValue = "idunno";
// }

$numA = 1;
$numB = 2;
$spaceship = $numA <=> $numB;

switch($spaceship){
    case 1 : 
        $printValue = "left is greater than right";
        break;
    case -1 : 
        $printValue = "right is greater than left" ;
        break;
    case 0 :
        $printValue = "right is equal to left" ;
        break;
    default: 
        "Error";
        break;
}

//Repetitive Control Structures

//Do-While
function doWhileLoop(){
    $count = 20;
    do {
        echo $count . '</br>';
        $count--;
    }while($count > 0);
}

//While
function whileLoop(){
    $count = 1;
    while($count <= 20){
        echo $count . '</br>';
        $count++;
    }
}

//For Loop
function forLoop(){
    for($x = 0; $x <= 20; $x++){
        echo $x  . '</br>';
    }
}

//For Each
function forEachFuntion(){
    $colors = ['red', 'blue', 'yellow'];
    foreach ($colors as $color){
        echo $color . '</br>';
    }
}




