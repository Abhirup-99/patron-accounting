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

    <a class="navbar-brand mr-1" href="masterLoginView.php">Patron Accounting LLP</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <a class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 navbar-brand mr-1" href="logout1.php">Logout</a>
      
    

   
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
          <li class="breadcrumb-item active">Client Overview</li>
        </ol>
		<div class="data">
		</div>

<!--                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        -->
									<!--
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";		</tr>-->

        
        

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
				url:"employeeValidationBack.php",
				type:"POST",
				data:{readrecords:readrecords},
				success:function(data,status){
				$('.data').html(data);
				},

			});
		}
function DeleteUser(deleteid){

	var conf = confirm("are u sure");
	if(conf == true) {
	$.ajax({
		url:"employeeValidationBack.php",
		type:'POST',
		data: {  deleteid : deleteid},

		success:function(data, status){
			readRecords();
		}
	});
	}
}
function AcceptUser(acceptid){

	var conf = confirm("are u sure");
	if(conf == true) {
	$.ajax({
		url:"employeeValidationBack.php",
		type:'POST',
		data: {  acceptid : acceptid},

		success:function(data, status){
			readRecords();
		}
	});
	}
}



</script>
