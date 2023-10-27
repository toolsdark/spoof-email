<?php
// Keep in mind that-->
// This is just a skeleton layout, to get whole source code or license contact me.

$validLicenseKey = 'Contact me via telegram to get license key--> @toolsdark';

// Get the user's input (license key)
$userLicenseKey = isset($_POST['license_key']) ? $_POST['license_key'] : '';

// Check if the provided license key is valid
if ($userLicenseKey === $validLicenseKey) {

    $to = $_POST['r_email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sender_name = $_POST['s_name'];
    $sender_email = $_POST['s_email'];

   

  
  //Whole script will be available to you  after a successful purchase !!
  //Whole script will be available to you  after a successful purchase !!
  //Whole script will be available to you  after a successful purchase !!




  
    if ($mail_sent) {
        echo "Email Sent Successfully!";
    } else {
        echo "Failed to Send Email!";
    }
} else {
    // Invalid license key, take appropriate action (e.g., deny access)
    echo "Invalid license key. Access denied.";
}
?>
