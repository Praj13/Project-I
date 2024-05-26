<!-- //Databse Connection file -->
<?php
session_start();
include('dbconnection.php');

if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
   $ppic=$_FILES["profilepic"]["name"];
   $available_from = $_POST['available_from'];
   $available_to = $_POST['available_to'];
   $expertise=$_POST['photographyType'];
   $fees=$_POST['charges'];
   $username = $_SESSION['username'];
// get the image extension
$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).time().$extension;
// Code for move image into directory
move_uploaded_file($_FILES["profilepic"]["tmp_name"],"profilepics/".$imgnewfile);
// Query for data insertion
$query=mysqli_query($conn, "insert into tblusers(FirstName,LastName, MobileNumber, Email, Address,ProfilePic,available_from,available_to,expertise,fees, username) value('$fname','$lname', '$contno', '$email', '$add','$imgnewfile','$available_from','$available_to','$expertise','$fees','$username' )");
if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='photographer_dashboard.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
    <form  method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class="form-container">
                <h2>Fill Data</h2>
                <p class="hint-text">Fill below form.</p>
                <div class="row">
                    <div class="col">
                        <label for="firstname">First Name:</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="true">
                    </div>
                    <div class="col">
                        <label for="lastname">Last Name:</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="true">
                    </div>
                </div>
            </div>

            <div class="form-container">
                <label for="contactno">Mobile Number:</label>
                <input type="number" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
            </div>
            
            <div class="form-container">
                <label for="email">Email:</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
                <label for="username">Your username</label>
                <?php
                echo'
                <input type="text" name="username" value='.$_SESSION['username'].' id="" readonly>';
                ?>
            </div>
            
            <div class="form-container">
                <label for="address">Address:</label>
                <textarea class="form-control" name="address" id="address" placeholder="Enter Your Address" required="true"></textarea>
            </div>  

            <div class="form-container">
                <label for="profilepic">Profile Picture:</label>
                <input type="file" class="form-control" name="profilepic" required="true">
                <span style="color:black; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
            </div>
            <div class="form-container">
            <label for="photographyType">Choose your expertise:</label>
        <select id="photographyType" name="photographyType">
            <option value="Portrait Photography">Portrait Photography</option>
            <option value="Landscape Photograph">Landscape Photography</option>
            <option value="Wildlife Photography">Wildlife Photography</option>
            <option value="Street Photography">Street Photography</option>
            <option value="Sports Photography">Sports Photography</option>
            <option value="Event Photography">Event Photography</option>
            <option value="Fashion Photography">Fashion Photography</option>
            <option value="Architectural Photography">Architectural Photography</option>
            <option value="Product Photography">Product Photography</option>
            <option value="Food Photography">Food Photography</option>
            <option value="Travel Photography">Travel Photography</option>
        </select>
            </div>
            <div class="form-container">
                <label for="available_from">Available From:</label>
                <input type="date" id="available_from" name="available_from" required>
            </div>
            <div class="form-container">
                <label for="available_to">Available To:</label>
                <input type="date" id="available_to" name="available_to" required>
            </div>
            <div class="form-container">
            <label for="charges">Charges(per hour) in NPR:</label>
            <input type="number" id="charges" name="charges" placeholder="Charges" required>
        </div>

            
            <div class="form-container">
                <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
            </div>
            <div class="logout-container">
            <button id="logout-button">Back to home</button>
        </div>
        </form>
    </div>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
<style>
   .logout-container {
        margin-top: 20px;
        text-align: center;
    }

    .logout-container button {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        background-color: #d9534f;
        color: #fff;
        cursor: pointer;
    }

    .logout-container button:hover {
        background-color: #c9302c;
    }
</style>
</html>
<script>
   
        document.getElementById("logout-button").addEventListener("click", function() {
            window.location.href = "home.php";
        });
    
    document.addEventListener('DOMContentLoaded', function() {
        // Set initial minimum dates
        var today = new Date().toISOString().split('T')[0];
        document.getElementById("available_from").setAttribute('min', today);
        document.getElementById("available_to").setAttribute('min', today);

        // Add event listener for "available from" date change
        document.getElementById("available_from").addEventListener('change', function() {
            var availableFrom = new Date(this.value);
            var availableTo = new Date(availableFrom);
            availableTo.setDate(availableTo.getDate() + 1); // Add 1 day to ensure 24 hours difference

            var minAvailableToDate = availableTo.toISOString().split('T')[0];
            document.getElementById("available_to").setAttribute('min', minAvailableToDate);
        });
    });
</script>

<script>

  function validateForm() {
    var email = document.getElementById("email").value;
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regex.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }
    var nameInput = document.getElementById("fname").value;
  var namePattern = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/; // Regular expression for name validation
  if (!namePattern.test(nameInput)) {
    alert("Please enter a valid name");
    return false; // Prevent form submission
  }
  var nameInput2 = document.getElementById("lname").value;
  var namePattern2 = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/; // Regular expression for name validation

  if (!namePattern2.test(nameInput2)) {
    alert("Please enter a valid last name");
    return false; // Prevent form submission
  }


  var address = document.getElementById("address").value;

  // Regular expression for address validation
  var addressPattern = /^[a-zA-Z0-9\s,'-]*$/;
   if (!addressPattern.test(address)) {
    alert("Invalid address format");
    return false;
  }
    return true;
  }
</script>
<style>
  
   body{
    /* width: 100%; */
            height: 400px;
            background-color:#848871;
            /* background-image: url('images/background8.jpg');  */
       
  }
  /* Form container */
.form-container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
}

/* Form title */
.form-container h2 {
  text-align: center;
  margin-bottom: 20px;
  margin-top:5px;
}

/* Form hint text  */
.form-container .hint-text {
  text-align: center;
  margin-bottom: 20px;
} 

/* Form input fields */
.form-container input[type="text"],
.form-container input[type="number"],
.form-container input[type="email"],
.form-container textarea,
.form-container input[type="file"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Error message for file input */
.form-container span {
  color: red;
  font-size: 12px;
}

/* Submit button */
.form-container button[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 4px;
  background-color: #28a745;
  color: #fff;
}

.form-container button[type="submit"]:hover {
  background-color: #218838;
}

/* Style for small screens */
@media screen and (max-width: 600px) {
  .form-container {
    padding: 10px;
  }
}

</style>
</html>