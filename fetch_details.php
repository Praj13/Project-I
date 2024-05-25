<?php
include('dbconnection.php');

if (isset($_GET['email']) && !empty($_GET['email'])) {
    // Retrieve the email value from the URL
    $email = $_GET['email'];
  
    // Prepare the SQL query to fetch data of the specific person
    $query = "SELECT available_from, available_to, fees, expertise FROM tblusers WHERE Email = '$email'";

    // Execute the query
    $result = mysqli_query($con, $query);

    // Check if the query executed successfully
    if ($result) {
        // Check if data exists
        if (mysqli_num_rows($result) > 0) {
            // Get today's date
            $today = date('Y-m-d');
            // Start creating the HTML output
            $output = "<div class='fetched-data-modal'><h3 class='fetched-data-header'>Availability, Fees and Expertise</h3>";
            while ($row = mysqli_fetch_assoc($result)) {
                $availableFrom = $row['available_from'];
                $availableTo = $row['available_to'];
                // Determine if the photographer is available today
                $status = ($today >= $availableFrom && $today <= $availableTo) ? "Available" : "Not Available";

                $output .= "<p class='fetched-data-item'>Available From: " . $availableFrom . "</p>";
                $output .= "<p class='fetched-data-item'>Available To: " . $availableTo . "</p>";
                $output .= "<p style='color:green;' class='fetched-data-item'>Status: " . $status . "</p>";
                $output .= "<p class='fetched-data-item'>Fees (per hour): " . $row['fees'] . "</p>";
                $output .= "<p class='fetched-data-item'>Expertise: " . $row['expertise'] . "</p><br>";
              
            }
            $output .= "</div>";
            // Echo the HTML output
            echo $output;
        } else {
            echo "<div class='fetched-data-modal'><p class='fetched-data-error'>No data found for the specified email</p></div>";
        }
    } else {
        echo "<div class='fetched-data-modal'><p class='fetched-data-error'>Error executing query: " . mysqli_error($con) . "</p></div>";
    }

    // Close database connection
    mysqli_close($con);
} else {
    echo "<div class='fetched-data-modal'><p class='fetched-data-error'>Email parameter is missing</p></div>";
}
?>
