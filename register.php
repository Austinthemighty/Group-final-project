<!DOCTYPE html>

<?php

session_start();

$title = 'Sign Up';
require_once('connect.php');
require_once('header.php');

//Sign-up.php-----
if (isset($_POST['submit-sp'])) {
    // Grab the profile data from the POST
    $id = trim($_POST['id']);
    $password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);
    $email = trim($_POST['email']);

    if (!empty($id) && !empty($password1) && !empty($email) && !empty($password2) && ($password1 == $password2)) {
        // Connect to the database
        $dbh = new PDO("mysql:host=$db_hostname;$db_name, $db_username, $db_password");


        // Make sure someone isn't already registered using this username
        $query = "SELECT * FROM user WHERE id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->execute(array('id' => $id));
        $result = $stmt->fetchAll();
        $count = $stmt->rowCount();

        if ($count == 0) {
            // The username is unique, so insert the data into the database
            $query = "INSERT INTO user (id, email, password) VALUES (:id, :email, SHA(:password))";
            $stmt = $dbh->prepare($query);
            $stmt->execute(array(
                'id'  =>  $id,
                'password'=>  $password1,
                'email' => $email
            ));
            // Confirm success with the user
            echo '<p>Your new account has been successfully created. You\'re now ready to <a href="register.php">log in</a>.</p>';
            exit();
        }
        else {
            // An account already exists for this username, so display an error message
            echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
            $id = "";
        }
    }
    else {
        echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';
    }
}
//Sign-up.php----

//Log-in.php----
if(isset($_POST['submit-ln'])){
    //grabbing profile data from the POST
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(!empty($email) && !empty($password)){
        //connection to database
        $dbh = new PDO("mysql:host=$db_hostname;$db_name, $db_username, $db_password");

        //check if the user is real
        $query = "SELECT * FROM user WHERE email = :email";
        $stmt = $dbh->prepare($query);
        $stmt->execute(array('email' => $email));
        $result = $stmt->fetchAll();
        $count = $stmt->rowCount();

        //switch around the if else in the if with the $count var and use the true statement to set up a $_SESSION to save around the site
        if($count == 1){
            //session_start();
            //here we assign the  entered username to be used to authorize the user to access a profile and
                    $query = "SELECT * FROM user WHERE email = :email";
                    $stmt=$dbh->prepare($query);
                    $stmt->execute(array(
                        'email' => $email
                    ));
                   
                   /*here the  session is given the id value that was submittedf in the form*/
                   $_SESSION['email'] = $email;
                   //session_destroy();
            echo '<p>Hello there ' . $_SESSION['email'] /* $email. */  . '</p>';
        }
    }else{
        echo '<p>please enter all information please.</p>';
    }
}
//Log-in.php----
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="products.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
  
</head>
<body id="myPage" data-target=".navbar" data-offset="60">

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
<div class="overlay">
    <div class="wrap">
        <ul class="wrap-nav">
            <li><a href="#">About</a>
                <ul>
                    <li><a href="about.php">About Company</a></li>
                    <li><a href="products.php">Admin</a></li>
                    <li><a href="#">Developers</a></li>
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
    </div>
</div>
    <!--nav bar-->

   
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
    

    <table style="width:100%">
        <tr>
            <td>
<div style="padding-left: 15%">
<h1>Log-in</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php if (!empty($id)) echo $id; ?>" /><br />
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" /><br />
    
    
    
    <!--             Button here to send the people to their  profile page             -->

    
    <input type="submit" value="Log In" name="submit-ln" />
</form>
<!--Log-in HTML-->
            </td>
            <td>
<!--Sign-up HTML-->
    <h1>Sign-up</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" xmlns="http://www.w3.org/1999/html">
        <label for="id">Username:</label>
        <input type="text" id="id" name="id" value="<?php if (!empty($id)) echo $id; ?>" /><br />
        <label for="password">Password:</label>
        <input type="password" id="password1" name="password1" /><br />
        <label for="password2">Password (retype):</label>
        <input type="password" id="password2" name="password2" /><br />
        <label for="email">email:</label>
        <input type="text" id="email" name="email" /></br>
        <input type="submit" value="Sign Up" name="submit-sp" />
    </form>
            </td>
            </tr>
    </table>
</div>
</body>
<!--Sign-up HTML-->
<?php
//echo "<p>hello, ". $_SESSION['user_id'] . "</p>";
?>
</html>