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
$DIN="";
$id=test_input($_POST['id']);
$name1=test_input($_POST['name1']);
$name2=test_input($_POST['name2']);
$business=test_input($_POST['business']);
$capital=test_input($_POST['capital']);
$namePartner=test_input($_POST['namePartner']);
$email=test_input($_POST['email']);
$mobile=test_input($_POST['mobile']);
$qualification=test_input($_POST['qualification']);
$occupation=test_input($_POST['occupation']);
$individualContrib=test_input($_POST['individualContrib']);
$DIN=test_input($_POST['DIN']);
$Addresserror=$_FILES['Address']['error'];
if($Addresserror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the pan card attested copy";
	header("Location:llpRegistration.php");
}
$PANerror=$_FILES['PAN']['error'];
if($PANerror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the pan card attested copy";
	header("Location:llpRegistration.php");
}
$Adhaarerror=$_FILES['Adhaar']['error'];
$Bankerror=$_FILES['Bank']['error'];
if($Bankerror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the pan card attested copy";
	header("Location:llpRegistration.php");
}
$Passporterror=$_FILES['Passport']['error'];
if($Passporterror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the pan card attested copy";
	header("Location:llpRegistration.php");
}
$a=0;
if($Addresserror==0 && $PANerror==0 && $Bankerror==0 && $Passporterror==0)
{
	$type='PAN';
	$code = rand(50362,99999);
	$PANname=$_FILES["PAN"]["name"];
	$PANtempname=$_FILES["PAN"]["tmp_name"];
	$filetype=pathinfo($PANname,PATHINFO_EXTENSION);
	$PANname=$email.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:llpRegistration.php");
	}
	$PANfolder="PANllp/".$PANname;
	move_uploaded_file($PANtempname,$PANfolder);


	$Address='Address';
	$code = rand(50362,99999);
	$Addressname=$_FILES["Address"]["name"];
	$Addresstempname=$_FILES["Address"]["tmp_name"];
	$filetype=pathinfo($Addressname,PATHINFO_EXTENSION);
	$Addressname=$email.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:llpRegistration.php");
	}
	$Addressfolder="Addressllp/".$PANname;
	move_uploaded_file($Addresstempname,$Addressfolder);


	$type='Bank';
	$code = rand(50362,99999);
	$Bankname=$_FILES["Bank"]["name"];
	$Banktempname=$_FILES["Bank"]["tmp_name"];
	$filetype=pathinfo($Bankname,PATHINFO_EXTENSION);
	$Bankname=$email.$type.$code.".".$filetype;
	echo$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:llpRegistration.php");
	}
	$Bankfolder="Bankllp/".$Bankname;
	move_uploaded_file($Banktempname,$Bankfolder);


	$type='Passport';
	$code = rand(50362,99999);
	$Passportname=$_FILES["Passport"]["name"];
	$Passporttempname=$_FILES["Passport"]["tmp_name"];
	$filetype=pathinfo($Passportname,PATHINFO_EXTENSION);
	$Passportname=$email.$type.$code.".".$filetype;
	echo$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:llpRegistration.php");
	}
	$Passportfolder="Passportllp/".$Passportname;
	move_uploaded_file($Passporttempname,$Passportfolder);
	
	$Adhaarfolder='';
	if($Adhaarerror==0)
	{
		$type='Adhaar';
		$code = rand(50362,99999);
		$Adhaarname=$_FILES["Adhaar"]["name"];
		$Adhaartempname=$_FILES["Adhaar"]["tmp_name"];
		$filetype=pathinfo($Adhaarname,PATHINFO_EXTENSION);
		$Adhaarname=$email.$type.$code.".".$filetype;
		echo$filetype;
		if($filetype !== 'pdf')
		{
			$a=1;
			$_SESSION['error']='Please enter in a pdf format';
			header("Location:llpRegistration.php");
		}
		$Adhaarfolder="Adhaarllp/".$Adhaarname;
		move_uploaded_file($Adhaartempname,$Adhaarfolder);
		
	}
	if($a!=1)
	{
		$sql="INSERT INTO llpdata(id,name1,name2,businessObjective,TotalCapital,Address,namePartner,email,mobile,qualification,occupation,IndividualContrib,DIN,PAN,Adhaar,Passport,Bank)
		VALUES($id,'$name1','$name2','$business','$capital','$Addressfolder','$namePartner','$email','$mobile','$qualification','$occupation','$individualContrib','$DIN','$PANfolder','$Addhaarfolder','$Passportfolder','$Bankfolder')";
		mysqli_query($con,$sql);
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
		$mail->Subject = "LLP Notification";
		$mail->Body    = "A person has submitted llp data";
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		$mail->send()

	}
	header("Location:llpRegistration.php");
}
else
{
	$_SESSION['error']='Please try again!!';
	header("Location:llpRegistration.php");
	
}
?>
