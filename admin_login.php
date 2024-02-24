<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
</head>
<style>
   body{
    /* width: 100%; */
            height: 400px;
            background-color:#848871;
            /* background-image: url('images/background8.jpg');  */
       
  }
    /* Style for the login page container */
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

/* Style for the login form */
form {
  display: flex;
  flex-direction: column;
}

/* Style for form input fields */
input[type="text"],
input[type="password"],
input[type="submit"] {
  margin-bottom: 15px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

/* Style for submit button */
input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

/* Media query for responsiveness */
@media screen and (max-width: 600px) {
  .container {
    width: 90%;
  }
}

</style>
<body>
   
    <div class="container">
    <h2>Administrator Login</h2>
    <form action="admin_authenticate.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
    </div>
</body>
</html>
