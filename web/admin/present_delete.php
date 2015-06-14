<!DOCTYPE html>
<html>
<head>

	<title>hello</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
	<script type="text/javascript">
	function load(){
		window.location = 'presentcontrol.php';
	}
	</script>
</head>
<body onload="load();">
	<?php
	require_once('sessionstart.php'); 
	if (isset($_SESSION['name'])) {
		require_once('conn.php');
		$presentid = $_GET['presentid'];
		echo $presentid;
		$querypresent = "SELECT * FROM present WHERE presentid = $presentid";
		$data = mysqli_query($dbc,$querypresent);
		if ($row = mysqli_fetch_array($data)) {
			$presentid = $row['presentid'];
			$querydelete = "DELETE FROM present WHERE presentid = $presentid";
			mysqli_query($dbc,$querydelete);
			mysqli_close($dbc);
			//header("refresh:0;url=notecontrol.php");

		}
	}
	else
	{
		//header("refresh:0;url=notecontrol.php");//跳转页面，注意路径hahahha
		echo 'wrong';

	}
 ?>
</body>
</html>


