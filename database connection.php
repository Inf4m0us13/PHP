<?php
#connecting to mysql server
$connection = mysql_connect("localhost", "root", "")
	or die("Could not connect to server");

#Connecting to the database
$db = mysql_select_db("database101", $connection)
	or die("Could not connect to database");

?>