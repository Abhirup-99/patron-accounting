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
$message=test_input($_POST['message']);
if($PANerror!=0)
{
	$_SESSION['error']="Please rectify the PAN document";
	header("Location:GSTData.php");
}
$Adhaarerror=$_FILES['Adhaar']['error'];
if($Adhaarerror!=0)
{
	$_SESSION['error']="Please rectify the Adhaar document";
	header("Location:GSTData.php");
}
$Chequeerror = $_FILES['Cheque']['error'];
if($Chequeerror!=0)
{
	$_SESSION['error']="Please rectify the cheque document";
	header("Location:GSTData.php");
}
$Addresserror = $_FILES['Address']['error'];
if($Addresserror!=0)
{
	$_SESSION['error']="Please rectify the address document";
	header("Location:GSTData.php");
}

$a=0;
if($PANerror==0 && $Adhaarerror==0 && $Chequeerror==0 && $Addresserror==0)
{
	if(filesize($_FILES['PAN']['name'])>150000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='PAN pdf exceeded the file size limit';
		header("Location:GSTData.php");
	}	
	if(filesize($_FILES['Adhaar']['name'])>150000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='Adhaar pdf exceeded the file size limit';
		header("Location:GSTData.php");
	}	
	if(filesize($_FILES['Cheque']['name'])>150000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='Cheque pdf exceeded the file size limit';
		header("Location:GSTData.php");
	}	
	if(filesize($_FILES['Address']['name'])>150000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='Address pdf exceeded the file size limit';
		header("Location:GSTData.php");
	}	

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
		header("Location:GSTData.php");
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
		header("Location:GSTData.php");
	}
	$Adhaarfolder="Adhaar/".$Adhaarname;
	move_uploaded_file($Adhaartempname,$Adhaarfolder);
	
	$Rentfolder='';


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
		header("Location:GSTData.php");
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
		header("Location:GSTData.php");
	}
	$Chequefolder="Cheque/".$Chequename;
	move_uploaded_file($Chequetempname,$Chequefolder);

	if($a!=1){
	$sql="INSERT INTO gstdata(id,email,mobile,business,tradename,PAN,Adhaar,Cheque,Address,Rent) VALUES($id,'$email','$number','$business','$tradename','$PANfolder','$Adhaarfolder','$Chequefolder','$Addressfolder','$Rentfolder')";
	mysqli_query($con,$sql);}
	header("Location:GSTData.php");
	require 'PHPMailerAutoload.php';

$sentence='';
if(strcmp($message,'')==0)
	$sentence='A person has submitted gst data';
else
	$sentence='A person has submitted gst data<br>Message from customer:'.$message;

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
$mail->Body    = $sentence;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->send()
}
else
{
	$_SESSION['error']='Please try again!!';
	header("Location:customerLoginView.php");
	
}
?>