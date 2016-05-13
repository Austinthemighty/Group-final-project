<?php
require_once ('connect.php');
require_once ('authorize.php');
?>
​
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>E-box - Approve a  User/Subscriber</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2> E-box - Approve a User/Subscriber</h2>
​
<?php


if (isset($_GET['id']) && isset($_GET['date']) && isset($_GET['email']) && isset($_GET['password'])) {
    // Grab the score data from the GET
    $id = $_GET['id'];
    $date = $_GET['date'];
    $email = $_GET['email'];
    $password = $_GET['password'];
}
else if (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password'])) {
    // Grab the score data from the POST
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
else {
    echo '<p class="error">Sorry, no user was specified for approval.</p>';
}

if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {
        // Connect to the database
        $dbh = new PDO('mysql:host=localhost;dbname=e-box', 'root', 'root');

        // Approve the score by setting the approved column in the database
        $query = "UPDATE user SET approved = 1 WHERE id = :id";

        $stmt = $dbh->prepare($query);
        $stmt->execute(array('id' => $id));
        // Confirm success with the user
        echo '<p>The high score of ' . $email . ' for ' . $password . ' was successfully approved.';
    }
    else {
        echo '<p class="error">Sorry,there was a problem approving the new subscriber.</p>';
    }
}
else if (isset($id) && isset($email) && isset($date) && isset($password)) {
    echo '<p>Are you sure you want to approve the following User/Subscriber?</p>';
    echo '<p><strong>Email: </strong>' . $email . '<br /><strong>Date: </strong>' . $date .
        '<br /><strong>Password: </strong>' . $password . '</p>';
    echo '<form method="post" action="approveuser.php">';
    echo '<input type="radio" name="confirm" value="Yes"/> Yes ';
    echo '<input type="radio" name="confirm" value="No" checked="checked"/> No <br />';
    echo '<input type="submit" value="Submit" name="submit"/>';
    echo '<input type="hidden" name="id" value="' . $id . '" />';
    echo '<input type="hidden" name="email" value="' . $email . '" />';
    echo '<input type="hidden" name="password" value="' . $password . '" />';
    echo '</form>';
}

echo '<p><a href="admin.php">&lt;&lt; Back to admin page</a></p>';
?>
​
</body>
</html>