<!DOCTYPE html>
<html lang="en" xmlns:padding-top="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.3.1-web/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<?php require 'header.php';?>

<!-- image slider -->
<div class="container-fluid" style="padding:0;">
<div id="demo" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/slide1.png">
            <div class="carousel-caption">
                <h1 class="display-2">Bootstrap</h1>
                <h3>Complete website layout</h3>
                <button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
                <button type="button" class="btn btn-primary btn-lg">Get start</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="image/slide2.png">
            <div class="carousel-caption">
                <h1 class="display-2">Dy chiva</h1>
                <h3>I was build this website</h3>
                <button type="button" class="btn btn-outline-light btn-lg">Let's Go</button>
                <button type="button" class="btn btn-info btn-lg">Get Start</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="image/slide3.png" >
            <div class="carousel-caption">
                <h1 class="display-2">I am IT</h1>
                <h3>I learn at RUPP</h3>
                <button type="button" class="btn btn-outline-light btn-sm">Let's start</button>
                <button type="button" class="btn btn-danger btn-sm">Chiva</button>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
</div>


<div class="container title">
        <div class="row">
            <div class="col-lg-8" style="background-color:#eee;">
                <div class="row">

                    <div class="col-lg-5 pic" style="padding:0 5px 0 0;">
                        <div class="row">
                            <div class="col-lg-12">
                                    <div class="page-header">
                                        <h4>Product Detail</h4>      
                                    </div>
                                    <div class="card pic_detail">
                                        <div class="card-body">
                                            <img src="image/tomato.jpg" style="width:100%;height:180px;object-fit:contain;">
                                        </div>
                                        <div class="card-header">
                                            tomato
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row pic_detail_more" >
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12" >
                                <img class="img-responsive" src="image/mango.jpg" > 
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12" >
                                <img class="img-responsive" src="image/dragon.jpg">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12" >
                                <img class="img-responsive" src="image/durian.jpg" >
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7" >
                        <div class="container" style="margin-top:50px;">
                            <h2>TOMATO</h2>
                            <h3>Price :<small style="color:yellowgreen;">&nbsp;&nbsp;(5.6$/kg)</small></h3>
                            <hr class="light">
                            <blockquote>
                            <h5>Advantage :<small>&nbsp;Tomato is considered both, a fruit and a vegetable and forms an integral part of cuisines across the globe, especially in the Mediterranean regionDaily consumption of tomatoes provides a great boost to the health, along with improving the flavor of food. </small></h3>
                                <footer><h5>Source :<small>&nbsp;Battambong Provice</small></h5></footer>
                                <hr class="light">
                            </blockquote>
                        </div>
                    </div>
                   
                </div><br><br>
                <div style="background-color:50px;">
                    <table class="table table-striped" >
                            <tbody>
                            <tr>
                                <td>Product Code</td>
                                <td>K095473</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>$10 / kg</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>Phnom Penh</td>
                            </tr>
                            <tr>
                                <td>Source</td>
                                <td>BB provice</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
            </div>
            

<!-- right card -->
            <div class="col-lg-4" style="padding:0px 0px 0px 15px;">
                <div class="row" >
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                Contact &lt;Your Sitename&gt;
                            </div>
                            <div class="card-body">
                                <div class="pb-3">Number &nbsp;&lt;+855 96 45 31 815&gt;</div>
                                <div class="pb-3">Email &nbsp;&lt;chivady@gmial.com&gt;</div>
                                <div class="pb-3">Address &nbsp;&lt;Battambong Cambodia&gt;</div>
                                
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12" style="margin-top:20px;">
                        <div class="card">
                            <div class="card-header">
                                Our Projects Types
                            </div>
                            <div class="card-body">
                                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;&nbsp;<a class="xx"href="#" style="text-decoration:none;color:black;">1. Fruit</a> <br>
                                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;&nbsp;<a href="#" style="text-decoration:none;color:black;">2. Fish</a><br>
                                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;&nbsp;<a href="#" style="text-decoration:none;color:black;">3. Meat</a><br>
                                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;&nbsp;<a href="#" style="text-decoration:none;color:black;">4. Vegetable</a><br>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12" style="margin-top:20px;">
                        <img src="image/ads2.gif" style="width:100%;margin:auto;">
                        <img src="image/ads3.jpg" style="width:100%;margin:auto;">
                    </div>


                </div>
            </div>


        </div>

</div>
<br>
<?php require 'footer.php';?>
</body>
</html>