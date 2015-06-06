<?php
	require_once('sessionstart.php'); 
	if (isset($_SESSION['name'])) {
		$actid = $_GET['actid'];
		require_once('conn.php');
		$queryactivity = "SELECT * FROM activity WHERE actid = $actid";
		$data = mysqli_query($dbc,$queryactivity);
		if ($row = mysqli_fetch_array($data)) {
			$id = $row['actid'];
			$querydelete = "DELETE FROM activity WHERE actid = $id";
			mysqli_query($dbc,$querydelete);
			mysqli_close($dbc);
			header("refresh:0;url=activity_myact.php");
		}
	}
	else
	{
		header("refresh:0;url=index.php");//跳转页面，注意路径hahahha
	}
 ?>