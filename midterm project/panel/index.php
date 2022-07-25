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
                <a href="?" style="margin-right: 200px;">Your Choice</a>
                <a href="?">Welcome, <?php echo $_SESSION['name']; ?></a>
                <a href="inc/panellist.php">PanelList</a>
                <a href="inc/userlist.php">UserList</a>
                <a href="inc/joblist.php">Job Posts</a>
                <a href="controller/logout.php">Sign out</a>
                <a href="inc/signup.html">New User</a>
            </fieldset>
            <!-- About us section -->
            <fieldset style="width: 700px;">
                <legend><b>Update Account Details</b></legend>
                <section>
                    <?php
                    $id = $_SESSION['id'];
                    $file = fopen('controller/adminuser.txt', 'r');
                    while (!feof($file)) {
                    $user = fgets($file);
                    $userArray = explode('|', $user);
                    if($userArray[0] == $id){
                    break;
                    }
                    }
                    ?>
                    <form action="controller/crud.php" method="post">
                        <input type="hidden" name="id" value="<?=$id?>"/>
                        <label for="Name">Name</label><br>
                        <input type="text" name="name" value="<?=$userArray[1]?>"><br>
                        <label for="Email">Email</label><br>
                        <input type="email" name="email" value="<?=$userArray[2]?>"><br>
                        <label for="Password">Password</label><br>
                        <input type="text" name="password" value="<?=$userArray[3]?>"><br>
                        <label for="Contact">Contact</label><br>
                        <input type="text" name="number" value="<?=$userArray[4]?>"><br>
                        <label for="gender">Gender</label><br>
                        <input type="text" name="gender" value="<?=$userArray[5]?>"><br><br>
                        <select name="controller" id="">
                            <option value="<?=$userArray[6]?>"><?=$userArray[6]?></option>
                            <option value="admin">Admin</option>
                            <option value="moderator">Moderator</option>
                        </select><br><br>
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