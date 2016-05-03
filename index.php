<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=subscriptdb','root','root');
}

catch(Exception $e) {

    echo "hello";
}

?>


<!DOCTYPE html>

<html>
<head>
    <title>Ebox</title>
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
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Work</a></li>
        <li><a href="#">Register</a></li>
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
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="#">Developers</a></li>
                </ul>
            </li>
            <li><a href="#">Services</a>
                <ul>
                    <li><a href="https://www.google.hr/">Science</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Engineering</a></li>
                    <li><a href="#">Arts</a></li>
                    <li><a href="#">Mathematics</a></li>
                </ul>
            </li>
            <li><a href="#">Register</a>
                <ul>
                    <li><a href="#">Log-in</a></li>
                    <li><a href="#">Sign-Up</a></li>
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

</body>
</html>
