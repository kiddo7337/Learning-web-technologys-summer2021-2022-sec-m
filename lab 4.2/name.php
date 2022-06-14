<?php 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    if($name == null){
        //header("Location:name.html");
       echo "<b>Name can not be Null</b>";
    }
   


}
?>