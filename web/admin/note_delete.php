<!DOCTYPE html>
<html>
<head>

	<title>hello</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
	<script type="text/javascript">
	function load(){
		window.location = 'notecontrol.php';
	}
	</script>
</head>
<body onload="load();">
	<?php
	require_once('sessionstart.php'); 
	if (isset($_SESSION['name'])) {
		require_once('conn.php');
		$noteid = $_GET['noteid'];
		echo $noteid;
		$querynote = "SELECT * FROM note WHERE noteid = $noteid";
		$data = mysqli_query($dbc,$querynote);
		if ($row = mysqli_fetch_array($data)) {
			$noteid = $row['noteid'];
			$querydelete = "DELETE FROM note WHERE noteid = $noteid";
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


