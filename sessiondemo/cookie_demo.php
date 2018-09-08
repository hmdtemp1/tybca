<?php

$expire=time()+60*60*24;
setcookie("user", "Alex Porter", $expire);
//setcookie("user", "", time() - 3600);
?>

<html>
	<head>
		<title>Cookie Demo</title>
	</head>
	<body>
		<?php

			echo time();
			echo "<br>";
			echo time() + 60*60*24;
			echo "<br>";
			echo $_COOKIE['user'];
		?>
	</body>
</html>