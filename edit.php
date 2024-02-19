<?php 
//Database Connection
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  $eid=$_GET['editid'];
  //Getting Post Values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];

//Query for data updation
$query=mysqli_query($con, "update  tblusers set FirstName='$fname',LastName='$lname', MobileNumber='$contno', Email='$email', Address='$add' where Email='$eid'");

if ($query) {
echo "<script>alert('You have successfully update the data');</script>";
echo "<script type='text/javascript'> document.location ='admin_dashboard.php'; </script>";
}
else
{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}
}
?>
<form  method="POST">
 <?php
$eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblusers where Email='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>



<div class="form-container">
<h2 class="hint-text">Update Photographer's info. </h2>
<img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="120" height="120">
<button><a href="change-image.php?userid=<?php echo $row['Email'];?>">Change Image</a></button>
</div>

<div class="form-container">
<div class="row">
  <label for="firstname">First Name:</label>
<div class="col"><input type="text" class="form-control" name="fname" value="<?php  echo $row['FirstName'];?>" required="true"></div>
<label for="lastname">Last Name:</label>
<div class="col"><input type="text" class="form-control" name="lname" value="<?php  echo $row['LastName'];?>" required="true"></div>
</div>        	
</div>

<div class="form-container">
<label for="contact">Contact Number:</label>
<input type="text" class="form-control" name="contactno" value="<?php  echo $row['MobileNumber'];?>" required="true" maxlength="10" pattern="[0-9]+">
</div>
        
<div class="form-container">
<label for="email">Email:</label>
<input type="email" class="form-control" name="email" value="<?php  echo $row['Email'];?>" required="true">
</div>
		
<div class="form-container">
<label for="address">Address:</label>

<textarea class="form-control" name="address" required="true"><?php  echo $row['Address'];?></textarea>
</div>   

<?php 
}?>

<div class="form-container">
 <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>
    <style>
      /* Form container */
.form-container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
}

/* Form title */
.form-container h2{
  text-align: center;
  margin-bottom: 20px;
}



/* Profile picture */
.form-container img {
  display: block;
  margin: 0 auto;
  margin-bottom: 20px;
}

/* Form input fields */
.form-container input[type="text"],
.form-container input[type="email"],
.form-container textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Form submit button */
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

  /* Adjust margin for profile picture */
  .form-container img {
    margin-bottom: 10px;
  }
}

    </style>