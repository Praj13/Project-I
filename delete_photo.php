<?php
// Database connection (you need to configure your database connection)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpcrud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $photo_title = $_POST['photo_title'];

    // Delete the photo with the specified ID
    $sql = "DELETE FROM photos WHERE photo_title='$photo_title'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Photo deleted successfully";
    } else {
        echo "Error deleting photo: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
