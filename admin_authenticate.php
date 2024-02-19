<?php
session_start();

// Database connection (you need to configure your database connection)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if user exists in the database and is an administrator
$sql = "SELECT * FROM administrator WHERE username='$username' AND password='$password' AND role='administrator'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Administrator authenticated, set session variables
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'administrator';

    // Redirect to administrator dashboard or appropriate page
    header("Location: admin_dashboard.php");
} else {
    echo "Invalid username or password for administrator.";
}

// Close database connection
$conn->close();
?>
