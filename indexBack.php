<?php
session_start();
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$name=test_input($_POST['Name']);
$email=test_input($_POST['Email']);
$subject=test_input($_POST['Subject']);
$message=test_input($_POST['Message']);

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;


$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;          
$mail->Username = 'abhiruppalmethodist@gmail.com'; //user name
$mail->Password = 'abhirupsagnikpal';           // password
$mail->SMTPSecure = 'tls';                   
$mail->Port = 587;

$mail->setFrom('abhiruppalmethodist@gmail', 'Mailer');     // sender address
$mail->addAddress($email, 'User'); //receiver's address
$mail->isHTML(true);                                 
$mail->Subject = "Email recieved from the website";
$mail->Body    = "Name:".$name."<br>Email:".$email."<br>Subject:".$subject."<br>Message:".$message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->send()
header("Location:index.html");
?>
