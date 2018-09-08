<?php
require_once 'mysql_connect.php';

$delete_query = 'DELETE FROM tbl_students WHERE id=' . $_GET['id'];

mysql_query($delete_query);

mysql_close($con);

header('location:students.php');
exit;
?>