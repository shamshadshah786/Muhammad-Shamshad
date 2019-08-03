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
                <div>
                    <div class="row">
                        <div class="col-md-12"> 
                        
                            <div class="col-md-3">
                                <div class="col-md-12">
                                    
                                    <div class="row">
                                        <div class="btn-group-vertical">
                                                    <img class="img-profile" src="2.png" alt="Avatar" style="width:37px">
                                                <strong><text style="color: lightblue; font-size: 20px;"> Asad</text></strong>
                                        <button type="button" class="btn btn-primary a"><span>NewsFeeds</span> <span class="badge">99+</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Massenger</span> <span class="badge">10</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Groups</span><span class="badge">99+</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Pages</span><span class="badge">30</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Explore</span><span class="badge">10</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Saves</span><span class="badge">99+</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Events</span><span class="badge">6</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Memories</span><span class="badge">80</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Friend Lists</span><span class="badge">99+</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Weather</span><span class="badge">2</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Recomendation</span><span class="badge">0</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Games</span><span class="badge">54</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Discover</span><span class="badge">99+</span></button>
                                        <button type="button" class="btn btn-primary a"><span>Jobs</span><span class="badge">99+</span></button>
                                        
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
                                        <img class="col-md-4" src="1.jpg" alt="Avatar" style="height:200px">
                                            <img class="col-md-4" src="2.jpeg" alt="Avatar" style="height:200px">
                                        <img class="col-md-4" src="Ad2.jpg" alt="Avatar" style="height:200px">
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                    <div class="row">
                                  
  
                                                <div class="card">
                                                  <h2>First Post</h2>
                                                  <h5>Title description, Dec 7, 2017</h5>
                                                  <img class="col-md-4" src="1.jpg" alt="Avatar">
                                                  <p>History of Pakistan</p>
                                                  <p>The history of the Islamic Republic of Pakistan began on 14 August 1947 when the country became an independent nation in the form of Dominion of Pakistan within the British Commonwealth as the result of Pakistan Movement and the partition of India.</p>
                                                </div>
                                                <div class="card">
                                                  <h2>Second Post</h2>
                                                  <h5>Title description, Sep 2, 2017</h5>
                                                  <img class="col-md-4" src="2.jpeg" alt="Avatar">
                                                  <p>History of Pakistan and India</p>
                                                  <p>The history of the Islamic Republic of Pakistan began on 14 August 1947 when the country became an independent nation in the form of Dominion of Pakistan within the British Commonwealth as the result of Pakistan Movement and the partition of India.</p>
                                                </div>
  
                                    </div>
                                    <div class="row">
                                    <div id="posts">
                                        <section class="post">
                                            <h2><a href="https://www.facebook.com">Third Post</a></h2>
                                            <p>The history of the Islamic Republic of Pakistan began on 14 August 1947 when the country became an independent nation in the form of Dominion of Pakistan within the British Commonwealth as the result of Pakistan Movement and the partition of India.</p>
                                        </section>
                                        <section class="post">
                                            <h2><a href="https://www.google.com">Forth Post</a></h2>
                                            <p>The history of the Islamic Republic of Pakistan began on 14 August 1947 when the country became an independent nation in the form of Dominion of Pakistan within the British Commonwealth as the result of Pakistan Movement and the partition of India.</p>
                                        <iframe width="496" height="341" src="https://www.youtube.com/embed/vgucHod-ycY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </section>
                                    </div>
                                    </div>
                                    <div class="row">
                                    
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-3">
                              <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-primary">Online Friends</button>
                                    <span>ADs</span><img src="Ad1.jpg" alt="Avatar" style="width:232px">
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
                        

                    </div>
                
                </div>
            
        </div>

    </body>

<?php

print_r($_GET);


?>

</html>

