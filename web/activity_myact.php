<?php 
require_once('sessionstart.php');
?>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>个人信息</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/myinfo.css" rel="stylesheet">
	<link rel="stylesheet" href="css/navbar.css" />
	<link rel="stylesheet" href="css/activity_myact.css"/>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

<?php 
	require_once('appvars.php');
	require_once('conn.php');
	$name = $_SESSION['name'];
	$queryPersonalInfo = "SELECT * FROM users WHERE account = '$name'";		 
	$personaldata = mysqli_query($dbc,$queryPersonalInfo);
	if ($person = mysqli_fetch_array($personaldata)) {
		$myclub = $person['club'];
		$activityQuery = "SELECT * FROM activity WHERE actclub = '$myclub'";
		$activityData = mysqli_query($dbc,$activityQuery);
		$activityCount = 0;
		while (($activityRow = mysqli_fetch_array($activityData)) && ($activityCount <= 1)) {
			echo '<div class="row">';
			echo '<div class="col-xs-4">';
				$actpic = $activityRow['actpic'];
				
				echo '<img src="' . GW_UPLOADPATH . $actpic . '" class="pic1" width="80%" alt="pic1" />';
			echo '</div>';
			echo '<div class="col-xs-8">';
				echo '<form method="get" action="activity_myact_delete.php">';
				echo '<input name="actid" type="hidden" value="' . $activityRow['actid'] . '">';
				echo '<button type="submit" value="删除" class="delete" href="activity_myact_delete.php">删除</button>';
				echo '</form>';
				echo '活动名称:' . $activityRow['actname'] . '<br />';
				echo '创建人:' . $activityRow['actclub'] . '<br />';
				echo '活动描述:' . $activityRow['actdes'] . '<br />';
				if ($activityRow['approved'] == 0) {
					echo '活动状态: 审核中<br />';
				}
				elseif ($activityRow['approved'] == 1) {
					echo '活动状态:审核通过<br />';
				}
			echo '</div>';
			echo '</div>';
		$activityCount++;
		}
		if (!($activityRow = mysqli_fetch_array($activityData))) {
			echo '<div class="row">';
			echo '<div class="col-xs-4">';
				echo '<a href = "activity_create.php"><image src = "image/plus1" alt="pic1" width="80%" class="pic1" /></a>';
			echo '</div>';
			echo '<div class="col-xs-8">';
				echo '还没有新的活动正在进行中，赶快创建一个吧';
			echo '</div>';
			echo '</div>';
		}
	}
	else {
		echo 'no users club';
	}
	
?>
</body>
</html>
