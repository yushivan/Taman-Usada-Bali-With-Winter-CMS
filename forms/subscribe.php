<?php
//ini wajib dipanggil paling atas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//ini sesuaikan foldernya ke file 3 ini
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//sesuaikan name dengan di form nya ya 
$email = $_POST['email'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

//pengirim
$mail->setFrom('noreply@tamanusadabali.com');
$mail->addAddress('info@tamanusadabali.com');     //Add a recipient

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Subscribe Form';
$mail->Body    = '<p>New Subscriber '.$email.' !!!</p>';
$mail->AltBody = '';
//$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
//$mail->addAttachment(''); 

$mail->send();
echo 'Message has been sent';
//redirect ke halaman index.php
echo "<script>alert('Message has been sent!');window.location='https://tamanusadabali.com/';</script>";
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//redirect ke halaman index.php
echo "<script>alert('Message could not be sent!');window.location='https://tamanusadabali.com/';</script>";
}

?>