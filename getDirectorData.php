<?php
include_once 'common.php'; 
 
if(isset($_POST["company_id"])){ 
    // Fetch state data based on the specific country
	$id=(int)$_POST['company_id'];
    $query = "SELECT * FROM register WHERE id = ".$id; 
    $result=mysqli_query($con,$query); 
    $row=mysqli_fetch_array($result);
	$a=$row["DirectorName1"];
	$b=$row['DirectorName2'];
	echo '<option value="'.$a.'">'.$a.'</option>';
	if((strcmp($row['DirectorName2'],''))){
	echo '<option value="'.$b.'">'.$b.'</option>';}
	if((strcmp($row['DirectorName3'],''))){
	echo '<option value="'.$row['DirectorName3'].'">'.$row['DirectorName3'].'</option>';}
	if((strcmp($row['DirectorName4'],''))){
	echo '<option value="'.$row['DirectorName4'].'">'.$row['DirectorName4'].'</option>';}
	if((strcmp($row['DirectorName5'],''))){
	echo '<option value="'.$row['DirectorName5'].'">'.$row['DirectorName5'].'</option>';}
}
?>