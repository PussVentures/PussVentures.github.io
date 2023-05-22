<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email details
$to = 'appdog360@gmail.com'; // Replace with your email address
$subject = 'New Contact Form Submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send the email
$headers = "From: $email\r\nReply-To: $email\r\n";
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo '<p>Thank you for your message. We will get back to you soon!</p>';
} else {
    echo '<p>Oops! Something went wrong. Please try again later.</p>';
}
?>
