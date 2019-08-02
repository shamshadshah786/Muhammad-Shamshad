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
       
        $d = date("D");
         
         switch ($d){
            case "Mon":
               echo "Today is Monday";
               break;
            
            case "Tue":
               echo "Today is Tuesday";
               break;
            
            case "Wed":
               echo "Today is Wednesday";
               break;
            
            case "Thu":
               echo "Today is Thursday";
               break;
            
            case "Fri":
               echo "Today is Friday";
               break;
            
            case "Sat":
               echo "Today is Saturday";
               break;
            
            case "Sun":
               echo "Today is Sunday";
               break;
            
            default:
               echo "Wonder which day is this ?";
         }
            
        ?>
        <?php
        
        $a = 0;
         $b = 0;
         
         for( $i = 0; $i<5; $i++ ) {
            $a += 10;
            $b += 5;
         }
         
         echo ("At the end of the loop a = $a and b = $b" );
        
        
        
        ?>
    </body>
</html>
