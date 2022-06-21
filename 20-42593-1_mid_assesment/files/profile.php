<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <?php 
        $file=fopen('../include/registration.txt','r');
        $data=fread($file,filesize('../include/registration.txt'));
        echo $data;
        fclose($file);
        ?>
        <tr>
            <td><center>Pofile</center></td>
            
        </tr>
        <tr>
            <td>ID</td>
              
        </tr>
        <tr>
            <td>NAME</td>
        </tr>
        <tr>
            <td>USER TYPE</td>
        </tr>
    </table>
    <?php
    ?>    
</body>
</html>