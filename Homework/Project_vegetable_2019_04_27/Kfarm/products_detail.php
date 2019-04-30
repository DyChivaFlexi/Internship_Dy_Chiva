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
    <!-- <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul> -->
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
<br>

<div class="container">
    <div class="row">
            <div class="col-lg-8" style="background-color:#eee;">
                <div class="container title"style="position:absolute;top:15px;">
                    <div class="row">
                        <h3>Product Detail</h3>
                    </div>
                </div>
                <div class="row" style="position:absolute;top:85px;">
                    <div class="col-lg-4" >
                        <div class="card example2">
                            <div class="card-body">
                                <img src="image/tomato.jpg" style="width:100%;height:150px;object-fit:contain;">
                            </div>
                            <div class="card-header">
                                tomato
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8"style="padding:10;">
                    <kbd>Tomato</kbd> Bootstrap includes 260 glyphs from the Glyphicon Halflings set. Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, you should include a link back to Glyphicons whenever possible. Use glyphicons in text, buttons, toolbars, navigation, or forms:
                        How to include Glyphicons without using Bootstrap CSS
                        stackoverflow.com/questions/37448338/how-to...
                        My Client project using some basic HTML and CSS. But they like the Glyphicons on the Website menus. So i just tried to include Glyphicons with the Bootstrap CSS, it does, but the other css got affected after including the Bootstrap CSS. So the question may be silly, I just want to include Glyphicons in client website menu links without ...
                        image - Using Twitter Bootstrap glyphicons in CSS...
                        html - Using glyphicon as background image in...
                    </div>
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
                                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;&nbsp;&gt;<a class="xx"href="#">Fruit</a> <br>
                                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;&nbsp;&gt;<a href="#">Fish</a><br>
                                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;&nbsp;&gt;<a href="#">Meat</a><br>
                                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;&nbsp;&gt;<a href="#">Vegetable</a><br>
                                
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