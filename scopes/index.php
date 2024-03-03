<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $name = "Sumanjeet";

        function greet(){
            echo "Hello $name"; // this will give error as $name is not defined and accessible in local scope.
        }

        function greet2 ($name){
            echo "Hello $name"; // this will work as $name is passed as an argument.
        }

        function greet3(){
            global $name;
            echo "Hello $name"; // this will work as $name is defined as global. and we are accessing a global variable via global $name.
        }

        function greet4(){
            // $name2 = $GLOBALS["name"];
            // echo "Hello $name2";
            echo "Hello " . $GLOBALS['name'];
            echo "Hello2 {$GLOBALS['name']}"; // when you want to use complex expressions like array elements or object properties inside a string, you need to wrap them in curly braces {}.
            // So, even though $GLOBALS['name'] is a string, you still need to wrap it in curly braces when you use it inside a string.
        }

        greet();
        echo "<br>";
        greet2("Sumanjeet");
        echo "<br>";
        greet3();
        echo "<br>";
        greet4();
        echo "<br>";


        /**
         * This function demonstrates how to use static variables.
         * A static variable is a variable that persists between function calls.
         * 
         * @return void
         */
        function staticFunction(){
            static $count = 0; // this variable will be initialized only once and its value will be preserved across function calls
            $count++; // increment the count
            echo $count; // print the count
        }



        staticFunction();
        staticFunction();
        staticFunction();

    ?>
</body>
</html>