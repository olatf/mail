

<?php
// Define the recipient email address
$to = "olatfajumo@gmail.com";

// Define the subject of the email
$subject = "Test Email";

// Define the message body
$message = "This is a test email sent from my website using PHP.";

// Define additional headers (optional)
// $headers = "From: sender@example.com\r\n";
// $headers .= "Reply-To: sender@example.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
?>