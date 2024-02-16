<?php

// Define the valid license key
$validLicenseKey = 'Contact me via Telegram to obtain the license key --> @toolsdark';

// Get the user's input (license key) and sanitize it
$userLicenseKey = filter_input(INPUT_POST, 'license_key', FILTER_SANITIZE_STRING);

// Check if the provided license key is valid
if ($userLicenseKey === $validLicenseKey) {
    // Extract email parameters from POST data and sanitize input
    $to = filter_input(INPUT_POST, 'r_email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $sender_name = filter_input(INPUT_POST, 's_name', FILTER_SANITIZE_STRING);
    $sender_email = filter_input(INPUT_POST, 's_email', FILTER_SANITIZE_EMAIL);

    // Validate required fields
    if ($to && $subject && $message && $sender_name && $sender_email) {
        // Send email
        $mail_sent = send_email($to, $subject, $message, $sender_name, $sender_email);

        // Check if email was sent successfully
        if ($mail_sent) {
            echo "Email Sent Successfully!";
        } else {
            echo "Failed to Send Email!";
        }
    } else {
        echo "Missing required fields.";
    }
} else {
    // Invalid license key, deny access
    echo "Invalid license key. Access denied.";
}

// Function to send email using PHPMailer
function send_email($to, $subject, $message, $sender_name, $sender_email) {
    require 'vendor/autoload.php'; // Include PHPMailer autoload file

    // Create a new PHPMailer instance
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    // Set mailer to use SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Specify SMTP server
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'user@example.com'; // SMTP username
    $mail->Password = 'secret'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption
    $mail->Port = 587; // TCP port to connect to

    // Set email parameters
    $mail->setFrom($sender_email, $sender_name);
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send email and return true if successful, false otherwise
    return $mail->send();
}

?>
