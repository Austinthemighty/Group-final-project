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

    if(!empty($email) && !empty($password1)) {
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
                'password1' => $password1
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
<body>
<nav>
    <ul>
        <li><a href="index.php"><img src="images/ebox.png" alt="logo" style="height: 29px;width: 40px;margin-top: 0px;"></a></li>
        <li><a href="products.php">Subscriptions</a></li>
        <li><a href="#">Profile</a></li>
    </ul>
</nav>



<!---                                       REGISTER.PHP                                                             -->

<div style="padding-left: 10%">
<!--Log-in HTML-->
    <table id="regtab" style="width:100%">
        <tr>
            <td>
                <h1>Log-in</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?php if (!empty($id)) echo $id; ?>" /><br />
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password1" /><br />
                    <input type="submit" value="Sign Up" name="submit-ln" />
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

<footer class="footer" style="background-color: #373B43">
    <!--containing glyphicons of facebook, twitter, instgram, and pintrest-->
    <h1 style="color:#fff">footer text</h1>
</footer>
</body>
    <!--Sign-up HTML-->
</html>