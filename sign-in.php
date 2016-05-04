<?php
require_once('include/connect.php');
$title = 'Sign In';
require_once('structure/header.php');
// Start the session
session_start();

// Clear the error message
$error_msg = "";

// If the user isn't logged in, try to log them in
if (!isset($_SESSION['user_id'])) {
    if (isset($_POST['submit'])) {
        // Connect to the database
        $dbh = new PDO("mysql:host=$db_hostname;dbname=sidekick", $db_username, $db_password);

        // Grab the user-entered log-in data
        $user_username = trim($_POST['username']);
        $user_password = trim($_POST['password']);

        if (!empty($user_username) && !empty($user_password)) {
            // Look up the username and password in the database
            $query = "SELECT id, username FROM user WHERE username = :username AND password = SHA(:password)";
            $stmt = $dbh->prepare($query);
            $stmt->execute(array(
                'username'  =>  $user_username,
                'password'  =>  $user_password
            ));
            $result = $stmt->fetch();
            $count = $stmt->rowCount();

            if ($count == 1) {
                // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
                $username = $result['username'];
                $user_id = $result['id'];
                $_SESSION['id'] = $user_id;
                $_SESSION['username'] = $username;
                setcookie('id', $user_id, time() + (60 * 60 * 24 * 30));    // expires in 30 days
                setcookie('username', $username, time() + (60 * 60 * 24 * 30));  // expires in 30 days
                $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
                header('Location: ' . $home_url);
            }
            else {
                // The username/password are incorrect so set an error message
                $error_msg = 'Sorry, you must enter a valid username and password to log in.';
            }
        }
        else {
            // The username/password weren't entered so set an error message
            $error_msg = 'Sorry, you must enter your username and password to log in.';
        }
    }
}

// Insert the page header
$page_title = 'Log In';
require_once('structure/header.php');

// If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
if (empty($_SESSION['user_id'])) {
    echo '<p class="error">' . $error_msg . '</p>';
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <legend>Log In</legend>
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php if (!empty($user_username)) echo $user_username; ?>" /><br />
            <label for="password">Password:</label>
            <input type="password" name="password" />
        </fieldset>
        <input type="submit" value="Log In" name="submit" />
    </form>

    <?php
}
else {
    // Confirm the successful log-in
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
    echo('<a href="logout.php">Log Out</a>');
}
?>

<?php
// Insert the page footer
//require_once('footer.php');
?> 