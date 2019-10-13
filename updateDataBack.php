<?php
  session_start();
  include("common.php");
	$person=$_SESSION["id"];
	if(!isset($person)){
	header("location:indexCompany.php");}
  $email=$name=$pass=$stream=$section=$class_Roll=$university_Roll=$college_enroll="";
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
  $id = test_input($_POST['id']);
  $id = (int)$id;
  
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
  $sql = "UPDATE register SET cin = '$cin', CompanyName = '$CompanyName', RegistrationNumber = '$RegistrationNumber', CompanyOrLLP='$CompanyOrLLP', AuthorisedCapital=".$AuthorisedCapital.",PaidUpCapital=".$PaidUpCapital.", DateOfIncoporation='$DateOfIncoporation', RegisteredAddress1='$RegisteredAddress1', RegisteredAddress2='$RegisteredAddress2', EmailID='$EmailID',DirectorName1='$DirectorName1',PAN1='$PAN1',DirectorName2='$DirectorName2',PAN2='$PAN2',DirectorName3='$DirectorName3',PAN3='$PAN3',DirectorName4='$DirectorName4',PAN4='$PAN4',DirectorName5='$DirectorName5',PAN5='$PAN5'   WHERE id =".$id;
  mysqli_query($con, $sql) or die(mysqli_error($con));
  header("location: loginView.php");	
?>