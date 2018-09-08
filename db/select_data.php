<?php
require_once 'mysql_connect.php';

mysql_select_db("sms", $con);

$result = mysql_query("SELECT * FROM tbl_students");
while($row = mysql_fetch_array($result))
{
echo $row['name'] . " " . $row['mobile'];
echo "<br />";
}