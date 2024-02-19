<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Album</title>
</head>
<body>
    <h2>Delete Album</h2>
    <form action="delete_album.php" method="GET">
        <label for="album_id">Album ID:</label><br>
        <input type="text" id="album_id" name="album_id" required><br><br>

        <input type="submit" value="Delete Album">
    </form>
</body>
</html>
