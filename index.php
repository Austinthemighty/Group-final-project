<?php

session_start();
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

    <title>Ebox</title>
</head>
<body style="background-color: #1c1c1c;">
<div class="intro intro-tint">
  <!--old nav bar-->
<!--<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Subscriptions</a></li>
            <li><a href="register.php">Sign-Up</a></li>
            <?php
              // if(isset($_SESSION['password'])){
                //    echo "<div class='' style='margin-left: 1110px;'><li><a href='products.php'>Log-out</a></li></div>";
                //}
            ?>
        </ul>
    </nav>
  -->
  <!--old nav bar-->
  
  <!--NEW NAV BAR-->
  
<div id='navo' style='margin-left: 10%'>
<div id='list'>
<nav>
     <ul>
           <li><a href='index.php'>Home</a></li>
           <li><a href='products.php'>Products</a></li>
           <li><a href='register.php'>sign-up</a></li>
     </ul>
</nav> 
</div> 

            <?php
             if(isset($_SESSION['pass'])){
                    echo "<div class='dropdown'>
    <button class='btn dropdown-toggle' type='button' data-toggle='dropdown'>
    <span class='glyphicon glyphicon-user'></span>  Hello</button>
    <ul class='dropdown-menu'>
      <li><a href='#'>profile</a></li>
      <li><a href='#'>Log-out</a></li>
    </ul>
  </div>";
                }
            ?>


</div>
  <!--NEW NAV BAR-->
    <div class="intro-txt">
        <h1>Welcome</h1>
        <h2>to Ebox</h2>
        <h3>Supplying innovators with a surprise!</h3>
    </div>
</div>

<div class="midblock">
    <div class="text">
        <table style="width:96%;padding-top: 130px">
            <br>
            <br>
            <br>
            <tr class="row-1">
                <td><span>Subscriptions</span</td>
                <td><span>This weeks theme</span></td>
            </tr>
            <tr class="row-2">
                <!--align ''theme" with "This weeks theme"  & also "check it"-->
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
                <!--align this to the 'Computer hardware' text/ leave the green underline-->
                <td><a href="products.php" >Check it</a></td>
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
    <h3>Get 60% off the first box!</h3>
    <!--white font/light grey tone-->
    <br>
    <br>
    <h4><a href="register.php">Register</a></h4>
    <!--leave the underline there-->
</div>

<!--enlarge the icon and also the fonts's -->
<div id="footer">
    <div class="container">
        <div class="row">

            <br>
            <div class="col-md-3" id="fot-txt">
                <center>
                    <a href="https://www.facebook.com"> <img src="http://ri2.sierraclub.org/sites/ri.sierraclub.org/files/Transparent-Facebook-Logo-Icon.png"  width='20%'> </a>
                    <br><br><br>

                    <a href="index.php"> <h4 class="footertext">home<br></a>

                </center>
            </div>
            <div class="col-md-3" id="fot-txt">
                <center>
                    <a href="https://www.instagram.com/accounts/login/?force_classic_login"> </a> <img src="https://cdn0.iconfinder.com/data/icons/shift-logotypes/32/Instagram-512.png"  width='20%'></a>
                    <br><br><br>

                    <a href="contact.php"> <h4 class="footertext">contact<br></a>
                </center>
            </div>
            <div class="col-md-3" id="fot-txt" style='margin-top: 36px'>
                <center>
                    <a href="https://twitter.com"> <img src="https://g.twimg.com/Twitter_logo_blue.png"  width='20%'></a>
                    <br><br><br>

                    <a href="products.php"> <h4 class="footertext">subscription<br> </a>

                </center>
            </div>
            <div class="col-md-3" id="fot-txt">
                <center>
                    <a href="https://www.pinterest.com"> </a> <img src="http://www.maylifestyle.com/wp-content/uploads/2013/02/icono-pinterest-color-04.png"  width='20%'></a>
                    <br><br><br>

                    <a href="register.php"> <h4 class="footertext">register<br></a>
                </center>
            </div>
        </div>
        <div class="row">
            <p><center><a href="about.php">Contact us</a> <p class="footertext">Copyright @ <span style="color:#34b484;">E-box</span> 2016</p></center></p>
        </div>
    </div>
</div>
</body>
</html>