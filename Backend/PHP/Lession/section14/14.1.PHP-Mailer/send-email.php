<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions


function send_email_php($mailTo, $subject, $content) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'tranminhduc.hbh@gmail.com';                     //SMTP username
        $mail->Password   = 'gqbw dccc qxvo obvx';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'UTF-8';
    
        //Recipients
        $mail->setFrom('tranminhduc.hbh@gmail.com', 'Trần Minh Đức');
        // $mail->addAddress('minhductran.meow@gmail.com', 'Meow');     //Add a recipient //=========> $mailTo
        $mail->addAddress($mailTo);     //Add a recipient //=========> $mailTo
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;              //=========> $subject  //Tiêu đề
        $mail->Body    = $content;           //=========> $content //Nội dung
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; //Nội dung không có HTML
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

$mailTo = 'tranminhduc.hbh@vnpt.vn';
$subject = 'Test send email';
$content = 'Hello, I am testing send email by PHP';

send_email_php($mailTo, $subject, $content);
