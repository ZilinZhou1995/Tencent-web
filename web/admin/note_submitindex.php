<!DOCTYPE html>
<html>
<head>
	<title>approve activity</title>
</head>
<body>
	<h2>确认提交首页</h2>

	<?php 
		require_once('appvars.php');
		if (isset($_GET['noteid']) && isset($_GET['notedate']) && isset($_GET['noteheader']) && isset($_GET['notecreater']) && isset($_GET['notecontent']) ) {
			$id = $_GET['noteid'];
			$header = $_GET['noteheader'];
			$date = $_GET['notedate'];
			$creater = $_GET['notecreater'];	
			//$pic = $_GET['actpic'];
			$content = $_GET['notecontent'];
			$index = $_GET['noteindex'];
		}
		else if (isset($_POST['noteid']) && isset($_POST['notedate']) && isset($_POST['noteheader']) && isset($_POST['notecreater']) && isset($_POST['notecontent'])) {
			$id = $_POST['noteid'];
			$header = $_POST['noteheader'];
			$date = $_POST['notedate'];
			$creater = $_POST['notecreater'];
			//$pic = $_POST['pic'];
			$content = $_POST['notecontent'];
			$index = $_POST['noteindex'];
		}

		else{
			echo '<p calss="error">没有选中的公告来进行操作，请重新选择</p>';
		}

		if (isset($_POST['submit'])) {
			if ($_POST['confirm'] == 'Yes') {
				require_once('conn.php');
				if ($index == 0) {
					$query = "UPDATE note SET noteindex = 1 WHERE noteid = $id";
				}
				elseif ($index == 1) {
					$query = "UPDATE note SET noteindex = 0 WHERE noteid = $id";
				}
  				
  				mysqli_query($dbc,$query);
  				mysqli_close($dbc);

  				echo '<p>' . $id .'号公告添加到首页</p>';
			}
		}
		else if (isset($id) && isset($header) && isset($date) && isset($creater) && isset($content)) {
			echo '<p>确认审核通过以下公告</p>';
			echo '<p><strong>公告标题:</strong>' . $header . '<br/><strong>公告日期:</strong>' . $date . '<br/><strong>公告创建人:</strong>' . $creater . '<br/><strong>公告内容：</strong>' . $content . '</p>';
			echo '<form method = "post" action = "note_submitindex.php">';
			echo '<input type = "radio" name = "confirm" value = "Yes" /> Yes';
			echo '<input type = "radio" name = "confirm" value = "No" checked = "checked"/ > No';
			echo '<input type="submit" value="提交" name="submit" />';
			echo '<input type = "hidden" name = "noteid" value="' . $id . '"/>';
			echo '<input type = "hidden" name = "noteheader" value="' . $header . '"/>';
			echo '<input type = "hidden" name = "notecreater" value="' . $creater . '"/>';
			echo '<input type = "hidden" name = "notedate" value="' . $date . '"/>';
			echo '<input type = "hidden" name = "notecontent" value="' . $content . '"/>';
			echo '<input type="hidden" name = "noteindex" value = "' . $index . '"/>';
		//	echo '<input type = "hidden name = "pic" value="' . $pic . '"/>';
			echo '</form>';
		}
		echo '<p><a href = "notecontrol.php">&lt;&lt; Back to Dashboard page</a></p>';
		//header("refresh:0;url =activitycontrol.php");
	 ?>


</body>
</html>