<?php
include_once("db.php");
if(isset($_REQUEST['signup'])){
    $name= $_REQUEST['name'];
    $email= $_REQUEST['email'];
    $pass= $_REQUEST['pass'];
    $ins = "insert into registration(name,email,pass)values('$name','$email','$pass')";
    $sql = mysqli_query($conn,$ins);
    if($sql){
        header("Location:../view/signup.html?Data&save&success");
    }
    else{
        header("Location:../view/signup.html?Data&Doesnot&save&success");
    }
}
?>