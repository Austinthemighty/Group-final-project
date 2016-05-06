<?php

session_start();

    $title = 'Sign Up';
    require_once('connect.php');
    require_once('header.php');

    if (isset($_POST['submit'])) {
        // Grab the profile data from the POST
        $id = trim($_POST['id']);
        $password1 = trim($_POST['password1']);
        $password2 = trim($_POST['password2']);
        $email = trim($_POST['email']);

        if (!empty($id) && !empty($password1) && !empty($email) && !empty($password2) && ($password1 == $password2)) {
            // Connect to the database
            $dbh = new PDO('mysql:host=localhost;dbname=e-box', 'root', 'root');

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


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" xmlns="http://www.w3.org/1999/html">
        <label for="id">Username:</label>
        <input type="text" id="id" name="id" value="<?php if (!empty($id)) echo $id; ?>" /><br />
        <label for="password">Password:</label>
        <input type="password" id="password1" name="password1" /><br />
        <label for="password2">Password (retype):</label>
        <input type="password" id="password2" name="password2" /><br />
        <label for="email">email:</label>
        <input type="text" id="email" name="email" /></br>
    <input type="submit" value="Sign Up" name="submit" />
</form>

<?php

//echo "<p>hello, ". $_SESSION['user_id'] . "</p>";
?>