<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 5/4/16
 * Time: 4:06 PM
 */
//session start

/*
 *
 * button to execute the code to check
 * if (the session is set for a user-profile){
 *  to redirect them to a checkout.php
 *  save the product in a session to display on checkout.php
 * } else{
 *      redirect them to the sign-up.php
 * }
 *
 *
 * execute the function script
 *
 * inside index.php
 *
 *<?php include '1.php'; ?>
 *
 *<input type="button"> onclick="<?php THE SCRIPT FROM 1.php; ?>">
 *
 */
session_start();

    if(@$_POST['hi'])
    {
        if(isset($_SESSION['user_id']))
        {
            header("Location: sign-up.php");
        }
    }

?>

<script>

    </script>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Products</title>
    </head>
    <script>

    </script>
    <body>
    <form method="post">
        <button type="submit" value="1">Hello</button>
    </form>

    <button onclick="echoHello()">hello</button>
    </body>
</html>
