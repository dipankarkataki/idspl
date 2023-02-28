<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
include 'vendor/autoload.php';
$subj_1 =  $subject;
$subj_2 =  "Thank you for your interest";
$today = date("d-m-Y h:i a"); 

$mail_body_1 = "<br>
Name: {$name}<br>
Email: {$email}<br>
Phone: {$phone}<br>
Subject: {$subject}<br>
Message: {$message}<br>
Created: {$today}<br>";
		
$mail_body_2 = "Hello ".$name.", <br>
Thank you for your interest in ".$project.".<br>
One of us will get in touch with you soon.<br><br>

Alternatively, you could call us at (+91) ".$contact_phone." (7am - 10pm IST) <br>
Have a great day!<br><br>

Sincerely,<br>
Team ".$mailer_name;		

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
   //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $mail_host;  					  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $mail_from;             // SMTP username
    $mail->Password = $mail_password;                           // SMTP password
    $mail->SMTPSecure = $tls_ssl;                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $mail_port;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($mail_from, $mailer_name);
    //$mail->addAddress($receive_email);     // Add a recipient
	$to_address = explode(",",$to_address);
	foreach($to_address as $val) { $mail->addAddress(trim($val)); }
    //$mail->addBCC($email);               // Name is optional

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subj_1;
    $mail->Body    = $mail_body_1;    
    $mail->send();
	
	$mail->ClearAllRecipients( );
	$mail->addAddress($email);
	$mail->Subject = $subj_2;
    $mail->Body    = $mail_body_2;
	$mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}