

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praj Photograhy</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <script src="https://kit.fontawesome.com/498cb435cf.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header5">
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
                <li><a href="home.php" >Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="guide.php">Beginners Guide</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                    <li><a href="join.php">Become a Photographer</a></li>
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
            <h2>Get in touch.</h2>
            <h3> Reach out and we'll get connected.</h3>
            <blockquote>
                "Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever ... It
remembers little things, long after you have forgotten everything." -Aaron Siskind
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
    <!-- end of header  -->

    <!-- main  -->
    <section class = "section-five">
        <div class = "container">
            <div class = "contact-top">
                <h3>CONTACT ME</h3>
                <p>Please feel free to contact me for anytype of PHOTOGRAPHY.</p>
            </div>

            <div class = "contact-middle">
                <div>
                    <span class = "contact-icon">
                        <i class = "fas fa-map-signs"></i>
                    </span>
                    <span>Address</span>
                    <p>Dahachowk, Chandragiri, Kathmandu</p>
                </div>

                <div>
                    <span class = "contact-icon">
                        <i class = "fas fa-phone"></i>
                    </span>
                    <span>Contact Number</span>
                    <p>+977 9818762600</p>
                </div>

                <div>
                    <span class = "contact-icon">
                        <i class = "fas fa-paper-plane"></i>
                    </span>
                    <span>Email Address</span>
                    <p>rajbansiprajwol@gmail.com</p>
                </div>

                <div>
                    <span class = "contact-icon">
                        <i class = "fas fa-globe"></i>
                    </span>
                    <span>Website</span>
                    <p>www.prajphotos.com</p>
                </div>
            </div>

            <div class = "contact-bottom">
                <form class = "form" action="submit.php" method="POST">
                    <input type = "text" placeholder="Your Name" name="name">
                    <input type = "email" placeholder="Your Email" name="email">
                    <input type = "text" placeholder="Purpose" name="purpose">
                    <textarea rows = "9" placeholder="Message" name="message"></textarea>
                    <input type = "submit" class = "btn" value = "Send Message">
                </form>

                <!-- Map -->
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28258.01057507044!2d85.20930621653083!3d27.709525575569064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb23acb8cfbe3d%3A0xc9c8560e7e75d4f3!2sDahachok!5e0!3m2!1sen!2snp!4v1686321196309!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>  
    <!-- end of main  -->

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
                    <input type="email" id="email" placeholder="Email address">
                    <button type="sub">SUBSCRIBE</button>
                </div>
            </div>
        </div>
        <p>&copy; Copyright PRAJ. </p>
    </footer>


   <script src="script.js"></script> 
</body>
</html>