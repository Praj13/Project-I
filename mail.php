<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $purpose = $_POST['purpose'];
    $message = $_POST['message'];

    // Database connection
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $dbname = "project123";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to insert data into clients table
    $sql = "INSERT INTO clients VALUES ('$name', '$email', '$purpose', '$message')";

    if ($conn->query($sql) === TRUE) {
        // echo '<script>alert("Data inserted successfully.");</script>';

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';



// Create a new PHPMailer instance
$mail = new PHPMailer();

// Enable SMTP debugging (optional)
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

// Set mailer to use SMTP
$mail->isSMTP();

// Specify SMTP server details
$mail->Host = 'smtp.gmail.com';  // SMTP server address
$mail->SMTPAuth = true;             // Enable SMTP authentication
$mail->Username = 'rajbansiprajwol@gmail.com'; // SMTP username
$mail->Password = 'mbzowehzokqhlbes';   // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `ssl` also accepted

// Set TCP port to connect to
$mail->Port = 587;  // TCP port


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
}
// Set sender and recipient
$mail->setFrom('rajbansiprajwol@gmail.com', 'Prajwol Rajbansi'); // Sender email address and name
$mail->addAddress($email, $name); // Recipient email address and name

// Add subject, body, and attachment (optional)
$mail->Subject = 'Thank you for choosing Praj Photography.';
$mail->Body = "Dear $name,

On behalf of the entire team at Praj Photography, I would like to extend our sincerest gratitude for choosing us to capture your special moments. It will be an absolute pleasure working with you. 

We are dedicated to preserving your precious moments with the utmost care and attention to detail.

If you have any questions or need further assistance, please do not hesitate to reach out to us. We are here to ensure that your photography experience is nothing short of exceptional.

We'll be reaching you with a proper phone call as soon as possible to finalize the date, time and the shoot location for the photo session.

Warm regards,
Praj Photography.";

$mail->addAttachment('path/to/file.pdf', 'optional_filename.pdf');

// Send the email

if ($mail->send()) {
    // Display alert and redirect using JavaScript
    echo '<script>';
    echo 'alert("Confirmation email has been sent to you successfully.");';
    echo 'window.location.href = "contact.php";'; // Redirect to contact.php
    echo '</script>';
} else {
    // Display error message
    echo '<p class="error-message">Error: ' . $mail->ErrorInfo . '</p>';
}
    } else {
        echo '<script>alert("Error: ' . $conn->error . '");</script>';
    }

   
}




 // Close database connection
 $conn->close();

?>



