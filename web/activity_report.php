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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  	<?php
  		require_once('appvars.php');

  		if (isset($_POST{'submit'})) {	
        $actname = $_POST['actname'];	
  
  		//	$actid = $_POST['actid']
  			$date = $_POST['date'];
  			$conclusion = $_POST['conclusion'];
  			$description = $_POST['description'];
  			$picture = $_FILES['picture']['name'];
  			$picture_type = $_FILES['picture']['type'];
  			$picture_size = $_FILES['picture']['size'];

  			if (!empty($date) && !empty($description) && !empty($picture)) {
  				if ((($picture_type == 'image/gif') || ($picture_type == 'image/jpeg') || ($picture_type == 'image/pjepg') || ($picture_type== 'image/png'))
  					&& ($picture_size > 0) && ($picture_size <= 32768000)) {
  					if ($_FILES['picture']['error'] == 0) {
  						$target = GW_UPLOADPATH . $picture;
  						if (move_uploaded_file($_FILES['picture']['tmp_name'],$target)) {
								require_once('conn.php');
                $queryId = "SELECT * FROM activity WHERE  actname = '$actname'";
                
                $dataId = mysqli_query($dbc,$queryId);
                
                if ($rowId = mysqli_fetch_array($dataId)) {
                  $actid = $rowId['actid'];
               //   echo $actid . '+++++=';
                }
                else{
                  echo 'actid error';
                }

                $queryUpdate = "UPDATE activity SET actreport = 2 WHERE actid = '$actid'";
                mysqli_query($dbc,$queryUpdate);                                              //update the actreprot and so we can not submit the reprot again

								$queryMaxId = "select max(report_id) as maxId from activity_report";
								$data = mysqli_query($dbc,$queryMaxId);
								if ($row = mysqli_fetch_array($data)) {
									$id = $row['maxId'] + 1;
								}								

  							$query = "INSERT INTO activity_report(report_id,actid,report_date,report_conclusion,report_description,report_actpicfile,approved) VALUES ($id,$actid,'$date','$conclusion','$description','$picture',0)";
  								mysqli_query($dbc,$query);
                  echo $query;
  							  	echo '<p>Thanks for adding your new high score! It will be reviewed and added to the high score list as soon as possible.</p>';
					            echo '<p><strong>Name:</strong> ' . $actname . '<br />';
					            echo '<strong>Date:</strong> ' . $date . '<br />';
					            echo '<img src="' . GW_UPLOADPATH . $picture . '" alt="image" width="50px"/></p>';
					            echo '<p><a href="activity_myact.php">&lt;&lt; Back to index</a></p>';

					            // Clear the score data to clear the form
					        //    $actname = "";
					            $actclub = "";
					            $date = "";
                      $conclusion = "";
					            $description = "";
					            $picture = "";

           					 mysqli_close($dbc);
                    // header("refresh:0;url=activity_myact.php");//跳转页面，注意路径
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
  				echo '<p class="error">Please enter all of the information to add your high score.</p>';
  			}
  		}

  		else{
  	  ?>


  	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php 
          require_once('conn.php');
          $account = $_SESSION['name'];
          $queryperson = "SELECT * FROM users WHERE account = '$account'";
          $dataperson = mysqli_query($dbc,$queryperson);
          if ($rowperson = mysqli_fetch_array($dataperson)) {
            $club = $rowperson['club'];  
            $queryInfo = "SELECT * FROM activity WHERE actclub = '$club'";
            $dataInfo = mysqli_query($dbc,$queryInfo);
              $i = 0;
              $count = 0;
              while (($rowInfo = mysqli_fetch_array($dataInfo)) || ($count == 1)) 
              {
                if (($i == 0) && ($rowInfo['actreport'] == 1)) {
                   echo '<h1>活动反馈</h1>';
                   echo '<div class="form-group">';
                   echo '<label for="inputName">活动名称</label>';
                   echo '<select class="form-control" name="actname" id="inputActName">';
                }
                if ($rowInfo['actreport'] == 1) {
                  echo '<option>' . $rowInfo['actname'] . '</option>'; 
                   $i++;
                }
                if (($i == 0) && ($rowInfo['actreport'] == 1)) {
                  echo '</select>';
                  echo '</div>';
                }
                $count++; 
              }  
              
            if ($i == 0) {
                echo '<div class="row">';
                echo '<div class="col-xs-4">';
                  echo '<a href = "activity_create.php"><image src = "image/plus1" alt="pic1" width="80%" class="pic1" /></a>';
                echo '</div>';
                echo '<div class="col-xs-8">';
                  echo '还没有新的活动正在进行中，赶快创建一个吧';
                echo '</div>';
                echo '</div>';
             }
          }
          ?>
        
      
        <?php if ($i > 0){ ?>
            <div class="form-group">
                      <input type="hidden">
            </div>
        		<div class="form-group">
        	   <label for="inputEndDate">活动实际结束时间</label>
        			<input type="text" name="date" class="form-control" id="inputActDate" placeholder="XXXX/XX/XX-XXXX/XX/XX" value="<?php if (!empty($date)) {
        				echo $date;
        			} ?>">
        		</div>
        		<div class="form-group">
        			<label for="inputConclusion">活动总结</label>
                      <input type="text-area" name="conclusion" class="form-control" id="inputConclusion" placeholder="输入活动名称" value="<?php if (!empty($conclusion)) {
                echo $conclusion;
              }; ?>">
        		</div>
        		<div class="form-group">
        			<label for="inputdescription">活动自我评价</label>
        			<input type="text-area" name="description" class="form-control" id="inputActdescription" placeholder="输入活动简介" value="<?php if (!empty($description)) {
        				echo $description;
        			} ?>">
        		</div>
        		<div class="form-group">
        			<label for="inputFile">活动图片</label>
        			<input type="file" name="picture" id="inputActPictureFile">
        			<p class="help-block">提交一张描述性的图片</p>
        		</div>
        		<input type="submit" class="btn btn-default" name="submit" value="提交">
       <?php } ?>
       </form>
  	<?php } ?>

  </body>

  </html>


