<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require 'vendor/phpmailer/phpmailer/class.phpmailer.php';
require 'vendor/phpmailer/phpmailer/class.smtp.php';

date_default_timezone_set('Etc/UTC');

//require '../PHPMailerAutoload.php';

$name      = addslashes(isset($_POST['name']));
$email     = addslashes(isset($_POST['email']));
$subject   = addslashes(isset($_POST['subject']));
$message   = addslashes(isset($_POST['message']));
$userMail      = "juliocsilvapdr@gmail.com";
$pass      = "JULIOkokotinhas";


 require 'mailer/PHPMailerAutoload.php';
     
    if (isset($_POST['subject']) && !empty($_POST['subject'])) {
               $subject = $_POST['subject'];
    }
    if (isset($_POST['message']) && !empty($_POST['message'])) {
               $message = $_POST['message'];
    }
     
 $mail = new PHPMailer;
  
 $mail->isSMTP();
 $mail->Host = 'smtp.gmail.com';
 $mail->SMTPAuth = true;
 $mail->SMTPSecure = 'tls';
 $mail->Username = $userMail;
 $mail->Password = $pass;
 $mail->Port = 587;
  
 $mail->setFrom($email, $nome);
 $mail->addAddress($userMail);
  
 $mail->isHTML(true);
  
 $mail->Subject = $subject;
 $mail->Body    = nl2br($message);
 $mail->AltBody = nl2br(strip_tags($$message));
  
 if(!$mail->send()) {
     echo 'Não foi possível enviar a mensagem.<br>';
     echo 'Erro: ' . $mail->ErrorInfo;
 } else {
      header('Location: index.php?enviado');
}