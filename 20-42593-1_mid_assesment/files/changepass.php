<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <fieldset>
        <legend>Change Password</legend>
        <form action="changepassword.php" method="post">
            <label for="Cpass">Current Password</label><br>
            <input type="password" name="" value=""><br>
            <label for="newpass">New Password</label><br>
            <input type="password" name="password"><br>
            <label for="rnewpass">Retype New Password</label><br>
            <input type="password" name="rnpass"><br>
            <hr>
            <input type="submit" name="change" value="Change"> <a href="home.php">Home</a>
        </form>
    </fieldset>
</body>
</html>l