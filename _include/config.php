<?php

	$mysql_hostname = "localhost";
	$mysql_user = "japan";
	$mysql_password = "j@pan";
	$mysql_database = "shop";
	$mysql_set_charset = "utf8";

	// Create connection


	$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
	
	// Check connection
	if (!$bd) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
?>