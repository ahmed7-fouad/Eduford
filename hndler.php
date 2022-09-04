<?php
$name=$_post['name'];
$visitor_email=$_post['email'];
$subject=$_post['subject'];
$message=$_post['message'];




$email_from ='info@easyshow.com.com';
$email_subject='New From Submission';
$email_body="User Name: $name.\n",
            "User Email: $visitor_email.\n",
            "Subject:$subject.\n",
            "message:$message.\n";
    $to='avinash6252@gmail.com';

    $headers="From $email_from \r\n";

    $headers.="replay-to: $visitor_email\r\n";

    mail($to,$email_subject,$email_body,$headers)
    header("location:contact_page.html");
?>
  