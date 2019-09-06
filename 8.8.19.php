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
        $file= fopen("test.txt","r");
        if ($file==false){
            echo"file Not found";
            exit();
        }
        $size=filesize("test.txt");
        $text=fread($file, $size);
        echo $text;
        echo $size;
        ?>
    </body>
</html>
