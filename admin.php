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
require_once ('authorize.php');
// Connect to the database
$dbh = new PDO('mysql:host=localhost;dbname=e-box', 'root', '');
// Retrieve the score data from MySQL
$query = "SELECT * FROM guitarwars ORDER BY score DESC, date ASC";
$stmt = $dbh->prepare($query);
$stmt->execute();
$result = $stmt ->fetchAll();
// Loop through the array of score data, formatting it as HTML
echo '<table>';
foreach ($result as $row) {
    // Display the score data
    echo '<tr class="scorerow"><td><strong>' . $row['name'] . '</strong></td>';
    echo '<td>' . $row['date'] . '</td>';
    echo '<td>' . $row['score'] . '</td>';
    echo '<td><a href="removescore.php?id=' . $row['id'] . '&amp;date=' . $row['date'] .
        '&amp;name=' . $row['name'] . '&amp;score=' . $row['score'] .
        '&amp;screenshot=' . $row['screenshot'] . '">Remove</a>';
    if($row['approved']== 0){
        echo ' / <a href="approvescore.php?id=' . $row['id'] . '&amp;date=' . $row['date'] .
            '&amp;name=' . $row['name'] . '&amp;score=' . $row['score'] .
            '&amp;screenshot=' . $row['screenshot'] . '">Approve</a></>';
    }
    echo '</td></tr>';
}
echo '</table>';
?>
</body>
</html>