<?php
$subject = "Sending Email Using PHP Mailer";
$body ='<p>Congratulations!</p>';
$body .='<p>You have successfully received an email from
<a href="https://www.allphptricks.com/">AllPHPTricks.com</a>.</p>';
// Enter Your Email Address Here To Receive Email
$email_to = "ankithabmtth@gmail.com";
 
$email_from = "noreply@domain.com"; // Enter Sender Email
$sender_name = "AllPHPTricks"; // Enter Sender Name
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.yourdomain.com"; // Enter Your Host/Mail Server
$mail->SMTPAuth = true;
$mail->Username = "noreply@domain.com"; // Enter Sender Email
$mail->Password = "your_strong_password";
//If SMTP requires TLS encryption then remove comment from below
//$mail->SMTPSecure = "tls";
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = $email_from;
$mail->FromName = $sender_name;
$mail->Sender = $email_from; // indicates ReturnPath header
$mail->AddReplyTo($email_from, "No Reply"); // indicates ReplyTo headers
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
// If you know receiver name use following
//$mail->AddAddress($email_to, "Recepient Name");
// To send CC remove comment from below
//$mail->AddCC('username@email.com', "Recepient Name");
// To send attachment remove comment from below
//$mail->AddAttachment('files/readme.txt');
/*
Please note file must be available on your
host to be attached with this email.
*/
 
if (!$mail->Send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
    echo "<div style='color:#FF0000; font-size:20px; font-weight:bold;'>
    An email has been sent to your email address.</div>";
}
?>