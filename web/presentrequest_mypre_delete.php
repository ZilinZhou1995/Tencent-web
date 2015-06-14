<?php
	require_once('sessionstart.php'); 
	if (isset($_SESSION['name'])) {
		$presentrequestid = $_GET['presentrequestid'];
		require_once('conn.php');
		$queryactivity = "SELECT * FROM presentrequest WHERE presentrequestid = $presentrequestid";
		$data = mysqli_query($dbc,$queryactivity);
		if ($row = mysqli_fetch_array($data)) {
			$id = $row['actid'];
			$querydelete = "DELETE FROM presentrequest WHERE presentrequestid = $presentrequestid";
			mysqli_query($dbc,$querydelete);
			mysqli_close($dbc);
			header("refresh:0;url=presentrequest_mypre.php");
		}
	}
	else
	{
		header("refresh:0;url=index.php");//跳转页面，注意路径hahahha
	}
 ?>