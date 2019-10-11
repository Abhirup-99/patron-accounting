<?php
session_start();

require 'PHPMailerAutoload.php';
$code = rand(50362,99999);

$_SESSION['code'] = $code;
$mail = new PHPMailer;


$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;          
$mail->Username = 'abhiruppalmethodist@gmail.com'; //user name
$mail->Password = 'abhirupsagnikpal';           // password
$mail->SMTPSecure = 'tls';                   
$mail->Port = 587;

$mail->setFrom('abhiruppalmethodist@gmail', 'Mailer');     // sender address
$mail->addAddress($_SESSION['email'], 'User'); //receiver's address
$mail->isHTML(true);                                 
$mail->Subject = "Password Recovery code";
$mail->Body    = "Your password recovery code is<br>".$code."<br>enter the number in required field";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'SOMETHING WENT WRONG';
	echo"click to enter again";
	echo"<Button>Click</Button>";
    
} else {
	header("Location: codecheck.php");
}
