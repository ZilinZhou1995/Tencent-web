<!DOCTYPE html>
<html>
<head>
	<title>approve activity</title>
</head>
<body>
	<h2>审核活动申请</h2>

	<?php 
		require_once('appvars.php');

		if (isset($_GET['actid']) && isset($_GET['actdate']) && isset($_GET['actname']) && isset($_GET['actclub']) && isset($_GET['actdes']) ) {
			$id = $_GET['actid'];
			$name = $_GET['actname'];
			$date = $_GET['actdate'];
			$club = $_GET['actclub'];	
			//$pic = $_GET['actpic'];
			$des = $_GET['actdes'];
		}
		else if (isset($_POST['id']) && isset($_POST['date']) && isset($_POST['name']) && isset($_POST['club']) && isset($_POST['des'])) {
			$id = $_POST['id'];
			$name = $_POST['name'];
			$date = $_POST['date'];
			$club = $_POST['club'];
			//$pic = $_POST['pic'];
			$des = $_POST['des'];
		}

		else{
			echo '<p calss="error">Sorry, no activity was secified for approval</p>';
		}

		if (isset($_POST['submit'])) {
			if ($_POST['confirm'] == 'Yes') {
				$mysql_servername = "127.0.0.1:3306"; //主机地址
   				$mysql_username = "root"; //数据库用户名
  				$mysql_password ="root"; //数据库密码
 				$mysql_database ="tencent"; //数据库
  				$dbc = mysqli_connect($mysql_servername, $mysql_username, $mysql_password, $mysql_database) or die("数据库访问错误");

  				$query = "UPDATE activity SET approved = 1 WHERE actid = $id";
  				mysqli_query($dbc,$query);
  				mysqli_close($dbc);

  				echo '<p>' . $club . '创建的' . $name . '活动' . '审核通过</p>';
			}
		}
		else if (isset($id) && isset($name) && isset($date) && isset($club) && isset($des)) {
			echo '<p>确认审核通过以下活动</p>';
			echo '<p><strong>活动名称:</strong>' . $name . '<br/><strong>活动日期:</strong>' . $date . '<br/><strong>活动创建人:</strong>' . $club . '<br/><strong>活动描述：</strong>' . $des . '</p>';
			echo '<form method = "post" action = "activity_approved">';
			echo '<input type = "radio" name = "confirm" value = "Yes" /> Yes';
			echo '<input type = "radio" name = "confirm" value = "No" checked = "checked"/ > No';
			echo '<input type="submit" value="提交" name="submit" />';
			echo '<input type = "hidden" name = "id" value="' . $id . '"/>';
			echo '<input type = "hidden" name = "name" value="' . $name . '"/>';
			echo '<input type = "hidden" name = "club" value="' . $club . '"/>';
			echo '<input type = "hidden" name = "date" value="' . $date . '"/>';
			echo '<input type = "hidden" name = "des" value="' . $des . '"/>';
		//	echo '<input type = "hidden name = "pic" value="' . $pic . '"/>';
			echo '</form>';
		}
		echo '<p><a href = "dashboard.php">&lt;&lt; Back to Dashboard page</a></p>';
	 ?>


</body>
</html>