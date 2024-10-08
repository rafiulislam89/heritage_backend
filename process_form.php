<?php



$servername = "localhost";
$username = "root"; 
$password = ""; // default for XAMPP
$dbname = "real_estate"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$search = isset($_POST['search']) ? $_POST['search'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';
$property_type = isset($_POST['property_type']) ? $_POST['property_type'] : '';
$budget = isset($_POST['budget']) ? $_POST['budget'] : '';


$sql = "SELECT * FROM properties WHERE 1=1";

if (!empty($search)) {
    $sql .= " AND property_name LIKE '%" . $conn->real_escape_string($search) . "%'";
}

if (!empty($location)) {
    $sql .= " AND location LIKE '%" . $conn->real_escape_string($location) . "%'";
}

if (!empty($property_type)) {
    $sql .= " AND property_type LIKE '%" . $conn->real_escape_string($property_type) . "%'";
}

if (!empty($budget)) {
    $sql .= " AND price <= " . (float)$budget; 

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='property'>";
        echo "<h3>" . $row['property_name'] . "</h3>";
        echo "<p>Location: " . $row['location'] . "</p>";
        echo "<p>Price: $" . $row['price'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No properties found.";
}

// Close connection
$conn->close();
?>
