<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // for loops in php
    
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }

    echo "<br>";


    // while loop in php
    
    $i = 0;
    while ($i < 10) {
        echo $i;
        $i++;
    }

    echo "<br>";


    // do while loop in php
    
    $i = 0;
    do {
        echo $i;
        $i++;
    } while ($i < 10);

    echo "<br>";

    // foreach loop in php
    
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach ($arr as $value) {
        echo $value;
    }

    echo "<br>";

    // foreach loop in php
    
    $fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");

    foreach ($fruits as $fruit => $color) {
        echo "This is a " . $fruit . ", that has a color of " . $color . "<br>";
    }


    ?>
</body>

</html>