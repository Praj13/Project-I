<?php 
include('dbconnection.php');
// Code for deletion
if(isset($_GET['delid'])) {
    $rid = $_GET['delid']; // Assuming 'delid' represents the primary key
    $profilepic = $_GET['ppic'];
    $ppicpath = "profilepics" . "/" . $profilepic;

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM tblusers WHERE Email = ?");
    $stmt->bind_param("s", $rid);
    $stmt->execute();
    $stmt->close();

    // Delete profile picture file
    unlink($ppicpath);

    echo "<script>alert('Data deleted');</script>"; 
    echo "<script>window.location.href = 'admin_dashboard.php'</script>";
} 
?>




