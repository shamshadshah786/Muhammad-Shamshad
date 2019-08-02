<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset = "utf-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>29.7.19</title>
        <script type = "text/javascript">
         $(document).ready(function(){
            $("#mydiv").click(function() {
                $("#mydiv").css("background-color","Red");
                $("#mydiv").html("GO wrong")
         });
     });
      </script>
    </head>
    <body>
        
        <div id="mydiv">
            
            Click me
            
        </div>
        
        
    </body>
</html>
