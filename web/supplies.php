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

    <title>物料</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/supplies.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
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

	<!--************************** nav here ***********************-->
	
	 <?php 
	 	require_once('navbar.php');
	 ?>	 
	 
    <div class="header">
			<h1>物料</h1>
    		<div class="row sidenav">
    				
    				<button class="btn-act"><a href="#">活动</a></button>
    				<button class="btn-sup"><a href="#">物料</a></button>
    				<button class="btn-pro"><a href="#">绩效</a></button>
    		</div>
    </div>
    
    <div class="content container" >    		
    	<div class="row">
    		<div class="col-md-8" style="width:560px;">
    				<img src="image/fwlanding-sustrans-travel-challenges-1100.png" alt="" width="510" height="350">
    		</div>
    		
    		<div class="col-md-4">
    						<p>活动名称：</p>
    						<p>俱乐部：</p>
    						<p>礼品状态：</p>
    						<p>礼品反馈：</p>
    		</div>
    	</div><!--end div row-->
    	
    	<div class="row">
    		<div class="col-md-8" style="padding-top:220px;width:560px;">
    		    	<img src="image/fwlanding-global-generation-1100.jpg" alt="" width="510" height="350">
    		</div>
    		
    		
    		<div class="col-md-4" style="padding-top:220px;">
    						<p>活动名称：</p>
    						<p>俱乐部：</p>
    						<p>礼品状态：</p>
    						<p>礼品反馈：</p>
    		</div>
       	</div><!--end div row-->
    
    	<div class="row">
    		<div class="col-md-8" style="padding-top:220px;width:560px;">
    		    	<img src="image/fwlanding-mavis-1100.jpg" alt="" width="510" height="350">
    		</div>   
    		<div class="col-md-4" style="padding-top:220px;">
    						<p>活动名称：</p>
    						<p>俱乐部：</p>
    						<p>礼品状态：</p>
    						<p>礼品反馈：</p>
    		</div>
        	</div><!--end div row-->
    
    		<button>更多</button>
    		
    </div>
    
        
    
    <div id="footer"></div>
    
    
    </div><!--end div container-->
    
    


</body>
</html>