<?php

session_start();

$username = $_POST['username'];
$pwd = $_['password'];

if( $username == "sdjic" && $pwd == "123456" ){	

	$_SESSION['username'] = $username;
	$_SESSION['password'] = $pwd;

	echo "Hello " . $username;	
} else {
	echo "You are not authorized to visit this page";
?>
	Please click <a href="login.php">Back</a> to retry.
<?php	
}

?>
