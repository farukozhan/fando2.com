<?php

if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    //$mailTo = "info@theimperialtrade.com";
    $mailTo = "byrmstf@yandex.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.html?mailsend");

}
