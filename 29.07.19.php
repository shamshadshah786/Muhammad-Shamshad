<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
        <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
        
         <script type = "text/javascript">
         $(document).ready(function() {
             $("#mydiv").click(function() {
            $("#mydiv").css("background-color","red");
            $("#mydiv").html("Go Wrong")
         });
         
         });
         $(document).ready(function() {
             $("p").click(function() {
             $("p").hide();
             
             
         });
         });
      </script> 
    </head>
    <body>
         
        <div id="mydiv" >
            
          Click me 
        </div>
        
        
        <p> M. Shamshad </p>
           
    </body>
</html>
