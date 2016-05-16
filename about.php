	<?php
	require_once('connect.php');
	try {
	$dbh = new PDO("mysql:host=$db_hostname;$db_name, $db_username, $db_password");
	}

	catch(Exception $e) {

	}

	?>

<!DOCTYPE html>

<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
        <li><a href="register.php">Register</a></li>
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
                    <li><a href="register.php">Log-in</a></li>
                    <li><a href="register.php"">Sign-Up</a></li>
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
	

<div id="band" class="container text-center">
  <h3>E-BOX</h3>
  <p><em>Our company</em></p>
  <p>We have created a technology box subscription service. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <p class="text-center"><strong>Angel</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="https://www.sparklabs.com/forum/styles/comboot/theme/images/default_avatar.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p></p>
        <p></p>
        <p>Member since 2016</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Austin</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="https://www.sparklabs.com/forum/styles/comboot/theme/images/default_avatar.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p></p>
        <p></p>
        <p>Member since 2016</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Carlos</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="https://www.sparklabs.com/forum/styles/comboot/theme/images/default_avatar.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p></p>
        <p></p>
        <p>Member since 2016</p>
      </div>
    </div>
 <center>
    <div class="col-sm-3 pagination-centered text-center">
      <p class="text-center"><strong>Tyler</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="https://www.sparklabs.com/forum/styles/comboot/theme/images/default_avatar.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p></p>
        <p></p>
        <p>Member since 2016</p>
      </div>
    </div>
 </center>
  </div>
</div>
		<div class="container-fluid text-center">
		  <h2 class="logo-small">who we are</h2>
		  <h4></h4>
		  <br>
		  <div class="row">
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-user logo-small" ></span>
		      <h4>Customer Friendly</h4>
		      <p>We do our best to be the nicest and most customer friendly company in the world</p>
		    </div>
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-heart logo-small"></span>
		      <h4>Love</h4>
		      <p>we put love into every single box</p>
		    </div>
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-lock logo-small"></span>
		      <h4>Safety</h4>
		      <p>The products we ship are safe and secure</p>
		    </div>
		    </div>
		    <br><br>
		  <div class="row">
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-leaf logo-small"></span>
		      <h4>Green</h4>
		      <p>We do everything we can to make our company as eco friendly as possible</p>
		    </div>
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-certificate logo-small"></span>
		      <h4>Trusted</h4>
		      <p>We have numerous rewards for being the best company of 2016</p>
		    </div>
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-wrench logo-small"></span>
		      <h4>Work</h4>
		      <p>We work extra hard to make sure you get what you want</p>
		    </div>
		  </div>
		</div>

		<style>
			#googleMap {
			    width: 100%; /* Span the entire width of the screen */
			    height: 400px; /* Set the height to 400 pixels */
			    -webkit-filter: grayscale(100%);
			    filter: grayscale(100%); /* Change the color of the map to black and white * /
			}
			</style>

			<div id="googleMap"></div>

			<!-- Add Google Maps -->
			<script src="http://maps.googleapis.com/maps/api/js"></script>
			<script>
			var myCenter = new google.maps.LatLng(33.515078, -112.271546);

			function initialize() {
			var mapProp = {
			center:myCenter,
			zoom:12,
			scrollwheel:false,
			draggable:false,
			mapTypeId:google.maps.MapTypeId.ROADMAP
			};

			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

			var marker = new google.maps.Marker({
			position:myCenter,
			});

			marker.setMap(map);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
</script>

		<div class="container" style="background-color:#9AC5E9"   >
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em></em></p>
  <div class="row test" >
    <div class="col-md-4" >
      <p>leave us a message</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>phoenix, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: tyler-cantrell@westmec.org</p> 
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>

</body>
</html>
