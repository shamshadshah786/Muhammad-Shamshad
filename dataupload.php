<div><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $name=$_FILES['upload']['name'];
        $tmp=$_FILES['upload']['size'];
        $type=$_FILES['upload']['type'];
       
        move_uploaded_file($name,$tmp);
        echo "Success";
        ?>
        <ul>
            <li>Sent file: <?php echo $name;  ?>
            <li>File size: <?php echo $tmp;  ?>
            <li>File type: <?php echo $type ?>
           
         </ul>
        
    </body>
</html>
</div>