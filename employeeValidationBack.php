<?php
session_start();
include("common.php");
$person=$_SESSION["idMaster"];
if(!isset($person)){
header("location:indexCompany.php");}
if(isset($_POST['readrecords'])){
echo'

		<div class="table-responsive">
		
        <table class="table table-striped table-bordered" id="thetable">
        <tbody>
		<tr><th>#</th>
		<th>Name</th>
		<th>Action</th></tr>';
		
		$a=1;
		$b=1;
		$query = "SELECT * FROM users WHERE valid=".$b;
		$result = mysqli_query($con, $query)or die(mysqli_error($con));
		while($row = mysqli_fetch_assoc($result))
		{
			$b=$row['id'];
			echo"<tr><td>".$a."</td>";
			echo"<td>".$row['name']."</td>";
			echo "<td>";
            echo '<button onclick="AcceptUser('.$row['id'].')" class="btn btn-success">Accept</button>';
            echo '<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>';
            echo "</td></tr>";
			$a=$a+1;
		}
			echo"</tbody></table></div>";

}
if(isset($_POST['deleteid']))
{

	$user_id = (int)$_POST['deleteid']; 

	$deletequery = " delete from users where id =".$user_id;
	if (!$result = mysqli_query($con,$deletequery)) {
        exit(mysqli_error());

}

}
if(isset($_POST['acceptid']))
{

	$user_id = (int)$_POST['acceptid']; 

	$acceptquery = "UPDATE users SET valid=2 WHERE id=".$user_id;
	if (!$result = mysqli_query($con,$acceptquery)) {
        exit(mysqli_error());

}

}

?>