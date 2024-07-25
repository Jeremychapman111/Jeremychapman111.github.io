<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set recipient email address (your email address)
    $to = "shadowstrikeeliteforces@gmail.com"; // Replace with your email address
    
    // Set email subject
    $subject = "New Contact Form Submission";
    
    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Build the email headers
    $headers = "From: $name <$email>";
    
    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<p>Thank you for your message. We will get back to you soon!</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
} else {
    echo "<p>Sorry, there was an error with your submission. Please try again.</p>";
}
?>
