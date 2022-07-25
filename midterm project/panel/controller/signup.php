<?php
	session_start();
	$username = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['number'];
	$gender = $_POST['gender'];
	$controller = $_POST['controller'];
	$id = rand(1,10);
	if($username == null || $password == null || $email == null || $contact == null || $gender == null && $controller == null){
		echo "Details are blank";
	}else{
		$user = $id."|".$username."|".$email."|".$password."|".$contact."|".$gender."|".$controller."\r\n";
		$file = fopen('adminuser.txt', 'a');
		fwrite($file, $user);
		header('location: ../inc/signup.html');
	}
?>