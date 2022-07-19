<?php
$host = "localhost";
$name = "root";
$pass = "";
$db = "20425931";
    $conn = mysqli_connect($host,$name,$pass,$db);
    if($conn){
        echo"connection succesful";
    }
    else{
        echo "connection failed";
    }
?>