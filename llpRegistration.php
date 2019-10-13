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
.headings{
	background-color:rgb(212, 212, 212);
	font-weight: lighter;
	padding:10px;
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
	  
	  <li class="nav-item text-light text-center">Profile Picture
	  <div class="img-fluid"></div>
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
        <form action="llpRegistrationBack.php" method="post" enctype="multipart/form-data">
		<div class="headings">Proposed LLP Details</div>
		<br>
		<input type="hidden" name= "id" value="<?php echo $_SESSION["idCustomer"];?>">
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Proposed Name of LLP (1st Preference)</b></label>
				<div class="col-sm-6">
				<input type="text" name="name1" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Proposed Name of LLP (2nd Preference)</b></label>
				<div class="col-sm-6">
				<input type="text" name="name2" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Business objective of proposed LLP (object clause)</b></label>
				<div class="col-sm-6">
				<textarea name="business" class="form-control" value="" required cols="30" rows="5"></textarea>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Total capital contribution of LLP</b></label>
				<div class="col-sm-6">
				<input type="text" name="capital" class="form-control" value="">
				</div>
			</div>
			<div style="font-weight:light;">This proof can be electricity bill, mobile or telephone bill or utility bill not older than 2 months and shall be self attested by owner of the property</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Address Proof of proposed registrar office of LLP (only PDF format and attested from owner)</b></label>
				<div class="col-sm-6">
				<input type="file" name="Address" class="form-control" value="" required>
				</div>
			</div>
			<div class="headings">Partner Details</div>
			<br>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Name of the Partner<span style="color:red;">*</span></b></label>
				<div class="col-sm-6">
				<input type="text" name="namePartner" class="form-control" value="" required>
				</div>
			</div>

			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Personal Email ID<span style="color:red;">*</span></b></label>
				<div class="col-sm-6">
				<input type="text" name="email" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Mobile<span style="color:red;">*</span></b></label>
				<div class="col-sm-6">
				<input type="text" name="mobile" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Qualification<span style="color:red;">*</span></b></label>
				
				<div class="col-sm-6">
				<input type="text" name="qualification" class="form-control" value="" required>
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Occupation<span style="color:red;">*</span></b></label>
				
				<div class="col-sm-6">
				<input type="text" name="occupation" class="form-control" value="">
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Individual contribution of this Partner<span style="color:red;">*</span></b></label>
				
				<div class="col-sm-6">
				<input type="text" name="individualContrib" class="form-control" value="">
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>If already Director in other LLP or Company then provide Director Identification number (DIN)</b></label>
				
				<div class="col-sm-6">
				<input type="text" name="DIN" class="form-control" value="">
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Self attested PAN in PDF format only<span style="color:red;">*</span></b></label>
				
				<div class="col-sm-6">
				<input type="file" name="PAN" class="form-control" value="">
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Self attested Adhaar in PDF format only</b></label>
				
				<div class="col-sm-6">
				<input type="file" name="Adhaar" class="form-control" value="">
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Self attested (Passport or Voter card or Driving License) in PDF format only<span style="color:red;">*</span></b></label>
				
				<div class="col-sm-6">
				<input type="file" name="Passport" class="form-control" value="">
				</div>
			</div>
			<div class="form-group row justify-content-left">
				<label class="col-sm-3 col-form-label text-right"><b>Self attested address proof (Bank statement or Utility bill or Mobile bill) not older than 2 months in PDF format only<span style="color:red;">*</span></b></label>
				
				<div class="col-sm-6">
				<input type="file" name="Bank" class="form-control" value="">
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