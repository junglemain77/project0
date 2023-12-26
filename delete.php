<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = ?";

    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(1, $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user.";
        }
    }
    unset($stmt);
}
?>

<form method="post">
    <label>ID:</label><br>
    <input type="text" name="id" required><br>
    <input type="submit" value="Delete">
</form>
