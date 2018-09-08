<?php

session_start();

$username = $_POST['username'];
$pwd = $_POST['password'];

//"SELECT * FROM tbl_users WHERE username='$username'"

if( ! mysql_num_rows($result) )
{
	//no record in database
}

$password = $row['password'];






if( $username == $username && $pwd == $password ){	
	echo "Hello " . $username;
		$_SESSION['is_logged_in'] =true;
} else {
	echo "You are not authorized to visit this page";
	$_SESSION['is_logged_in'] = false;
}

?>
