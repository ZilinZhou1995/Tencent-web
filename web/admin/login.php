<?php 
session_start();
error_reporting(0);

require_once('conn.php');

$name=$_POST['name'];
$passowrd=$_POST['password'];
$_SESSION['name']=$name;
$_SESSION['password']=$password;


if ($name && $passowrd){
 $sql = "SELECT * FROM admin WHERE account = '$name' and password='$passowrd'";
 $res = mysqli_query($dbc,$sql);
 $rows=mysqli_num_rows($res);
  if($rows){
   header("refresh:0;url=dashboard.php");//跳转页面，注意路径
   mysqli_close($dbc);
   exit;
 }
 echo "<script language=javascript>alert('用户名密码错误');history.back();</script>";
}else {
 echo "<script language=javascript>alert('用户名密码不能为空');history.back();</script>";
}

?>