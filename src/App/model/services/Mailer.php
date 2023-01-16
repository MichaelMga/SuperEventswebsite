<?php

namespace App\model\services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

 class Mailer {

    public static function send(string $sendingAdress, string $receivingAdress){

      //Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);

      try {
      //Server settings
       //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
       $mail->isSMTP();                                            //Send using SMTP
       $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
       $mail->SMTPAuth = true;                                   //Enable SMTP authentication
       $mail->Username = $_ENV["SMTP_USER"];                     //SMTP username
       $mail->Password = $_ENV["SMTP_PASSWORD"];                               //SMTP password
       $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
       $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
       $mail->setFrom($sendingAdress, 'Mailer');
       $mail->addAddress($receivingAdress);               //Name is optional

      foreach ($_COOKIE as $key => $imageSrc) {
         $mail->addAttachment($imageSrc);
      }

       //Content
       $mail->isHTML(true);                                  //Set email format to HTML
       $mail->Subject = "Bonjour! C'est Claude! Voici tes photos!";
       $mail->Body    = 'Bonjour, c est claude!! Voici tes photos <b>A plus</b>';
       $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

       $mail->send();

     } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }

    }

 }
