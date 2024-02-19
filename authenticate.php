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

// Check if user exists in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User authenticated, set session variables
    $_SESSION['username'] = $username;
    $row = $result->fetch_assoc();
    $_SESSION['role'] = $row['role']; // Assuming you have a 'role' column in your 'users' table

    // Redirect to appropriate page based on user role
    if ($_SESSION['role'] == 'photographer') {
        header("Location: photographer_dashboard.php");
    } else if ($_SESSION['role'] == 'administrator') {
        header("Location: admin_dashboard.php");
    }
} else {
    echo "<span class='error-message'>Invalid username or password </span>";
}

// Close database connection
$conn->close();
?>
