<?php
	session_start();
	
	if(isset($_REQUEST['delete'])){
		
		$title = $_POST['title'];
		$category = $_POST['category'];
		$position = $_POST['position'];
		$vaccancies = $_POST['vaccancies'];
		$appdate = $_POST['appdate'];
		$address = $_POST['address'];
		$salery = $_POST['salery'];
		$responsibility = $_POST['responsibilities'];
		$requirements = $_POST['requirements'];
		$id = $_REQUEST['id'];
		if($$title == null || $category == null || $position == null ||$vaccancies== null || $appdate == null || $address == null || $salery == null || $responsibility == null || $requirements == null){
			
			$file = fopen('../../controller/jobdetails.txt', 'r');
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
			$file = fopen('../../controller/jobdetails.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../inc/joblist.php?True');
		}else{
			echo "null submission";
		}
	}else header('location: ../inc/joblist.php?False');
?>