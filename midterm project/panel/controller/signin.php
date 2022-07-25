<?php
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	if($email == null || $password == null){
		echo "email/password is blank";
	}else{
		$file = fopen('adminuser.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($email == trim($user[2]) && $password == trim($user[3])){
				$_SESSION['status'] = true;
				$_SESSION['name'] = $user[1];
				$_SESSION['id'] = $user[0];
				$_SESSION['controller'] = $user[6];
 				setcookie('status', 'true', time()+3600, '/');
				header('location: ../?true');
			}
		}
		echo "invalid user";
	}
?>