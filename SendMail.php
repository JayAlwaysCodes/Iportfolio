<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['user_subject'];
$message = $_POST['message'];
$to = 'johnsonjardocs@gmail.com';

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'johnsonjardocs@gmail.com'; // email
$mail->Password = 'pgillviltwhmwzde'; // password
$$mail->setFrom($email, $name);
$mail->addAddress($to);                                     // Add recipient
$mail->Subject = 'Contact Form Submission';
$mail->Body    = "Name: $name \nEmail: $email \nMessage: $message";
$mail->isHTML(false);
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Message sent! We will be in touch shortly";
}