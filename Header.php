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
        <style>
            body {
  font-family: Arial, Helvetica, sans-serif;
}
input[type=text] {
  width: 130px;
  -webkit-transition: width 8.0s ease-in-out;
  transition: width 0.4s ease-in-out;
}

.link{
    color: black;
}
.link:hover{
    color: lightblue;
    text-decoration: none;
}
/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
  width: 100%;
}
.notification {
  background-color: #3F5D9A;
  color: white;
  text-decoration: none;
  padding: 8px 96px;
  position: relative;
  display: inline-table;
  border-radius: 13px;
}

.notification:hover {
  background: #3F5D9A;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
.a {
  background-color: #3F5D9A;
  border: none;
  color: white;
  padding: 7px 74px;
  text-align: center;
  font-size: 14px;
  margin: 1px 2px;
  opacity: 0.6;
  transition: 1.3s;
}
.a {
    border-top-left-radius: 11px;
    border-top-right-radius: 11px;
    border-bottom-right-radius: 11px;
    border-bottom-left-radius: 11px;
}

.btn:hover {opacity: 1}
            .img-profile     {
                    border-radius: 50%;
                    }
         .col-md-1 {
                    width: 6.333%;
                   }
                   
         .col-md-2 {
                    width: 10.667%;
                   } 
                   .col-md-3 {
                                width: 23%;
                                }
        .btn{
    
    margin-bottom: 26px;
    
}
.form-control {
                        display: inline;
                        width: 138%;
                        height: 36px;
        }
.fa {
                    display: inline;
}
.pagination > li > a, .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 45px;
    margin-left: -1px;
    line-height: 1.429;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
  

        </style>
    </head>
    <body>
        <div class="container" style="background-color:#3F5D9A; height:38px; font-family:Calibri;">
            <div class="row">
                    <div class="col-md-12">
                            <i class="fa fa-facebook-official col-md-1" style="font-size:36px;color:white"></i> 
                                <div class="col-md-3">
                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                </div>
                                <div>
                                        <button class="col-md-1" type="submit" style="font-size:20px;color:white"><i class="fa fa-search"></i></button>
                                </div>
                                <div class="col-md-1">
                                        &nbsp;
                                </div>
                                <div class="col-md-2">
                                    <img class="img-profile" src="2.png" alt="Avatar" style="width:37px">
                                    <strong><text style="color: white; font-size: 20px;"> Asad</text></strong>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-default"><a class="link" href="Assignment1.php">Home</a></button>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-default"><a class="link" href="Assignment1.php">Create</a></button>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-default"><a class="link" href="Assignment1.php">Logout</a></button>
                                </div>
                                
                            
                    </div>
                </div>
         
        </div>
    </body>
</html>
