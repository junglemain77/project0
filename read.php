<?php
include 'db_config.php';

$sql = "SELECT * FROM users";
if ($result = $pdo->query($sql)) {
    while ($row = $result->fetch()) {
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
    }
} else {
    echo "Error fetching users.";
}
unset($result);
?>
