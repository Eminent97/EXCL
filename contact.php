<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'cahill.dokun@gmail.com';
    $email_subject = 'new.form submission';
    $email_body = "Username: $name, \n.
                   User_email: $visitor_email\n.
                   Usermsg: $message. \n"; 
    $to = "cahill.dokun@gmail.com"
    $headers = "from: $email_from \r\n";
    $headers = "Reply-to: $email \r\n";

    mail($to,$email_subject,$email_body)
    header("Location: contact.html")
?>