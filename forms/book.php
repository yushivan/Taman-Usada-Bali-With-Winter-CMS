<?php
//ini wajib dipanggil paling atas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//ini sesuaikan foldernya ke file 3 ini
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//sesuaikan name dengan di form nya ya 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$program = $_POST['program'];
$message = $_POST['message'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

//pengirim
$mail->setFrom($email);
$mail->addAddress('booking@tamanusadabali.com');     //Add a recipient

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Book Program';
$mail->Body    = '<div style="width: 750px; margin: 0 auto;">
        <div style="width: 100%; padding-bottom: 1rem; padding-top: 1rem; text-align: center; border-top: solid 5px #46413d; background-color: #46413d">
        <h1 style="color: white;">Book Program</h1>        
        </div>
        <table style="width: 100%; font-size: 14px; padding-top: 1rem; padding-bottom: 1rem; background-color: #f7f7f7">
        <tbody>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Full Name</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $name .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Email</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $email .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Phone</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $phone .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Program</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $program .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Message</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $message .'</td>
        </tr>
        </tbody>
        </table>
        <div style="width: 100%; text-align: center; background-color: #46413d; padding-bottom: 1rem; padding-top: 1rem; color: #fff; font-size: 75%;">
        <p align="center">Copyright 2022 tamanusadabali.com</p>
        </div>
        </div>';
$mail->AltBody = '';
//$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
//$mail->addAttachment(''); 

$mail->send();
echo 'Message has been sent';
//redirect ke halaman index
echo "<script>alert('Message has been sent!');window.location='https://tamanusadabali.com/';</script>";
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//redirect ke halaman book
echo "<script>alert('Message could not be sent!');window.location='http://tamanusadabali.com/book-page';</script>";
}



?>