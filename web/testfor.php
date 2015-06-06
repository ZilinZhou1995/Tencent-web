<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - High Scores</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars - High Scores</h2>
  <p>Welcome, Guitar Warrior, do you have what it takes to crack the high score list? If so, just <a href="addscore.php">add your own score</a>.</p>
  <hr />

<?php
  define('GW_UPLOADPATH', 'upload/');
  define('GW_MAXFILESIZE', 32768);   
  // Connect to the database 
    $mysql_servername = "127.0.0.1:3306"; //主机地址
    $mysql_username = "root"; //数据库用户名
    $mysql_password ="root"; //数据库密码
    $mysql_database ="tencent"; //数据库
    $dbc = mysqli_connect($mysql_servername, $mysql_username, $mysql_password, $mysql_database) or die("数据库访问错误");

  // Retrieve the score data from MySQL
  $query = "SELECT * FROM activity";
  $data = mysqli_query($dbc, $query);

  // Loop through the array of score data, formatting it as HTML 
  echo '<table>';
  $i = 0;
  while ($row = mysqli_fetch_array($data)) { 
    // Display the score data
    if ($i == 0) {
      echo '<tr><td colspan="2" class="topscoreheader">Top Score: ' . $row['actid'] . '</td></tr>';
    }
    echo '<tr><td class="scoreinfo">';
    echo '<span class="score">' . $row['actname'] . '</span><br />';
    echo '<strong>Name:</strong> ' . $row['actclub'] . '<br />';
    echo '<strong>Date:</strong> ' . $row['actdate'] . '</td>';
    if (is_file(GW_UPLOADPATH . $row['actpic']) && filesize(GW_UPLOADPATH . $row['actpic']) > 0) {
      echo '<td><img src="' . GW_UPLOADPATH . $row['actpic'] . '" alt="Score image" /></td></tr>';
    }
    else {
      echo '<td><img src="' . GW_UPLOADPATH . 'unverified.gif' . '" alt="Unverified score" /></td></tr>';
    }
    $i++;
  }
  echo '</table>';

  mysqli_close($dbc);
?>

</body> 
</html>
