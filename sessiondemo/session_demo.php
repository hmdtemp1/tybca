<?php
session_start();

$_SESSION['username'] = "iNEHALPATEL";
$_SESSION['email'] = "nehal.sdjic@gmail.com";

echo "Username :" . $_SESSION['username'];
echo "<br>email :" . $_SESSION['email'];

unset($_SESSION['username']);


//session_destroy();

?>