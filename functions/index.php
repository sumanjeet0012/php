<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function greet($name){
        echo " hello $name";
    }

    function greet2 ($name = "sumanjeet"){ // function with default value.
        echo " hello $name";
    }

    function greet3(string $name = "Suman"){ 
        echo " hello $name";

    }

    greet2();
    echo "<br>";
    
    greet(123);
    echo "<br>";
    
    // greet3(132); // error due to strict type checking.
    echo "<br>";
    
    greet3("Suraj");
    echo "<br>";

    ?>
</body>
</html>