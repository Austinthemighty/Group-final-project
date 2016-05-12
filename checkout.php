<?php

?>


<!DOCTYPE html>

<html>
<head>
    <title>E-Box: Checkout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
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
    
</head>

<body style="background-color: #000;">
    
<nav style="background-color: #000;">
    <ul>
        
        <li><img src="images\ebox.png" style="height: 50px; padding-top: 10px"></li>
        
    </ul>
    <div class="button">
        <a class="btn-open" href="#"></a>
    </div>
</nav>
<div class="overlay">
    <div class="wrap">
        <ul class="wrap-nav">
            <li><a href="about.php">About</a>
                <ul>
                    <li><a href="about.php">About Company</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </li>
            <li><a href="products.php">Subscriptions</a>
                <ul>
                    <li><a href="checkout.php#1">Small</a></li>
                    <li><a href="checkout.php#2">Basic</a></li>
                    <li><a href="checkout.php#3">Premium</a></li>
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
                <a href="http://www.vitamin-ha.com/wp-content/uploads/2013/05/Funny-Facebook-02.jpg">
                    <div class="social-icon">
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
                <a href="http://rack.2.mshcdn.com/media/ZgkyMDE0LzA2LzAzLzM0L2Zha2V0d2l0dGVyLjVhOWM3LmpwZwpwCXRodW1iCTk1MHg1MzQjCmUJanBn/3e70db58/31a/fake-twitter-thumb.jpg">
                    <div class="social-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                </a>
            </div>
    </div>
</div>
    <!--nav bar-->