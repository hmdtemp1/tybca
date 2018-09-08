<?php

session_start();
$_SESSION['username'] = "iNehalPatel";
$_SESSION['email'] = "nehal.sdjic@gmail.com";
echo "USERNAME : " . $_SESSION['username'];
//session_destroy();

?>