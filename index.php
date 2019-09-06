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
        <title>Index Page</title>
        
       
        <script type="text/javascript">
        
          function validateForm() {
            var first=document.forms["asad"].["first_name"].value;
            var second=document.forms["asad"].["middle_name"].value;
            var third=document.forms["asad"].["last_name"].value;
            var forth=document.forms["asad"].["contact"].value;
            var fifth=document.forms["asad"].["user_id"].value;
            var six=document.forms["asad"].["password"].value;
            var seven=document.forms["asad"].["description"].value;
            var eight=document.forms["asad"].["address"].value;
   
        
        if (first=null || first=""){  
            alert("Name can't be blank");  
         document.asad.first_name.focus(); 
         return false;
     }
         
        if (second=null || second=""){
            alert("Enter Second name");
            document.asad.middle_name.focus();
          
         
        return false;
    } 
        if (third=null || third=""){
            alert("Enter Last name");
            document.asad.last_name.focus();
          
         
        return false;
    } 
        if (forth=null || forth=""){
            alert("Enter Contact number");
            document.asad.contact.focus();
          
         
        return false;
    } 
        if (fifth=null || fifth=""){
            alert("Enter User name");
            document.asad.user_id.focus();
          
         
        return false;
    } 
        if (six=null || six=""){
            alert("Enter Password");
            document.asad.password.focus();
          
         
        return false;
    } 
        if (seven=null || seven=""){
            alert("Enter Description");
            document.asad.description.focus();
          
         
        return false;
    } 
        if (eight=null || eight=""){
            alert("Enter address");
            document.asad.address.focus();
          
         
        return false;
    } 
    
     }
                                                      
        
            
        
 
        </script>
        
        
        <style>
            
            
            
            body{
                background-color: white;
                
            } 
            
            
        </style>
    </head>
    <body>
        
    
        
   
        <form role="form" class="form-horizental" action="db-conecct.php" method="get" name="asad" onsubmit="return validateForm()" >
            
            
            
            
            
            <div class="form-group">
                <label class="col-md-1">First name:</label>
          <div class="col-md-3">
          <input type = "text" name = "first_name" class="form-control" placeholder="Your First name" />
          </div>
                <label class="col-md-1">Middle:</label>
          <div class="col-md-3">
          <input type="text" name="middle_name" class="form-control" placeholder="Your Middle name"/>
          </div>
                <label class="col-md-1">Last name:</label>
          <div class="col-md-3">
          <input type = "text" name = "last_name"  class="form-control" placeholder="Your Last name"/>
          </div>  
          </div>
            
            <div class="form-group">
                <label class="col-md-1">Email:</label> 
                <div class="col-md-3">
                <input type="text" name="email" class="form-control" placeholder="Email"/>
                </div>
                <label class="col-md-1">User ID :</label> 
                <div class="col-md-3">
                <input type = "text" name = "user_id" class="form-control" placeholder="your user id for login" />
                </div>
                <label class="col-md-1">Password:</label>
                <div class="col-md-3">
                <input type = "password" name = "password" class="form-control" placeholder="**********" />
                </div>
            </div>
          <b>Address :</b> <textarea rows = "2" cols = "50" name = "description" placeholder="Enter Address Here...........">
            
                       </textarea>
          <br>
         <b>Description :</b> <textarea rows = "2" cols = "50" name = "address" placeholder="Enter Description Here...........">
            
                       </textarea>
          
          <br>
          <b>Gender:</b>
         <input type = "radio" name = "subject" value = "male"/> Male
         <input type = "radio" name = "subject" value = "female"/> Female
         <br>
         <b>Course:</b>
         <input type = "checkbox" name = "subject" value = "Computer programming"> Computer Programming
         <input type = "checkbox" name = "subject" value = "Web Programming"> Web Programming
         <input type = "checkbox" name = "subject" value = "Computer Software"> Computer Software
         <input type = "checkbox" name = "subject" value = "Microsoft Office"> Microsoft Office
         <br>
         <b>Classes:</b>
         <select name = "dropdown">
            <option value = "Morning" selected>Morning</option>
            <option value = "Evening">Evening</option>
         </select>
         <br>
         <b>Your Image:</b>
         <input type = "file" name = "fileupload" accept = "image/*" />
         <br>
         <input type = "submit" name = "submit" value = "Submit" />
         <input type = "reset" name = "reset"  value = "Reset" />
         <input type = "button" name = "ok" value = "OK"/>
      </form>
    </body>
</html>
