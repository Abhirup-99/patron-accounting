<?php
session_start();
	require("common.php");
	$person=$_SESSION["id"];
	if(!isset($person)){
	header("location:indexCompany.php");}
	if(((int)$_SESSION['valid'])==1)
	{
	header("Location:sad.php");}
if(isset($_POST['readrecords'])){
echo'

		<div class="table-responsive">
		
        <table class="table table-striped table-bordered" id="thetable">
        <tbody>
		<tr><th>#</th>
		<th>Email</th>
		<th>Action</th></tr>';
		
		$a=1;
		$b=0;
		$query = "SELECT * FROM gstdata";
		$result = mysqli_query($con, $query)or die(mysqli_error($con));
		while($row = mysqli_fetch_assoc($result))
		{
			$b=$row['id'];
			echo"<tr><td>".$a."</td>";
			echo"<td>".$row['email']."</td>";
			echo "<td>";
            echo '<button onclick="ViewUser('.$row['id'].')" class="btn btn-success">View</button>';
            echo "</td></tr>";
			$a=$a+1;
		}
			echo"</tbody></table></div>";

}
if(isset($_POST['viewid']))
{
    $user_id = (int)$_POST['viewid'];
    $sql = "SELECT * FROM gstdata WHERE id = ".(int)$user_id;
    $result = mysqli_query($con, $sql);
 	mysqli_query($con, $sql) or die(mysqli_error($con));
	
	$row = mysqli_fetch_array($result);
    echo json_encode($row);
}

?>