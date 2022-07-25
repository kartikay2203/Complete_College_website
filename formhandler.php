<?php
$name = _POST['name'];
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'domain name .com';

$email_subject = 'new form submission';

$email_body =  "user name' $name.\n".
               "user Email: $visitor_email.\n".
               "subject: $subject.\n".
               "suer message: $message.\n";


$to = 'akrtikay.kumar4593@gmail.com';

$header = "from: $email_form \r\n";

$header = "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("location: conatct.html.html");

?>,