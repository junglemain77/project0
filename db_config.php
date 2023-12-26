<?php
$host = 'localhost'; // or your host
$username = 'root'; // or your database username
$password = ''; // or your database password
$dbname = 'crud_db'; // your database name

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>