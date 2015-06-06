<?php require_once('sessionstart.php'); ?>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1>welcome to the world!</h1>
	
	<?php
				require_once('appvars.php');
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
		 		
		 		$infopic = $_FILES['infopic']['name'];
		 		$infopic_type = $_FILES['infopic']['type'];
		 		$infopic_size = $_FILES['infopic']['size'];
		 		
		 		
		 		if ((($infopic_type == 'image/gif') || ($infopic_type == 'image/jpeg') || ($infopic_type == 'image/pjepg') || ($infopic_type == 'image/png'))
		 			&& ($infopic_size > 0) && ($infopic_size <= GW_MAXFILESIZE)) {
		 			if ($_FILES['infopic']['error'] == 0) {
		 					$target = GW_UPLOADPATH . $infopic;
		 					if (move_uploaded_file($_FILES['infopic']['tmp_name'],$target)) {
		 						require_once('conn.php');
		 						$query = "insert into users(priority,icode,nickname,account,password,club,district,realname,age,department,level,school,infopic) values (0,'$icode','$nickname','$account',sha1('$password'),'$club','$district','$realname','$age','$department','$level','$school','$infopic')";
		 						$result = mysqli_query($dbc,$query) or die('error connection_aborted');
		 						mysqli_close($dbc);
		 						echo($account);
		 					}
		 					else echo 'move error';
		 				}
		 				else echo 'infopic error';	
		 				
		 			}
		 		else
		 			echo 'formmat error';
		 
		 		
		 		
		 		
		 	?>

		
</body>
</html>