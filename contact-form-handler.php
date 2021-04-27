<?php
    //Component input user
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    //Nama Email Website (Dari)
    $email_form = 'FormPractice@gmail.com';
    $email_subject = "New Form Submission"; //Subject email yang dikirim
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
    
    //Email Penerima (Ke)
    //Masuknya ke akun gmail Cindy
    $to = "cindyaristawati@gmail.com";
    $headers = "From: $email_form \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>