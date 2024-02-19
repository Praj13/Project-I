<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $album_title = $_POST['album_title'];
    $album_id = $_POST['album_id'];
    $album_description = $_POST['album_description'];

    // Validate form data (you can add more validation if needed)
    if (empty($album_title) || empty($album_id) || empty($album_description)) {
        // Handle empty fields
        echo "All fields are required.";
    } else {
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

        // SQL to insert new album into database
        $sql = "INSERT INTO albums (title,id,description)
                VALUES ('$album_title', '$album_id', '$album_description')";

        if ($conn->query($sql) === TRUE) {
            echo "New album created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close database connection
        $conn->close();
    }
}
?>
  </form>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Albums</title>
</head>
<body>
    <h2>Manage Albums</h2>
    <a href="read_album.php"><button>Read Album</button></a>
    <a href="updateForm.php"><button>Update Album</button></a>
    <a href="deletealbumfom.php"><button>Delete Album</button></a>
</body>
</html>
