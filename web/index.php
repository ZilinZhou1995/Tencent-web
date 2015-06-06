<?php require_once('navbar.php') ?>

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

    <title>xianfengdui</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
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

<!--BODY***********************-->
     
   

    <!-- Main jumbotron for a primary marketing message or call to action -->
  
    <div class="jumbotron" id="jumbot">
    	<div id="jumcontent">
    	<h3>腾讯先锋队</h3>
        <p class="content-normal">先锋，是一种姿态拒绝平庸不明距离先锋是一泓阿萨德咖啡机撒旦立刻叫阿爽好噶设立科技噶双打冠军阿萨德撒旦了卡速度哈快来嘎说活着就是为了改变世界</p>
    	</div><!--end div jum content-->
        <div id="jumbutton">
        <?php 
        	if (isset($_SESSION['name'])) {
        	
        } 
        	else {
        		?>
        	<form action="login.php" method="post">
            	<div class="form-group">
                	<label for="inputname">用户名</label>
                    <input type="text" class="form-control" id="inputaccount" name="name">
                
                
					<label for="inputpwd">密码</label>
                    <input type="password" class="form-control" id="inputpwd" name="password">
               	</div>
                <button type="submit" class="btn" id="inputlogin">登录</button>
            </form>
            <?php } ?>
        </div><!--end div jumbutton-->
    </div>
		
  <div class="container-fluid center-block"" id="show" >
    
  <div class="container  id="show-content">
  <div class="note-margin">
  <h2 class="jum-header-color text-none">展示 <small class="pull-right">更多</small></h2>
  </div>
	<br>
    <div class="row info-show-div" >
      <div class="col-md-6">
         <div class="col-sm-12 background1" >
			<a href="#"><div class="transbox">
				<p>
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
				</p>
			</div></a>
		</div>
          <div class="col-sm-12">
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
          </div>
      </div>
       <div class="col-md-6">
        <div class="col-sm-12 background2" >
			<a href="#"><div class="transbox">
				<p>
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
				</p>
			</div></a>
		</div>
            <br>
          <div class="col-sm-12">
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
          </div>
      </div>
    </div>
    <br>
     <div class="row">
      <div class="col-md-6">
       <div class="col-sm-12 background3" >
			<a href="#"><div class="transbox">
				<p>
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
				</p>
			</div></a>
		</div>
          <div class="col-sm-12">
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
          </div>
      </div>
       <div class="col-md-6">
         <div class="col-sm-12 background4" >
			<a href="#"><div class="transbox">
				<p>
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
                    This is some text that is placed in the transparent box.
				</p>
			</div></a>
		</div>
          <div class="col-sm-12">
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
          </div>
      </div>
    </div>    
  </div>
</div>
    
    
    
    <br>
    <div class="container-fluid set-bg" id="note">
  	<div class="container">
        <h2 class="jum-header-color note-padding">公告<small class="pull-right jum-header-color">更多</small></h2>
    
 	
      <div class="row ">
        <a href="#">
        <div class="col-lg-3 note-transform">
         
          <h4>公告标题</h4>
          <small>2015.4.3</small>
          <p class="note-margin">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p class="note-transform-p">详情→</p>
        </div>
        </a>
         
        <a href="#">
        <div class="col-lg-3 note-transform" >
          <h4>公告标题</h4>
          <small>2015.4.3</small>
          <p class="note-margin">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p class="note-transform-p">详情→</p>
          
          <br>
        </div>
        </a>
        <a href="#">
	<div class="col-lg-3 note-transform">
          <h4>公告标题</h4>
          <small>2015.4.3</small>
          <p class="note-margin">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p class="note-transform-p">详情→</p>
          
          
        </div>
        </a>
        <a href="#">
	<div class="col-lg-3 note-transform">
          <h4>公告标题</h4>
          <small>2015.4.3</small>
          <p class="note-margin">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p class="note-transform-p">详情→</p>
          
          
        </div>
        </a>
      </div><!--end div container-->

        
      </div>
      	<div class="row text-center">
            <div class="col-lg-4" id="activity">
            活动
            <p class="project-content">活动的申请与反馈
            </div>
            <div class="col-lg-4" id="print">
            礼品
            <p class="project-content">礼品的申请和使用反馈</p>
            </div>
            <div class="col-lg-4" id="grade">
            物料
            <P class="project-content">活动的完成情况</P>
            </div>
     </div>
   </div> <!-- /container -->
   
   
    <footer>
        <div class="container">
          <div class="row">
              <div class="col-sm-3">
                <h6>/了解先锋队
                <br>
                /申请加入先锋队 </h6>
                </div><!--end col-sm-2-->
                
                <div class="col-sm-3">
                  <h6>/站点统计</h6>
                  <h6>/社区运营</h6>
                </div><!--end col-sm-4-->
                
                <div class="col-sm-3">
                  <h6>/帮助我们提升</h6>
                    <ul class="list-unstyled">
                      <li><a href="#">腾讯官方网站</a></li>
                        <li><a href="#">Github项目网址</a></li>
                        <li><a href="#">腾讯先锋队官方网站</a></li>
                        <li><a href="/admin/adminlogin.html">先锋队管理后台登录</a></li>
                    </ul>
                </div><!--end col-sm-2-->
                
                  <div class="col-sm-3">
                  <h6>关注我们</h6>
                    <ul class="list-unstyled">
                      <li><a href="#">Twitter</a></li>
                        <li><a href="#">Wechat</a></li>
                        <li><a href="#">Github</a></li>
                    </ul>
                </div><!--end col-sm-2-->
            </div><!--end row-->
            <div id="footer-contact">
            +028 (0)  123456
            <br>xianfengdui@work.com
            </div>
            <div id="footer-logo">
            <img src="image/logo.jpg" alt="" width="100"><img src="image/logo2.jpg" alt="" width="50">
            <img src="image/ewm.jpg" alt="" class="pull-right" width="70">
            </div>
       
        </div><!--end container-->
        
      </footer>

  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
