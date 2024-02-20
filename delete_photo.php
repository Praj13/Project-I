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
        echo '<div class="message success">Photo deleted successfully</div>';
    } else {
        echo "<div class='error'>Error deleting photo: </div>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

<style>
     body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .message {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom:100px;
            margin-top:50px;
        }

        .success {
            background-color: #4CAF50;
            color: white;
            text-align:center;

        }
        .error {
            background-color: #f44336;
            color: white;
        }
</style>
