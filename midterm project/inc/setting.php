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
        <title>Admin | Profile | Panel | Moderator</title>
    </head>
    <body>
        <section style="width: 700px;margin: 50px 0px 0 400px;">
            <!-- navbar section -->
            <fieldset style="width: 700px;">
                <legend>Header</legend>
                <a href="profile.php" style="margin-right: 200px;">Your Choice</a>
                <a href="profile.php">Welcome, <?php echo $_SESSION['name']; ?></a>
                <a href="setting.php">Settings</a>
                <a href="../controller/logout.php">Sign out</a>
                
            </fieldset>
            <!-- About us section -->
            <fieldset style="width: 700px;">
                <legend><b>Update Account Details</b></legend>
                <section>
                    <?php
                    $id = $_SESSION['id'];
                    $file = fopen('../controller/user.txt', 'r');
                    while (!feof($file)) {
                    $user = fgets($file);
                    $userArray = explode('|', $user);
                    if($userArray[0] == $id){
                    break;
                    }
                    }
                    ?>
                    <form action="../controller/userupdate.php" method="post">
                        <input type="hidden" name="id" value="<?=$id?>"/>
                        <label for="Name">Name</label><br>
                        <input type="text" name="name" value="<?=$userArray[1]?>"><br>
                        <label for="Email">Email</label><br>
                        <input type="email" name="email" value="<?=$userArray[2]?>"><br>
                        <label for="Password">Password</label><br>
                        <input type="text" name="password" value="<?=$userArray[3]?>"><br>
                        <label for="Address">Address</label><br>
                        <input type="text" name="address" value="<?=$userArray[4]?>"><br>
                        <label for="DOB">Date of Birth</label><br>
                        <input type="date" name="dob" value="<?=$userArray[5]?>"><br>
                        <label for="Contact">Contact</label><br>
                        <input type="number" name="number" value="<?=$userArray[6]?>"><br>
                        <label for="gender">Gender</label><br>
                        <input type="text" name="gender" value="<?=$userArray[7]?>"><br><br>
                        <input type="submit" name="update" value="Update"><br><br>
                        
                    </form>
                </section>
            </fieldset>
        </section>
    </body>
</html>
<?php
}else{
header("location: inc/signin.html?invalid&user");
}
?>