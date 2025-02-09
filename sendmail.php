<?php
session_start();

if (isset($_POST['submit'])) {
    $to = 'mudaidalewis@gmail.com';
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $subject = "Mini_ctf challenge";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Correct order of mail() parameters
    $body = "<strong>Name:</strong> $name <br>
             <strong>Email:</strong> $email <br>
             <strong>Message:</strong> $message";

    if (mail($to, $subject, $body, $headers)) {
        $_SESSION['message'] = "Message Sent Successfully!";
    } else {
        $_SESSION['message'] = "Error sending email!";
    }

    header("Location: dev.php");
    exit();
}



