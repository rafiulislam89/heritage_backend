<?php
include 'db.php';

try {
    $stmt = $pdo->query("SELECT * FROM properties");
    $properties = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($properties);
} catch (PDOException $e) {
    echo "Error fetching properties: " . $e->getMessage();
}
?>


<?php

header('Content-Type: application/json');

// Database connection parameters
$servername = "localhost"; 
$username = "root";  
$password = "";     
$dbname = "real_estate";      


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

// Query to fetch property data
$sql = "SELECT * FROM properties"; /
$result = $conn->query($sql);


$properties = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $properties[] = $row;
    }
}


echo json_encode($properties);


$conn->close();
?>
