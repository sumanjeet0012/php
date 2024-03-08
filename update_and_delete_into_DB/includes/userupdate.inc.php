<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    echo $pwd;

    try {
        require 'dih.inc.php';
        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 3;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->bindParam(':email', $email);
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