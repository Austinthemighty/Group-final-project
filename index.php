<?php

require_once('connect.php');

?>


<!DOCTYPE html>

<html>
<head>

    <title>E-box</title>
    <title>Ebox</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
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
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Work</a></li>
        <li><a href="sign-up.php">Profile</a></li>
    </ul>
    <div class="button">
        <a class="btn-open" href="#"></a>
    </div>
</nav>
<div class="overlay">
    <div class="wrap">
        <ul class="wrap-nav">
            <li><a href="#">About</a>
                <ul>
                    <li><a href="#">About Company</a></li>
                    <li><a href="products.php">Admin</a></li>
                    <li><a href="#">Developers</a></li>
                </ul>
            </li>
            <li><a href="#">Subscriptions</a>
                <ul>
                    <li><a href="products.php">Small</a></li>
                    <li><a href="products.php">Basic</a></li>
                    <li><a href="products.php">Premium</a></li>
                </ul>
            </li>
            <li><a href="sign-up.php">Profile</a>
                <ul>
                    <li><a href="sign-in.php">Log-in</a></li>
                    <li><a href="sign-up.php">Sign-Up</a></li>
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
    </div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
 
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="http://download.intel.com/newsroom/kits/idf/2013_fall/gallery/images/IvyTown_Package.jpg" alt="Image" style="height: 450px;width: 450px; ">
            <div class="carousel-caption">
                <h3>Xeon Processor</h3>
                <p>30M cache, 2.70GHz, 12 cores</p>
            </div>
        </div>

        <div class="item">
            <img src="http://i5.walmartimages.com/dfw/dce07b8c-63b5/k2-_8730fd38-d96f-4472-8173-315662688900.v1.jpg" alt="Image" style="height: 450px;width: 450px;">
            <div class="carousel-caption">
                <h3>Fitbit Flex Wireless Wristband</h3>
                <p> Count the steps taken everyday.</p>
            </div>
        </div>
        <div class="item">
            <img src="images\iPhone-Family_US-EN-PRINT.png" alt="Image" style="height: 450px;width: 450px;">
            <div class="carousel-caption">
                <h3>iPhone</h3>
                <p>The iPhone Family</p>
            </div>
        </div>
        <div class="item">
            <img src="images\iPadPro10-Lineup_PR-PRINT.png" alt="Image" style="height: 450px;width: 450px;">
            <div class="carousel-caption">
                <h3>iPad</h3>
                <p>The iPad Family</p>
            </div>
        </div>
        <div class="item">
            <img src="images\Watch_Complications_Hero-PRINT.png" alt="Image" style="height: 450px;width: 450px;">
            <div class="carousel-caption">
                <h3>The Apple Watch</h3>
                <p>The Most Personal Apple Device</p>
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
    <h3>What We Do</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Current Project</p>
        </div>
        <div class="col-sm-4">
            <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Project 2</p>
        </div>
        <div class="col-sm-4">
            <div class="well">
                <p>Some text..</p>
            </div>
            <div class="well">
                <p>Some text..</p>
            </div>
        </div>
    </div>
</div><br>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
