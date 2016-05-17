<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> E-box - Remove a user</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
<h2>E-box Remove a user/subscriber</h2>
    <title> E-Box - Remove a User</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<h2>E-Box - Remove a User</h2>
​
<?php
//require_once('appvars.php');
require_once('connect.php');

if (isset($_GET['id']) && isset($_GET['email']) && isset($_GET['password'])) {
    // Grab the score data from the GET
    $id = $_GET['id'];
    $email = $_GET['email'];
    $password = $_GET['password'];
} else if (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password'])) {
    // Grab the score data from the POST
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
} else {
    echo '<p class="error">Please select a profile to delete' . $_POST['email'] . '.</p>';
};

if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {
        // Connect to the database
        $dbh = new PDO('mysql:host=localhost;dbname=e-box', 'root', 'root');

        // Delete the score data from the database
        $query = "DELETE FROM user WHERE id = $id LIMIT 1";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();

        // Confirm success with the user
        echo '<p>The profile of ' . $email . ' for ' . $email . ' was successfully removed.';
    } else {
        echo '<p class="error">This user/subscriber was not removed.</p>';
    }
} else if (isset($id) && isset($email) && isset($password)) {
    echo '<p>Are you sure you want to delete the following profile?</p>';
    echo '<p><strong>E-mail: </strong>' . $email . '<br/>';
    echo '<p><strong>Name: </strong>' . $email . '<br /><strong>Date: </strong>' . $date .
        '<br /><strong>Password: </strong>' . $password . '</p>';
    echo '<form method="post" action="removeuser.php">';
    echo '<input type="radio" name="confirm" value="Yes" /> Yes ';
    echo '<input type="radio" name="confirm" value="No" checked="checked" /> No <br />';
    echo '<input type="submit" value="Submit" name="submit" />';
    echo '<input type="hidden" name="id" value="' . $id . '" />';
    echo '<input type="hidden" name="email" value="' . $email . '" />';
    echo '<input type="hidden" name="password" value="' . $password . '" />';
    echo '</form>';
};

echo '<p><a href="admin.php">&lt;&lt; Back to admin page</a></p>';
?>
​
</body>
</html>