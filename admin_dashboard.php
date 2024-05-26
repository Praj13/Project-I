<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
   body{
    /* width: 100%; */
            height: 400px;
            background-color:#848875;
            /* background-image: url('images/background8.jpg');  */
            color:white;
       
  }
    /* Font import */
@import url('https://fonts.googleapis.com/icon?family=Material+Icons');

/* Style for the table */
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
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
  padding: 8px;
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                    include "dbconnection.php";
$ret=mysqli_query($conn,"select * from tblusers");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
<tr>
<td><?php echo $cnt;?></td>
<td><img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="80" height="80"></td>
<td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
<td><?php  echo $row['Email'];?></td>                        
 <td><?php  echo $row['MobileNumber'];?></td>
<td> <?php  echo $row['CreationDate'];?></td>
<td>
<a href="read.php?viewid=<?php echo htmlentities ($row['Email']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
<a href="edit.php?editid=<?php echo htmlentities ($row['Email']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
<a href="delete.php?delid=<?php echo ($row['Email']);?>&&ppic=<?php echo $row['ProfilePic'];?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
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
 <!-- Logout button -->
 <div class="logout-container">
            <button id="logout-button">Logout</button>
        </div>
        <script>
   
        document.getElementById("logout-button").addEventListener("click", function() {
            window.location.href = "home.php";
        });
    
</script>
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