<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mailer Demo</title>
</head>
<body>

<?php

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = "John Doe";
$email = "user@example.com";
$comments = "Hello, this is a test message!";

$mail = new PHPMailer(true);

try{
    // SMTP settings (Gmail config)
    $mail ->isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'your-email@gmail.com';
    $mail -> Password = 'app-password here';
    $mail -> SMTPSecure = 'tls';
    $mail -> Port = 587;

    // Recipients
    $mail -> setFrom('your-email@gmail.com','Contact Form');
    $mail -> addAddress('prakritacharya7@gmail.com');
    $mail -> addReplyTo($email, $name);

    // Email content

    $mail -> isHTML(false);
    $mail -> Subject = 'Test Email from PHPMailer';
    $mail -> Body = "Name : $name\n Email: $email\n $comments";
    $mail -> send();
    echo "Message sent successfully!";

} catch(Exception $error){
echo "Message could not be send. Mailer Error: {$mail -> ErrorInfo}";
}

?>
    
</body>
</html>