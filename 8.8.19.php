<!DOCTYPE html>
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
        $file= fopen("Asad.txt", "r");
        if($file === false){
            echo "File not found";
            exit();
        }
        
        $size= filesize("asad.txt");
        $text= fread($file,$size);
        
        echo $text;
        echo $size;
        ?>
    </body>
</html>
