<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $email_from = "eduform@example.com";
    $email_to = "ghosharchisman58@gmail.com";
    $email_subject = "New Contact Form Submission: ";
    $email_body = " new message from the user $name.\n"
                . "Here is the message:\n $message \n"
                . "Contact Email: $email. \n"
                . "Subject: $subject. \n"
                . "Name: $name. \n"
                . "Message: $message. \n";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($email_to, $email_subject, $email_body, $headers);
    header("Location: Contact.html");
    exit();

?>