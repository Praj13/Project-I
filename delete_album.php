<?php
// Database connection (you need to configure your database connection)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

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
        echo "<div class='success message'>Album deleted successfully</div>";
    } else {
        echo "<div class='error'>Error deleting album: </div>" . $conn->error;
    }
} else {
    echo "No album ID provided";
}

// Close database connection
$conn->close();
?>
<style>
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

        @media screen and (max-width: 600px) {
            .message {
                padding: 10px;
            }
        }

</style>
