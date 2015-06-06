<?php
	$mysql_servername = "127.0.0.1:3306"; //主机地址
	$mysql_username = "root"; //数据库用户名
	$mysql_password ="root"; //数据库密码
	$mysql_database ="tencent"; //数据库
	$dbc = mysqli_connect($mysql_servername, $mysql_username, $mysql_password, $mysql_database) or die("数据库访问错误"); 
?>