<?php require_once('sessionstart.php'); ?>
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
    <link href="css/activity_create.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript">
    //    function load(){
     //     window.location = "notecontrol.php";
      //  }
     //   setTimeout(load,1000);
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
   <div class="row placeholders">
            <a href="notecontrol.php"target="show"><div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200"
               src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzBEOEZEQiIvPjxnPjx0ZXh0IHg9Ijc0LjA0Njg3NSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
              <h4>公告总览</h4>
              <span class="text-muted">浏览所有的公告</span>
            </div></a>
            <a href="note_create.php" target="show"><div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9Ijc0LjA0Njg3NSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
              <h4>公告创建</h4>
              <span class="text-muted">创建一个公告</span>
            </div></a>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzBEOEZEQiIvPjxnPjx0ZXh0IHg9Ijc0LjA0Njg3NSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
              <h4>公告编辑</h4>
              <span class="text-muted">编辑一个公告</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9Ijc0LjA0Njg3NSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
              <h4>其他功能</h4>
              <span class="text-muted">正在建设中</span>
            </div>
          </div>

          <h2 class="sub-header">公告信息控制</h2>
  	<h1>公告创建</h1>

  	<?php
  		require_once('appvars.php');

  		if (isset($_POST['submit'])) {		
  			$noteheader = $_POST['noteheader'];
  			$notedate = $_POST['notedate'];
  			$notecreater = $_POST['notecreater'];
  			$notecontent = $_POST['notecontent'];
//  			$picture = $_FILES['picture']['name'];
//  			$picture_type = $_FILES['picture']['type'];
//  			$picture_size = $_FILES['picture']['size'];
    


  			if (!empty($noteheader) && !empty($notecreater) && !empty($notecontent) && !empty($notedate)) {
								require_once('conn.php');
								$queryMaxId = "select max(noteid) as maxId from note";
    
								$data = mysqli_query($dbc,$queryMaxId);
                $noteid = 0;
								if (($row = mysqli_fetch_array($data))) {
									$noteid = $row['maxId'] + 1;
								}								

  							$query = "insert into note(noteid,noteheader,notedate,notecreater,notecontent,noteindex) values ($noteid,'$noteheader','$notedate','$notecreater','$notecontent',0)";	
            
                  mysqli_query($dbc,$query);

  							  	echo '<p>创建了一个新的公告！！！！！</p>';
					            echo '<p><strong>标题:</strong> ' . $noteheader . '<br />';
					            echo '<strong>日期:</strong> ' . $notedate . '<br />';
				
					            echo '<p><a href="notecontrol.php" >&lt;&lt; Back to index</a></p>';

					            // Clear the score data to clear the form
					            $noteheader = "";
					            $notecreater = "";
					            $notedate = "";
					            $notecontent = "";

           					 mysqli_close($dbc);
                    // header("refresh:0;url=activity_myact.php");
  			}
  			else{
  				'<p class="error">Please enter all of the information to add your high score.</p>';
  			}
  		}

  		else{
  	  ?>


  	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  		
  		<div class="form-group">
  			<label for="inputNoteHeader">公告标题</label>
  			<input type="text" name="noteheader" class="form-control" id="inputActName" placeholder="输入公告标题" value="<?php if (!empty($noteheader)) {
  				echo $noteheader;
  			}; ?>">
  		</div>
  		<div class="form-group">
  			<label for="inputNoteDate">公告时间</label>
  			<input type="text" name="notedate" class="form-control" id="inputActDate" placeholder="XXXX/XX/XX-XXXX/XX/XX" value="<?php if (!empty($notedate)) {
  				echo $notedate;
  			} ?>">
  		</div>
  		<div class="form-group">
  			<label for="inputNoteCreater">公告创建人</label>
        <select class="form-control" name="notecreater" id="inputNoteCreater">
          <option><?php 
            $account = $_SESSION['name'];
            echo $account;
          ?></option>
        </select>
  		</div>
  		<div class="form-group">
  			<label for="inputNoteContent">公告内容</label>
  		  <textarea class="form-control" row="3" name="notecontent" id="notecontent" placeholder="输入公告内容" value="<?php if (!empty($notecontent)) {
          echo $notecontent;
        } ?>"></textarea>
      </div>
  		<input type="submit" class="btn btn-default" name="submit" value="提交">
  	</form>
  	<?php } ?>

  </body>

  </html>


