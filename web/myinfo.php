<?php session_start(); ?>
<html>
<body>
	
	<?php 

	
	$mysql_servername = "127.0.0.1:3306"; //主机地址
	$mysql_username = "root"; //数据库用户名
	$mysql_password ="root"; //数据库密码
	$mysql_database ="testformyweb"; //数据库
	mysql_connect($mysql_servername , $mysql_username , $mysql_password) or die("数据库连接错误");
	mysql_select_db($mysql_database) or die("数据库访问错误"); 
	

		$name =$_SESSION['name'];
		$pwd = $_SESSION['password'];
		echo "<h4>welcome to the world,".$name.",good afternoon!</h4>";
	 ?>
</body>
</html>