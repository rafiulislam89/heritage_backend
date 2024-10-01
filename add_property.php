<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url']; // You may handle image uploads separately

    try {
        $stmt = $pdo->prepare("INSERT INTO properties (title, description, location, price, image_url) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$title, $description, $location, $price, $image_url]);
        echo "Property added successfully.";
    } catch (PDOException $e) {
        echo "Error adding property: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>
