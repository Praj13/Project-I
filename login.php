<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <h2>Login</h2>
    <form action="authenticate.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="join.php#container2">Create one here</a>.</p>
</body>
</div>

<style>
    /* Container */
.container {
    width: 100%;
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  margin-top:100px;
  border: 1px solid #ccc;
  border-radius: 8px;
  background-color: #f9f9f9;
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
input[type="password"] {
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

/* Link */
a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

/* Style for small screens */
@media screen and (max-width: 600px) {
  .container {
    padding: 10px;
  }
}

</style>
</html>
