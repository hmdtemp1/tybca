<?php

	if( !empty($_POST['s_name']) ){
		echo "Hello " . $_POST['s_name'];
		echo "Age " . $_POST['s_age'];
	} else {
		echo "Please provide some data";
	}
?>