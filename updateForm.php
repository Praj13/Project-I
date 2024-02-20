<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Album</title>
</head>
<body>
    <div class="container">
    <h2>Update Album</h2>
    <form action="update_album.php" method="POST">
        <label for="album_id">Album ID:</label><br>
        <input type="text" id="album_id" name="album_id" required><br><br>

        <label for="album_title">New Album Title:</label><br>
        <input type="text" id="album_title" name="album_title" required><br><br>

        <label for="album_description">New Album Description:</label><br>
        <textarea id="album_description" name="album_description" rows="4" required></textarea><br><br>

        <input type="submit" value="Update Album">
    </form>
    </div>
</body>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

</style>
</html>
