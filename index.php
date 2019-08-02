<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <meta charset="UTF-8">
        <title> shah G </title>
        <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
 
        <script type="text/javascript">
        
    
    
        function validation(){ 
       
       var n=document.registration.name.value;
       
        
       var b=document.registration.contact.value;
        
        
        
        
        
            if (n==""){
            alert("Enter name");
            document.registration.name.focus();
            return false;
        }
        
        
        
        
        
         if (b==""){
            alert("Enter contact");
            document.registration.contact.focus();
            return false;
        }
      
    }   
            
            </script>
        
   <style>
           body {
                     background-image: url(".jpeg");
                     background-repeat: no-repeat;
                                                    }                
        .shah{ color:red;
        }
    </style>
    </head>
    <body bgcolor="yellow" >  
        
        
                
        <form action="2.8.19.php" method="get" name="registration" onsubmit="return validation()"> 
            <table > 
                
                <tr> 
                    <td class="shah" ><b> First Name :</b> </td>
                    <td> <input type="text" name="name" /> </td> 
                    <td class="shah" ><b>  Last Name :</b> </td>
                    <td> <input type="text" name="name" /> </td> 
                </tr>
                <tr>
                
                <td class="shah" ><b>  CNIC :</b> </td>
                    <td> <input type="text" name="name" /> </td>
                    
                    <td class="shah" ><b>  Phone NO. :</b> </td>
                    <td> <input type="text" name="name" /> </td>
                    
                    
                    
                </tr>
          <tr> 
                    
                    <td class="shah" ><b> Address :</b> </td>
                    <td>   <textarea name="address" rows="5"  > </textarea> </td>
                    <td> Session </td>
                    <td>        
          <select> 
              
              <option value="B"> Morning </option> 
              <option value="C"> Evening </option> 
          </select> </td>
                </tr>
       
                <tr> 
                    <td class="shah"><b> Contact :</b> </td>
                    <td> <input type="text" name="contact" /> </td> 
                    
                </tr>
                                                
               <tr> 
                    <td class="shah"><b> Gander : </b></td>
                    <td class="shah"> <input type="radio" name="subject" value="Male" /> Male </td> 
                     <td class="shah"> <input type="radio" name="subject" value="Female" /> Female </td> 
                      
                </tr>  
                
                 <tr> 
                     <td class="shah"><b> Course :</b> </td>
                <td class="shah"> <input type="checkbox" name="subject" value="Math" /><a href = "http://www.iub.edu.pk/"> Computer Hardwere</a> </td> 
                  <td class="shah"> <input type="checkbox" name="subject" value="Math" /> Web Programing </td>  </tr>
              <tr>  
                   <td>  </td>
                  <td class="shah"> <input type="checkbox" name="subject" value="Math" /> Computer Softwere </td> 
                       <td class="shah"> <input type="checkbox" name="subject" value="Math" /> Microsoft Office </td> 
                    
                 </tr>
              <tr>    
                  <td>  </td>
                  <td class="shah">  <input type = "submit" name="submit" value = "Submit" >
         <input type = "reset" name = "reset"  value = "Reset" /></td> 
                 </tr>
            </table>
            
            
            
        </form>  
            
    </body>
</html>
