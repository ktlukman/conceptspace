<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $message = $_POST["message"];

    // Send an email (You should configure your server's email settings)
    $to = "ktlukman@gmail.com"; // Replace with the recipient's email address
    $subject = "New Form Submission from $name $lastName";
    $messageBody = "Name: $name $lastName\nEmail: $email\nPhone Number: $phoneNumber\nMessage: $message";

    if (mail($to, $subject, $messageBody)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
