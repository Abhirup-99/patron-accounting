<?php
session_start();
	require("common.php");
	$person=$_SESSION["id"];
	if(!isset($person)){
	header("location:indexCompany.php");}
	if(((int)$_SESSION['valid'])==1)
	{
	header("Location:sad.php");}
	
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
        <a class="nav-link" href="loginView.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  
	  <li class="nav-item text-light text-center">Profile Picture
	  <div class="img-fluid"></div>
	  </li>
      <li class="nav-item">
        <a class="nav-link" href="new.php">
          <i class="fas fa-fw fa-table"></i>
          <span>New User</span></a>
      </li>
	  
	  
	  
      <li class="nav-item">
        <a class="nav-link" href="downloadFile.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Document Download</span></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="password.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Password Generation</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="allGSTData.php">
          <i class="fas fa-fw fa-table"></i>
          <span>GST Data</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="allLLPData.php">
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
          <li class="breadcrumb-item active">Client Overview</li>
        </ol>
    <div class="GSTdata"></div>
    <div id="clientData" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-body">
      <center>
        <div class="row text-center">
        <div class="col-sm-4"><b>Email</b></div>
        <div class="col-sm-8" id="email"></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Mobile Number</b></div>
        <div class="col-sm-8" id="number"></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Main Business activity to be carried </b></div>
        <div class="col-sm-8" id="business"></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Tradename of your business, if any</b></div>
        <div class="col-sm-8" id="tradename"></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Self attested PAN of the owner</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="PAN" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Self attested Adhaar</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="Adhaar" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Cancelled cheque or unprotected bank statement</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="Cheque" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Self attested address proof</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="Address" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>In case you are operating from rented premises the upload the NOC from owner of property</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="Rent" target="_blank">Download</a></div>
        </div><br>
          <button type="button" class="button btn-warning" data-dismiss="modal">Close</button>
      </center>
      </div>
      </div>

    </div>
    </div>          
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
<script>
$(document).ready(function () {
  readRecords(); 
});
var pan='',adhaar='',cheque='',rent='',address='';
function readRecords(){
  var readrecords = "readrecords";
  $.ajax({
    url:"getGSTDataEmployee.php",
    type:"POST",
    data:{readrecords:readrecords},
    success:function(data,status){
    $('.GSTdata').html(data);
    },
  });
}
function ViewUser(viewid){
  $.ajax({
    url:"getGSTDataEmployee.php",
    type:'POST',
    data: {viewid:viewid},
    success:function(data, status){
      var myObj = JSON.parse(data);
      document.getElementById("email").innerHTML = myObj.email;
      document.getElementById("number").innerHTML = myObj.mobile;
      document.getElementById("business").innerHTML = myObj.business;
      document.getElementById("tradename").innerHTML = myObj.tradename;
      var e=document.getElementById("PAN");
      var a=document.getElementById("Adhaar");
      var b=document.getElementById("Address");
      var c=document.getElementById("Rent");
      var d=document.getElementById("Cheque");
      e.href=myObj.PAN;
      a.href=myObj.Adhaar;
      d.href=myObj.Cheque;
      b.href=myObj.Address;
      c.href=myObj.Rent;
    }
  });
  $("#clientData").modal("show");
}</script>
  
