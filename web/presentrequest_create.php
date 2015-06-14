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
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript"></script>
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

    <script type="text/javascript">
    
              function getAmount(){
                    console.log(123);
                     var presentid = document.getElementById("inputPresentId");
                     var index = presentid.selectedIndex;
                     var presentname = presentid.options[index].text;
                  
                     $.post("./presentrequest_create_getamount.php", {name:presentname}, function(res){
                      console.log(123);
                      console.log(res);
                      for (var i = 0;i < res;i++ ) {
                      $('#presentamount').append('<option value="' + i + '">' + i + '</option>');
                      } 
                    })
              }
    </script>
  </head>

  <body>
     <h1>礼品申请创建</h1>

    <?php
      require_once('appvars.php');

      if (isset($_POST['submit'])) {    
        $presentid = $_POST['presentid'];
        $actid = $_POST['actid'];
        $presentrequestdate = $_POST['presentrequestdate'];
        $amount = $_POST['amount'];
        $presentrequestreason =$_POST['presentrequestreason'];
        $presentrequestcreater = $_POST['presentrequestcreater'];

//        $picture = $_FILES['picture']['name'];
//        $picture_type = $_FILES['picture']['type'];
//        $picture_size = $_FILES['picture']['size'];
    


        if (!empty($presentid) && !empty($actid) && !empty($presentrequestdate) && !empty($presentrequestcreater) && !empty($presentrequestreason) && !empty($amount)) {
                require_once('conn.php');
                $queryMaxId = "select max(presentrequestid) as maxId from presentrequest";
    
                $data = mysqli_query($dbc,$queryMaxId);
                $id = 0;
                if (($row = mysqli_fetch_array($data))) {
                  $id = $row['maxId'] + 1;
                }               

                $query = "insert into presentrequest(presentrequestid,presentid,actid,presentrequestdate,presentrequestcreater,presentrequestreason,approved,presentrequestreport,amount) values ($id,'$presentid','$actid','$presentrequestdate','$presentrequestcreater','$presentrequestreason',0,0,'$amount')"; 
            
                  mysqli_query($dbc,$query);

                    echo '<p>创建了一个新的活动申请！！！！！</p>';
                      echo '<p><strong>活动申请号:</strong> ' . $id . '<br />';
                      echo '<strong>日期:</strong> ' . $presentrequestdate . '<br />';
        
                      echo '<p><a href="presentrequest_mypre.php" >&lt;&lt; Back to index</a></p>';

                      // Clear the score data to clear the form
                      $presentrequestid = "";
                      $presentid = "";
                      $actid = "";
                      $presentrequestdate = "";
                      $amount = "";
                      $presentrequestreason = "";
                      $presentrequestcreater = "";
                     mysqli_close($dbc);
                    // header("refresh:0;url=activity_myact.php");
        }
        else{
          '<p class="error">Please enter all of the information to add your present request.</p>';
        }
      }

      else{
      ?>


    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      
      <div class="form-group">
        <label for="inputNoteHeader">选择礼品</label>
        <script type="text/javascript">


        </script>
        <select onclick="getAmount();" class="form-control" id="inputPresentId" name="presentid">
          <?php 
          require_once('conn.php');

          $querypresent = "SELECT * FROM present";
          $datapresent = mysqli_query($dbc,$querypresent);
          while ($rowpresent = mysqli_fetch_array($datapresent)) {
            echo '<option>' . $rowpresent['presentname'] . '</option>';
          }
           ?>
        </select>
      </div>
      <div class="form-group">
        <label for="inputNoteDate">选择活动</label>
        <select class="form-control" id="inputActId" name="actid">
            <?php 
                $account = $_SESSION['name'];
                $queryInfo = "SELECT * FROM users WHERE account = '$account'";
                $dataInfo = mysqli_query($dbc,$queryInfo);
                if ($rowInfo = mysqli_fetch_array($dataInfo)) {
                  $club = $rowInfo['club'];
                  $queryactivity = "SELECT * FROM activity WHERE actclub = '$club'";
                  $dataactivity = mysqli_query($dbc,$queryactivity);
                  while ($rowactivity = mysqli_fetch_array($dataactivity)) {
                    echo '<option>' . $rowactivity['actname'] . '</option>';
                  }
                }
                else {
                  echo 'noclub';
                }
          
             ?>
                 
        </select> 
      </div>
      <div class="form-group">
        <label for="inputNoteCreater">申请时间</label>
        <input type="text" class="form-control" name="presentrequestdate" placeholder="输入希望使用的时间段" value="<?php if (!empty($presentrequestdate)) {
          echo $presentrequestdate;
        } ?>">
      </div>
      <div class="form-group">
        <label for="inputNoteContent">申请数量</label>
         <select class="form-control" name="amount" id="presentamount">
         </select>
        </div>
      
        <div class="form-group">
          <label>申请人</label>
          <select class="form-control" name="presentrequestcreater">
            <option><?php echo $_SESSION['name'] ?></option>
          </select>
         </div> 
      <div class="form-group">
        <label for="inputdescription">活动简介</label>
        <textarea type="text" name="presentrequestreason" class="form-control" id="inputActdescription" placeholder="输入活动简介" value="<?php if (!empty($presentrequestreason)) {
          echo $presentrequestreason;
        } ?>">
        </textarea>
      </div>
      <input type="submit" class="btn btn-default" name="submit" value="提交">
    </form>
    <?php } ?>

  </body>

  </html>


