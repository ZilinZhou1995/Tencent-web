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
	<link rel="stylesheet" type="text/css" href="css/presentrequest.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="js/presentrequest_mypre.js"></script>
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
	//if ($person = mysqli_fetch_array($personaldata)) {
	//	$myclub = $person['club'];
		$presentrequestQuery = "SELECT * FROM presentrequest WHERE presentrequestcreater = '$name'";
		$presentrequestData = mysqli_query($dbc,$presentrequestQuery);
		$presentrequestCount = 0;
		//echo '<div id="show">';
		while (($presentrequestRow = mysqli_fetch_array($presentrequestData)) && ($presentrequestCount <= 1)) {
			echo '<a href="presentdetail.php" id ="jump"><div class="row">';
			echo '<div class="col-xs-4 show" id="showi">';
				$presentid = $presentrequestRow['presentid'];
				$querypresent1 = "SELECT * FROM present WHERE presentid = $presentid";
				$datapresent1 = mysqli_query($dbc,$querypresent1);
				if ($rowpresent1 = mysqli_fetch_array($datapresent1)) {
					$presentrequestpic = $rowpresent1['presentpic'];
				}
				
				echo '<img src="' . GW_UPLOADPATH . $presentrequestpic . '" class="pic1" width="80%" alt="pic1" />';
			echo '</div>';
			echo '<div class="col-xs-8">';
				echo '<form method="get" action="presentrequest_mypre_delete.php">';
				echo '<input name="presentrequestid" type="hidden" value="' . $presentrequestRow['presentrequestid'] . '">';
				echo '<button type="submit" value="删除" class="delete" href="presentrequest_mypre_delete.php">删除</button>';
				echo '</form>';
				echo '<div class="showpresent">';


                $presentid = $presentrequestRow['presentid'];
                $actid = $presentrequestRow['actid'];
                $queryactivity = "SELECT * FROM activity WHERE actid = $actid"; 
                $dataactivity = mysqli_query($dbc,$queryactivity);
                if ($rowactivity = mysqli_fetch_array($dataactivity)) {
                         $actname = $rowactivity['actname'];
                       }   
                $querypresent = "SELECT * FROM present WHERE presentid = $presentid"; 
                $datapresent = mysqli_query($dbc,$querypresent);
                if ($rowpresent = mysqli_fetch_array($datapresent)) {
                         $presentname = $rowpresent['presentname'];
                       }       


				echo '礼品名称:' . $presentname . '<br />';
				echo '活动名称:' . $actname. '<br />';
				echo '创建人:' . $presentrequestRow['presentrequestcreater'] . '<br />';
				echo '申请日期:' . $presentrequestRow['presentrequestdate'] . '<br />';
				echo '申请理由:' . $presentrequestRow['presentrequestreason'] . '<br />';
				echo '申请数量:' . $presentrequestRow['amount'] . '<br />';
				
				
				if ($activityRow['approved'] == 0) {
					echo '礼品申请状态: 审核中<br />';
				}
				elseif ($activityRow['approved'] == 1) {
					echo '礼品申请状态:审核通过<br />';
				}
				if ($activityRow['presentrequestreport'] == 0) {
					echo '礼品申请反馈：不可提交反馈';
				}
				elseif ($activityRow['presentrequestreport'] == 1) {
					echo '礼品申请反馈：可以提交反馈';
				}
				elseif ($activityRow['presentrequestreport'] == 2) {
					echo '礼品申请反馈：已提交反馈';
				}
				echo '</div>';
			echo '</div>';
			echo '</div></a>';
		$presentrequestCount++;
		}
	//	echo $presentrequestCount;
	//	echo !($presentrequestRow = mysqli_fetch_array($presentrequestData));

		//echo '</div>';
		if (!($presentrequestRow = mysqli_fetch_array($presentrequestData))) {
			echo '<div class="row">';
			echo '<div class="col-xs-4">';
				echo '<a href = "presentrequest_create.php"><image src = "image/plus1" alt="pic1" width="80%" class="pic1" /></a>';
			echo '</div>';
			echo '<div class="col-xs-8">';
			if ($presentrequestCount > 0) {
				echo "创建一个礼品申请吧";
			}
			else
				{echo '还没有新的礼品申请正在进行中，赶快创建一个吧';}
			echo '</div>';
			echo '</div>';
		}
	/*}
	else {
		echo 'no users club';
	}*/
	
?>
</body>
</html>
