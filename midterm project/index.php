<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal | Hire | Post Job</title>
</head>
<body>
    <section style="width: 700px;margin: 50px 0px 0 400px;">
        <!-- navbar section -->
        <fieldset style="width: 700px;">
            <legend>Header</legend>
            <a href="?" style="margin-right: 400px;">Your Choice</a>
            <a href="inc/about.html">Aboutus</a>
            <a href="inc/signin.html">Sign In</a>
            <a href="inc/signup.html">Post a Job</a>
        </fieldset>
        <!-- About us section -->
        <section>
            <fieldset style="width: 700px;">
                <legend>About Us</legend>
                <p>Our web-site aims to explore maximum benefits of the Internet. We believe our service will help the job seekers manage their career more efficiently. This site will also help employers solve many of the problems associated with traditional recruiting methods and allow them to save time and money.
                    <a href="inc/about.html">read more</a></p>
                </fieldset>
            </section>
            <!-- Job Post Section -->
            <?php
            $file = fopen('controller/jobdetails.txt', 'r');
            
            while(!feof($file)){
            $user = fgets($file);
            $userArray = explode('|', $user);
            
            if( $userArray[0] != null && $userArray[1] != null &&$userArray[2] != null &&  $userArray[3] != null &&  $userArray[4] != null
            &&  $userArray[5] != null &&  $userArray[6] != null &&  $userArray[7] != null && $userArray[8] != null && $userArray[9] != null )
            {
            ?>
            <section >
                <fieldset style="width: 700px;">
                    <legend>Jobs</legend>
                    <div>
                        <b>Job Post :</b>
                        <p><?php echo $userArray[1]; ?></p>
                        <b>Category:</b>
                        <p><?php echo $userArray[2]; ?></p>
                        <b>Position:</b>
                        <p><?php echo $userArray[3]; ?></p>
                        <b>Vacancy:</b>
                        <p><?php echo $userArray[4]; ?></p>
                        <b>Application Deadline:</b>
                        <p><?php echo $userArray[5]; ?></p>
                        <b>Location:</b>
                        <p><?php echo $userArray[6]; ?></p>
                        <b>Salery:</b>
                        <p><?php echo $userArray[7]; ?></p>
                        <b>Responsibity:</b>
                        <p><?php echo $userArray[8]; ?></p>
                        <b>Requirements:</b>
                        <p><?php echo $userArray[9]; ?></p>
                        <!-- <a href="inc/apply.html<?php echo $userArray[0]; ?>">View Details</a> --> <a href="inc/apply.html?applyPost=<?php echo $userArray[0] ?>">Apply</a>
                    </div>
                </fieldset>
            </section>
            <?php
            }
            }
            ?>
        </section>
    </body>
</html>