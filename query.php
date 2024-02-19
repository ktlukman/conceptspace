<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $message = $_POST["message"];

    // Define multiple recipients
    $to = "hello@conceptspace.ae";
    
    $subject = "New Form Submission from $name $lastName";
    $messageBody = "Name: $name $lastName\nEmail: $email\nPhone Number: $phoneNumber\nMessage: $message";

    // Send email to multiple recipients
    if (mail($to, $subject, $messageBody)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }

    // Additional email to the person who filled the form
    $userSubject = "Thank you for your submission, $name!";
    $userMessage = "Dear $name,\n\nThank you for contacting us. We have received your message and will get back to you soon.\n\nBest regards,\nConcept Space";

    if (mail($email, $userSubject, $userMessage)) {
        echo "Email sent to user successfully!";
    } else {
        echo "Failed to send email to user.";
    }
} else {
    echo "Invalid request.";
}

?>