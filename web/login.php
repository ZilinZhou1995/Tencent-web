<?php 
require_once('sessionstart.php');
error_reporting(0);

require_once('conn.php');

$name=$_POST['name'];
$passowrd=$_POST['password'];

$_SESSION['name']=$name;
$_SESSION['password']=$password;

if ($name && $passowrd){
 $sql = "SELECT * FROM users WHERE account = '$name' and password=sha1('$passowrd')";
 $res = mysql_query($sql);
 $rows=mysql_num_rows($res);
  if($rows){
   header("refresh:0;url=myinfo.php");//跳转页面，注意路径
   exit;
 }
 echo "<script language=javascript>alert('用户名密码错误');history.back();</script>";
}else {
 echo "<script language=javascript>alert('用户名密码不能为空');history.back();</script>";
}
session_destroy();

?>