<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$mailsend = NULL ;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    //$mailTo = "info@theimperialtrade.com";
    $mailTo = "byrmstf@gmail.com";


    $headers = "From: ".$mailFrom . "\r\n";
    $headers .= 'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $txt = "You have received an email from ".$name.".\n\n".$message;

    $sendMail = mail($mailTo, $subject, $txt, $headers);
    if($sendMail) {
        $mailsend = true;
    }

    else{
        $mailsend = false;
    }

    header("Location: contact.html?$mailsend");

 
}

?>
