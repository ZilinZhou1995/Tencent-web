<?
error_reporting(0);
$mysql_servername = "127.0.0.1:3306"; //主机地址
$mysql_username = "root"; //数据库用户名
$mysql_password ="root"; //数据库密码
$mysql_database ="testformyweb"; //数据库
mysql_connect($mysql_servername , $mysql_username , $mysql_password);
mysql_select_db($mysql_database); 
$name=$_POST['name'];
$passowrd=$_POST['password'];

if ($name && $passowrd){
 $sql = "SELECT * FROM usersone WHERE name = '$name' and password='$passowrd'";
 $res = mysql_query($sql);
 $rows=mysql_num_rows($res);
  if($rows){
   header("refresh:0;url=a.htm");//跳转页面，注意路径
   exit;
 }
 echo "<script language=javascript>alert('用户名密码错误');history.back();</script>";
}else {
 echo "<script language=javascript>alert('用户名密码不能为空');history.back();</script>";
}

?>