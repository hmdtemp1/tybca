<?php
$name_error ="";
$email_error ="";

if( !empty($_POST['btn_submit']) ){

	$is_validate = true;
	//validate all inputs
	$name = $_POST['sname'];
	$email = $_POST['semail'];
	
	if( empty($name) ){
		$name_error = 'User Name required';
		$is_validate = false;
	}	
	if( empty($email) ){
		$email_error = 'Email required';
		$is_validate = false;
	} elseif (! filter_var($email, FILTER_VALIDATE_EMAIL)) {	  
	  $email_error = "$email is not a valid email address";
	  $is_validate = false;
	}	

	if($is_validate){	
		//insert into DB
		require_once 'mysql_connect.php';

		$insert_query = 'INSERT INTO tbl_students (name, email, mobile) VALUES ("'. $_POST['sname'] .'", "'. $_POST['semail'] .'", "'. $_POST['smobile'] .'")';

		mysql_query($insert_query);
		mysql_close($con);

		header('location:students.php');
		exit;
	}
}
?>

<html>
	<head></head>
	<body>
	
		<script>
			function validate_form()
			{
				//validate inputes
				
				 var name = document.forms["frmStudent"]["sname"].value;
				if (name == "") {
					alert("Name must be filled out");
					return false;
				}
				
				var email = document.forms["frmStudent"]["semail"].value;
				if (email == "") {
					alert("email must be filled out");
					return false;
				}
				
				return true;
			}
		</script>
		
		<style>
			.error{
				color: red;
			}
		</style>
	
		<form  name="frmStudent" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
			Name: <input type="text" name="sname" value="<?php echo !empty($_POST['sname'])? $_POST['sname']:""; ?>" ><span class="error">* <?php echo $name_error ?></span>
			<br />
			<br />
			Email: <input type="text" name="semail" value="<?php echo !empty($_POST['semail'])? $_POST['semail']:""; ?>" ><span class="error">* <?php echo $email_error ?></span>
			<br />
			<br />
			Mobile: <input type="text" name="smobile" value="<?php echo !empty($_POST['smobile'])? $_POST['smobile']:""; ?>" ">
			<br />
			<br />
			
			<input name="btn_submit" type="submit" value="Add New Student">			
		</form>
	
	</body>
</html>