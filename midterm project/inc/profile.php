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
        <title>Profile</title>
    </head>
    <body>
        <!-- navbar section -->
        <section style="width: 700px; margin: 50px 0px 0 400px;">
            <fieldset style="width: 700px;">
                <legend>Header</legend>
                <a href="?" style="margin-right: 300px;">Your Choice</a>
                <a href="?"><b>Welcome <?php echo $_SESSION['name']; ?></b></a>
                <a href="setting.php">Settings</a>
                <a href="../controller/logout.php">Sign out</a>
            </fieldset>
            <fieldset style="width: 700px;">
                <legend><b>Post a Job</b></legend>
                <form action="../controller/postjob.php" method="post">
                    <fieldset>
                        <legend><b>Basic Information</b></legend>
                        <label for="Name">Job Title</label><br>
                        <input type="text" name="title"><br>
                        <label for="">Category:</label><br>
                        <select name="category">
                            <option value="It">It</option>
                            <option value="Business Analysist">Business Analysist</option>
                            <option value="Accountent">Accountent</option>
                            <option value="Other">Other</option>
                        </select><br>
                        <label for="Position">Position</label><br>
                        <input type="text" name="position"><br>
                        <label for="Vaccancies">No of Vaccancies</label><br>
                        <input type="number" name="vaccancies"><br>
                        <label for="Application Deadline">Application Deadline</label><br>
                        <input type="date" name="appdate"><br>
                    </fieldset>
                    <fieldset>
                        <legend><b>Others</b></legend>
                        <label for="">Job Location:</label><br>
                        <select name="address">
                            <option value="On-site">On-Site</option>
                            <option value="Remote">Remote</option>
                        </select><br>
                        <label for="Salery">Salery:</label><br>
                        <select name="salery">
                            <option value="Negotiable">Negotiable</option>
                            <option value="5000-10000">5000-10000</option>
                            <option value="10000-25000">10000-25000</option>
                            <option value="50k">50k</option>
                            <option value="100k">100k</option>
                        </select><br>
                    </fieldset>
                    <fieldset>
                        <legend><b>Job Responsibilities</b></legend>
                        <label for="Responsibilities">Responsibilities</label><br>
                        <textarea name="responsibilities" id="" cols="85" rows="5"></textarea>
                    </fieldset><br>
                    <fieldset>
                        <legend><b>Job Requirements</b></legend>
                        <label for="Requirements">Requirements</label><br>
                        <textarea name="requirements" id="" cols="85" rows="5"></textarea><br>
                    </fieldset><br>
                    <input type="reset">
                    <input type="submit" name="postjob" value="Post a Job"><br><br>
                </form>
            </fieldset>
        </section>
    </body>
</html>
<?php
}else{
header("location: signin.html?invalid&user");
}
?>