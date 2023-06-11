<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  //just cheecking whether working or not

  echo $name;
  echo $email;
  echo $message;

 Set up email parameters
   $to = "arambhadhakal2059@gmail.com"; // Replace with your client's email address
  $subject = "New Message from Portfolio Website";
   $body = "Name: $name\nEmail: $email\n\n$message";
   $headers = "From: webmaster@example.com"; // Replace with your own email address

//   // Send email
   if (mail($to, $subject, $body, $headers)) {
     echo "Message sent successfully!";
  } else {
     echo "Sorry, something went wrong.";
   }
}

?>
