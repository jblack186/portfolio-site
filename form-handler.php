<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'https://clever-cori-f0c030.netlify.app/';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                        "User Message: $message.\n";



    $to = "blackwellj1040@gmail.com";

    $headers = "From: $email_from \r\n";
 
    $headers = "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body, $headers);

    header("location: index.html");

?>