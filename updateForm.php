<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Album</title>
</head>
<body>
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
</body>
</html>
