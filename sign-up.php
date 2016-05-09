<?php

session_start();
    $title = 'Sign Up';
    require_once('connect.php');
    require_once('header.php');

    if (isset($_POST['submit'])) {
        // Grab the profile data from the POST
        $username = trim($_POST['username']);
        $password1 = trim($_POST['password1']);
        $password2 = trim($_POST['password2']);

        if (!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
            // Connect to the database
            $dbh = new PDO("mysql:host=$db_hostname;$db_name, $db_username, $db_password");

            // Make sure someone isn't already registered using this username
            $query = "SELECT * FROM user WHERE username = :username, password = :password";
            $stmt = $dbh->prepare($query);
            $stmt->execute(array('username' => $username,
            'password => $password'));
            $result = $stmt->fetchAll();
            $count = $stmt->rowCount();

            if ($count == 0) {
                // The username is unique, so insert the data into the database
                $query = "INSERT INTO user (username, password) VALUES (:username, SHA(:password))";
                $stmt = $dbh->prepare($query);
                $stmt->execute(array(
                    'username'  =>  $username,
                    'password'=>  $password1
                ));

                // Confirm success with the user
                echo '<p>Your new account has been successfully created. You\'re now ready to <a href="sign_in.php">log in</a>.</p>';

                exit();
            }
            else {
                // An account already exists for this username, so display an error message
                echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
                $username = "";
            }
        }
        else {
            echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';
        }
    }

    ?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php if (!empty($username)) echo $username; ?>" /><br />
        <label for="password1">Password:</label>
        <input type="password" id="password1" name="password1" /><br />
        <label for="password2">Password (retype):</label>
        <input type="password" id="password2" name="password2" /><br />
    <input type="submit" value="Sign Up" name="submit" />
</form>

<?php

echo "<p>hello, ". $_SESSION['user_id'] . "</p>";
?>