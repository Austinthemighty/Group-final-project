<?php

require_once('connect.php');

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="index.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<body>
<a style="background-color: #000;"></a>
<nav style="background-color: #000;">
    <ul>
        
        <li><a href="index.php"><img src="images\ebox.png" style="height: 50px; padding-top: 10px" ></a></li>

    </ul>
    <div class="button">
        <a class="btn-open" href="#"></a>
    </div>
</nav>
<div class="overlay">
    <div> class="wrap">
        <ul> </ul>class="wrap-nav">
            <li><a href="about.php">About</a></li>
                </div>

                </>
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
    <title>E-box</title>
</head>
<body style="background-color: #1c1c1c;">
<div class="intro intro-tint">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Subscriptions</a></li>
            <li><a href="profile.php">Profile</a></li>
        </ul>
    </nav>
    <div class="intro-txt">
        <h1>Welcome</h1>
        <h2>to Ebox</h2>
        <h3>Supplying innovators with a surprise!</h3>
    </div>
</div>

<div class="midblock">
    <div class="text">
        <table style="width:90%;padding-top: 130px">
            <br>
            <br>
            <br>
            <tr class="row-1">
                <td><span>Subscriptions</span</td>
                <td><span>This weeks theme</span></td>
            </tr>
            <tr class="row-2">
                <td>We offer three subscriptions that holds two types <br>of gadgets and weekly themes.</td>
                <br>
                <td class="theme">Computer Hardware</td>
            </tr>
            <br>
            <br>
            <br>
            <br>
            <tr class="row-3">
                <td></td>
                <!--align this to the 'Computer hardware' text-->
                <td><a href="products.php">Check it</a></td>
            </tr>
        </table>
    </div>
</div>

<div class="closer">
    <!--photo on this one, the green box in the front of the house-->
    <h2>Sign-Up</h2>
    <!--font color #34b484-->
    <br>
    <br>
    <h3>The first box is on us!</h3>
    <!--white font/light grey tone-->
    <br>
    <br>
    <h4><a href="register.php">Register</a></h4>
    <!--make it so that when you hover the underline goes away and the text turns #34b484-->
    <!--h4 has white colored fonts and when hovered over a line on the bottom appears(#34b84)-->
</div>
<footer class="footer">
    <!--containing glyphicons of facebook, twitter, instgram, and pintrest-->
    <h1 style="color:#fff">footer text</h1>
</footer>
</body>


</html>