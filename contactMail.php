<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailler/src/Exception.php';
require 'phpmailler/src/PHPMailer.php';
require 'phpmailler/src/SMTP.php';

$mail = new PHPMailer(true);

if(isset($_POST["submit"])) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'byrmstfg@gmail.com';
    $mail->Password = 'drkgyxipkuyjzmvj';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
}
$body = "<h3>İletişim Formu</h3> <br><b>İsim:</b> "
. $_POST['fullname']."<br><b>E-posta:</b> "
. $_POST['mail']. "<br><b>Mesaj:</b> ".$_POST["message"] ; 

$mail->setFrom('byrmstfg@gmail.com'); // Kendi Gmail adresiniz
$mail->addAddress("byrmstfg@gmail.com");
$mail->isHTML(true);
$mail->Subject = $_POST["subject"];
$mail->Body = $body;

if ($mail->send()){
    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'contact.html'
    </script>
    ";
}else {
    "
    <script>
    alert('noooooooooooooooooooooooooooooooooooooooooooooooooooo');
    document.location.href = 'contact.html'
    </script>
    ";
}




