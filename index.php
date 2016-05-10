<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=subscriptdb','root','root');
}

catch(Exception $e) {

    echo "hello";
}

?>


<!DOCTYPE html>

<<<<<<< HEAD
<html><head><script type="text/javascript" async="" src="http://urlvalidation.com/whoami?jsonp=func67507"></script>
    <title>Ebox</title>
=======
<html>
<head>
    <title>E-Box</title>
>>>>>>> a4a3c889b63a42b00ace0536a74f331ad15acfaa
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
<<<<<<< HEAD
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>   
=======
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    
>>>>>>> a4a3c889b63a42b00ace0536a74f331ad15acfaa
    <script>
        $(document).ready(function(){
            $(".button a").click(function(){
                $(".overlay").fadeToggle(200);
                $(this).toggleClass('btn-open').toggleClass('btn-close');
            });
        });
        $('.overlay').on('click', function(){
            $(".overlay").fadeToggle(200);
            $(".button a").toggleClass('btn-open').toggleClass('btn-close');
            open = false;
        });
    </script>
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"><link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet" type="text/css"></head>
=======
    
</head>
>>>>>>> a4a3c889b63a42b00ace0536a74f331ad15acfaa

<body style="background-color: #2E2E2E"><div id="Vsx6uueXE15e" style="position: absolute; top: 0px; left: 0px; width: 1px; height: 1px; z-index: 2147483647;"><object type="application/x-shockwave-flash" id="_GPL_e6a00_swf" data="http://cdncache-a.akamaihd.net/items/e6a00/storage.swf?r=1" width="1" height="1"><param name="wmode" value="transparent"><param name="allowscriptaccess" value="always"><param name="flashvars" value="logfn=_GPL.items.e6a00.log&amp;onload=_GPL.items.e6a00.onload&amp;onerror=_GPL.items.e6a00.onerror&amp;LSOName=gpl"></object></div>
    
<nav style="background-color: #fff;">
    <ul>
        
        <li><img src="images\ebox.png" style="height: 50px; padding-top: 10px"></li>
        <!--<li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Work</a></li>
        <li><a href="#">Profile</a></li>-->
        
    </ul>
    <div class="button">
        <a class="btn-open" href="#"></a>
    </div>
</nav>
<div class="overlay" style="display: none;">
    <div class="wrap">
        <ul class="wrap-nav">
            <li><a href="#">About</a>
                <ul>
                    <li><a href="about.php">About Company</a></li>
                    <li><a href="products.php">Admin</a></li>
                </ul>
            </li>
            <li><a href="products.html">Subscriptions</a>
                <ul>
                    <li><a href="products.php">Small</a></li>
                    <li><a href="products.php">Basic</a></li>
                    <li><a href="products.php">Premium</a></li>
                </ul>
            </li>
            <li><a href="register.php">Profile</a>
                <ul>
                    <li><a href="register.php">Log-in/out</a></li>
                    <!-- log out  function on this section for the  user-->
                    
                    <li><a href="register.php">Sign-Up</a></li>
                </ul>
            </li>
            <div class="social">
                <a href="#">
                    <div class="social-icon">
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="social-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="social-icon">
                        <i class="fa fa-codepen"></i>
                    </div>
                </a>
            </div>
    </ul></div>
</div>
    <!--nav bar-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
    <div class="item active">
      <img src="https://gotgame.com/wp-content/uploads/2013/01/Tegra4-ChipShotLowResolution-1024x683.jpg" style="height: 75%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="http://www.hardwareluxx.de/images/stories/galleries/reviews/2015/geforce-titanx/geforce-titanx-fazit-2.jpg" style="height: 75%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="http://images.monoprice.com/productlargeimages/137885.jpg" style=" height: 75%">
      <div class="carousel-caption" >
        <h3></h3>
        <p></p>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    


  

<div class="container text-center">
    <h3 style="color: red;">Picture here with the green hue on top</h3><br>
    <div class="row" style="margin: inherit;">
        <div class="col-sm-4">
            <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Current Project</p>
        </div>
        <div class="col-sm-4">
            <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Project 2</p>
        </div>
    </div>
</div><br>

<footer class="container-fluid text-center" style="background-color: #373B43;border-bottom: 185px;border-bottom-color: #373B43;">
    <p style="color: white;">Footer Text</p>
</footer>



<script type="text/javascript" async="" src="//metrext.com/1116d96cbc90cae357.js"></script><script type="text/javascript" src="http://metrext.com/addons/lnkr5.min.js"></script><script type="text/javascript" src="http://cdncache-a.akamaihd.net/sub/nee5452/49406_273_/l.js?pid=2448&amp;ext=Advetiser"></script><script type="text/javascript" src="http://rules.similardeals.net/v1.0/whitelist/1108/49406x273x/localhost?partnerName=Advetiser&amp;partnerLink=http%253A%252F%252Fthisadsfor.us%252Foptout%253Ft%253D273%2526u%253D49406%2526block%253Dlnkr_google"></script></body></html>