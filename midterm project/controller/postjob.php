<?php
	session_start();
	$title = $_POST['title'];
	$category = $_POST['category'];
	$position = $_POST['position'];
	$vaccancies = $_POST['vaccancies'];
	$appdate = $_POST['appdate'];
	$address = $_POST['address'];
	$salery = $_POST['salery'];
	$responsibility = $_POST['responsibilities'];
	$requirements = $_POST['requirements'];
	$id = rand(1,10);
	if($title == null || $category == null || $position == null ||$vaccancies== null || $appdate == null || $address == null || $salery == null || $responsibility == null || $requirements == null){
		header("Location: ../inc/profile.php?Details&are&blank");
	}else{
		$user = $id."|".$title."|".$category."|".$position."|".$vaccancies."|".$appdate."|".$address."|".$salery."|".$responsibility."|".$requirements."\r\n";
		$file = fopen('jobdetails.txt', 'a');
		fwrite($file, $user);
		header('location: ../inc/profile.php?true');
	}
?>