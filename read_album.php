<html>
<h2>Albums</h2>
<div class="container1">
       

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

        // SQL to select all albums
        $sql = "SELECT * FROM albums";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="album-box">';
                echo '<p class="album-title">Album ID: ' . $row["id"]. '</p>';
                echo '<p class="album-title">Title: ' . $row["title"]. '</p>';
                echo '<p class="album-description">Description: ' . $row["description"]. '</p>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        // Close database connection
        $conn->close();
        ?>
    </div>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Photos</title>
</head>
<body>
    <div class="container">
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

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Photo to Album</title>
</head>
<body>
    <h2>Add Photo to Album</h2>
    <form action="add_photo.php" method="POST" enctype="multipart/form-data">
        <label for="album_id">Album ID:</label><br>
        <input type="text" id="album_id" name="album_id" required><br><br>

        <label for="photo_title">Photo Title:</label><br>
        <input type="text" id="photo_title" name="photo_title" required><br><br>

        <label for="photo_description">Photo Description:</label><br>
        <textarea id="photo_description" name="photo_description" rows="4" required></textarea><br><br>

        <label for="photo_file">Select Photo:</label><br>
        <input type="file" id="photo_file" name="photo_file" accept="image/*" required><br><br>

        <input type="submit" value="Add Photo">
    </form>
    </div>
</body>
<style>
    /* Container */
.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
}

/* Form title */
h2 {
  text-align: center;
  margin-bottom: 20px;
}

/* Form labels */
label {
  font-weight: bold;
}

/* Form input fields */
input[type="text"],
textarea,
input[type="file"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Submit button */
input[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 4px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}
 /* Container1 album box ko laagi */
 .container1 {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
       
        /* Album box */
        .album-box {
            width:30%; /* Adjust according to your needs */
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            display:inline-block;
        }

        /* Album title */
        .album-title {
            font-weight: bold;
        }

        /* Album description */
        .album-description {
            color: #666;
        }

        /* Clearfix for clearing float */
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

/* Style for small screens */
@media screen and (max-width: 600px) {
  .container, .container1 {
    padding: 10px;
  }
}

</style>
</html>
</body>
</html>

