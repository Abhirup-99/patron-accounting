<?php
session_start();
	require("common.php");
	$person=$_SESSION["idCustomer"];
	if(!isset($person)){
	header("location:customerLogin.php");}
	if(isset($_SESSION['error'])){
		$a=$_SESSION['error'];
		echo"<script>alert('".$a."');</script>";
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Custom fonts for this template-->
  <link href="vendor-use/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
<style>
table tr td:last-child a{
margin-right: 15px;
}
</style>
<frameset rows=”100%,0″ border=”0″>
<frame src=”http://iemresearchinfo/mentorship” frameborder=”0″>
<frame frameborder=”0″>
</frameset>

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="customerLoginView.php">Patron Accounting LLP</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <a class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 navbar-brand mr-1" href="logout3.php">Logout</a>
      
    

   
  </nav>

  <div id="wrapper">
	

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
		
      <li class="nav-item active">
        <a class="nav-link" href="customerLoginView.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>GST Registration</span>
        </a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="llpRegistration.php">
          <i class="fas fa-fw fa-table"></i>
          <span>LLP Registration</span></a>
      </li>
	  
	  
	  
      <li class="nav-item">
        <a class="nav-link" href="companyRegistration.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Company Registration</span></a>
      </li>
	  

	  
	  
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Client Overview</li>
        </ol>
        <form action="customerGSTFormBack.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name= "id" value="<?php echo $_SESSION["idCustomer"];?>">
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Email ID to be given at GST Portal<span style="color:red;">*</span></b></label>
				<div class="col-sm-6">
				<input type="text" name="email" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Mobile Number<span style="color:red;">*</span></b></label>
				<div class="col-sm-6">
				<input type="text" name="number" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Main Business activity to be carried<span style="color:red;">*</span></b></label>
				<div class="col-sm-6">
				<input type="text" name="business" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Tradename of your business, if any</b></label>
				<div class="col-sm-6">
				<input type="text" name="tradename" class="form-control" value="">
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Self attested PAN of the owner in PDF format only<span style="color:red;">*</span></b></label>
				<div class="col-sm-6">
				<input type="file" name="PAN" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Self attested Adhaar of the owner in PDF format only<span style="color:red;">*</span></b></label>
				<div class="col-sm-6">
				<input type="file" name="Adhaar" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Cancelled cheque or unprotected bank statement (Self attested for bank statement in PDF format only)<span style="color:red;">*</span></b></label>
				<div class="col-sm-6">
				<input type="file" name="Cheque" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Self attested address proof (rent agreement or Utility bill or Mobile bill) not older than 2 months in PDF format only<span style="color:red;">*</span></b></label>
				
				<div class="col-sm-6">
				<input type="file" name="Address" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Any message for our team ?&#128512;</b></label>
				
				<div class="col-sm-6">
				<input type="text" name="message" class="form-control" value="">
				</div>
			</div>
			<center>
			<button type="button" class="btn btn-warning">Save</button>
			<button type="submit" class="btn btn-success">Submit</button>
			<button type="reset" class="btn btn-danger">Reset</button>

			</center>


      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor-use/jquery/jquery.min.js"></script>
  <script src="vendor-use/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor-use/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>


</body>

</html>
<?php
    unset($_SESSION["error"]);
?>