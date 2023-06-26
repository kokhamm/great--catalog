<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set up email recipient and subject
  $to = 'your-email@example.com';
  $subject = 'Form Submission';

  // Compose the email body
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message: $message\n";

  // Set up email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for submitting the form!";
  } else {
    echo "Error sending the form. Please try again.";
  }
}
?>
