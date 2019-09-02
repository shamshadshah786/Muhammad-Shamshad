<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> M.Shamshad </title>
        
       
        <script type="text/javascript">
        
          function validateform() {
            var first=document.registration.first_name.value;
            var second=document.registration.middle_name.value;
            var third=document.registration.last_name.value;
            var forth=document.registration.contact.value;
            var fifth=document.registration.user_id.value;
            var six=document.registration.password.value;
            var seven=document.registration.description.value;
            var eight=document.registration.address.value;
            
        
        
        
        
        
        
        
        
        if (first==null || first==""){  
            alert("Name can't be blank");  
         document.registration.first_name.focus(); 
         return false;
     }
         
        if (second==null || second==""){
            alert("Enter Second name");
            document.registration.middle_name.focus();
          
         
        return false;
    } 
        if (third==null || third==""){
            alert("Enter Last name");
            document.registration.last_name.focus();
          
         
        return false;
    } 
        if (forth==null || forth==""){
            alert("Enter Contact number");
            document.registration.contact.focus();
          
         
        return false;
    } 
        if (fifth==null || fifth==""){
            alert("Enter User name");
            document.registration.user_id.focus();
          
         
        return false;
    } 
        if (six==null || six==""){
            alert("Enter Password");
            document.registration.password.focus();
          
         
        return false;
    } 
        if (seven==null || seven==""){
            alert("Enter Description");
            document.registration.description.focus();
          
         
        return false;
    } 
        if (eight==null || eight==""){
            alert("Enter address");
            document.registration.address.focus();
          
         
        return false;
    } 
    
     }
                                                      
        
            
        
 
        </script>
        
        
        <style>
            
            
            
            body{
                background-color: lightblue;
                color: red;
            } 
            
            
        </style>
    </head>
    <body>
        
    
        
   
        <form action="db-conecct.php" method="post" name="registration" onsubmit="return validateform()" >
            
            
            
            
            
            
          <b>First name:</b> <input type = "text" name = "first_name" placeholder="Your First name" />
          <br>
          <b>Middle name:</b> <input type="text" name="middle_name" placeholder="Your Middle name"/>
          <br>
          <b>Last name:</b> <input type = "text" name = "last_name"  placeholder="Your Last name"/>
          <br>
          <b>Contact:</b> <input type="text" name="email" placeholder="Your Contact"/>
         <br>
         <b>User ID :</b> <input type = "text" name = "user_id" placeholder="your user id for login" />
         <br>
         <b>Password:</b> <input type = "password" name = "password" placeholder="**********" />
         <br>
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
