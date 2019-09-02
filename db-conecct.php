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
        <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Facebook Assignment 1</title>
    </head>
    <body>
    <?php
    
$db=mysqli_connect("localhost","root","","asad");
    if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
echo "Connected successfully";

$first_name = mysqli_real_escape_string($db, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($db, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$sql="INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
?>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>



