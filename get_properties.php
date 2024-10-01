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
// get_properties.php

// Set header to return JSON data
header('Content-Type: application/json');

// Database connection parameters
$servername = "localhost"; // e.g., 'localhost'
$username = "root";      // e.g., 'root'
$password = "";      // e.g., ''
$dbname = "real_estate";          // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

// Query to fetch property data
$sql = "SELECT * FROM properties"; // Adjust according to your table structure
$result = $conn->query($sql);

// Initialize an array to hold the property data
$properties = [];

if ($result->num_rows > 0) {
    // Fetch each row and add it to the properties array
    while ($row = $result->fetch_assoc()) {
        $properties[] = $row;
    }
}

// Return the property data as JSON
echo json_encode($properties);

// Close the database connection
$conn->close();
?>
