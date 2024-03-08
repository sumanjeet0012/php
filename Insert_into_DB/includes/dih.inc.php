<?php
/**
 * Connects to a MySQL database using PDO and returns the PDO object.
 *
 * @param string $dsn The Data Source Name (DSN) in the form of:
 *                   "mysql:host=localhost;dbname=myfirstdatabase".
 * @param string $dbusername The username to connect to the database with.
 * @param string $dbpassword The password to connect to the database with.
 * @throws PDOException If the connection fails.
 * @return PDO The PDO object representing the connection to the database.
 */

$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // PDO::ATTR_ERRMODE is a constant that represents the error mode attribute of the PDO object. 
    // The error mode can be set to one of the following values:
} catch (PDOException $e) {

    /**
     * If the connection fails, the error message is echoed.
     *
     * @var string $e->getMessage() The error message.
     */
    echo "Connection failed: " . $e->getMessage();
}
