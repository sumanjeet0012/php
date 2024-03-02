<?php 

// `var_dump()` outputs a combination of strings and arrays to provide a verbose representation of the variable. It includes the following information:
// The type of the variable
// The length of the variable (if it is a string)
// The value of the variable
// IT ALSO DISPLAYS NESTED STRUCTURES.

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    if (empty($firstname)) {
        exit();
        // header("Location: ../index.php");
    }

    echo "These are the data, that the user submitted:";
    echo "<br>";

    echo $firstname;

    echo "<br>";

    echo $lastname;

    echo "<br>";

    echo $favouritepet;

    header("Location: ../index.php");
} else {
    header("Location: ../index.php");

}