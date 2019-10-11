<?php
session_start();
include("common.php");
$person=$_SESSION["idCustomer"];
if(!isset($person)){
header("location:customerLogin.php");}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$id=test_input($_POST['id']);
$email=test_input($_POST['email']);
$number=test_input($_POST['number']);
$business=test_input($_POST['business']);
$tradename='';
$tradename=test_input($_POST['tradename']);
$PANerror=$_FILES["PAN"]["error"];
if($PANerror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the pan card attested copy";
	header("Location:customerLoginView.php");
}
$Adhaarerror=$_FILES['Adhaar']['error'];
if($Adhaarerror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the adhaar card attested copy";
	header("Location:customerLoginView.php");
}
$Chequeerror = $_FILES['Cheque']['error'];
if($Chequeerror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the cheque attested copy";
	header("Location:customerLoginView.php");
}
$Addresserror = $_FILES['Address']['error'];
if($Addresserror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the address attested copy";
	header("Location:customerLoginView.php");
}
$Renterror = $_FILES['Rent']['error'];
$a=0;
if($PANerror==0 && $Adhaarerror==0 && $Chequeerror==0 && $Addresserror==0)
{
	$type='PAN';
	$code = rand(50362,99999);
	$PANname=$_FILES["PAN"]["name"];
	$PANtempname=$_FILES["PAN"]["tmp_name"];
	$filetype=pathinfo($PANname,PATHINFO_EXTENSION);
	$PANname=$email.$type.$code.".".$filetype;
	echo$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:customerLoginView.php");
	}
	$PANfolder="PAN/".$PANname;
	move_uploaded_file($PANtempname,$PANfolder);
	
	$type='Adhaar';
	$code = rand(50362,99999);
	$Adhaarname=$_FILES["Adhaar"]["name"];
	$Adhaartempname=$_FILES["Adhaar"]["tmp_name"];
	$filetype=pathinfo($Adhaarname,PATHINFO_EXTENSION);
	$Adhaarname=$email.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:customerLoginView.php");
	}
	$Adhaarfolder="Adhaar/".$Adhaarname;
	move_uploaded_file($Adhaartempname,$Adhaarfolder);
	
	$Rentfolder='';
	if($Renterror==0)
	{
		$type='Rent';
		$code = rand(50362,99999);
		$Rentname=$_FILES["Rent"]["name"];
		$Renttempname=$_FILES["Rent"]["tmp_name"];
		$filetype=pathinfo($Rentname,PATHINFO_EXTENSION);
		$filename=$email.$type.$code.".".$filetype;
		if($filetype !== 'pdf')
		{
			$a=1;
			$_SESSION['error']='Please enter in a pdf format';
			header("Location:customerLoginView.php");
		}
		$Rentfolder="Rent/".$Rentname;
		move_uploaded_file($Renttempname,$Rentfolder);
	}



	$type='Address';
	$code = rand(50362,99999);
	$Addressname=$_FILES["Address"]["name"];
	$Addresstempname=$_FILES["Address"]["tmp_name"];
	$filetype=pathinfo($Addressname,PATHINFO_EXTENSION);
	$Addressname=$email.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:customerLoginView.php");
	}
	$Addressfolder="Address/".$Addressname;
	move_uploaded_file($Addresstempname,$Addressfolder);


	$type='Cheque';
	$code = rand(50362,99999);
	$Chequename=$_FILES["Cheque"]["name"];
	$Chequetempname=$_FILES["Cheque"]["tmp_name"];
	$filetype=pathinfo($Chequename,PATHINFO_EXTENSION);
	$Chequename=$email.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:customerLoginView.php");
	}
	$Chequefolder="Cheque/".$Chequename;
	move_uploaded_file($Chequetempname,$Chequefolder);

	if($a!=1){
	$sql="INSERT INTO gstdata(id,email,mobile,business,tradename,PAN,Adhaar,Cheque,Address,Rent) VALUES($id,'$email','$number','$business','$tradename','$PANfolder','$Adhaarfolder','$Chequefolder','$Addressfolder','$Rentfolder')";
	mysqli_query($con,$sql);}
	header("Location:customerLoginView.php");
	require 'PHPMailerAutoload.php';



$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;          
$mail->Username = 'abhiruppalmethodist@gmail.com'; //user name
$mail->Password = 'abhirupsagnikpal';           // password
$mail->SMTPSecure = 'tls';                   
$mail->Port = 587;

$mail->setFrom('abhiruppalmethodist@gmail', 'Mailer');     // sender address
$mail->addAddress('abhiruppalmethodist@gmail', 'User'); //receiver's address
$mail->isHTML(true);                                 
$mail->Subject = "GST Notification";
$mail->Body    = "A person has submitted gst data";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->send()
}
else
{
	$_SESSION['error']='Please try again!!';
	header("Location:customerLoginView.php");
	
}
?>