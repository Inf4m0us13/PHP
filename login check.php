<?php

$uname = $_POST['uname'];
$pass = $_POST['pass'];

require "database connection.php";

$query = "select * from users where username = '$uname' and password = '$pass'";
$result = mysql_query($query);
$rows = mysql_num_rows($result);
if($rows < 1)
{
	echo "Username or Password Invalid.";
	
}
else	
{
	echo"You have succesfully logged in";
	session_start();
	$_SESSION['login'] = "1";
	$_SESSION['username'] = "$uname";
	header("Location: home.php");
	
}
	

?>