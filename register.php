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
  

//-------------SIGN-UP.php-----------//
if (isset($_POST['submit-sp'])) {
    // Grab the profile data from the POST
    $password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);
    $email = trim($_POST['email']);

    if ( !empty($password1) && !empty($email) && !empty($password2) && ($password1 == $password2)) {
        // Connect to the database
        $dbh = new PDO('mysql:host=localhost;dbname=e-box', 'root', 'root');

        // Make sure someone isn't already registered using this username
        $query = "SELECT * FROM user WHERE password = :password1 AND email = :email";
        $stmt = $dbh->prepare($query);
        $stmt->execute(array(
            ':password'=>  $password1,
            ':email' => $email
        ));
        $result = $stmt->fetchAll();
        $count = $stmt->rowCount();

        if ($count == 0) {
            // The username is unique, so insert the data into the database
            $query = "INSERT INTO user ( email, password) VALUES ( :email, SHA(:password))";
            $stmt = $dbh->prepare($query);
            $stmt->execute(array(
                ':password'=>  $password1
            ));

            // Confirm success with the user
            echo "<p style='color:red'>Your new account has been successfully ". $email ." created. You're now ready to <a href='register.php'>log in</a>.</p>";
            exit();
        }
        else {
            // An account already exists for this username, so display an error message
            echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
        }
    }
    else {
        echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';
    }
}
//Sign-up.php----


//----------LOG-IN.php----
if(isset($_POST['submit-ln'])){
    //grabbing profile data from the POST
    $email = trim($_POST['email']);
    $password1 = trim($_POST['password1']);

    if(!empty($email) && !empty($password)) {
        //connection to database
        $dbh = new PDO('mysql:host=localhost;dbname=e-box', 'root', 'root');

        //check if the user is real
        $query = "SELECT * FROM user WHERE id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $count = $stmt->rowCount();

        if ($count == 0) {
            // The username is unique, so insert the data into the database
            $query = "SELECT * FROM user (email, password) VALUES (:email, SHA(:password1))";
            $stmt = $dbh->prepare($query);
            $stmt->execute(array(
                ':password' => $password1
            ));

            $_SESSION['pass'] = $password1;

            // Confirm success with the user
            echo "<p>You're signed in " . $email . ".</p>";
            exit();
        } else {
            // An account already exists for this username, so display an error message
            echo '<p class="error" style="text-align: left;color:white">Please enter all the information for proper log-in.</p>';
            $id = "";
        }
    }
    else {
            echo"<p style='text-align: left;color:white'>No information inserted!</p>";
        } 

        //switch around the if else in the if with the $count var and use the true statement to set up a $_SESSION to save around the site

    }

//Log-in.php----
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
   
    <title>Register</title>
</head>
<body class='reg-bckgrnd'>
    <div class="'register" style="background-color: #1c1c1c;margin-left:170px;margin-right:170px;height: 520px">
    <!--UPDATE NAV BAR-->
 <!--<nav>
        <ul>
           
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Subscriptions</a></li>
            <li><a href="register.php">Sign-Up</a></li>
        </ul>
    </nav>
-->
 
 
 <!-- NEW NAV BAR-->
<div id='navo'>
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


<style>
.register{    
    background-color: #c1c1c1;
}
</style>


<!---                                       REGISTER.PHP                                                             -->
<!--add background color->
<div class="reg-table" style="width: 899px;height: 320px;margin-left: 300px;margin-top: 112px">
<!--Log-in HTML-->

    <table id="regtab" style="width:40%;padding-left: 10%;margin-left: 350px;text-align: left; padding-bottom: 60px;margin-bottom: 60px">
        <tr>
            <td>
                <h1 style="margin-top: 90px">Log-in</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="text-align: left">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?php if (!empty($id)) echo $id; ?>" /><br />
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password1" />
                    <br />
                    <input style="margin-top: 10px;" type="submit" value="Sign Up" name="submit-ln" />
                </form>
                <!--Log-in HTML-->
            </td>
            <td>
<!--margin -left 30px-->
                <!--Sign-up HTML-->
                <h1 style="margin-top: 90px;margin-left: 60px;">Sign-up</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="text-align: left;margin-left: 60px;">
                    
                    <label style='margin-bottom: 0px'for="email">email:</label>
                    <input type="text" id="email" name="email" style='margin-left:75px;'/></br>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password1" name="password1" style="margin-top: 10px"/><br />
                    
                    <label for="password2">Password (retype):</label>
                    <input type="password" id="password2" name="password2" style='margin-left:75px;'/><br />
                    
                    
                    
                    <input type="submit" value="Sign in" name="submit-sp" />
                </form>
            </td>
        </tr>
    </table>
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
</body>
    <!--Sign-up HTML-->
</html>