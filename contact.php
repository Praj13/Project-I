

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
                <h3>Hire a photographer</h3>
                <p>Hire any of the photographer below and they will be contacting you shortly. </p>
            </div>
        </div>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<table class="table table-striped table-hover" border="2px">
    <div class="main">
        <p>Photographer's Details</p>
    </div>
    
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile Pic</th>
                        <th>Name</th>                       
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Joined Date</th>
                        <th>Hire or Explore</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                    include "dbconnection.php";
$ret=mysqli_query($con,"select * from tblusers");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
<tr>
<td><?php echo $cnt;?></td>
<td><img src="profilepics/<?php  echo $row['ProfilePic'];?>"  style="max-width: 100px; max-height: 100px;"></td>
<td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
<td><?php  echo $row['Email'];?></td>                        
 <td><?php  echo $row['MobileNumber'];?></td>
<td> <?php  echo $row['CreationDate'];?></td>
<td>
<a href="hire.php" onclick="return confirm('Hire this Photographer?');"><button>Hire</button></a>

<a href="explore.php"><button>Explore</button></a>
</td>
</tr>
<?php 
$cnt=$cnt+1;
} } else {?>
<tr>
<th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
                
</tbody>
</table>
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
<style>
   body{
    width: 100%;
            height: 400px;
            background-color:#848875;
            /* background-image: url('images/background8.jpg');  */
            color:white;
       
  }
  header{
    width: 100%;
  }
  footer{
    width:100%;
  }
  .section-five{
    margin-top:45px;
    margin-bottom:70px;
    width:100%;
  }
    /* Font import */
@import url('https://fonts.googleapis.com/icon?family=Material+Icons');
button{
    background-color: white;
  color: black;
  border: none;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}
button:hover{
    background-color:lightgreen;
}


/* Style for the table */
table {
  width: 90%;
  border-collapse: collapse;
  margin-left: 70px;

}

/* Style for table header */
th {
  /* background-color: #f2f2f2; */
  text-align: left;
  padding: 8px;
}

/* Style for table data */
td {
  border: 1px solid #ddd;
  padding: 20px;
}

/* Style for table row */
tr:hover {
  background-color: #76663f;
}

/* Style for main div */
.main {
  text-align: center;
  margin-bottom: 20px;
}

/* Style for photographer details paragraph */
.main p {
  font-weight: bold;
  font-size: 20px;
}

/* Style for material icons */
.material-icons {
  font-size: 18px;
  cursor: pointer;
  color: #007bff; /* You can change the color */
}

/* Style for small screens */
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }
  
  /* Hide table headers */
  th {
    display: none;
  }
  
  /* Hide table row numbering */
  td:first-child {
    display: none;
  }
  
  /* Adjust padding for table data */
  td {
    padding: 4px;
  }
}

</style>
</html>