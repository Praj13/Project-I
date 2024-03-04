
<div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Photographer's <b>Details</b></h2>
                    </div>
<?php
  include "dbconnection.php";
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblusers where Email='$vid' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>


</div>
</div>

<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
               
<tbody>
<tr>
<th width="200">Profile Pic</th>
<td><img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="80" height="80"></td>
<th width="200">Joined Date</th>
<td><?php  echo $row['CreationDate'];?></td>
</tr>

 <tr>
    <th>First Name</th>
    <td><?php  echo $row['FirstName'];?></td>
    <th>Last Name</th>
    <td><?php  echo $row['LastName'];?></td>
  </tr>
  <tr>
    <th>Email</th>
    <td><?php  echo $row['Email'];?></td>
    <th>Mobile Number</th>
    <td><?php  echo $row['MobileNumber'];?></td>
  </tr>
  <tr>
    <th>Address</th>
    <td><?php  echo $row['Address'];?></td>
 
  </tr>
  <div class="col-sm-7" >
<a href="edit.php?editid=<?php echo htmlentities ($row['Email']);?>" class="btn btn-primary"><span>Edit User Details</span></a>
</div>
<?php 
$cnt=$cnt+1;
}?>
                 
</tbody>
</table>

<style>
  /* Style for the table title */

.table-title {
  margin-bottom: 20px;
}

/* Style for table headers */
th {
  background-color: #f2f2f2;
  text-align: left;
  padding: 8px;
}

/* Style for table data */
td {
  border: 1px solid #ddd;
  padding: 8px;
}

/* Style for table row */
tr:hover {
  background-color: #f2f2f2;
}

/* Style for edit button */
.btn-primary {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  text-decoration: none;
  
}

.btn-primary:hover {
  background-color: #0056b3;
}

/* Style for small screens */
@media screen and (max-width: 600px) {
  /* Center align table title */
  .table-title {
    text-align: center;
  }
  
  /* Center align edit button */
  .col-sm-7 {
    text-align: center;
    margin-top: 10px;
  }
  
  /* Adjust padding for table data */
  td {
    padding: 4px;
  }
}

</style>