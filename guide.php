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
    <header class="header3">
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
                    <li><a href="guide.php" class="active">Beginners Guide</a></li>
                    <li><a href="contact.php">Contact</a></li>
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
            <h2>Beginner?</h2>
            <h3>Let me help you.</h3>
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
    <section id="about">
        <div class="container">
            <h2 style="text-align: center; font-size: 40px;">Beginners Guide for PHOTOGRAPHY</h2>
            <p class="guide">
                This complete guide to photography for beginners walks you though everything you need to know about photography. Get started taking better photos today!
            </p>
            <div class="dcontainer">
            <iframe class="responsive-iframe" width="885" height="498" src="https://www.youtube.com/embed/6LIJPEy0MtE" title="How to START PHOTOGRAPHY for Beginners" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
            <p class="guide">If you want to harness that power and learn how to take the best possible photos, welcome to "PRAJ PHOTOGRAPHY, The Beginner's Guide.” This comprehensive tutorial explains the fundamental concepts you should know about photography from start to finish.</p>
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
                    <form action="mail2.php" method="post">
                    <input type="email" id="email" name="email" placeholder="Email address">
                    <button type="sub">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
        <p>&copy; Copyright PRAJ. </p>
    </footer>


   <script src="script.js"></script> 
</body>
</html>