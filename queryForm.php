<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['inputName'];
    $email_phone = $_POST['inputEmailPhone'];
    $message = $_POST['inputQuery'];
    $city = $_POST['inputCity'];
    $state = $_POST['inputState'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'cybergenix.it@gmail.com'; // Your email
        $mail->Password = 'szaqywategkxjnto'; // Your email password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender info
        $mail->setFrom('cybergenix.it@gmail.com', 'CyberGenix');
        
        // Recipient
        $mail->addAddress('abhijitdey3322@gmail.com'); // Replace with the recipient's email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Query Message from CyberGenix website.';
        
        // Body content
        $mail->Body = "
            <h2>$name has a Query Message.</h2>
            <p><strong>Full Name / Company Name / ORG Name:</strong> $name</p>
            <p><strong>Email / Phone:</strong> $email_phone</p>
            <p><strong>Message:</strong> $message</p>
            <p><strong>City:</strong> $city</p>
            <p><strong>State:</strong> $state</p>
        ";

        // Send email
        if ($mail->send()) {
            echo "Message sent successfully!";
        } else {
            echo "Message could not be sent.";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
