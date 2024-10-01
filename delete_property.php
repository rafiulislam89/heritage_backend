<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM properties WHERE id = ?");
        $stmt->execute([$id]);
        echo "Property deleted successfully.";
    } catch (PDOException $e) {
        echo "Error deleting property: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>
