
<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $to = 'ayanhai@outlook.com';
 $subject = "New Message on Website";
  $send = $_POST['submit'];
 $messsage = '<html>
    <body>
     <h2>Title</h2>
     <br>
     <p>Name:<br>'.$name.'</p>
     <p>Email:<br>'.$email.'</p>

    </body>
   </html>';

//headers
$headers  = "From: ".$name." <".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset-utf-8";

//send
$send = mail($to, $subject, $message, $headers);
if ($send) {
 echo '<br>';
 echo "Success. Thanks for Your Message.";
} else {
 echo 'Error.';
}
}
?>



