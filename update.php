<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";

    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $email, PDO::PARAM_STR);
        $stmt->bindParam(3, $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "User updated successfully.";
        } else {
            echo "Error updating user.";
        }
    }
    unset($stmt);
}
?>

<form method="post">
    <label>ID:</label><br>
    <input type="text" name="id" required><br>
    <label>Name:</label><br>
    <input type="text" name="name" required><br>
    <label>Email:</label><br>
    <input type="email" name="email" required><br>
    <input type="submit" value="Update">
</form>
