<?php

require_once 'mysql_connect.php';

if (mysql_query("CREATE DATABASE sms",$con))
{
	echo "Database created";
} else {
	echo "Error creating database: " . mysql_error();
}

mysql_select_db("sms", $con);

mysql_close($con);
?>