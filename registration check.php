<?php

$uname = $_POST['uname'];
$pass = $_POST['pass'];

require 'database connection.php';

$query = "select * from users where username = '$uname'";
$result = mysql_query($query);
$rows = mysql_num_rows($result);
if ($rows == 0)
{
	$query = "insert into users values ('$uname',md5('$pass'))";
	$result = mysql_query($query)
		or die("Query failed: ". mysql_error());
	echo "You have succesfully registered";
	header('Location: login form.php');	
}
else
	echo "Username already existed";
?>