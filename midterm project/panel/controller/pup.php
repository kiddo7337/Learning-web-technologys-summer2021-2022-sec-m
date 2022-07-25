<?php
	session_start();
	
	if(isset($_REQUEST['update'])){
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['number'];
		$gender = $_POST['gender'];
		$id = $_REQUEST['id'];
		if( $name != null || $password != null || $email != null || $contact != null || $gender != null){
			$file = fopen('adminuser.txt', 'r');
			$updatedContent = "";
			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line = $id."|".$name."|".$email."|".$password."|".$contact."|".$gender."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
			}
			$file = fopen('adminuser.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../inc/panellist.php?True');
			
		}else{
			header("Location: ../inc/panellist.php?False");
		}
	}
?>