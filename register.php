<!DOCTYPE html>
<?php

session_start();

$title = 'Register';
require_once('connect.php');
require_once('header.php');

//-------------SIGN-UP.php-----------//
if (isset($_POST['submit-sp'])) {
    // Grab the profile data from the POST
    $id = trim($_POST['id']);
    $password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);
    $email = trim($_POST['email']);

    if (!empty($id) && !empty($password1) && !empty($email) && !empty($password2) && ($password1 == $password2)) {
        // Connect to the database
        $dbh = new PDO('mysql:host=localhost;dbname=e-box', 'root', 'root');

        // Make sure someone isn't already registered using this username
        $query = "SELECT * FROM user WHERE id = :id, password = :password1, email = :email";
        $stmt = $dbh->prepare($query);
        $stmt->execute(array(
            'id' => $id,
            'password'=>  $password1,
            'email' => $email
        ));
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

            $_SESSION['pass'] = $password1;

            // Confirm success with the user
            echo "<p>Your new account has been successfully ". $id ." created. You're now ready to <a href='register.php'>log in</a>.</p>";
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


//----------LOG-IN.php----
if(isset($_POST['submit-ln'])){
    //grabbing profile data from the POST
    $email = trim($_POST['email']);
    $password = trim($_POST['password1']);

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
                'email' => $email,
                'password' => $password1
            ));

            $_SESSION['email'] = $email;

            // Confirm success with the user
            echo "<p>You're signed in " . $email . ".</p>";
            exit();
        } else {
            // An account already exists for this username, so display an error message
            echo '<p class="error">Please enter all the information for proper log-in.</p>';
            $id = "";
        }
    }
    else {
            echo"<p>No information inserted!</p>";
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
<body style='background-image: url("https://pbs.twimg.com/media/CXVbrKjWcAASgHz.jpg");background-repeat: no-repeat;'>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Subscriptions</a></li>
        <li><a href="profile.php">Profile</a></li>
    </ul>
</nav>



<!---                                       REGISTER.PHP                                                             -->

<div class="reg-table" style="width: 899px;height: 320px;margin-left: 300px;margin-top: 112px">
<!--Log-in HTML-->
    <table id="regtab" style="width:80%;padding-left: 10%;margin-left: 200px;text-align: left">
        <tr>
            <td>
                <h1>Log-in</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="text-align: left">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?php if (!empty($id)) echo $id; ?>" /><br />
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password1" /><br />
                    <input type="submit" value="Sign Up" name="submit-ln" />
                </form>
                </div>
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

<div id="footer">
    <div class="container">
        <div class="row">

            <br>
            <div class="col-md-3" id="fot-txt">
                <center>
                    <a href="https://www.facebook.com"> <img src="http://ri2.sierraclub.org/sites/ri.sierraclub.org/files/Transparent-Facebook-Logo-Icon.png"  width='12%'> </a>
                    <br><br><br>

                    <a href="index.php"> <h4 class="footertext">home<br></a>

                </center>
            </div>
            <div class="col-md-3" id="fot-txt">
                <center>
                    <a href="https://www.instagram.com/accounts/login/?force_classic_login"> </a> <img src="https://cdn0.iconfinder.com/data/icons/shift-logotypes/32/Instagram-512.png"  width='12%'></a>
                    <br><br><br>

                    <a href="register.php"> <h4 class="footertext">register<br></a>
                </center>
            </div>
            <div class="col-md-3" id="fot-txt">
                <center>
                    <a href="https://twitter.com"> <img src="https://g.twimg.com/Twitter_logo_blue.png"  width='12%'></a>
                    <br><br><br>

                    <a href="products.php"> <h4 class="footertext">subscription<br> </a>

                </center>
            </div>
            <div class="col-md-3" id="fot-txt">
                <center>
                    <a href="https://www.pinterest.com"> </a> <img src="http://www.maylifestyle.com/wp-content/uploads/2013/02/icono-pinterest-color-04.png"  width='12%'></a>
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