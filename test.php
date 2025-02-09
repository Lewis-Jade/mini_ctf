<?php
$to      = "mudaidalewis@gmail.com";
$subject = "Test Email";
$message = "Hello! This is a test email using PHP mail() with SMTP.";
$headers = "From: mudaidalewis@gmail.com" . "\r\n" .
           "Reply-To: mudaidalewis@gmail.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
