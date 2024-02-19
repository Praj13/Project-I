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

// Check if album ID is provided via query parameter
if(isset($_GET['album_id'])) {
    $album_id = $_GET['album_id'];

    // SQL to delete album with provided ID
    $sql = "DELETE FROM albums WHERE id='$album_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Album deleted successfully";
    } else {
        echo "Error deleting album: " . $conn->error;
    }
} else {
    echo "No album ID provided";
}

// Close database connection
$conn->close();
?>
