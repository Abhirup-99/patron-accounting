<?php
session_start();
require("common.php");
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
    return $data;
}
$name=test_input($_POST['name']);
$username=test_input($_POST['username']);
$password=test_input($_POST['password']);
$email=test_input($_POST['email']);
$check="SELECT * FROM master WHERE email='$email'";
$result=mysqli_query($con,$check);
$num=mysqli_num_rows($result);
if($num==0)
{
	$sql="INSERT INTO master(username,password,email)VALUES('$username','$password','$email')";
	mysqli_query($con,$sql);
	$sql="SELECT * FROM master WHERE email='$email'";
	$row=mysqli_query($con,$sql);
	$result=mysqli_fetch_array($row);
	$_SESSION['idMaster']=$result['id'];
	header("location: masterLoginView.php");
}
else
{
	$_SESSION['bad']='1';
	header("Location:formMaster.php");
}
?>