<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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

        </style>
    </head>
    <body>
        <div class="container" style="background-color:#3F5D9A; height:38px; font-family:Calibri;">
            
                <div class="row">
                    <div class="col-md-12">
                            <i class="fa fa-facebook-official col-md-1 " style="font-size:36px;color:white"></i> 
                                <div class="col-md-3">
                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                </div>
                                <div>
                                        <button class="col-md-1" type="submit" style="font-size:20px;color:white"><i class="fa fa-search"></i></button>
                                </div>
                                <div class="col-md-1">
                                        &nbsp;
                                </div>
                                <div class="col-md-3">
                                    <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                    <strong><text style="color: white; font-size: 20px;">M.Shamshad</text></strong>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-default">Home</button>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-default">Create</button>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-default">Logout</button>
                                </div>
                                
                            
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-12"> 
                        
                            <div class="col-md-3">
                                <div class="col-md-8">
                                    
                                    <div class="row">
                                        <div class="btn-group-vertical">
                                            <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                               <strong> <text style="color: black; font-size: 20px;"> M.Shamshad </text> </strong>
                                   <button>    <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                       <strong> <text style="color: black; font-size: 20px;"> NewsFeeds </text> </strong></button>
                               <button>      <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                    <strong> <text style="color: black; font-size: 20px;"> Massenger </text> </strong></button>
                                 <button>    <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                    <strong> <text style="color: black; font-size: 20px;"> Groups &nbsp;&nbsp;&nbsp;</text> </strong></button>
                               <button>      <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                    <strong> <text style="color: black; font-size: 20px;"> Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</text> </strong></button>
                                <button>     <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                    <strong> <text style="color: black; font-size: 20px;"> Events&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </text> </strong></button>
                              <button>       <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                    <strong> <text style="color: black; font-size: 20px;"> Weather &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </text> </strong></button>
                               <button>      <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                    <strong> <text style="color: black; font-size: 20px;"> Games &nbsp;&nbsp;&nbsp;</text> </strong></button>
                             <button>         <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                    <strong> <text style="color: black; font-size: 20px;"> Memories &nbsp;&nbsp;&nbsp;&nbsp;&nbsp</text> </strong></button>
                                 <button>     <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                    <strong> <text style="color: black; font-size: 20px;"> Discover &nbsp;&nbsp;</text> </strong></button>
                                <button>      <img class="img-profile" src="d.png" alt="Avatar" style="width:37px">
                                    <strong> <text style="color: black; font-size: 20px;"> Friend Lists </text> </strong></button>
                                       
                                        </div>
                                    </div>
                                    <div class="row">
                                    <a href="#" class="notification col-md-4">
                                            <span>Settings....</span>
                                            <span class="badge">3</span>
                                    </a>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="row">
                                    <button type="button" class="btn btn-primary col-md-4">Status</button>
                                    <button type="button" class="btn btn-primary col-md-4">Status</button>
                                    <button type="button" class="btn btn-primary col-md-4">Status</button>
                                    </div>
                                    <div class="row">
                                        <img class="col-md-4" src="Ad1.jpg" alt="Avatar" style="height:200px">
                                        <img class="col-md-4" src="Ad1.jpg" alt="Avatar" style="height:200px">
                                        <img class="col-md-4" src="Ad1.jpg" alt="Avatar" style="height:200px">
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                    <div class="row">
                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Post</th>
                                                                <th>Post</th>
                                                                <th>Post</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                              </tr>
                                                            </tbody>
                                    </table>
                                    </div>
                                    <div class="row">
                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Post</th>
                                                                <th>Post</th>
                                                                <th>Post</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                              </tr>
                                                            </tbody>
                                    </table>
                                    </div>
                                    <div class="row">
                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Post</th>
                                                                <th>Post</th>
                                                                <th>Post</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                              </tr>
                                                              <tr>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                                <td>Post</td>
                                                              </tr>
                                                            </tbody>
                                    </table>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-3">
                              <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-primary">Online Friends</button>
                                    <span>ADs</span><img src="e.jpg" alt="Avatar" style="width:232px">
                                </div>  
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="col-md-3"><h2>&nbsp;</h2></div>
                                    <ul class="pagination col-md-6">
                                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                            <div class="col-md-3"></div>
                        </div>

                    </div>
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="col-md-3"><h2>&nbsp;</h2></div>
                                    <ul class="col-md-6">
                                      <li class="page-item"><a class="page-link" href="#">English (UK)</a></li>
                                      <li class="page-item"><a class="page-link" href="#">اردو</a></li>
                                      <li class="page-item"><a class="page-link" href="#">France</a></li>
                                      <li class="page-item"><a class="page-link" href="#">English (US)</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Espanol</a></li>
                                    </ul>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="fb-page" 
                    data-href="https://www.facebook.com/facebook"
  data-width="380" 
  data-hide-cover="false"
  data-show-facepile="false"></div>

                    </div>
                
                </div>
            
        
        </div>
    </body>

   <?php
        print_r($_GET);
        ?>



</html>