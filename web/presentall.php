<?php require_once('sessionstart.php'); ?>
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

    <title>活动</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/activitydetail.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <!-- Just for debugging purposes. Don't presentually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript">
  /*  var showOrHide = function(){
        var divContent = document.getElementById(divContent);
        if (divContent.style.display='none') {
            divContent.style.display = 'block';
        };
        else{
            divContent.style.display = 'none';
        }
    }*/
    </script>
    <script type="text/javascript" src="js/activityall.js"></script>
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
            <h1>礼品</h1>
            <div class="row sidenav nav-button">
                    <button class="btn-act nav-button"><a href="activityall.php">活动</a></button>
                    <button class="btn-sup nav-button"><a href="presentall.php">礼品</a></button>
                    <button class="btn-pro nav-button"><a href="assessall.php">绩效</a></button>
            </div>
    </div>

    
    <div class="content container" >
    <?php 
    require_once('appvars.php');
    require_once('conn.php');
    $name = $_SESSION['name'];
    if (isset($name)) {
     echo '<script type="text/javascript">';
        echo 'window.location="presentdetail.php"';
     echo '</script>';
    }
    else{
                $presentQuery = "SELECT * FROM present";
                $presentData = mysqli_query($dbc,$presentQuery);
                $presentCount = 0;
                while (($presentRow = mysqli_fetch_array($presentData))) {
                    if ($presentCount <= 1) {
                         echo '<div class="row">';
                            echo '<div class="col-xs-7">';
                                $presentpic = $presentRow['presentpic'];
                                
                                echo '<img src="' . GW_UPLOADPATH . $presentpic . '"width="510" height="350" class="pic1" alt="pic1" />';
                            echo '</div>';
                            echo '<div class="col-xs-4">';
                                echo '<form method="get" presention="present_mypresent_delete.php">';
                                echo '<input name="presentid" type="hidden" value="' . $presentRow['presentid'] . '">';
                              //  echo '<button type="" value="删除" class="delete" href="present_mypresent_delete.php">删除</button>';
                                echo '</form>';
                                echo '<p>礼品编号:' . $presentRow['presentid'] . '</p>';
                                echo '<p>礼品名称:' . $presentRow['presentname'] . '</p>';
                                echo '<p>礼品描述:' . $presentRow['presentdescription'] . '</p>';
                        
                            echo '</div>';
                            echo '</div>';
                            $presentCount++;

                        if ($presentCount == 2) {
                       echo '<div id="divContent" style="display:none">';
                         }
                    }
                
                    
                    else{  
                            echo '<div class="row">';
                            echo '<div class="col-xs-7">';
                                $presentpic = $presentRow['presentpic'];
                                
                                echo '<img src="' . GW_UPLOADPATH . $presentpic . '"width="510" height="350" class="pic1" alt="pic1" />';
                            echo '</div>';
                            echo '<div class="col-xs-4">';
                                echo '<form method="get" presention="present_mypresent_delete.php">';
                                echo '<input name="presentid" type="hidden" value="' . $presentRow['presentid'] . '">';
                              //  echo '<button type="" value="删除" class="delete" href="present_mypresent_delete.php">删除</button>';
                                echo '</form>';
                                echo '<p>活动编号:' . $presentRow['presentid'] . '</p>';
                                echo '<p>礼品名称:' . $presentRow['presentname'] . '</p>';
                                echo '<p>礼品描述:' . $presentRow['presentdescription'] . '</p>';
                        
                            echo '</div>';
                            echo '</div>';
                            $presentCount++;


                    }
                }
                echo '</div>';
                echo '<button type="button" value="更多" id="more">更多</button>';
    }
    

       
     
     ?>
             

    <?php require_once('footer.php'); ?>
    


</body>
</html>