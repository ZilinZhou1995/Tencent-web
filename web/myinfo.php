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
		require_once('conn.php');
		require_once('navbar.php');
		$name =$_SESSION['name'];
		$pwd = $_SESSION['password'];
		echo '<br />';
		
	 ?>
	 <div class="container-fulid">
		 <div id="personalinfo" class="container">
		 	
		 	<div class="row">
		 			<div class="col-xs-1"></div>
		 			<div class="col-xs-4"><p class="info_title">个人信息</p></div>
		 			<div class="col-xs-6"></div>
		 			<div class="col-xs-1"></div>
		 	</div>
		 	
		 	
		 	<div class="row">
		 		<div class="col-xs-1"></div>
		 			<?php 
		 				require_once('appvars.php');
		 				require_once('conn.php');
		 				$name = $_SESSION['name'];
		 				$queryPersonalInfo = "SELECT * FROM users WHERE account = '$name'";		 
		 				$personaldata = mysqli_query($dbc,$queryPersonalInfo);
		 					if ($person = mysqli_fetch_array($personaldata)) {
		 						$infopic = $person['infopic'];
		 						echo '<div class="col-xs-4">';
		 						echo '<form enctype="multipart/form-data" method="get" action="myinfo_personmodify.php" target="personinfo">';
		 							echo '<img src="' . GW_UPLOADPATH . $infopic . '" alt="infopic" width="80%" />';
		 						echo '</div>';
		 						echo '<div class="col-xs-6">';
		 						echo '<div width=device>';
		 							echo '<input type="hidden" name="nickname" value="' . $person['nickname'].'">';
		 							echo '<input type="hidden" name="club" value="' . $person['club'] . '">';
		 							echo '<input type="hidden" name="school" value="' . $person['school'] . '">';
		 							echo '<div id="modify"><a href="myinfo_personmodify.php" target="personinfo"><input type="submit" value="修改"></a></div>';
		 							echo '<iframe height="40%" frameborder="0" src="myinfo_personinfo.php" name="personinfo"></iframe>';
		 						}	
		 						echo '</form>';
		 						echo '</div>';
		 						mysqli_close($dbc);
		 			 ?>
		 	</div>
		 						

		 		<div class="col-xs-1"></div>
		 	</div>
		 </div><!--end div personalinfo-->
		 
		 <div id="activity">
		 	<div class="row">
		 	<div class="col-xs-2 col-xs-offset-1">
		 		<image class="roundpic" src="image/roundblue" alt="pic1" width="10%" />
		 		<span class="act_title">活动</span>
		 	</div>
		 	</div>
		 	<div class="row">
		 	
				<div class="col-xs-2 sidenav">
		 		    <div class="row">
			 		<button class="btn-act"><a href="activity_myact.php" target="activitychange">我的活动</a></button>
			 		<button class="btn-sup"><a href="activity_create.php" target="activitychange">活动创建</a></button>
			 		<button class="btn-pro"><a href="activity_report.php" target="activitychange">活动反馈</a></button>
			 		</div>
		 		</div>		 		
		 		<div class="col-xs-9">
		 			<iframe height="90%" width="100%" scrolling="no" frameborder="0" src="activity_myact.php" name="activitychange"></iframe>		 			
		 		</div>
		 	</div>
		 </div><!--end div activity-->
		 
		 <div id="present">
		 	<div class="row">
		 	<div class="col-xs-2 col-xs-offset-1">
		 		<image class="roundpic" src="image/roundred" alt="pic1" width="10%" />
		 		<span class="act_title">礼品</span>
		 	</div>
		 	</div>
		 	<div class="row">

		 		<div class="col-xs-2 sidenav">
		 		    <div class="row">
			 		<button class="btn-act"><a href="presentrequest_mypre.php" target="presentrequestchange">我的申请</a></button>
			 		<button class="btn-sup"><a href="presentrequest_create.php" target="presentrequestchange">礼品申请</a></button>
			 		<button class="btn-pro"><a href="presentrequest_report.php" target="presentrequestchange">礼品反馈</a></button>
			 		</div>
		 		</div>
		 		
		 		<div class="col-xs-9">
			 			<iframe height="90%" width="100%" scrolling="no" frameborder="0" src="presentrequest_mypre.php" name="presentrequestchange"></iframe>
		 		</div>
		 	</div>
		 </div><!--present-->
		 	
		 <div id="club">
		 	<div class="row">
		 	<div class="col-xs-2 col-xs-offset-1">
		 		<image class="roundpic" src="image/roundgrey" alt="pic1" width="10%" />
		 		<span class="act_title">俱乐部</span>
		 	</div>
		 	</div>
		 	<div class="row">

		 		<div class="col-xs-2 sidenav">
		 		    <div class="row">
			 		<button class="btn-act"><a href="#">我的俱乐部</a></button>
			 		</div>
		 		</div>
		 		
		 		<div class="col-xs-9">
			 			<div class="row">
				 			<div class="col-xs-4">
				 				<img src="image/sample4.png" class="pic1" width="80%" alt="pic1" />
				 			</div>
				 			<div class="col-xs-8">
				 				俱乐部名称:<br />
				 				地区:<br />
				 				<br />
				 				近期活动:<br />
				 				1.xxxxxxxxxxxxx<br />
				 				2.xxxxxxxxxxxxx<br />
				 				3.xxxxxxxxxxxxx<br />
				 			</div>
			 			</div>
		 			
		 		</div>
		 	</div>
		 </div><!--end div club-->
		 
		 
		 
		 <div id="recent">


		 	<div class="row">
		 		<div class="col-xs-5">
		 			<h4>近期活动消息</h4>
		 			<div class="row">
		 			<div class="col-xs-7"><img src="image/sample3.png" width="100%" alt="rencentact" /></div>
		 			<div class="col-xs-5"><img src="image/plus2.png" width="100%" alt="add" /></div>	
		 			</div>
		 			
		 			<div class="row">
		 			<div class="col-xs-7">活动名称</div>
		 			<div class="col-xs-5">创建活动</div>
		 			</div>
		 		</div> 

		 		<div class="col-xs-5 col-xs-offset-1">
		 			<small class="pull-right">更多</small>
		 			<h4>公告</h4>

		 		<div class="row">
			 		<a href="#">
			 		<div class="col-xs-5 note-transform">
			 		      <h5>公告标题</h5>
			 		      <small>2015.4.3</small>
			 		      <p class="note-margin">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			 		      <p class="note-transform-p">详情→</p>
			 		 </div>
			 		 </a>
			 		 <a href="#">
			 		<div class="col-xs-5 col-xs-offset-1 note-transform">
			 		      <h5>公告标题</h5>
			 		      <small>2015.4.3</small>
			 		      <p class="note-margin">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			 		      <p class="note-transform-p">详情→</p>
			 		 </div>
			 		 </a>
			 	</div>

		 		</div><!--end div col-xs-5 col-xs-offset-1-->

		 		 </div><!--end div row-->
		 </div><!--end div recnet-->
	  </div><!--end div container-fulid-->
	 
	 
</body>
</html>