

<?php

  $name = $_POST['name'];

  $visitor_email = $_POST['email'];

  $subject = $_POST('subject');

  $message = $_POST['message'];

  ?>

<?PHP
 $email_from = 'yourname@yourwebsite.com';

    $email_subject = "New Form submission";

    $email_body = "You have received a new message from the user $name.\n".
  "Here is the message:\n $message".

?>

<?php
$to = "ayanhaibeh@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  ?>




