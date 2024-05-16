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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $album_id = $_POST['album_id'];
    $photo_title = $_POST['photo_title'];
    $photo_description = $_POST['photo_description'];

    // Check if photo file was uploaded successfully
    if (isset($_FILES['photo_file']) && $_FILES['photo_file']['error'] === UPLOAD_ERR_OK) {
        // Retrieve uploaded file details
        $file_name = $_FILES['photo_file']['name'];
        $file_tmp = $_FILES['photo_file']['tmp_name'];

        // Move uploaded file to desired location
        $upload_dir = "uploads/"; // Directory where photos will be stored
        $target_file = $upload_dir . basename($file_name);

        if (move_uploaded_file($file_tmp, $target_file)) {
            // File uploaded successfully, now insert photo details into database
            $sql = "INSERT INTO photos (album_id, photo_title, photo_description, photo_file)
                    VALUES ('$album_id', '$photo_title', '$photo_description', '$target_file')";
                      if ($conn->query($sql) === TRUE) {
                          echo '<div class="message success">Photo added successfully</div>';
                      } else {
                          echo '<div class="message error">Error adding photo: ' . $conn->error . '</div>';
                      }
                    }
                }
            }
// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Photos</title>
</head>
<body>
    <h2>Manage Photos</h2>
    
    <!-- Form for reading photos -->
    <form action="read_photos.php" method="POST">
        <label for="album_id">Album ID:</label>
        <input type="text" id="album_id" name="album_id" required>
        <input type="submit" value="View Photos">
    </form>
    
    <!-- Form for deleting photos -->
    <form action="delete_photo.php" method="POST">
        <label for="photo_id">Photo title to Delete:</label>
        <input type="text" id="photo_title" name="photo_title" required>
        <input type="submit" value="Delete Photo">
    </form>

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

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        @media screen and (min-width: 600px) {
            form {
                width: 50%;
                margin: 0 auto;
            }

            input[type="text"] {
                width: calc(100% - 16px);
            }
        }
    </style>
