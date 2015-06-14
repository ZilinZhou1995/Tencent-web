<?php require_once('sessionstart.php');?>
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	<h1>礼品创建</h1>

  	<?php
  		require_once('appvars.php');

  		if (isset($_POST['submit'])) {		
  			$presentname = $_POST['presentname'];
  			$date = $_POST['presentdate'];
  			$amount = $_POST['presentamount'];
        $creater = $_POST['presentcreater'];
  			$description = $_POST['presentdescription'];
  			$picture = $_FILES['picture']['name'];
  			$picture_type = $_FILES['picture']['type'];
  			$picture_size = $_FILES['picture']['size'];

  			if (!empty($description) && !empty($amount) && !empty($presentname) && !empty($date) && !empty($creater) && !empty($picture)) {
  				if ((($picture_type == 'image/gif') || ($picture_type == 'image/jpeg') || ($picture_type == 'image/pjepg') || ($picture_type== 'image/png'))
  					&& ($picture_size > 0) && ($picture_size <= 32768000)) {
  					if ($_FILES['picture']['error'] == 0) {
  						$target = GW_UPLOADPATH . $picture;
  						if (move_uploaded_file($_FILES['picture']['tmp_name'],$target)) {
								require_once('conn.php');
								$queryMaxId = "select max(presentid) as maxId from present";
								$data = mysqli_query($dbc,$queryMaxId);
								if ($row = mysqli_fetch_array($data)) {
									$id = $row['maxId'] + 1;
								}								

  							$query = "insert into present(presentid,presentname,presentdate,presentamount,presentcreater,presentdescription,presentpic) values ('$id','$presentname','$date','$amount','$creater','$description','$picture')";	
                  mysqli_query($dbc,$query);

  							  	echo '<p>创建了一个新礼品！</p>';
					            echo '<p><strong>礼品名称：</strong> ' . $presentname . '<br />';
					            echo '<strong>创建时间：</strong> ' . $date . '<br />';
                      echo '<strong>创建人：</strong>' . $creater . '<br/>';
                      echo '<strong>礼品描述：</strong>' . $description . '<br/>';
                      echo '<strong>礼品数量：</strong>' . $amount . '<br/>';
					            echo '<img src="' . GW_UPLOADPATH . $picture . '" alt="image" width="50px"/></p>';
					            echo '<p><a href="presentcontrol.php">&lt;&lt; Back to index</a></p>';

					            // Clear the score data to clear the form
					            $presentname = "";
					            $date = "";
					            $description = "";
					            $amount = "";
					            $picture = "";
                      $creater ="";

           					 mysqli_close($dbc);
                    // header("refresh:0;url=activity_myact.php");
  						}
  						else{
  							echo '<p class="error">Sorry, there was a problem uploading your screen shot image.</p>';
  						}
  					}
  				}
  				else{
  					echo '<p class="error">The screen shot must be a GIF, JPEG, or PNG image file no greater than ' . (GW_MAXFILESIZE / 1024) . ' KB in size.</p>';
  				}
  				
  			}
  			else{
  				'<p class="error">Please enter all of the information to add your present.</p>';
  			}
  		}

  		else{
  	  ?>


  	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  		
  		<div class="form-group">
  			<label for="inputName">礼品名称</label>
  			<input type="text" name="presentname" class="form-control" id="inputActName" placeholder="输入活动名称" value="<?php if (!empty($presentname)) {
  				echo $presentname;
  			}; ?>">
  		</div>
  		<div class="form-group">
        
  			<label for="inputDate">礼品创建时间</label>
  			<select class="form-control" name="presentdate" id="inputDate">
             <option><?php $time =time();echo date("y-m-d"); ?></option>
        </select>
  			
  		</div>
      <div class="form-group">
        <label for="inputAmount">礼品数量</label>
        <input type="text" name="presentamount" class="form-control" id="inputAmount" placeholder="输入礼品数量" value="<?php if (!(empty($presentamount))) {
          echo $presentamount;
        } ?>">
      </div>
  		<div class="form-group">
  			<label for="inputclub">礼品创建人</label>
        <select class="form-control" name="presentcreater" id="inputCreater">
          <option>
            <?php echo $_SESSION['name'] ?> 
          </option>
        </select>
  		</div>
  		<div class="form-group">
  			<label for="inputdescription">礼品描述</label>
  			<input type="text" name="presentdescription" class="form-control" id="inputPresentdescription" placeholder="输入礼品描述" value="<?php if (!empty($presentdescription)) {
  				echo $presentdescription;
  			} ?>">
  		</div>
  		<div class="form-group">
  			<label for="inputFile">礼品图片</label>
  			<input type="file" name="picture" id="inputActPicture">
  			<p class="help-block">提交一张描述性的图片</p>
  		</div>
  		<input type="submit" class="btn btn-default" name="submit" value="提交">
  	</form>
  	<?php } ?>

  </body>

  </html>


