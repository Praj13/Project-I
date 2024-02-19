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
</body>
</html>
