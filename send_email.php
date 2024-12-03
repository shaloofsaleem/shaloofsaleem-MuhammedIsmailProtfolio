<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Collect form data from GET request
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $message = isset($_GET['message']) ? $_GET['message'] : '';

    // Email recipient
    $to = "muhammedismail@gmail.com";  // Recipient's email address
    $subject = "New Contact Form Submission";

    // Message body
    $messageContent = "Name: $name\n";
    $messageContent .= "Email: $email\n";
    $messageContent .= "Message:\n$message";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $messageContent, $headers)) {
        echo "<p>Thank you for contacting us, $name. We will get back to you shortly.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
}
?>
