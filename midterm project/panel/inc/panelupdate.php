<?php
$id = $_GET['id'];
$file = fopen('../controller/adminuser.txt', 'r');
while (!feof($file)) {
$user = fgets($file);
$userArray = explode('|', $user);
if($userArray[0] == $id){
break;
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin |User |Update</title>
    </head>
    <body>
        <fieldset style="width: 400px; margin: 100px 0px 0 510px;">
            <legend><b>User Register Account</b></legend>
            <section>
                <form action="../controller/pup.php" method="post">
                    <input type="hidden" name="id" value="<?=$id?>"/>
                    <label for="Name">Name</label><br>
                    <input type="text" name="name" value="<?=$userArray[1]?>"><br>
                    <label for="Email">Email</label><br>
                    <input type="email" name="email" value="<?=$userArray[2]?>"><br>
                    <label for="Password">Password</label><br>
                    <input type="text" name="password" value="<?=$userArray[3]?>"><br>
                    <label for="Contact">Contact</label><br>
                    <input type="number" name="number" value="<?=$userArray[4]?>"><br>
                    <label for="gender">Gender</label><br>
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="male">Female</label><br><br>
                    <input type="reset">
                    <input type="submit" name="update" value="Update"><br><br>
                </form>
            </section>
        </fieldset>
    </body>
</html>