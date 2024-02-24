<!-- //Databse Connection file -->
<?php
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
$query=mysqli_query($con, "insert into tblusers(FirstName,LastName, MobileNumber, Email, Address,ProfilePic) value('$fname','$lname', '$contno', '$email', '$add','$imgnewfile' )");
if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='photographer_dashboard.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
}
?>
<form  method="POST" enctype="multipart/form-data" >


<div class="form-container">
<h2>Fill Data</h2>
<p class="hint-text">Fill below form.</p>
<div class="row">
<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="true"></div>
<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="true"></div>
</div>        	
</div>

<div class="form-container">
 <input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
 </div>
        
<div class="form-container">
<input type="email" id="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
</div>
		
<div class="form-container">
<textarea class="form-control" name="address" placeholder="Enter Your Address" required="true"></textarea>
</div>  

<div class="form-container">
<input type="file" class="form-control" name="profilepic"  required="true">
<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
</div>      
      
<div class="form-container">
<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
</div>
</form>
<script>
  function validateEmail() {
    var email = document.getElementById("email").value;
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regex.test(email)) {
        alert("Please enter a valid email address");
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
}

/* Form hint text */
/* .form-container .hint-text {
  text-align: center;
  margin-bottom: 20px;
} */

/* Form input fields */
.form-container input[type="text"],
.form-container input[type="email"],
.form-container textarea,
.form-container input[type="file"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
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