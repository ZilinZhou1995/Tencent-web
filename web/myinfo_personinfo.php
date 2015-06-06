<?php 
require_once('sessionstart.php');
?>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>个人信息</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/myinfo.css" rel="stylesheet">
	<link rel="stylesheet" href="css/navbar.css" />
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
		$name = $_SESSION['name'];
		require_once('conn.php');
		$queryPersonalInfo = "SELECT * FROM users WHERE account = '$name'";		 
		$personaldata = mysqli_query($dbc,$queryPersonalInfo);
		if ($person = mysqli_fetch_array($personaldata)) {
			echo '<p class="personal_title">' . $person['nickname'] . '</p>'; 
			echo $person['club'] . '<br/>';
			echo $person['school'] . '<br/>';
			if ($person['priority'] == 0) {
				echo '成员</br>';
			}
			elseif ($person['priority'] == 1) {
				echo '副主席</br>';
			}
			else 
				echo '主席</br>';
		}
			
	 ?>
</body>
</html>