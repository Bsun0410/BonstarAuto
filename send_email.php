<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $car = htmlspecialchars($_POST['car']);
    $year = htmlspecialchars($_POST['year']);
    $mileage = htmlspecialchars($_POST['mileage']);
    
    // Your email address
    $to = "brittanyssun410@gmail.com";
    
    // Subject of the email
    $subject = "Trade-In Request from BonStar Auto";

    // Message body
    $message = "
    Trade-In Request:
    Name: $name
    Email: $email
    Car Make & Model: $car
    Car Year: $year
    Mileage: $mileage
    ";

    // Headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your trade-in request has been submitted.";
    } else {
        echo "Sorry, there was a problem sending your request. Please try again.";
    }
}
?>
