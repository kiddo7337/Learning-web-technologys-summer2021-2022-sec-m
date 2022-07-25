<?php
session_start();
if(isset($_COOKIE['status'])){
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin | UserList | Panel</title>
	</head>
	<body>
		<section style="width: 700px;margin: 50px 0px 0 400px;">
			<!-- navbar section -->
			<fieldset style="width: 700px;">
				<legend>User List </legend>
				<a href="" style="margin-right: 200px;">Your Choice</a>
				<a href="../">Welcome, <?php echo $_SESSION['name']; ?></a>
				<a href="panellist.php">Panel List</a>
				<a href="?">UserList</a>
				<a href="joblist.php">Job Posts</a>
				<a href="../controller/logout.php">Sign out</a>
				<a href="../inc/signup.html">New User</a>
			</fieldset>
			<!-- About us section -->
			<fieldset style="width: 700px;">
				<table border="1">
					<tr>
						<td>NAME</td>
						<td>EMAIL</td>
						<td>PASSWORD</td>
						<td>ADDRESS</td>
						<td>DATE</td>
						<td>CONTACT</td>
						<td>GENDER</td>
						<td>ACTION</td>
					</tr>
					<?php
					$file = fopen('../../controller/user.txt', 'r');
					while(!feof($file)){
						$user = fgets($file);
						$userArray = explode('|', $user);
					if( $userArray[0] != null && $userArray[1] != null &&$userArray[2] != null &&  $userArray[3] != null &&  $userArray[4] != null
					&&  $userArray[5] != null &&  $userArray[6] != null &&  $userArray[7] != null )
					{
					?>
					<tr>
						<td><?=$userArray[1]?></td>
						<td><?=$userArray[2]?></td>
						<td><?=$userArray[3]?></td>
						<td><?=$userArray[4]?></td>
						<td><?=$userArray[5]?></td>
						<td><?=$userArray[6]?></td>
						<td><?=$userArray[7]?></td>
						<td><a href="userupdate.php?id=<?php echo $userArray[0]; ?>">Edit</a>|<a href="userdelete.php?id=<?php echo $userArray[0] ?>">Delete</a></td>
					</tr>
					<?php
					}
						}
					?>
					
				</table>
			</fieldset>
		</section>
	</body>
</html>
<?php
}else{
header("location: inc/signin.html?invalid&user");
}
?>