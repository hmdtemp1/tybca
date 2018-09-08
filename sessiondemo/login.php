<?php

session_start();

?>

<html>
	<head>
		<title>Simple Login Form</title>
	</head>
	<body>
		<form action="doLogin.php" method="post">
			Username : <input type="text" name="username" />
			<br />
			Password : <input type="password" name="password" />
			
			<input type="submit" />
		</form>
	</body>
</html>