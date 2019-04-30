<!DOCTYPE html>
<html lang="en" xmlns:padding-top="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.3.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>Document</title>
    <style>
    <body>
        {
            position:relative;
        }
    </body>
/* a.to_top{
    position:absolute;
    bottom:20px;
    right:20px;
    background-color:#0000;
    color:#fff;
    padding:9px 12px;
    border-radius:50%;
} */
a.to_top:hover{
    color:#000;
    background-color:red;
}
</style>

</head>
<body>
<?php require 'header.php';?>

<!-- image slider -->
<div class="container-fluid" style="padding:0;">
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
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
</div>
</div>
<br><br>


<!-- two columns section -->
<div class="container">
    <div class="container padding">
    <div class="row padding">
        <div class=" col-lg-6 col-12">
            <a href="products.php" target="_top">
                <div class="card" style="width: 30rem;border:1px solid yellowgreen;">
                    <img class="card-img-top" src="image/fruit.png" alt="Card image cap" style="width:100%;height:300px;object-fit:contain;">
                    <div class="card-body" style="background-color:yellowgreen;">
                        <h4 class="card-text" style="text-align:center;color:black;">Friut</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-12">
            <a href="products.php" target="_top">
                <div class="card" style="width: 30rem; border:1px solid yellowgreen;">
                        <img class="card-img-top" src="image/vegetable1.jpg" alt="Card image cap" style="width:100%;height:300px;object-fit:contain;">
                        <div class="card-body" style="background-color:yellowgreen;">
                            <h4 class="card-text" style="text-align:center;color:black;">Vegetable</h4>
                        </div>
                </div>
            </a>
        </div>
    </div>
    <br>
    </div>
</div>


<!-- two columns section -->
<div class="container" >
    <div class="container padding" >
    <div class="row padding">
        <div class=" col-lg-6 col-12">
            <a href="products.php" target="_top">
                <div class="card" style="width: 30rem; border:1px solid yellowgreen;">
                    <img class="card-img-top" src="image/fish1.jpg" alt="Card image cap" style="width:100%;height:300px;object-fit:contain;">
                    <div class="card-body" style="background-color:yellowgreen;">
                        <h4 class="card-text" style="text-align:center;color:black;">Firsh</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-12">
            <a href="products.php" target="_blank">    
                <div class="card" style="width: 30rem; border:1px solid yellowgreen;">
                        <img class="card-img-top" src="image/meat.jpg" alt="Card image cap" style="width:100%;height:300px;object-fit:contain;">
                        <div class="card-body" style="background-color:yellowgreen;">
                            <h4 class="card-text" style="text-align:center;color:black;">Meat</h4>
                        </div>
                </div>
            </a>
        </div>
    </div>
    <br>
    </div>
</div>

<!-- banner -->
<div class="container-fluid banner" style="padding:0px;">
    <img src="image/banner1.jpg">
    <div class="text">
        <ul>
            <li style="margin-left:20px;">
            <h1>Interested in ads on our website? 50% OFF : </h1> 
            </li>
            <li>
            <button type="button" class="btn btn-success btn-lg">
                <a href="contact.php">Contact Us</a>
            </button>
            </li>
        </ul>
    </div>
</div>
<!-- <a href="#" class="to_top" style="position:absolute;buttom:0px;right:20px;background-color:yellowgreen;color:#fff;border-radius:50%;padding:10px;">top</a> -->

<?php require 'footer.php';?>
</body>
</html>
<script>
$(document).ready(function(){
    var offset =250;
    var duration =500;

    $(window).scroll(function(){
        if($(this).scrollTop()>offset){
            $('.to_top').fadeIn(duration);
        }else{
            $('.to_top').fadeOut(duration);
        }
    })
})
</script>