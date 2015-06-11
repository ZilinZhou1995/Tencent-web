<?php require_once('sessionstart.php'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="Ms.Brave" >
    <link rel="icon" href="../../favicon.ico">

    <title>活动</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/activitydetail.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
     <script type="text/javascript" src="js/activityall.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

	<!--************************** nav here ***********************-->
	
	 <?php 
	 	require_once('navbar.php');
	 ?>	 
	 
    <div class="header">
			<h1>活动</h1>
    		<div class="row sidenav nav-button">
    				
    				<button class="btn-act nav-button"><a href="#">活动</a></button>
    				<button class="btn-sup nav-button"><a href="#">物料</a></button>
    				<button class="btn-pro nav-button"><a href="#">绩效</a></button>
    		</div>
    </div>
    
    <div class="content container" >
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
        while ($activityRow = mysqli_fetch_array($activityData)) {
            if ($activityCount <= 1) {
                echo '<div class="row">';
                echo '<div class="col-xs-7">';
                    $actpic = $activityRow['actpic'];
                    
                    echo '<img src="' . GW_UPLOADPATH . $actpic . '"width="510" height="350" class="pic1" alt="pic1" />';
                echo '</div>';
                echo '<div class="col-xs-4">';
                    echo '<form method="get" action="activity_myact_delete.php">';
                    echo '<input name="actid" type="hidden" value="' . $activityRow['actid'] . '">';
                  //  echo '<button type="" value="删除" class="delete" href="activity_myact_delete.php">删除</button>';
                    echo '</form>';
                    echo '<p>活动名称:' . $activityRow['actname'] . '</p>';
                    echo '<p>创建人:' . $activityRow['actclub'] . '</p>';
                    echo '<p>活动描述:' . $activityRow['actdes'] . '</p>';
                    if ($activityRow['approved'] == 0) {
                        echo '活动状态: 审核中<br />';
                    }
                    elseif ($activityRow['approved'] == 1) {
                        echo '活动状态:审核通过<br />';
                    }
                echo '</div>';
                echo '</div>';
                if ($activityCount == 1) {
                    echo '<div id="divContent" style="display:none">';
                }
            }
            else{
                echo '<div class="row">';
                echo '<div class="col-xs-7">';
                    $actpic = $activityRow['actpic'];
                    
                    echo '<img src="' . GW_UPLOADPATH . $actpic . '"width="510" height="350" class="pic1" alt="pic1" />';
                echo '</div>';
                echo '<div class="col-xs-4">';
                    echo '<form method="get" action="activity_myact_delete.php">';
                    echo '<input name="actid" type="hidden" value="' . $activityRow['actid'] . '">';
                  //  echo '<button type="" value="删除" class="delete" href="activity_myact_delete.php">删除</button>';
                    echo '</form>';
                    echo '<p>活动名称:' . $activityRow['actname'] . '</p>';
                    echo '<p>创建人:' . $activityRow['actclub'] . '</p>';
                    echo '<p>活动描述:' . $activityRow['actdes'] . '</p>';
                    if ($activityRow['approved'] == 0) {
                        echo '活动状态: 审核中<br />';
                    }
                    elseif ($activityRow['approved'] == 1) {
                        echo '活动状态:审核通过<br />';
                    }
                echo '</div>';
                echo '</div>';

            }




          
        $activityCount++;
        }
        echo '</div>';//end div of the divConent as it will be used once to include all the activity
        if (!($activityRow = mysqli_fetch_array($activityData))) {
            echo '<div class="row">';
            echo '<div class="col-xs-7">';
                echo '<a href = "myinfo.php"><image src = "image/plus1" alt="pic1" width="510" height="350" class="pic1" /></a>';
            echo '</div>';
            echo '<div class="col-xs-4">';
            if ($activityCount > 0) {
                echo '创建一个活动吧！';
            }
            else 
               echo '还没有新的活动正在进行中，赶快创建一个吧';
            echo '</div>';
            echo '</div>';
        }
    }
    else {
        echo 'no users club';
    }
     ?>

     <button type="submit" value="更多" id="more">更多</button>

    <?php require_once('footer.php'); ?>
    


</body>
</html>