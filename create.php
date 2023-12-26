<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $email, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo "User added successfully.";
        } else {
            echo "Error adding user.";
        }
    }
    unset($stmt);
}
?>

<form method="post">
    <label>Name:</label><br>
    <input type="text" name="name" required><br>
    <label>Email:</label><br>
    <input type="email" name="email" required><br>
    <input type="submit" value="Submit">
</form>
