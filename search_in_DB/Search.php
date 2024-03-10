<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userSearch = $_POST['usersearch'];

    try {
        require 'includes/dih.inc.php';
        $query = "SELECT * FROM comments WHERE username = :usersearch;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':usersearch', $userSearch);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    exit();
}
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

    if (empty($result)) {
        echo "No results found.";
    } else {
        foreach ($result as $row) {
            echo "<div>";

            echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
            echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
            echo "</div>";

        }
    }

    ?>
</body>

</html>