<?php

$uname = $_POST['uname'];
$pass = $_POST['pass'];

require "database connection.php";

$query = "select username from users where username = '$uname' and password = (select md5('$pass'))";
$result = mysql_query($query)
	or die("query failed: ". mysql_error());

if($rows == 0)
{
	echo "Username or Password Invalid.<br>";
	echo "<a href= 'register form.php'> Register </a> <br>";
	echo "<a href = 'login form.php'> Login </a>";
	
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