<?php 
	$present = $_POST['name'];
	require_once('conn.php');
	$query = "SELECT * FROM present WHERE presentname = '$present'";
	$data = mysqli_query($dbc,$query);
	if ($row = mysqli_fetch_array($data)) {
		echo  $row['presentamount'];
	}
	else echo '<opiton>none</option>';
 ?>