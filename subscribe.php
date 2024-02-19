<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $email = $_POST["email"];
    // Define multiple recipients
    $to = "newsletter@conceptspace.ae";
    
    $subject = "New Subscription Recieved from $email";
    $messageBody = "Hi, a new NewsLetter request recieved from $email.";

    // Send email to multiple recipients
    if (mail($to, $subject, $messageBody)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }

    // Additional email to the person who filled the form
    $userSubject = "Thank you for your Subscription";
    $userMessage = "Dear $email,\n\nThank you for contacting us. We have received your subscription request and will get back to you soon.\n\nBest regards,\nConceptspacestudio";

    if (mail($email, $userSubject, $userMessage)) {
        echo "Email sent to user successfully!";
    } else {
        echo "Failed to send email to user.";
    }
} else {
    echo "Invalid request.";
}

?>