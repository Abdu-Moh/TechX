<?php
$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$feedback = $_POST['feedback'];

$email_from = "$email";

$email_subject = "New feedback from AbduM User";

$email_body = "User name: $name.\n".
               "User email: $email.\n".
                "Title: $title.\n".
                 "User feedback: $feedback.\n";

$to = 'abdumcompany@outlook.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: Contact.html");
?>