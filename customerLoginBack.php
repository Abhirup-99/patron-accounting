<?php
session_start();
require("common.php");
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$username = addslashes(test_input($_POST["username"]));
$password=addslashes(test_input($_POST["password"]));
//$password=MD5("$password");
$error = "username/password incorrect";
$query = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);
if($num!=0){
	$row = mysqli_fetch_array($result);
	$_SESSION['idCustomer']=$row['id'];
    header("location: customerLoginView.php"); //send user to homepage, for example.
}else{
	$_SESSION["error"] = $error;
    header("location: customerLogin.php"); //send user back to the login page.
}

?>