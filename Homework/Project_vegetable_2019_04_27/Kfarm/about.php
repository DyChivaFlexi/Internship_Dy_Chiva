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
<div class="contaier-fluid">
<!-- image slider -->
<div class="container">
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
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
</div>
    <!--welcome-->
    <div class="container">
        <div class="box">
            <p class="dtext" id="str">

            </p>
        </div>
    </div>
<!-- jumboston -->
<div class="container">
    <div class="row jumbotron" style="margin:0px;background-color:#eeeeee;">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">ហាងលក់ផលិតផល KFARM យើងខ្ញុំ បានបង្កើតឡើងចាប់តាំងពី ឆ្នាំ ២០១៤ មក ម្លេះ​ ។ ដោយការយល់ឃើតថា បច្ចុប្បន្ននេះ ផលិតផលបន្លែផ្លែឈើជាច្រើនដែលបានដាក់លក់នៅតាមបណ្តាលទីផ្សារទូទាំងប្រទេល ភាគច្រើន សុទ្ធសឹង តែជា ផលិតផលដែលនាំចូល មកពីខាងក្រៅប្រទេស ហើយផលិតផលទាំងនោះ ភាគច្រើនគឺមាន សារធាតុគីមី ដែលវាអាចបណ្តាលអោយអ្នកទទួលទាន រងនូវផល់ពាល់ដល់សុខភាព ។ អាស្រ័យដូចនេះ ទើបបានជា​ ហាងលក់បន្លែអាយហ្វាម ជ្រើសរើសតែផល្លានុផលណាដែលគ្មានសារធាតុគីមី យកមកដាក់លក់ ជូនអតិថិជនរបស់ខ្លួន ហើយភាគច្រើននៃផលិតផលទាំងអស់នោះគឺជារបល់កសិករខ្មែរទាំងស្រុង ។
            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Learn</button></a>
        </div>
    </div>
</div>

<!-- welcome section -->
<div class="container padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Build With​​​ It</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">With HTML,It is the standard markup language for creating Web pages.Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.
                And CSS is a language that describes the style of an HTML document..</p>
        </div>
    </div>
</div>
<!-- three coloums section -->
<div class="container padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-code text-success display-4"></i>
            <h3>HTML</h3>
            <p>Build with the lates version HTML4, HTML5</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bold text-info display-4"></i>
            <h3>Bootstrap</h3>
            <p>Build with the lates version Bootstrap3</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <i class="fab fa-css3 text-primary display-4"></i>
            <h3>CSS3</h3>
            <p>Build with the late version CSS3</p>
        </div>
    </div>
</div>
<!-- two columns section -->
<div class="container padding">
    <div class="row padding">
        <div class=" col-lg-7">
            <h3>Chiva Was Built....</h3>
            <p>My name's  Dy Chvia. I'v been studying at Royal University Of
                Phnom Penh on bachelor degree Information Teachnology.
            </p>
            <p>Now I am a Internship Web Developer at Flexi Solution Company
                That service all software In Cambodia.
            </p>
            <p>I am proud of myseft to learning Information Teachnoly at University 
                and also I'm presure to work as a Web Development Girl.
            </p>
            <br>
            <a href="#"><button type="button" class="btn btn-primary">Learn more</button></a>
        </div>
        <div class="col-lg-5">
            <img src="image/6.jpeg" class="img-fluid">
        </div>
    </div>
    <hr class="my-4">
</div>





<!--Two columns section-->
<div class="container padding">
    <div class="row padding">

        <div class="col-lg-5">
            <img src="image/fruit.png" class="img-fluid">
        </div>
        <div class=" col-lg-7">
            <h3>Our Philosophy</h3>
            <p>មូលហេតុដែល ខ្ញុំបង្កើតគេហទំព័រ​ ហាងលក់បន្លែខ្មែរហ្វាម នេះឡើងគឺដោយសារតែខ្ញុំយល់ឃើញថា នេះគឺជា គម្រោងមួយដែលថ្មី សម្រាប់នៅក្នុង ព្រះរាជាណាចក្រកម្ពុជា យើងនេះ ។ នៅក្នុងគេហទំព័រនេះ គឺមានដាក់ លក់នូវផលិតផលដូចជា បន្លែស្រស់ និងផល្លានុផល ដែលមាននៅក្នុងប្រទេសរបស់យើង ។ ក្នុងគេហទំព័រនេះ ក៏មានបញ្ជូលនូវទម្រងកក់ទុក ដែលផ្តល់ភាពងាយស្រួលដល់ អតិថិជន 
                ធ្វើការកក់ ឬ ទិញតាម រយៈ អិនធើណេត បានផងដែរ ។ </p><br>
            <p>ជាងនេះទៅទៀត គេហទំព័រនេះ ក៏មានកន្លែងធ្វើការផ្សព្វផ្សាយ ដែលអាចទទួលនូវ ដៃគូរពាណិជ្ជករ ដែលមានបំណងចង់ធ្វើការផ្សព្វផ្សាយពាណិជ្ជកម្មផលិតផលរបស់ខ្លួនផងដែរ ។	
នេះគឺជាស្នាដៃដំបូងបង្អស់របស់ខ្ញុំ ក្នុងការ បង្កើត គេហទំព័រមួយឡើង ដោយខ្លួនឯង ។ លោកអ្នកអាចបញ្ចេញ មតិរិះគន់ ទាក់ ទង ទៅនឹងកំហុសឆ្គង ទាំងឡាយក្នុង គេហទំព័រនេះ។
លេខទូរស័ព្ទ : (885)-96-31-45-815 សូមអរគុណ!</p>

        </div>
    </div>
</div>


</div>
<?php require 'footer.php';?>
</body>

</html>
<script>
    var i=0;
    var text="Welcome to Our Website";
    function type() {
        if(i<text.length) {
            document.getElementById('str').innerHTML += text.charAt(i);
            i++;
            setTimeout(type, 300);
        }
    }
    type();
</script>