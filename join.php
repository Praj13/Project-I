<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praj Photograhy</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="/images/logo2.png">
    <script src="https://kit.fontawesome.com/498cb435cf.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="nav-section">
            <div class="brand-and-navBtn ">
                <span class="brand-name">
                    PrajPhotos
                </span>
                <span class="navBtn flex">
                    <i class="fas fa-bars"></i>
                </span>
            </div>
            <!-- navigation menu  -->
            <nav class="top-nav">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="guide.php">Guide</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="join.php" class="active">Become a Photographer</a></li>
                    <li><a href="admin_login.php"><i class='fas fa-user-lock'></i></a>
                    </li>

                

                </ul>
            </nav>
          
         </div>
         <div class = "container about">
            <div class = "about-content">
            <div class = "about-img flex">
                <img src="images/camera5.jpg" alt="photography image" width="50%" height="40%">
            </div>
            <h2>Want to join Praj Photography?</h2>
            <h3>Join us today and let your career shine! </h3>
            <blockquote>
            "Dear esteemed photographers,We greatly admire your talent and expertise in the field of photography.If you are interested in collaborating with us, kindly let us know at your earliest convenience. Please create an account or login if you already have one.
            </blockquote>
        </div>
            <div class="social-icons">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100022165722597" target="_blank"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="www.linkedin.com/in/prajwol-rajbansi-333k" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F_u%2Fthe_rajbansi_prajwol%3Ffbclid%3DIwAR2-ZiALh6FInFWSSicNu8V187ILAqy4lSonRWUPl0-lqOTe4hRIlZ8c5oY&h=AT32S7c7xoVp3Y1uais5znrvQ6c53zXQhfZD__yd5nmW7xXco8wS-ottftw-j8i9zvLnkyhUIKWhbEoM66v-SscpSPq6MWTzuacQsEoRwZYbYAvIbqAJuG6LqRGMBuL6V5kBkOKZri-YiCVm" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/@friend_zone_3331?is_from_webapp=1&sender_device=pc" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </li>
                </ul>
          
        </div>
    </div>
    </header>
    

<!-- login page for photographers  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<script>
function validateform(){
let user2 = document.getElementById("f").value;
let pwLenght= /.{8,32}/;
let specialCase=/[^A-za-z0-9]/;
let lowerCase=/[a-z]/;
let upperCase=/[A-z]/;
let numberCase=/[0-9]/;
let specialChar=/[!@#$%&*]/;
if((pwLenght.test(user2) && 
specialCase.test(user2) && 
lowerCase.test(user2) && 
upperCase.test(user2) && 
numberCase.test(user2) && 
specialChar.test(user2))){
    alert("Account Created");
}
else{
    alert("Invalid username or very weak password.");
    return false;
}

}
</script>
<body>
    <div class="container2" id="container2">
    <h3>Create Account</h3>
    <form name="myform"  action="register.php" method="POST" onsubmit= "return validateform()" >
        <label for="username">Username:</label><br>
        <input type="text" id="e" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="f" name="password" required><br><br>

        <input type="submit" value="Create Account">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </div>


     <!-- footer  -->
     <footer class="footer">
        <div class="footer-container container">
            <div>
                <h2>PHOTOGRAPHY</h2>
                <p>“What do we feel when we look at a good photograph? We just want to be there, right at the exact moment that photo taken!”
                    - Mehmet Murat Ildan
                </p>
            </div>
            <div>
                <h3> Free subscription</h3>
                <p>Subscribe for free to get some amazing pictures at no cost.</p>
                <div class="subs">
                    <i class="fas fa-envelope"></i>
                    <form action="mail2.php" method="post">
                    <input type="email" id="email" name="email" placeholder="Email address">
                    <button type="sub">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
        <p>&copy; Copyright PRAJ</p>
    </footer>


   <script src="script.js"></script> 

   <style>
    /* Container */
.container2 {
  /* max-width: 400px; */
  margin: 0 auto;
  padding: 20px;
  text-align: center;
  background: #61892f;;
}

/* Form title */
h3 {
  margin-bottom: 20px;
}

/* Form labels */
label {
  font-weight: bold;
}

/* Form input fields */
input[type="text"],
input[type="password"] {
  width: 40%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Submit button */
input[type="submit"] {
  width: 40%;
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
  color: blue;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
  color:white;
}

/* Style for small screens */
@media screen and (max-width: 600px) {
  .container {
    padding: 10px;
  }
}

   </style>
</body>
</html>
<?php 