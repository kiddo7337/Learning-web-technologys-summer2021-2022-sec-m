<?php
if(isset($_REQUEST['signup']))
{
$id =$_POST['id'];
$pass =$_POST['pass'];
$cpass =$_POST['cpass'];
$name =$_POST['name'];
$type=$_POST['type'];
if($pass!=$cpass){
    echo "<h3>password Incorrect</h3>";
}
else if($id== null || $pass == null || $cpass == null || $name == null){
    echo "<h3>Invalid</h3>";
}
else{
    $user = $id."|".$name."|".$pass."|".$type."\r\n";
    $file= fopen('registration.txt','a');
    fwrite($file,$user);
    if($fname == 'create'){
        header("Location:registration.html");
    }
    else{
        header("location:login.html");
    }
}

}
?>