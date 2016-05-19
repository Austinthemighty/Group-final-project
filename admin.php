<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The E-box: Admin Page</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2 style='font-family: "Monserrat", sans-serif;text-align:center'>The E-box: Admin Page</h2>
<p></p>
<hr />
​
<?php
session_start(); 
// Connect to the database
$dbh = new PDO('mysql:host=localhost;dbname=e-box', 'root', 'root');
// Retrieve the score data from MySQL
$query = "SELECT * FROM user ORDER BY email DESC, id ASC";
$stmt = $dbh->prepare($query);
$stmt->execute();
$result = $stmt ->fetchAll();
// Loop through the array of score data, formatting it as HTML
echo '<table style="background-color: #c1c1c1;text-align: center">';
foreach ($result as $row) {
    // Display the score data
    echo '<tr class="scorerow"><td><strong>' . $row['email'] . '</strong></td>';
    echo '<td class="username row"><strong>' . $row['id'] . '</strong>';
    echo '<td><a href="removeuser.php?id=' . $row['id']  . '&amp;email=' . $row['email'] . '&amp;password=' . $row['password'] . ' ">Remove</a>';
    echo '</td></tr>';}

echo '</table>';
?>
</body>
</html>