<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $subject = $_POST["Subject"];
  $message = $_POST["Message"];
  
  $to = "okpajieaguchimobi@gmail.com";
  $headers = "From: $email";
  $body = "Name: $name\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";
  
  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Error: Email not sent.";
  }
}
?>
