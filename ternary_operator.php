<?php
	// ternary Operator
	// condition ? TRUE : FALSE;

	//basic use
	$x = false;
	echo $x == true ? 'yes' : 'no';


	//ternary operator with assignment
	$lang = 'english';
	$lang = 'hindi';
	$greeting = $lang == 'hindi' ? 'Namaste' : 'Good Morning';

	echo "<br>";
	echo $greeting;


	//functions in ternary operators
	$message = 'Hello '.(is_logged_in() ? get_user_name() : 'Guest');
	echo "<br>";
	echo $message;

	function is_logged_in(){
		return FALSE;
	}

	function get_user_name(){
		return "Nehal Patel";
	}

	//self assignment in ternary operator
	/*$start = 0;
	 if( !$start ) {
	     $start = 1;
	}*/

	$start = 0;
	$start = $start ? $start : 1;
	//$end = $start ?: 1;

	echo "<br>";
	echo "Start :" . $start;

?>