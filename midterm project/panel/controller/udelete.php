<?php 
	session_start();
	
	if(isset($_REQUEST['delete'])){
		
		$username = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$address = $_REQUEST['address'];
		$dob = $_REQUEST['dob'];
		$number = $_REQUEST['number'];
		$gender = $_REQUEST['gender'];
		$id = $_REQUEST['id'];

		if($username != null && $password != null && $email != null && $number !== null && $gender !== null && $address != null && $dob != null){
			
			$file = fopen('../../controller/user.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $id){
					$updatedContent .= $line;
				}
				
			}

			$file = fopen('../../controller/user.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../inc/userlist.php?True');

		}else{
			echo "null submission";
		}
	}else header('location: ../inc/userlist.php?False');

?>