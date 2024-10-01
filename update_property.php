<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    try {
        $stmt = $pdo->prepare("UPDATE properties SET title = ?, description = ?, location = ?, price = ?, image_url = ? WHERE id = ?");
        $stmt->execute([$title, $description, $location, $price, $image_url, $id]);
        echo "Property updated successfully.";
    } catch (PDOException $e) {
        echo "Error updating property: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>
