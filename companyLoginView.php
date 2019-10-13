<?php
	session_start();
	require("common.php");
	$person=$_SESSION["idCompany"];
	if(!isset($person)){
	header("location:indexCompany.php");}
	$person=(int)$person;
	$sql = "SELECT * FROM register WHERE id=".$person;
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);

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
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="companyLoginView.php">Patron Accounting LLP</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <a class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 navbar-brand mr-1" href="logout2.php">Logout</a>
      
    

   
  </nav>

  <div id="wrapper">
	

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
		
      <li class="nav-item active">
        <a class="nav-link" href="companyLoginView.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  
	  <li class="nav-item text-light text-center">Profile Picture
	  <div class="img-fluid"></div>
	  </li>
	  
	  
	  
      <li class="nav-item">
        <a class="nav-link" href="downloadFileCompany.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Document Download</span></a>
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
				<div class="row text-center">
				<div class="col-sm-4"><b>Company Number</b></div>
				<div class="col-sm-8" id="cin"><?php echo $row['cin'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Company Name</b></div>
				<div class="col-sm-8" id="name"><?php echo $row['CompanyName']; ?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Registration Number</b></div>
				<div class="col-sm-8" id="register"><?php echo $row['RegistrationNumber']; ?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Company Or LLP</b></div>
				<div class="col-sm-8" id="comllp"><?php echo $row['CompanyOrLLP']; ?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Authorised Capital</b></div>
				<div class="col-sm-8" id="authCap"><?php echo $row['AuthorisedCapital'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Paid Up Capital</b></div>
				<div class="col-sm-8" id="authCap"><?php echo $row['PaidUpCapital'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Date Of Incoporation</b></div>
				<div class="col-sm-8" id="date"><?php echo $row['DateOfIncoporation'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Email ID</b></div>
				<div class="col-sm-8" id="email"><?php echo $row['EmailId'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Registered Address(1)</b></div>
				<div class="col-sm-8" id="regAdd1"><?php echo $row['RegisteredAddress1'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Registered Address(2)</b></div>
				<div class="col-sm-8" id="regAdd2"><?php echo $row['RegisteredAddress2'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Director Name(1)</b></div>
				<div class="col-sm-8" id="DName1"><?php $row['DirectorName1'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>PAN(1)</b></div>
				<div class="col-sm-8" id="PAN1"><?php $row['PAN1'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Director Name(2)</b></div>
				<div class="col-sm-8" id="DName2"><?php $row['DirectorName2'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>PAN(2)</b></div>
				<div class="col-sm-8" id="PAN2"><?php $row['PAN2'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Director Name(3)</b></div>
				<div class="col-sm-8" id="DName3"><?php $row['DirectorName3'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>PAN(3)</b></div>
				<div class="col-sm-8" id="PAN3"><?php $row['PAN3'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Director Name(4)</b></div>
				<div class="col-sm-8" id="DName4"><?php $row['DirectorName4'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>PAN(4)</b></div>
				<div class="col-sm-8" id="PAN4"><?php $row['PAN4'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Director Name(5)</b></div>
				<div class="col-sm-8" id="DName5"><?php $row['DirectorName5'];?></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>PAN(5)</b></div>
				<div class="col-sm-8" id="PAN5"><?php $row['PAN5'];?></div>
				</div><br>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

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
