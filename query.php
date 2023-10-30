<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    // Construct the email message
    $to = 'ktlukman@gmail.com'; // Replace with the recipient's email address
    $subject = 'Contact Form Submission from ' . $name;
    $messageBody = "Name: $name\n";
    $messageBody .= "Last Name: $lastName\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Phone Number: $phoneNumber\n";
    $messageBody .= "Message:\n$message";

    $headers = 'From: ktlukman@gmail.com' . "\r\n" .
        'Reply-To: ' . $email . "\r\n";

    // Send the email
    if (mail($to, $subject, $messageBody, $headers)) {
        // Email sent successfully
        echo "Email sent successfully!";
    } else {
        // Email sending failed
        echo "Email sending failed.";
    }
} else {
    // If the request is not POST, return an error or redirect to the form page.
    echo "Invalid request";
}
?>