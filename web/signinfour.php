<?php require_once('sessionstart.php'); ?>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1>welcome to the world!</h1>
	
	<?php
		   		$icode = $_POST['invitedcode'];
		 		$nickname = $_POST['nickname'];
		 		$account = $_POST['account'];
		 		$password = $_POST['password'];
		 		$club = $_POST['club'];
		 		$district = $_POST['district'];
		 		//else thing
		 		
		 		$realname = $_POST['realname'];
		 		$age = $_POST['age'];
		 		$department = $_POST['department'];
		 		$level = $_POST['level'];
		 		$school = $_POST['school'];
		 		
		 		
		 
		 		$dbc = mysqli_connect('localhost:3306','root','root','tencent') or die('Error connection_aborted!');
		 
		 		$query = "insert into users(icode,nickname,account,password,club,district,realname,age,department,level,school) values ('$icode','$nickname','$account',sha1('$password'),'$club','$district','$realname','$age','$department','$level','$school')";
		 
		 		$result = mysqli_query($dbc,$query) or die('error connection_aborted');
		 
		 		mysqli_close($dbc);
		 		
		 		echo($account);
		 	?>

		
</body>
</html>