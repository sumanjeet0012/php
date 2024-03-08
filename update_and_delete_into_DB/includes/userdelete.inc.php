<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    echo $pwd;

    try {
        require 'dih.inc.php';
        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);
        // $stmt->execute([$username, $pwd, $email]);
        $stmt->execute();
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die();

    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    exit();
}