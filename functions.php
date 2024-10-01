<?php
// functions.php

// Example function to process a contact form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulate data processing (e.g., saving to a database)
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // In a real application, you would save this data to a database or send an email
    // For this example, we're just echoing it back
    echo "Thank you, $name! Your message has been received.";
}
?>


<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST['search'];
    $location = $_POST['location'];
    $property_type = $_POST['property_type'];
    $budget = $_POST['budget'];

    // Query the database for matching properties
    $sql = "SELECT * FROM properties WHERE location LIKE '%$location%' AND property_type='$property_type' AND budget <= '$budget'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Property: " . $row["property_name"]. " - Location: " . $row["location"]. " - Budget: $" . $row["budget"]. "<br>";
        }
    } else {
        echo "No properties found.";
    }
}
$conn->close();
?>
