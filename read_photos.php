<html>
    <body>
  
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

    // Fetch photos from the specified album
    $sql = "SELECT * FROM photos WHERE album_id='$album_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output photos
        while($row = $result->fetch_assoc()) {
            echo '<div class="photo-container">';
            echo '<div class="photo">';
            echo '<div class="photo-title">'.  " - Title: " . $row["photo_title"]. '<div>';
            echo '<div class="photo-description">' . $row["photo_description"] . '</div>';
            echo '<img src="' . $row["photo_file"] . '" alt="Photo">';
            echo'</div>';
            echo'</div>';

        }
    } else {
        echo '<div class="message success">No photos found for the given album.</div>';

    }
}

// Close database connection
$conn->close();
?>
      
      </body>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
         
    /* width: 100%; */
            height: 400px;
            background-color:#848871;
            /* background-image: url('images/background8.jpg');  */
       
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

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .photo-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .photo {
            margin-bottom: 20px;
        }

        .photo img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .photo-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .photo-description {
            color: darkgreen;
        }

        @media screen and (max-width: 600px) {
            .photo-container {
                padding: 10px;
            }
        }
    </style>


</html>
