<?php
    session_start();
	$value=(int)$_SESSION['view'];
    if(!isset($_SESSION['code'])){
	header("location:mailer.php");}
    if (isset($_POST['submit'])) {
        if ($_SESSION['code'] == $_POST['recode']) {
			if($value==2)
				header("Location:passwordResetCompany.php");
			else if($value==1)
				header("Location:passwordReset.php");
			else
				header("Location:passwordResetEmployee.php");
            unset($_SESSION["code"]);
        }
        else {
            echo "<script>alert('wrong password')</script>";
			//header("location:codecheck.php");
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
  <meta name="author" content="Abhirup Pal">
  <link rel="icon" href="Patron.jpg" type="image/jpg" sizes="16x16">

  <title>Patron Accounting LLP</title>

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
          <p>Enter your code</p>
        </div>
        <form action="#" action="passwordReset.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" name="recode" placeholder="Recovery Code" required="required" autofocus="autofocus">
              <label for="inputEmail">Enter code</label>
            </div>
          </div>
          <input class="btn btn-primary btn-block"  type="submit" name="submit" value="Reset Password">
        </form>
        <div class="text-center">
          <a class="d-block small" href="index.php">Login Page</a>
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

