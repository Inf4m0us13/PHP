<?php

$connection = mysql_connect("localhost", "root", "")
	or die("Could not connect to server");

$db = mysql_select_db("database101", $connection)
	or die("Could not connect to database");

?>