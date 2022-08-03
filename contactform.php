<?php

if (isset($_POST['submit'])) {
    $name = $_POST['Your Name'];
    $subject = $_POST['Subject'];
    $mailFrom = $_POST['Your Email'];
    $name = $_POST['Your Message'];
    $mailTo = "info@theimperialtrade.com";
    $headers = "From: F and O square".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");


}
