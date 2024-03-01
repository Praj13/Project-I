<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "prajphoto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the INSERT statement
$stmt = $conn->prepare("INSERT INTO clients (name, email, purpose, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $purpose, $message);

// Set parameters and execute the statement
$name = $_POST['name'];
$email = $_POST['email'];
$purpose = $_POST['purpose'];
$message = $_POST['message'];

if ($stmt->execute()) {
    // Insertion successful, redirect to contact page with success message
    echo "<script>alert('Data inserted successfully!');</script>";
    echo "<script>window.location.href = 'contact.php';</script>";
} else {
    // Insertion failed, print error message
    echo "Error: " . $stmt->error;
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>
