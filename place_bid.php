<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $property_id = $_POST['property_id'];
    $bid_amount = $_POST['bid_amount'];

   
    try {
       
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
