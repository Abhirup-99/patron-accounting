<?php
session_start();
	require("common.php");
	$person=$_SESSION["idMaster"];
	if(!isset($person)){
	header("location:masterLogin.php");}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Abhirup Pal">

  <title>Patron Accounting LLP</title>

  <!-- Custom fonts for this template-->
  <link href="vendor-use/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
<frameset rows=”100%,0″ border=”0″>
<frame src=”http://iemresearchinfo/mentorship” frameborder=”0″>
<frame frameborder=”0″>
</frameset>

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="loginView.php">Patron Accounting LLP</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <a class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 navbar-brand mr-1" href="logout.php">Logout</a>
      
    

   
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
		
      <li class="nav-item active">
        <a class="nav-link" href="masterLoginView.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  
	  <li class="nav-item text-light text-center">Profile Picture
	  <div class="img-fluid"></div>
	  </li>
      <li class="nav-item">
        <a class="nav-link" href="employeeValidation.php">
          <i class="fas fa-fw fa-table"></i>
          <span>New Employee</span></a>
      </li>
	  
	  
	  
      <li class="nav-item">
        <a class="nav-link" href="downloadFileMaster.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Document Download</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="passwordCompany.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Password Generation</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="allCompany.php">
          <i class="fas fa-fw fa-table"></i>
          <span>All Companies</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newMaster.php">
          <i class="fas fa-fw fa-table"></i>
          <span>New Company</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="masterCustomerGST.php">
          <i class="fas fa-fw fa-table"></i>
          <span>GST Data</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="masterCustomerLLP.php">
          <i class="fas fa-fw fa-table"></i>
          <span>LLP Data</span></a>
      </li>

	  
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Update Profile</li>
        </ol>

        <form action="newBackMaster.php" method="post">
		
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Company Number(CIN)</b></label>
    <div class="col-sm-6">
      <input type="text" name="cin" class="form-control" value="">
    </div>
  </div>
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Company Name</b></label>
    <div class="col-sm-6">
      <input type="text" name="compName" class="form-control" value="">
    </div>
  </div>
  
  
  
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Registration Number</b></label>
    <div class="col-sm-6">
      <input type="text" name="RegNum" class="form-control" value="">
    </div>
  </div>
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Company or LLP</b></label>
    <div class="col-sm-6">
      <input type="text" name="compLLP" class="form-control" value="">
    </div>
  </div>
  
  
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Authorised Capital</b></label>
    <div class="col-sm-6">
      <input type="text" name="AuthCap" class="form-control" value="">
    </div>
  </div>
  
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Paid Up Capital</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="PaidUpCap" value="">
    </div>
  </div>
  
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Date Of Incoporation</b></label>
    <div class="col-sm-6">
      <input type="date" class="form-control" name="dateIncop" value="">
    </div>
  </div>
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Registered Address(1)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="RegAdd1" value="">
    </div>
  </div>
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Registered Address(2)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="RegAdd2" value="">
    </div>
  </div>
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Email ID</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="email" value="">
    </div>
  </div>
   <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Director Name(1)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="dName1" value="">
    </div>
  </div>
   <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>PAN(1)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="pan1" value="">
    </div>
  </div>

  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Director Name(2)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="dName2" value="">
    </div>
  </div>
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>PAN(2)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="pan2" value="">
    </div>
  </div>
  <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>DirectorName(3)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="dName3" value="">
    </div>
  </div>
   <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>PAN(3)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="pan3" value="">
    </div>
  </div>
   <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Director Name(4)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="dName4" value="">
    </div>
  </div>
   <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>PAN(4)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="pan4" value="">
    </div>
  </div>
     <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Director Name(5)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="dName5" value="">
    </div>
  </div>
   <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>PAN(5)</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="pan5" value="">
    </div>
  </div>

  
  </div><br>
  
                    

  <div class="form-group row justify-content-center">
    <div class="col-sm-12 text-center">
      <button type="submit" class="btn btn-success">Update</button>
    </div>
  </div>
</form>

        

        

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

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor-use/jquery/jquery.min.js"></script>
  <script src="vendor-use/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor-use/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
 
</body>

</html>
