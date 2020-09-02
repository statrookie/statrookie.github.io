<?php

if($_POST["submit"]) {
    $recipient="sam.kolovson@statrookie.com";
    $senderFirst=$_POST["firstName"];
    $senderLast=$_POST['lastName'];
    $senderOrg=$_POST['org'];
    $subject="Contact from $senderFirst $senderLast at $senderOrg";
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    // $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>