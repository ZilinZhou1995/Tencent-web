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
     <script type="text/javascript" src="js/presentall.js"></script>
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
			<h1>礼品</h1>
    		<div class="row sidenav nav-button">
    				
    				<button class="btn-act nav-button"><a href="activitydetail.php">活动</a></button>
    				<button class="btn-sup nav-button"><a href="presentdetail.php">礼品</a></button>
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
        $creater = $person['account'];
        $presentrequestQuery = "SELECT * FROM presentrequest WHERE presentrequestcreater = '$creater'";
     //   echo $presentrequestQuery;
        $presentrequestData = mysqli_query($dbc,$presentrequestQuery);
        $presentrequestCount = 0;
        while ($presentrequestRow = mysqli_fetch_array($presentrequestData)) {
            if ($presentrequestCount <= 1) {
                echo '<div class="row">';
                echo '<div class="col-xs-7">';
                    $presentpic = $presentRow['presentpic'];
                    

                $presentid = $presentrequestRow['presentid'];
                $querypresent1 = "SELECT * FROM present WHERE presentid = $presentid";
                $datapresent1 = mysqli_query($dbc,$querypresent1);
                if ($rowpresent1 = mysqli_fetch_array($datapresent1)) {
                    $presentpic = $rowpresent1['presentpic'];
                }


                    echo '<img src="' . GW_UPLOADPATH . $presentpic . '"width="510" height="350" class="pic1" alt="pic1" />';
                echo '</div>';
                echo '<div class="col-xs-4">';
                    echo '<form method="get" action="present_mypre_delete.php">';
                    echo '<input name="actid" type="hidden" value="' . $presentrequestRow['actid'] . '">';
                  //  echo '<button type="" value="删除" class="delete" href="present_myact_delete.php">删除</button>';
                    echo '</form>';

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
                echo '</div>';
                echo '</div>';
                if ($presentrequestCount == 1) {
                    echo '<div id="divContenti" style="display:none">';
                }
            }
            else{
               echo '<div class="row">';
                echo '<div class="col-xs-7">';
                    $presentpic = $presentRow['presentpic'];
                    

                $presentid = $presentrequestRow['presentid'];
                $querypresent1 = "SELECT * FROM present WHERE presentid = $presentid";
                $datapresent1 = mysqli_query($dbc,$querypresent1);
                if ($rowpresent1 = mysqli_fetch_array($datapresent1)) {
                    $presentpic = $rowpresent1['presentpic'];
                }


                    echo '<img src="' . GW_UPLOADPATH . $presentpic . '"width="510" height="350" class="pic1" alt="pic1" />';
                echo '</div>';
                echo '<div class="col-xs-4">';
                    echo '<form method="get" action="present_mypre_delete.php">';
                    echo '<input name="actid" type="hidden" value="' . $presentrequestRow['actid'] . '">';
                  //  echo '<button type="" value="删除" class="delete" href="present_myact_delete.php">删除</button>';
                    echo '</form>';

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
                echo '</div>';
                echo '</div>';

            }




          
        $presentrequestCount++;
        }
        echo '</div>';//end div of the divConent as it will be used once to include all the present

    }
    else {
        echo 'no users club';
    }
     ?>

     <button type="submit" value="更多" id="more">更多</button>

    <?php require_once('footer.php'); ?>
    


</body>
</html>