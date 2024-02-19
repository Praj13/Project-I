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
    $album_id = $_POST['album_id'];
    $album_title = $_POST['album_title'];
    $album_description = $_POST['album_description'];

    // Validate form data (you can add more validation if needed)
    if (empty($album_id) || empty($album_title) || empty($album_description)) {
        // Handle empty fields
        echo "All fields are required.";
    } else {
        // SQL to update album
        $sql = "UPDATE albums SET title='$album_title', description='$album_description' WHERE id='$album_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Album updated successfully";
        } else {
            echo "Error updating album: " . $conn->error;
        }
    }
}

// Close database connection
$conn->close();
?>
