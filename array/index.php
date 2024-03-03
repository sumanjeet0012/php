<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $fruits = array("apple", "banana", "orange");
        // echo $fruits[0]; // Output: apple
        print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange )

        $fruits[] = "mango";
        // echo $fruits[3]; // Output: mango
        // echo $fruits[4]; // Output: error message because there is no element at index 4
        // echo $fruits[2]; // Output: orange
        echo "<br>";
        echo count($fruits); // Output: 4
        echo "<br>";
        print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange [3] => mango )
        unset($fruits[1]);
        // echo $fruits[1]; // Output: error message because there is no element at index 1 as unset removes element at index 1 and makes it null
        echo "<br>";
        print_r($fruits); // Output: Array ( [0] => apple [2] => orange [3] => mango 
        echo "<br>";


        array_splice($fruits,0,1); // array_splice(array, start, length, array)

        print_r($fruits); // Output: Array ( [0] => orange [1] => mango )
        echo "<br>";


        $tasks = [
            "laundry" => "Daniel",
            "trash" => "Frida",
            "vacuum" => "Basse",
            "dishes" => "Bella"
        ];

        // An associated array, also known as a hash array or map, is an array in which each element is accessed by a key instead of an index. 
        //Keys can be of any type and are not necessarily integers. 
        //This allows you to use more descriptive names for your array elements, 
        //which can make your code easier to read and maintain.

        $tasks["coding"] = "sumanjeet";
        
        echo $tasks["laundry"];

        sort($tasks); // it will sort the array but in indexed mode
        print_r($tasks);
        echo"<br>";

        array_push($fruits,"pineapple"); // it will add an element to the end of the array, it only works in indexed mode
        print_r($fruits);
    
        echo "<br>";

        array_splice($fruits,2,0,"dragon_fruit"); // it will remove 0 elements from index 2 and add an element at index 2
        // we can use an array in place of dragon fruit.
        print_r($fruits);
        


?>
</body>
</html>