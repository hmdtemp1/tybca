<?php
require_once 'mysql_connect.php';

$result = mysql_query("SELECT * FROM tbl_students");
?>

<html>
	<head></head>
	<body>
	
		<h1>All the Students</h1>
		<a href="student_add.php">Add New Student</a>
		<br>
		<br>
		
		<table border="1px">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th colspan="2">Actions</th>
			</tr>
			
			<?php
			$k=1;
			while($row = mysql_fetch_array($result))
			{
			?>
			
			<tr>
				<td><?php echo $k++ ?></td>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['mobile'] ?></td>
				<td><a href="student_update.php?id=<?php echo $row['id']?>">Update</a></td>
				
				<td><a href="student_delete.php?id=<?php echo $row['id']?>">Delete</a></td>
			</tr>
			
			<?php } ?>
			
		</table>
	
	</body>
</html>