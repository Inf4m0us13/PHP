<?php

$uname = $_POST['uname'];
$pass = $_POST['pass'];

require 'database connection.php';

$query = "insert into users values ('$uname','$pass')";
$result = mysql_query($query)
	or die("Query failed: ". mysql_error());

echo "You have succesfully registered";
header('Location: login form.php');

?>