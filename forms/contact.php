<?php

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Customize the email subject and recipient address
  $subject = "New Contact Form Submission";
  $to = "wanniarachchihn.20@uom.lk";
  
  // Compose the email body
  $body = "Name: $name\n\n";
  $body .= "Email: $email\n\n";
  $body .= "Message:\n$message";
  
  // Send the email
  if (mail($to, $subject, $body)) {
    echo "Thank you for your message! We'll get back to you soon.";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }

?>
