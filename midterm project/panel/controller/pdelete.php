<?php 
	session_start();
	
	if(isset($_REQUEST['delete'])){
		
		$username = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['number'];
		$gender = $_REQUEST['gender'];
		$id = $_REQUEST['id'];

		if($username != null && $password != null && $email != null && $number !== null && $gender !== null){
			
			$file = fopen('../controller/adminuser.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $id){
					//$line = $id."|".$username."|".$password."|".$email."\r\n";
					$updatedContent .= $line;
				}
				//$updatedContent .= $line;
				
			}

			$file = fopen('../controller/adminuser.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../inc/panellist.php?True');

		}else{
			echo "null submission";
		}
	}else header('location: ../inc/panellist.php?False');

?>