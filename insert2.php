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
            echo "<div class='success message'>New album created successfully</div>";
        } else {
            echo "<div class='error'>Error: </div>" . $sql . "<br>" . $conn->error;
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
    <div class="button-container">
    <a href="read_album.php"><button>Read Album</button></a>
    <a href="updateForm.php"><button>Update Album</button></a>
    <a href="deletealbumfom.php"><button>Delete Album</button></a>
    </div>
</body>
<style>
      h2 {
            text-align: center;
            margin-bottom: 20px;
        }
/* Button container */

.button-container {
  margin-top: 20px;
  margin-left:90px;
}

.button-container button {
  display: inline;
  width: 30%;
  padding: 10px;
  margin-bottom: 10px;
  border: none;
  border-radius: 4px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}


.button-container button:hover {
  background-color: #0056b3;
}
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



/* Style for small screens */
@media screen and (max-width: 600px) {
  .container {
    padding: 50px;
  }
}

</style>
</html>
