<!DOCTYPE html>
<html>
<head>
	<title>approve activity</title>
</head>
<body>
	<h2>审核活动申请</h2>

	<?php 
		require_once('appvars.php');

		if (isset($_GET['$presentrequestamount']) && isset($_GET['presentrequestcreater']) && isset($_GET['presentrequestid']) && isset($_GET['presentrequestdate']) && isset($_GET['actid']) && isset($_GET['presentid']) && isset($_GET['presentrequestreason']) ) {
			$id = $_GET['presentrequestid'];
			$actid = $_GET['actid'];
			$presentid = $_GET['presentid'];
			$date = $_GET['presentrequestdate'];
			$creater = $_GET['presentrequestcreater'];	
			//$pic = $_GET['actpic'];
			$reason = $_GET['presentrequestreason'];
			$amount = $_GET['presentrequestamount'];
		}
		else if (isset($_POST['amount']) && isset($_POST['id']) && isset($_POST['actid']) && isset($_POST['presentid']) && isset($_POST['date']) && isset($_POST['creater']) && isset($_POST['reason'])) {
			$id = $_POST['id'];
			$actid = $_POST['actid'];
			$presentid = $_POST['presentid'];
  			$date = $_POST['date'];
			$creater = $_POST['creater'];
			//$pic = $_POST['pic'];
			$reason = $_POST['reason'];
			$amount = $_POST['amount'];
		}

		else{
			echo '<p calss="error">Sorry, no presentrequest was secified for approval</p>';
		}

		if (isset($_POST['submit'])) {
			if ($_POST['confirm'] == 'Yes') {
				require_once('conn.php');

  				$query = "UPDATE presentrequest SET approved = 1,presentrequestreport = 1 WHERE presentrequestid = $id";
  				mysqli_query($dbc,$query);
  				mysqli_close($dbc);

  				echo '<p>' . $creater . '创建的' . $actid . '活动' . '审核通过</p>';
			}
		}
		else if (isset($amount) && isset($id) && isset($actid) && isset($presentid) && isset($creater) && isset($reason) && isset($date)) {
			echo '<p>确认审核通过以下礼品申请</p>';
			echo '<p><strong>礼品申请号:</strong>' . $name . '<br/><strong>礼品申请提交日期:</strong>' . $date . '<br/><strong>礼品申请提交人:</strong>' . $club . '<br/><strong>礼品申请理由：</strong>' . $des . '<br/><strong>礼品名称:</strong>' . $presentid . '</br><strong>活动名称：</strong>' . $actid . '</br><strong>礼品数量</strong>' . $amount . '</p>';
			echo '<form method = "post" action = "presentrequest_approved">';
			echo '<input type = "radio" name = "confirm" value = "Yes" /> Yes';
			echo '<input type = "radio" name = "confirm" value = "No" checked = "checked"/ > No';
			echo '<input type="submit" value="提交" name="submit" />';
			echo '<input type = "hidden" name = "id" value="' . $id . '"/>';
			echo '<input type = "hidden" name = "actid" value="' . $actid . '"/>';
			echo '<input type = "hidden" name = "presentid" value="' . $presentid . '"/>';
			echo '<input type = "hidden" name = "date" value="' . $date . '"/>';
			echo '<input type = "hidden" name = "creater" value="' . $creater . '"/>';
			echo '<input type = "hidden" name = "reason" value="' . $reason . '"/>';
			echo '<input type = "hidden" name = "amount" value="' . $amount . '"/>';

		//	echo '<input type = "hidden name = "pic" value="' . $pic . '"/>';
			echo '</form>';
		}
		echo '<p><a href = "presentrequestcontrol.php">&lt;&lt; Back to Dashboard page</a></p>';
		//header("refresh:0;url =activitycontrol.php");
	 ?>


</body>
</html>