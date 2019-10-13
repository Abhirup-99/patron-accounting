<?php
session_start();
include("common.php");
$person=$_SESSION["id"];
if(!isset($person)){
header("location:indexCompany.php");}
if(isset($_POST['readrecords'])){
echo'<body id="page-top>

		<div class="table-responsive">
		
        <table class="table table-striped table-bordered" id="thetable">
        <tbody>
		<tr><th>#</th>
		<th>Company Number</th>
		<th>Company Name</th>
		<th>Registration Number</th>
		<th>Action</th></tr>';
		
		$a=1;
		$b=0;
		$query = "SELECT * FROM register";
		$result = mysqli_query($con, $query)or die(mysqli_error($con));
		while($row = mysqli_fetch_assoc($result))
		{
			$b=$row['id'];
			echo"<tr><td>".$a."</td>";
			echo"<td>".$row['cin']."</td>";
			echo"<td>".$row['CompanyName']."</td>";
			echo"<td>".$row['RegistrationNumber']."</td>";
			echo "<td>";
            echo '<button onclick="ViewUser('.$row['id'].')" class="btn btn-primary">View</button>';
            echo '<a href="updateData.php?id='.$row['id'].'" class="btn btn-success">Edit</a>';
            echo '<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>';
            echo "</td></tr>";
			$a=$a+1;
		}
			echo"</tbody></table></div>";

}
if(isset($_POST['id']))
{
    $user_id = (int)$_POST['id'];
    $sql = "SELECT * FROM register WHERE id = ".(int)$user_id;
    $result = mysqli_query($con, $sql);
 	mysqli_query($con, $sql) or die(mysqli_error($con));
	
	$row = mysqli_fetch_array($result);
    echo json_encode($row);
}
if(isset($_POST['deleteid']))
{

	$user_id = (int)$_POST['deleteid']; 

	$deletequery = " delete from register where id =".$user_id;
	if (!$result = mysqli_query($con,$deletequery)) {
        exit(mysqli_error());

}

}

?>
