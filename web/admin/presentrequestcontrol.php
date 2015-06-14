<html lang="zh-CN"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">

    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">

    <title>管理员平台</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://v3.bootcss.com/examples/dashboard/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Dashboard Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <div class="row placeholders">
            <a href="presentrequestcontrol.php"target="show"><div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200"
               src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzBEOEZEQiIvPjxnPjx0ZXh0IHg9Ijc0LjA0Njg3NSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
              <h4>礼品申请信息</h4>
              <span class="text-muted">礼品申请信息总汇</span>
            </div></a>
            <a href="presentrequest_report.php" target="show"><div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9Ijc0LjA0Njg3NSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
              <h4>礼品申请反馈</h4>
              <span class="text-muted">礼品反馈信息总汇</span>
            </div></a>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzBEOEZEQiIvPjxnPjx0ZXh0IHg9Ijc0LjA0Njg3NSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojRkZGRkZGO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
              <h4>礼品分配状况控制</h4>
              <span class="text-muted">正在进行的礼品控制</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9Ijc0LjA0Njg3NSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
              <h4>结束的礼品分配</h4>
              <span class="text-muted">已经结束的礼品申请</span>
            </div>
          </div>

          <h2 class="sub-header">礼品信息控制</h2>
<?php 
   
    require_once('appvars.php');
    require_once('conn.php');
    $query = "SELECT * FROM presentrequest";
    $data  = mysqli_query($dbc, $query);


    
    echo '<div class="table-responsive">';
      echo '<table class="table table-striped">';
        echo  '<thead>';
          echo  '<tr>';
             echo'<th>礼品申请号</th>';
             echo'<th>对应礼品ID</th>';
             echo'<th>对应活动ID</th>';
             echo'<th>数量</th>';
             echo'<th>申请日期</th>';
             echo'<th>申请人</th>';
             echo '<th>申请理由</th>';
             echo'<th>审核</th>';
             echo'<th>反馈报告</th>';
             echo '</tr>';
             echo '</thead>';
             echo '<tbody>';
             $i = 0;
             while ($row = mysqli_fetch_array($data)) {

                echo '<tr>';
                  echo '<td>'.$row['presentrequestid'].'</td>';
                  echo '<td>'.$row['presentid'].'</td>';
                  echo '<td>'.$row['actid'].'</td>';
                  echo '<td>'.$row['presentrequestamount'].'</td>';
                  echo '<td>'.$row['presentrequestdate'].'</td>';
                  echo '<td>'.$row['presentrequestcreater'].'</td>';
                  echo '<td>'.$row['presentrequestreason'].'</td>';

                  if (($row['presentrequestreport'] == 0) && ($row['approved'] == 0)) {
                    echo '<td>不可提交</td>';
                  }
                  elseif (($row['approved'] == 1) || ($row['approved'] == 1)) {
                    echo '<td>可提交</td>';
                  }
                  elseif ($row['presentrequestreport'] == 2) {
                    echo '<td>已提交</td>';
                  }

                  if ($row['approved'] == 0) {
                    echo '<td><a href="presentrequest_approved.php?presentrequestid=' . $row['presentrequestid'] . '&amp;presentid=' . $row['presentid'] . '&amp;actid=' . $row['actid'] .'&amp;presentrequestcreater=' . $row['presentrequestcreater'] . '&amp;presentrequestreason=' . $row['presentrequestreason'] . '&amp;presentrequestamount=' . $row['presentrequestamount'] . '">等待审核通过</a></td>';
                  }
                  else if($row['approved'] == 1){
                    echo '<td>审核通过</td>';
                  }

                 

                echo '</tr>';
    
               $i++;
             } 
              echo'</tbody>';
            echo'</table>';
      echo'</div>';
      mysqli_close($dbc);
?>
</body>
  <script src="./Dashboard Template for Bootstrap_files/jquery.min.js"></script>
    <script src="./Dashboard Template for Bootstrap_files/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Dashboard Template for Bootstrap_files/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>