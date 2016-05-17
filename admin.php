<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>The E-box: Admin Page</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2>The E-box: Admin Page</h2>
<p></p>
<hr />
​
<?php
session_start();
require_once ('authorize.php');
require_once('connect.php');
// Connect to the database
$dbh = new PDO('mysql:host=localhost;dbname=e-box', 'root', 'root');
// Retrieve the score data from MySQL
$query = "SELECT * FROM user ORDER BY date DESC, date ASC";
$dbh = new PDO("mysql:host=localhost;dbname=e-box, 'root, 'root");
// Retrieve the score data from MySQL
$query = "SELECT * FROM user ORDER BY email DESC, date ASC";
$stmt = $dbh->prepare($query);
$stmt->execute();

$result = $stmt ->fetchAll();
// Loop through the array of score data, formatting it as HTML
echo '<table>';
foreach ($result as $row) {
    // Display the score data
    echo '<tr class="emailrow"><td><strong>' . $row['email'] . '</strong></td>';
    echo '<td>' . $row['date'] . '</td>';'</br>';
    echo '<td><a href="removeuser.php?id=' . $row['id'] . '&amp;date=' . $row['date'] .
        '&amp;email=' . $row['email'] .
        '">Remove</a>';
    if ($row['approved'] == 0) {
        echo ' / <a href="approveuser.php?id=' . $row['id'] . '&amp;date=' . $row['date'] .
            '&amp;email=' . $row['email'] . '&amp;password=' . $row['password'];
        echo '</td></tr>';
    }
    echo '</table>';
}?>
</body>
</html>