<?php 
    require_once('appvars.php');  
    $mysql_servername = "127.0.0.1:3306"; //主机地址
    $mysql_username = "root"; //数据库用户名
    $mysql_password ="root"; //数据库密码
    $mysql_database ="tencent"; //数据库
    $dbc = mysqli_connect($mysql_servername, $mysql_username, $mysql_password, $mysql_database) or die("数据库访问错误");
    
    $query = "SELECT * FROM activity";
    $data  = mysqli_query($dbc, $query);


    
    echo '<div class="table-responsive">';
      echo '<table class="table table-striped">';
        echo  '<thead>';
          echo  '<tr>';
             echo'<th>礼品号</th>';
             echo'<th>礼品名称</th>';
             echo'<th>礼品日期</th>';
             echo'<th>礼品申请创建人</th>';
             echo'<th>礼品种类</th>';
             echo'<th>礼品数量</th>';
             echo'<th>审核<th>';
             echo '</tr>';
             echo '</thead>';
             echo '<tbody>';
             $i = 0;
             while ($row = mysqli_fetch_array($data)) {
               
                echo '<tr>';
                  echo '<td>'.$row['actid'].'</td>';
                  echo '<td>'.$row['actname'].'</td>';
                  echo '<td>'.$row['actdate'].'</td>';
                  echo '<td>'.$row['actclub'].'</td>';
                  echo '<td>'.$row['actdes'].'</td>';

                  if ($row['approved'] == 0) {
                    echo '<td><a href="activity_approved.php?actid=' . $row['actid'] . '&amp;actname=' . $row['actname'] . '&amp;actdate=' . $row['actdate'] .'&amp;actclub=' . $row['actclub'] . '&amp;actdes=' . $row['actdes'] . '">等待审核通过</a></td>';
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