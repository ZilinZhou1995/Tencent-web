<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>先锋队注册</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signinthree.css" rel="stylesheet">

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

	<?php require_once('navbar.php') ?>    
    <div class="container" id="body-container">
    
    <div id="body-title">
    	<h3>成员入口</h3>
    	<h1>加入先锋队</h1>
    	<small>一句话说明加入先锋队是一种非常明智的选择爸爸爸爸爸爸啊爸爸</small>
    	
    </div>
    
    <div id="guide-bar">
    	<div class="btn-group btn-group-justified" role="group" aria-label="...">
    	  <div class="btn-group" role="group">
    	    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-user " aria-hidden="true"></span>第一步:基本信息</button>
    	  </div>
    	  <div class="btn-group" role="group">
    	    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-user " aria-hidden="true"></span>第二步：个人信息</button>
    	  </div>
    	  <div class="btn-group" role="group">
    	    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-user " aria-hidden="true"></span>第三部：添加头像</button>
    	  </div>
    	</div>
    </div>
    
    <div id="content">
    	<div class="row">
    	  <div class="col-md-8">
    	  <form action="signinfour" method="post">
    	  	<img src="image/logo2.jpg" alt="sampleforinput" />
  			 <input type="email" class="form-control" id="exampleinput" placeholder="Enter email">
  			 <label for="exampleInputFile">File input</label>
  		     <input type="file" id="exampleInputFile">
  		     <p class="help-block">Example block-level help text here.</p>
  		   	 
  		   	 <input type="hidden" class="form-control" name="invitedcode" placeholder="Text input" value="<?php echo ($_POST['invitedcode']) ?>">
  		   	 <input type="hidden" class="form-control" name="nickname" placeholder="Text input" value="<?php echo ($_POST['nickname']) ?>"> 	 
  		   	 <input type="hidden" class="form-control" name="account" placeholder="Text input" value="<?php echo($_POST['account']) ?>">   	  		 
  		   	 <input type="hidden" class="form-control" name="password" placeholder="Text input" value="<?php echo($_POST['password']) ?>">  	 
  		   	 <input type="hidden" class="form-control" name="club" placeholder="Text input" value="<?php echo($_POST['club']) ?>">
  		   	 <input type="hidden" class="form-control" name="district" placeholder="Text input" value="<?php echo($_POST['district']) ?>">  
  		   	 
  		   		 <input type="hidden" class="form-control" name="realname" placeholder="Text input" value="<?php echo ($_POST['realname']) ?>">
  		   	 	 <input type="hidden" class="form-control" name="age" placeholder="Text input" value="<?php echo ($_POST['age']) ?>"> 	 
  		   	 	 <input type="hidden" class="form-control" name="department" placeholder="Text input" value="<?php echo($_POST['department']) ?>">  
  		   	 	 <input type="hidden" class="form-control" name="level" placeholder="Text input" value="<?php echo($_POST['level']) ?>">  	 
  		   	 	 <input type="hidden" class="form-control" name="school" placeholder="Text input" value="<?php echo($_POST['school']) ?>">
  		     		   	 		   	 
  		   	 <p>点击注册后，必须遵守用户注册条件守则<a href="#">（用户条款守则）</a></p>
  	  		 	 
  		 
  		 <input class="btn btn-default pull-right" type="submit" id="content-button"value="下一步">
  		 </form>
    </div>
    	  <div class="col-md-4">
    	  		<div id="sidebar">
    			
    				
    				<div id="div_5">
    				<h4 id="p_3">爱上先锋队</h4><hr/>
    				<p padding="100px">理由一巴拉巴拉巴拉</p>
    				<p>理由二巴拉巴拉巴拉巴拉</p><br/>
    				
    				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>先锋队特色一<br />
    				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>先锋队特色二<br />
    				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>先锋队特色三<br />
    			
    				</div>
    				
    				
    			  </div><!--end div side bar-->
        </div><!--end div col-md-4-->
    	</div><!--end div row -->
    </div><!--end div content-->
    
        
            
    


</body>
</html>