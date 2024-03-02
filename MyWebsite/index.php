<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>hi</h1>
    <p>hello</p>
    <?php 
    echo "Hello World!";
    ?> -->

    <!-- <?php 
    if(true){
        echo "<p>hello</p>";
    }
    ?> -->

<!-- <?php if (true) { ?>
<p>paragraph tag is used here</p>
<?php } ?> -->

<!-- <p>This is a <?php echo " php embedded " ?> paragraph</p>
<?php 
    echo "This is a PHP paragraph";
?> -->


<!-- <?php 
    $name = "sumanjeet";
    echo $name;
?> -->

<!-- <?php 

    // Scalar types (contains one value)
    // $string = "Daniel";

    // $int = 12354353;

    // $float = 2.5678;

    // $bool = true;

    // // Array type
    // $names = array("Daniel", "Bella", "Frida");
    // $names_2 = ["Daniel", "Bella", "Frida"];

    // Default values 


    // $string = "";
    // $int = 0;
    // $float = 0;

    // $bool = false;

    // $array = [];
    // $object = null;  

    $name;
    echo "Hello World!";
    echo $name;
?> -->

<?php 

// global variables

// echo $_SERVER[ "DOCUMENT_ROOT"];
// echo "<br>";

// echo $_SERVER["PHP_SELF"];

// echo "<br>";

// echo $_SERVER["SERVER_NAME"];
// echo "<br>";

// echo $_SERVER[ "REQUEST_METHOD"];

// this line will display name from params from url http://localhost/php/MyWebsite/index.php?name=suman
// echo $_GET["name"]

// this line will search for name in get, post and cookies.
echo $_REQUEST["name"];

?>





</body>
</html>