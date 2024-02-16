<?php

// Define the valid license key
$validLicenseKey = 'Contact me via Telegram to obtain the license key --> @toolsdark';

// Get the user's input (license key)
$userLicenseKey = $_POST['license_key'] ?? '';

// Check if the provided license key is valid
if ($userLicenseKey === $validLicenseKey) {
    // Extract email parameters from POST data
    $to = $_POST['r_email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    $sender_name = $_POST['s_name'] ?? '';
    $sender_email = $_POST['s_email'] ?? '';

    // Validate required fields
    if ($to && $subject && $message && $sender_name && $sender_email) {
        // Sanitize and validate input data
        $to = filter_var($_POST['r_email'], FILTER_SANITIZE_EMAIL);
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $message = htmlspecialchars($_POST['message'], ENT_QUOTES);
        $sender_name = filter_var($_POST['s_name'], FILTER_SANITIZE_STRING);
        $sender_email = filter_var($_POST['s_email'], FILTER_SANITIZE_EMAIL);

        // Check if all required fields are present
        if ($to && $subject && $message && $sender_name && $sender_email) {
            // Compose email headers
            $headers = "From: $sender_name <$sender_email>\r\n";
            $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

            // Send email using safe data
            $mail_sent = mail($to, $subject, $message, $headers);

            // Check if email was sent successfully
            if ($mail_sent) {
                echo "Email Sent Successfully!";
            } else {
                echo "Failed to Send Email!";
            }
        } else {
            echo "Missing required fields.";
        }
    } // Add a closing brace here
}
