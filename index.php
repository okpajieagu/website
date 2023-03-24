<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];

    // Set the recipient email address
    $to = "okpajieaguchimobi@gmail.com";

    // Set the email headers
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html\r\n";

    // Build the email message
    $email_message = "<html><body>";
    $email_message .= "<h1>" . $subject . "</h1>";
    $email_message .= "<p>" . $message . "</p>";
    $email_message .= "</body></html>";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect to a thank you page
    header("Location: thankyou.html");
    exit;
}
?>
