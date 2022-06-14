<?php
if(isset($_REQUEST['submit'])){
    $email=$_POST['email'];
    if($email==null){
        //header("location:email.html");
        echo "<b>Email can not be Null</b>";
    }
    else if($email ){
        header("location:email.html?sucess");
    }
}
?>