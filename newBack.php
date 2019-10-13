<?php
  session_start();
  include("common.php");
	$person=$_SESSION["id"];
	if(!isset($person)){
	header("location:indexCompany.php");}
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
  
  $cin = test_input($_POST['cin']);
  $CompanyName = test_input($_POST['compName']);
  $RegistrationNumber = test_input($_POST['RegNum']);
  $CompanyOrLLP = test_input($_POST['compLLP']);
  $AuthorisedCapital = test_input($_POST['AuthCap']);
  $PaidUpCapital = test_input($_POST['PaidUpCap']);
  $DateOfIncoporation = test_input($_POST['dateIncop']);
  $RegisteredAddress1 = test_input($_POST['RegAdd1']);
  $RegisteredAddress2 = test_input($_POST['RegAdd2']);
  $EmailID = test_input($_POST['email']);
  $DirectorName1 = test_input($_POST['dName1']);
  $PAN1 = test_input($_POST['pan1']);
  $DirectorName2 = test_input($_POST['dName2']);
  $PAN2 = test_input($_POST['pan2']);
  $DirectorName3 = test_input($_POST['dName3']);
  $PAN3 = test_input($_POST['pan3']);
  $DirectorName4 = test_input($_POST['dName4']);
  $PAN4 = test_input($_POST['pan4']);
  $DirectorName5 = test_input($_POST['dName5']);
  $PAN5 = test_input($_POST['pan5']);
  $sql = "INSERT INTO register(cin,CompanyName,RegistrationNumber,CompanyOrLLP,AuthorisedCapital,PaidUpCapital,DateOfIncoporation,RegisteredAddress1,RegisteredAddress2,EmailID,DirectorName1,PAN1,DirectorName2,PAN2,DirectorName3,PAN3,DirectorName4,PAN4,DirectorName5,PAN5)VALUES('$cin','$CompanyName','$RegistrationNumber','$CompanyOrLLP',".$AuthorisedCapital.",".$PaidUpCapital.",'$DateOfIncoporation','$RegisteredAddress1','$RegisteredAddress2','$EmailID','$DirectorName1','$PAN1','$DirectorName2','$PAN2','$DirectorName3','$PAN3','$DirectorName4','$PAN4','$DirectorName5','$PAN5')";
  mysqli_query($con, $sql) or die(mysqli_error($con));
  header("location: loginView.php");	
?>