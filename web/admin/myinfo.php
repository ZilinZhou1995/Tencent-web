<html>
<body>
	<?php session_start();
		
		require_once('conn.php');
			
		$name =$_POST['name'];
		$pwd = $_POST['password'];
		echo("welcome to the world".$name);
	 ?>
</body>
</html>