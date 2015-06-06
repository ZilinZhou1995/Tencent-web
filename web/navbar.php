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
          
            
            <button type="button" class="btn btn-link">首页</button>
            <button type="button" class="btn btn-link">公告</button>
            <button type="button" class="btn btn-link">物料</button>
            <button type="button" class="btn btn-link">礼品</button>
            <button type="button" class="btn btn-link">绩效</button>
            <button type="button" class="btn btn-link" id="navright-show">展示</button>
            <?php 
            if (isset($_SESSION['name'])) {
            	echo 'Welcome!'.$_SESSION['name'];
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


