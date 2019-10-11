<?php
    session_start();
	require "common.php";
	if (isset($_POST['submit'])) {
		function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

	$newpassword = test_input($_POST['setpw']);
    $confirmpassword = test_input($_POST['confpw']);
	if (!isset($_SESSION['email'])) {
	header("location:index.php");}
	$email=$_SESSION['email'];

        if($newpassword == $confirmpassword){
            
            //$password = md5($newpassword);
            $sql = "UPDATE register SET password = '$newpassword' WHERE Email = '$email'";
			$result=mysqli_query($con, $sql) or die(mysqli_error($con));
	
			header("location:employeeLogin.php");
			
        }
		else
		{
		echo"<script>alert('Passwords didnot match');</script>";
    }
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor-use/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Forgot your password?</h4>
          <p>Enter your password</p>
        </div>
        <form action="#" action="passwordReset.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputPassword" class="form-control" name="setpw" placeholder="*****" required="required" autofocus="autofocus">
              <label for="inputPassword">Enter password</label>
            </div>
          </div>
		  <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputConfirmPassword" class="form-control" name="confpw" placeholder="*****" required="required" autofocus="autofocus">
              <label for="inputConfirmPassword">Confirm Pasword</label>
            </div>
          </div>

          <input class="btn btn-primary btn-block"  type="submit" name="submit" value="Reset Password">
        </form>
        <div class="text-center">
          <a class="d-block small" href="employeeLogin.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor-use/jquery/jquery.min.js"></script>
  <script src="vendor-use/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor-use/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

<?php
    unset($_SESSION["error"]);
?>