<!DOCTYPE html>
<?php

  session_start();

  if(isset($_POST['log-out'])){
    if(isset($_SESSION['pass'])){
      unset($_SESSION['pass']);
    }else{
      echo "<h1 style='color: red'>Nothing here</h1>";
    }
  }


?>
<html>
<head>
  <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
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
   
  <title>Profile</title>
</head>

<style lang='style-sheet'>
</style>
 
<body style='background-image: url("http://thatpressedlife.com/wp-content/uploads/2015/07/gift-boxes.jpg"); background-size: 120%; background-repeat: no-repeat; background-color: #787878;background-blend-mode: multiply;'>
  <?php
                                                                                                                //STYLE THIS SHEET
                                                                                                                //NOTHING BUT THE  email AND  img
                                                                                                                //ALSO A PHP FUNCTION TO DELETE THE SUBSCRIPTION
                                                                                                                //LOG-OUT FUNCTION    
  
  ?>
<!-- NEW NAV BAR-->
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
                                                                     <li><a href='profile.php'>profile</a></li>
                                                                     <form method='post'>
                                                                     <li><input type='submit' style='background-color:transparent;border-color: transparent;margin-left: 9px' value='Log-out'  name='log-out' /></li>
                                                                     </form>
                                                          </ul>
                             </div>";
                }
            ?>


</div>

 <!-- NEW NAV BAR-->

<div id="pricing" class="container-fluid price-img" style="">
    <div class="text-center">
        <h2>Your Subscription</h2>
    </div>
    <div class="row">
        
        <div class="col-sm-4 col-xs-9" style='margin-left: 33%'>
            <div class="panel text-center" style="background-color: #1c1c1c;">
                <div class="panel-heading" style="margin-bottom: 1px;height: 160px">
                    <?php
                    if(isset($_SESSION['id'])){
                    echo '<h2>' . $_SESSION['id'] . '</h2>';
                    }else{
                      echo'<h1>Nothing</h1>';
                    }
                    ?>
                    <h2 style='color:#e0e0e0'>Pro</h2>
                </div>
                <div class="panel-body">
                      <?php
                      if(isset($_SESSION['image'])){
                      echo '<img src = " ' .  $_SESSION['image'] . ' " style="height:400px;width:400px" />';
                      }else{
                        echo'<h2><a href="products.php"style="color:#34B484">Check out</a><span style="color: white"> the subscriptions.</span></h2>';
                      }
                      ?>
                    <p><strong>Discription</strong> here</p>
                </div>
                <div class="panel-footer">
                      <!--MODAL 1-->
                     <button type="button" class="btn " id='coo' data-toggle="modal" data-target="#myModal1" style='margin-top: 50px; border-radius: 0px; background-color: #1c1c1c;border-color: #c7c7c7'>Unsubscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--UPDATE FOOTER-->
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
<!--footer-->
</body>
</html>