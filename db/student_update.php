<?php 

//we need a primary key ID
$id = $_GET['id'];

//get the data by that ID
require_once 'mysql_connect.php';
$result = mysql_query("SELECT * FROM tbl_students WHERE id=" . $id);
$row = mysql_fetch_array($result);

//Show data in appropriate inputs
?>

<html>
	<head></head>
	<body>
	
		<form method="post" action="updatestudent.php">
			<input type="hidden" name="id" value="<?php echo $row['id']?>" >
			<br />
			Name: <input type="text" name="sname" value="<?php echo $row['name']?>" >
			<br />
			Email: <input type="text" name="semail" value="<?php echo $row['email']?>" >
			<br />
			Mobile: <input type="text" name="smobile" value="<?php echo $row['mobile']?>" >
			<br />
			
			<input type="submit" value="Update Student">			
		</form>
	
	</body>
</html>