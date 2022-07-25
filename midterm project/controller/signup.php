<?php
	session_start();
	$username = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$contact = $_POST['number'];
	$gender = $_POST['gender'];
	$id = rand(1,10);
	if($username == null || $password == null || $email == null ||$address== null ||
	$dob == null || $contact == null || $gender == null){
		echo "Details are blank";
	}else{
		$user = $id."|".$username."|".$email."|".$password."|".$address."|".$dob."|".$contact."|".$gender."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		header('location: ../inc/signin.html');
	}
?>