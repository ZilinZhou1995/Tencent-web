<?php require_once('sessionstart.php') ?> 

<nav class="navbar navbar-fixed-top" id="navbarone">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
       
          <div><a class="navbar-brand" href="#"></a><img src="image/logo.png" class="img-responsive" alt="Responsive image" id="navbarimg"></div>
        </div><!--end navbar-header-->

        <form class="navbar-form navbar-left" role="search" id="navbarsearch">
         <div class="form-group">
            <input type="text" class="form-control hidden-xs" placeholder="Search">
         </div>
                  <span class="glyphicon glyphicon-search hidden-xs"></span>
        </form>
        
        <div id="navbar" class="navbar-collapse collapse">
        
          <div class="navbar-right" id="navright">
          
            
            <a type="button" class="btn btn-link" href="index.php">首页</a>
            <a type="button" class="btn btn-link" href="#note">公告</a>
            <a type="button" class="btn btn-link" href="activityall.php">活动</a>
            <a type="button" class="btn btn-link" href="presentall.php">礼品</a>
            <a type="button" class="btn btn-link" >绩效</a>
            <a type="button" class="btn btn-link" id="navright-show" href="personshow.php">展示</a>
           
            <?php 
            if (isset($_SESSION['name'])) {
            	
              $account = $_SESSION['name'];
              require_once('conn.php');
              require_once('appvars.php');
              $queryimg = "SELECT * FROM users WHERE account = '$account'";
              $dataimg = mysqli_query($dbc,$queryimg);
              if ($rowimg = mysqli_fetch_array($dataimg)) {
                echo  '<img src="' . GW_UPLOADPATH . $rowimg['infopic'] . '" height="30px" width="30px" class="img-circle" >';
              }
              echo 'Welcome!<a href="myinfo.php">'.$_SESSION['name'] . '</a>';
            ?>
           	
           <a href="logout.php">注销</a>
           <?php
            }
            else {
            ?>
            
            <button type="button" class="btn" data-toggle="modal" data-target="#mymodal" id="button_lognin">登录</button>
            <button type="button" class="btn" id="button_signin" ><a href="signin.php">注册</a></button>
            <?php } ?>
            
       
          </div><!--navbar-right-->

          </div><!--navbar-collapse-->

        </div><!--contain-->

    </nav>
    <!--modal here**********************************************-->
    
            <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">登录</h4>
                  </div>
                  <div class="modal-body">
                  
                     <form action="login.php" method="post" class="form-horizontal">
                      <label class="col-lg-2 control-label" for="inputname">用户名</label>
                        <div class="col-lg-10">
                          <input class="form-control" id="inpuotname" name="name" placeholder="name" type="text">
                        </div>
                     
                      <label class="col-lg-2 control-label" for="inputpasscode">密码</label>
                        <div class="col-lg-10">
                          <input class="form-control" id="inpuotpwd" name="password"placeholder="password" type="text">
                        </div>
                    
                        
                 
                  
                  <div class="modal-footer">
                  	<button type="button" class="btn btn-default data-dismissal">取消</button>
       				<button type="submit" class="btn btn-primary">登录</button>
                  </div>
                   </form>
                    </div><!--end modal-body-->
                   
                  </div>
              </div>
            </div>


