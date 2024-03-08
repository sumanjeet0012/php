<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $email = $_POST['email'];

    try {
        require 'dih.inc.php';
        // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
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