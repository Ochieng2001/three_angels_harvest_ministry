<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@balcurtmoderncyber.com"; // Change this to your email address
    $subject = "New Form Submission";
    $message = "Here is the form submission:\n";
    
    foreach($_POST as $key => $value) {
        $message .= ucfirst($key) . ": " . htmlspecialchars($value) . "\n";
    }
    
    $headers = "From: no-reply@yourdomain.com"; // Change to a valid from address
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent!";
    }
}
?>
