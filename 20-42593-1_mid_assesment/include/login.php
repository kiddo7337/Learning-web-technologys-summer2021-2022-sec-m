<?php
session_start();
    $id=$_REQUEST['id'];
    $pass=$_REQUEST['password'];
    if($id == null || $pass == null){
        echo "Null password";
    }
    else{
        $file = fopen('registration.txt','r');
        while(!feof($file)){
            $data = fgets($file);
            $user =explode("|",$data);
            if($id == trim($user[0]) && $pass == trim($user[2])){
                setcookie('status','true'.time()+3600,'/');
                $_SESSION['name']= trim($user[1]);
                $_SESSION['type']= trim($user[3]);
                header("location:../files/home.php?");
            }
        }
    }

?>