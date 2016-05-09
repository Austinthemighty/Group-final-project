<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 5/4/16
 * Time: 4:06 PM
 */
//session start

/*
 *
 * button to execute the code to check
 * if (the session is set for a user-profile){
 *  to redirect them to a checkout.php
 *  save the product in a session to display on checkout.php
 * } else{
 *      redirect them to the sign-up.php
 * }
 *
 *
 * execute the function script
 *
 * inside index.php
 *
 *<?php include '1.php'; ?>
 *
 *<input type="button"> onclick="<?php THE SCRIPT FROM 1.php; ?>">
 *
 */
session_start();

    if(@$_POST['hi'])
    {
        if(isset($_SESSION['user_id']))
        {
            header("Location: index.php");
            exit();
        }else{
            header("location: sign-up.php");
            exit();
        }
    }

?>

<script>

    </script>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Products</title>
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
                        <li><a href="#">Small</a></li>
                        <li><a href="#">Basic</a></li>
                        <li><a href="#">Premium</a></li>
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
    <div class="container-fluid">
        <h1>Subscriptions</h1>
        <p>Resize the browser window to see the effect.</p>
        <div class="row">
            <div class="col-sm-4" style="background-color:#34B484;height: 69px;width: 69px;">Small</div>
            <form method="post">
                <button type="submit" name="hi" value="1">Hello</button>
            </form>
            <div class="col-sm-8" style="background-color:#34B484;height: 69px;width: 69px;">Basic</div>
            <form method="post">
                <button type="submit" name="hi" value="1">Hello</button>
            </form>
            <div class="col-sm-8" style="background-color:#34B484;height: 69px;width: 69px;">Premium</div>
            <form method="post">
                <button type="submit" name="hi" value="1">Hello</button>
            </form>
            <div class="" style=""
        </div>
    </div>
    <!--Checking if the user has a profile or not to add the cart-->
    </body>
</html>
