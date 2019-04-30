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
    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    position:relative;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: absolute; /* Stay in place */
    width:50%;
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
  position:absolute;
  top:0px;
  left:0px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="contaier-fluid">
    <!--header section start-->
    <div class="header ">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <ul class="top-info-left">
                        <li><span class="fas fa-home"></span>#213 Nikum Battambong, PP</li>
                        <li><span class="flaticon-customer-service"></span> (885)96 45 31 815</li>
                        <li><span class="flaticon-time-1"></span> Office: 8.00 AM - 5.00 PM</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-9">
                    <div class="top-info-right pull-right">
                        <div class="soc-icon">
                            <a href="#"> <i class="fas fa-house-damage"></i> </a>
                            <a href="#"> <i class="fas fa-twitter"></i> </a>
                            <a href="#"> <i class="fas fa-linkedin"></i> </a>
                            <a href="#"> <i class="fas fa-google-plus"></i> </a>
                            <a href="#"> <i class="fas fa-instagram"></i> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- navigation bar -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="image/logo.png" height="70px"></a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#eee;top:70px;">
                        <a class="dropdown-item" href="products.php">Fruit</a>
                        <a class="dropdown-item" href="products.php">Fish</a>
                        <a class="dropdown-item" href="products.php">Meat</a>
                        <a class="dropdown-item" href="products.php">Vegetable</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="myBtn">Login</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
</div>

<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn">Open Modal</button> -->

<!-- The Modal -->
<div id="myModal" class="modal" >

<!-- Modal content -->
<div class="modal-content" style="width:40%;">
    <span class="close">&times;</span>
    <div id="logreg-forms">
                <form class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
                <div class="social-login">
                    <button class="btn facebook-btn social-btn " style="background-color:DarkBlue;color:white;" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                    <button class="btn google-btn social-btn"  style="background-color:Crimson;color:white;"  type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
                </div>
                <p style="text-align:center"> OR  </p>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                
                <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
                <a href="#" id="forgot_pswd">Forgot password?</a>
                <hr>
                <!-- <p>Don't have an account!</p>  -->
                <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
                </form> 
 </div>
</div>

</div>




</div>
</body>
</html>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

