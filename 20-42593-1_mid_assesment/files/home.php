<?php
session_start();
// if(!isset($_COOKIE['status'])){
// header("location:login.html");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php 
    if($_SESSION['type']=="Admin"){
        ?>
           <center>
        <h2>Welcome <?php echo $_SESSION['name']; ?>!</h2>
            <a href="profile.php">Profile</a><br>
            <a href="changepass.php">Change Password</a><br>
            <a href="viewuser.php">View Users</a><br>
            <a href="../files/logout.php">Logout</a><br>
    </center>
        <?php
    }
    else{
        ?>
    <center>
        <h2>Welcome <?php echo $_SESSION['name']; ?>!</h2>
            <a href="profile.php">Profile</a><br>
            <a href="changepass.php">Change Password</a><br>
            <a href="../files/logout.php">Logout</a><br>
    </center>
        <?php 
    }
    ?>


</body>
</html>