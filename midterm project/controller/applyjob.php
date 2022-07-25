<?php
	session_start();
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$nationality = $_POST['nationality'];
	$gender = $_POST['gender'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$education = $_POST['education'];
	$pyear = $_POST['pyear'];
	$application = $_POST['application'];
	$id = rand(1,10);
	if($name == null || $dob == null || $nationality == null ||$gender== null || $number == null || $email == null || $address == null || $education == null || $pyear == null || $application == null){
		header("Location: ../inc/apply.html?Details&are&blank");
	}else{
		$user = $id."|".$name."|".$dob."|".$nationality."|".$gender."|".$number."|".$email."|".$address."|".$education."|".$pyear."|".$application."\r\n";
		$file = fopen('jobseeker.txt', 'a');
		fwrite($file, $user);
		header('location: ../index.php?true');
	}
?>