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
		echo "<h4>welcome to the world,".$name.",good afternoon!</h4>";	
	 ?>
	 <div class="container-fulid">
		 <div id="personalinfo" class="container">
		 	
		 	<div class="row">
		 			<div class="col-lg-1"></div>
		 			<div class="col-lg-4"><p>个人信息</p></div>
		 			<div class="col-lg-6"></div>
		 			<div class="col-lg-1"></div>
		 		</div>
		 	
		 	
		 	<div class="row">
		 		<div class="col-lg-1"></div>
		 		<div class="col-lg-4">
		 			
		 			<img src="image/logo2.jpg" alt="infopic" />
		 		</div>
		 		<div class="col-lg-6">
		 			<?php echo $name = $_SESSION['name']; ?>
		 			腾讯川大俱乐部<br />
		 			四川大学<br />
		 			成员<br />
		 			<div id="modify"><a href="#">修改</a></div>
		 		</div>
		 		<div class="col-lg-1"></div>
		 	</div>
		 </div><!--end div personalinfo-->
		 
		 <div id="activity">
		 	<div class="row">
		 	
		 		<div class="col-xs-6 sidenav">
		 		    <div class="row">
			 		<button class="btn-act"><a href="#">我的活动</a></button>
			 		<button class="btn-sup"><a href="activity_create.php">活动创建</a></button>
			 		<button class="btn-pro"><a href="#">活动反馈</a></button>
			 		</div>
		 		</div>
		 		
		 		<div class="col-xs-6">
		 		
			 			<div class="row">
				 			<div class="col-xs-4">
				 				<img src="" alt="" />
				 			</div>
				 			<div class="col-xs-8">
				 				活动名称<br />
				 				创建人<br />
				 				礼品名称<br />
				 				礼品状态<br />
				 			</div>
			 			</div>
		 			
		 				<div class="row">
		 					<div class="col-xs-4">
		 						<img src="" alt="" />
		 					</div>
		 					<div class="col-xs-8">
		 						活动名称<br />
		 						创建人<br />
		 						礼品名称<br />
		 						礼品状态<br />
		 					</div>
		 				</div>

		 		</div>
		 	</div>
		
		 	
		 </div><!--end div acitivity-->
		 
		 <div id="present"></div><!--present-->
		 
		 <div id="club"></div><!--end div club-->
		 
		 
		 
		 <div id="recent">
		 	<div class="row">
		 		<div class="col-xs-8">
		 			<div class="row">
		 			<div class="col-xs-7"><img src="image/logo2.jpg" alt="rencentact" /></div>
		 			<div class="col-xs-5"><img src="image/plus.jpg" alt="add" /></div>	
		 			</div>
		 			
		 			<div class="row">
		 			<div class="col-xs-7">活动名称</div>
		 			<div class="col-xs-5">创建活动</div>
		 			</div>
		 		</div> 
		 		<a href="#">
		 		<div class="col-xs-3 note-transform">
		 		     
		 		      <h4>公告标题</h4>
		 		      <small>2015.4.3</small>
		 		      <p class="note-margin">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		 		      <p class="note-transform-p">详情→</p>
		 		    </div>
		 		    </a>
		 		    
		 		    
		 		 <a href="#">
		 		<div class="col-xs-3 note-transform">
		 		      <h4>公告标题</h4>
		 		      <small>2015.4.3</small>
		 		      <p class="note-margin">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		 		      <p class="note-transform-p">详情→</p>
		 		 </div>
		 		 </a>
		 
		 		    </div><!--end div row-->
		 </div><!--end div recnet-->
	  </div><!--end div container-fulid-->
	 
	 
</body>
</html>