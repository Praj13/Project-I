<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <h3>
            Please provide your correct details.
        </h3>
    </div>
<div class = "contact-bottom">
                <form class = "form" action="submit.php" method="POST">
                    <input type = "text" placeholder="Your Name" name="name">
                    <input type = "email" placeholder="Your Email" name="email">
                    <input type = "text" placeholder="Purpose" name="purpose">
                    <textarea rows = "9" placeholder="Message" name="message"></textarea>
                    <input type = "submit" class = "btn" value = "Send Message"  onclick="return ('Details provided successfully.');">
                </form>
</body>
<style>
 /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Main Heading Styles */
.main {
    text-align: center;
    margin-top: 20px;
}

.main h3 {
    font-size: 24px;
    color: #333;
}

/* Contact Form Styles */
.contact-bottom {
    width: 100%;
    max-width: 600px; /* Adjust the maximum width as needed */
    margin: 0 auto; /* Center the form horizontally */
    padding: 20px;
}

.form input[type="text"],
.form input[type="email"],
.form textarea {
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.form textarea {
    resize: none; /* Prevent textarea from being resizable */
}

.form input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.form input[type="submit"]:hover {
    background-color: #45a049;
}

/* Responsive Styles */
@media screen and (max-width: 600px) {
    .contact-bottom {
        width: 90%;
    }
}

</style>
</html>