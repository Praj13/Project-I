<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Album</title>
</head>
<body>
    <div class="container">
    <h2>Create New Album</h2>
    <form action="insert2.php" method="POST">
        <label for="album_title">Album Title:</label><br>
        <input type="text" id="album_title" name="album_title" required><br><br>

        <label for="album_id">Album ID:</label><br>
        <input type="text" id="album_id" name="album_id" required><br><br>

        <label for="album_description">Album Description:</label><br>
        <textarea id="album_description" name="album_description" rows="4" required></textarea><br><br>

        <input type="submit" value="Create Album">
    </form>
    </div>
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
</html>

</body>
<style>
    /* Container */
    h2{
    text-align:center;
    }
.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
}

/* Form title */
h2 {
  margin-bottom: 20px;
}

/* Form labels */
label {
  font-weight: bold;
}

/* Form input fields */
input[type="text"],
textarea {
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

/* Button container */
.button-container {
  margin-top: 20px;
  margin-left:70px;
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

/* Style for small screens */
@media screen and (max-width: 600px) {
  .container {
    padding: 50px;
  }
}

</style>
</html>
