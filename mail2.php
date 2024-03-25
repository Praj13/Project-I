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
    $email = $_POST['email'];
}
// Set sender and recipient
$mail->setFrom('rajbansiprajwol@gmail.com', 'Prajwol Rajbansi'); // Sender email address and name
$mail->addAddress($email, 'Subscriber'); // Recipient email address and name

// Add subject, body, and attachment (optional)
$mail->Subject = 'You just subscribed Praj Photography.';
$mail->Body = "Dear subscriber,
Thank you for subscribing Praj Photography. Check out the link given below for more pictures.
Link-https://www.pinterest.com/";

$mail->addAttachment('https://www.pinterest.com/', 'optional_filename.pdf');

// Send the email
if ($mail->send()) {
    echo '<script>alert("Subscription email has been sent to you successfully.")</script>';
} else {
    echo '<p class="error-message">Error: ' . $mail->ErrorInfo . '</p>';
}

?>



