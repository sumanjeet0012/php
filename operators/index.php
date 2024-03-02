<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

    // string operators
    $name_1 = "suman";
    $name_2 = "jeet";
    $name = $name_1 . $name_2; // concatination
    echo "Hello, My name is $name";
    echo "</br>";

    // arithmatic operators

    echo 1 + 2; // addition
    echo "</br>";
    echo 3 - 4; //  subtraction
    echo "</br>";
    echo 5 * 6; // multiplication
    echo "</br>";
    echo 7 / 8; // division
    echo "</br>";
    echo 9 % 10; // modulus
    echo "</br>";
    echo 11 ** 12; // exponentiation
    echo "</br>";

    // assignment operators
    $x = 10;
    $y = 20;
    $z = $x + $y;
    echo $z;
    echo "</br>";

    // comparison operators
    $a = 10;
    $b = "10";
    var_dump($a == $b); // checking the values only 
    echo "</br>";
    var_dump($a === $b); // checking the values and data type
    echo "</br>";
    var_dump($a != $b); // checking the values only
    echo "</br>";
    var_dump($a !== $b); // checking the values and data type
    echo "</br>";
    var_dump($a > $b); // greater than
    echo "</br>";
    var_dump($a < $b); // less than
    echo "</br>";
    var_dump($a >= $b); // greater than or equal to
    echo "</br>";
    var_dump($a <= $b); // less than or equal to
    echo "</br>";

    // logical operators

    $a = 4;
    $b = 4;

    $c = 2;
    $d = 6;
    var_dump($a == $b and $c == $d); // and operator returns true if both sides are true
    echo "</br>";
    var_dump($a == $b or $c == $d); // or operator returns true if any one side is true
    echo "</br>";
    var_dump($a == $b xor $c == $d); // xor operator returns true if any one side is true but not both
    echo "</br>";
    // or can also be written as ||
    // and can also be written as &&

    // and operator precedence is higher than or operator

    // increment and decrement operators

    $a = 10;
    $a++;
    echo $a;
    echo "</br>";
    $a--;
    echo $a;
    echo "</br>";


?>

</body>
</html>