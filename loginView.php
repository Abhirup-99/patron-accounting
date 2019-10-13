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
		<div class="data">
		</div>
		<div id="clientData" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-body">
			<center>
				<div class="row text-center">
				<div class="col-sm-4"><b>Company Number</b></div>
				<div class="col-sm-8" id="cin"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Company Name</b></div>
				<div class="col-sm-8" id="name"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Registation Number</b></div>
				<div class="col-sm-8" id="register"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Company Or LLP</b></div>
				<div class="col-sm-8" id="comllp"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Authorised Capital</b></div>
				<div class="col-sm-8" id="authCap"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Date Of Incoporation</b></div>
				<div class="col-sm-8" id="date"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Email ID</b></div>
				<div class="col-sm-8" id="email"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Registered Address(1)</b></div>
				<div class="col-sm-8" id="regAdd1"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Registered Address(2)</b></div>
				<div class="col-sm-8" id="regAdd2"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Director Name(1)</b></div>
				<div class="col-sm-8" id="DName1"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>PAN(1)</b></div>
				<div class="col-sm-8" id="PAN1"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Director Name(2)</b></div>
				<div class="col-sm-8" id="DName2"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>PAN(2)</b></div>
				<div class="col-sm-8" id="PAN2"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Director Name(3)</b></div>
				<div class="col-sm-8" id="DName3"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>PAN(3)</b></div>
				<div class="col-sm-8" id="PAN3"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Director Name(4)</b></div>
				<div class="col-sm-8" id="DName4"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>PAN(4)</b></div>
				<div class="col-sm-8" id="PAN4"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Director Name(5)</b></div>
				<div class="col-sm-8" id="DName5"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>PAN(5)</b></div>
				<div class="col-sm-8" id="PAN5"></div>
				</div><br>
				<form method="GET" action="updateData.php">
					<input type="hidden" name="id" id="idValue" value="">
					<button type="submit" class="button btn-success">Change</button>
					<button type="button" class="button btn-warning" data-dismiss="modal">Close</button>

				</form>
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
		function readRecords(){
			var readrecords = "readrecords";
			$.ajax({
				url:"getData.php",
				type:"POST",
				data:{readrecords:readrecords},
				success:function(data,status){
				$('.data').html(data);
				},

			});
		}
function ViewUser(id){
	  $.post({
			url:"getData.php",
			type:"POST",
			data:{id: id},
			success:function (data, status) {
            //JSON.parse() parses a string, written in JSON format, and returns a JavaScript object.
            //alert(data);
			var myObj = JSON.parse(data);
				document.getElementById("cin").innerHTML = myObj.cin;
				document.getElementById("name").innerHTML = myObj.CompanyName;
				document.getElementById("register").innerHTML = myObj.RegistationNumber;
				document.getElementById("comllp").innerHTML = myObj.CompanyOrLLP;
				document.getElementById("authCap").innerHTML = myObj.AuthorisedCapital;
				document.getElementById("date").innerHTML = myObj.DateOfIncoporation;
				document.getElementById("email").innerHTML = myObj.EmailId;
				document.getElementById("regAdd1").innerHTML = myObj.RegisteredAddress1;
				document.getElementById("regAdd2").innerHTML = myObj.RegisteredAddress2;
				document.getElementById("PAN1").innerHTML = myObj.PAN1;
				document.getElementById("PAN2").innerHTML = myObj.PAN2;
				document.getElementById("PAN3").innerHTML = myObj.PAN3;
				document.getElementById("PAN4").innerHTML = myObj.PAN4;
				document.getElementById("PAN5").innerHTML = myObj.PAN5;
				document.getElementById("DName1").innerHTML = myObj.DirectorName1;
				document.getElementById("DName2").innerHTML = myObj.DirectorName2;
				document.getElementById("DName3").innerHTML = myObj.DirectorName3;
				document.getElementById("DName4").innerHTML = myObj.DirectorName4;
				document.getElementById("DName5").innerHTML = myObj.DirectorName5;
				$("#idValue").val(id);

        }
		});
		$("#clientData").modal("show");

}
function DeleteUser(deleteid){

	var conf = confirm("are u sure");
	if(conf == true) {
	$.ajax({
		url:"getData.php",
		type:'POST',
		data: {  deleteid : deleteid},

		success:function(data, status){
			readRecords();
		}
	});
	}
}



</script>
