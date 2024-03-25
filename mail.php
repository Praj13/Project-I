<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer-master/src/exception.php';
require 'phpMailer-master/src/PHPMailer.php';
require 'phpMailer-master/src/smtp.php';


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

?>



