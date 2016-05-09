<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 5/4/16
 * Time: 5:15 PM
 */
session_start();

$_SESSION['user_id']='angel';

session_destroy();

?>