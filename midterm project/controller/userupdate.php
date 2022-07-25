<?php
	session_start();
	
	if(isset($_REQUEST['update'])){
		
			$username = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$contact = $_POST['number'];
	$gender = $_POST['gender'];
		$id = $_REQUEST['id'];
		if( $username == null || $password == null || $email == null ||$address== null ||
	$dob == null || $contact == null || $gender == null){
			
			$file = fopen('../controller/user.txt', 'r');
			$updatedContent = "";
			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line = $id."|".$username."|".$email."|".$password."|".$address."|".$dob."|".$contact."|".$gender."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
				
			}
			$file = fopen('../controller/user.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../inc/setting.php?True');
			
		}else{
			header("Location: ../inc/setting.php?False");
		}
	}
?>