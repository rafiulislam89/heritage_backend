<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $property_id = $_POST['property_id'];
    $bid_amount = $_POST['bid_amount'];

    // You may want to add additional checks to ensure the bid is valid

    try {
        // Insert bid logic here (assuming you have a bids table)
        $stmt = $pdo->prepare("INSERT INTO bids (property_id, bid_amount) VALUES (?, ?)");
        $stmt->execute([$property_id, $bid_amount]);
        echo "Bid placed successfully.";
    } catch (PDOException $e) {
        echo "Error placing bid: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>
