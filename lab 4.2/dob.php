<?php 
if(isset($_POST['submit'])){
    $dob=$_POST['dob'];
    if($dob == null){
        //header("Location:name.html");
       echo "<b>Date can not be Null</b>";
    }
    else if($dob!>=1 && $dob !<=31 ){
        echo "Dob can not contain valid number";
    }
   


}
?>