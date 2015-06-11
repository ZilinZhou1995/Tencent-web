<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
<?php 
   
    require_once('appvars.php');
    require_once('conn.php');
    $query = "SELECT * FROM note";
    if ($data  = mysqli_query($dbc, $query)) {
      echo '<div class="table-responsive">';
      echo '<table class="table table-striped">';
        echo  '<thead>';
          echo  '<tr>';
             echo'<th>公告号</th>';
             echo'<th>公告标题</th>';
             echo'<th>公告日期</th>';
             echo'<th>公告创建人</th>';
             echo'<th>公告内容</th>';
             echo'<th>是否删除</th>';
             echo'<th>是否首页</th>';
             echo '</tr>';
             echo '</thead>';
             echo '<tbody>';
             $i = 0;
             while ($row = mysqli_fetch_array($data)) {
               
                echo '<tr>';
                  echo '<td>'.$row['noteid'].'</td>';
                  echo '<td>'.$row['noteheader'].'</td>';
                  echo '<td>'.$row['notedate'].'</td>';
                  echo '<td>'.$row['notecreater'].'</td>';
                  echo '<td>'.$row['notecontent'].'</td>';
                  echo '<td><a href="note_delete.php?noteid='. $row['noteid'] . '">删除</a></td>';
                  if ($row['noteindex'] == 0) {
                    echo '<td><a href="note_submitindex.php?noteid=' . $row['noteid'] . '&amp;noteindex=' . $row['noteindex'] . '&amp;noteheader=' . $row['noteheader'] . '&amp;notedate=' . $row['notedate'] .'&amp;notecreater=' . $row['notecreater'] . '&amp;notecontent=' . $row['notecontent'] . '">未首页</a></td>';
                  }
                  else if($row['noteindex'] == 1){
                    echo '<td><a href="note_submitindex.php?noteid=' . $row['noteid'] . '&amp;noteindex=' . $row['noteindex'] . '&amp;noteheader=' . $row['noteheader'] . '&amp;notedate=' . $row['notedate'] .'&amp;notecreater=' . $row['notecreater'] . '&amp;notecontent=' . $row['notecontent'] . '">已首页</a></td>';
                  }

                 

                echo '</tr>';
    
               $i++;
             } 
              echo'</tbody>';
            echo'</table>';
      echo'</div>';
      mysqli_close($dbc);
    }
    else
    {
            echo '<div class="table-responsive">';
      echo '<table class="table table-striped">';
        echo  '<thead>';
          echo  '<tr>';
             echo'<th>公告号</th>';
             echo'<th>公告标题</th>';
             echo'<th>公告日期</th>';
             echo'<th>公告创建人</th>';
             echo'<th>公告内容</th>';
             echo'<th><a href="note_delete.php?noteid=' . $row['noteid'] . '">是否删除</a></th>';
             echo'<th>是否首页</th>';
             echo '</tr>';
             echo '</thead>';
             echo '<tbody>';
           
              echo'</tbody>';
            echo'</table>'; 
            echo '暂无公告，赶快创建一个吧';
      echo'</div>';
      mysqli_close($dbc);
    }
?>
</body>
  <script src="./Dashboard Template for Bootstrap_files/jquery.min.js"></script>
    <script src="./Dashboard Template for Bootstrap_files/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Dashboard Template for Bootstrap_files/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>